<?php
Class Login extends CI_Controller{
	
	function __Construct(){
		
		parent::__construct();
		$this->load->model('cms_seller/login_model');
	}

	function index(){

		$this->load->view('cms_seller/login_view');
	}

	function changepassword(){
		 
		$this->login_model->change_password();
		redirect("cms_seller/login","refresh");
	}

	function check_user(){
		
		$check_user=$this->login_model->check_user();
		if(count($check_user) > 0 ){
			
			extract($check_user);

			$this->session->set_userdata('user_id',$user_id);
			$this->session->set_userdata('first_name',$first_name);
			$this->session->set_userdata('last_name',$last_name);
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('user_type',$user_type);
			$this->session->set_userdata('account_status',$account_status);
			$this->session->set_userdata('date_of_deactivation',$date_of_deactivation);
			$this->session->set_userdata('role_id',$role_id); 
			$this->session->set_userdata('profile_pic',$profile_pic); 
			
			$role_arr=$this->login_model->get_rolerights($role_id);
			$view="";$add="";$edit="";$delete="";

			if(count($role_arr)>0){

				$role_rights=$role_arr['role_rights'];
				$arr=explode(",",$role_rights);
				
					if(isset($arr[0])){
						$view=$arr[0];
					}
					if(isset($arr[1])){
						$add=$arr[1];
					}
					if(isset($arr[2])){
						$edit=$arr[2];
					}
					if(isset($arr[3])){
						$delete=$arr[3];
					}
				
			}

			$this->session->set_userdata('view',$view);
			$this->session->set_userdata('add',$add);
			$this->session->set_userdata('edit',$edit);
			$this->session->set_userdata('delete',$delete); 

			redirect('cms_seller/dashboard','refresh');
		
		} else { 
			
			redirect('cms_seller/login','refresh');
		}
	}

	function logout(){
		
		$this->session->unset_userdata('user_id',"");
		$this->session->unset_userdata('first_name',"");
		$this->session->unset_userdata('last_name',"");
		$this->session->unset_userdata('username',"");
		$this->session->unset_userdata('user_type',"");
		$this->session->unset_userdata('account_status',"");
		$this->session->unset_userdata('date_of_deactivation',"");
		$this->session->unset_userdata('role_id',"");	
		$this->session->unset_userdata('profile_pic',"");
		redirect('cms_seller/login','refresh');
	}

}
?>