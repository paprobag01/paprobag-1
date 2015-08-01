<?php 
class Upload_product_info extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->model('common_model');		
	}
	function index()
	{
		print_r('<pre>');
		print_r($_POST);
		
		$imagePath = "upload/products/";
		
		$imagename = $_FILES['pic1']['name'];
		$imagetype = $_FILES['pic1']['type'];
		$imageerror = $_FILES['pic1']['error'];
		$imagetemp1 = $_FILES['pic1']['tmp_name'];

		if(is_uploaded_file($imagetemp1)) {
		    if(move_uploaded_file($imagetemp1, $imagePath . $imagename)) {
		        // echo "Sussecfully uploaded your image.";
		    }
		    else {
		        // echo "Failed to move your image.";
		    }
		}
		else {
		    // echo "Failed to upload your image.";
		}
		
		$imagename = $_FILES['pic2']['name'];
		$imagetype = $_FILES['pic2']['type'];
		$imageerror = $_FILES['pic2']['error'];
		$imagetemp2 = $_FILES['pic2']['tmp_name'];

		if(is_uploaded_file($imagetemp2)) {
		    if(move_uploaded_file($imagetemp2, $imagePath . $imagename)) {
		        // echo "Sussecfully uploaded your image.";
		    }
		    else {
		        // echo "Failed to move your image.";
		    }
		}
		else {
		    // echo "Failed to upload your image.";
		}
		
		$imagename = $_FILES['pic3']['name'];
		$imagetype = $_FILES['pic3']['type'];
		$imageerror = $_FILES['pic3']['error'];
		$imagetemp3 = $_FILES['pic3']['tmp_name'];

		if(is_uploaded_file($imagetemp3)) {
		    if(move_uploaded_file($imagetemp3, $imagePath . $imagename)) {
		        // echo "Sussecfully uploaded your image.";
		    }
		    else {
		        // echo "Failed to move your image.";
		    }
		}
		else {
		    // echo "Failed to upload your image.";
		}
		
		$imagename = $_FILES['pic4']['name'];
		$imagetype = $_FILES['pic4']['type'];
		$imageerror = $_FILES['pic4']['error'];
		$imagetemp4 = $_FILES['pic4']['tmp_name'];

		if(is_uploaded_file($imagetemp4)) {
		    if(move_uploaded_file($imagetemp4, $imagePath . $imagename)) {
		        // echo "Sussecfully uploaded your image.";
		    }
		    else {
		        // echo "Failed to move your image.";
		    }
		}
		else {
		    // echo "Failed to upload your image.";
		}
		$data = array(
			'section_id' =>$_POST['section'],
			'cat_id' => $_POST['category'],
			'sub_cat_id' => $_POST['sub_category'],
			'material_id' => $_POST['material'],
			'GSM_name' => $_POST['gsm'],
			'style_id' => $_POST['style'],
			'size' => $_POST['size'],
			'handle' => $_POST['handle'],
			'print_color' => $_POST['no_of_colors'],
			'print' => $_POST['print'],
			'lamination' => $_POST['lamination'],
			'special_wrk' => $_POST['special_work'],
			'shipping_require' => $_POST['shipping'],
			'prod_image1' => $_FILES['pic1']['name'],
			'prod_image2' => $_FILES['pic2']['name'],
			'prod_image3' => $_FILES['pic3']['name'],
			'prod_image4' => $_FILES['pic4']['name'],
			'seller_id' => '123',
			);
		$this->db->insert('products',$data);
		$prod_id = $this->db->insert_id();
		if ($_POST['section']==2) {
			
			$data_cust1 = array(
				'mrp' => $_POST['md500'],
				'sell_price' => $_POST['sd500'],
				'discount' => $_POST['dd500'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '500',
				);
			$data_cust2 = array(
				'mrp' => $_POST['md1000'],
				'sell_price' => $_POST['sd1000'],
				'discount' => $_POST['dd1000'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '1000',
				);
			$data_cust3 = array(
				'mrp' => $_POST['md1500'],
				'sell_price' => $_POST['sd1500'],
				'discount' => $_POST['dd1500'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '1500',
				);
		
			$data_cust5 = array(
				'mrp' => $_POST['md2000'],
				'sell_price' => $_POST['sd2000'],
				'discount' => $_POST['dd2000'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '2000',
				);
			$data_cust6= array(
				'mrp' => $_POST['md3000'],
				'sell_price' => $_POST['sd3000'],
				'discount' => $_POST['dd3000'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '3000',
				);
			$data_cust7 = array(
				'mrp' => $_POST['md5000'],
				'sell_price' => $_POST['sd5000'],
				'discount' => $_POST['dd5000'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '5000',
				);
			$this->db->insert('quantity_vs_price',$data_cust1);
			$this->db->insert('quantity_vs_price',$data_cust2);
			$this->db->insert('quantity_vs_price',$data_cust3);			
			$this->db->insert('quantity_vs_price',$data_cust5);
			$this->db->insert('quantity_vs_price',$data_cust6);
			$this->db->insert('quantity_vs_price',$data_cust7);
		}
		else
		{
			$data_cust1 = array(
				'mrp' => $_POST['m100'],
				'sell_price' => $_POST['s100'],
				'discount' => $_POST['d100'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '100',
				);
			$data_cust2 = array(
				'mrp' => $_POST['m200'],
				'sell_price' => $_POST['s200'],
				'discount' => $_POST['d200'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '200',
				);
			$data_cust3 = array(
				'mrp' => $_POST['m300'],
				'sell_price' => $_POST['s300'],
				'discount' => $_POST['d300'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '300',
				);
			$data_cust4 = array(
				'mrp' => $_POST['m500'],
				'sell_price' => $_POST['s500'],
				'discount' => $_POST['d500'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '500',
				);
			$data_cust5 = array(
				'mrp' => $_POST['m1000'],
				'sell_price' => $_POST['s1000'],
				'discount' => $_POST['d1000'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '1000',
				);
			$data_cust6 = array(
				'mrp' => $_POST['m1500'],
				'sell_price' => $_POST['s1500'],
				'discount' => $_POST['d1500'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '1500',
				);
			$data_cust7 = array(
				'mrp' => $_POST['m2000'],
				'sell_price' => $_POST['s2000'],
				'discount' => $_POST['d2000'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '2000',
				);
			$data_cust8 = array(
				'mrp' => $_POST['m3000'],
				'sell_price' => $_POST['s3000'],
				'discount' => $_POST['d3000'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '3000',
				);
			$data_cust9 = array(
				'mrp' => $_POST['m5000'],
				'sell_price' => $_POST['s5000'],
				'discount' => $_POST['d5000'],
				'prod_id' => $prod_id,
				'seller_id' => '123',
				'quantity' => '5000',
				);
			$this->db->insert('quantity_vs_price',$data_cust1);
			$this->db->insert('quantity_vs_price',$data_cust2);
			$this->db->insert('quantity_vs_price',$data_cust3);
			$this->db->insert('quantity_vs_price',$data_cust4);
			$this->db->insert('quantity_vs_price',$data_cust5);
			$this->db->insert('quantity_vs_price',$data_cust6);
			$this->db->insert('quantity_vs_price',$data_cust7);
			$this->db->insert('quantity_vs_price',$data_cust8);
			$this->db->insert('quantity_vs_price',$data_cust9);
		}
	}
}