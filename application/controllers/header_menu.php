<?php 
class Header_menu extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
		$this->load->library('encrypt');
		
		
	}

	function add()
	{
		$paper_prod_head['where']="where section_id=0 and cat_id=0";
		$paper_prod_head['table']='subcategory';
		$paper_prod_head['order_by']='';
		$data['paper_prod_head']=$this->common_model->getAllDetails($paper_prod_head);

		$eco_prod_head['where']="where section_id=0 and cat_id=1";
		$eco_prod_head['table']='subcategory';
		$eco_prod_head['order_by']='';
		$data['eco_prod_head']=$this->common_model->getAllDetails($eco_prod_head);

		$box_prod_head['where']="where section_id=0 and cat_id=2";
		$box_prod_head['table']='subcategory';
		$box_prod_head['order_by']='';
		$data['box_prod_head']=$this->common_model->getAllDetails($box_prod_head);

		$pouch_prod_head['where']="where section_id=0 and cat_id=3";
		$pouch_prod_head['table']='subcategory';
		$pouch_prod_head['order_by']='';
		$data['pouch_prod_head']=$this->common_model->getAllDetails($pouch_prod_head);

		$office_prod_head['where']="where section_id=0 and cat_id=4";
		$office_prod_head['table']='subcategory';
		$office_prod_head['order_by']='';
		$data['office_prod_head']=$this->common_model->getAllDetails($office_prod_head);

		$paper_prod_ready['where']="where section_id=1 and cat_id=5";
		$paper_prod_ready['table']='subcategory';
		$paper_prod_ready['order_by']='';
		$data['paper_prod_ready']=$this->common_model->getAllDetails($paper_prod_ready);

		$eco_prod_ready['where']="where section_id=1 and cat_id=6";
		$eco_prod_ready['table']='subcategory';
		$eco_prod_ready['order_by']='';
		$data['eco_prod_ready']=$this->common_model->getAllDetails($eco_prod_ready);

		$box_prod_ready['where']="where section_id=1 and cat_id=7";
		$box_prod_ready['table']='subcategory';
		$box_prod_ready['order_by']='';
		$data['box_prod_ready']=$this->common_model->getAllDetails($box_prod_ready);

		$pouch_prod_ready['where']="where section_id=1 and cat_id=8";
		$pouch_prod_ready['table']='subcategory';
		$pouch_prod_ready['order_by']='';
		$data['pouch_prod_ready']=$this->common_model->getAllDetails($pouch_prod_ready);

		$office_prod_ready['where']="where section_id=1 and cat_id=9";
		$office_prod_ready['table']='subcategory';
		$office_prod_ready['order_by']='';
		$data['office_prod_ready']=$this->common_model->getAllDetails($office_prod_ready);

		$accessory_ready['where']="where section_id=1 and cat_id=15";
		$accessory_ready['table']='subcategory';
		$accessory_ready['order_by']='';
		$data['accessory_ready']=$this->common_model->getAllDetails($accessory_ready);

		return $data;
	}
}