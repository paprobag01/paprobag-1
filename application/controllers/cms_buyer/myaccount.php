<?php 
class Myaccount extends CI_Controller{
	
	function __Construct(){

		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms_seller/login");
				}
		
		$this->load->library('site_sentry');
		 $this->load->model('cms_buyer/product_model');
		
	}

	
	function index()
	{
		
		$data['page']='productList';
		
		/*$arr['table']='products';
		$arr['where']="where section_id=5";
		$arr['and']="";
		$arr['order_by']="order by prod_id desc"; 
		$data['customize_prod_list']=$this->site_sentry->get_all($arr); */

		
		
		
		
		$data['type']='add';		
		$this->load->view('cms_buyer/header_view',$data);
		$this->load->view('cms_buyer/myaccount_view',$data);
		$this->load->view('cms_buyer/footer_view',$data);
	}
	
	
	

}
?>