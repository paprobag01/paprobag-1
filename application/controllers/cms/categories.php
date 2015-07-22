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

     function verify_category($type=null)
     {

     	$arr1['table']='sections';
		$arr1['where']="";
		$arr1['and']="";
		$arr1['order_by']=""; 

		 $data['section_data']=$this->site_sentry->get_all($arr1);

     	$this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[30]|xss_clean|alpha|regex_match[/^[A-Z]/]');
     	$this->form_validation->set_rules('section_id', 'Select Section', 'required');
     	$this->form_validation->set_rules('cat_type', 'Category Type', 'required');
     	$this->form_validation->set_rules('cat_meta_title', 'Meta Title', 'trim|required');
     	$this->form_validation->set_rules('cat_meta_keywords', 'Meta Keywords', 'trim|required');
     	$this->form_validation->set_rules('cat_meta_description', 'Meta Description', 'trim|required');
     	if ($this->form_validation->run() == FALSE)
		{
				
			   $data['error'] = 'Please Enter Correct Category name';
			   $data['type']=$type;

				$this->load->view('cms/header_view', $data);
				 $this->load->view('cms/add_categories_view', $data);
				 $this->load->view('cms/footer_view', $data);
		}
		else
		{
			$this->save_categories();
		}
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
		 $data['category_id'] = count($this->site_sentry->max_id_value('category','cat_id'));  
		 
		  
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