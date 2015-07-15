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
}
?>