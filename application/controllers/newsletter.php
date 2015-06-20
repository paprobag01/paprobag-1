<?php 
 class Newsletter extends CI_Controller{

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
	
		
	
}
?>