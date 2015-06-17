<?php
class GetProduct extends CI_Controller{

		function __Construct(){
		parent::__construct();
		
				
               $this->load->library('site_sentry');
			}

	function section($id=null)
	{
		$sql=$this->db->query("select * from category where cat_id=".$id."");
		$res=$sql->row_array();
		extract($res);
		
		
		
		$sql1=$this->db->query("select * from sections where section_id=".$section_id."");
		$res1=$sql1->row_array();
		
		extract($res1);
		
		//echo $section_id."|".$section_name;
	}
}
?>