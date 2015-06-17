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
		
		$this->load->view('header',$data);
		$this->load->view('product_view',$data);
		$this->load->view('footer');
	}
	
}	
?>