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
		  
		$arr['table']='subcategory';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 

		  $data['page_data']=$this->site_sentry->get_all($arr); 
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/subcategories_list');
		 $this->load->view('cms/footer_view');
		
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
		
		
		 $data['type']=$type;
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/add_subcategories_view', $data);
		 $this->load->view('cms/footer_view', $data);
		
	}


	function save_subcategories($type=null)
	{
		//$data['cat_id'] = $this->input->post('cat_id');
		$data['section_id'] = $this->input->post('sec_id');
		$data['cat_id'] = $this->input->post('prod_sub_categories');
		$data['sub_cat_name'] = $this->input->post('sub_cat');

		$cat_id=$this->input->post('cat_id');
		
		$arr['table']='subcategory';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 

		$arr3['table']='sections';
		$arr3['where']="";
		$arr3['and']="";
		$arr3['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($arr3);

		$data['page_data']=$this->site_sentry->get_all($arr); 

		$this->form_validation->set_rules('sec_id', 'Sections', 'required');
		$this->form_validation->set_rules('prod_sub_categories', 'Category', 'required');
		$this->form_validation->set_rules('sub_cat', 'Subcategory', 'trim|required|min_length[3]|max_length[12]|xss_clean|is_unique[sections.section_name]|alpha');
		if ($this->form_validation->run() == FALSE)
		{
				
			   $data['error'] = 'Please Enter Correct Subcategory name';
			   $data['type']=$type;

				 $this->load->view('cms/header_view', $data);
				 $this->load->view('cms/add_subcategories_view',$data);
				 $this->load->view('cms/footer_view');
		}
		else
		{
			$this->db->insert('subcategory',$data);
		}
		
		
		
		
		
	}
	function deleteCategory($id=null)
	{
		$this->db->where('sub_cat_id', $id);	
		
		$this->db->delete('subcategory'); 
		redirect('cms/Subcategories');
	}
		
	
}
?>