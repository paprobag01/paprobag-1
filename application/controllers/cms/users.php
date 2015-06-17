<?php
class users extends CI_Controller{
	
	function __Construct(){

		parent::__construct();
		$this->load->library('site_sentry');
		//$this->load->model('users_model');
	}

	function index(){

		$data['page']='users';
		
		$arr['table']='login';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by user_id desc";
		
		$data['page_data']=$this->site_sentry->get_all($arr); 
		
		$role['table']='roles';
		$role['where']="where active='yes'";
		$role['and']="";
		$role['order_by']="order by role_id desc";
		$data['role_arr']=$this->site_sentry->get_all($role);

		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/users_view',$data);
		$this->load->view('cms/footer_view',$data);
	}

	 
	function users_view(){

		$data['page']='users';
		
		$arr['table']='login';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by user_id desc";
		$role['table']='roles';
		$role['where']="where active='yes'";
		$role['and']="";
		$role['order_by']="order by role_id desc";
		$data['role_arr']=$this->site_sentry->get_all($role);

		$data['page_data']=$this->site_sentry->get_all($arr); 
		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/users_view',$data);
		$this->load->view('cms/footer_view',$data);
	}

	function save_users(){ 
		 
		$img_url=$this->input->post('img_url');		
		
		if($_FILES['fileinput']['name']!=" " && $_FILES['fileinput']['name']!=null &&					$_FILES['fileinput']['name']!=""){
			
			if($img_url!=" " && $img_url!="" && $img_url!=null){
				
				if(file_exists($img_url)){
					unlink($img_url);
				}
			}
		
			$arr=$_FILES['fileinput']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput']['name']=rand().'.'.$ext;
			$config['upload_path'] ='upload/users';
			$config['allowed_types'] = '*';
			$config['max_size'] = '00';
			$config['max_width'] = '00';
			$config['max_height'] = '00';

			$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				return;
			}    
			else{

				$link=$config['upload_path'].'/'.$_FILES['fileinput']['name'];
				
			}
		}
		else {
					
				$link=$img_url;
		}

		$data['profile_pic']=$link;
			
			if($this->input->post('user_id')==""){
				$data['password']=md5($this->input->post("password"));
			}

		$data['table']="login";
		
		$this->site_sentry->Save_records($data);
		redirect('users/users_view');
	}

	function add_users($users_id=null,$type=null){ 

		$data['primary_id']=$users_id;
		$data['table']="login";
		$arr['page_data']=$this->site_sentry->PopulateValues($data); 
		$arr['page']="users";
		$role['table']='roles';
		$role['where']="where active='yes'";
		$role['and']="";
		$role['order_by']="order by role_id desc";
		$arr['role_arr']=$this->site_sentry->get_all($role);
		
		$arr['type']=$type;

		$this->load->view('cms/header_view',$arr);
		$this->load->view('cms/add_users',$arr);
		$this->load->view('cms/footer_view',$arr);

	} 


	function delete_rec(){

		$this->users_model->delete_rec();
	}

}?>