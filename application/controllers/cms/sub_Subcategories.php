<?php 
 class Sub_Subcategories extends CI_Controller{

		function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms/login");
				}
				
               $this->load->library('site_sentry');
			}
      
	  function index(){
		  $data['page']='Sub_Subcategories';
		  
		$arr['table']='sub_subcategory';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="";
		$data['page_data']=$this->site_sentry->get_all($arr); 

		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/sub_subcategory_list');
		 $this->load->view('cms/footer_view');
		
     }
	 
	function viewCategory($id=null,$type=null)
	{
		
		// $arr['primary_id']=$id;
		// $arr['table']='sub_subcategory';
		// $arr['where']="";
		// $arr['and']="";
		// $arr['order_by']="order by cat_id desc";
		// $data['page_data']=$this->site_sentry->PopulateValues($arr); 
		//$data['primary_id']=$id;
		$data['page']='Sub_Subcategories';

			if($id!=null)
			{
				$arr3['table']='sub_subcategory';
				$arr3['where']="where sub_subcat_id=$id";
				$arr3['and']="";
				$arr3['order_by']="";		
				$data['page_data']=$this->site_sentry->get_all($arr3);
			}
			

		
		 $data['sub_subcategory_id'] = count($this->site_sentry->max_id_value('sub_subcategory','sub_subcat_id'));	
		
		
		$arr3['table']='sections';
		$arr3['where']="";
		$arr3['and']="";
		$arr3['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($arr3);
		
		
		 $data['type']=$type;
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/add_sub_subcategory', $data);
		 $this->load->view('cms/footer_view', $data);
		
	}


	function save_sub_subcategories($type=null)
	{
		//$data['cat_id'] = $this->input->post('cat_id');
		$data1['primary_id']=$this->input->post('sub_subcat_id');

		$data1['table']="sub_subcategory"; 
		$data1['section_id'] = $this->input->post('sec_id');
		$data1['cat_id'] = $this->input->post('prod_sub_categories');
		$data1['sub_subcat_name'] = $this->input->post('sub_subcat_name');
		$data1['sub_cat_id'] = $this->input->post('sub_categories');
		$data1['sub_subcat_id'] = $this->input->post('sub_subcat_id');

		$cat_id=$this->input->post('cat_id');
		
		// $arr['table']='sub_subcategory';
		// $arr['where']="";
		// $arr['and']="";
		// $arr['order_by']=""; 
		// $data['page_data']=$this->site_sentry->get_all($arr); 

		$arr3['table']='sections';
		$arr3['where']="";
		$arr3['and']="";
		$arr3['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($arr3);

		

		$this->form_validation->set_rules('sec_id', 'Sections', 'required');
		$this->form_validation->set_rules('prod_sub_categories', 'Category', 'required');
		$this->form_validation->set_rules('sub_subcat_id', 'Sub_Subcategory ID', 'required');
		$this->form_validation->set_rules('sub_subcat_name', 'Sub_Subcategory Name', 'required|min_length[3]|max_length[30]|xss_clean|callback_alpha|regex_match[/^[A-Z]/]');
		if ($this->form_validation->run() == FALSE)
		{
				
			   $data['error'] = 'Please Enter Correct Subcategory name';
			   $data['type']=$type;

				 $this->load->view('cms/header_view', $data);
				 $this->load->view('cms/add_sub_subcategory',$data);
				 $this->load->view('cms/footer_view');
		}
		else
		{
			
			$id = $this->site_sentry->Save_records($data1);		
			redirect('cms/Sub_Subcategories/viewCategory');			
		}
		
		
		
		
		
	}

	function alpha($str)
	{
	    return ( ! preg_match("/^([A-Z a-z ])+$/i", $str)) ? FALSE : TRUE;
	} 

	function deleteCategory($id=null)
	{
		$this->db->where('sub_subcat_id', $id);	
		
		$this->db->delete('sub_subcategory'); 
		redirect('cms/Sub_Subcategories');
	}
		
	
}
?>