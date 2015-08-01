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
		$data['where']="where section_id = $section_id";
		$data['table']='category';
		$data['order_by']='';
		$categories = $this->common_model->getAllDetails($data);
		//$category_array = array();

		// $i = 0;
		// foreach ($categories as $key => $value) {
		// 	$section_id_array = explode(',', $value['section_ids']);
		// 	if(in_array($section_id, $section_id_array))
		// 	{
		// 		$category_array[$i]['category'] = $value['cat_name'];
		// 		$category_array[$i]['category_id'] = $value['cat_id'];
		// 		$i++;
		// 	}
		// }
		echo json_encode($categories);
	}

	function get_sub_categories()
	{
		$category_id = intval($_POST['category_id']);
		$section_id = intval($_POST['section_id']);
		$data['where']="where cat_id = $category_id and section_id = $section_id";
		$data['table']='subcategory';
		$data['order_by']='';
		$sub_categories = $this->common_model->getAllDetails($data);
		// $sub_category_array = array();

		// $i = 0;
		// foreach ($sub_categories as $key => $value) {
		// 	$category_id_array = explode(',', $value['category_ids']);
		// 	if(in_array($category_id, $category_id_array))
		// 	{
		// 		$sub_category_array[$i]['sub_category'] = $value['subcategory'];
		// 		$sub_category_array[$i]['sub_category_id'] = $value['subcategory_id'];
		// 		$i++;
		// 	}
		// }
		echo json_encode($sub_categories);
	}

	function get_styles()
	{
		$category_id = intval($_POST['category_id']);
		$section_id = intval($_POST['section_id']);
		$sub_category_id = intval($_POST['sub_category_id']);
		$data['where']="where section_id = $section_id and cat_id = $category_id and sub_cat_id = $sub_category_id";
		$data['table']='style_details';
		$data['order_by']='';
		$styles = $this->common_model->getAllDetails($data);
		// $sub_category_array = array();

		// $i = 0;
		// foreach ($sub_categories as $key => $value) {
		// 	$category_id_array = explode(',', $value['category_ids']);
		// 	if(in_array($category_id, $category_id_array))
		// 	{
		// 		$sub_category_array[$i]['sub_category'] = $value['subcategory'];
		// 		$sub_category_array[$i]['sub_category_id'] = $value['subcategory_id'];
		// 		$i++;
		// 	}
		// }
		echo json_encode($styles);
	}

	function get_materials()
	{
		$category_id = intval($_POST['category_id']);
		$section_id = intval($_POST['section_id']);
		$sub_category_id = intval($_POST['sub_category_id']);
		$data['where']="where section_id = $section_id and cat_id = $category_id and sub_cat_id = $sub_category_id";
		$data['table']='filters';
		$data['order_by']='';
		$materials = $this->common_model->getAllDetails($data);
		// $material_array = array();

		// $i = 0;
		// foreach ($materials as $key => $value) {
		// 	$sub_category_id_array = explode(',', $value['sub_category_ids']);
		// 	if(in_array($sub_category_id, $sub_category_id_array))
		// 	{
		// 		$material_array[$i]['material'] = $value['material'];
		// 		$material_array[$i]['material_id'] = $value['material_id'];
		// 		$i++;
		// 	}
		// }
		echo json_encode($materials);
	}

	function get_material_dependent_filters()
	{
		$material_id = $_POST['material_id'];
		$data['where']="where material_id = '".$material_id."'";
		$data['table']='filters';
		$data['order_by']='';
		$filters = $this->common_model->getAllDetails($data);
		
		echo json_encode($filters);
	}

	function get_style_dependent_filters()
	{
		$style_id = $_POST['style_id'];
		$data['where']="where style_id = ".$style_id;
		$data['table']='style_details';
		$data['order_by']='';
		$sizes = $this->common_model->getAllDetails($data);
		// $size_array = array();
		// $i = 0;

		// foreach ($styles as $key => $value) {
		// 	// Get size data
		// 	$data['where']="where size_id in (".$value['size_ids'].")";
		// 	$data['table']='size';
		// 	$data['order_by']='';
		// 	$sizes = $this->common_model->getAllDetails($data);
		// 	foreach ($sizes as $size_key => $size_value) {
		// 		$size_array[$i]['size'] = $size_value['size'];
		// 		$size_array[$i]['size_id'] = $size_value['size_id'];	
		// 		$i++;			 
		// 	}
		// }
		echo json_encode($sizes);
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