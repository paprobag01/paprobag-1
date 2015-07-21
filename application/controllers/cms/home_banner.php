<?php
class Header_banner extends CI_Controller{
	
	function __Construct(){

		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms/login");
				}
		$this->load->library('site_sentry');
		//$this->load->model('users_model');
	}

	function index(){

		$data['page']='headerbanner';
		
		$arr['table']='slider';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by slider_id desc";
		
		$data['page_data']=$this->site_sentry->get_all($arr); 
		
		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/headerBanner_view',$data);
		$this->load->view('cms/footer_view',$data);
	}

	 
	function slider_view(){

		$data['page']='slider';
		
		$arr['table']='slider';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by slider_id desc"; 
		$data['page_data']=$this->site_sentry->get_all($arr); 
		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/slider_view',$data);
		$this->load->view('cms/footer_view',$data);
	}

	function verify_slide_data($type=null)
	{
		$this->form_validation->set_rules('slider_name', 'Name', 'trim|required|min_length[3]|max_length[12]|xss_clean|is_unique[sections.section_name]|alpha');
		$this->form_validation->set_rules('slider_status', 'status', 'required');
		$this->form_validation->set_rules('slide_on_home', 'Slide On Home', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$arr['type']=$type;
			$arr['error'] = 'Please Enter Correct Category name';
			
			$this->load->view('cms/header_view',$arr);
			$this->load->view('cms/add_slider',$arr);
			$this->load->view('cms/footer_view',$arr);
		}
		else
		{
			$this->save_slider();
		}
	}
	function save_slider(){ 
		
		$img_url=$this->input->post('img_url');		
		
		if($_FILES['fileinput']['name']!=" " && $_FILES['fileinput']['name']!=null && $_FILES['fileinput']['name']!=""){
			
			if($img_url!=" " && $img_url!="" && $img_url!=null){
				
				if(file_exists($img_url)){
					unlink($img_url);
				}
			}
		
			$arr=$_FILES['fileinput']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput']['name']=rand().'.'.$ext;
			$config['upload_path'] ='upload/slide';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

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

		$data['slider_image']=$link;
		$data['slide_on_home']=$this->input->post('slide_on_home');
		
			$data['table']="slider"; 
		$this->site_sentry->save_slide($data);
		redirect('cms/slider/slider_view');
	}

	function add_slider($slider_id=null,$type=null){ 

		$data['primary_id']=$slider_id;
		$data['table']="slider";
		$arr['page_data']=$this->site_sentry->PopulateValues($data); 
		$arr['page']="slider";
	/*	$role['table']='roles';
		$role['where']="where active='yes'";
		$role['and']="";
		$role['order_by']="order by role_id desc";
		$arr['role_arr']=$this->site_sentry->get_all($role); */
		
		$arr['type']=$type;

		$this->load->view('cms/header_view',$arr);
		$this->load->view('cms/add_banner_view',$arr);
		$this->load->view('cms/footer_view',$arr);

	} 


	function delete_rec(){
			

			$slider_id=$this->input->post('slider_id');
			$sql=$this->db->query("select * from slider where slider_id='$slider_id'");
			$arr=$sql->row_array();
				if(count($arr)>0){
					$img=$arr['slider_image'];
					if(file_exists($img)){
						unlink($img);
					}
				}
				$sql_delete=$this->db->query("delete from slider  where  slider_id='$slider_id'");
				print_R($this->db->affected_rows());
	}
   
   
    
}?>