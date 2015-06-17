<div id="content">
  <div class="container">
    <div class="catelog_c">
      <div class="slider clearfix animated rollIn " data-animation="rollIn"  >
        <div class="category-slider">
          <ul class="slides">
            <li>
           <div class="slider_img"> <img alt="alt"  src="media/slides/catalog-slide1.png" > </div>
              <div class="slider_desc">
                <h1>Quisque Porttitor </h1>
                <p>Etiam rhoncus velit vel volutpat tristique. Cras ac ornare est. Sed ac orci velit. Morbi pulvinar quam vel magna vehicula ullamcorper id at arcu. </p>
                <div class="clearfix"> <a class="btn_c" href="#">Detail</a>
                  <div class="price_c"> <span class="old_price">$150</span> <span class="new_price">$120</span> </div>
                </div>
              </div>
            </li>
            <li>
                    <div class="slider_img"> <img alt="alt"  src="media/slides/catalog-slide2.png"> </div>
              <div class="slider_desc">
                <h1>Legunt saepius </h1>
                <p>Faded short sleeve t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer! </p>
                <div class="clearfix"> <a class="btn_c" href="#">Detail</a>
                  <div class="price_c"> <span class="old_price">$150</span> <span class="new_price">$120</span> </div>
                </div>
              </div>
            </li>
            <li>
              <div class="slider_img"> <img alt="alt"  src="media/slides/catalog-slide3.png" > </div> 
              <div class="slider_desc">
                <h1>Quisque Porttitor </h1>
                <p>Etiam rhoncus velit vel volutpat tristique. Cras ac ornare est. Sed ac orci velit. Morbi pulvinar quam vel magna vehicula ullamcorper id at arcu. </p>
                <div class="clearfix"> <a class="btn_c" href="#">Detail</a>
                  <div class="price_c"> <span class="old_price">$150</span> <span class="new_price">$120</span> </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="container">
           
          </div>
        </div>
      </div>
      <div class="title clearfix">
        <h2><?php foreach($page_data7 as $row){ echo $row['section_name']; }?></h2>
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
              <ul class="tgl_c">
			  <?php foreach($page_data6 as $row){ ?>
                <li><a href="<?php echo base_url()?>Catalog/getcategory/<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></a>
				</li> 
			  <?php }?>
              </ul>
            </div>
            <div class="side_box side_box_1 red5 col_box">
              <h5><a href="#" class="tgl_btn">Select color</a></h5>
              <ul class="tgl_c">
                <li><span></span>Purple
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li><span></span>Blue
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li><span></span>Green
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li><span></span>Yellow
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li><span></span>Oraange
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li><span></span>Red
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li><span></span>Gray
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li><span></span>Black
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
                <li><span class="multi"></span>Multicolor
                  <input type="checkbox" class="icheckbox_minimal">
                </li>
              </ul>
            </div>
            <div class="side_box side_box_1 red5 material">
              <h5><a href="#" class="tgl_btn">material</a></h5>
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
              <h5><a href="#" class="tgl_btn">more options</a></h5>
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
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 " >
              
              
        
                <div class="main_box">
                
              
                
           
								<span class="new-label">New</span>
		
                
                
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/1.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">Mugs with yellow stripes</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$15.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                
                		<span class="sale-label">Sale</span>
                        
                        
                        
                        <span class="discount-label">10%</span>
                        
                        
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/2.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/3.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/1.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">Mugs with yellow stripes</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$15.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/2.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/3.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/1.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">Mugs with yellow stripes</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$15.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/2.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/3.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/1.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">Mugs with yellow stripes</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$15.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/2.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/3.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/1.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">Mugs with yellow stripes</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$15.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/2.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="main_box">
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="media/product/3.jpg" draggable="false">
                    <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="product.html" class="btn_c info_btn">More info</a> </div>
                  </div>
                  <div class="desc">
                    <h5><a href="#">oDMJUK teapot white</a></h5>
                    <p>Kitchen utensils</p>
                    <div class="price">$20.50</div>
                  </div>
                </div>
              </div>
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