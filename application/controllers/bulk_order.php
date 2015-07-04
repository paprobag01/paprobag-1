<?php
class Bulk_order extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
	function index()
	{	
		
		$data = $this->common_model->get_head();
		
		$prod_data['where']="where section_id=5";
		$prod_data['table']='category';
		$prod_data['order_by']='';
		$data['prod_data'] = $this->common_model->getAllDetails($prod_data);
		
		$this->load->view('header',$data);
		$this->load->view('bulk_order_view',$data);
		$this->load->view('footer');
	}
}	
?>