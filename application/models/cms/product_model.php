<?php 
class Product_model extends CI_Model
{
	
function Save_Products()
{
	$prod_id=$this->input->post('prod_id');
	$link="";
	$link1="";
	$link2="";
	$link3="";
	$link4="";
	
	if($prod_id!="")
	{
		
		
		//$index = $this->session->userdata('indexgbr');
		$gift_card=$this->input->post('prod_gift_card');
			
// 		echo $gift_card; die;
			
		if($gift_card==1)
		{
			$seed = str_split('abcdefghijklmnopqrstuvwxyz'
					.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
					.'0123456789!@#$%^&*()'); // and any other characters
			shuffle($seed); // probably optional since array_is randomized; this may be redundant
			$rand = '';
			foreach (array_rand($seed, 14) as $k)
			{
				$rand .= $seed[$k];
			}
			$rand=strtoupper($rand);
		}
		else {
			$rand=0;
		}
		
		if($this->input->post('img_url'))
		{
		$img_url=$this->input->post('img_url');		
		
		if($_FILES['fileinput']['name']!=" " && $_FILES['fileinput']['name']!=null && $_FILES['fileinput']['name']!=""){
			
			if($img_url!=" " && $img_url!="" && $img_url!=null){
				
				if(file_exists($img_url)){
					unlink($img_url);
				}
			}
		
			$arr=$_FILES['fileinput']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			
			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				////return;
			}    
			else{

				$link=$config['upload_path'].'/'.$_FILES['fileinput']['name'];
				
			}
		}
		else {
					
				$link=$img_url;
		}

		$link;
		}
		if($this->input->post('img_url1'))
		{
		$img_url1=$this->input->post('img_url1');		
		
		if($_FILES['fileinput1']['name']!=" " && $_FILES['fileinput1']['name']!=null && $_FILES['fileinput1']['name']!=""){
			
			if($img_url1!=" " && $img_url1!="" && $img_url1!=null){
				
				if(file_exists($img_url1)){
					unlink($img_url1);
				}
			}
		
			$arr=$_FILES['fileinput1']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput1']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput1")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				////return;
			}    
			else{

				$link1=$config['upload_path'].'/'.$_FILES['fileinput1']['name'];
				
			}
		}
		else {
					
				$link1=$img_url1;
		}

		$link1;
		}
		
		if($this->input->post('img_url2'))
		{
		$img_url2=$this->input->post('img_url2');		
		
		if($_FILES['fileinput2']['name']!=" " && $_FILES['fileinput2']['name']!=null && $_FILES['fileinput2']['name']!=""){
			
			if($img_url2!=" " && $img_url2!="" && $img_url2!=null){
				
				if(file_exists($img_url2)){
					unlink($img_url2);
				}
			}
		
			$arr=$_FILES['fileinput2']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput2']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput2")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				//return;
			}    
			else{

				$link2=$config['upload_path'].'/'.$_FILES['fileinput2']['name'];
				
			}
		}
		else {
					
				$link2=$img_url2;
		}

		$link2;
		}
		if($this->input->post('img_url3'))
		{
		$img_url3=$this->input->post('img_url3');		
		
		if($_FILES['fileinput3']['name']!=" " && $_FILES['fileinput3']['name']!=null && $_FILES['fileinput3']['name']!=""){
			
			if($img_url3!=" " && $img_url3!="" && $img_url3!=null){
				
				if(file_exists($img_url3)){
					unlink($img_url3);
				}
			}
		
			$arr=$_FILES['fileinput3']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput3']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput3")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				//return;
			}    
			else{

				$link3=$config['upload_path'].'/'.$_FILES['fileinput3']['name'];
				
			}
		}
		else {
					
				$link3=$img_url3;
		}

		$link3;
		}
		if($this->input->post('img_url4'))
		{
		$img_url4=$this->input->post('img_url4');		
		
		if($_FILES['fileinput4']['name']!=" " && $_FILES['fileinput4']['name']!=null && $_FILES['fileinput4']['name']!=""){
			
			if($img_url4!=" " && $img_url4!="" && $img_url4!=null){
				
				if(file_exists($img_url4)){
					unlink($img_url4);
				}
			}
		
			$arr=$_FILES['fileinput4']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput4']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput4")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				//return;
			}    
			else{

				$link4=$config['upload_path'].'/'.$_FILES['fileinput4']['name'];
				
			}
		}
		else {
					
				$link4=$img_url4;
		}

		$link4;
		}
		
	
		
		$this->db->where('prod_id', $prod_id);//prod_price prod_sell_price prod_qty prod_stock require_shipping prod_shipping_price fileinput1 fileinput2 fileinput3 fileinput4 prod_meta_title prod_discount
	$data=array(  
	'prod_name'=>$this->input->post('prod_name'),
	'prod_price'=>$this->input->post('prod_price'),
	'prod_meta_title'=>$this->input->post('prod_meta_title'),
	'prod_meta_keyword'=>$this->input->post('prod_meta_keyword'),
	'prod_meta_description'=>$this->input->post('prod_meta_description'),
	'prod_description'=>$this->input->post('prod_description'),
	'cat_id'=>$this->input->post('prod_sub_categories'),
	'section_id'=>$this->input->post('sec_id'),
	'sub_cat_id'=>$this->input->post('sub_categories'),
	'prod_short_description'=>$this->input->post('prod_short_description'),//prod_customizable
	//'prod_sub_categories'=>$this->input->post('prod_sub_categories'),
	//filter_val'=>$this->input->post('filter_val'),
	'prod_sku'=>$this->input->post('prod_sku'),
	'taggings'=>$this->input->post('taggings'),
	'complete_the_look'=>$this->input->post('complete_the_look'),
	'prod_gift_card'=>$gift_card,
	//'filter_id'=>$this->input->post('filter_id'),
	'prod_status'=>$this->input->post('prod_status'),
	'prod_on_home'=>$this->input->post('prod_on_home'),
	'prod_customizable'=>$this->input->post('prod_customizable'),
	'url_for_product_details'=>$this->input->post('url_for_product_details'),
	'created_on'=>$this->input->post('created_on'),
	'prod_discount'=>$this->input->post('prod_discount'),
	'prod_sell_price'=>$this->input->post('prod_sell_price'),
	'prod_qty'=>$this->input->post('prod_qty'),
	'prod_stock'=>$this->input->post('prod_stock'),
	'sold_by'=>$this->input->post('sold_by'),
	'prod_gift_code'=>$rand,
	'prod_image'=>$link,
	'prod_image1'=>$link1,
	'prod_image2'=>$link2,
	'prod_image3'=>$link3,
	'prod_image4'=>$link4,
	'require_shipping'=>$this->input->post('require_shipping'),
	'prod_shipping_price'=>$this->input->post('prod_shipping_price')
	);
	$this->db->trans_start();
	$this->db->update('products', $data); 
	$this->db->trans_complete();
	
		if ($this->db->trans_status() === FALSE)
		{
			
			return -2; 
		}
		else
		{
		   
			return 2;
		}
	}
	else{
		
		$img_url=$this->input->post('img_url');		
		
		if($_FILES['fileinput']['name']!=" " && $_FILES['fileinput']['name']!=null && $_FILES['fileinput']['name']!=""){
			
			if($img_url!=" " && $img_url!="" && $img_url!=null){
				
				if(file_exists($img_url)){
					unlink($img_url);
				}
			}
		
			$arr=$_FILES['fileinput']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				//return;
			}    
			else{

				$link=$config['upload_path'].'/'.$_FILES['fileinput']['name'];
				
			}
		}
		else {
					
				$link=$img_url;
		}

		$link;
		
		$img_url1=$this->input->post('img_url1');		
		
		if($_FILES['fileinput1']['name']!=" " && $_FILES['fileinput1']['name']!=null && $_FILES['fileinput1']['name']!=""){
			
			if($img_url1!=" " && $img_url1!="" && $img_url1!=null){
				
				if(file_exists($img_url1)){
					unlink($img_url1);
				}
			}
		
			$arr=$_FILES['fileinput1']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput1']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput1")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				//return;
			}    
			else{

				$link1=$config['upload_path'].'/'.$_FILES['fileinput1']['name'];
				
			}
		}
		else {
					
				$link1=$img_url1;
		}

		$link1;
		
		
		
		$img_url2=$this->input->post('img_url2');		
		
		if($_FILES['fileinput2']['name']!=" " && $_FILES['fileinput2']['name']!=null && $_FILES['fileinput2']['name']!=""){
			
			if($img_url2!=" " && $img_url2!="" && $img_url2!=null){
				
				if(file_exists($img_url2)){
					unlink($img_url2);
				}
			}
		
			$arr=$_FILES['fileinput2']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput2']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput2")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				//return;
			}    
			else{

				$link2=$config['upload_path'].'/'.$_FILES['fileinput2']['name'];
				
			}
		}
		else {
					
				$link2=$img_url2;
		}

		$link2;
		
		
		$img_url3=$this->input->post('img_url3');		
		
		if($_FILES['fileinput3']['name']!=" " && $_FILES['fileinput3']['name']!=null && $_FILES['fileinput3']['name']!=""){
			
			if($img_url3!=" " && $img_url3!="" && $img_url3!=null){
				
				if(file_exists($img_url3)){
					unlink($img_url3);
				}
			}
		
			$arr=$_FILES['fileinput3']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput3']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput3")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				//return;
			}    
			else{

				$link3=$config['upload_path'].'/'.$_FILES['fileinput3']['name'];
				
			}
		}
		else {
					
				$link3=$img_url3;
		}

		$link3;
		
		$img_url4=$this->input->post('img_url4');		
		
		if($_FILES['fileinput4']['name']!=" " && $_FILES['fileinput4']['name']!=null && $_FILES['fileinput4']['name']!=""){
			
			if($img_url4!=" " && $img_url4!="" && $img_url4!=null){
				
				if(file_exists($img_url4)){
					unlink($img_url4);
				}
			}
		
			$arr=$_FILES['fileinput4']['name'];
			$path_parts = pathinfo($arr);
			$ext=$path_parts['extension'];			 

			$_FILES['fileinput4']['name']=md5(rand()).'.'.$ext;
			$config['upload_path'] ='upload/products';
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';

			//$index = $this->session->userdata('indexgbr');

			$this->load->library('upload', $config);
							
		if ( ! $this->upload->do_upload("fileinput4")){

				echo("{errors: {id:'name', msg:'" . $this->upload->display_errors(). "'}}");
			
				//return;
			}    
			else{

				$link4=$config['upload_path'].'/'.$_FILES['fileinput4']['name'];
				
			}
		}
		else {
					
				$link4=$img_url4;
		}

		$link4;
		
		$gift_card=$this->input->post('prod_gift_card');
		if($gift_card==1)
		{
			$seed = str_split('abcdefghijklmnopqrstuvwxyz'
					.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
					.'0123456789!@#$%^&*()'); // and any other characters
			shuffle($seed); // probably optional since array_is randomized; this may be redundant
			$rand = '';
			foreach (array_rand($seed, 14) as $k)
			{
				$rand .= $seed[$k];
			}
			$rand=strtoupper($rand);
		}
		else {
			$rand=0;
		}
		
	$data=array(
	'prod_name'=>$this->input->post('prod_name'),
	'prod_price'=>$this->input->post('prod_price'),
	'prod_meta_title'=>$this->input->post('prod_meta_title'),
	'prod_meta_keyword'=>$this->input->post('prod_meta_keyword'),
	'prod_meta_description'=>$this->input->post('prod_meta_description'),
	'prod_description'=>$this->input->post('prod_description'),
	//'cat_id'=>$this->input->post('cat_id'),
	'prod_short_description'=>$this->input->post('prod_short_description'),
	'prod_sub_categories'=>$this->input->post('prod_sub_categories'),
	'cat_id'=>$this->input->post('prod_sub_categories'),
	'section_id'=>$this->input->post('sec_id'),
	'sub_cat_id'=>$this->input->post('sub_categories'),
	//'filter_val'=>$this->input->post('filter_val'),
	'prod_sku'=>$this->input->post('prod_sku'),
	'complete_the_look'=>$this->input->post('complete_the_look'),
	'taggings'=>$this->input->post('taggings'),
	//'filter_id'=>$this->input->post('filter_id'),
	'prod_status'=>$this->input->post('prod_status'),
	'prod_on_home'=>$this->input->post('prod_on_home'), 
	'prod_customizable'=>$this->input->post('prod_customizable'),
	'url_for_product_details'=>$this->input->post('url_for_product_details'),
	'created_on'=>$this->input->post('created_on'),
	'prod_discount'=>$this->input->post('prod_discount'),
	'prod_sell_price'=>$this->input->post('prod_sell_price'),
	'prod_qty'=>$this->input->post('prod_qty'),
	'prod_stock'=>$this->input->post('prod_stock'),
	'prod_gift_card'=>$gift_card,
	'prod_gift_code'=>$rand,
	'prod_image'=>$link,
	'prod_image1'=>$link1,
	'prod_image2'=>$link2,
	'prod_image3'=>$link3,
	'prod_image4'=>$link4,
	'require_shipping'=>$this->input->post('require_shipping'),
	'prod_shipping_price'=>$this->input->post('prod_shipping_price')
	);
	
	
	$this->db->trans_start();
		
		$this->db->insert('products',$data);
		
		$this->db->trans_complete();
		
	if ($this->db->trans_status() === FALSE)
		{
			
			return -1; 
		}
		else
		{
		   
			return 1;
		}
	}
}
function getProducts($id)
{
	$sql=$this->db->query("select * from products where prod_id=$id");
		
		
		//$this->db->trans_complete();
		return $sql->result_array();
}
	
}
?>
