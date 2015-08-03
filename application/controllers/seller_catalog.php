<?php
class seller_catalog extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
	function index()
	{	
		$data = $this->common_model->get_head();

		$data['section'] = $this->common_model->getdistinct_id('sections','section_name','section_id');		
		$data['category'] = $this->common_model->getdistinct_id('category','cat_name','cat_id');
		$data['subcategory'] = $this->common_model->get_all_values('subcategory','sub_cat_id','sub_cat_name');
		$data['material'] = $this->common_model->get_all_values('material','material_id','material');
		
		$data['style'] = $this->common_model->getdistinct_value('style_details','style');
		
		$data['GSM'] = $this->common_model->getdistinct_value('filters','GSM_name');		
		$data['handle'] = $this->common_model->getdistinct_value('filters','handle','material_id');
		$data['print'] = $this->common_model->getdistinct_value('filters','print','material_id');
		$data['print_color'] = $this->common_model->getdistinct_value('filters','print_color','material_id');
		$data['lamination'] = $this->common_model->getdistinct_value('filters','lamination','material_id');
		$data['special_wrk'] = $this->common_model->getdistinct_value('filters','special_wrk','material_id');
		$data['size'] = $this->common_model->getdistinct_value('style_details','size','style_id');	

		$section_id=5;
		$cat_id=1;


		$data['sub_category_list'] = $this->common_model->getsubcategory($section_id,$cat_id);
				
		$this->load->view('header',$data);
		$this->load->view('seller_catalog_view1',$data);
		$this->load->view('footer');
	}
}	
?>