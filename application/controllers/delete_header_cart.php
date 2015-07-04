<?php

class Delete_header_cart extends CI_Controller
{
	function __Construct() {
		parent::__construct();
       	$this->load->library('site_sentry');
       	$this->load->model('common_model');
	}

	function index()
	{
		

		$cart_id = $this->session->userdata('cart_id');
		echo $product_id = $_POST['product_id'];

		$data = $this->common_model->remove_cart_product($cart_id,$product_id);

	}


}


