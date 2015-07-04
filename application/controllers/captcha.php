<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Captcha extends CI_Controller {

  function __Construct()
  {
    parent::__construct();
   $this->load->helper('captcha');
  }

 function index()
 {
  $vals = array(
    'word'  => 'Random word',
    'img_path'  => './paprobag/',
    'img_url' => base_url().'captcha/',
    'font_path' => './path/to/fonts/texb.ttf',
    'img_width' => '150',
    'img_height' => 30,
    'expiration' => 7200
    );

$cap = create_captcha($vals);
$data['image'] = $cap['image'];
echo $cap['image'];
die();

        
        $this->load->view('captcha', $data);
   } 


    
}
