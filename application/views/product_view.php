
<?php 
if(isset($page_data5))
{
extract($page_data5);
}

?>
<div id="content">
  <div class="container">
    <div class="title clearfix">
      <h2><?php foreach($page_data5 as $row){echo $row['prod_name'];}?></h2>
      <div class="title_right"> <a href="#" class="backtocate"><span class="fa fa-arrow-circle-left"></span>Back to catalog</a> </div>
    </div>
    <div class="pro_main_c">
      <div class="row">
        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 animated  animation-done bounceInLeft" data-animation="bounceInLeft">
          <div class="slider_1 clearfix">
            <div class="clearfix" id="image-block">
	<span style="cursor:move">
  <div id="slider-product" class="flexslider">
    <ul class="slides">
	<?php foreach($page_data5 as $row) {?>
      <li> <img src="<?php echo base_url().$row['prod_image'] ?>"/> </li>
      <li> <img src="<?php echo base_url().$row['prod_image'] ?>"/> </li>
      <li> <img src="<?php echo base_url().$row['prod_image'] ?>"/> </li>
      <li> <img src="<?php echo base_url().$row['prod_image'] ?>"/> </li>
       <li> <img src="<?php echo base_url().$row['prod_image'] ?>"/> </li>
      <li> <img src="<?php echo base_url().$row['prod_image'] ?>"/> </li>
      <li> <img src="<?php echo base_url().$row['prod_image'] ?>"/> </li>
      <li> <img src="<?php echo base_url().$row['prod_image'] ?>"/> </li>
	<?php } ?>
    </ul>
  </div>
  </span>
  <div id="carousel" class="flexslider">
    <ul class="slides">
      <li> <div class="carousel-item"><img src="<?php echo base_url().$row['prod_image'] ?>"/></div> </li>
      <li> <div class="carousel-item"><img src="<?php echo base_url().$row['prod_image'] ?>"/></div> </li>
        <li> <div class="carousel-item"><img src="<?php echo base_url().$row['prod_image'] ?>"/></div> </li>
          <li> <div class="carousel-item"><img src="<?php echo base_url().$row['prod_image'] ?>"/></div> </li>
            <li> <div class="carousel-item"><img src="<?php echo base_url().$row['prod_image'] ?>"/></div> </li>
              <li> <div class="carousel-item"><img src="<?php echo base_url().$row['prod_image'] ?>"/></div> </li>
                <li> <div class="carousel-item"><img src="<?php echo base_url().$row['prod_image'] ?>"/></div> </li>
                  <li> <div class="carousel-item"><img src="<?php echo base_url().$row['prod_image'] ?>"/></div> </li>

    </ul>
  </div>
</div>
          </div>
        </div>
        <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 animated animation-done  bounceInRight" data-animation="bounceInRight">
          <div class="desc_blk">
            <h5>description</h5>
            <div class="desc_blk_inn">
              <h5>Care instructions</h5>
              <p><?php foreach($page_data5 as $row){echo $row['prod_short_description'];}?></p>
             
            </div>
			<div class="desc_blk_inn">
			<table>
             <tr>
				<td><h5>Short Description :</h5></td><td><p><?php foreach($page_data5 as $row){echo $row['prod_short_description'];}?></p></td>
			 </tr>
			 <tr>
				<td align="center"><h5>Product Sold By : </h5></td><td align="left"><p><?php foreach($page_data5 as $row){echo $row['sold_by'];}?></p></td>
			 </tr>
			
			   </table>
            </div>
            <div class="desc_blk_bot clearfix">
              <div class="qty"> <a class="minus_btn" ></a>
                <input type="text" name="qty" placeholder="1" class="txtbox">
                <a class="plus_btn" ></a> </div>
              <div class="price"><?php foreach($page_data5 as $row){echo $row['prod_price'];}?></div>
              <a href="#" class="btn_c">Add to cart</a> </div>
            <div class="review_row clearfix">
              <ul class="start_list">
                <li class="fa fa-star active"></li>
                <li class="fa fa-star active"></li>
                <li class="fa fa-star active"></li>
                <li class="fa fa-star active"></li>
                <li class="fa fa-star"></li>
              </ul>
              <div class="total_rew">3 Review(s)</div>
              <a href="#" class="add_rew">Add Your Review</a> <a href="#" class="share"><span class="fa fa-share-square-o"></span>Share</a> </div>
          </div>
        </div>
      </div>
      <div class="tabing animated  animation-done bounceInUp "  data-animation="bounceInUp">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">customer reviews    2</a></li>
          <li><a href="#information" data-toggle="tab">More INFORMATION</a></li>
          <li><a href="#protags" data-toggle="tab">Recently viewed</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="rew_blk clearfix">
                  <h5>Excellent </h5>
                  <div class="top_row clearfix">
                    <div class="date"><span class="fa fa-calendar"></span>1/3/2014</div>
                    <a href="#" class="user"><span class="fa fa-user"></span>Sheldon</a>
                    <ul class="start_list">
                      <li class="fa fa-star active"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                    </ul>
                  </div>
                  <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in. Etiam interdum felis sed consequat varius. Aliquam erat volutpat. </p>
                </div>
                <div class="rew_blk clearfix">
                  <h5>Awesome!</h5>
                  <div class="top_row clearfix">
                    <div class="date"><span class="fa fa-calendar"></span>1/3/2014</div>
                    <a href="#" class="user"><span class="fa fa-user"></span>Sasha</a>
                    <ul class="start_list">
                      <li class="fa fa-star active"></li>
                      <li class="fa fa-star active"></li>
                      <li class="fa fa-star active"></li>
                      <li class="fa fa-star active"></li>
                      <li class="fa fa-star"></li>
                    </ul>
                  </div>
                  <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="frm rew_frm">
                  <h5>Write a review</h5>
                  <form action="http://templines.com/demo/html/shoptime-html/cooncook/action.php">
                    <div class="row first_row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lbltxt">Your Name: <span class="req">*</span></div>
                        <input type="text" class="txtbox">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lbltxt">E-mail:<span class="req">*</span></div>
                        <input type="text" class="txtbox">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lbltxt">Theme:<span class="req">*</span></div>
                        <input type="text" class="txtbox">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lbltxt">Rate on a scale:</div>
                        <ul class="start_list">
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="lbltxt">Message: <span class="req">*</span></div>
                    <textarea ></textarea>
                    <div class="clearfix frm_bot">
                      <input type="submit" class="btn_c" value="Submit">
                      <input type="reset" class="clear_btn" value="Clear">
                      <span class="reqired">* Required Fields</span> </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="information">
            <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in. Etiam interdum felis sed consequat varius. Aliquam erat volutpat. </p>
            <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in. Etiam interdum felis sed consequat varius. Aliquam erat volutpat. </p>
          </div>
         <div class="tab-pane" id="protags">
			<div class="carosel product_c">
          <div class="row"> 
            <!-- Place somewhere in the <body> of your page -->
            <div >
              <ul class="bxcarousel" >
			  <?php
									$i=0;
									if(isset($_COOKIE))
									{
									foreach ($_COOKIE as $key=>$val)
										{
											if($key!='PHPSESSID' && $key!='ci_session' && $key!='count')
											{
												
										//	echo $key.' is '.$val."<br>\n";
												if('prod_id'.$val==$key){
													if(isset($_COOKIE['prod_id'.$val.'']))
													{
											?>
											
											 <li>
                  <div class="main_box">
                    <div class="box_1"> <a href="<?php if(isset($_COOKIE['prod_Image'.$val.''])){ echo base_url().'productDetails/getDetails/'.$_COOKIE['prod_id'.$val.''] ;}?>"><img alt="alt"  src="<?php if(isset($_COOKIE['prod_Image'.$val.''])){ echo base_url().$_COOKIE['prod_Image'.$val.''];}?>" width="259" height="200"></a>
                    
                    
                    <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5><?php if(isset($_COOKIE['prod_Name'.$val.''])){echo $_COOKIE['prod_Name'.$val.''];} ?></h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$<?php if(isset($_COOKIE['prod_Price'.$val.''])){ echo $_COOKIE['prod_Price'.$val.''];} ?></div>
                    </div>
                  </div>
                </li>
				
											<?php }
												}
											}
										}
									}
			  	
											?>
				<ul>
			</div>
			</div></div>
          </div>
        </div>
      </div>
      <div class=" animated  fadeInUp" data-animation="fadeInUp">
        <div class="clearfix">
          <h3>Related Products</h3>
        </div><br>
		<div class="row view-grid animated  fadeInUp" data-animation="fadeInUp" >
             <?php foreach($page_data2 as $row){?>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                <div class="main_box">
                
                		<!--<span class="sale-label">Sale</span>              
                        
                        
                        <span class="discount-label">10%</span>-->
                        
                        
                  <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url().$row['prod_image'] ?>" draggable="false">
                    <div class="overlay" id="add_to"> <a href="<?php echo base_url()?>/" class="btn_c cart_btn_1">Add to cart</a> <a href="<?php echo base_url()?>Catalog/getmore/<?php echo $row['section_id'];?>/<?php echo $row['cat_id'];?>/<?php echo $row['prod_id'];?>" class="btn_c info_btn">More info</a> </div>
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
		
      </div>
    </div>
  </div>
</div>
