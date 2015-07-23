<?php 
class Filter_model extends CI_Model
{
	
		function save_material()
		{
			//$CI =& get_instance();
		$data1['material_id'] = $this->input->post('material_id');
		$data1['section_id'] = $this->input->post('sec_id');
		$data1['cat_id'] = $this->input->post('prod_sub_categories');
		$data1['sub_cat_id'] = $this->input->post('sub_categories');
		$data1['material'] = $this->input->post('material_name');
		//$data1['material_name'] = $this->input->post('material_name');

		//$material['material_name'] = $this->input->post('material_name');
		$material['material'] = $this->input->post('material_name');
		$material['material_id'] = $this->input->post('material_id');	
		
		//$this->db->where('filter_id', $id);
		$this->db->insert('material',$material);
		
		$rst = $this->db->insert_id();
		$data['material_id'] = count($this->max_id_value('material','material_id'))-1;
		
		$material_data = array(
				'material_id' => $data['material_id'],
				'material_name' => $material['material'],
				'section_id' => $this->input->post('sec_id'),
				'cat_id'=> $this->input->post('prod_sub_categories'),
				'sub_cat_id'=> $this->input->post('sub_categories'),
			);

		
		$this->db->insert('filters',$material_data);

		$filter_id=$this->input->post('filter_id');
		
		return 1;
	
		}

		function max_id_value($table,$column)
		{
			$query = $this->db->query("select * from $table");
			$row=$query->result_array();
			return $row;
		}
		function save_GSM()
		{
			$gsm = $this->input->post('GSM_data');
			//$this->session->userdata('filter_id');
			$sql = $this->db->query('select * from filters where material_id="'.$this->session->userdata('filter_id').'"');
			$result = $sql->result_array();

				$data = array();
				foreach ($result as $row) {										
					if($row['GSM_name']!="")
					{
						$data[] = $row['GSM_name'];
					}		
														
				}
				$data[] = $this->input->post('GSM_data');
			echo $GSM_data =  implode(",",$data);	
			
			$sql = $this->db->query('UPDATE filters SET GSM_name="'.$GSM_data.'" WHERE material_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_size()
		{
			
			$size = $this->input->post('size');
			$sql = $this->db->query('select * from filters where material_id="'.$this->session->userdata('filter_id').'"');
			$result = $sql->result_array();			
			
				$data = array();
				foreach ($result as $row) {	
					if($row['size']!="")
					{
						$data[] = $row['size'];
					}								
				}
				$data[] = $this->input->post('size');				
				 echo $size_data =  implode(",",$data);			
		
			$sql = $this->db->query('UPDATE filters SET size="'.$size_data.'" WHERE material_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_style()
		{
			
			$style = $this->input->post('style');
			
			$sql = $this->db->query('UPDATE filters SET style="'.$this->input->post('style').'" WHERE material_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_handle()
		{
			
			$handle = $this->input->post('handle');
			$sql = $this->db->query('select * from filters where material_id="'.$this->session->userdata('filter_id').'"');
			$result = $sql->result_array();
			
				$data = array();
				foreach ($result as $row) {										
					if($row['handle']!="")
					{
						$data[] = $row['handle'];
					}															
				}
				

			$data[] = $this->input->post('handle');
			echo $handle_data =  implode(",",$data);
			
			$sql = $this->db->query('UPDATE filters SET handle="'.$handle_data.'" WHERE material_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_print()
		{
			
			$print = $this->input->post('print');

			$sql = $this->db->query('select * from filters where material_id="'.$this->session->userdata('filter_id').'"');
			$result = $sql->result_array();

				$data = array();
				foreach ($result as $row) {										
					if($row['print']!="")
					{
						$data[] = $row['print'];
					}									
				}
				
			$data[] = $this->input->post('print');
			echo $print_data =  implode(",",$data);
			
			$sql = $this->db->query('UPDATE filters SET print="'.$print_data.'" WHERE material_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_printclr()
		{
			
			$print_color = $this->input->post('print_color');
			
			$sql = $this->db->query('UPDATE filters SET print_color="'.$this->input->post('print_color').'" WHERE material_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_laminatn()
		{
			
			$lamination = $this->input->post('lamination');
			$sql = $this->db->query('select * from filters where material_id="'.$this->session->userdata('filter_id').'"');
			$result = $sql->result_array();

				$data = array();
				foreach ($result as $row) {										
					if($row['lamination']!="")
					{
						$data[] = $row['lamination'];
					}								
				}
				
			$data[] = $this->input->post('lamination');
			echo $lamination_data =  implode(",",$data);
			
			$sql = $this->db->query('UPDATE filters SET lamination="'.$lamination_data.'" WHERE material_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		function save_splwrk()
		{
			
			$special_wrk = $this->input->post('special_wrk');
			$sql = $this->db->query('select * from filters where material_id="'.$this->session->userdata('filter_id').'"');
			$result = $sql->result_array();

				$data = array();
				foreach ($result as $row) {										
					if($row['special_wrk']!="")
					{
						$data[] = $row['special_wrk'];
					}				
				}
				
			$data[] = $this->input->post('special_wrk');
			echo $special_wrk_data =  implode(",",$data);
			
			$sql = $this->db->query('UPDATE filters SET special_wrk="'.$special_wrk_data.'" WHERE material_id="'.$this->session->userdata('filter_id').'"');
			$this->session->unset_userdata('filter_id');
			session_destroy();
		}
		
		
		function getfilterdata($filter_id=null)
		{
			$sql = $this->db->query("select * from filters where material_id=$filter_id");
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