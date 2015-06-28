<?php
class Catalog extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
		$this->load->library('encrypt');
	}

	function getall_catprod($wholesale_flag=null, $section_id=null, $cat_id=null)
	{
		$data = $this->common_model->get_head();	
		if($this->session->userdata('cart_id'))
		{
			$cart_id = $this->session->userdata('cart_id');
			$cart_details['where']="where cart_id=$cart_id";
			$cart_details['table']='cart_product';
			$cart_details['order_by']='';
			$data['cart_array'] = $this->common_model->getAllDetails($cart_details);

		}

		$arr3['where']="where section_id=$section_id and cat_id=$cat_id";
		$arr3['table']='filters';
		$arr3['order_by']='';
		$data['material_data']=$this->common_model->getAllDetails($arr3);

		$data['cat_prod'] = $this->common_model->getdataprod($cat_id,$section_id);
		$data['page_data3'] = $this->common_model->getdatacat($cat_id,$section_id);		
		$data['sub_category_list'] = $this->common_model->getsubcategory($section_id,$cat_id);
		
		$data['wholesale_flag'] = $wholesale_flag;

		$this->load->view('header',$data);
		$this->load->view('product_catelog',$data);
		$this->load->view('footer');
	}

	function getProducts($wholesale_flag=null, $section_id=null, $cat_id=null, $sub_cat_id=null)
	{
		$data = $this->common_model->get_head();
		if($this->session->userdata('cart_id'))
		{
			$cart_id = $this->session->userdata('cart_id');
			$cart_details['where']="where cart_id=$cart_id";
			$cart_details['table']='cart_product';
			$cart_details['order_by']='';
			$data['cart_array'] = $this->common_model->getAllDetails($cart_details);

		}

		$arr1['where']="where section_id=$section_id and cat_id=$cat_id  and sub_cat_id=$sub_cat_id";
		$arr1['table']='products';
		$arr1['order_by']='';
		$data['sub_prod']=$this->common_model->getAllDetails($arr1);
		
		$arr2['where']="where section_id=$section_id and cat_id=$cat_id  and sub_cat_id=$sub_cat_id";
		$arr2['table']='subcategory';
		$arr2['order_by']='';
		$data['sub_prod_name']=$this->common_model->getAllDetails($arr2);
		
		$arr3['where']="where section_id=$section_id and cat_id=$cat_id";
		$arr3['table']='filters';
		$arr3['order_by']='';
		$data['material_data']=$this->common_model->getAllDetails($arr3);
		
		$arr3['where']="where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id";
		$arr3['table']='filters';
		$arr3['order_by']='';
		$data['specific_material_data']=$this->common_model->getAllDetails($arr3);

		$data['page_data2'] = $this->common_model->getdataprod($cat_id,$section_id);
		$data['page_data3'] = $this->common_model->getdatacat($cat_id,$section_id);		
		$data['category_list'] = $this->common_model->getcategory($section_id);
		//$data['sub_prod'] = $this->common_model->getsubprod($cat_id,$section_id,$sub_cat_id);
		$data['wholesale_flag'] = $wholesale_flag;
		$data['sub_category_list'] = $this->common_model->getsubcategory($section_id,$cat_id);
		
		$this->load->view('header',$data);
		$this->load->view('product_sub_catelog',$data);
		$this->load->view('footer');
	}
	
	function getGSM($wholesale_flag=null, $section_id=null, $cat_id=null, $sub_cat_id=null,$material_type=null)
	{
		$arr3['where']="where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_name=$material_type";
		$arr3['table']='filters';
		$arr3['order_by']='';
		$data['GSM_data']=$this->common_model->getAllDetails($arr3);
	}
	
	function search_result()
	{
		if(isset($_POST['search_for']))
		{
			echo $_POST['search_for'];
			return $_POST['search_for'];
		}
	}

	function getmore($wholesale_flag=null, $section_id=null, $cat_id=null, $sub_cat_id=null, $prod_id=null)
	{

		$data = $this->common_model->get_head();
		if($this->session->userdata('cart_id'))
		{
			$cart_id = $this->session->userdata('cart_id');
			$cart_details['where']="where cart_id=$cart_id";
			$cart_details['table']='cart_product';
			$cart_details['order_by']='';
			$data['cart_array'] = $this->common_model->getAllDetails($cart_details);

		}
		
		$data['page_data5']=$this->common_model->getsubprodimg($section_id,$cat_id,$prod_id);
		$data['page_data2'] = $this->common_model->getdataprod($cat_id,$section_id);
		
		$_SESSION['last_seen_prod'][$prod_id]=array('prod_id'=>$prod_id);
		
		foreach($_SESSION['last_seen_prod'] as $key=>$val)
		{
			foreach($val as $k=>$v)
			{
				$arr1['where']="where prod_id=$v";
				$arr1['table']='products';
				$arr1['order_by']='';
				$last_seen_prod = $this->common_model->getAllDetails($arr1);	
				$n=0;
		
				foreach ($last_seen_prod as $row)
				{
					//echo $row['prod_id'];
					$prod_id="prod_id".$row['prod_id'];
					$prod_name="prod_Name".$row['prod_id'];
					$prod_image="prod_Image".$row['prod_id'];
					$prod_price="prod_Price".$row['prod_id'];
					
					if(isset($_COOKIE['count']) && !isset($_COOKIE[$prod_id]))
					{
						$n=intval($_COOKIE['count'])+1;
						setcookie('count', $n, time()+31556926 ,'/');
					}
					else {
						$n=$n+1;
						setcookie('count', $n, time()+31556926 ,'/');
					}
					
					if(!isset($_COOKIE[$prod_id]))
					{
						setcookie($prod_id,$row['prod_id'],time()+31556926 ,'/');
						setcookie($prod_name,$row['prod_name'],time()+31556926 ,'/');
						setcookie($prod_image,$row['prod_image'],time()+31556926 ,'/');
						setcookie($prod_price,$row['prod_price'],time()+31556926 ,'/');
					}
				}
			
			
			}
				
		}
		$this->load->view('header',$data);
		$this->load->view('product_view',$data);
		$this->load->view('footer');
	}	
}	
?>