<?php 
class Add_to_cart_ajax extends CI_Controller {
	function __Construct() {
		parent::__construct();
       	$this->load->library('site_sentry');
	}
  
  	function index() {
  		$json = $this->input->post('data');
		// $json = stripslashes($json);
		$json = json_decode($json);
  	}
}
