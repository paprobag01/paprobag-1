<?php 
class Filter_model extends CI_Model
{
	
		function save_material()
		{
			//$CI =& get_instance();
		
		$data1['section_id'] = $this->input->post('sec_id');
		$data1['cat_id'] = $this->input->post('prod_sub_categories');
		$data1['sub_cat_id'] = $this->input->post('sub_categories');
		$data1['material_name'] = $this->input->post('material_name');
		//$data1['material_name'] = $this->input->post('material_name');

		$material['material_name'] = $this->input->post('material_name');
		$material['material_id'] = $this->input->post('material_id');	
		
		//$this->db->where('filter_id', $id);
		$this->db->insert('material',$material);
		
		$rst = $this->db->insert_id();
		

		$data1['material_id'] = $rst;
		$this->db->insert('filters',$data1);

		$filter_id=$this->input->post('filter_id');
		
		return 1;
	
		}

		
		function save_GSM()
		{
			
			$GSM_name = $this->input->post('GSM_data');
			//$data1['material_name'] = $this->input->post('material_name');
			
			$sql = $this->db->query('UPDATE filters SET GSM_name="'.$this->input->post('GSM_data').'" WHERE filter_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_size()
		{
			
			
			$size = $this->input->post('size');
			
			$sql = $this->db->query('UPDATE filters SET size="'.$this->input->post('size').'" WHERE filter_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_style()
		{
			
			$style = $this->input->post('style');
			
			$sql = $this->db->query('UPDATE filters SET style="'.$this->input->post('style').'" WHERE filter_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_handle()
		{
			
			$handle = $this->input->post('handle');
			
			$sql = $this->db->query('UPDATE filters SET handle="'.$this->input->post('handle').'" WHERE filter_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_print()
		{
			
			$print = $this->input->post('print');
			
			$sql = $this->db->query('UPDATE filters SET print="'.$this->input->post('print').'" WHERE filter_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_printclr()
		{
			
			$print_color = $this->input->post('print_color');
			
			$sql = $this->db->query('UPDATE filters SET print_color="'.$this->input->post('print_color').'" WHERE filter_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_laminatn()
		{
			
			$lamination = $this->input->post('lamination');
			//$data1['material_name'] = $this->input->post('material_name');
			
			$sql = $this->db->query('UPDATE filters SET lamination="'.$this->input->post('lamination').'" WHERE filter_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_splwrk()
		{
			
			$special_wrk = $this->input->post('special_wrk');
			
			$sql = $this->db->query('UPDATE filters SET special_wrk="'.$this->input->post('special_wrk').'" WHERE filter_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		
		
		function getfilterdata($filter_id=null)
		{
			$sql = $this->db->query("select * from filters where filter_id=$filter_id");
			return $sql->result_array();
		}
		function updatefilters($id=null)
		{
			/*$data['section_id'] = $this->input->post('sec_id');
			$data['cat_id'] = $this->input->post('prod_sub_categories');
			$data['sub_cat_id'] = $this->input->post('sub_categories');
			$data['filter_name'] = $this->input->post('filter_name');
			
			$this->db->where('filter_id', $id);
			$this->db->update('filters',$data);
			return 1;*/
			echo $id;
			$data['material_name'] = $this->input->post('material_name');
			$this->db->trans_start();
			$this->db->where('filter_id', $id);
			$this->db->update('filters',$data); 
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE)
			{
				
				return -2; 
			}
			else
			{
			   
				return redirect('cms/Filters');
			}
		}
		
}
?>