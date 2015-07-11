<?php
class Verification extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
		$this->load->model('HomeModel');
		$this->load->model('EmailModel');
	}

	function index()
	{	
		
		$data = $this->common_model->get_head();
		//$this->sendVerificationEmail();
		//die();
		$this->load->view('header',$data);
		$this->load->view('seller_detail_view');
		$this->load->view('footer');
	}

	function verify($verificationText=NULL){  
	  $noRecords = $this->HomeModel->verifyEmailAddress($verificationText);  
	  if ($noRecords > 0){
	   $error = array( 'success' => "Email Verified Successfully!"); 
	  }else{
	   $error = array( 'error' => "Sorry Unable to Verify Your Email!"); 
	  }
	  $data['errormsg'] = $error; 
	  $this->load->view('index.php', $data);   
	 }


	 function sendVerificationEmail(){  
	  $this->EmailModel->sendVerificatinEmail("ashussingh91@gmail.com","13nRGi7UDv4CkE7JHP1o");
	 }
}	
?>