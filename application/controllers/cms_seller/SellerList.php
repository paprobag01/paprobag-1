<?php 
class SellerList extends CI_Controller{
	
	function __Construct()
	{

		parent::__construct();
		if(!$this->session->userdata('user_id'))
		{
				   redirect("cms_seller/login");
		}
		
		$this->load->library('site_sentry');
		 
		
	}

	function index()
	{

		$data['page']='SellerList';
		
		$arr['table']='products';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by prod_id desc"; 
		$data['page_data']=$this->site_sentry->get_all($arr);
		
		
		$data['type']='view';		
		$this->load->view('cms_seller/header_view',$data);
		$this->load->view('cms_seller/sellerList_view',$data);
		$this->load->view('cms_seller/footer_view',$data);
	
	}
	

}
?>