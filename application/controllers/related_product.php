<?php 
session_start();
class Related_product extends CI_Controller{
	function __Construct(){
		
				parent::__construct();
                $this->load->model('common_Model');
				
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
		
		
		$this->load->view('header',$data);
		 $this->load->view('product_view',$data);
		 $this->load->view('footer');
	}
}
?>