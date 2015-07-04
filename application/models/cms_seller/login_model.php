<?php
class Login_model extends CI_Model{
	
	function check_user(){

		//print'<pre>';print_r($_POST);exit;
		
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		
		$sql=$this->db->query("select * from login where username='$username' and password='$password' and account_status='yes'");

		//print_R($sql->row_array());exit;
		return $sql->row_array();
	}

	function get_rolerights($role_id=null){
		
		if($role_id!=""){
		
			$sql=$this->db->query("select * from roles where role_id='$role_id' and active='yes'");
			return $sql->row_array(); 

		}else {

			return false;
		}
	}

	function change_password(){
		//print'<pre>';print_r($_POST);exit;	
		$username=$this->input->post('username');
		$oldpassword=md5($this->input->post('oldpassword'));
		$newpassword=md5($this->input->post('newpassword'));
		
		$sql=$this->db->query("update login set password='$newpassword' where  username='$username' and password='$oldpassword'");
		
		return $this->db->affected_rows();
	}
} 
?>