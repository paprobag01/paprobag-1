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
}
?>