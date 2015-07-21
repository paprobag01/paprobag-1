<?php 
 class Sections extends CI_Controller{

		function __Construct(){
		parent::__construct();
		
				
               $this->load->library('site_sentry');
			}
      
	  function index(){
		$data['page']='sections';  
		  
		$arr['table']='sections';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 

		 $data['page_data']=$this->site_sentry->get_all($arr); 
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/section_list');
		 $this->load->view('cms/footer_view');
		
     }

     function verify_section($type=null)
     {

     	$this->form_validation->set_rules('section_name', 'Section Name', 'trim|required|min_length[3]|max_length[30]|xss_clean|is_unique[sections.section_name]|alpha|regex_match[/^[A-Z]/]');
     	if ($this->form_validation->run() == FALSE)
		{
				
			   $data['error'] = 'Please Enter Correct Section name';
			   $data['type']=$type;

				$this->load->view('cms/header_view', $data);
				 $this->load->view('cms/add_sections_view', $data);
				 $this->load->view('cms/footer_view', $data);
		}
		else
		{
			$this->save_section();
		}
     }

	function save_section(){ 
		
		$data['table']="sections"; 
		$id = $this->site_sentry->Save_records($data);			
		redirect('cms/sections/viewSection/');
	}
	function viewSection($id=null,$type=null)
	{
			
		  $arr['primary_id']=$id;
		  $arr['table']='sections';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by section_id desc";
		  $data['page_data']=$this->site_sentry->PopulateValues($arr); 
		  
		  $data['page']='sections';
		 $data['sec_id'] = $id+1;
		  
		  $data['type']=$type;
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/add_sections_view', $data);
		 $this->load->view('cms/footer_view', $data);
		 
		 
		
	}
	
	function deleteSection($id=null)
	{
		$this->db->where('section_id', $id);	
		
		$this->db->delete('sections'); 
		redirect('cms/sections');
	}
		
	
}
?>