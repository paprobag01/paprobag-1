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
 
</div>