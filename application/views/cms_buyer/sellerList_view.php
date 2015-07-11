<!-- BEGIN PAGE -->
<?php 
extract($page_data);
?>
<div class="page-content">
	
	<!-- BEGIN PAGE CONTAINER-->			
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN STYLE CUSTOMIZER--> 
				<h3 class="page-title">
					Sellers Details
					<small>Add, delete, and Modify customizations</small>
				</h3>
				
				
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row-fluid">
			<div class="span12">	
			<p style="text-align:right"><button type="button" id="add_new" class="btn blue">Add Product Details</button></p>			
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
									<th class="hidden-phone">Sr No</th>
									<!-- <th class="hidden-phone">Image</th> -->
									<th class="hidden-phone">Organization Name</th>
									<th class="hidden-phone">Section</th>
									<th class="hidden-phone">Category</th> 
									<th class="hidden-phone">Subcategory</th> 
									<th class="hidden-phone">Product Name</th>
									<!-- <th class="hidden-phone">Section</th> -->
									<th class="hidden-phone">Price</th>
									<th class="hidden-phone">Short Description</th>
									<th class="hidden-phone">Image</th>
									<th class="hidden-phone">Options</th>
								</tr>
							</thead>
							<tbody>
								 <?php $cnt=0; if(count($page_data)>0){
									foreach($page_data as $row){
										$cnt++;
									?>
								<tr id="" class="odd gradeX"> 
									<td><?php echo $cnt;?></td>
									<td class="hidden-phone"><?php echo $row['prod_name']?></td>
									<td class="hidden-phone"><?php echo $row['prod_name']?></td>
									<td class="hidden-phone"><?php echo $row['prod_name']?></td>
									<td class="hidden-phone"><?php echo $row['prod_name']?></td>
									<td class="hidden-phone"><?php echo $row['prod_name']?></td>
								<td class="hidden-phone"><?php echo $row['prod_price']?></td> 
									
									 
									<td class="hidden-phone">
									<!-- <span  class="label label-success"  class="label label-important" > -->
										<?php echo $row['prod_description']?>
									<!-- </span> -->
									</td> 
									<td class="hidden-phone">
									<?php if($row['prod_image']!=""){?>
									<img src="<?php echo base_url().$row['prod_image']?>" style="height:50px;width:50px;"/>
									<?php } else {?>
									   <img src="<?php echo base_url()?>images/noimage.gif" style="width:50px; height:50px;" alt="" />
									   <?php }?>
									</td> 
									<td class="hidden-phone">
									
									<a href="<?php echo base_url()?>cms/productList/viewEditProducts/<?php echo $row['prod_id']?>/view" class="btn mini purple"><i class="icon-edit"></i> Enable</a>&nbsp;&nbsp;&nbsp;
									<!--<a href="<?php echo base_url()?>cms/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;-->
									<a href="<?php echo base_url()?>cms/productList/deleteProducts/<?php echo $row['prod_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Dissable</a>
									
									</td>
								</tr>
								<?php 
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

				document.location="<?php echo base_url()?>cms/productList/add_products";
			});

			$(".btn_delete").click(function(){

				var id=$(this).attr("id");
				 
				$.post("<?php echo base_url()?>cms/customize/deleteCustomization", {

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
