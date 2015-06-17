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
                     Add users                     
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
                        <h4><i class="icon-reorder"></i>Add users</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a> 
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo base_url()?>cms/users/save_users" class="form-horizontal" method="post" enctype="multipart/form-data" />
						<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                           <div class="control-group">
                              <label class="control-label">Firstname</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="first_name" class="span6 m-wrap" value="<?php echo $first_name;?>" /> 
                              </div>
                           </div>
						   <div class="control-group">
                              <label class="control-label">Lastname</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="last_name" class="span6 m-wrap" value="<?php echo $last_name;?>" /> 
                              </div>
                           </div>
						   <div class="control-group">
                              <label class="control-label">Username</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="username" class="span6 m-wrap" value="<?php echo $username;?>" /> 
                              </div>
                           </div> 
						   <div class="control-group">
                              <label class="control-label">Password</label>
                              <div class="controls">
                                 <input <?php if($user_id!="" || $user_id!=null){ 
									 ?> type="hidden" <?php  } else {?>type="password"<?php }?> name="password" class="span6 m-wrap" value="<?php echo $password;?>" /> 
									 <?php if($user_id!="" || $user_id!=null){ 
									 ?><input type="text" disabled value="Password Hidden" name=""><?php  }?>
                              </div>
                           </div>
						   
						   
						   <div class="control-group">
                              <label class="control-label">Usertype</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="user_type" class="span6 m-wrap" value="<?php echo $user_type;?>" /> 
                              </div>
                           </div> 
						   <div class="control-group">
                              <label class="control-label">Role</label>
                              <div class="controls">
                                  <select <?php if($type=='view'){?>disabled<?php }?> name="role_id">
									<option value="" selected>Select  
									<?php if(count($role_arr)>0){ 
										foreach($role_arr as $row){?>
										<option <?php if($role_id==$row['role_id']){?>selected<?php }?> value="<?php echo $row['role_id']?>"><?php echo $row['role']?> 
									<?php } } ?> 
                                  </select>
                              </div>
                           </div> 
						   <div class="control-group">
                              <label class="control-label">Profile Pic :</label>
                              <div class="controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($profile_pic!=""){?>
										<img src="<?php echo base_url().$profile_pic;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $profile_pic; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                 </div> 
                              </div>
                           </div> 
						   <div class="control-group">
                              <label class="control-label">Account status</label>
                              <div class="controls">
                                 <select name="account_status" <?php if($type=='view'){?>disabled<?php }?> class="span6 m-wrap">
									<option value="" selected>Select
									<option <?php if($account_status=='yes'){?>selected<?php }?> value="yes">Active
									<option value="no" <?php if($account_status=='no'){?>selected<?php }?>>In Active
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
				$(".cancel").click(function(){

					document.location="<?php echo base_url()?>users/users_view";
				});
			 });	
			</script>
			</div>
            </div>
			</div>
            