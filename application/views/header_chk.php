 <ul class="nav navbar-nav">
          <?php 
          // Loop for section
          foreach($section_data as $row)
          {          
          ?>
            <li class="dropdown">
              <a href="catalog.html" data-toggle="dropdown" class="dropdown-toggle">
                <?php echo $row['section_name']?>
                <b class="caret"></b>
              </a>
              <ul role="menu" class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="container">
                      <div class="row" style="overflow-x: scroll">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Kitchen</h5>
                          <ul>
                            <li><a href="catalog.html">Kitchen cabinets</a></li>
                            <li><a href="catalog.html">Interior organizers</a></li>
                            <li><a href="catalog.html">Appliances</a></li>
                            <li><a href="catalog.html">Free-standing kitchens</a></li>
                            <li><a href="catalog.html">Countertops</a></li>
                            <li><a href="catalog.html">Kitchen faucets</a></li>
                            <li><a href="catalog.html">Wall panels</a></li>
                            <li><a href="catalog.html">Kitchen islands &amp; carts</a></li>
                            <li><a href="catalog.html">Step stools &amp; step ladders</a></li>
                          </ul>
                          <h5>Children's</h5>
                          <ul>
                            <li><a href="catalog.html">Baby</a></li>
                            <li><a href="catalog.html">Children 3-7</a></li>
                            <li><a href="catalog.html">Children 8-12</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Livingroom</h5>
                          <ul>
                            <li><a href="catalog.html">Sofas &amp; armchairs</a></li>
                            <li><a href="catalog.html">TV &amp; media furniture </a></li>
                            <li><a href="catalog.html">Living room storage</a></li>
                            <li><a href="catalog.html">Coffee &amp; side tables</a></li>
                            <li><a href="catalog.html">Living room lighting</a></li>
                            <li><a href="catalog.html">Living room textiles</a></li>
                          </ul>
                          <h5>Bedroom</h5>
                          <ul>
                            <li><a href="catalog.html">Mattresses</a></li>
                            <li><a href="catalog.html">Beds</a></li>
                            <li><a href="catalog.html">Bedroom storage</a></li>
                            <li><a href="catalog.html">Lighting</a></li>
                            <li><a href="catalog.html">Textiles &amp; rugs</a></li>
                            <li><a href="catalog.html">Mirrors</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Textiles &amp; Rugs</h5>
                          <ul>
                            <li><a href="catalog.html">Rugs</a></li>
                            <li><a href="catalog.html">Bedroom textiles</a></li>
                            <li><a href="catalog.html">Curtains &amp; blinds</a></li>
                            <li><a href="catalog.html">Curtain rods &amp; rails</a></li>
                            <li><a href="catalog.html">Fabrics &amp; sewing</a></li>
                            <li><a href="catalog.html">Cushions covers</a></li>
                            <li><a href="catalog.html">Blankets &amp; throws </a></li>
                            <li><a href="catalog.html">Kitchen textiles </a></li>
                            <li><a href="catalog.html">Place mats</a></li>
                            <li><a href="catalog.html">Bathroom textiles</a></li>
                            <li><a href="catalog.html">Children's textiles</a></li>
                            <li><a href="catalog.html">Baby textiles</a></li>
                            <li><a href="catalog.html">Mattress</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>For Business</h5>
                          <ul>
                            <li><a href="catalog.html">School</a></li>
                            <li><a href="catalog.html">Office</a></li>
                            <li><a href="catalog.html">Retail</a></li>
                            <li><a href="catalog.html">Hospitality</a></li>
                          </ul>
                          <h5>Workshop</h5>
                          <ul>
                            <li><a href="catalog.html">Tools</a></li>
                            <li><a href="catalog.html">Brushes</a></li>
                            <li><a href="catalog.html">Paints</a></li>
                            <li><a href="catalog.html">Wallpaper</a> </li>
                            <li><a href="catalog.html">Equipment</a> </li>
                            <li><a href="catalog.html">Glue</a> </li>
                            <li><a href="catalog.html">Nails</a> </li>
                            <li><a href="catalog.html">Panel</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="new_item">
                            <div class="clearfix item_title">
                              <h5>New items and sales</h5>
                              <div class="item_nav">
                                <ul>
                                  <li class="active"><a href="catalog.html"></a></li>
                                  <li><a href="catalog.html"></a></li>
                                  <li><a href="catalog.html"></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="item_thumb"></div>
                            <div class="item_desc">
                              <div class="pull-left">
                                <h5>Mugs with yellow stripes</h5>
                                <p>Kitchen utensils</p>
                              </div>
                              <div class="price">$15.50</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
  			    <?php    
            if(isset($catIdArr[$row['section_id']])) { 
            ?>
  			      <ul role="menu" class="dropdown-menu">
                <li>
  			 	      <?php
               // $counter_for_vertical_display = 0;
                // Category loop
                for($i=0; $i<count($catIdArr[$row['section_id']]); $i++) { 
                ?>
                    <h5><?php echo $catNameArr[$row['section_id']][$i]; ?></h5>
                    <ul>
  					        <?php
                    if(isset($subCatNameArr[$row['section_id']][$catIdArr[$row['section_id']][$i]]))
  			       		  {
                      //echo count($subCatNameArr[$row['section_id']][$catIdArr[$row['section_id']][$i]]);
                      // Sub Category Loop
  				            for($j=0; $j<count($subCatNameArr[$row['section_id']][$catIdArr[$row['section_id']][$i]]); $j++){ 
  				          ?>
                      <li>
                        <?php
                        if(strtoupper($catNameArr[$row['section_id']][$i]) == 'WHOLESALE')
                        {
                          $wholesale_flag = 1;
                        } else {
                          $wholesale_flag = 0;
                        }
                        ?>
                        <a href="<?php echo base_url()?>catalog/getProducts/<?php 
                          echo $wholesale_flag; ?>/<?php
                          echo $row['section_id']; ?>/<?php 
                          echo $catIdArr[$row['section_id']][$i] ;?>/<?php
                          echo $subCatIdArr[$row['section_id']][$catIdArr[$row['section_id']][$i]][$j]; ?>">
                          <!-- Print sub category name -->
                          <?php 
                          echo $subCatNameArr[$row['section_id']][$catIdArr[$row['section_id']][$i]][$j]; ?>
                        </a>                        
                      </li>
  				          <?php 
                    } 
                  }
                    ?>                   
                    </ul>
  				  <?php }  ?>
                </li>
              </ul>
  			    <?php 
            } 
            ?>
            </li>
		  <?php } ?>
		      </ul>