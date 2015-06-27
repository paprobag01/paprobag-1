<?php 
class Common_model extends CI_Model
{
	function getAllDetails($data=null)
	{
		if(count($data)>0){
			
			$where=$data['where'];
			$table=$data['table'];
			$order_by=$data['order_by'];
			$sql=$this->db->query('select * from '.$table.' '.$where.' '.$order_by.'');
			return $sql->result_array();
		}
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

	

	function checkuser($data=null)
	{
		try {
			$sql = $this->db->query("select * from login where (username='".$data['username']."' or email='".$data['username']."') and password='".$data['password']."'");
			
			$rowcount = $sql->num_rows();	
			
			if($rowcount>0)
			{
				return $sql->result_array();
			}
			else
			{
				echo "Invalid User";
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
	
	function getsubprodimg($section_id=null,$cat_id=null,$prod_id=null)
	{
			
			$sql = $this->db->query("select * from products where cat_id=$cat_id and section_id=$section_id and prod_id=$prod_id");
			return $sql->result_array();
			
	}
	function getsubprod($section_id=null,$cat_id=null,$sub_cat_id=null)
	{
		echo 	$sub_cat_id;
		echo $section_id;
		echo $cat_id;
			$sql = $this->db->query("select * from products where cat_id=$cat_id and section_id=$section_id and sub_cat_id=$sub_cat_id");
			return $sql->result_array();
			
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

	function get_customizable_prods($cat_id=null,$sub_cat_id=null,$child_cat_id=null)
	{
		// section_id = 5 (because it is customizbae)

	}

	function get_readytoprint_prods($cat_id=null,$sub_cat_id=null,$child_cat_id=null)
	{
		// section_id = 6 (because it is readytoprint)
	}

	function get_readytodeliver_prods($cat_id=null,$sub_cat_id=null,$child_cat_id=null)
	{
		// section_id = 7 (because it is readytoprint)
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

	function remove_cart_product($data=null)
	{
		# code...
	}
}
?>