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
					Feedback Details
					<small>Add, delete, and Modify customizations</small>
				</h3>
				
				
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row-fluid">
			<div class="span12">	
			<p style="text-align:right"><!--<button type="button" id="add_new" class="btn blue">Add Product Details</button>--></p>			
				<div class="portlet box light-grey">					
						<div class="portlet-title" style="height: 36px;">
						
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_0" data-toggle="tab">
									 Seller Feedback
								</a>
							</li>
							
						</ul>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> 
							<a href="javascript:;" class="reload"></a>
							<a href="javascript:;" class="remove"></a>
						</div>
					</div>
					<div class="portlet-body" id="tab_0">
						<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr> 
									<th class="hidden-phone">Srno</th>									
									<th class="hidden-phone">Greenhadle In One Word</th>
									<th class="hidden-phone">Date</th>
									<th class="hidden-phone">Rate</th>									
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
									 
									
									<td class="hidden-phone">
									
									<a href="<?php echo base_url()?>cms_seller/Seller_feedback/view_feedback/<?php echo $row['prod_id']?>/view" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
									<!--<a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url()?>cms_seller/productList/deleteProducts/<?php echo $row['prod_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>-->
									
									</td>
								</tr>
								<?php 
								}
								 }
								else
								{
								?>
									 <tr class="odd gradeX"> 
										<td colspan="5">No records found</td> 
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

				document.location="<?php echo base_url()?>cms_seller/productList/add_products";
			});

			$(".btn_delete").click(function(){

				var id=$(this).attr("id");
				 
				$.post("<?php echo base_url()?>cms_seller/customize/deleteCustomization", {

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
