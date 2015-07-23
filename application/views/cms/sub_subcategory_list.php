<!-- BEGIN PAGE -->

<div class="page-content">
	
	<!-- BEGIN PAGE CONTAINER-->			
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN STYLE CUSTOMIZER--> 
				<h3 class="page-title">
					Filter Details
					<small>Add, Delete, and Modify filters</small>
				</h3>
				
				
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row-fluid">
			<div class="span12">	
			<p style="text-align:right"><button type="button" id="add_new_filter" class="btn blue">Add Filter Details</button></p>	
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
									<!-- <th class="hidden-phone">Image</th> -->
									<th class="hidden-phone">Section Name</th> 
									<th class="hidden-phone">Category Name</th>
									<th class="hidden-phone">Subcategory Name</th> 
									<th class="hidden-phone">Sub_Subcategory Name</th>
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
									<?php
										$sql1=$this->db->query("select * from sections where section_id=".$row['section_id']."");
										$res1=$sql1->row_array();
										extract($res1);							
										
									?>
									
									<td class="hidden-phone"><?php echo $section_name;?></td>
									<?php
										$sql = $this->db->query("select * from category where section_id = ".$row['section_id']." and cat_id = ".$row['cat_id']."");
										$cat_name = $sql->result_array();										
									?>
									<td class="hidden-phone"><?php foreach($cat_name as $row1){echo $row1['cat_name'];}?></td>
									<?php
										$sub_cat=$this->db->query("select * from subcategory where section_id=".$row['section_id']."  and cat_id = ".$row['cat_id']." and sub_cat_id = ".$row['sub_cat_id']."");
										$res2=$sub_cat->result_array();										
									?>
									<td class="hidden-phone"><?php foreach($res2 as $row2){echo $row2['sub_cat_name'];}?></td>									
									<td class="hidden-phone"><?php echo $sub_subcat_name; ?></td>
									<td class="hidden-phone">
									
									<a href="<?php echo base_url()?>cms/Filters/viewfilters/<?php echo $row['sub_subcat_id']?>/view" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url()?>cms/Filters/viewfilters/<?php echo $row['sub_subcat_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url()?>cms/Filters/deleteFilter/<?php echo $row['sub_subcat_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>
									
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

			$("#add_new_filter").click(function(){

				document.location="<?php echo base_url()?>cms/Sub_Subcategories/viewCategory";
			});
			
			

			$(".btn_delete").click(function(){

				var id=$(this).attr("id");
				 
				$.post("<?php echo base_url()?>cms/Sub_Subcategories/deleteFilter", {

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
