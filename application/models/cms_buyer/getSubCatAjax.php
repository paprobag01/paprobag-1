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
        $query = $this->db->query("select * from subcategory where cat_id=$id");
         
        
        
		return $query->result_array();
        }
		
		function get_filter_vals($id,$new)
		{
				$query = $this->db->query("select * from subcategory where cat_id=$id and section_id=$new");
			return $query->result_array();
		}
		
		function getmaterial($category_id)
		{
				$query = $this->db->query("select * from filters where material_name=$category_id");
				return $query->result_array();
		}
		function get_GSM($category_id)
		{
				
				$query1 = $this->db->query("select * from filters where filter_id=$category_id");
				return $query1->result_array();
		}
		function get_materialdata($cat_id,$section_id,$sub_cat_id)
		{
				$query1 = $this->db->query("select * from filters where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id");
				return $query1->result_array();
		}
		
}
?>