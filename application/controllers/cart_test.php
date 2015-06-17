<?php

		class Cart_test extends CI_Controller
		{
			function __Construct()
			{
				parent::__Construct();
				$this->load->library('cart');
			}
			function index()
			{
				$data = array(
					
					'$id' => '42',
					'name' => 'Bags',
					'price' => 300,
					'Quantity' => 2,
				);
				$this->cart->insert($data);	 
				
				$cart = $this->cart->contents();
				echo "<pre>";
				print_r($cart);
				
				//echo "add() called";
			}
			function add()
			{
				$data = array(
					
					'$id' => '42',
					'name' => 'Bags',
					'price' => 300,
					'Quantity' => 2,
				);
				
				$this->cart->insert($data);			
			}
			
			function show()
			{
				
			}
		}
		
	?>	
		