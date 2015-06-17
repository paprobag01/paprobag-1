<?php 
class GetSubCatAjax extends CI_Model
{
	
    function get_subcategories($catids) {
		$data="";
        $query = $this->db->query("select cat_id, cat_name from category where section_id=$catids");
         
        
        
		return $query->result_array();
        }
		
		function get_filters($catids) {
		$data="";
        $query = $this->db->query("select * from subcategories where cat_id=$id");
         
        
        
		return $query->result_array();
        }
		function get_filter_vals($id,$new)
	{
			$query = $this->db->query("select * from subcategories where cat_id=$id and section_id=$new");
		return $query->result_array();
	}
    
}
?>