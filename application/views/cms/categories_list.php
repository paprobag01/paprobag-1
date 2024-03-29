<!-- BEGIN PAGE -->

<div class="page-content">
	
	<!-- BEGIN PAGE CONTAINER-->			
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN STYLE CUSTOMIZER--> 
				<h3 class="page-title">
					Category Details
					<small>Add, Delete, and Modify Categories</small>
				</h3>
				
				
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row-fluid">
			<div class="span12">	
			<p style="text-align:right"><button type="button" id="add_new" class="btn blue">Add Category Details</button></p>			
				<div class="portlet box light-grey">
					<div class="portlet-title">
						<h4><i class="icon-reorder"></i>Home Page Details View</h4>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> 
							<a href="javascript:;" class="reload"></a>
							<a href="javascript:;" class="remove"></a>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr> 
									<th class="hidden-phone">Srno</th>
									
									<th class="hidden-phone">Category Name</th> 
									<th class="hidden-phone">Section</th> 
									 <th class="hidden-phone">Type</th> 
									<th class="hidden-phone">Groups/Subcategories</th> 
									<th class="hidden-phone">Options</th>
								</tr>
							</thead>
							<tbody>
								 <?php $cnt=0; if(count($page_data)>0){
									foreach($page_data as $row){
										
										$sql1=$this->db->query("select * from sections where section_id=".$row['section_id']."");
										$res1=$sql1->row_array();
										extract($res1);

										$sql2=$this->db->query("select * from subcategory where section_id=".$row['section_id']."  and cat_id = ".$row['cat_id']."");
										$res2=$sql2->result_array();
										//extract($res2);
									?>
								<tr id="" class="odd gradeX"> 
									<td><?php echo $cnt;?></td>
									<td class="hidden-phone"><?php echo $row['cat_name']?></td>
									<td class="hidden-phone"><?php echo $section_name ?></td>
									<td class="hidden-phone"><?php  if($row['cat_type']==1){ echo 'Parent Category'; } else if($row['cat_type']==2){echo 'Child Category';} else if($row['cat_type']==3){ echo 'Sub Category';} ?></td>
									<td class="hidden-phone"><?php if($res2>0){
									 foreach($res2 as $row1)
									 {

									 		echo $row1['sub_cat_name'].' '.',';
									 	

									}
									}
									else
									{ 
										echo "Not Created";
									} 
									?></td>
									<td class="hidden-phone">
									
									<a href="<?php echo base_url()?>cms/categories/viewCategory/<?php echo $row['cat_id']?>/view" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url()?>cms/categories/viewCategory/<?php echo $row['cat_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url()?>cms/categories/deleteCategory/<?php echo $row['cat_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>
									
									</td>
								</tr>
								<?php 
								$cnt++;
								}
								 }
								else
								{
								?>
									 <tr class="odd gradeX"> 
										<td colspan="6">No records found</td> 
									</tr> 
								</tr>
								<?php 
								
								 }
								?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>
		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	<div id="delete_domestic" class="modal fade hide">
		<div class="modal-header">
			<button data-dismiss="modal" class="close" type="button"></button>
			<h3><label class="label-warning">Delete this record!</label></h3>
		</div>
		<div class="modal-body">
			<p>Do you really want's to delete this record.If yes,then click yes to continue.</p> 
			<p style="text-align:right"><button type="submit" class="btn_delete btn red">Delete</button>
			  <button type="button" class="cancel_del btn">Cancel</button>
			</p>
		</div>
	</div>
	<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".delete_rec").click(function(){
				$id=$(this).attr("id");
				$(".btn_delete").attr("id",$id);
				$("#delete_domestic").modal("show"); 
			});

			$("#add_new").click(function(){

				document.location="<?php echo base_url()?>cms/categories/viewCategory";
			});

			$(".btn_delete").click(function(){

				var id=$(this).attr("id");
				 
				$.post("<?php echo base_url()?>cms/categories/deleteCustomization", {

					id: id
							
				},function(response){
					
					$("#delete_domestic").modal("hide");
					
					if(response>0){
						
						$("#"+id).fadeOut();
							
					}
				});
			
			});

			$(".cancel_del").click(function(){
				$("#delete_domestic").modal("hide");
			});
		});
	</script>
	</div>
</div>
</div>
