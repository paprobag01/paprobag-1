<script>
  $("#material").click(function () {
   var material_sec = $("#material_sec").val();

    $.ajax({
        type:'POST',
        dataType:'json',
        ContentType:'application/json',
        url:base_url+"catalog/getGSM/",
        data:{'seach_for':seach_for},
        success:function(data)
        {
            $('#GSM_data').text(data);
        }


    });
  });
</script>
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
              <ul class="tgl_c" id="sub_cat_data">
			  <?php foreach($sub_category_list as $row){?>
                <li value="<?php echo $row['sub_cat_id']; ?>" ><a href=""><?php echo $row['sub_cat_name']; ?></a></li>
			  <?php } ?>
			  </ul>
            </div>
            <div class="side_box side_box_1 red5">
              <h5><a href="#" class="tgl_btn">Material</a></h5>
              <ul class="tgl_c" id="sub_cat_data">
        <?php foreach($material_data as $row){?>
                <li value="<?php echo $row['material_name']; ?>" ><a href=""><?php echo $row['material_name']; ?></a></li>
        <?php } ?>
        </ul>
            </div>
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">GSM</a></h5>
              <ul class="tgl_c">
                <li id="GSM_data">100
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>               
              </ul>
            </div>
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">Size</a></h5>
              <ul class="tgl_c">
                <li>12w*10h*4g
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>16w*13h*4g
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>                
              </ul>
            </div>
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">Style</a></h5>
              <ul class="tgl_c">
                <li>Vertical
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Horizatal
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Box
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Basket
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>               
              </ul>
            </div>
            
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">Handle</a></h5>
              <ul class="tgl_c">
                <li>Twisted 
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Steel
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Plastic
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Ceramics
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Wood
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
              </ul>
            </div>
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">Print</a></h5>
              <ul class="tgl_c">
                <li>Offset
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Screen
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>               
              </ul>
            </div>
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">Print Color</a></h5>
              <ul class="tgl_c">
                <li>1
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>2
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>3
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>4
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>More Color
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
              </ul>
            </div>
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">Lamination</a></h5>
              <ul class="tgl_c">
                <li>All
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Steel
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Plastic
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Ceramics
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Wood
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
              </ul>
            </div>
             
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">Special Work</a></h5>
              <ul class="tgl_c">
                <li>All
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Steel
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Plastic
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Ceramics
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
                <li>Wood
                  <input type="radio" class="iradio_minimal" name="mate_name">
                </li>
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
            <div class="row view-grid animated  fadeInUp" data-animation="fadeInUp" >
             <?php foreach($cat_prod as $row){?>
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
                        echo $row['sub_cat_id'];?>/<?php echo $row['prod_id'];?>" 
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