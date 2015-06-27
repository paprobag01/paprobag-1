<?php

class Add_to_cart_ajax extends CI_Controller {
	function __Construct() {
		parent::__construct();
       	$this->load->library('site_sentry');
       	$this->load->model('common_model');
	}
  
  	function index() {
		if($this->session->userdata('session_id') !== null)
		{
			$logged_in = $this->session->userdata('logged_in');
			$user_id = $logged_in['id'];
			$session_id = $this->session->userdata('session_id');
		} else {
  			$session_id = uniqid();
  			$user_id = NULL;
		}
		
  		$discount = 0;
  		$shipping_charges = 0;
  		  		
  		$product_id = $_POST['product_id'];
  		$quantity = $_POST['product_quantity'];
  		$product_price = $_POST['product_price'];
  		$product_wise_total = $_POST['product_wise_total'];
  		
		// Insert into cart table if it is not there otherwise update
		// Insert Into cart product table if it is not there otherwise update

		if ($this->session->userdata('cart_id')) {
			// Update cart
			$cart_id = $this->session->userdata('cart_id');

			// get products from cart product table
			$data['where']="where cart_id=$cart_id";
			$data['table']='cart_product';
			$data['order_by']='';
			$product_array = $this->common_model->getAllDetails($data);
			
			if($this->multi_array_search($product_id, $product_array)) {
				// Update the cart product table
				$cart_product_id = $this->get_cart_product_id($cart_id, $product_id);

				$data = array(
               		'quantity' => $quantity,
	               	'product_price' => $product_price,
	               	'product_wise_total' => $product_wise_total
	            );

				$this->common_model->update_cart_product($data, $cart_product_id);
			} else {
				// Insert into cart product table
				$data = array(
					'cart_id' => $cart_id,
					'product_id' => $product_id,
					'quantity' => $quantity,
					'product_price' => $product_price,
					'product_wise_total' => $product_wise_total
				);

				$cart_product_id = $this->common_model->add_to_cart_product($data);
			}

			// get products from cart product table
			$cart_product_data['where']="where cart_id=$cart_id";
			$cart_product_data['table']='cart_product';
			$cart_product_data['order_by']='';
			$product_array = $this->common_model->getAllDetails($cart_product_data);

			// get existing cart detail
			$cart_data['where']="where cart_id=$cart_id";
			$cart_data['table']='cart';
			$cart_data['order_by']='';
			$cart_detail = $this->common_model->getDetail($cart_data);
			
			$cart_subtotal = 0;
			$cart_total = 0;
			foreach ($product_array as $key => $value) {
				$cart_subtotal += $value['product_wise_total'];
				$cart_total += $value['product_wise_total'];
			}
			
			// Update the cart table
			$cart_update_data = array(
               'cart_subtotal' => $cart_subtotal,
               'cart_total' => $cart_total
            );
			$this->common_model->update_cart($cart_update_data,$cart_id);

		} else {
			// Create new cart & insert into cart table
			$cart_subtotal = $product_price * $quantity;
			$cart_total = $product_price * $quantity;
			$data = array(
				'session_id' => $session_id,
				'user_id' => $user_id,
				'cart_subtotal' => $cart_subtotal,
				'discount' => $discount,
				'shipping_charges' => $shipping_charges,
				'cart_total' => $cart_total
			);
			
			$cart_id = $this->common_model->add_to_cart($data);

			// Insert into cart product table
			$data = array(
				'cart_id' => $cart_id,
				'product_id' => $product_id,
				'quantity' => $quantity,
				'product_price' => $product_price,
				'product_wise_total' => $product_wise_total
			);

			$cart_product_id = $this->common_model->add_to_cart_product($data);

			// Set cart id in session
	        $this->session->set_userdata('cart_id', $cart_id);
		}
  	}
  	
  	function multi_array_search($search_for, $search_in) {
	    foreach ($search_in as $key => $value) {
	        if ( ($value === $search_for) || (is_array($value) && $this->multi_array_search($search_for, $value)) ){
	            return true;
	        }
	    }
	    return false;
	}

	function get_cart_product_id($cart_id, $product_id) {
	 	$data['where']="where cart_id = $cart_id && product_id = $product_id";
		$data['table']='cart_product';
		$data['order_by']='';
		$product_array = $this->common_model->getDetail($data);
		return $product_array['cart_product_id'];
	}
}
