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

  

	function filter_subcat($search_for=null)
  {
     $material_id = $this->input->get('filter_subcat');
    //print_r($material_id);
     //die();
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);
   // $filter_id=$arr['0'];
     $section_id = $arr['0'];
     $cat_id = $arr['1'];
     $sub_cat_id = $arr['2'];
    //$material_id = $arr['4'];
    
    //$subcat_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
    $material_data = $this->common_model->getsubcategory_filter($section_id,$cat_id,$sub_cat_id);
        echo "<h5><a href='#'' class='tgl_btn'>Material</a></h5>";
          echo "<ul class='tgl_c'>"; 
          //echo count($material_data);
          if(count($material_data)>0)
          {
             foreach( $material_data as $row)
              {
                ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="showmaterial(this.id); show_filter_subprod(this.id)"><?php echo $row['material_name']; ?></li>
                  <?php
              
            }

          }
              echo "<ul>";
         
        
  }

   function filter_subprod_result($search_for=null)
  {
     $material_id = $this->input->get('filter_subprod_result');

      $material_id;
    
   
    $arr = explode('/',$material_id);

   print_r($arr);
   //die();
    //$filter_id=$arr['0'];
     $section_id = $arr['0'];
      $cat_id = $arr['1'];
      $sub_cat_id = $arr['2'];
      //$material_id = $arr['4'];
    
    $material_data = $this->common_model->getsubprod($section_id,$cat_id,$sub_cat_id);
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
                              
 <?php     
  }
       
 }

  function filter_material_result1($search_for=null)
  {
     $material_id = $this->input->get('filter_material_result1');

      //$material_id;
    
   
    $arr = explode('/',$material_id);

   //print_r($arr);

   // $filter_id=$arr['0'];
     $section_id = $arr['1'];
     $cat_id = $arr['2'];
     $sub_cat_id = $arr['3'];
    echo  $material_id = $arr['4'];

    
    $material_data = $this->common_model->getsubprod($section_id,$cat_id,$sub_cat_id,$material_id);
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
                              
 <?php     
  }
       
 }

 function filter_GSM_result($search_for=null)
 {
    $material_id = $this->input->get('filter_GSM_result');

      //$material_id;
    //print_r($material_id);

   
    $arr = explode('/',$material_id);

   //print_r($arr);

       $filter_id=$arr['0'];
      $section_id = $arr['1'];
      echo $cat_id = $arr['2'];
      $sub_cat_id = $arr['3'];
      $material_id = $arr['4'];
      $GSM_name = $arr['5'];

       $material_data = $this->common_model->getfilterGSM_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name);
 
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>

 <?php     
  }
    
 }

 function filter_size_result($search_for=null)
 {
    $material_id = $this->input->get('filter_size_result');

      //$material_id;
    //print_r($material_id);
   
    $arr = explode('/',$material_id);

   print_r($arr);
     $filter_id=$arr['0'];
      $section_id = $arr['1'];
      $cat_id = $arr['2'];
      $sub_cat_id = $arr['3'];
      $material_id = $arr['4'];
      $GSM_name = $arr['5'];
      $size = $arr['6'];

       $material_data = $this->common_model->getfilterSize_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size);
 
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>

 <?php     
  }
    
 }

 function filter_style_result($search_for=null)
 {
    $material_id = $this->input->get('filter_style_result');

      //$material_id;
    //print_r($material_id);
   
    $arr = explode('/',$material_id);

   print_r($arr);
      $filter_id=$arr['0'];
      $section_id = $arr['1'];
      $cat_id = $arr['2'];
      $sub_cat_id = $arr['3'];
      $material_id = $arr['4'];
      $GSM_name = $arr['5'];
      $size = $arr['6'];
      $style =  $arr['7'];

       $material_data = $this->common_model->getfilterstyle_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style);
 
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>

 <?php     
  }
    
 }

function filter_handle_result($search_for=null)
 {
    $material_id = $this->input->get('filter_handle_result');

      //$material_id;
    //print_r($material_id);
   
    $arr = explode('/',$material_id);

   print_r($arr);
       $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];
    $handle = $arr['8'];

       $material_data = $this->common_model->getfilterhandle_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle);
 
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>

 <?php     
  }
    
 }

 function filter_print_result($search_for=null)
 {
    $material_id = $this->input->get('filter_print_result');

      //$material_id;
    //print_r($material_id);
   
    $arr = explode('/',$material_id);

   // print_r($arr);
      $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
     $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];
    $handle = $arr['8'];
    $print = $arr['9'];
    
       $material_data = $this->common_model->getfilterprint_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle,$print);
 
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>

 <?php     
  }
    
 }

 function filter_lamination_result($search_for=null)
 {
    $material_id = $this->input->get('filter_lamination_result');

      //$material_id;
    //print_r($material_id);
   
    $arr = explode('/',$material_id);

   // print_r($arr);
     $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
     $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];
    $handle = $arr['8'];
    $print = $arr['9'];
    $lamination = $arr['10'];

       $material_data = $this->common_model->getfilterlamination_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle,$print,$lamination);
 
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>

 <?php     
  }
    
 }

function filter_splwrk_result($search_for=null)
 {
    $material_id = $this->input->get('filter_splwrk_result');

      //$material_id;
    //print_r($material_id);
   
    $arr = explode('/',$material_id);

   // print_r($arr);
      $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
     $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];
    $handle = $arr['8'];
    $print = $arr['9'];
    $lamination = $arr['10'];
      $spl_wrl = $arr['11'];

       $material_data = $this->common_model->getfiltersplwrk_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle,$print,$lamination);
 
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo "0"; ?>/<?php 
                        echo $section_id;?>/<?php 
                        echo $cat_id;?>/<?php
                        echo $sub_cat_id;?>/<?php echo $row['prod_id'];?>" 
                        class="btn_c info_btn">More info
                      </a> 
                    </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#"><?php echo $row['prod_name']; ?></a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>

 <?php     
  }
    
 }

function filter_material($search_for=null)
  {
     $material_id = $this->input->get('filter_material');
    //print_r($material_id);
     //die();
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);
    //print_r($arr);
    $filter_id=$arr['0'];
     $section_id = $arr['1'];
     $cat_id = $arr['2'];
     $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    
    //$subcat_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
    $material_data = $this->common_model->getsubcategory_filter($section_id,$cat_id,$sub_cat_id);
        echo "<h5><a href='#'' class='tgl_btn'>Material</a></h5>";
          echo "<ul class='tgl_c'>"; 
          //echo count($material_data);
          if(count($material_data)>0)
          {
             foreach( $material_data as $row)
              {
                ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>" onclick="showResult(this.id); show_filter_material(this.id)"><?php echo $row['material_name']; ?></li>
                  <?php
              
            }

          }
              echo "<ul>";
         
        
  }


  function filter_GSM($search_for=null)
  {
    //print_r($arr);
    //print_r($result['search_for']);
    $material_id = $this->input->get('filter_GSM');
    //print_r($material_id);

    $arr = explode('/',$material_id);
    //print_r($arr);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);

      echo "<div class='side_box side_box_1 red5 material' id='GSM_result'>";
        echo "<h5><a href='#'' class='tgl_btn'>GSM</a></h5>";
          echo "<ul class='tgl_c'>"; 
          
            if(count($material_data)>0)
           {
              foreach( $material_data as $row)
              {
                
                  ?>
                 

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>" onclick="showsize(this.id); show_filter_GSM(this.id)"><?php echo $row['GSM_name']; ?></li>
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

    print_r($arr);

    //$filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];

    
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Size</a></h5>";
          echo "<ul class='tgl_c'>"; 
          //echo count($material_data);
          if(count($material_data)>0)
          {
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['size']; ?>" onclick="showstyle(this.id); show_filter_size(this.id)"><?php echo $row['size']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
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

    print_r($arr);

    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];
    $size = $arr['6'];
   

    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Style</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['size']; ?>/<?php echo $row['style']; ?>" onclick="showhandle(this.id); show_filter_style(this.id)"><?php echo $row['style']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

   function filter_handle($search_for=null)
  {
      $material_id = $this->input->get('filter_handle');
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);

    print_r($arr);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];

    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Handle</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['size']; ?>/<?php echo $row['style']; ?>/<?php echo $row['handle']; ?>" onclick="filter_print(this.id); show_filter_handle(this.id)"><?php echo $row['handle']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

  function filter_print($search_for=null)
  {
      $material_id = $this->input->get('filter_print');
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);

    print_r($arr);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];
    $handle = $arr['8'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Print</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['size']; ?>/<?php echo $row['style']; ?>/<?php echo $row['handle']; ?>/<?php echo $row['print']; ?>" onclick="filter_lamination(this.id); show_filter_print(this.id)"><?php echo $row['print']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

   function filter_lamination($search_for=null)
  {
      $material_id = $this->input->get('filter_lamination');
    //print_r($result['search_for']);
    
    $arr = explode('/',$material_id);

    print_r($arr);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
     $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];
    $handle = $arr['8'];
    $print = $arr['9'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Lamination</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['size']; ?>/<?php echo $row['style']; ?>/<?php echo $row['handle']; ?>/<?php echo $row['print']; ?>/<?php echo $row['lamination']; ?>" onclick="filter_spl_wrk(this.id); show_filter_lamination(this.id)"><?php echo $row['lamination']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

   function filter_spl_wrk($search_for=null)
  {
      $material_id = $this->input->get('filter_spl_wrk');
    //print_r($result['search_for']);
    
    $arr = explode('/',$material_id);

    print_r($arr);
    $filter_id=$arr['0'];
    $section_id = $arr['1'];
    $cat_id = $arr['2'];
    $sub_cat_id = $arr['3'];
    $material_id = $arr['4'];
     $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];
    $handle = $arr['8'];
    $lamination = $arr['9'];
    
    $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
        echo "<h5><a href='#'' class='tgl_btn'>Special Work</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['filter_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['size']; ?>/<?php echo $row['style']; ?>/<?php echo $row['handle']; ?>/<?php echo $row['print']; ?>/<?php echo $row['lamination']; ?>" onclick="show_filter_splwrk(this.id)"><?php echo $row['special_wrk']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }

}	
?>