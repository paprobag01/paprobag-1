<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pagination extends CI_Controller {

// Load libraries in Constructor.
function __construct() {
parent::__construct();
$this->load->model('common_model');
$this->load->library('pagination');
}

// Set array for PAGINATION LIBRARY, and show view data according to page.
public function product_list_array(){
	$per_pg = 5;
$config = array();
$config["base_url"] = base_url()."Pagination/product_list_array";
$total_row = $this->common_model->count_subcat();
//cho $total_row;
$config["total_rows"] = $total_row;
$config["per_page"] = $per_pg;
$config['use_page_numbers'] = TRUE;
$config['num_links'] = $total_row;
$config['uri_segment']  = 9;
/*$config['cur_tag_open'] = '&nbsp;<a class="current">';
$config['cur_tag_close'] = '</a>';*/
$config['next_link'] = 'Next';
$config['prev_link'] = 'Previous';

$this->pagination->initialize($config);
if($this->uri->segment(3)){
$page = ($this->uri->segment(3)) ;
}
else{
$page = 1;
}
$data["results"] = $this->common_model->get_all_filter_product($per_pg, $page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;&nbsp;&nbsp;&nbsp;',$str_links );

// View data according to array.
$this->load->view("product_catelog", $data);
}
}
?>