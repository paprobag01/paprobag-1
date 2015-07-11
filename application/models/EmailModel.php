<?php
class EmailModel extends CI_Model {

  function __construct()
  {
      // Call the Model constructor
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

  $ci->email->from('help@greenhandle.in', 'Blabla');
  $list = array('paprobag01@gmail.com');
  $ci->email->to($list);
  $this->email->reply_to('paprobag02@gmail.com', 'Explendid Videos');
  $ci->email->subject('This is an email test');
  $ci->email->message('It is working. Great!');
  $ci->email->send();

//   $config = Array(
//     'protocol' => 'smtp',
//     'smtp_host' => 'ssl://smtp.gmail.com',
//     'smtp_port' => '465',
//     'smtp_user' => 'help@greenhandle.in',
//     'smtp_pass' => 'greenhandle123',
//     'mailtype'  => 'html', 
//     'charset'   => 'iso-8859-1',
//     'starttls'  => true,
//     'newline'   => "\r\n"

// );
  
//   $this->load->library('email', $config);
//   $this->email->set_newline("\r\n");
//   $this->email->from('help@greenhandle.in', "Admin Team");
//   $this->email->to($email);  
//   $this->email->subject("Email Verification");
//   $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://www.greenhandle.in/verify/".$verificationText."\n"."\n\nThanks\nAdmin Team");
//   if($this->email->send()){
//     echo 'true';
//   }else{
//     echo 'false';
//   }
  echo $this->email->print_debugger();

  
 }
}
?>