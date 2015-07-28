<?php
// login role id
// role_id = 5 (seller)
// role_id = 2 (customer)

class Login extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
		$this->load->model('HomeModel');
		$this->load->model('EmailModel');		
	}
	
	// To show user login page
	function index()
	{
		$username = $this->input->post('username');
		$data = array(
			'username' => $username,
			'password' => md5($this->input->post('password')),
		);

		$result = $this->common_model->checkuser($data);
		
		if($result){
			foreach ($result as $row) {
				$sess_array = array(
		         'id' => $row['user_id'],
		         'username' => $row['username'],
		         'role_id' => $row['role_id']
		       );
		       $this->session->set_userdata('logged_in', $sess_array);
			}
			redirect('/index', 'refresh');
		} else {
			// enable to login
			redirect('index', 'refresh');
		}
	}

	// To show seller login page
	function seller_login()
	{
		$username = $this->input->post('username');
		$data = array(
			'username' => $username,
			'password' => md5($this->input->post('password')),
		);

		$result = $this->common_model->checkuser($data);
		
		if($result){
			foreach ($result as $row) {
				$sess_array = array(
					'id' => $row['user_id'],
					'username' => $row['username'],
					'role_id' => $row['role_id']
		       	);
		       	$this->session->set_userdata('logged_in', $sess_array);
				$account_status = $row['account_status'];
			}
			if ($account_status == 'Yes') {
				redirect('/seller_profile', 'refresh');
			} else {
				$data = $this->common_model->get_head();
		
				$error = array( 'success' => true, 'error' => false); 
				$data['errormsg'] = $error;				

				$this->load->view('header',$data);
				$this->load->view('seller_detail_view', $data);
				$this->load->view('footer');
			}
		} else {
			// enable to login
			redirect('seller_page', 'refresh');
		}
	}

	// To show user registration form
	function registration_form()
	{
		$data = $this->common_model->get_head();

		$this->load->view('header',$data);
		$this->load->view('registration',$data);
		$this->load->view('footer');	
	}
	
	// Register user
	function registration()
	{
		$username = $this->input->post('username');
		$data = array(
			'username' => $username,
			'first_name' => $this->input->post('fisrtname'),
			'last_name' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'role_id' => 2
		);

		$id = $this->common_model->register($data);

		$sess_array = array(
	        'id' => $id,
	        'username' => $username,
	        'role_id' => 2
        );

        $this->session->set_userdata('logged_in', $sess_array);

	    redirect('/index', 'refresh');

	}

	// Seller Registration
	function seller_registration()
	{
		$name = $this->input->post('sellername');
		
		$part = preg_split('/\s+/', $name);

		$verificationtext = md5(uniqid(rand(), true));

		$data = array(
			'username' => $part[0],
			'name' => $name,
			'org_name' => $this->input->post('orgname'),
			'email' => $this->input->post('email_id'),
			'mobile_number' => $this->input->post('mob_no'),
			'password' => md5($this->input->post('password')),
			'role_id' => 5,
			'email_verification_code' => $verificationtext,
			'account_status' => 'No'
		);

		$id = $this->common_model->register($data);
		$this->sendVerificationEmail($this->input->post('email_id'), $verificationtext);
		
		// Set the session
		$sess_array = array(
	        'id' => $id,
	        'username' => $part[0],
	        'role_id' => 5
        );

        $this->session->set_userdata('logged_in', $sess_array);

        // show email verification message
        $error = array( 'success' => false, 'error' => true);
		$data['errormsg'] = $error;

	    $this->load->view('header',$data);
		$this->load->view('seller_detail_view',$data);
		$this->load->view('footer');
	}

	function verify($verificationText=NULL){
		$data = $this->common_model->get_head(); 
		$noRecords = $this->HomeModel->verifyEmailAddress($verificationText);  

		$error = array( 'success' => true, 'error' => false); 
		$mobile_data = $this->common_model->getMobileNo($verificationText);
		$mobile_number = $mobile_data[0]['mobile_number'];

		// Call the Cognalys api
		$app_id = '876386c270d54e3e8b55dd7';
		$access_token = '5e0a726cd84178bacd6fe1d8e590b7fbce4d3d8b';
		$url = "http://www.cognalys.com/api/v1/otp/?app_id=".$app_id."&access_token=".$access_token."&mobile=".$mobile_number;

		$ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $tmp = curl_exec($ch);
        curl_close($ch);
        $json_data = json_decode($tmp);
		
		$data['keymatch'] = $json_data->keymatch;
		$data['otp_start'] = $json_data->otp_start;
		
		$data['errormsg'] = $error;
		
		$this->load->view('header',$data);
		$this->load->view('seller_detail_view', $data);
		$this->load->view('footer');
	}

	function register_seller_info()
	{
		$email_id = $this->input->post('email_id');
		$address_1 = $this->input->post('address_1');
		$address_2 = $this->input->post('address_2');
		$zipcode = $this->input->post('zipcode');
		$city = $this->input->post('city');
		$state = $this->input->post('state');

		// update mobile_number_verified column in login table
		$data = array(
           'mobile_number_verified' => 1
        );

		$this->db->where('email', $email_id);
		$this->db->update('login', $data); 
		// Insert Seller info in seller table
		$data = array(
		   'email_id' => $email_id,
		   'address_1' => $address_1,
		   'address_2' => $address_2,
		   'zipcode' => $zipcode,
		   'city' => $city,
		   'state' => $state
		);

		$this->db->insert('seller', $data); 
	}
	function _isCurl(){
	    return function_exists('curl_version');
	}

	function sendVerificationEmail($email, $verificationtext){  
		$this->EmailModel->sendVerificatinEmail($email,$verificationtext);
	}

	function sendoredrEmail(){  		
		$email = $_POST['email'];
		
		$data['Product Name'] = 'Product Name : Paper Bag';
		$this->EmailModel->sendoredr_By_Email($email,$data);
		
		
	}

	function logout()
	{
		session_start();
		$this->session->unset_userdata('logged_in');
	   	session_destroy();
	   	redirect('/index', 'refresh');
	}
}