
<?php
class Search_result extends CI_Controller{
  
  function __Construct()
  {
    parent::__construct();
    $this->load->library('site_sentry');
    $this->load->library('session');
    $this->load->model('common_model');
  }
  function index()
  { 
    
    $data = $this->common_model->get_head();
    $this->load->view('header',$data);
    $this->load->view('blog_view');
    $this->load->view('footer');
  }

  function search_filter_data()
  {
    echo $data = $this->input->get('search_value');
  }

 function get_status()
 {
     $material_id = $this->input->get('get_status');

     $arr = explode('/',$material_id);  

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2'];
    $prod_id= $arr['3'];
    $status= $arr['4'];
   
   
    $material_data = $this->common_model->update_status($section_id,$cat_id,$sub_cat_id,$prod_id,$status);
    //redirect(base_url().'cms_seller/productDetailList');
 }

 function get_seller_cat()
 {
     echo "hello";
     $material_id = $this->input->get('get_seller_cat');

    print_r($material_id);
    die();
 }

 

   function get_pending_prodlist()
  {
    
     $status = $this->input->get('get_pending_prodlist');   
     
    

    $data['customize_prod_list'] = $this->common_model->customize_prod_list($status);
    $data['ready_to_print_prod_list'] = $this->common_model->readyToprint_prod_list($status);
    $data['ready_to_deliver_prod_list'] = $this->common_model->readyTodeliver_prod_list($status);
                
   
    $this->load->view('cms_seller/status_view',$data);
    
  }

function get_approved_prodlist()
  {
    
     $status = $this->input->get('get_approved_prodlist');
   
      
    $data['customize_prod_list'] = $this->common_model->customize_prod_list($status);
    $data['ready_to_print_prod_list'] = $this->common_model->readyToprint_prod_list($status);
    $data['ready_to_deliver_prod_list'] = $this->common_model->readyTodeliver_prod_list($status);
                
   
    $this->load->view('cms_seller/status_view',$data);
    
  }


  function get_live_prodlist()
  {
    $status = $this->input->get('get_live_prodlist');
        
    $data['customize_prod_list'] = $this->common_model->customize_prod_list($status);
    $data['ready_to_print_prod_list'] = $this->common_model->readyToprint_prod_list($status);
    $data['ready_to_deliver_prod_list'] = $this->common_model->readyTodeliver_prod_list($status);
       
    $this->load->view('cms_seller/status_view',$data);
    
  }
 function get_category()
  {
     $material_id = $this->input->get('get_category');
     echo $material_id;
     die();   
   
   
    $material_data = $this->common_model->getcategorylist($material_id);
   

         
echo "<h5><a href='#'' class='tgl_btn'>Catergory</a></h5>";
          echo "<ul class='tgl_c'>"; 
          //echo count($material_data);
          if(count($material_data)>0)
          {
             foreach( $material_data as $row)
              {
                ?>

                    <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>" onclick="get_sub_cat_name(this.id)"><?php echo $row['cat_name']; ?></li>
                  <?php
              
            }

          }
              echo "<ul>";
    
  }

function get_product()
  {
     $material_id = $this->input->get('get_product');
   
    $arr = explode('/',$material_id);  

    $section_id=$arr['0'];
    $cat_id= $arr['1'];

    $material_data = $this->common_model->getsubcatlist($section_id,$cat_id);

    

         
echo "<h5><a href='#'' class='tgl_btn'>Product</a></h5>";
          echo "<ul class='tgl_c'>"; 
          //echo count($material_data);
          if(count($material_data)>0)
          {
             foreach( $material_data as $row)
              {
                ?>

                    <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>" onclick="show_filter_subprod(this.id); showsubcat(this.id); createpagenumb(this.id)"><?php echo $row['sub_cat_name']; ?></li>
                  <?php
              
            }

          }
              echo "<ul>";
    
  }


  function create_number()
  {
     $material_id = $this->input->get('create_number');
   
   
    $arr = explode('/',$material_id);  

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2'];

    $count = $this->common_model->count_subcat($section_id,$cat_id,$sub_cat_id);

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
            for($i='1';$i<=$count;$i++)
            {
               echo "<ul>";?> 

                        <li class='active'><a href="<?php echo base_url(); ?>Pagination"><?php echo $i; ?></a></li>
                       
                <?php echo "</ul>";
                     
            }
      
   
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
  }


  function numberlinks_material()
  {
     $material_id = $this->input->get('numberlinks_material');
   
   
    $arr = explode('/',$material_id); 
    
    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2']; 
    $material_id= $arr['3'];

    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id");
    $rst = $sql->result_array();

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
    for($i='1';$i<=count($rst);$i++)
    {
       echo "<ul>";?> 

                <li class='active'><a href="<?php echo base_url(); ?>catalog/getProducts/<?php echo '0';?>/<?php echo $arr['0'];?>/<?php echo $arr['1'];?>/<?php echo $arr['2'];?>"><?php echo $i; ?></a></li>
               
        <?php echo "</ul>";
             
    }
        
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
  }

function numberlinks_GSM()
  {
     $material_id = $this->input->get('numberlinks_GSM');
   
   
    $arr = explode('/',$material_id);     

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2']; 
    $material_id= $arr['3'];
    $GSM_name = $arr['4'];

    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name");
    $rst = $sql->result_array();

    //$count = $this->common_model->message_count()

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
    for($i='1';$i<=count($rst);$i++)
    {
       echo "<ul>";?> 

                <li class='active'><a href="<?php echo base_url(); ?>catalog/getProducts/<?php echo '0';?>/<?php echo $arr['0'];?>/<?php echo $arr['1'];?>/<?php echo $arr['2'];?>"><?php echo $i; ?></a></li>
               
        <?php echo "</ul>";
             
    }
        
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
  }

function numberlinks_size()
  {
     $material_id = $this->input->get('numberlinks_size');
   
   
    $arr = explode('/',$material_id); 

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2']; 
    $material_id= $arr['3'];
    $GSM_name = $arr['4'];
    $size = $arr['5'];

    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size");
    $rst = $sql->result_array();

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
    for($i='1';$i<=count($rst);$i++)
    {
       echo "<ul>";?> 

                <li class='active'><a href="<?php echo base_url(); ?>catalog/getProducts/<?php echo '0';?>/<?php echo $arr['0'];?>/<?php echo $arr['1'];?>/<?php echo $arr['2'];?>"><?php echo $i; ?></a></li>
               
        <?php echo "</ul>";
             
    }
        
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
  }

function numberlinks_style()
  {
     $material_id = $this->input->get('numberlinks_style');
   
   
    $arr = explode('/',$material_id); 

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2']; 
    $material_id= $arr['3'];
    $GSM_name = $arr['4'];
    $size = $arr['5'];
    $style = $arr['6'];

    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style");
    $rst = $sql->result_array();

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
    for($i='1';$i<=count($rst);$i++)
    {
       echo "<ul>";?> 

                <li class='active'><a href="<?php echo base_url(); ?>catalog/getProducts/<?php echo '0';?>/<?php echo $arr['0'];?>/<?php echo $arr['1'];?>/<?php echo $arr['2'];?>"><?php echo $i; ?></a></li>
               
        <?php echo "</ul>";
             
    }
        
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
  }

  function numberlinks_handle()
  {
     $material_id = $this->input->get('numberlinks_handle');
   
   
    $arr = explode('/',$material_id); 

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2']; 
    $material_id= $arr['3'];
    $GSM_name = $arr['4'];
    $size = $arr['5'];
    $style = $arr['6'];
    $handle= $arr['7'];

    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle");
    $rst = $sql->result_array();

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
    for($i='1';$i<=count($rst);$i++)
    {
       echo "<ul>";?> 

                <li class='active'><a href="<?php echo base_url(); ?>catalog/getProducts/<?php echo '0';?>/<?php echo $arr['0'];?>/<?php echo $arr['1'];?>/<?php echo $arr['2'];?>"><?php echo $i; ?></a></li>
               
        <?php echo "</ul>";
             
    }
        
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
  }

  function numberlinks_print()
  {
     $material_id = $this->input->get('numberlinks_print');
   
   
    $arr = explode('/',$material_id); 

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2']; 
    $material_id= $arr['3'];
    $GSM_name = $arr['4'];
    $size = $arr['5'];
    $style = $arr['6'];
    $handle= $arr['7'];
    $print = $arr['8'];

    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle and print=$print");
    $rst = $sql->result_array();

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
    for($i='1';$i<=count($rst);$i++)
    {
       echo "<ul>";?> 

                <li class='active'><a href="<?php echo base_url(); ?>catalog/getProducts/<?php echo '0';?>/<?php echo $arr['0'];?>/<?php echo $arr['1'];?>/<?php echo $arr['2'];?>"><?php echo $i; ?></a></li>
               
        <?php echo "</ul>";
             
    }
        
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
  }

  function numberlinks_lamination()
  {
     $material_id = $this->input->get('numberlinks_lamination');
   
   
    $arr = explode('/',$material_id); 

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2']; 
    $material_id= $arr['3'];
    $GSM_name = $arr['4'];
    $size = $arr['5'];
    $style = $arr['6'];
    $handle= $arr['7'];
    $print = $arr['8'];
    $lamination= $arr['9'];

    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle and print=$print and lamination=$lamination");
    $rst = $sql->result_array();

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
    for($i='1';$i<=count($rst);$i++)
    {
       echo "<ul>";?> 

                <li class='active'><a href="<?php echo base_url(); ?>catalog/getProducts/<?php echo '0';?>/<?php echo $arr['0'];?>/<?php echo $arr['1'];?>/<?php echo $arr['2'];?>"><?php echo $i; ?></a></li>
               
        <?php echo "</ul>";
             
    }
        
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
  }

function numberlinks_special_wrk()
  {
     $material_id = $this->input->get('numberlinks_special_wrk');
   
   
    $arr = explode('/',$material_id); 

    $section_id=$arr['0'];
    $cat_id= $arr['1'];
    $sub_cat_id= $arr['2']; 
    $material_id= $arr['3'];
    $GSM_name = $arr['4'];
    $size = $arr['5'];
    $style = $arr['6'];
    $handle= $arr['7'];
    $print = $arr['8'];
    $lamination= $arr['9'];
    $special_wrk = $arr['10'];

    $sql = $this->db->query("select prod_id from products where section_id=$section_id and cat_id=$cat_id and sub_cat_id=$sub_cat_id and material_id=$material_id and GSM_name=$GSM_name and size=$size and style=$style and handle=$handle and print=$print and lamination=$lamination and special_wrk=$special_wrk");
    $rst = $sql->result_array();

         
echo "<a href='#'' class='prev'><span class='fa fa-chevron-left'></span>Previous</a>";
    for($i='1';$i<=count($rst);$i++)
    {
       echo "<ul>";?> 

                <li class='active'><a href="<?php echo base_url(); ?>catalog/getProducts/<?php echo '0';?>/<?php echo $arr['0'];?>/<?php echo $arr['1'];?>/<?php echo $arr['2'];?>"><?php echo $i; ?></a></li>
               
        <?php echo "</ul>";
             
    }
        
             echo  '<a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>';
    
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

                    <li id="<?php echo $row['material_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="showmaterial(this.id); show_filter_subprod(this.id); createpagenumb(this.id)"><?php echo $row['material_name']; ?></li>
                  <?php
              
            }

          }
              echo "<ul>";
         
        
  }

  // function session_value($array = null)
  // {
  //     $array = array(
  //       'GSM_data' =>$this->session->unset_userdata('GSM_details_data'),
  //       'handle_data' =>$this->session->unset_userdata('handle_details_data'),
  //     );

  // }

   function filter_subprod_result($search_for=null)
  {
   //  $this->session->unset_userdata('material_details_data');
   // $this->session->unset_userdata('GSM_details_data');
   //  $this->session->unset_userdata('handle_details_data');
    // $session_value_array = array(
    //     'GSM_data' =>$this->session->unset_userdata('GSM_details_data'),
    //     'handle_data' =>$this->session->unset_userdata('handle_details_data'),
    //   );
     
     
    $this->session->sess_destroy();
    
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
    //    $this->session->set_userdata('subcat_details_data',$arr['2']);
       
    // print_r($this->session->userdata('subcat_details_data'));
    
    $material_data = $this->common_model->getsubcat_relatedprod($arr);
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url()?>/images/<?php echo $row['prod_image'] ?>" draggable="false">
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
    // $sub_cat = $this->session->userdata('subcat_details_data');
    // $material_details = $this->session->userdata('material_details_data');
    // $GSM_details = $this->session->userdata('GSM_details_data');
    // $handle_details = $this->session->userdata('handle_details_data');
    // if (isset($sub_cat) && isset($material_details) && isset($GSM_details) && isset($handle_details)) {
    //  $this->session->unset_userdata('material_details_data');
    //  $this->session->unset_userdata('GSM_details_data');
    //  $this->session->unset_userdata('handle_details_data');
    // }
     $material_id = $this->input->get('filter_material_result1');

      //$material_id;
    
   
    $arr = explode('/',$material_id);

   print_r($arr);

   // $filter_id=$arr['0'];
     // $section_id = $arr['0'];
     // $cat_id = $arr['1'];
     // $sub_cat_id = $arr['2'];
     // $material_id = $arr['4'];
     
     // if(isset($sub_cat))
     // {
     //     $this->session->set_userdata('material_details_data',$arr['3']);
     //    print_r($this->session->userdata('material_details_data'));
     // }
    

    $material_data = $this->common_model->getmaterial_relatedprod($arr);
    foreach($material_data as $row)
    {
              echo "<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>";
                echo "<div class='main_box'>";?> 
                <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php echo $row['section_id'];?>/<?php echo $row['cat_id'];?>/<?php echo $row['sub_cat_id'];?>/<?php echo $row['prod_id'];?>" 
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

    // if ($this->session->userdata('material_details_data')!=null && $this->session->userdata('GSM_details_data')!=null) {
    //  $this->session->unset_userdata('material_details_data');
    //  $this->session->unset_userdata('GSM_details_data');
    // }
    $material_id = $this->input->get('filter_GSM_result');

      //$material_id;
    //print_r($material_id);

   
    $arr = explode('/',$material_id);

   print_r($arr);//it shows the result to check need die();
  

      // $filter_id=$arr['0'];
   echo "HELlllllo";

      $section_id = $arr['0'];
      $cat_id = $arr['1'];
      $sub_cat_id = $arr['2'];
      $material_id = $arr['4'];
     echo  $GSM_name = $arr['5'];
    //   $this->session->set_userdata('material_details_data',$arr['3']);
    //   $this->session->set_userdata('GSM_details_data',$arr['4']);
    // print_r($this->session->userdata('material_details_data'));
    //  print_r($this->session->userdata('GSM_details_data'));
 
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
    
                   //$this->session->set_userdata('style_id',$arr['0']);
                   $this->session->set_userdata('size',$arr['1']);
                    //die();

   
   
     //$filter_id=$arr['0'];     
      $style_id = $arr['0'];
      $size = $arr['1'];


       $material_data = $this->common_model->getfilterSize($style_id,$size);
 
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
      //$filter_id=$arr['0'];
      $section_id = $arr['0'];
      $cat_id = $arr['1'];
      $sub_cat_id = $arr['2'];
      //$material_id = $arr['3'];
      $style_id = $arr['4'];
     

       $material_data = $this->common_model->getfilterstyle_product($section_id,$cat_id,$sub_cat_id,$style_id);
 
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

    // if ($this->session->userdata('material_details_data')!=null && $this->session->userdata('GSM_details_data')!=null && $this->session->userdata('handle_details_data')!=null) {
    //  $this->session->unset_userdata('material_details_data');
    //  $this->session->unset_userdata('GSM_details_data');
    //  $this->session->unset_userdata('handle_details_data');
    // }
    $material_id = $this->input->get('filter_handle_result');

      //$material_id;
    //print_r($material_id);
   
    $arr = explode('/',$material_id);

   print_r($arr);
    
    $section_id = $arr['0'];
    $cat_id = $arr['1'];
    $sub_cat_id = $arr['2'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];    
    $handle = $arr['6'];
    // $this->session->set_userdata('material_details_data',$arr['3']);
    // $this->session->set_userdata('GSM_details_data',$arr['4']);
    // $this->session->set_userdata('handle_details_data',$arr['5']);
    // print_r($this->session->userdata('material_details_data'));
    //  print_r($this->session->userdata('GSM_details_data'));
    //  print_r($this->session->userdata('handle_details_data'));

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

   print_r($arr);
     // $filter_id=$arr['0'];
    $section_id = $arr['0'];
    $cat_id = $arr['1'];
    $sub_cat_id = $arr['2'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];    
    $handle = $arr['6'];
    $print = $arr['7'];
    
       $material_data = $this->common_model->getfilterprint_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$handle,$print);
 
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

   print_r($arr);
    // $filter_id=$arr['0'];
    $section_id = $arr['0'];
    $cat_id = $arr['1'];
    $sub_cat_id = $arr['2'];
    $material_id = $arr['4'];
     $GSM_name = $arr['5'];    
    $handle = $arr['6'];
    $print = $arr['7'];
    $lamination = $arr['8'];

       $material_data = $this->common_model->getfilterlamination_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$handle,$print,$lamination);
 
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
     // $filter_id=$arr['0'];
    $section_id = $arr['0'];
    $cat_id = $arr['1'];
    $sub_cat_id = $arr['2'];
    $material_id = $arr['4'];
     $GSM_name = $arr['5'];
    $size = $arr['6'];
    $style = $arr['7'];
    $handle = $arr['8'];
    $print = $arr['9'];
    $lamination = $arr['10'];
    $spl_wrl = $arr['11'];

       $material_data = $this->common_model->getfiltersplwrk_product($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$size,$style,$handle,$print,$lamination,$spl_wrl);
 
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
    //$filter_id=$arr['0'];
     $section_id = $arr['0'];
     $cat_id = $arr['1'];
     $sub_cat_id = $arr['2'];
    $material_id = $arr['4'];
    $material_selection = $arr['3'];
    //$GSM_selection = 0;
    //$subcat_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);
    $material_data = $this->common_model->getsubcategory_filter($section_id,$cat_id,$sub_cat_id);
    $material_selection = 1;
        echo "<h5><a href='#'' class='tgl_btn'>Material</a></h5>";
          echo "<ul class='tgl_c'>"; 
          //echo count($material_data);
          if(count($material_data)>0)
          {
             foreach( $material_data as $row)
              {
                ?>

                    <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $material_selection;?>/<?php echo $row['material_id']; ?>" onclick="showResult(this.id); show_filter_material(this.id); show_print(this.id);   showhandle(this.id); filter_spl_wrk(this.id); filter_lamination(this.id); show_filter_product(this.id); create_numberlinks_material(this.id)"><?php echo $row['material_name']; ?></li>
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
    print_r($arr);    
     $material_select = $arr['3'];
      echo "<div class='side_box side_box_1 red5 material' id='GSM_result'>";
        echo "<h5><a href='#'' class='tgl_btn'>GSM</a></h5>";
          echo "<ul class='tgl_c'>"; 
   if ($material_select==0) {?>
     <li> <?php echo "Select Material"; ?></li>
   <?php }else{
    $section_id = $arr['0'];
    $cat_id = $arr['1'];
    $sub_cat_id = $arr['2'];
    $material_id = $arr['4'];
   //$GSM_selection = 1;

     $material_data = $this->common_model->search_material($section_id,$cat_id,$sub_cat_id,$material_id);

     
          // echo $this->session->userdata('material_details_data');
          // die();
          // $GSM_details = $this->session->userdata('GSM_details_data');
          // $material_details = $this->session->userdata('material_details_data');
         if(count($material_data)>0)
           {
              foreach( $material_data as $row)
              {
                
                  ?>
                 

                    <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $material_select;?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>" onclick="show_filter_material(this.id); showstyle(this.id); filter_lamination(this.id); filter_spl_wrk(this.id); show_print(this.id); showhandle(this.id); create_numberlinks_GSM(this.id)"><?php echo $row['GSM_name']; ?></li>
                  <?php
              }
            }

             
   }
    echo "<ul></div>";
    //$filter_id=$arr['0'];
    
   
    //$GSM_name = $arr['5'];
    // $this->session->set_userdata('material_details_data',$arr['3']);
   

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
    //die();
    //$filter_id=$arr['0'];
    //$style_id = $arr['0']; 
     echo "<h5><a href='#'' class='tgl_btn'>Size</a></h5>";
          echo "<ul class='tgl_c'>"; 
     if (!isset($arr['4'])) {?>
     <li> <?php echo "Select Style"; ?></li>
   <?php }else{
     $section_id = $arr['0'];
    $cat_id = $arr['1'];
    $sub_cat_id = $arr['2'];
    $style_id = $arr['4'];    
    $size_data = $this->common_model->getfilterSize_product($style_id); 

       
          //echo count($material_data);
          if(count($size_data)>0)
          {
              foreach( $size_data as $row)
              {
                 $size_array=explode(',', $row['size']); 
                  foreach ($size_array as $row1) {

                ?>
                    <li id="<?php echo $row['style_id']; ?>/<?php echo $row1; ?>" onclick="show_filter_size(this.id); create_numberlinks_size(this.id)"><?php echo $row1; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php 
                   $size_details = $row1;
                  $this->session->set_userdata('size_details',$size_details);
                  } }
                 
          }
             
         }
          echo "<ul>";
        
  }

  function filter_style($search_for=null)
  {
      $style_id = $this->input->get('filter_style');
      
    //print_r($result['search_for']);
   
    $arr = explode('/',$style_id);

    print_r($arr);

    //$filter_id=$arr['0'];
    echo "<h5><a href='#'' class='tgl_btn'>Style</a></h5>";
    echo "<ul class='tgl_c'>"; 
           
    $section_id = $arr['0'];
    $cat_id = $arr['1'];
    $sub_cat_id = $arr['2'];
    if ($arr['3']!=1) {
      $material_select = $arr['3'];?>
       <li> <?php echo "Select GSM"; ?></li>
    <?php }
    else
    {
      $material_select = 1;
      $material_data = $this->common_model->search_style($section_id,$cat_id,$sub_cat_id);
        
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $material_select; ?>/<?php echo $row['style_id']; ?>" onclick="showsize(this.id); show_filter_style(this.id); create_numberlinks_style(this.id)"><?php echo $row['style']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
                 $style_details = $row['style_id'];
                  $this->session->set_userdata('style_id',$style_details);
                  
              }
              
    }
   

    
    
            
              echo "<ul>";
            
  }

   function filter_handle($search_for=null)
  {
      $material_id = $this->input->get('filter_handle');
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);

    print_r($arr);

    
    //$filter_id=$arr['0'];
     $material_select = $arr['3'];
    // $GSM_selection = $arr['4'];
      echo "<div class='side_box side_box_1 red5 material' id='GSM_result'>";
        echo "<h5><a href='#'' class='tgl_btn'>Handle</a></h5>";
          echo "<ul class='tgl_c'>"; 
   if ($material_select==0 || !isset($arr['5'])) {?>
     <li> <?php echo "Select GSM"; ?></li>
   <?php }else{
    $section_id = $arr['0'];
    $cat_id = $arr['1'];
    $sub_cat_id = $arr['2'];
    $material_id = $arr['4'];
    $GSM_name = $arr['5'];
    $this->session->userdata('size_data');
    $this->session->userdata('style_data');
    
     $material_data = $this->common_model->getfilterhandle($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name);
       
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $material_select; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['handle']; ?>" onclick="show_filter_material(this.id); filter_spl_wrk(this.id); filter_lamination(this.id); show_print(this.id); create_numberlinks_handle(this.id)"><?php echo $row['handle']; ?></li>
                  <?php
              }
              
   } 

   echo "<ul>";      
  }

  function filter_print($search_for=null)
  {
    //global $id;
      $material_id = $this->input->get('filter_print');
    //print_r($result['search_for']);
   
    $arr = explode('/',$material_id);

    print_r($arr);
   
   $material_select = $arr['3'];
   //$GSM_selection = $arr['4'];
   // if (isset($arr['4'])) {
   //   echo $id=$arr['4'];
   // }
    
  // die();
     
        echo "<h5><a href='#'' class='tgl_btn'>Print</a></h5>";
          echo "<ul class='tgl_c'>"; 
          if($material_select==1  && isset($arr['6']))
          {
            
            $material_select;
            $section_id = $arr['0'];
            $cat_id = $arr['1'];
            $sub_cat_id = $arr['2'];
            $material_id = $arr['4'];
            $GSM_name = $arr['5'];   
            $handle = $arr['6'];
            // $style_id = $this->session->userdata('style_id');
    // $size = $this->session->userdata('size');
               
            $material_data = $this->common_model->getfilterprint($section_id,$cat_id,$sub_cat_id,$material_id,$GSM_name,$handle);
               
                      foreach( $material_data as $row)
                      {
                          ?>

                            <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $material_select; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['handle']; ?>/<?php echo $row['print']; ?>" onclick="filter_spl_wrk(this.id); filter_lamination(this.id);show_filter_material(this.id); create_numberlinks_print(this.id)"><?php echo $row['print']; ?></li>
                          <?php
                      }
           }
          else {?>
          <li> <?php echo "Select Handle"; ?></li>
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
    //die();
     $material_select = $arr['3'];
     //$GSM_selection = $arr['4'];
      echo "<h5><a href='#'' class='tgl_btn'>Lamination</a></h5>";
          echo "<ul class='tgl_c'>"; 
           
     if($material_select==0 || !isset($arr['7']))
    {?>
       <li> <?php echo "Select Print"; ?></li>
   <?php }else{
    // $section_id = $arr['0'];
    // $cat_id = $arr['1'];
    // $sub_cat_id = $arr['2'];
    // $material_id = $arr['4'];
    //$GSM_name = $arr['5'];    
    // $handle = $arr['6'];
    // $print = $arr['7'];
    
    
    $material_data = $this->common_model->getmaterial_relatedprod($arr);
       
              foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $material_select; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['handle']; ?>/<?php echo $row['print']; ?>/<?php echo $row['lamination']; ?>" onclick="filter_spl_wrk(this.id); show_filter_material(this.id); show_filter_lamination(this.id); create_numberlinks_lamination(this.id)"><?php echo $row['lamination']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }

   }
              echo "<ul>";
            
  }

   function filter_spl_wrk($search_for=null)
  {
      $material_id = $this->input->get('filter_spl_wrk');
    //print_r($result['search_for']);
    
    $arr = explode('/',$material_id);

    print_r($arr);
     $material_select = $arr['3'];
     //$GSM_selection = $arr['4'];
      echo "<h5><a href='#'' class='tgl_btn'>Special Work</a></h5>";
      echo "<ul class='tgl_c'>"; 
    if($material_select==0 || !isset($arr['8']))
    {?>
       <li> <?php echo "Select Lamination"; ?></li>
   <?php }
   else{
    // $section_id = $arr['0'];
    // $cat_id = $arr['1'];
    // $sub_cat_id = $arr['2'];
    // $material_id = $arr['4'];
    // $GSM_name = $arr['5'];    
    // $handle = $arr['6'];
    // $handle = $arr['7'];
    // $lamination = $arr['8'];
    // $size = $this->session->userdata('size_details');
    // $style = $this->session->userdata('style_id'); 
    
    $material_data = $this->common_model->getmaterial_relatedprod($arr);
     foreach( $material_data as $row)
              {
                  ?>

                    <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>//<?php echo $material_select; ?>/<?php echo $row['material_id']; ?>/<?php echo $row['GSM_name']; ?>/<?php echo $row['handle']; ?>/<?php echo $row['print']; ?>/<?php echo $row['lamination']; ?>" onclick="show_filter_material(this.id); create_numberlinks_special_wrk(this.id)"><?php echo $row['special_wrk']; ?><input type="radio" class="iradio_minimal" name="mate_name"></li>
                  <?php
              }
              echo "<ul>";
            
  }
}
} 
?>