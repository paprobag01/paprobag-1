<?php
class Search_result extends CI_Controller{
	
	function __Construct()
	{
		parent::__construct();
		$this->load->library('site_sentry');
		$this->load->model('common_model');
	}
	function index()
	{	
		
		$data = $this->common_model->get_head();
		
		
		
		$this->load->view('header',$data);
		$this->load->view('blog_view');
		$this->load->view('footer');
	}

	function search_data($search_for=null)
	{
		$result['search_for'] = $this->input->get('search_value');
		$rst = $this->input->post('search_value');
		//echo $search_for;

		$data = $this->common_model->get_head();
		
		
		$result['related_rslt'] = $this->common_model->search_result($this->input->get('search_value'));
		extract($result['related_rslt']);
		

                        if(count($result['related_rslt'])>0)
                        {
                           // extract($related_rslt);
                            
                           
                            foreach($result['related_rslt'] as $row)
                            {
                                 $section_id = $row['section_id'];
                                 $cat_id = $row['cat_id'];
                                 $sub_cat_id = $row['sub_cat_id'];;

                                $sql1 = $this->db->query("select * from sections where section_id = $section_id");
                                $section_result =  $sql1->result_array();

                                $sql2 = $this->db->query("select * from category where section_id = $section_id and cat_id=$cat_id");
                                $category_result =  $sql2->result_array();

                                $sql3 = $this->db->query("select * from subcategory where section_id = $section_id and cat_id=$cat_id and sub_cat_id = $sub_cat_id");
                                $sub_result =  $sql3->result_array();

                               foreach($section_result as $row1)
                               {
                                foreach($category_result as $row2)
                               {
                               foreach($sub_result as $row3)
                               {
                                  ?>
                                  
                                  <a href="<?php echo base_url()?>catalog/getProducts/0/<?php echo $section_id; ?>/<?php echo $cat_id; ?>/<?php echo $sub_cat_id; ?>"><?php echo $row['prod_name'].""."  products related to  ".$row3['sub_cat_name'];?></a><hr>
                                
                                 <?php
                                 }
                             }
                             }
                               
                            }
                        }
                        else
                        {
                            echo "No Result Found";
                        }

                      
		//$this->load->view('header',$data);
		//$this->load->view('search_result_view',$result);
		//$this->load->view('footer');
	}

	

  function filter_material($search_for=null)
  {
    //print_r($arr);
    //print_r($result['search_for']);
    $material_id = $this->input->get('filter_material');
    $arr = explode('/',$material_id);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
      echo "<div class='side_box side_box_1 red5 material' id='GSM_result'>";
        echo "<h5><a href='#'' class='tgl_btn'>GSM</a></h5>";
          echo "<ul class='tgl_c'>"; 
          
            if(count($material_data)>0)
           {
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="showsize(this.id)"><?php echo $row['GSM_name']; ?></li>
                  <?php
              }
            }
              echo "<ul></div>";

              /* echo "<div class='side_box side_box_1 red5 material'>";
                echo "<h5><a href='#'' class='tgl_btn'>Size</a></h5>";
                  echo "<ul class='tgl_c'>"; 
          
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>" onclick="showsize(this.id)"><?php echo $row['size']; ?></li>
                  <?php
              }
              echo "<ul></div>";*/
         
         
        
  }

  function filter_size($search_for=null)
  {
     $material_id = $this->input->get('filter_size');
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Size</a></h5>";
          echo "<ul class='tgl_c'>"; 
          //echo count($material_data);
          if(count($material_data)>0)
          {
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="showstyle(this.id)"><?php echo $row['size']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }

          }
              echo "<ul>";
         
        
  }

  function filter_style($search_for=null)
  {
      $material_id = $this->input->get('filter_style');
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Style</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="showhandle(this.id)"><?php echo $row['style']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

   function filter_handle($search_for=null)
  {
      $material_id = $this->input->get('filter_handle');
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Handle</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="filter_print(this.id)"><?php echo $row['handle']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

  function filter_print($search_for=null)
  {
      $material_id = $this->input->get('filter_print');
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Print</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="filter_lamination(this.id)"><?php echo $row['print']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

   function filter_lamination($search_for=null)
  {
      $material_id = $this->input->get('filter_lamination');
    //print_r($result['search_for']);
    
    $arr = explode('/',$material_id);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Lamination</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="filter_spl_wrk(this.id)"><?php echo $row['lamination']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

   function filter_spl_wrk($search_for=null)
  {
      $material_id = $this->input->get('filter_spl_wrk');
    //print_r($result['search_for']);
    
    $arr = explode('/',$material_id);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Special Work</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li><?php echo $row['special_wrk']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

}	
?>