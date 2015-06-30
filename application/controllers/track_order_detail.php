<?php
class Track_order_detail extends CI_Controller{
	
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
		$this->load->view('track_order_details_view');
		$this->load->view('footer');
	}
}	
?>