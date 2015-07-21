<?php
class Header_banner extends CI_Controller{
	
	function __Construct(){

		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms/login");
				}
		$this->load->library('site_sentry');
		//$this->load->model('common_model');
	}

	function index(){

		$data['page']='headerbanner';
		
		$arr['table']='header_slider';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="";
		
		$data['page_data']=$this->site_sentry->get_all($arr); 
		
		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/headerBanner_view',$data);
		$this->load->view('cms/footer_view',$data);
	}

	 
	function slider_view(){

		$data['page']='headerbanner';
		
		$arr['table']='slider';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by slider_id desc"; 
		$data['page_data']=$this->site_sentry->get_all($arr); 
		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/slider_view',$data);
		$this->load->view('cms/footer_view',$data);
	}

	function verify_slide_data($type=null,$slider_id=null)
	{
		$this->form_validation->set_rules('slider_name', 'Name', 'trim|required|min_length[3]|max_length[30]|xss_clean|is_unique[sections.section_name]|alpha');
		$this->form_validation->set_rules('slider_status', 'status', 'required');
		$this->form_validation->set_rules('slide_on_head', 'Slide On Home', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$arr['type']=$type;
			$arr['error'] = 'Please Enter Correct Category name';

			$section_list['table']='sections';
			$section_list['where']="";
			$section_list['and']="";
			$section_list['order_by']="";		
			$arr['sec_data']=$this->site_sentry->get_all($section_list);

			$this->load->view('cms/header_view',$arr);
			$this->load->view('cms/add_banner_view',$arr);
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

		$data = array(
				'slide_on_head' => $this->input->post('slide_on_head'),
				'section_id' => $this->input->post('sec_id'),
				'cat_id' => $this->input->post('prod_sub_categories'),
				'sub_cat_id' => $this->input->post('sub_categories'),
				'image' =>  $link,
				'image_name' => $this->input->post('slider_name'),
				'status' => $this->input->post('slider_status'),
			);
		
			$this->db->insert('header_slider',$data);
		redirect('cms/header_banner');
	}

	function add_slider($slider_id=null,$type=null){ 

		$data['primary_id']=$slider_id;
		$data['table']="header_slider";
		$data['page_data']=$this->site_sentry->PopulateValues($data); 
		$data['page']="headerbanner";

		$section_list['table']='sections';
		$section_list['where']="";
		$section_list['and']="";
		$section_list['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($section_list);
	
		$data['type']=$type;

		$this->load->view('cms/header_view',$data);
		$this->load->view('cms/add_banner_view',$data);
		$this->load->view('cms/footer_view',$data);

	} 


	function delete_rec($id=null){
			

			$sql=$this->db->query("select * from header_slider where id='$id'");
			$arr=$sql->row_array();
				if(count($arr)>0){
					$img=$arr['image'];
					if(file_exists($img)){
						unlink($img);
					}
				}
				$sql_delete=$this->db->query("delete from header_slider  where  id='$id'");
				//print_R($this->db->affected_rows());
				redirect("cms/header_banner");
	}
   
   
    
}?>