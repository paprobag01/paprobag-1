$(document).ready(function() {
	//load categories
	$('body').on('change', 'input[type=radio][name=section]', function() {		
		var section_id = this.value;
		var data = {
			'section_id': section_id
		};
		$.ajax({
            type: 'POST',
	        dataType: 'json',
	        ContentType: "application/json",
	        url: base_url+"/filters/get_categories",
	        data: data,
	        success: function(data) { 
	        	var options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Category</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	            for (var i = 0; i < data.length; i++) {
	            	if (i%3 == 0) {
	            		options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="category" value="'+data[i].cat_id+'"><label style="padding-left:10px">'+data[i].cat_name 
		                        +'</label></td>';
	            	} else {
		            	options += '<td style="border:none">'
		                        +'<input type="radio" name="category" value="'+data[i].cat_id+'"><label style="padding-left:10px">'+data[i].cat_name 
		                        +'</label></td>';
	            	}
	            }
	            $('div#category_list').html(options);
	        },
	    });
	});

	// load subcategories
	$('body').on('change', 'input[name=category]:radio', function() {
		var category_id = this.value;
		var section_id = $('input:radio[name=section]:checked').val();
		var data = {
			'category_id': category_id,
			'section_id': section_id
		};
		$.ajax({
            type: 'POST',
	        dataType: 'json',
	        ContentType: "application/json",
	        url: base_url+"/filters/get_sub_categories",
	        data: data,
	        success: function(data) { 
	        	var options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Subcategory</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	            for (var i = 0; i < data.length; i++) {
	            	if (i%3 == 0) {
	            		options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="sub_category" value="'+data[i].sub_cat_id+'"><label style="padding-left:10px">'+data[i].sub_cat_name 
		                        +'</label></td>';
	            	} else {
		            	options += '<td style="border:none">'
		                        +'<input type="radio" name="sub_category" value="'+data[i].sub_cat_id+'"><label style="padding-left:10px">'+data[i].sub_cat_name 
		                        +'</label></td>';
	            	}
	            };
	            $('div#sub_category_list').html(options);
	        },
	    });
	});

	// load materials
	$('body').on('change', 'input[name=sub_category]:radio', function() {
		var sub_category_id = this.value;
		var section_id = $('input:radio[name=section]:checked').val();
		var category_id = $('input:radio[name=category]:checked').val();
		var data = {
			'section_id': section_id,
			'category_id': category_id,
			'sub_category_id': sub_category_id
		};
		$.ajax({
            type: 'POST',
	        dataType: 'json',
	        ContentType: "application/json",
	        url: base_url+"/filters/get_materials",
	        data: data,
	        success: function(data) { 
	        	var options = '<table class="table table-condensed borderless">'
							    +''
							    +'<tr><th>Material</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	            for (var i = 0; i < data.length; i++) {
	            	if (i%3 == 0) {
	            		options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="material" value="'+data[i].material_id+'"><label style="padding-left:10px">'+data[i].material_name 
		                        +'</label></td>';
	            	} else {
		            	options += '<td style="border:none">'
		                        +'<input type="radio" name="material" value="'+data[i].material_id+'"><label style="padding-left:10px">'+data[i].material_name 
		                        +'</label></td>';
	            	}
	            };
	            $('div#material_list').html(options);
	        },
	    });
		
		$.ajax({
            type: 'POST',
	        dataType: 'json',
	        ContentType: "application/json",
	        url: base_url+"/filters/get_styles",
	        data: data,
	        success: function(data) { 
	        	var options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Style</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	            for (var i = 0; i < data.length; i++) {
	            	if (i%3 == 0) {
	            		options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="style" value="'+data[i].style_id+'"><label style="padding-left:10px">'+data[i].style 
		                        +'</label></td>';
	            	} else {
		            	options += '<td style="border:none">'
		                        +'<input type="radio" name="style" value="'+data[i].style_id+'"><label style="padding-left:10px">'+data[i].style 
		                        +'</label></td>';
	            	}
	            };
	            $('div#style_list').html(options);
	        },
	    });
	});

	// load material dependent filters
	$('body').on('change', 'input[name=material]:radio', function() {
		var material_id = this.value;
		var data = {
			'material_id': material_id
		};
		$.ajax({
            type: 'POST',
	        dataType: 'json',
	        ContentType: "application/json",
	        url: base_url+"/filters/get_material_dependent_filters",
	        data: data,
	        success: function(data) {
	        	console.log(JSON.stringify(data));
	        	// Set gsm options
	        	var gsm_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>GSM</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	        	var str = data[0].GSM_name.split(",");
	        	for (var i = 0; i < str.length; i++) {
	        	 	if (i%3 == 0) {
	            		gsm_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="gsm" value="'+str[i]+'"><label style="padding-left:10px">'+str[i] 
		                        +'</label></td>';
	            	} else {
		            	gsm_options += '<td style="border:none">'
		                        +'<input type="radio" name="gsm" value="'+str[i]+'"><label style="padding-left:10px">'+str[i] 
		                        +'</label></td>';
	            	}
	        	 }; 
	        	$('div#gsm_list').html(gsm_options);

	        	// Set handle options
	        	var handle_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Handle</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		var str1 = data[0].handle.split(",");

	        	for (var i = 0; i < str1.length; i++) {
	            	if (i%3 == 0) {
	            		handle_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="handle" value="'+str1[i]+'"><label style="padding-left:10px">'+str1[i] 
		                        +'</label></td>';
	            	} else {
		            	handle_options += '<td style="border:none">'
		                        +'<input type="radio" name="handle" value="'+str1[i]+'"><label style="padding-left:10px">'+str1[i] 
		                        +'</label></td>';
	            	}
	        	 }; 
	        	$('div#handle_list').html(handle_options);

	        	// Set print options
	       		var print_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Print</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		// var print_options = '<option>select print</option>';
	       		var str2 = data[0].print.split(",");
	        	
	        	for (var i = 0; i < str2.length; i++) {
	            	if (i%3 == 0) {
	            		print_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="no_of_colors" value="'+str2[i]+'"><label style="padding-left:10px">'+str2[i] 
		                        +'</label></td>';
	            	} else {
		            	print_options += '<td style="border:none">'
		                        +'<input type="radio" name="no_of_colors" value="'+str2[i]+'"><label style="padding-left:10px">'+str2[i] 
		                        +'</label></td>';
	            	}
	            	// print_options += '<option value="'+data.print[i].print_id+'">'+data.print[i].print+'</option>';
	        	 }; 
	        	$('div#print_list').html(print_options);

	        	//print color list
	        	var print_color_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Number Of Colours</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		var str3 = data[0].print_color.split(",");
	        	
	        	for (var i = 0; i < str3.length; i++) {
	            	if (i%3 == 0) {
	            		print_color_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="print" value="'+str3[i]+'"><label style="padding-left:10px">'+str3[i] 
		                        +'</label></td>';
	            	} else {
		            	print_color_options += '<td style="border:none">'
		                        +'<input type="radio" name="print" value="'+str3[i]+'"><label style="padding-left:10px">'+str3[i] 
		                        +'</label></td>';
	            	}
	        	 }; 
	        	$('div#print_color_list').html(print_color_options);

	        	// Set lamination options
	        	var lamination_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Lamination</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		var str4 = data[0].lamination.split(",");

	        	for (var i = 0; i < str4.length; i++) {
	            	if (i%3 == 0) {
	            		lamination_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="lamination" value="'+str4[i]+'"><label style="padding-left:10px">'+str4[i] 
		                        +'</label></td>';
	            	} else {
		            	lamination_options += '<td style="border:none">'
		                        +'<input type="radio" name="lamination" value="'+str4[i]+'"><label style="padding-left:10px">'+str4[i] 
		                        +'</label></td>';
	            	}
	            	// lamination_options += '<option value="'+data.lamination[i].lamination_id+'">'+data.lamination[i].lamination+'</option>';
	        	 }; 
	        	$('div#lamination_list').html(lamination_options);

	        	// Set special work options
	        	var special_work_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Special Work</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		var str5 = data[0].special_wrk.split(",");
	        	for (var i = 0; i < str5.length; i++) {
	            	if (i%3 == 0) {
	            		special_work_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="special_work" value="'+str5[i]+'"><label style="padding-left:10px">'+str5[i] 
		                        +'</label></td>';
	            	} else {
		            	special_work_options += '<td style="border:none">'
		                        +'<input type="radio" name="special_work" value="'+str5[i]+'"><label style="padding-left:10px">'+str5[i] 
		                        +'</label></td>';
	            	}
	            	// special_work_options += '<option value="'+data.special_work[i].special_work_id+'">'+data.special_work[i].special_work+'</option>';
	        	 }; 
	        	$('div#special_work_list').html(special_work_options);
	        },
	    });
	});

	// load size onchange of style
	$('body').on('change', 'input[type=radio][name=style]', function() {		
		var style_id = this.value;
		var data = {
			'style_id': style_id
		};
		$.ajax({
            type: 'POST',
	        dataType: 'json',
	        ContentType: "application/json",
	        url: base_url+"/filters/get_style_dependent_filters",
	        data: data,
	        success: function(data) {
	        	console.log(data);
	        	var size_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Size</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	            var str2 = data[0].size.split(",");
	        	for (var i = 0; i < str2.length; i++) {
	            	if (i%3 == 0) {
	            		size_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="size" value="'+str2[i]+'"><label style="padding-left:10px">'+str2[i] 
		                        +'</label></td>';
	            	} else {
		            	size_options += '<td style="border:none">'
		                        +'<input type="radio" name="size" value="'+str2[i]+'"><label style="padding-left:10px">'+str2[i] 
		                        +'</label></td>';
	            	}
	        	 }; 
	        	$('div#size_list').html(size_options);
	        },
	    });
	});
	
	// change the quantity table
	$('body').on('change', 'input[type=radio][name=section]', function() {		
		var section_id = this.value;
		if(section_id == 2){
			$('#table_for_print').show();
			$('#table_for_cust_and_deliver').hide();
		} else {
			$('#table_for_print').hide();
			$('#table_for_cust_and_deliver').show();
		}
	});

	// submit product
	$('body').on('click', '#submit_product', function() {		
		$("#product_upload").submit();
	});
});