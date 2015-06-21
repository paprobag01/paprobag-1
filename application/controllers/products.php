<?php
class Products extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_Model');
		
	}
	function index($id=null)
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
			//$prod = $this->db->query("SELECT * FROM `products` WHERE `prod_id`=70");
			//$res2=$prod->row_array();
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
		$arr['where']="where prod_id=$prodid";
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
				
			$arr1['where']="where prod_id=$v";
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
		
		$arr1['where']="where cat_id=$catid";
		$arr1['table']='products';
		$arr1['order_by']='';
		$data['page_data1']=$this->common_Model->getAllDetails($arr1);
		//print_r($data['page_data1']);die;
		$arr3['where']="where cat_id=$catid";
		$arr3['table']='products';
		$arr3['order_by']='';
		$data['page_data3']=$this->common_Model->getDetail($arr3);
		//print_r($data['page_data3']);die;
		$arr2['where']="";
		$arr2['table']='categories';
		$arr2['order_by']='';
		$data['page_data2']=$this->common_Model->getAllDetails($arr2);
		
		$this->load->view('header',$data);
		 $this->load->view('catalog_view',$data);
		 $this->load->view('footer');
	}
	function getProducts($id=null,$prodType=null)
			{
				//echo $prodType; die;
				
			//	echo $this->convertCurrency();die;
				
				if(isset($prodType) && $prodType!="custm" && $prodType!="printready")
				{
					$arr7['where']="";
					$arr7['table']='products';
					$arr7['order_by']='';
					$data['page_data']=$this->common_model->getAllDetails($arr7);
					$data['prodType']=$prodType;
					
					$arr8['where']="where ready_to_deliver=$prodType";
					$arr8['table']='categories';
					$arr8['order_by']='order by cat_position';
					$data['page_data8']=$this->common_model->getAllDetails($arr8);
					$subcatArr="";
				//	print_r($data['page_data8']); die;
				foreach ($data['page_data8'] as $row)
				{
					$catid= $row['cat_id'];
					$arr9['where']="where cat_id=$catid";
					$arr9['table']='subcategories';
					$arr9['order_by']='';
					$subcatArr[]=$this->common_model->getAllDetails($arr9);
				}
				
				$data['page_data9']=$subcatArr;
					/*
					if($prodType==1)
					{
					$data['category_name']="Retail";
					}
					if($prodType==2)
					{
						$data['category_name']="Offers";
					}
					if($prodType==3)
					{
						$data['category_name']="Wholesale";
					}
					foreach($data['page_data'] as $row)
					{
						$catid=$row['cat_id'];
					}
					*/
					//print_r($data['page_data7']); die;
				}
				else {
					
					
					$arr5="";
					if($prodType=='custm')
					{
						$arr5['where']="where cat_id=$id and customize_now=1 and deleted=0";
						$arr6['where']="where IsHome=1 and customize_now=1 and deleted=0";
						$data['ProdType']=$prodType;
					}
					if($prodType=='printready')
					{
						$arr5['where']="where cat_id=$id and ready_to_print=1";
						$arr6['where']="where IsHome=1 and ready_to_print=1";
						$data['ProdType']=$prodType;
					}
					
					
				$arr1['where']="where cat_id=$id";
				$arr1['table']='subcategories';
				$arr1['order_by']='';
				$data['page_data1']=$this->common_model->getAllDetails($arr1);
				
			//	print_r($data['page_data1']); die;
				
				$arr11['table']='subcategories';
				$arr11['order_by']='';
				$arr11['where']="where cat_id=$id";
				$data['page_data11']=$this->common_model->getAllDetails($arr11);
				
				//$subcatid=intval($data['page_data11']['sub_cat_id']);
				$subcategoryArr=$data['page_data11'];
				$pagedata10Arr="";
				if(!empty($subcategoryArr))
				{
				foreach ($subcategoryArr as $row)
				{
					$subcatid=intval($row['sub_cat_id']);
					
				$arr10['where']="where sub_cat_id=$subcatid";
				$arr10['table']='sub_subcategories';
				$arr10['order_by']='';
				$pagedata10Arr[]=$this->common_model->getAllDetails($arr10);
				}
				}
				
			//print '<pre>'; print_r($pagedata10Arr); die;
				$subsubcatArr="";
				if(!empty($pagedata10Arr))
				{
				foreach($pagedata10Arr as $row){
					//print_r($row);
					$subsubcatArr[]=$row;
				} 
				}
				//print_r($subsubcatArr); die;
				$arr5['table']='categories';
				$arr5['order_by']='';
				$data['page_data3']=$this->common_model->getDetail($arr5);
				
				
				$cnt=sizeof($data['page_data1']);
				$subcatpage_dataArr="";
				$subcat_pagidArr="";
				$data_totalArr="";
				$data_limitArr="";
				//echo $cnt; die;
				if($cnt!=0)
				{
				for($i=0;$i<$cnt; $i++)
				{
				$subcatid=$data['page_data1'][$i]['sub_cat_id'];
				
				$arr3['where']="where cat_id=$id and prod_sub_categories=$subcatid and deleted=0";
				$arr3['table']='products';
				$arr3['order_by']='';
				
				
				$arr4['where']="where cat_id=$id and prod_sub_categories=$subcatid and deleted=0";
				$arr4['table']='products';
				$arr4['order_by']='';
				
				$prodArr=$this->common_model->getAllProducts($arr3);
				$pagination=$this->common_model->getPagination($arr4);
				
				$subcatpage_dataArr[]=$prodArr[0];
				$subcat_pagidArr[]=$prodArr[1];
				$data_totalArr[]=$pagination[0];
				$data_limitArr[]=$pagination[1];
				
				}
				}
				else {
					$arr3['where']="where cat_id=$id";
					$arr3['table']='products';
					$arr3['order_by']='';
					
					
					$arr4['where']="where cat_id=$id";
					$arr4['table']='products';
					$arr4['order_by']='';
					
					$prodArr=$this->common_model->getAllProducts($arr3);
					$pagination=$this->common_model->getPagination($arr4);
					
					$subcatpage_dataArr[]=$prodArr[0];
					$subcat_pagidArr[]=$prodArr[1];
					$data_totalArr[]=$pagination[0];
					$data_limitArr[]=$pagination[1];
				}
			//	print_r($subcatpage_dataArr[1]);
				//die;
				
				$data['page_data2']=$subcatpage_dataArr;
				$data['pagid2']=$subcat_pagidArr;
				$data['total2']=$data_totalArr;
				$data['limit2']=$data_limitArr;
				
				$arr['where']="where cat_id=$id";
				$arr['table']='products';
				$arr['order_by']='';
				
				
				$arr2['where']="where cat_id=$id";
				$arr2['table']='products';
				$arr2['order_by']='';
				
				$prodArr=$this->common_model->getAllProducts($arr);
				$pagination=$this->common_model->getPagination($arr2);
				$data['page_data']=$prodArr[0];
				$data['pagid']=$prodArr[1];
				$data['total']=$pagination[0];
				$data['limit']=$pagination[1];
				
				
				
				
				$arr6['table']='categories';
				$arr6['order_by']='order by cat_position';
				$data['page_data6']=$this->common_model->getAllDetails($arr6);
				}
				
				$this->load->view("header_view", $data);
				$this->load->view("product_view", $data);
				$this->load->view("footer_view");
			}
			function get_client_ip_server() {
				$ipaddress = '';
				if ($_SERVER['HTTP_CLIENT_IP'])
					$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
				else if($_SERVER['HTTP_X_FORWARDED_FOR'])
					$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
				else if($_SERVER['HTTP_X_FORWARDED'])
					$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
				else if($_SERVER['HTTP_FORWARDED_FOR'])
					$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
				else if($_SERVER['HTTP_FORWARDED'])
					$ipaddress = $_SERVER['HTTP_FORWARDED'];
				else if($_SERVER['REMOTE_ADDR'])
					$ipaddress = $_SERVER['REMOTE_ADDR'];
				else
					$ipaddress = 'UNKNOWN';
			
				return $ipaddress;
			}
			function convertCurrency(){
				$from   = 'USD'; 
				$to     = 'INR';
				$url = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $from . $to .'=X';
				$filehandler = @fopen($url, 'r');
				if ($filehandler) {
				$data = fgets($filehandler, 4096);
				fclose($filehandler);
				}
				$InfoData = explode(',',$data); 
				$britishpoundValue = $InfoData[1];
				echo '1 GBR = '.(1)*$britishpoundValue.' INR';
			}
}	
?>