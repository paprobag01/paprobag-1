<?php 
class SellerList extends CI_Controller{
	
	function __Construct()
	{

		parent::__construct();
		if(!$this->session->userdata('user_id'))
		{
				   redirect("cms/login");
		}
		
		$this->load->library('site_sentry');
		 $this->load->model('cms/product_model');
		
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
		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/sellerList_view',$data);
		$this->load->view('cms/footer_view',$data);
	
	}
	

}
?>