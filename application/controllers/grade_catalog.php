<?php
class Grade_catalog extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
	function index()
	{
		
		$data = $this->common_model->get_head();
		
		$arr1['table']='category';
		$arr1['where']='';
		$arr1['order_by']='';
		$data['page_data1']=$this->common_model->getAllDetails($arr1);
		
		$arr2['table']='products';
		$arr2['where']='';
		$arr2['order_by']='';
		$data['page_data2']=$this->common_model->getAllDetails($arr2);
		
		
		$this->load->view('header',$data);
		$this->load->view('grade_sale');
		$this->load->view('footer');
	}
	
	function getProducts($id=null)
	{
		$data = $this->common_model->get_head();
		$arr1['table']='category';
		$arr1['where']='where section_id=5';
		$arr1['order_by']='';
		$data['page_data1']=$this->common_model->getAllDetails($arr1);		
		
		
		
		$this->load->view('header',$data);
		$this->load->view('product_catelog',$data);
		$this->load->view('footer');
	}
	
	
}	
?>