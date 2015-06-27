<?php 
class Subcategories_model extends CI_Model
{
	
	function getCategories($arr)
	{
		
		$where=$arr['where'];
		$table=$arr['table'];
			
			if($where!="" && $where!=null){
				
				$and=$arr['and'];
			}else{
				
				$and="";
			}
			$order_by=$arr['order_by']; 
			$fields=$arr['fields'];
		$sql=$this->db->query("select $fields from $table $where $and $order_by");
		
		return $sql->result_array();
	}

	
	
}
?>