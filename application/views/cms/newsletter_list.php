
<!-- BEGIN PAGE -->  
      <div class="page-content"> 
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12"> 
                  <h3 class="page-title">
                     Send Offer
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
                        <h4><i class="icon-reorder"></i>Offers</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a> 
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo base_url()?>cms/subcategories/save_subcategories" class="form-horizontal" method="post" enctype="multipart/form-data" />
							
						  <div class="control-group">
                              <label class="control-label">Email IDs</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="news_id" id="news_id" <?php if($type=='view'){?>disabled<?php }?>>
										<option value="">Select</option>
										<?php foreach($sec_data as $row){ ?>
										<option value="<?php echo $row['Sr.No']; ?>"><?php echo $row['email_list']; ?></option>
										<?php }?>
									</select>
								  
                              </div>
                           </div>
				
						  
						   
						 
						  
										 <div class="control-group">
												  <label class="control-label">offer Description</label>
												  <div class="controls">
													 <textarea  name="offer_description" id="offer_description" <?php if($type=='view'){?>disabled<?php }?>  class="span12 ckeditor  m-wrap" cols="30" rows="10"></textarea> 
													 
												  </div>
											</div>
                          
                           
						 
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
				  
                  <!-- END SAMPLE FORM PORTLET-->
               </div>
            </div>
			
			</div>
            </div>
			</div>