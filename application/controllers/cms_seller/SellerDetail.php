<?php 
class SellerDetail extends CI_Controller{
	
	function __Construct(){

		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms_seller/login");
				}
		
		$this->load->library('site_sentry');
		 $this->load->model('cms_seller/product_model');
		
	}

	
	function index()
	{
		
		$data['page']='details';
		
		/*$arr['table']='products';
		$arr['where']="where section_id=5";
		$arr['and']="";
		$arr['order_by']="order by prod_id desc"; 
		$data['customize_prod_list']=$this->site_sentry->get_all($arr); */

		
		$data['page']='productList';
		
		$arr['table']='products';
		$arr['where']="where section_id=5";
		$arr['and']="";
		$arr['order_by']="order by prod_id desc"; 
		$data['customize_prod_list']=$this->site_sentry->get_all($arr); 

		$arr['table']='products';
		$arr['where']="where section_id=6";
		$arr['and']="";
		$arr['order_by']="order by prod_id desc"; 
		$data['ready_to_print_prod_list']=$this->site_sentry->get_all($arr);

		$arr['table']='products';
		$arr['where']="where section_id=7";
		$arr['and']="";
		$arr['order_by']="order by prod_id desc"; 
		$data['ready_to_deliver_prod_list']=$this->site_sentry->get_all($arr);
		
		$arr1['table']='category';
		$arr1['where']="";
		$arr1['and']="";
		$arr1['order_by']="";
		
		$data['page_data1']=$this->site_sentry->get_all($arr1);
		
		$material['table']='filters';
		$material['where']="";
		$material['and']="";
		$material['order_by']="";		
		$data['material_data']=$this->site_sentry->get_all($material);
		
		
		
		$data['id']='';
		$data['prod_id']='';
		$data['prod_name']='';
		$data['prod_price']='';
		$data['prod_meta_title']='';
		$data['prod_meta_keyword']='';
		$data['prod_meta_description']='';
		$data['prod_description']='';
		$data['cat_id']='';
		$data['section_id']='';
		$data['sub_cat_id']='';
		$data['prod_short_description']='';//
		//$data['filter_val']='';
		$data['prod_sku']=''; 
		//$data['prod_sub_categories']='';
		//$data['filter_id']='';
		$data['prod_status']='';
		//$data['prod_on_home']='';
		$data['prod_customizable']='';
		$data['created_on']='';
		$data['prod_sell_price']='';//prod_sku created_on
		$data['prod_qty']='';
		$data['prod_stock']='';
		$data['sold_by']='';
		$data['prod_gift_card']='';
		$data['url_for_product_details']='';
		$data['require_shipping1']='';
		$data['require_shipping2']='';
		$data['prod_shipping_price']='';//
		$data['prod_discount']='';
		$data['image_url']='';
		$data['image_url1']='';
		$data['image_url2']='';
		$data['image_url3']='';
		$data['image_url4']='';//require_shipping1 require_shipping2
		$data['taggings']='';//complete_the_look
		$data['complete_the_look']='';
		//$data['material_name'] = $this->input->post('material_name');	
		$data['GSM_name'] = '';	
		$data['size'] = '';	
		$data['style'] = '';	
		$data['handle'] = '';	
		$data['print'] = '';	
		$data['print_color'] = '';	
		$data['lamination'] = '';	
		$data['special_wrk'] = '';
	
		$arr3['table']='sections';
		$arr3['where']="";
		$arr3['and']="";
		$arr3['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($arr3);
		
		
		$data['type']='add';		
		$this->load->view('cms_seller/header_view',$data);
		$this->load->view('cms_seller/seller_details_view',$data);
		$this->load->view('cms_seller/footer_view',$data);
	}
	
	
	

}
?>