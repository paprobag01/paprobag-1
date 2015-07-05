
<?php
class New_seller extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
	function index()
	{	
		
		$data = $this->common_model->get_head();

		$data = array(
		'product_name' => $this->input->post('seller_product_name'),
		'section_id' => $this->input->post('sec_id'),
		'product_description' => $this->input->post('product_description'),
		'price' => $this->input->post('mrp'),
		'sell_price' => $this->input->post('sell_price'),
		'discount' => $this->input->post('discount'),
		'quantity' => $this->input->post('quantity'),
		'sold_by' => $this->input->post('sold_by'),
		'shipping_price' => $this->input->post('shipping_price'),
		'stock' => $this->input->post('stock'),
		'image1' => $this->input->post('image1'),
		'image2' => $this->input->post('image2'),
		'image3' => $this->input->post('image3'),
		'image4' => $this->input->post('image4'),
		'material_name' => $this->input->post('material_name'),
		'GSM_name' => $this->input->post('GSM_name'),
		'style' => $this->input->post('style'),
		'size' => $this->input->post('size'),
		'handle' => $this->input->post('handle'),
		'print' => $this->input->post('print'),
		'print_color' => $this->input->post('print_color'),
		'lamination' => $this->input->post('lamination'),
		'special_work' => $this->input->post('special_work'),
			);

print_r($data);
die();

		

		$data['new_seller'] =$this->db->insert('seller',$data);
		//echo "New Seller Registered";
		
		
		//$this->load->view('header',$data);
		//$this->load->view('seller_page_view',$data);
		//$this->load->view('footer');
	}
}	
?>