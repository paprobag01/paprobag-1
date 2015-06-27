<?php 
class Filter_model extends CI_Model
{
	
		function Save_records()
		{
			//$CI =& get_instance();
		
		$data1['section_id'] = $this->input->post('sec_id');
		$data1['cat_id'] = $this->input->post('prod_sub_categories');
		$data1['sub_cat_id'] = $this->input->post('sub_categories');
		$data1['filter_name'] = $this->input->post('filter_name');
		
		$this->db->insert('filters',$data1);
		return 1;
	
		}
		
}
?>