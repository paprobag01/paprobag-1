<?php 
class Product extends CI_Controller{
	
	function __Construct(){

		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms/login");
				}
		$this->load->library('site_sentry');
		//$this->load->model('contact_model');
	}

	function index(){

		$data['page']='product';
		
		/*$arr['table']='home_details';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by id desc"; 
		$data['page_data']=$this->site_sentry->get_all($arr); */
		
		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/product_view',$data);
		$this->load->view('cms/footer_view',$data);
	
	}

}
?>