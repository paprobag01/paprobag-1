
 <style type='text/css'>
     
     span.unclickable:hover { cursor: default; }
     </style>
<div id="content">
  <div class="container">
    <div class="catelog_c">
      <div class="slider clearfix animated rollIn " data-animation="rollIn"  >
        <div class="category-slider">
          <ul class="slides">
		  <?php foreach($cat_prod as $row) { ?>
				<li>
			   <div class="slider_img"> <img alt="alt"  src="<?php echo base_url()?>/<?php echo $row['prod_image'];?>" width="400" height="400"> </div>
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
        <h2><?php foreach($page_data3 as $row){echo $row['cat_name'];}?>
          
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
          <div class="sidebar sidebar_1 " >
            <div class="side_box">
              <h5><a href="#" class="tgl_btn">Price</a></h5>
              <div class="price tgl_c">
                <div class="clearfix">
                  <input type="text" class="txtbox" placeholder="10">
                  <span class="to">to</span>
                  <input type="text" class="txtbox" placeholder="850">
                </div>
                <div class="price_bar"> 
                
                
					<!-- Slider -->

					<div id="slider"></div>
					</div>
                
              </div>
            </div>
            <div class="side_box side_box_1 red5">
              <h5><a href="#" class="tgl_btn">categories</a></h5>
              <ul class="tgl_c" id="sub_cat_data">
			  <?php foreach($sub_category_list as $row){?>
              
                <li id="<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>" onclick="show_filter_subprod(this.id); showsubcat(this.id); createpagenumb(this.id)"><?php echo $row['sub_cat_name']; ?></li>
			  <?php } ?>
			       </ul>
            </div>
           <form method="post">
            <!-- <input type="search" id="search_value" name="search_value"  class="txtbox" placeholder="Search" onkeyup="showResult(this.value)">
             <div class="control-group" name="filter_id" id="output">
                      
                      </div>-->
             <div class="side_box side_box_1 red5" id="material_result">
               <span class="unclickable"> <h5><a href="#" class="tgl_btn">Material</a></h5></span>
                  <ul class="tgl_c1">
                       <li> <?php echo "Select Category"; ?></li>
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
             </form>
            
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
                      <li> <?php echo "Select Print"; ?></li>
                   </ul> 
              
            </div>
             
            <div class="side_box side_box_1 red5 material" id="special_wrk_result">
              <span class="unclickable" > <h5><a href="#" class="tgl_btn">Special Work</a></h5></span>
                 <ul class="tgl_c1">
                      <li> <?php echo "Select Lamination"; ?></li>
                   </ul> 
             
            </div>
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
            <div class="row view-grid animated  fadeInUp" data-animation="fadeInUp" id="filter_material_result">
             
            </div>

            <div >
             
            </div>
            <div class="page_c clearfix red5" id="paging"> 
             
          </div>
        </div>
      </div>
    </div>
  </div>
</div>