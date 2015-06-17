<?php 
extract($page_data);
//print($first_name);exit;
?>
<!-- BEGIN PAGE -->  
      <div class="page-content"> 
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12"> 
                  <h3 class="page-title">
                      Slider                     
                  </h3> 
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Add slider</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a> 
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo base_url()?>cms/slider/save_slider" class="form-horizontal" method="post" enctype="multipart/form-data" />
						<input type="hidden" name="slider_id" value="<?php echo $slider_id;?>">
                         
						   <div class="control-group">
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($slider_image!=""){?>
										<img src="<?php echo base_url().$slider_image;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $slider_image; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> 
									   <p> image size should be 1600*550
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						   <!-- <div class="control-group">
                              <label class="control-label">Date</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="paper_date" id="paper_date" class="span4  m-wrap" value="<?php 
								 if($paper_date!='')
								 {
									echo date("d/m/Y",strtotime($paper_date)); 
								}?>" /> 
                              </div>
                           </div>	 -->
						    <div class="control-group">
                              <label class="control-label">Name</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="slider_name" id="slider_name" class="span4  m-wrap" value="<?php echo $slider_name;?>" /> 
                              </div>
                           </div>
                          
						   <div class="control-group">
                              <label class="control-label">status</label>
                              <div class="controls">
                                 <select name="slider_status" <?php if($type=='view'){?>disabled<?php }?> class="span3 m-wrap">
									<option value="" selected>Select
									<option <?php if($slider_status=='Active'){?>selected<?php }?> value="Active">Active
									<option value="In-Active" <?php if($slider_status=='In-Active'){?>selected<?php }?>>In Active
                                 </select> 
                              </div>
                           </div>
						    <div class="control-group">
													<label class="control-label">Slide On Home</label>
													    <div class="controls">
															<select name="slide_on_home" id="slide_on_home" <?php if($type=='view'){?>disabled<?php }?>>
																<option value="1">No</option>
																<option value="0">Yes</option>
															</select>
													    </div>
							</div>
                           <div class="form-actions">
                              <?php if($type!='view'){?><button type="submit" class="btn blue">Save</button><?php }?>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <!-- END SAMPLE FORM PORTLET-->
               </div>
            </div>
			<script type="text/javascript">
			 $(document).ready(function(){
				$(".cancel").click(function()
					{

					document.location="<?php echo base_url()?>cms/slider/slider_view";
				});             

				
		  });	
		  </script>	
			</div>
            </div>
			</div>
