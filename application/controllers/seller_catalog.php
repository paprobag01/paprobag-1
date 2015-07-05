<?php
class seller_catalog extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
	function index()
	{	
		
		$data = $this->common_model->get_head();
		
		$section_data['where']="";
		$section_data['table']='sections';
		$section_data['order_by']='';
		$data['section'] = $this->common_model->getAllDetails($section_data);
		
		
		$this->load->view('header',$data);
		$this->load->view('seller_catalog_view',$data);
		$this->load->view('footer');
	}
}	
?>