<?php
class HomeModel extends CI_Model {

 function __construct()
  {
      // Call the Model constructor
      parent::__construct();
      $this->load->library('email');
  }
 
 
 function verifyEmailAddress($verificationcode){  
  $sql = "update trn_user set active_status='A' WHERE email_verification_code=?";
  $this->db->query($sql, array($verificationcode));
  return $this->db->affected_rows(); 
 }
 
}
?>