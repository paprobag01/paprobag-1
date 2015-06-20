<?php 
class Common_model extends CI_Model
{
function getAllDetails($data=null)
{
	if(count($data)>0){
		
		$where=$data['where'];
		$table=$data['table'];
		$order_by=$data['order_by'];
		$sql=$this->db->query('select * from '.$table.' '.$where.' '.$order_by.'');
		return $sql->result_array();
	}
}
function getDetail($data=null)
{
	if(count($data)>0){
		
		$where=$data['where'];
		$table=$data['table'];
		$order_by=$data['order_by'];
		$sql=$this->db->query('select * from '.$table.' '.$where.' '.$order_by.'');
		return $sql->row_array();
	}
}

function checkuser($data=null)
{
	try {
		$sql = $this->db->query("select * from login where (username='".$data['username']."' or email='".$data['username']."') and password='".$data['password']."'");
		
		$rowcount = $sql->num_rows();	
		
		if($rowcount>0)
		{
			return $sql->result_array();
		}
		else
		{
			echo "Invalid User";
		}
	} catch (Exception $e) {
		// print error
		redirect('/index','refrest');
	}
}

function getAllProducts($data){
		
	$start=0;
	$limit=8;

	if(isset($_GET['pagid']))
	{

		$pagid=$_GET['pagid'];
		$start=($pagid-1)*$limit;
	 $start;
	}
	else
	{
		$pagid=1;
	}
	if(count($data)>0){

		$where=$data['where'];
		$table=$data['table'];
		$sql=$this->db->query('select * from '.$table.' '.$where.' limit '.$start.', '.$limit.'');
		return array($sql->result_array(), $pagid);
	}
}
function getPagination($data=null)
{
	
	if(count($data)>0){
	
		$where=$data['where'];
		$table=$data['table'];
		$order_by=$data['order_by'];
		
	$sql=$this->db->query('SELECT COUNT(*) as cnt FROM '.$table.' '.$where.'');
	$limit=8;

	foreach($sql->result_array() as $rw)
	{
		$rows=$rw['cnt'];
	}
	$total=ceil($rows/$limit);
	
	return array($total, $rows);
	}
}

//newly added
function getdatacat($id=null,$type=null,$c=null)
{
		
		$sql = $this->db->query("select * from category where cat_id=$id and section_id=$type");
		return $sql->result_array();
}

function register($data=null)
{
	try {
		$this->db->insert('login',$data);
	    return $this->db->insert_id();
	} catch (Exception $e) {
		// erro page
		$error = "Registration Error";
		return $error;
	}

}

function getdataprod($id=null,$type=null)
{
		$sql = $this->db->query("select * from products where cat_id=$id and section_id=$type");
		return $sql->result_array();
		
}
function getprodimg($id=null,$type=null,$prod_id)
{
		
		$sql = $this->db->query("select * from products where cat_id=$type and section_id=$id and prod_id=$prod_id");
		return $sql->result_array();
		
}
function getcategry($type=null)
{
		$sql = $this->db->query("select * from category where section_id=$type");
		return $sql->result_array();
		
}
function get_head()
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
		
		return $data;
}
}
?>