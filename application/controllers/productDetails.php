<?php
class ProductDetails extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_Model');
		
	}
	function index()
	{
		
		$catArr="";
		$catNameArr="";
		$subCatNameArr="";
		$subCatArr="";
		$subCatIdArr="";
		$subCatIdArr="";
		$sectionNameArr=array();
		$arr['table']='sections';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 
		$catIdArr="";

		$data['section_data']=$this->site_sentry->get_all($arr); 
		foreach($data['section_data'] as $row)
		{
			$sql=$this->db->query("select * from category where section_id=".$row['section_id']." and cat_type=1" );
			$res=$sql->result_array();
			//$catArr[$row['section_id']][]=$res;
			foreach($res as $rw)
			{
			$catIdArr[$row['section_id']][]=$rw['cat_id'];
			$catNameArr[$row['section_id']][]=$rw['cat_name'];
				
			$catIdArr=explode(",",$rw['child_cat_id']);
				for($i=0;$i<count($catIdArr);$i++)
				{
					$sql1=$this->db->query("select * from category where cat_id=".$catIdArr[$i]." and section_id=".$row['section_id']." and cat_type=2" );
					$res1=$sql1->row_array();
					extract($res1);
					$subCatNameArr[$row['section_id']][$rw['cat_id']][]=$cat_name;
				}
			}
		}
			$prod = $this->db->query("SELECT * FROM `products` WHERE `prod_id`=70");
			$res2=$prod->row_array();
		//print_r($subCatNameArr[6]); die;
		$data['catIdArr']=$catIdArr;
		$data['sectionNameArr']=$sectionNameArr;
		$data['catArr']=$catArr;
		$data['catNameArr']=$catNameArr;
		$data['subCatArr']=$subCatArr;
		
		
		$data['subCatNameArr']=$subCatNameArr;
		$data['subCatIdArr']=$subCatIdArr;
		$data['subCatIdArr']=$subCatIdArr;
		
		//newly added code//
		$data['prod_data']=$res2;
		
		$this->load->view('header',$data);
		$this->load->view('product_view',$data);
		$this->load->view('footer');
	}
	function getDetails($id=null)
	{
		$prodid=$id;
		$arr['where']="where prod_id=$prodid and deleted=0";
		$arr['table']='products';
		$arr['order_by']='';
		$data['page_data']=$this->common_Model->getDetail($arr);
		$catid=intval($data['page_data']['cat_id']);
		
		$_SESSION['last_seen_prod_id'][$id]=array('prod_id'=>$id);
		
		$data['readyToPrint']=$data['page_data']['ready_to_print'];
		//echo $data['readyToPrint']; die;
		foreach($_SESSION['last_seen_prod_id'] as $key=>$val)
		{
		
		foreach($val as $k=>$v)
		{
				
			$arr1['where']="where prod_id=$v and deleted=0";
			$arr1['table']='products';
			$arr1['order_by']='';
			$last_seen_data=$this->common_Model->getAllDetails($arr1);
			
					
			
			$n=0;
			
			foreach ($last_seen_data as $row)
			{
				
				
				$prod_id="prodId".$row['prod_id'];
				$prod_name="prodName".$row['prod_id'];
				$prod_image="prodImage".$row['prod_id'];
				$prod_price="prodPrice".$row['prod_id'];
				
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
		
		$arr1['where']="where cat_id=$catid and deleted=0";
		$arr1['table']='products';
		$arr1['order_by']='';
		$data['page_data1']=$this->common_Model->getAllDetails($arr1);
		//print_r($data['page_data1']);die;
		$arr3['where']="where cat_id=$catid and deleted=0";
		$arr3['table']='categories';
		$arr3['order_by']='';
		$data['page_data3']=$this->common_Model->getDetail($arr3);
		//print_r($data['page_data3']);die;
		$arr2['where']="where deleted=0";
		$arr2['table']='categories';
		$arr2['order_by']='';
		$data['page_data2']=$this->common_Model->getAllDetails($arr2);
		
		$this->load->view('header',$data);
		 $this->load->view('productDetails_view',$data);
		 $this->load->view('footer');
	}
}	
?>