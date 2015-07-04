<?php
class Dashboard extends CI_Controller{
	
	function __Construct(){

		parent::__construct();
		$this->load->helper('url');
	}

	function index(){

		$data['page']='dashboard';
		$this->load->view('cms_seller/header_view',$data);
		$this->load->view('cms_seller/dashboard_view',$data);
		$this->load->view('cms_seller/footer_view',$data);
	}
}
?>