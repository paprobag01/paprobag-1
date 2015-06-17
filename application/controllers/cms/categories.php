<?php 
 class Categories extends CI_Controller{

		function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms/login");
				}
				
               $this->load->library('site_sentry');
			}
      
	  function index(){
		  $data['page']='categories';
		  
		  $arr['table']='category';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 

		  $data['page_data']=$this->site_sentry->get_all($arr); 
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/categories_list');
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
		  
		   $arr1['table']='sections';
		$arr1['where']="";
		$arr1['and']="";
		$arr1['order_by']=""; 

		 $data['section_data']=$this->site_sentry->get_all($arr1);
		  
		  $data['page']='categories';
		  
		  $data['type']=$type;
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/add_categories_view', $data);
		 $this->load->view('cms/footer_view', $data);
		 
		 
		
	}
	
	function deleteCategory($id=null)
	{
		$this->db->where('cat_id', $id);	
		
		$this->db->delete('category'); 
		redirect('cms/categories');
	}
		
	
}
?>