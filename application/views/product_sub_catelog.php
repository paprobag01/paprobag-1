

<style type='text/css'>
     
     span.unclickable:hover { cursor: default; }
     </style>

<div id="content">
  <div class="container">
    <div class="catelog_c">
      <div class="slider clearfix animated rollIn " data-animation="rollIn"  >
        <div class="category-slider">
          <ul class="slides">
		  <?php foreach($product_banner as $row) { ?>
				<li>
			   <div class="slider_img"> <img alt="alt"  src="<?php echo base_url()?>/<?php echo $row['image'];?>" width="400" height="400"> </div>
				  <div class="slider_desc">
					<h1>Quisque Porttitor </h1>
					<p>Etiam rhoncus velit vel volutpat tristique. Cras ac ornare est. Sed ac orci velit. Morbi pulvinar quam vel magna vehicula ullamcorper id at arcu. </p>
					<div class="clearfix"> <a class="btn_c" href="#">Detail</a>
					  <div class="price_c"> <span class="old_price">$150</span> <span class="new_price">$120</span> </div>
					</div>
				  </div>
				</li>   
		<?php } ?>			
          </ul>
          <div class="container">
           
          </div>
        </div>
      </div>
      <div class="title clearfix">
        <h2><?php foreach($page_data3 as $row){echo $row['cat_name'];}?> : 
		<?php foreach($sub_prod_name as $row)
		{
			echo $row['sub_cat_name'];
		}
		
		
		?>
          
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
          <div class="sidebar sidebar_1 " >
            <div class="side_box">
              <h5><a href="#" class="tgl_btn">Price</a></h5>
              <div class="price tgl_c">
                <div class="clearfix">
                  <input type="text" class="txtbox" placeholder="$ 10">
                  <span class="to">to</span>
                  <input type="text" class="txtbox" placeholder="$ 850">
                </div>
                <div class="price_bar"> 
                
                
					<!-- Slider -->

					<div id="slider"></div>
					</div>
                
              </div>
            </div>
            <div class="side_box side_box_1 red5">
              <h5><a href="#" class="tgl_btn">categories</a></h5>
              <ul class="tgl_c1">
			 <!--  <?php
                        if(strtoupper($row['cat_id']) == 'WHOLESALE')
                        {
                          $wholesale_flag = 1;
                        } else {
                          $wholesale_flag = 0;
                        }
                        ?> -->
			  <?php foreach($sub_category_list as $row){?>
                <li <?php if(isset($row)) {?>class="active" <?php } ?>><a href="<?php echo base_url()?>catalog/getProducts/<?php echo 0;?>/<?php echo $row['section_id'];?>/<?php echo $row['cat_id'];?>/<?php echo $row['sub_cat_id'];?>"><?php  echo $row['sub_cat_name']; ?></a></li>
			  <?php } ?>
              </ul>
            </div>
            <form method="post">
             
             <div class="side_box side_box_1 red5" id="material_result">
              <h5><a href="#" class="tgl_btn">Material</a></h5>
              
              <ul class="tgl_c1">
        <?php foreach($material_data as $row){?>
               <span style="cursor:pointer"> <li  id="<?php echo $row['material_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>/<?php echo $row['material_id']; ?>" onclick="showResult(this.id);"><?php echo $row['material_name']; ?></li></span>
        <?php } ?>
              </ul>
              

            </div>
            <!--<div class="control-group" name="filter_id" id="output">
                      
                      </div>-->
            <div class="side_box side_box_1 red5 material" id="GSM_result">
            <span class="unclickable"> <h5><a href="#" class="tgl_btn">GSM</a></h5></span>
            <ul class="tgl_c1">
             <li> <?php echo "Select Material"; ?></li>
           </ul>
                 
            </div>
            <div class="side_box side_box_1 red5 material" id="size_result">
              <span class="unclickable" style="hover:{ cursor: default; }"> <h5><a href="#" class="tgl_btn">Size</a></h5></span>
               <ul class="tgl_c1">
             <li> <?php echo "Select GSM"; ?></li>
           </ul>            

            </div>           
            <div class="side_box side_box_1 red5 material" id="style_result">
              <span class="unclickable" > <h5><a href="#" class="tgl_btn">Style</a></h5></span>
                 <ul class="tgl_c1">
             <li> <?php echo "Select Size"; ?></li>
           </ul>
              
            </div>
             
            
            <div class="side_box side_box_1 red5 material" id="handle_result">
               <span class="unclickable" > <h5><a href="#" class="tgl_btn">Handle</a></h5></span>
                <ul class="tgl_c1">
             <li> <?php echo "Select Style"; ?></li>
           </ul>
              
            </div>
            <div class="side_box side_box_1 red5 material" id="print_result">
              <span class="unclickable" > <h5><a href="#" class="tgl_btn">Print</a></h5></span>
               <ul class="tgl_c1">
             <li> <?php echo "Select Handle"; ?></li>
           </ul>
              
            </div>

            <div class="side_box side_box_1 red5 col_box">
              <h5><a href="#" class="tgl_btn">Select Number Of Colors</a></h5>
                <ul class="tgl_c">                
                <li>1
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                 <li>2
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li>3
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li>4
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li>Multicolor
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
              </ul>
            </div>
            
            <div class="side_box side_box_1 red5 material" id="lamination_result">
               <span class="unclickable" > <h5><a href="#" class="tgl_btn">Lamination</a></h5></span>
                <ul class="tgl_c1">
             <li> <?php echo "Select Print Color"; ?></li>
           </ul>
              
            </div>
             
            <div class="side_box side_box_1 red5 material" id="special_wrk_result">
              <span class="unclickable" > <h5><a href="#" class="tgl_btn">Special Work</a></h5></span>
                 <ul class="tgl_c1">
             <li> <?php echo "Select Lamination"; ?></li>
           </ul>
             
            </div>
            </form>
            <div class="side_box side_box_1 red5 cat_box">
              <h2>Free Catalog</h2>
              <h5>Summer 2014</h5>
              <a href="#" class="down_btn">Download</a> </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="product_c">
            <div class="filter_c"> <span>Show:</span>
              <div class="select_box sel_1">
                <select class="selbx ">
                  <option>25</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
              <span>Sort by:</span>
              <div class="select_box sel_2">
                <select class="selbx ">
                  <option>Popularity</option>
                  <option>Opt 1</option>
                  <option>Opt 2</option>
                  <option>Opt 3</option>
                </select>
              </div>
            </div>
            <div class="row view-grid animated  fadeInUp" data-animation="fadeInUp" >
             <?php foreach($sub_prod as $row){?>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                
                		<!--<span class="sale-label">Sale</span>              
                        
                        
                        <span class="discount-label">10%</span>-->
                        
                        
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> 
                      <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> 
                      <a href="<?php echo base_url()?>Catalog/getmore/<?php
                        echo $wholesale_flag; ?>/<?php 
                        echo $row['section_id'];?>/<?php 
                        echo $row['cat_id'];?>/<?php
                        echo $row['sub_cat_id'];?>/<?php 
                        echo $row['prod_id'];?>" 
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
			 <?php }?>
            </div>
            <div class="page_c clearfix red5"> <a href="#" class="prev"><span class="fa fa-chevron-left"></span>Previous</a>
              <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
              </ul>
              <a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>