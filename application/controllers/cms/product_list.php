<?php 
 class Product_list extends CI_Controller{

		function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms/login");
				}
				
               $this->load->library('site_sentry');
			}
      
	  function index(){
		  $data['page']='subcategories';
		  
		  $arr['table']='category';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 

		  $data['page_data']=$this->site_sentry->get_all($arr); 
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/productList_view');
		 $this->load->view('cms/footer_view');
		
     }
	 function save_categories(){ 
		
		$data['table']="category"; 
		$this->site_sentry->Save_records($data);
		redirect('cms/categories');
	}
	function viewCategory($id=null,$type=null)
	{
		
		$arr['primary_id']=$id;
		$arr['table']='category';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by cat_id desc";
		$data['page_data']=$this->site_sentry->PopulateValues($arr); 
		$data['page']='subcategories';
		
		
		$arr1['table']='category';
		$arr1['where']="";
		$arr1['and']="";
		$arr1['order_by']=""; 
		$data['cat_data']=$this->site_sentry->get_all($arr1); 
		
		
		$arr2['table']='category';
		$arr2['where']="where cat_type!=1";
		$arr2['and']="";
		$arr2['order_by']=""; 
		$data['subcat_data']=$this->site_sentry->get_all($arr2); 
		
		
		 $data['type']=$type;
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/product_section_view', $data);
		 $this->load->view('cms/footer_view', $data);
		
	}
	function save_subcategories()
	{
		
		
		$cat_id=$this->input->post('cat_id');
		$child_id=$this->input->post('child_cat_id');
		
		$sql=$this->db->query("select * from category where cat_id=$cat_id");
		$res=$sql->row_array();
		extract($res);
		if($child_cat_id==0)
		{
		$child_cat_id=$child_id;
		}
		else
		{
			$child_cat_id=$child_cat_id.",".$child_id;
		}
		$arr=array(
		'child_cat_id'=>$child_cat_id,
		'created_on'=>date('d-m-Y')
		);
		$this->db->where('cat_id', $cat_id);
		$i=$this->db->update('category', $arr);
		if($i==true)
		{
			$this->index();
		}
	}
	function deleteCategory($id=null)
	{
		$this->db->where('cat_id', $id);	
		
		$this->db->delete('category'); 
		redirect('cms/categories');
	}
		
	
}
?>