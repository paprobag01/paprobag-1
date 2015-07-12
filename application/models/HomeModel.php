<?php
class HomeModel extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->library('email');
	}

	function verifyEmailAddress($verificationcode){  
		$data = array(
           'email_verified' => 1
        );

		$this->db->where('email_verification_code', $verificationcode);
		$this->db->update('login', $data); 
		return $this->db->affected_rows();

		// $sql = "update login set email_verified='1' WHERE email_verification_code=$verificationcode";
		// $this->db->query($sql, array($verificationcode));
		// return $this->db->affected_rows(); 
	} 
}
?>