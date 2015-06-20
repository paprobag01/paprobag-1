<?php
class Catalog extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
		$this->load->library('encrypt');
	}
	
	function getProducts($a=null,$b=null,$id=null,$type=null,$prod_id=null)
	{
		$data = $this->common_model->get_head();
		//echo $id = $this->input->post('$id');
		
		//echo $id ;
		//echo $id;
		/*$arr2['table']='products';
		$arr2['where']='where cat_id=$id and section_id=5';
		$arr2['order_by']='';
		$data['page_data2']=$this->common_model->getAllDetails($arr2);*/
		
		$arr1['table']='category';
		$arr1['where']='where section_id=5';
		$arr1['order_by']='';
		$data['page_data1']=$this->common_model->getAllDetails($arr1);
		//echo $prod_id;
		$data['page_data2'] = $this->common_model->getdataprod($id,$type);
		$data['page_data3'] = $this->common_model->getdatacat($id,$type);		
		$data['page_data4']=$this->common_model->getcategry($type);
		$data['page_data5']=$this->common_model->getprodimg($id,$type,$prod_id);
		
		$this->load->view('header',$data);
		$this->load->view('customize_view',$data);
		$this->load->view('footer');
	}
	
	function getmore($id=null,$type=null,$prod_id=null)
	{
		$data = $this->common_model->get_head();
		$data['page_data5']=$this->common_model->getprodimg($id,$type,$prod_id);
		$data['page_data2'] = $this->common_model->getdataprod($type,$id);
		//echo $id;
		//echo $id;	
		
		//echo $prod_id;
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