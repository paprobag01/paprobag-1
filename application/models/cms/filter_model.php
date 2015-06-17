<?php 
class Filter_model extends CI_Model
{
	
		function Save_records($data)
		{
			//$CI =& get_instance();
		
		$primary="";
		$table=$data['table'];

		if($table!=""){
			
		$primary_key = $this->db->field_data($table);
		
		
		
		foreach ($primary_key as $field){
		   
		   if($field->primary_key==1){

				$primary=$field->name;
		   }
		}		 

		$id=$this->input->post($primary);

		$arr = $this->db->list_fields($table);
		
		foreach ($arr as $field)
		{
			
			if(isset($data[$field]) && $data[$field]!="" ){
				 
				$data1[$field]=$data[$field];	
				
			
			}else{
				if(is_array($this->input->post($field)))
				{
					
					$data1[$field]=implode(',',$this->input->post($field));
				}
				else{
				$data1[$field]=$this->input->post($field);
				}
			}
			
		}
		
		if($id==" " || $id==null){
			
			$this->db->insert($table,$data1);
		
		}else if($id!=" "){
			//print'<pre>';print_r($data1);exit;				
			$this->db->where($primary,$id);
			$this->db->update($table,$data1);	
		}
		return 1;
	
	}else{
		return 0;
	}
		}
}
?>