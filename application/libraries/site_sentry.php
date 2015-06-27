<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_sentry {
		
	public function __construct(){
		
		$this->CI =& get_instance();
		$this->CI->load->library('session');		
		$this->CI->load->database();
	}

	function Save_records($data){
		
		//if($this->CI->input->post('img_url'))
		//{
		$img_url=$this->CI->input->post('img_url');		
		
		if($_FILES['fileinput']['name']!=" " && $_FILES['fileinput']['name']!=null && $_FILES['fileinput']['name']!=""){
			
			if($img_url!=" " && $img_url!="" && $img_url!=null){
				
				if(file_exists($img_url)){
					unlink($img_url);
				}
			}
		
			$arr=$_FILES['fileinput']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->CI->load->library('upload', $config);
							
		if ( ! $this->CI->upload->do_upload("fileinput")){

				echo("{errors: {id:'name', msg:'" . $this->CI->upload->display_errors(). "'}}");
			
				////return;
			}    
			else{

				$link=$config['upload_path'].'/'.$_FILES['fileinput']['name'];
				
			}
		}
		else {
					
				$link=$img_url;
		}

		 //$link;
		
		
		
		$CI =& get_instance();
		
		$primary="";$table=$data['table'];

		if($table!=""){
			
		$primary_key = $this->CI->db->field_data($table);
		
		foreach ($primary_key as $field){
		   
		   if($field->primary_key==1){

				$primary=$field->name;
		   }
		}		 

		$id=$this->CI->input->post($primary);
		
		
		
		$arr = $this->CI->db->list_fields($table);

		foreach ($arr as $field)
		{
			if(isset($data[$field]) && $data[$field]!="" ){
				 
				$data1[$field]=$data[$field];						
			
			}else{
				
				if($field=="image_url")
				{
					//echo $field;
				$data1[$field]=$link;
				}
				else
				{
					
				$data1[$field]=$this->CI->input->post($field);
				}
			}
		}
		//die;
		if($id==" " || $id==null){
			
			$this->CI->db->insert($table,$data1);
		
		}else if($id!=" "){
			//print'<pre>';print_r($data1);exit;				
			$this->CI->db->where($primary,$id);
			$this->CI->db->update($table,$data1);	
		}
		return 1;
	
	}else{
		return 0;
	}
	
}

function insertsubcat($data=null)
	{
		$this->CI->db->insert('subcategories',$data);
		
	}
	
function save_slide($data){
		
		//if($this->CI->input->post('img_url'))
		//{
		$img_url=$this->CI->input->post('img_url');		
		
		if($_FILES['fileinput']['name']!=" " && $_FILES['fileinput']['name']!=null && $_FILES['fileinput']['name']!=""){
			
			if($img_url!=" " && $img_url!="" && $img_url!=null){
				
				if(file_exists($img_url)){
					unlink($img_url);
				}
			}
		
			$arr=$_FILES['fileinput']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->CI->load->library('upload', $config);
							
		if ( ! $this->CI->upload->do_upload("fileinput")){

				echo("{errors: {id:'name', msg:'" . $this->CI->upload->display_errors(). "'}}");
			
				////return;
			}    
			else{

				$link=$config['upload_path'].'/'.$_FILES['fileinput']['name'];
				
			}
		}
		else {
					
				$link=$img_url;
		}

		 //$link;
		
		
		
		$CI =& get_instance();
		
		$primary="";$table=$data['table'];

		if($table!=""){
			
		$primary_key = $this->CI->db->field_data($table);
		
		foreach ($primary_key as $field){
		   
		   if($field->primary_key==1){

				$primary=$field->name;
		   }
		}		 

		$id=$this->CI->input->post($primary);
		
		
			$data1['slide_on_home'] = $this->CI->input->post('slide_on_home');
		
		
		$arr = $this->CI->db->list_fields($table);

		foreach ($arr as $field)
		{
			if(isset($data[$field]) && $data[$field]!="" ){
				 
				$data1[$field]=$data[$field];						
			
			}else{
				
				if($field=="image_url")
				{
					//echo $field;
				$data1[$field]=$link;
				}
				else
				{
					
				$data1[$field]=$this->CI->input->post($field);
				}
			}
		}
		//die;
		if($id==" " || $id==null){
			
			$this->CI->db->insert($table,$data1);
		
		}else if($id!=" "){
			//print'<pre>';print_r($data1);exit;				
			$this->CI->db->where($primary,$id);
			$this->CI->db->update($table,$data1);	
		}
		return 1;
	
	}else{
		return 0;
	}
	
}

	function PopulateValues($data){

		$CI =& get_instance();
		
		$primary="";
		$primary_id="";
		
			if(isset($data['primary_id'])){
				$primary_id=$data['primary_id'];
			}
		
		$table=$data['table'];

		if($table!=""){
			
			$primary_key = $this->CI->db->field_data($table);
			
			foreach ($primary_key as $field){
			   
			   if($field->primary_key==1){

					$primary=$field->name;
			   }
			} 
			
			if($primary_id==""){
				
				$query = $this->CI->db->query("SELECT * FROM $table");

				foreach ($query->list_fields() as $field){
				   $fdata[$field]="";
				}
				
				return $fdata;

			}else if($primary_id!=""){

				$sql=$this->CI->db->query("select * from $table where $primary='$primary_id' ");
				
				$arr=$sql->row_array();
				return $arr;
			}
		}
	}

function get_selected($data=null){

	//print_r($data);exit();
	
	if(count($data)>0){
		
		$where=$data['where'];
		$table=$data['table'];
		$sql=$this->CI->db->query('select * from $table where $where');
		return $sql->result_array();
	}
}

function get_row($data){

	$table=$data['table'];
	$column=$data['col_name'];
	$val=$data[$column];
 
	$CI =& get_instance(); 

		if(count($data)>0){ 
				
			$sql=$this->CI->db->query("select * from $table where $column='$val'");
			return $sql->row_array();
		}
}

function get_all($data){

	//print'<pre>';print_r($data);exit;
	
	$CI =& get_instance(); 
	
	if(count($data)>0){
		
		$table=$data['table'];
		$where=$data['where'];
			
			if($where!="" && $where!=null){
				
				$and=$data['and'];
			}else{
				
				$and="";
			}

		$order_by=$data['order_by']; 

		if($table!=null){

			$sql=$this->CI->db->query("select * from $table $where $and $order_by ");
			
			return $sql->result_array();
		}
	}else{
		print"na";exit;
	}
	
}


}

?>