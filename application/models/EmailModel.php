<?php
class EmailModel extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->load->library('email');
  }

  function sendVerificatinEmail($email,$verificationText){
      $ci = get_instance();
      $ci->load->library('email');
      $config['protocol'] = "smtp";
      $config['smtp_host'] = "ssl://smtp.gmail.com";
      $config['smtp_port'] = "465";
      $config['smtp_user'] = "help@greenhandle.in"; 
      $config['smtp_pass'] = "greenhandle123";
      $config['charset'] = "utf-8";
      $config['mailtype'] = "html";
      $config['newline'] = "\r\n";

      $ci->email->initialize($config);

      $ci->email->from('help@greenhandle.in', 'Admin Team');
      $list = array($email);
      $ci->email->to($list);
      $ci->email->subject('Email Verification');
      $ci->email->message("Dear User,\n Please click on below URL or paste into 
                            your browser to verify your Email Address 
                            \n\n ".base_url()."verify/".$verificationText." \n\n\n Thanks \n Admin Team");
      $ci->email->send();
  }
}
?>