<?php 
class Filters extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->model('common_model');		
	}
	function index()
	{
		// $this->load->view('header');
		// $this->load->view('index_view');
		// $this->load->view('footer');
	}
	function get_sections()
	{
		$data['where']="";
		$data['table']='section';
		$data['order_by']='';
		$sections = $this->common_model->getAllDetails($data);
		echo json_encode($sections);
	}

	function get_categories()
	{
		$section_id = $_POST['section_id'];
		$data['where']="";
		$data['table']='category_table';
		$data['order_by']='';
		$categories = $this->common_model->getAllDetails($data);
		$category_array = array();

		$i = 0;
		foreach ($categories as $key => $value) {
			$section_id_array = explode(',', $value['section_ids']);
			if(in_array($section_id, $section_id_array))
			{
				$category_array[$i]['category'] = $value['category'];
				$category_array[$i]['category_id'] = $value['category_id'];
				$i++;
			}
		}
		echo json_encode($category_array);
	}

	function get_sub_categories()
	{
		$category_id = $_POST['category_id'];
		$data['where']="";
		$data['table']='subcategory_table';
		$data['order_by']='';
		$sub_categories = $this->common_model->getAllDetails($data);
		$sub_category_array = array();

		$i = 0;
		foreach ($sub_categories as $key => $value) {
			$category_id_array = explode(',', $value['category_ids']);
			if(in_array($category_id, $category_id_array))
			{
				$sub_category_array[$i]['sub_category'] = $value['subcategory'];
				$sub_category_array[$i]['sub_category_id'] = $value['subcategory_id'];
				$i++;
			}
		}
		echo json_encode($sub_category_array);
	}

	function get_materials()
	{
		$sub_category_id = $_POST['sub_category_id'];
		$data['where']="";
		$data['table']='material';
		$data['order_by']='';
		$materials = $this->common_model->getAllDetails($data);
		$material_array = array();

		$i = 0;
		foreach ($materials as $key => $value) {
			$sub_category_id_array = explode(',', $value['sub_category_ids']);
			if(in_array($sub_category_id, $sub_category_id_array))
			{
				$material_array[$i]['material'] = $value['material'];
				$material_array[$i]['material_id'] = $value['material_id'];
				$i++;
			}
		}
		echo json_encode($material_array);
	}

	function get_material_dependent_filters()
	{
		$material_id = $_POST['material_id'];
		$data['where']="where material_id = '".$material_id."'";
		$data['table']='filter_details';
		$data['order_by']='';
		$filters = $this->common_model->getAllDetails($data);
		$filters_array = array();
		$i = 0;

		foreach ($filters as $key => $value) {
			// Get gsm data
			$gsm_array = explode(',', $value['gsm_ids']);
			$data['where']="where gsm_id in (".$value['gsm_ids'].")";
			$data['table']='gsm';
			$data['order_by']='';
			$gsms = $this->common_model->getAllDetails($data);
			foreach ($gsms as $gsm_key => $gsm_value) {
				$filters_array['gsm'][$i]['gsm'] = $gsm_value['gsm'];
				$filters_array['gsm'][$i]['gsm_id'] = $gsm_value['gsm_id'];
				$i++;				 
			}

			// Get style data
			$i = 0;
			$style_array = explode(',', $value['style_ids']);
			$data['where']="where style_id in (".$value['style_ids'].")";
			$data['table']='style';
			$data['order_by']='';
			$styles = $this->common_model->getAllDetails($data);
			foreach ($styles as $style_key => $style_value) {
				$filters_array['style'][$i]['style'] = $style_value['style'];
				$filters_array['style'][$i]['style_id'] = $style_value['style_id'];				 
				$i++;
			}

			// Get size data
			$i = 0;
			$size_array = explode(',', $value['size_ids']);
			$data['where']="where size_id in (".$value['size_ids'].")";
			$data['table']='size';
			$data['order_by']='';
			$sizes = $this->common_model->getAllDetails($data);
			foreach ($sizes as $size_key => $size_value) {
				$filters_array['size'][$i]['size'] = $size_value['size'];
				$filters_array['size'][$i]['size_id'] = $size_value['size_id'];	
				$i++;			 
			}

			// Get handle data
			$i = 0;
			$handle_array = explode(',', $value['handle_ids']);
			$data['where']="where handle_id in (".$value['handle_ids'].")";
			$data['table']='handle';
			$data['order_by']='';
			$handles = $this->common_model->getAllDetails($data);
			foreach ($handles as $handle_key => $handle_value) {
				$filters_array['handle'][$i]['handle'] = $handle_value['handle'];
				$filters_array['handle'][$i]['handle_id'] = $handle_value['handle_id'];				 
				$i++;
			}

			// Get Print type
			$i = 0;
			$print_array = explode(',', $value['print_ids']);
			$data['where']="where print_id in (".$value['print_ids'].")";
			$data['table']='print';
			$data['order_by']='';
			$prints = $this->common_model->getAllDetails($data);
			foreach ($prints as $print_key => $print_value) {
				$filters_array['print'][$i]['print'] = $print_value['print'];
				$filters_array['print'][$i]['print_id'] = $print_value['print_id'];				 
				$i++;
			}

			// Get lamination data
			$i = 0;
			$lamination_array = explode(',', $value['lamination_ids']);
			$data['where']="where lamination_id in (".$value['lamination_ids'].")";
			$data['table']='lamination';
			$data['order_by']='';
			$laminations = $this->common_model->getAllDetails($data);
			foreach ($laminations as $lamination_key => $lamination_value) {
				$filters_array['lamination'][$i]['lamination'] = $lamination_value['lamination'];
				$filters_array['lamination'][$i]['lamination_id'] = $lamination_value['lamination_id'];				 
				$i++;
			}

			// Get special work data
			$i = 0;
			$special_work_array = explode(',', $value['special_work_ids']);
			$data['where']="where special_work_id in (".$value['special_work_ids'].")";
			$data['table']='special_work';
			$data['order_by']='';
			$special_works = $this->common_model->getAllDetails($data);
			foreach ($special_works as $special_work_key => $special_work_value) {
				$filters_array['special_work'][$i]['special_work'] = $special_work_value['special_work'];
				$filters_array['special_work'][$i]['special_work_id'] = $special_work_value['special_work_id'];				 
				$i++;
			}
		}
		echo json_encode($filters_array);
	}

	function get_style_dependent_filters()
	{
		$style_id = $_POST['style_id'];
		$data['where']="where style_id = '".$style_id."'";
		$data['table']='style';
		$data['order_by']='';
		$styles = $this->common_model->getAllDetails($data);
		$size_array = array();
		$i = 0;

		foreach ($styles as $key => $value) {
			// Get size data
			$data['where']="where size_id in (".$value['size_ids'].")";
			$data['table']='size';
			$data['order_by']='';
			$sizes = $this->common_model->getAllDetails($data);
			foreach ($sizes as $size_key => $size_value) {
				$size_array[$i]['size'] = $size_value['size'];
				$size_array[$i]['size_id'] = $size_value['size_id'];	
				$i++;			 
			}
		}
		echo json_encode($size_array);
	}

	function get_print_colors()
	{
		$print_id = $_POST['print_id'];
		$data['where']="";
		$data['table']='print_color';
		$data['order_by']='';
		$print_colors = $this->common_model->getAllDetails($data);
		$print_colors_array = array();

		$i = 0;
		foreach ($print_colors as $key => $value) {
			$print_id_array = explode(',', $value['print_ids']);
			if(in_array($print_id, $print_id_array))
			{
				$print_colors_array[$i]['print_color'] = $value['print_color'];
				$print_colors_array[$i]['print_color_id'] = $value['print_color_id'];
				$i++;
			}
		}
		echo json_encode($print_colors_array);
	}
}
?>