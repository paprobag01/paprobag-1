<?php
class Customize_model extends CI_Model{
	
	function save_customization_type(){

		$monogram=isset($_POST['monogram'])?$this->input->post('monogram') : 0;
		$mono_color=isset($_POST['mono_color'])?$this->input->post('mono_color') : 0;
		$mono_font=isset($_POST['mono_font'])?$this->input->post('mono_font') : 0;
		$mono_location=isset($_POST['mono_location'])?$this->input->post('mono_location') : 0;
		
		
		
		$data= array(
		'custom_type_name'=>strtoupper($this->input->post('custmztype')),
		'created_on'=>date('d-m-Y'),
		'steps'=>$this->input->post('custmzstep'),
		'customize_div_id'=>ucfirst(str_replace(' ', '_', $this->input->post('custmztype'))),
		'data_id'=>strtolower(str_replace(' ', '_', $this->input->post('custmztype'))),
		'customize_description'=>$this->input->post('customize_description'),
		'monogram'=>$monogram,
		'mono_color'=>$mono_color,
		'mono_font'=>$mono_font,
		'mono_location'=>$mono_location,
		'cat_id'=>$this->input->post('cat_id')
		);
		$this->db->trans_start();
		
		$this->db->insert('customize_type',$data);
		
		$this->db->trans_complete();
		
		
		if ($this->db->trans_status() === FALSE)
		{
			
			return -1; 
		}
		else
		{
		   
			return 1;
		}
	}
	function save_customization()
	{
		$img_url=$this->input->post('img_url');		
		
		if($_FILES['fileinput']['name']!=" " && $_FILES['fileinput']['name']!=null && $_FILES['fileinput']['name']!=""){
			
			if($img_url!=" " && $img_url!="" && $img_url!=null){
				
				if(file_exists($img_url)){
					unlink($img_url);
				}
			}
		
			$arr=$_FILES['fileinput']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput']['name']=rand().'.'.$ext;
			$config['upload_path'] ='upload/customizations';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				return;
			}    
			else{

				$link=$config['upload_path'].'/'.$_FILES['fileinput']['name'];
				
			}
		}
		else {
					
				$link=$img_url;
		}

		$link;
		
		$monogram=isset($_POST['monogram'])?$this->input->post('monogram') : 0;
		if(isset($_POST['mono_options']) && $_POST['mono_options']!=0 && $monogram!=0)
		{
		$mono_color=($_POST['mono_options']==1)?1 : 0;
		$mono_font=($_POST['mono_options']==2)?1 : 0;
		$mono_location=($_POST['mono_options']==3)?1 : 0;
		}
		else{
		$mono_color= 0;
		$mono_font= 0;
		$mono_location=0;
		}
		
		
		$data1= array(
		'custom_cat_id'=>$this->input->post('custmztypeid'),
		'custom_name'=>$this->input->post('custmzname'),
		'custom_price'=>$this->input->post('custmzprice'),
		'created'=>date('d-m-Y'),
		'image_url'=>$link,
		'cat_id'=>$this->input->post('cat_id1'),
		'monogram'=>$monogram,
		'mono_color'=>$mono_color,
		'mono_font'=>$mono_font,
		'mono_location'=>$mono_location
		);
		$this->db->trans_start();
		
		$this->db->insert('customizations',$data1);
		
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			
			return -1; 
		}
		else
		{
		   
			return 1;
		}
	}
	function get_customization_type()
	{
		
		//$this->db->trans_start();
		
		$sql=$this->db->query("select * from customize_type where deleted=0");
		
		
		//$this->db->trans_complete();
		return $sql->result_array();
	}
	function get_categories()
	{
		
		//$this->db->trans_start();
		
		$sql=$this->db->query("select * from categories where deleted=0");
		
		
		//$this->db->trans_complete();
		return $sql->result_array();
	}
	function listCustomizations()
	{
		$sql=$this->db->query("select ct.custom_type_name as custom_type_name, ct.steps as steps, ct.cat_id as cat_id, c.customize_id as customize_id, c.custom_cat_id as custom_cat_id, c.custom_name as custom_name, c.image_url FROM customize_type ct left join customizations c on ct.custom_cat_id = c.custom_cat_id where c.deleted=0 and ct.deleted=0");
		return $sql->result_array();
	}
	function getCustomizations($arr)
	{
		$id=$arr['id'];
		$sql=$this->db->query("select ct.custom_type_name as custom_type_name, ct.steps as steps, ct.customize_description as customize_description, c.customize_id as customize_id, c.custom_cat_id as custom_cat_id, c.custom_name as custom_name, c.custom_price as custom_price, c.image_url FROM customize_type ct left join customizations c on ct.custom_cat_id = c.custom_cat_id where customize_id=$id and ct.deleted=0 and c.deleted=0");
		return $sql->row_array();
		
	}

	function getCategory($arr)
	{
		$id=$arr['cat_id'];
		$sql=$this->db->query("select * from categories where cat_id=$id");
		
		return $sql->result_array();
	}
	function getCategories()
	{
		
		$sql=$this->db->query("select * from categories where deleted=0");
		
		return $sql->result_array();
	}
	function editCustomizationType()
	{
		$monogram=isset($_POST['monogram'])?$this->input->post('monogram') : 0;
		$mono_color=isset($_POST['mono_color'])?$this->input->post('mono_color') : 0;
		$mono_font=isset($_POST['mono_font'])?$this->input->post('mono_font') : 0;
		$mono_location=isset($_POST['mono_location'])?$this->input->post('mono_location') : 0;
		
		$id=$this->input->post('custom_cat_id');
		$this->db->where('custom_cat_id', $id);
		$data= array(
		'custom_type_name'=>strtoupper($this->input->post('custmztype')),
		'created_on'=>date('d-m-Y'),
		'steps'=>$this->input->post('custmzstep'),
		'customize_div_id'=>ucfirst(str_replace(' ', '_', $this->input->post('custmztype'))),
		'data_id'=>strtolower(str_replace(' ', '_', $this->input->post('custmztype'))),
		'customize_description'=>$this->input->post('customize_description'),
		'monogram'=>$monogram,
		'mono_color'=>$mono_color,
		'mono_font'=>$mono_font,
		'mono_location'=>$mono_location
		);
        $this->db->update('customize_type', $data); 
		$sql=$this->db->query("select * from customize_type where custom_cat_id=$id");
		
		$sql1=$this->db->query("select * from customizations where custom_cat_id=$id");
		
		
		$sqlArr=array_merge($sql->row_array(), $sql1->row_array());
		return $sqlArr;
	}
	function editCustomizations()
	{
		$id=$this->input->post('customize_id');
		$this->db->where('customize_id', $id);
		
		$img_url=$this->input->post('img_url');		
		
		if($_FILES['fileinput']['name']!=" " && $_FILES['fileinput']['name']!=null && $_FILES['fileinput']['name']!=""){
			
			if($img_url!=" " && $img_url!="" && $img_url!=null){
				
				if(file_exists($img_url)){
					unlink($img_url);
				}
			}
		
			$arr=$_FILES['fileinput']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput']['name']=rand().'.'.$ext;
			$config['upload_path'] ='upload/customizations';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				return;
			}    
			else{

				$link=$config['upload_path'].'/'.$_FILES['fileinput']['name'];
				
			}
		}
		else {
					
				$link=$img_url;
		}

		$link;
		
		//$this->site_sentry->Save_records($data);
		//redirect('cms/detail/home_view');
		$catid=$this->input->post('custom_catid');
		$data= array(
		'custom_cat_id'=>$catid,
		'custom_name'=>$this->input->post('custmzname'),
		'custom_price'=>$this->input->post('custmzprice'),
		'created'=>date('d-m-Y'),
		'image_url'=>$link,
		
		);
		$this->db->update('customizations', $data); 
		$sql=$this->db->query("select * from customize_type where custom_cat_id=$catid");
		
		$sql1=$this->db->query("select * from customizations where custom_cat_id=$catid");
		
		
		$sqlArr=array_merge($sql->row_array(), $sql1->row_array());
		return $sqlArr;
	}
	function deleteCustomization($custid)
	{
		$this->db->where('customize_id', $custid);
		$data= array(
		'deleted'=>1
		);
		$this->db->update('customizations', $data); 
	}
} 
?>