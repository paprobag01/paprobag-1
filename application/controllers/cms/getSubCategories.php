<?php 
class GetSubCategories extends CI_Controller
{
	function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){
				   redirect("cms/login");
				}
				
               $this->load->model('cms/getSubCatAjax');              
			}
	function index()
	{
		if (isset($_POST) && isset($_POST['categories'])) {
            $category_id = $_POST['categories'];
			
            $arrSubcat = $this->getSubCatAjax->get_subcategories($category_id);
           $res=''; 
		   $cnt=0;
           foreach($arrSubcat as $row)
		   {
			   
			   $res=$res.'<span class="control-label">'.$row['sub_cat_name'].'<input type="checkbox" name="sub_cat_ids[]" id="subcategory'.$cnt.'" value="'.$row['sub_cat_id'].'"/></span>';
			   $cnt++;
		   }
		   echo $res;
		}
        
	} 
	function dropdown()
	{
		if (isset($_POST) && isset($_POST['categories'])) {
            $category_id = $_POST['categories'];

            $arrSubcat = $this->getSubCatAjax->get_subcategories($category_id);
			//$arrFilter = $this->getSubCatAjax->get_filters($category_id);
           $res='<label class="control-label">Category</label><div class="controls"><select name="prod_sub_categories" onchange="getFilterVals()" id="prod_sub_categories">';
		 //  $res1='<label class="control-label">Filters</label><div class="controls"><select onclick="getFilterVals()" name="filter_id" id="filter_id">';
		  
           foreach($arrSubcat as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['cat_id'].'">'.$row['cat_name'].'</option>';
			  
			  
		   }
		   
		   $finres=$res.'</select></div>';
		   echo $finres;
		}
	}
	
	function material_dropdown()
	{
		//code for value in text box
		if (isset($_POST) && isset($_POST['filters'])) 
		{
           $category_id = $_POST['filters'];
		   $this->session->set_userdata('filter_id', $category_id);
            $arrSubcat = $this->getSubCatAjax->getmaterial($category_id);
			
				
					?>
						<input name="filter_id" type="text" value="<?php echo $category_id?>">
			<?php		
				
		   //return $category_id;
		}
		
		
	}
	
	function GSM_dropdown()
	{
		if(isset($_POST) && isset($_POST['filters'])) 
		{
          $category_id = $_POST['filters'];

         $arrSubcat = $this->getSubCatAjax->get_GSM($category_id);
         
				
				$res='<label class="control-label">GSM Details</label><div class="controls" id="GSM_id"><select name="GSM_id"  id="GSM_id">';
		   foreach($arrSubcat as $row)
		   {
			   $GSM_array=explode(',', $row['GSM_name']);			   
			   foreach ($GSM_array as $row1) {
			   	$res=$res.'<option value="'.$row['material_id'].'">'.$row1.'</option>';			   	  
			   }	
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;		    
		  
		   echo "<br>";
		  
		   $res='<label class="control-label">Handle Details</label><div class="controls"><select name="handle_id"  id="handle_id">';
		   foreach($arrSubcat as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['material_id'].'">'.$row['handle'].'</option>';
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		   
		   echo "<br>";
		   $res='<label class="control-label">Print Details</label><div class="controls"><select name="print"  id="print">';
		   foreach($arrSubcat as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['material_id'].'">'.$row['print'].'</option>';
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		   
		    echo "<br>";
			
		   $res='<label class="control-label">Print Color Details</label><div class="controls"><select name="printclr"  id="printclr">';
		   foreach($arrSubcat as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['material_id'].'">'.$row['print_color'].'</option>';
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		   echo "<br>";		   
		   
		   $res='<label class="control-label">Lamination Details</label><div class="controls"><select name="lamination"  id="lamination">';
		   foreach($arrSubcat as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['material_id'].'">'.$row['lamination'].'</option>';
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		   
		   echo "<br>";
		   $res='<label class="control-label">Special Work Details</label><div class="controls"><select name="specialwrk"  id="specialwrk">';
		   foreach($arrSubcat as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['material_id'].'">'.$row['special_wrk'].'</option>';
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		}
	}

	function sizedropdown()
	{
		$style_id = $_POST['style_id'];
		$arrFilterVal = $this->getSubCatAjax->get_size_details($style_id);

          $res='<label class="control-label">Size</label><div class="controls" id ="size_div"><select name="size_id"  id="size_id">';
		  
           foreach($arrFilterVal as $row)
		   {
		   	
			   $style_array=explode(',', $row['size']);			   
			   foreach ($style_array as $row1) {
			   	$res=$res.'<option value="'.$row['style_id'].'">'.$row1.'</option>';			   	  
			   }		   
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo json_encode($finres);
		
	}
	
	function filterdropdown()
	{
		//echo "Welcome";
		if (isset($_POST) && isset($_POST['filters']) && isset($_POST['filters1'])) {
            // $filters = $_POST['filters'];
			// $filters1 = $_POST['filters1'];
			
			$filters = $_POST['filters'];
			$filters1 = $_POST['filters1'];
			
            
			$arrFilterVal = $this->getSubCatAjax->get_filter_vals($filters,$filters1);
          $res='<label class="control-label">Subcategory</label><div class="controls"><select name="sub_categories"  id="sub_categories">';
		   
		  
           foreach($arrFilterVal as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['sub_cat_id'].'">'.$row['sub_cat_name'].'</option>';
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		}
	}

	function subtype_subcategory()
	{
		//echo "Welcome";

		if (isset($_POST) && isset($_POST['filters']) && isset($_POST['filters1']) && isset($_POST['filters2'])) {
            $filters = $_POST['filters'];
			$filters1 = $_POST['filters1'];
			$filters2 = $_POST['filters2'];
			
			$arrFilterVal = $this->getSubCatAjax->get_subcattype_data($filters,$filters1,$filters2);

          $res='<label class="control-label">Select Subcategory Type</label><div class="controls"><select name="sub_subcat_id"   id="sub_subcat_id"><option value="">--Select--</option>';
		   
		  
           foreach($arrFilterVal as $row)
		   {
			   if($row['sub_subcat_id']!="")
			   {
			   		$res=$res.'<option value="'.$row['sub_subcat_id'].'">'.$row['sub_subcat_name'].'</option>';
			   }		   
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		}
	}
	
	function material_name()
	{
		//echo "Welcome";
		if (isset($_POST) && isset($_POST['filters']) && isset($_POST['filters1']) && isset($_POST['filters2'])) {
            $filters = $_POST['filters'];
			$filters1 = $_POST['filters1'];
			$filters2 = $_POST['filters2'];
			
			$arrFilterVal = $this->getSubCatAjax->get_materialdata($filters,$filters1,$filters2);
			$style_details = $this->getSubCatAjax->get_styledetails($filters,$filters1,$filters2);

          $res='<label class="control-label">Select Material</label><div class="controls"><select name="material_value" required data-validation-required-message="Please Fill Data" onchange="getmaterial()" id="material_value"><option value="">--Select--</option>';
		 
           foreach($arrFilterVal as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['material_id'].'">'.$row['material_name'].'</option>';
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		    echo "<br>";

		   $res='<label class="control-label">Style Details</label><div class="controls"><select name="style_id" onclick="getsizedata()"  id="style_id">';
		   foreach($style_details as $row)
		   {
			   
			   $res=$res.'<option value="'.$row['style_id'].'">'.$row['style'].'</option>';
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		   
		}
	}

	function style_name()
	{
		//echo "Welcome";
		if (isset($_POST) && isset($_POST['filters']) && isset($_POST['filters1']) && isset($_POST['filters2'])) {
            $filters = $_POST['filters'];
			$filters1 = $_POST['filters1'];
			$filters2 = $_POST['filters2'];
			
			$arrFilterVal = $this->getSubCatAjax->get_styledetails($filters,$filters1,$filters2);
          $res='<label class="control-label">Select Style</label><div class="controls"><select name="material_value" required data-validation-required-message="Please Fill Data" onchange="getmaterial()" id="material_value"><option value="">--Select--</option>';
		   
		  
           foreach($arrFilterVal as $row)
		   {
			   if($row['style_id']!="")
			   {
			   		$res=$res.'<option value="'.$row['style_id'].'">'.$row['style'].'</option>';
			   }		   
			  
			  
		   }
		 
		   $finres=$res.'</select></div>';
		   echo $finres;
		}
	}
	
	
}
?>

