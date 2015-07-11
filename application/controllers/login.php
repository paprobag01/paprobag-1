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
			}
			redirect('/seller_profile', 'refresh');
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

		$data = array(
			'username' => $part[0],
			'name' => $name,
			'org_name' => $this->input->post('orgname'),
			'email' => $this->input->post('email_id'),
			'mobile_number' => $this->input->post('mob_no'),
			'password' => md5($this->input->post('password')),
			'role_id' => 5
		);

		$id = $this->common_model->register($data);
		
		$sess_array = array(
	        'id' => $id,
	        'username' => $part[0],
	        'role_id' => 5
        );

        $this->session->set_userdata('logged_in', $sess_array);

	    redirect('/verification', 'refresh');
	}

	function logout()
	{
		session_start();
		$this->session->unset_userdata('logged_in');
	   	session_destroy();
	   	redirect('/index', 'refresh');
	}
}