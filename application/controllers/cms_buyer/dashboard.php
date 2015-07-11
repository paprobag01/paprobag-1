<?php
class Dashboard extends CI_Controller{
	
	function __Construct(){

		parent::__construct();
		$this->load->helper('url');
	}

	function index(){

		$data['page']='dashboard';
		$this->load->view('cms_buyer/header_view',$data);
		$this->load->view('cms_buyer/dashboard_view',$data);
		$this->load->view('cms_buyer/footer_view',$data);
	}
}
?>