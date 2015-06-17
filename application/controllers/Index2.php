<?php
class Index2 extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		
	}
	function index()
	{
		
		$catArr="";
		$catNameArr="";
		$childCatArr="";
		$subCatArr="";
		$childCatIdArr="";
		$subCatIdArr="";
		$sectionNameArr=array();
		$arr['table']='sections';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 
		$P_CatIdArr="";

		$data['section_data']=$this->site_sentry->get_all($arr); 
		foreach($data['section_data'] as $row)
		{
			$sql=$this->db->query("select * from category where section_id=".$row['section_id']." and cat_type=1" );
			$res=$sql->result_array();
			//$catArr[$row['section_id']][]=$res;
			foreach($res as $rw)
			{
			$P_CatIdArr[$row['section_id']][]=$rw['cat_id'];
			$catNameArr[$row['section_id']][]=$rw['cat_name'];
				
			$catIdArr=explode(",",$rw['child_cat_id']);
				for($i=0;$i<count($catIdArr);$i++)
				{
					$sql1=$this->db->query("select * from category where cat_id=".$catIdArr[$i]." and section_id=".$row['section_id']." and cat_type=2" );
					$res1=$sql1->row_array();
					extract($res1);
					$childCatArr[$row['section_id']][$rw['cat_id']][]=$cat_name;
				}
			}
		}
		
		//print_r($childCatArr[6]); die;
		$data['P_CatIdArr']=$P_CatIdArr;
		$data['sectionNameArr']=$sectionNameArr;
		$data['catArr']=$catArr;
		$data['catNameArr']=$catNameArr;
		$data['subCatArr']=$subCatArr;
		
		
		$data['childCatArr']=$childCatArr;
		$data['childCatIdArr']=$childCatIdArr;
		$data['subCatIdArr']=$subCatIdArr;
		
		
		
		
		$this->load->view('header',$data);
		$this->load->view('index-2_view');
		$this->load->view('footer');
	}
}	
?>