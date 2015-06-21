<?php
class Catalog extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
		$this->load->library('encrypt');
	}

	function section($type1=null,$type2=null,$sec_id=null,$cat_id=null)
	{
		$data = $this->common_model->get_head();
		if($type2!='retail')
		{
			$data['moq'] = 500; //example taken
			 echo 'hello';
		}
		

		$this->load->view('header',$data);
		$this->load->view('index_view',$data);
		$this->load->view('footer');
	}

	function getProducts($wholesale_flag=null, $section_id=null, $cat_id=null, $sub_cat_id=null)
	{
		$data = $this->common_model->get_head();

		$arr1['table']='category';
		$arr1['where']='where section_id = '.$section_id;
		$arr1['order_by']='';

		$data['page_data2'] = $this->common_model->getdataprod($cat_id,$section_id);
		$data['page_data3'] = $this->common_model->getdatacat($cat_id,$section_id);		
		$data['category_list'] = $this->common_model->getcategory($section_id);
		$data['wholesale_flag'] = $wholesale_flag;

		$this->load->view('header',$data);
		$this->load->view('product_catelog',$data);
		$this->load->view('footer');
	}
	
	function getmore($wholesale_flag=null, $section_id=null, $cat_id=null, $sub_cat_id=null, $prod_id=null)
	{
		$data = $this->common_model->get_head();
		
		$data['page_data5']=$this->common_model->getprodimg($section_id,$cat_id,$prod_id);
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