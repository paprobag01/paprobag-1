<?php 
class Common_model extends CI_Model
{
	function getAllDetails($data=null)
	{
		if(count($data)>0){
			
			$where=$data['where'];
			$table=$data['table'];
			//$order_by=$data['order_by'];
			//$sql=$this->db->query('select * from '.$table.' '.$where.' '.$order_by.'');
			$sql=$this->db->query('select * from '.$table.' '.$where.'');
			return $sql->result_array();
		}
	}

	function getdistinct_value($table,$column)
	{
		$sql = $this->db->query("SELECT DISTINCT $table.$column FROM $table");
		$result = $sql->result_array();
		return $result;
	}

	function getdistinct_id($table,$column1,$column2)
	{
		$sql = $this->db->query("SELECT DISTINCT $column2, $column1 FROM $table");
		$result = $sql->result_array();
		return $result;
	}

	function get_all_values($table,$column1,$column2){
		$sql = $this->db->query("SELECT $column2, $column1 FROM $table GROUP by $column2");
		$result = $sql->result_array();
		return $result;
	}
	
	function header_cart_details()
	{
		if($this->session->userdata('cart_id'))
		{
			// check cart_id is present or not in cart_product
			$cart_id = $this->session->userdata('cart_id');
			$cart_product_details['where']="where cart_id=".$this->session->userdata('cart_id');
			$cart_product_details['table']='cart_product';
			$cart_product_details['order_by']='';
			$cart_products = $this->common_model->getAllDetails($cart_product_details);
			
			if(count($cart_products) > 0) {
				// Get product ids and quantity and product total
				$product_id_array = array();
				$quantity_array = array();
				$product_wise_total_array = array();
				$product_name_array = array();
				$product_short_desc_array = array();
				$product_image_array = array();

				foreach ($cart_products as $key => $value) {
					$product_id_array[] = $value['product_id'];
					$quantity_array[] = $value['quantity'];
					$product_wise_total_array[] = $value['product_wise_total'];
					// get product
					$get_product['where']="where prod_id=".$value['product_id'];
					$get_product['table']='products';
					$get_product['order_by']='';
					$product = $this->common_model->getDetail($get_product);
					$product_name_array[] = $product['prod_name'];
					$product_short_desc_array[] = $product['prod_short_description'];
					$product_image_array[] = $product['prod_image'];
				}
				$data['product_id'] = $product_id_array;
				$data['quantity'] = $quantity_array;
				$data['product_wise_total'] = $product_wise_total_array;
				$data['product_name'] = $product_name_array;
				$data['product_short_desc'] = $product_short_desc_array;
				$data['product_image'] = $product_image_array;

				// Get cart total
				$cart_details['where']="where cart_id=".$this->session->userdata('cart_id');
				$cart_details['table']='cart';
				$cart_details['order_by']='';
				$cart = $this->common_model->getDetail($cart_details);
				$data['cart_total'] = $cart['cart_total'];
			} else {
				// cart empty
				$data['empty'] = true;
			}
		} else {
			// cart empty
			$data['empty'] = true;
		}

		return $data;
	}

	function getDetail($data=null)
	{
		if(count($data)>0){
			
			$where=$data['where'];
			$table=$data['table'];
			$order_by=$data['order_by'];
			$sql=$this->db->query('select * from '.$table.' '.$where.' '.$order_by.'');
			return $sql->row_array();
		}
	}

	function update_status($section_id,$cat_id,$sub_cat_id,$prod_id,$status)
	{
		
		
		if($status==1)
		{
			$new_status = 0;

		}
		else
		{
			$new_status = 1;
		}

		
		$data = array(
			
			'status' => $new_status,
			);

		$data1 = array(
			'section_id' => $section_id,
			'cat_id' => $cat_id,
			'sub_cat_id' => $sub_cat_id,
			'prod_id' => $prod_id,
			);
		$sql = $this->db->query("UPDATE products SET status=$new_status WHERE section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and prod_id=$prod_id");

		//$this->db->update('products',$data);
		//$this->db->set('status',$new_status);
		//$this->db->where('section_id',$section_id);
		//$this->db->where('cat_id',$cat_id);
		//$this->db->where('sub_cat_id',$sub_cat_id);
		//$this->db->where('prod_id',$prod_id);

		
		

	}

	function max_id_value($table,$column)
	{
		$query = $this->db->query("select max($column) from $table");
		$row=$query->result_array();
		return count($row);
	}

	function get_all_filter_product($per_page,$offset) 
	{
		$query = $this->db->get('products', $per_page, $offset);
		$row=$query->result_array();
		return $row;
	}

	function status_prod_list($status) 
	{
		$sql = $this->db->query("select * from products where product_status=$status");
	    $rst = $sql->result_array();

		return $rst;
	}

	function customize_prod_list($status) 
	{
		$sql = $this->db->query("select * from products where section_id=5 and product_status=$status");
	    $rst = $sql->result_array();

		return $rst;
	}

	function readyToprint_prod_list($status) 
	{
		$sql = $this->db->query("select * from products where section_id=6 and product_status=$status");
	    $rst = $sql->result_array();

		return $rst;
	}

	function readyTodeliver_prod_list($status) 
	{
		$sql = $this->db->query("select * from products where section_id=7 and product_status=$status");
	    $rst = $sql->result_array();

		return $rst;
	}

	function count_subcat($section_id,$cat_id,$sub_cat_id)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function count_material($section_id,$cat_id,$sub_cat_id,$material_id)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function count_GSM($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function count_size($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function count_style($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function count_handle($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function count_print($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle,$print)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle and print=$print");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function count_lamination($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle,$print,$lamination)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle and print=$print and lamination=$lamination");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function count_special_wrk($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle,$print,$lamination,$spl_wrl)
	{
		 
	    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle and print=$print and lamination=$lamination and spl_wrl=$spl_wrl");
	    $rst = $sql->result_array();

		return count($rst);
	}

	function search_result($for=null)
	{

		$this->db->select("*");
		$this->db->from('products');
		$this->db->like('prod_name',$for);
		$query = $this->db->get();

		$this->db->select("*");
		$this->db->from('material');
		$this->db->like('material',$for);
		$query1 = $this->db->get();

		

		return $query->result_array();

	}

	function search_subcat($section_id=null,$cat_id=null,$sub_cat_id=null)
	{
		$sql = $this->db->query("select * from subcategory where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id");
		return $sql->result_array();
	}

	function getcategorylist($section_id=null)
	{	

		$sql1 = $this->db->query("select * from category where section_id=$section_id");
		return  $sql1->result_array();

	}

	
	function getsubcatlist($section_id=null,$cat_id=null)
	{
		$sql = $this->db->query("select * from subcategory where section_id=$section_id and cat_id=$cat_id");
		return $sql->result_array();
	}

	function search_material($section_id=null,$cat_id=null,$sub_cat_id=null,$material_id=null)
	{
		$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id");
		return $sql->result_array();
	}

	function search_style($section_id=null,$cat_id=null,$sub_cat_id=null)
	{
		$sql = $this->db->query("select * from style_details where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id");
		return $sql->result_array();
	}

	function getfilterSize_product($style_id=null)
	{
		$sql = $this->db->query("select * from style_details where style_id=$style_id");
		return $sql->result_array();
	}

	function getfilterSize($style_id=null,$size=null)
	{
		$sql = $this->db->query("select * from products where style_id=$style_id and size=$size");
		return $sql->result_array();
	}

	// function getfilterGSM_product($section_id=null,$cat_id=null,$sub_cat_id=null,$material_id=null,$GSM_name=null)
	// {
	// 	$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and and GSM_name=$GSM_name");
	// 	return $sql->result_array();
	// }	

	function getfilterstyle_product($section_id=null,$cat_id=null,$sub_cat_id=null,$style_id=null)
	{
		$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and style_id=$style_id");
		return $sql->result_array();
	}

	function getfilterhandle($section_id=null,$cat_id=null,$sub_cat_id=null,$material_id=null,$GSM_name=null)
	{

		$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name");
		return $sql->result_array();
	}

	// function getfilterhandle_product($section_id=null,$cat_id=null,$sub_cat_id=null,$material_id=null,$GSM_name=null,$handle=null)
	// {
	// 	$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and and GSM_name=$GSM_name and handle=$handle");
	// 	return $sql->result_array();
	// }

	function getfilterprint($section_id=null,$cat_id=null,$sub_cat_id=null,$material_id=null,$GSM_name=null,$handle=null)
	{
		$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and handle=$handle");
		return $sql->result_array();
	}

	// function getfilterprint_product($section_id=null,$cat_id=null,$sub_cat_id=null,$material_id=null,$GSM_name=null,$size=null,$style=null,$handle=null,$print=null)
	// {
	// 	$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle and print=$print");
	// 	return $sql->result_array();
	// }
	// function getfilterlamination($section_id=null,$cat_id=null,$sub_cat_id=null,$material_id=null)
	// {
	// 	$size = $this->session->userdata('size_details');
 //    	$style = $this->session->userdata('style_id'); 
	// 	$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and size=$size and style_id=$style");
	// 	return $sql->result_array();
	// }

	// function getfiltersplwrk($section_id=null,$cat_id=null,$sub_cat_id=null,$material_id=null,$GSM_name=null,$size=null,$style=null,$handle=null,$print=null,$lamination=null)
	// {
	// 	$sql = $this->db->query("select * from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle and print=$print and lamination=$lamination");
	// 	return $sql->result_array();
	// }

	function checkuser($data=null)
	{
		try {
			$sql = $this->db->query("select * from login where (username='".$data['username']."' or email='".$data['username']."') and password='".$data['password']."' and email_verified = 1");

			$rowcount = $sql->num_rows();	
			
			if($rowcount>0)
			{
				return $sql->result_array();
			}
			else
			{
				return false;
			}
		} catch (Exception $e) {
			// print error
			redirect('/index','refrest');
		}
	}

	function getMobileNo($verificationText)
	{
		try {
			$sql = $this->db->query("select mobile_number from login where email_verification_code = '".$verificationText."'");

			$rowcount = $sql->num_rows();	
			
			if($rowcount>0)
			{
				return $sql->result_array();
			}
			else
			{
				return false;
			}
		} catch (Exception $e) {
			// print error
			redirect('/index','refrest');
		}
	}

	function getAllProducts($data){
			
		$start=0;
		$limit=8;

		if(isset($_GET['pagid']))
		{

			$pagid=$_GET['pagid'];
			$start=($pagid-1)*$limit;
		 $start;
		}
		else
		{
			$pagid=1;
		}
		if(count($data)>0){

			$where=$data['where'];
			$table=$data['table'];
			$sql=$this->db->query('select * from '.$table.' '.$where.' limit '.$start.', '.$limit.'');
			return array($sql->result_array(), $pagid);
		}
	}
	
	function getPagination($data=null)
	{
		
		if(count($data)>0){
		
			$where=$data['where'];
			$table=$data['table'];
			$order_by=$data['order_by'];
			
		$sql=$this->db->query('SELECT COUNT(*) as cnt FROM '.$table.' '.$where.'');
		$limit=8;

		foreach($sql->result_array() as $rw)
		{
			$rows=$rw['cnt'];
		}
		$total=ceil($rows/$limit);
		
		return array($total, $rows);
		}
	}

	//newly added
	function getdatacat($cat_id=null,$section_id=null)
	{
			
			$sql = $this->db->query("select * from category where cat_id=$cat_id and section_id=$section_id");
			return $sql->result_array();
	}

	function register($data=null)
	{
		try {
			$this->db->insert('login',$data);
		    return $this->db->insert_id();
		} catch (Exception $e) {
			// erro page
			$error = "Registration Error";
			return $error;
		}

	}

	function getdataprod($cat_id=null, $section_id=null )
	{
			$sql = $this->db->query("select * from products where cat_id=$cat_id and section_id = $section_id");
			return $sql->result_array();
			
	}
	
	function getsubprodimg($section_id=null,$cat_id=null,$sub_cat_id=null)
	{
			
			$sql = $this->db->query("select * from products where cat_id=$cat_id and section_id=$section_id and prod_id=$sub_cat_id");
			return $sql->result_array();
			
	}

	function getheader_subcatimg($section_id=null,$cat_id=null,$sub_cat_id=null)
	{
		
			$data = array(
				'section_id'=>$section_id,
				'cat_id' => $cat_id,
				'sub_cat_id' => $sub_cat_id,
				);
			
			$this->db->select("*");
		  $this->db->from('header_slider');
		  $this->db->where($data);		  
		  $query = $this->db->get();
		  return $query->result_array();
			
	}

	function getsubcat_relatedprod($array=null)
	{		
		$sub_cat_id;
		$section_id;
		$cat_id;
			$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."'");
			return $sql->result_array();
			
	}

	function getmaterial_relatedprod($array=null)
	{		
		
		//echo '<pre>';
		print_r(count($array));
		//echo '</pre>';
		
		$a = $this->session->userdata('size_details');
		$b = $this->session->userdata('style_id');	
		if (count($array)==5) {
			$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."'");
			return $sql->result_array();
		}
		else if(count($array)==6)
		{
					
			if ($a!=null && $b!=null) {
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and size=$a and style_id=$b");
				return $sql->result_array();
			}
			else
			{
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."'");
				return $sql->result_array();
			}
			
		}
		else if(count($array)==7)
		{					
			if ($a!=null && $b!=null) {
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and handle='".$array['6']."' and size=$a and style_id=$b");
				return $sql->result_array();
			}
			else
			{
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and handle='".$array['6']."'");
				return $sql->result_array();
			}
			
		}
		else if(count($array)==8)
		{
					
			if ($a!=null && $b!=null) {
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and handle='".$array['6']."' and print = '".$array['7']."' and size=$a and style_id=$b");
				return $sql->result_array();
			}
			else
			{
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and handle='".$array['6']."' and print = '".$array['7']."'");
				return $sql->result_array();
			}
			
		}
		else if(count($array)==9)
		{
				
			if ($a!=null && $b!=null) {
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and handle='".$array['6']."' and print = '".$array['7']."' and lamination='".$array['8']."' and size=$a and style_id=$b");
				return $sql->result_array();
			}
			else
			{
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and handle='".$array['6']."' and print = '".$array['7']."' and lamination='".$array['8']."'");
				return $sql->result_array();
			}
			
		}
		else if(count($array)==10)
		{
				
			if ($a!=null && $b!=null) {
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and handle='".$array['6']."' and print = '".$array['7']."' and lamination='".$array['8']."' and special_wrk='".$array['9']."' and size=$a and style_id=$b");
				return $sql->result_array();
			}
			else
			{
				$sql = $this->db->query("select * from products where cat_id='".$array['1']."' and section_id='".$array['0']."' and sub_cat_id='".$array['2']."' and material_id='".$array['4']."' and GSM_name='".$array['5']."' and handle='".$array['6']."' and print = '".$array['7']."' and lamination='".$array['8']."' and special_wrk='".$array['9']."'");
				return $sql->result_array();
			}
			
		}

			
			
	}	

	function getcategory($section_id=null)
	{
			$sql = $this->db->query("select * from category where section_id = $section_id");
			return $sql->result_array();
			
	}
	
	function getsubcategory($section_id=null,$cat_id=null)
	{
		$sql = $this->db->query("select * from subcategory where section_id = $section_id and cat_id=$cat_id");
		return $sql->result_array();
	}

	function getsubcategory_filter($section_id=null,$cat_id=null,$sub_cat_id=null)
	{
		$sql = $this->db->query("select * from filters where section_id = $section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id");
		return $sql->result_array();

	}
	
	function get_head()
	{
		$catIdArr="";
		$catNameArr="";
		
		$subCatIdArr="";
		$subCatNameArr="";	
		
		$arr['table']='sections';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 

		$data['section_data']=$this->site_sentry->get_all($arr); 
		
		foreach($data['section_data'] as $row)
		{
			$sql = $this->db->query("select * from category where section_id=".$row['section_id']);
			$result = $sql->result_array();
			
			foreach($result as $row1)
			{
				$catIdArr[$row['section_id']][]=$row1['cat_id'];
				$catNameArr[$row['section_id']][]=$row1['cat_name'];
				
				$sql1=$this->db->query("select * from subcategory where cat_id=".$row1['cat_id']." and section_id=".$row['section_id']);
				$res1=$sql1->result_array();
				//extract($res1);
				foreach($res1 as $subrow)
				{
				
					$subCatIdArr[$row['section_id']][$row1['cat_id']][] = $subrow['sub_cat_id'];
					$subCatNameArr[$row['section_id']][$row1['cat_id']][] = $subrow['sub_cat_name'];
				}
			}
		}
		
		$data['catIdArr']=$catIdArr;
		$data['catNameArr']=$catNameArr;
		$data['subCatIdArr']=$subCatIdArr;
		$data['subCatNameArr']=$subCatNameArr;

		

		
		return $data;
	}

	function add_to_cart($data=null)
	{
		try {
			$this->db->insert('cart',$data);
		    return $this->db->insert_id();
		} catch (Exception $e) {
			// erro page
			$error = "Error in Cart insert";
			return $error;
		}
	}

	function add_to_cart_product($data=null)
	{
		try {
			$this->db->insert('cart_product',$data);
		    return $this->db->insert_id();
		} catch (Exception $e) {
			// erro page
			$error = "Error in Cart product insert";
			return $error;
		}
	}

	function update_cart($data=null, $cart_id)
	{
		try {
			$this->db->where('cart_id', $cart_id);
			$this->db->update('cart', $data); 
		} catch (Exception $e) {
			// erro page
			$error = "Error in update cart";
			return $error;
		}
	}

	function update_cart_product($data=null, $cart_product_id)
	{
		try {
			$this->db->where('cart_product_id', $cart_product_id);
			$this->db->update('cart_product', $data); 
		} catch (Exception $e) {
			// erro page
			$error = "Error in update cart product";
			return $error;
		}
	}

	function remove_cart_product($cart_id=null,$product_id=null)
	{
		try
		{
			$this->db->where('cart_id', $cart_id);
			$this->db->where('product_id', $product_id);
			$this->db->delete('cart_product'); 
		} catch(Exception $e) {
			$error = "Error in update cart product";
			return $error;

		}
		
	}

	function get_seller_email_orgname($verificationText)
	{
		try {
			$sql = $this->db->query("select email, org_name from login where email_verification_code = '".$verificationText."'");

			$rowcount = $sql->num_rows();	
			
			if($rowcount>0)
			{
				return $sql->result_array();
			}
			else
			{
				return false;
			}
		} catch (Exception $e) {
			// print error
			redirect('/index','refrest');
		}
	}
}
?>