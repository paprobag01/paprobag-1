<?php 
 class Subcategories extends CI_Controller{

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
		 $this->load->view('cms/subcategories_list');
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
		
		$arr3['table']='sections';
		$arr3['where']="";
		$arr3['and']="";
		$arr3['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($arr3);
		$data['sub_cat']='';
		
		 $data['type']=$type;
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/add_subcategories_view', $data);
		 $this->load->view('cms/footer_view', $data);
		
	}
	function save_subcategories()
	{
		//$data['cat_id'] = $this->input->post('cat_id');
		echo $data['section_id'] = $this->input->post('sec_id');
		echo $data['cat_id'] = $this->input->post('prod_sub_categories');
		echo $data['sub_cat_name'] = $this->input->post('sub_cat');
		
		$this->db->insert('subcategory',$data);
		
		$cat_id=$this->input->post('cat_id');
		//$child_id=$this->input->post('child_cat_id');

		//$sql = $this->site_sentry->insertsubcat($data);
		
		
		
		 $arr['table']='category';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 

		  $data['page_data']=$this->site_sentry->get_all($arr); 
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/subcategories_list');
		 $this->load->view('cms/footer_view');
	}
	function deleteCategory($id=null)
	{
		$this->db->where('cat_id', $id);	
		
		$this->db->delete('category'); 
		redirect('cms/categories');
	}
		
	
}
?>