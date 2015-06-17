<?php 
class Admin extends CI_Controller{
	
	function __Construct()
	{
		
		parent::__construct();
		
	}
	function index()
	{
		
		$this->load->view('header');
		$this->load->view('index_view');
		$this->load->view('footer');
	}
}
?>