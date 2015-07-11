<?php 
class Seller_view extends CI_Controller{
	
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
		
		//$data['page']='productList';
		
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
		$this->load->view('cms_seller/seller_profile_view',$data);
		$this->load->view('cms_seller/footer_view',$data);
	}
	function save_products()
	{
		$id=$this->input->post('prod_id');
		$i=$this->product_model->Save_Products();
		if($i==1)
		{
			redirect('cms_seller/ProductList/add_products');
		}
		else if($i==2)
		{
			redirect('cms_seller/ProductList/viewEditProducts/'.$id.'/edit');
		}
		
	}
	function viewEditProducts($id=null, $type=null)
	{
	$result=$this->product_model->getProducts($id);
	
	$data['page']='productList';
	
	foreach($result as $row)
{//         
	$data['prod_id']=$row['prod_id'];
	$data['prod_name']=$row['prod_name'];
	$data['prod_price']=$row['prod_price'];//prod_meta_title prod_on_home
	$data['prod_meta_title']=$row['prod_meta_title'];
	$data['prod_meta_keyword']=$row['prod_meta_keyword'];
	$data['prod_meta_description']=$row['prod_meta_description'];
	$data['prod_description']=$row['prod_description'];
	$data['cat_id']=$row['cat_id'];
	//$data['section_id']=$row['section_id'];
	$data['prod_short_description']=$row['prod_short_description'];
	//$data['filter_val']=$row['filter_val'];
	$data['prod_sku']=$row['prod_sku']; 
	$data['prod_sub_categories']=$row['prod_sub_categories'];
	//echo $row['prod_sub_categories'];
	$data['filter_id']=$row['filter_id'];
	$data['prod_on_home']=$row['prod_on_home'];
	$data['prod_customizable']=$row['prod_customizable'];
	$data['created_on']=$row['created_on'];
	$data['prod_status']=$row['prod_status'];
	$data['prod_sell_price']=$row['prod_sell_price'];
	$data['prod_qty']=$row['prod_qty'];
	$data['sold_by']=$row['sold_by'];
	$data['prod_stock']=$row['prod_stock'];
	$data['prod_gift_card']=$row['prod_gift_card'];
	$data['prod_discount']=$row['prod_discount'];
	$data['require_shipping']=$row['require_shipping'];
	$data['url_for_product_details']=$row['url_for_product_details'];
	$data['prod_shipping_price']=$row['prod_shipping_price'];
	$data['image_url']=$row['prod_image'];
	$data['image_url1']=$row['prod_image1'];
	$data['image_url2']=$row['prod_image2'];
	$data['image_url3']=$row['prod_image3'];
	$data['image_url4']=$row['prod_image4'];
	$data['taggings']=$row['taggings'];
	$data['complete_the_look']=$row['complete_the_look'];
	$data['GSM_name'] = $row['GSM_name'];	
	$data['size'] = $row['size'];	
	$data['style'] = $row['style'];	
	$data['handle'] = $row['handle'];	
	$data['print'] = $row['print'];	
	$data['print_color'] = $row['print_color'];	
	$data['lamination'] = $row['lamination'];	
	$data['special_wrk'] = $row['special_wrk'];
	
}
$arr3['table']='sections';
		$arr3['where']="";
		$arr3['and']="";
		$arr3['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($arr3);
		
$data['type']=$type;
		$this->load->view('cms_seller/header_view',$data);
		$this->load->view('cms_seller/product_view',$data);
		$this->load->view('cms_seller/footer_view',$data);
	}
	function deleteProducts($id)
	{
		
		$this->db->where('prod_id', $id);
		$this->db->delete('products');
		/*$this->db->trans_start();
		$this->db->update('products'); 
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			
			return -2; 
		}
		else
		{
		   
			return redirect('cms/productList');
		}*/
		
		return redirect('cms_seller/productList');
		
	}

}
?>