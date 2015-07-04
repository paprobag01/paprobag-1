<?php
class Checkout extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
		$this->load->library('encrypt');
	}

	function index()
	{
		// check cart id is present or not
		if($this->session->userdata('cart_id'))
		{
			// check cart_id is present or not in cart_product
			$cart_id = $this->session->userdata('cart_id');
			$cart_product_details['where']="where cart_id=".$this->session->userdata('cart_id');
			$cart_product_details['table']='cart_product';
			$cart_product_details['order_by']='';
			$cart_products = $this->common_model->getAllDetails($cart_product_details);
			
			if(count($cart_products) > 0) {
				// Get product ids and quantity and product total
				$product_id_array = array();
				$quantity_array = array();
				$product_wise_total_array = array();
				$product_name_array = array();
				$product_short_desc_array = array();
				$product_image_array = array();

				foreach ($cart_products as $key => $value) {
					$product_id_array[] = $value['product_id'];
					$quantity_array[] = $value['quantity'];
					$product_wise_total_array[] = $value['product_wise_total'];
					// get product
					$get_product['where']="where prod_id=".$value['product_id'];
					$get_product['table']='products';
					$get_product['order_by']='';
					$product = $this->common_model->getDetail($get_product);
					$product_name_array[] = $product['prod_name'];
					$product_short_desc_array[] = $product['prod_short_description'];
					$product_image_array[] = $product['prod_image'];
				}
				$data['product_id'] = $product_id_array;
				$data['quantity'] = $quantity_array;
				$data['product_wise_total'] = $product_wise_total_array;
				$data['product_name'] = $product_name_array;
				$data['product_short_desc'] = $product_short_desc_array;
				$data['product_image'] = $product_image_array;

				// Get cart total
				$cart_details['where']="where cart_id=".$this->session->userdata('cart_id');
				$cart_details['table']='cart';
				$cart_details['order_by']='';
				$cart = $this->common_model->getDetail($cart_details);
				$data['cart_total'] = $cart['cart_total'];
			} else {
				// cart empty
				$data['empty'] = true;
			}
		} else {
			// cart empty
			$data['empty'] = true;
		}
		$this->load->view('header');
		$this->load->view('cart_view', $data);
		$this->load->view('footer');
	}
}
