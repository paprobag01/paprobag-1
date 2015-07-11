<?php
class Seller_profile extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
	function index()
	{	
		
		$data = $this->common_model->get_head();
		
		$section_data['where']="";
		$section_data['table']='sections';
		$section_data['order_by']='';
		$data['section'] = $this->common_model->getAllDetails($section_data);

		$section_id=5;
		$cat_id=1;


		$data['sub_category_list'] = $this->common_model->getsubcategory($section_id,$cat_id);
		
		
		$this->load->view('header',$data);
		$this->load->view('seller_profile_view');
		$this->load->view('footer');
	}
}	
?>