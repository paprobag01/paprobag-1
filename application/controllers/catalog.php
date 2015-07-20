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
		$data = $this->common_model->header_cart_details();

		// Get filters
		// Get subcategory ids
		$sub_cat_data['where']="where cat_id=$cat_id && section_id=$section_id";
		$sub_cat_data['table']='subcategory';
		$sub_cat_data['order_by']='';
		$sub_cat_ids = $this->common_model->getAllDetails($sub_cat_data);
		/*foreach ($sub_cat_ids as $key => $value) {
			$filter_data['where']="where sub_cat_id =".$value['sub_cat_id'];
			$filter_data['table']='filter_detail';
			$filter_data['order_by']='';
			$filter_details = $this->common_model->getDetail($filter_data);
			//print_r($filter_details);
			//die();
			extract($filter_details);

			// Get material filter details
			$material_ids_string = $material_IDs;
			

			if(strlen($material_ids_string) > 0)
			{
				$material_ids_array = explode(',', $material_ids_string);
				//print_r($material_ids_array);
				//die();
				
				
				foreach ($material_ids_array as $material_id) {
					$material_data['where']="where material_id = $material_id";
					$material_data['table']='material';
					$material_data['order_by']='';
					$data['material_data'] = $this->common_model->getDetail($material_data);
					
				}				
			}

			// Get gsm filter details
			$gsm_ids_string = $GSM_IDs;
			if(strlen($gsm_ids_string) > 0)
			{
				$gsm_ids_array = explode(',', $gsm_ids_string);
				//print_r($gsm_ids_array);
				//die();
				
				foreach ($gsm_ids_array as $gsm_id) {
					$gsm_data['where']="where GSM_IDs = $gsm_id";
					$gsm_data['table']='gsm';
					$gsm_data['order_by']='';
					$data['gsm_data'] = $this->common_model->getDetail($gsm_data);
				}				
			}

			// Get size filter details
			$size_ids_string = $size_IDs;
			if(strlen($size_ids_string) > 0)
			{
				$size_ids_array = explode(',', $size_ids_string);
				
				foreach ($size_ids_array as $size_id) {
					$size_data['where']="where size_id = $size_id";
					$size_data['table']='size';
					$size_data['order_by']='';
					$data['size_data'] = $this->common_model->getDetail($size_data);
				}				
			}

			// Get handle filter details
			$handle_ids_string = $handle_IDs;
			if(strlen($handle_ids_string) > 0)
			{
				$handle_ids_array = explode(',', $handle_ids_string);
				
				foreach ($handle_ids_array as $handle_id) {
					$handle_data['where']="where handle_id = $handle_id";
					$handle_data['table']='handle';
					$handle_data['order_by']='';
					$data['handle_data'] = $this->common_model->getDetail($handle_data);
				}				
			}

			// Get style filter details
			$style_ids_string = $style_IDs;
			if(strlen($style_ids_string) > 0)
			{
				$style_ids_array = explode(',', $style_ids_string);
				
				foreach ($style_ids_array as $style_id) {
					$style_data['where']="where style_id = $style_id";
					$style_data['table']='style';
					$style_data['order_by']='';
					$data['style_data'] = $this->common_model->getDetail($style_data);
				}
			}

			// Get print filter details
			$print_ids_string = $print_IDs;
			if(strlen($material_ids_string) > 0)
			{
				$material_ids_array = explode(',', $print_ids_string);
				
				foreach ($material_ids_array as $print_id) {
					$print_data['where']="where print_id = $print_id";
					$print_data['table']='print';
					$print_data['order_by']='';
					$data['print_data'] = $this->common_model->getDetail($material_data);
				}				
			}

			// Get lamination filter details
			$lamination_ids_string = $lamination_IDs;
			if(strlen($lamination_ids_string) > 0)
			{
				$lamination_ids_array = explode(',', $lamination_ids_string);
				
				foreach ($lamination_ids_array as $lamination_id) {
					$lamination_data['where']="where lamination_id = $lamination_id";
					$lamination_data['table']='lamination';
					$lamination_data['order_by']='';
					$data['lamination_data'] = $this->common_model->getDetail($lamination_data);
				}				
			}

			// Get special work filter details
			$spw_ids_string = $special_work_IDs;
			if(strlen($spw_ids_string) > 0)
			{
				$spw_ids_array = explode(',', $spw_ids_string);
				
				foreach ($spw_ids_array as $spw_id) {
					$spw_data['where']="where special_work_id = $spw_id";
					$spw_data['table']='special_work';
					$spw_data['order_by']='';
					$data['spw_data'] = $this->common_model->getDetail($spw_data);
				}				
			}			
		}
		// Get filters*/

		if($this->session->userdata('cart_id'))
		{
			$cart_id = $this->session->userdata('cart_id');
			$cart_details['where']="where cart_id=$cart_id";
			$cart_details['table']='cart_product';
			$cart_details['order_by']='';
			$data['cart_array'] = $this->common_model->getAllDetails($cart_details);

			//$sql=$this->db->query("select * from cart_product where cart_id=$cart_id");
			//$
			
			$cart_data = $data['cart_array'];//get the perticular array id to extract data.
			//print_r($cart_data);
			//die();
			
		

		}

		$data = $this->common_model->header_cart_details();

		$arr3['where']="where section_id=$section_id and cat_id=$cat_id";
		$arr3['table']='filters';
		$arr3['order_by']='';
		$data['material_data']=$this->common_model->getAllDetails($arr3);

		$data['cat_prod'] = $this->common_model->getdataprod($cat_id,$section_id);
		$data['page_data3'] = $this->common_model->getdatacat($cat_id,$section_id);		
		$data['sub_category_list'] = $this->common_model->getsubcategory($section_id,$cat_id);
		
		
		$data['wholesale_flag'] = $wholesale_flag;
		$data['page'] = "All Product";

		$this->load->view('header',$data);
		$this->load->view('filter_script');
		$this->load->view('product_catelog',$data);
		$this->load->view('footer');
	}

	function getProducts($wholesale_flag=null, $section_id=null, $cat_id=null, $sub_cat_id=null)
	{
		$data = $this->common_model->get_head();
		$data = $this->common_model->header_cart_details();
		
		if($this->session->userdata('cart_id'))
		{
			$cart_id = $this->session->userdata('cart_id');
			$cart_details['where']="where cart_id=$cart_id";
			$cart_details['table']='cart_product';
			$cart_details['order_by']='';
			$data['cart_array'] = $this->common_model->getAllDetails($cart_details);

			$cart_data = $data['cart_array'];//get the perticular array id to extract data.
			extract($cart_data);
			//print_r();
			
			if($this->session->userdata('cart_id'))
			{
				$cart_id = $this->session->userdata('cart_id');
				$cart_details['where']="where cart_id=$cart_id";
				$cart_details['table']='cart_product';
				$cart_details['order_by']='';
				$data['cart_array'] = $this->common_model->getAllDetails($cart_details);

				$cart_data = $data['cart_array']['0'];//get the perticular array id to extract data.
				extract($cart_data);
				//print_r();

				$cart_details['where']="where prod_id=$product_id";
				$cart_details['table']='products';
				$cart_details['order_by']='';
				$data['prod_array'] = $this->common_model->getAllDetails($cart_details);


			}
		
		}

		$arr1['where']="where section_id=$section_id and cat_id=$cat_id  and sub_cat_id=$sub_cat_id";
		$arr1['table']='products';
		$arr1['order_by']='';
		$data['sub_prod']=$this->common_model->getAllDetails($arr1);
		
		$arr2['where']="where section_id=$section_id and cat_id=$cat_id  and sub_cat_id=$sub_cat_id";
		$arr2['table']='subcategory';
		$arr2['order_by']='';
		$data['sub_prod_name']=$this->common_model->getAllDetails($arr2);

		
		
		$arr3['where']="where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id";
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
		$this->load->view('filter_script');
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
			//return $_POST['search_for'];
		}
	}

	function deletecart($id=null)
	{
		echo $id;
		//die();
		
		$this->db->where('cart_id',$id);
		$this->db->delete('cart');


	}

	function getmore($wholesale_flag=null, $section_id=null, $cat_id=null, $sub_cat_id=null, $prod_id=null)
	{

		$data = $this->common_model->get_head();
		$data = $this->common_model->header_cart_details();

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