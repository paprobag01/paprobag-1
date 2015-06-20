<?php
class Login extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
		
	}
	function index()
	{
		$username = $this->input->post('username');
		$data = array(
			'username' => $username,
			'password' => md5($this->input->post('password')),
		);

		$result = $this->common_model->checkuser($data);
		foreach ($result as $row) {
			$sess_array = array(
	         'id' => $row['user_id'],
	         'username' => $row['username'],
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
		}
		redirect('/index', 'refresh');
		
		// $data = $this->common_model->get_head();

		// $this->load->view('header',$data);
		// $this->load->view('registration',$data);
		// $this->load->view('footer');	
	}
	function registration_form()
	{
		$data = $this->common_model->get_head();

		$this->load->view('header',$data);
		$this->load->view('registration',$data);
		$this->load->view('footer');	
	}
	function registration()
	{
		$data1 = $this->common_model->get_head();
		$username = $this->input->post('username');
		$data = array(
			'username' => $username,
			'first_name' => $this->input->post('fisrtname'),
			'last_name' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
		);

		$id = $this->common_model->register($data);

		$sess_array = array(
	        'id' => $id,
	        'username' => $username,
        );

        $this->session->set_userdata('logged_in', $sess_array);

	    redirect('/index', 'refresh');

	}
	function logout()
	{
		session_start();
		$this->session->unset_userdata('logged_in');
	   	session_destroy();
	   	redirect('/index', 'refresh');
	}
}