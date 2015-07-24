<?php 
 class Terms_conditions extends CI_Controller{

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
		 $this->load->view('header',$data);
		$this->load->view('bulk_order_view');
		$this->load->view('footer');
		
     }
	
		
	
}
?>