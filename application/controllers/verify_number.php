<?php
// login role id
// role_id = 5 (seller)
// role_id = 2 (customer)

class Verify_number extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');		
	}
	
	// To show user login page
	function index()
	{
		$keymatch = $this->input->post('keymatch');
		$otp = $this->input->post('otp');

		// Call the Cognalys api
		$app_id = '876386c270d54e3e8b55dd7';
		$access_token = '5e0a726cd84178bacd6fe1d8e590b7fbce4d3d8b';
		$url = "http://www.cognalys.com/api/v1/otp/confirm/?app_id=".$app_id."&access_token=".$access_token."&keymatch=".$keymatch."&otp=".$otp;
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $tmp = curl_exec($ch);
        curl_close($ch);
        echo $tmp;	
	}
}