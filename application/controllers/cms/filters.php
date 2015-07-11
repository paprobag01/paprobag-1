<?php 
 class Filters extends CI_Controller{

		function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms/login");
				}
				$this->load->model('Filter_model');
               $this->load->library('site_sentry');
			}
      
	  function index(){
		  $data['page']='filters';
		  
		  $arr['table']='filters';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']=""; 

		  $data['page_data']=$this->site_sentry->get_all($arr); 
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/filter_list');
		 $this->load->view('cms/footer_view');
		
     }
	function save_material()
	{ 
		
		//$data['table']="filters"; 
		
			$this->Filter_model->save_material();
			//redirect('cms/filters');
			if(true)
			{
				redirect('cms/Filters/add_filter');
			}
		
		
		
	}
	function save_GSM()
	{ 
		
		//$data['table']="filters"; 
		//$id=$this->input->post('filter_id');
		$this->Filter_model->save_GSM();
		//redirect('cms/filters');
		if(true)
		{
			redirect('cms/Filters/add_filter');
		}
		
	}
	
	function save_size()
	{ 
		
		
		$this->Filter_model->save_size();
		//redirect('cms/filters');
		if(true)
		{
			redirect('cms/Filters/add_filter');
		}
		
	}
	
	function save_style()
	{ 
		
		//$data['table']="filters"; 
		//$id=$this->input->post('filter_id');
		$this->Filter_model->save_style();
		//redirect('cms/filters');
		if(true)
		{
			redirect('cms/Filters/add_filter');
		}
		
	}
	
	function save_handle()
	{ 
		
		//$data['table']="filters"; 
		//$id=$this->input->post('filter_id');
		$this->Filter_model->save_handle();
		//redirect('cms/filters');
		if(true)
		{
			redirect('cms/Filters/add_filter');
		}
		
	}
	
	function save_print()
	{ 
		
		//$data['table']="filters"; 
		//$id=$this->input->post('filter_id');
		$this->Filter_model->save_print();
		//redirect('cms/filters');
		if(true)
		{
			redirect('cms/Filters/add_filter');
		}
		
	}
	
	function save_printclr()
	{ 
		
		//$data['table']="filters"; 
		$id=$this->input->post('filter_id');
		$this->Filter_model->save_printclr($id);
		//redirect('cms/filters');
		if(true)
		{
			redirect('cms/Filters/add_filter');
		}
		
	}
	
	function save_laminatn()
	{ 
		
		//$data['table']="filters"; 
		//$id=$this->input->post('filter_id');
		$this->Filter_model->save_laminatn();
		//redirect('cms/filters');
		if(true)
		{
			redirect('cms/Filters/add_filter');
		}
		
	}
	
	function save_splwrk()
	{ 
		
		//$data['table']="filters"; 
		//$id=$this->input->post('filter_id');
		$this->Filter_model->save_splwrk();
		//redirect('cms/filters');
		if(true)
		{
			redirect('cms/Filters/add_filter');
		}
		
	}
	
	
	function add_filter($id=null,$type=null)
	{
		$arr1['table']='sections';
		$arr1['where']="";
		$arr1['and']="";
		$arr1['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($arr1);
		
		$material['table']='filters';
		$material['where']="";
		$material['and']="";
		$material['order_by']="";		
		$data['material_data']=$this->site_sentry->get_all($material);
		
		  $arr['primary_id']=$id;
		  $arr['table']='filters';
		$arr['where']="";
		$arr['and']="";
		$arr['order_by']="order by filter_id desc";
		  $data['page_data']=$this->site_sentry->PopulateValues($arr); 
		  
		  $data['page']='filters';
		  
		  $data['type']=$type;
		  $data['filter_id'] = '';
		  $data['material_name'] = '';	
		  $data['GSM_numb'] = '';
		 $data['GSM_name'] = '';	
		  $data['size'] = '';	
		   $data['style'] = '';	
		    $data['handle'] = '';	
			 $data['print'] = '';	
			  $data['print_color'] = '';	
			   $data['lamination'] = '';	
			    $data['special_wrk'] = '';	
				 //$data['price'] = '';	
		 
		 
		  
		 $this->load->view('cms/header_view', $data);
		 $this->load->view('cms/add_filter_view', $data);
		 $this->load->view('cms/footer_view', $data);
		 
		 
		
	}
	function viewfilters($id=null,$type=null)
	{
		$arr1['table']='sections';
		$arr1['where']="";
		$arr1['and']="";
		$arr1['order_by']="";		
		$data['sec_data']=$this->site_sentry->get_all($arr1);
		
		$data['page']='filters';
		$result = $this->Filter_model->getfilterdata($id);
		
		foreach($result as $row)
		{
			$data1['section_id'] = $row['section_id'];
			$data1['cat_id'] = $row['cat_id'];
			$data1['sub_cat_id'] = $row['sub_cat_id'];
			$data1['material_name'] = $row['material_name'];
			$data1['filter_id'] = $row['filter_id'];
		}
		$data['type']=$type;
			$this->load->view('cms/header_view', $data);
		 $this->load->view('cms/filter_view', $data1);
		 $this->load->view('cms/footer_view', $data);
		 
			
		
	}
	function update_view($id=null,$type=null)
	{
		$this->Filter_model->updatefilters($id);
		if(true)
		{
			return('cms/Filters/filter_list');
		}
		else
		{
			return('cms/Filters/add_filter_view');
		}
	}
	function deleteFilter($id=null)
	{
		$this->db->where('filter_id', $id);		
		$this->db->delete('filters');
		
		redirect('cms/filters');
	}
		
	
}
?>