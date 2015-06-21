<?php 
if(isset($moq))
{
  echo $moq;
}

?>
<div class="flexslider home-slider">
  <ul class="slides">
  <?php foreach($page_data10 as $row){ ?>
    <li> <img alt="alt" src="<?php echo base_url()?>/<?php echo $row['slider_image']?>" width="1600" height="800">
      <div class="flex-caption">
        <div class="banner">
          <h1>Chinese Porcelain Tea Set</h1>
          <div class="line_1"></div>
          <h4>Maecenas non justo varius, egestas nisi nec, ultrices erat. Aliquam elit urna</h4>
          <p>Sed iaculis, nisi vel rhoncus sagittis, est risus ultricies eros, a varius diam eros pretium arcu. <br>
            Etiam mattis orci ut pharetra laoreet.</p>
          <a class="btn_c" href="#">Details</a> </div>
      </div>
    </li>   
  <?php } ?>
  </ul>
  <div class="container">
    <div class="banner_nav ">
      <div class="scroll_down">Scroll down <span class="fa fa-arrow-circle-down"></span></div>
    </div>
  </div>
</div>
<!--SLIDER END -->
<div id="content">
  <div class="container">
    <div class="h_row_1 ideas-hover">
      <div class="row">
	  <?php foreach($page_data1 as $row){ ?>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12  animated" data-animation="rollIn" >
          <div class="box hg_510 box_1 red5">
            <a href="<?php echo base_url() ?>catalog/cusomizable/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><figure class="effect-chico"> <img alt="alt" src="<?php echo base_url().$row['prod_image'] ?>" width="760" height="510" >
              <figcaption> </figcaption>
            </figure></a>
            <div class="box_inn">
              <h1>5 Fun Family Breakfast Ideas</h1>
              <p>Nullam eros diam, rhoncus sit amet laoreet nec,<br>
                commodo pharetra lorem.<a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>" class="fa fa-arrow-circle-right"></a></p>
            </div>
          </div>
        </div>
	  <?php } ?>
	   <?php foreach($page_data2 as $row){ ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animated" data-animation="bounceInRight">
          <div class="box hg_510 box_2 red5">
            <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><figure class="effect-chico"> <img alt="alt" src="<?php echo base_url().$row['prod_image'] ?>" width="360" height="510" >
              <figcaption> </figcaption>
            </figure></a>
            <div class="box_inn">
              <h1>Bake cakes <br>
                at home</h1>
              <p>Nullam eros diam, rhoncus sit amet laoreet nec, commodo pharetra lorem.<a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><span class="fa fa-arrow-circle-right"></a></p>
            </div>
          </div>
        </div>
      </div>
	  <?php } ?>
    </div>
	   
    <div class="h_row_2 ideas-hover">
      <div class="row">
	  <?php foreach($page_data6 as $row){ ?>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  animated" data-animation="rollIn">
          <div class="box hg_310 box_1 red5">
            <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><figure class="effect-chico "> <img alt="alt" src="<?php echo base_url().$row['prod_image'] ?>" width="260" height="310" >
              <figcaption> </figcaption>
            </figure></a>
            <div class="box_inn">
              <h5>functional shelves</h5>
              <p>Donec blandit erat rutrum</p>
            </div>
          </div>
        </div>
	  <?php } ?>
	   <?php foreach($page_data7 as $row){ ?>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated" data-animation="fadeInUpBig">
          <div class="box hg_310 box_2 red5">
            <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><figure class="effect-chico "> <img alt="alt" src="<?php echo base_url().$row['prod_image'] ?>" width="560" height="310" >
              <figcaption> </figcaption>
            </figure></a>
            <div class="box_inn">
              <h1>Selection of tea sets</h1>
              <p>Egestas nisi nec, ultrices erat. Aliquam elit urna, rutrum et accumsan in <a href="#" class="fa fa-arrow-circle-right"></a></p>
            </div>
          </div>
        </div>
	   <?php } ?>
	   <?php foreach($page_data8 as $row){ ?>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 animated" data-animation="bounceInRight">
          <div class="box hg_310 box_3 red5">
            <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><figure class="effect-chico "> <img alt="alt" src="<?php echo base_url().$row['prod_image'] ?>" width="259" height="310" >
              <figcaption> </figcaption>
            </figure></a>
            <div class="box_inn">
              <h5>Multicolored Pans</h5>
              <ul>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
              </ul>
            </div>
          </div>
        </div>
	   <?php }?>
      </div>
    </div>
    <div class="h_row_3 animated" data-animation="fadeInUp">
      <h1>Grand Sale - Discounts up to 70%</h1>
      <p>Etiam rhoncus velit vel volutpat tristique. Cras ac ornare est. Sed ac orci velit. Morbi pulvinar quam vel magna vehicula ullamcorper id at arcu. Curabitur interdum facilisis arcu a tempus. Sed vitae consequat velit, in laoreet ipsum. Pellentesque consequat tortor nec. Aliquam tempus lorem non nisi facilisis, at commodo massa facilisis.</p>
      <a href="<?php echo base_url()?>Grade_catalog" class="btn_c">Detail</a>
      <div class="thumb animated" data-animation="fadeInUp"> <img alt="alt" src="images/sale.png" > </div>
    </div>
    
	 <div class=" animated" data-animation="fadeInUp">
      <div class="clearfix">
        <h3 align="center">--- Ready To Print ---</h3>
		
      </div>
      <div class="carosel product_c">
	 
          <div class="row"> 
            <!-- Place somewhere in the <body> of your page -->
            <div >
              <ul class="bxcarousel" >
			  <?php foreach($page_data9 as $row){ 
					//$a = $row['cat_id'];
			  ?>
             <li>
                  <div class="main_box">
					 <div class="desc">
                      <h5 align="center"><?php echo $row['prod_name']; ?></h5>
					<p align="center"><?php echo $row['prod_short_description']; ?></p>
                    </div>
                    <div class="box_1"> <img src="<?php echo base_url().$row['prod_image'] ?>" class="img-responsive" alt="img" width="259" height="200">
                    
                    
						<div class="overlay"> <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"" class="btn_c cart_btn_1" href="#">More Info</a> </div>
                    
                    </div>
                    <div class="desc">                      
                     <p>Starting Price</p>
                      <div class="price">$5</div>
                    </div>
                  </div>
                </li>
			  <?php }?>
                
              </ul>
	  
            </div>
          </div>
        </div>
    </div>
	
	   <div class="clearfix">
			<h3 align="center">---  Ready To Deliver  ---</h3>
			
		</div>
    <div class="h_row_2 ideas-hover">
		
      <div class="row">	
		<?php foreach($page_data3 as $row){ ?>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  animated" data-animation="rollIn">		
          <div class="box hg_310 box_1 red5">
           <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><figure class="effect-chico "><img alt="alt" src="<?php echo base_url().$row['prod_image'] ?>" width="260" height="310" >		
              <figcaption> </figcaption>
            </figure></a>
            <div class="box_inn">
              <a href="#"><h5>Retail</h5></a>
              <p><?php echo $row['prod_name']; ?><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><span class="fa fa-arrow-circle-right"></a></p>
            </div>
			
          </div>
        </div>
		<?php } ?>
		<?php foreach($page_data4 as $row){ ?>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated" data-animation="fadeInUpBig">
          <div class="box hg_310 box_2 red5">
            <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><figure class="effect-chico "> <img alt="alt" src="<?php echo base_url().$row['prod_image'] ?>" width="560" height="310" >
              <figcaption> </figcaption>
            </figure></a>
            <div class="box_inn">
              <h1>OFFERS</h1>
              <p>Donec blandit erat rutrum <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><span class="fa fa-arrow-circle-right"></a></p>
            </div>
          </div>
        </div>
		<?php } ?>
		<?php foreach($page_data5 as $row){ ?>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 animated" data-animation="bounceInRight">
          <div class="box hg_310 box_3 red5">
           <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"> <figure class="effect-chico "> <img alt="alt" src="<?php echo base_url().$row['prod_image'] ?>" width="259" height="310" >
              <figcaption> </figcaption>
            </figure></a>
            <div class="box_inn">
              <h5>Wholesale</h5>
			  <p>Donec blandit erat rutrum <a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $this->encrypt->sha1($row['cat_id']); ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['prod_id']; ?>"><span class="fa fa-arrow-circle-right"></a></p>
              <ul>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
              </ul>
            </div>
          </div>
        </div>
		<?php }?>
      </div>
    </div>
	<br><br>
		    <div class=" animated" data-animation="fadeInUp">
      <div class="clearfix">
        <h3 align="center">--- Client Board ---</h3>
      </div>
      <div class="carosel product_c">
          <div class="row"> 
            <!-- Place somewhere in the <body> of your page -->
            <div >
              <ul class="bxcarousel" >
             <li>
                  <div class="main_box">
				  <div class="desc">
                      <h5 align="center">2-piece salad servers set</h5>
                      <p align="center">Kitchen utensils</p>                      
                    </div>
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                    
                    <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">                      
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
               <li>
                  <div class="main_box">
				  <div class="desc">
                      <h5 align="center">2-piece salad servers set</h5>
                      <p align="center">Kitchen utensils</p>                      
                    </div>
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                    
                    <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">                      
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
				  <div class="desc">
                      <h5 align="center">2-piece salad servers set</h5>
                      <p align="center">Kitchen utensils</p>                      
                    </div>
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                    
                    <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">                      
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
               <li>
                  <div class="main_box">
				  <div class="desc">
                      <h5 align="center">2-piece salad servers set</h5>
                      <p align="center">Kitchen utensils</p>                      
                    </div>
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                    
                    <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">                      
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/2.jpg" width="259" height="200">
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/3.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/4.jpg" width="259" height="200">
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/2.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/3.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/4.jpg" width="259" height="200">
                    
                    
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200"> 
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
	
  </div>
</div>