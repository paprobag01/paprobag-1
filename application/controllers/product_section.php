<?php
class Product_section extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
		
	function index()
	{
		
		$data = $this->common_model->get_head();
		$this->load->view('header',$data);
		$this->load->view('product_view');
		$this->load->view('footer');
		
	}
	
	function getmore($id=null,$type=null,$prod_id=null)
	{
		$data = $this->common_model->get_head();
		$data['page_data5']=$this->common_model->getprodimg($id,$type,$prod_id);
		echo $id;	
		
		echo $prod_id;
		$_SESSION['last_seen_prod_id'][$prod_id]=array('prod_id'=>$prod_id);
		
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
						
						echo "dghj";
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
				$this->load->view('header',$data);
				$this->load->view('product_view',$data);
				$this->load->view('footer');
			}
}
?>