<?php
class Privacy_policy extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
	function index()
	{	
		
		$data = $this->common_model->get_head();
		
		
		$this->load->view('header',$data);
		$this->load->view('privacy_policy_view');
		$this->load->view('footer');
	}
}	
?>