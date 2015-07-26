$(document).ready(function() {
	//load sections
    // $.ajax({
    //     dataType: 'json',
    //     ContentType: "application/json",
    //     url: base_url+"/filters/get_sections",
    //     success: function(data) {
    //     	var options = '<table class="table table-condensed borderless">'
				// 		    +'<thead>'
				// 		    +'  <tr><th>Section</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
    //         for (var i = 0; i < data.length; i++) {
    //         	if (i%3 == 0) {
    //         		options += '</tr><tr><td style="border:none">'
	   //                      +'<input type="radio" name="section" value="'+data[i].section_id+'"><label style="padding-left:10px">'+data[i].section 
	   //                      +'</label></td>';
    //         	} else {
	   //          	options += '<td style="border:none">'
	   //                      +'<input type="radio" name="section" value="'+data[i].section_id+'"><label style="padding-left:10px">'+data[i].section 
	   //                      +'</label></td>';
    //         	}
    //         }
    //         options += '</tr></tbody></table>';
    //         $('div#section_list').html(options);
    //     },
    // });
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
	        	console.log(data);
	        	var options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Category</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	            for (var i = 0; i < data.length; i++) {
	            	if (i%3 == 0) {
	            		options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="category" value="'+data[i].category_id+'"><label style="padding-left:10px">'+data[i].category 
		                        +'</label></td>';
	            	} else {
		            	options += '<td style="border:none">'
		                        +'<input type="radio" name="category" value="'+data[i].category_id+'"><label style="padding-left:10px">'+data[i].category 
		                        +'</label></td>';
	            	}
	            }
	            $('div#category_list').html(options);
	        },
	    });
	});

	//load subcategories
	$('body').on('change', 'input[name=category]:radio', function() {
		var category_id = this.value;
		var data = {
			'category_id': category_id
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
							    +'  <tr><th>SubCategory</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	            for (var i = 0; i < data.length; i++) {
	            	if (i%3 == 0) {
	            		options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="sub_category" value="'+data[i].sub_category_id+'"><label style="padding-left:10px">'+data[i].sub_category 
		                        +'</label></td>';
	            	} else {
		            	options += '<td style="border:none">'
		                        +'<input type="radio" name="sub_category" value="'+data[i].sub_category_id+'"><label style="padding-left:10px">'+data[i].sub_category 
		                        +'</label></td>';
	            	}
	            };
	            $('div#sub_category_list').html(options);
	        },
	    });
	});

	//load materials
	$('body').on('change', 'input[name=sub_category]:radio', function() {
		var sub_category_id = this.value;
		var data = {
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
							    +'<thead>'
							    +'  <tr><th>Material</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	            for (var i = 0; i < data.length; i++) {
	            	if (i%3 == 0) {
	            		options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="material" value="'+data[i].material_id+'"><label style="padding-left:10px">'+data[i].material 
		                        +'</label></td>';
	            	} else {
		            	options += '<td style="border:none">'
		                        +'<input type="radio" name="material" value="'+data[i].material_id+'"><label style="padding-left:10px">'+data[i].material 
		                        +'</label></td>';
	            	}
	            };
	            $('div#material_list').html(options);
	        },
	    });
	});

	//load gsms

	//load styles

	//load sizes

	//load handles

	//load print

	//load print colors

	//load lamination

	//load special work

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
	       		// var gsm_options = '<option>select gsm</option>';
	        	for (var i = 0; i < data.gsm.length; i++) {
	            	// gsm_options += '<option value="'+data.gsm[i].gsm_id+'">'+data.gsm[i].gsm+'</option>';
	        	 	if (i%3 == 0) {
	            		gsm_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="gsm" value="'+data.gsm[i].gsm_id+'"><label style="padding-left:10px">'+data.gsm[i].gsm 
		                        +'</label></td>';
	            	} else {
		            	gsm_options += '<td style="border:none">'
		                        +'<input type="radio" name="gsm" value="'+data.gsm[i].gsm_id+'"><label style="padding-left:10px">'+data.gsm[i].gsm 
		                        +'</label></td>';
	            	}
	        	 }; 
	        	$('div#gsm_list').html(gsm_options);

	        	// Set style options
	        	var style_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Style</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		// var style_options = '<option>select style</option>';
	        	for (var i = 0; i < data.style.length; i++) {
	            	if (i%3 == 0) {
	            		style_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="style" value="'+data.style[i].style_id+'"><label style="padding-left:10px">'+data.style[i].style 
		                        +'</label></td>';
	            	} else {
		            	style_options += '<td style="border:none">'
		                        +'<input type="radio" name="style" value="'+data.style[i].style_id+'"><label style="padding-left:10px">'+data.style[i].style 
		                        +'</label></td>';
	            	}
	            	// style_options += '<option value="'+data.style[i].style_id+'">'+data.style[i].style+'</option>';
	        	 }; 
	        	$('div#style_list').html(style_options);

	        	// Set size options
	       		var size_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Size</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		// var size_options = '<option>select size</option>';
	        	for (var i = 0; i < data.size.length; i++) {
	            	if (i%3 == 0) {
	            		size_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="size" value="'+data.size[i].size_id+'"><label style="padding-left:10px">'+data.size[i].size 
		                        +'</label></td>';
	            	} else {
		            	size_options += '<td style="border:none">'
		                        +'<input type="radio" name="size" value="'+data.size[i].size_id+'"><label style="padding-left:10px">'+data.size[i].size 
		                        +'</label></td>';
	            	}
	            	// size_options += '<option value="'+data.size[i].size_id+'">'+data.size[i].size+'</option>';
	        	 }; 
	        	$('div#size_list').html(size_options);

	        	// Set handle options
	        	var handle_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Handle</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		// var handle_options = '<option>select handle</option>';
	        	for (var i = 0; i < data.handle.length; i++) {
	            	if (i%3 == 0) {
	            		handle_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="handle" value="'+data.handle[i].handle_id+'"><label style="padding-left:10px">'+data.handle[i].handle 
		                        +'</label></td>';
	            	} else {
		            	handle_options += '<td style="border:none">'
		                        +'<input type="radio" name="handle" value="'+data.handle[i].handle_id+'"><label style="padding-left:10px">'+data.handle[i].handle 
		                        +'</label></td>';
	            	}
	            	// handle_options += '<option value="'+data.handle[i].handle_id+'">'+data.handle[i].handle+'</option>';
	        	 }; 
	        	$('div#handle_list').html(handle_options);

	        	// Set print options
	       		var print_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Print</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		// var print_options = '<option>select print</option>';
	        	for (var i = 0; i < data.print.length; i++) {
	            	if (i%3 == 0) {
	            		print_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="print" value="'+data.print[i].print_id+'"><label style="padding-left:10px">'+data.print[i].print 
		                        +'</label></td>';
	            	} else {
		            	print_options += '<td style="border:none">'
		                        +'<input type="radio" name="print" value="'+data.print[i].print_id+'"><label style="padding-left:10px">'+data.print[i].print 
		                        +'</label></td>';
	            	}
	            	// print_options += '<option value="'+data.print[i].print_id+'">'+data.print[i].print+'</option>';
	        	 }; 
	        	$('div#print_list').html(print_options);

	        	// Set lamination options
	        	var lamination_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Lamination</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		// var lamination_options = '<option>select lamination</option>';
	        	for (var i = 0; i < data.lamination.length; i++) {
	            	if (i%3 == 0) {
	            		lamination_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="lamination" value="'+data.lamination[i].lamination_id+'"><label style="padding-left:10px">'+data.lamination[i].lamination 
		                        +'</label></td>';
	            	} else {
		            	lamination_options += '<td style="border:none">'
		                        +'<input type="radio" name="lamination" value="'+data.lamination[i].lamination_id+'"><label style="padding-left:10px">'+data.lamination[i].lamination 
		                        +'</label></td>';
	            	}
	            	// lamination_options += '<option value="'+data.lamination[i].lamination_id+'">'+data.lamination[i].lamination+'</option>';
	        	 }; 
	        	$('div#lamination_list').html(lamination_options);

	        	// Set special work options
	        	var special_work_options = '<table class="table table-condensed borderless">'
							    +'<thead>'
							    +'  <tr><th>Special Work</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
	       		// var special_work_options = '<option>select special work</option>';
	        	for (var i = 0; i < data.special_work.length; i++) {
	            	if (i%3 == 0) {
	            		special_work_options += '</tr><tr><td style="border:none">'
		                        +'<input type="radio" name="special_work" value="'+data.special_work[i].special_work_id+'"><label style="padding-left:10px">'+data.special_work[i].special_work 
		                        +'</label></td>';
	            	} else {
		            	special_work_options += '<td style="border:none">'
		                        +'<input type="radio" name="special_work" value="'+data.special_work[i].special_work_id+'"><label style="padding-left:10px">'+data.special_work[i].special_work 
		                        +'</label></td>';
	            	}
	            	// special_work_options += '<option value="'+data.special_work[i].special_work_id+'">'+data.special_work[i].special_work+'</option>';
	        	 }; 
	        	$('div#special_work_list').html(special_work_options);
	        },
	    });
	});

	// load size onchange of style
	$('#style_list').change(function(){
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
	        	var options = '<option>Select Size</option>';
	            for (var i = 0; i < data.length; i++) {
	            	options += '<option value="'+data[i].size_id+'">'+data[i].size+'</option>';
	            };
	            $('select#size_list').html(options);
	        },
	    });
	});

	// load no of colors onchange of print
	$('#print_list').change(function(){
		var print_id = this.value;
		var data = {
			'print_id': print_id
		};
		$.ajax({
            type: 'POST',
	        dataType: 'json',
	        ContentType: "application/json",
	        url: base_url+"/filters/get_print_colors",
	        data: data,
	        success: function(data) { 
	        	var options = '<option>Select No of colors</option>';
	            for (var i = 0; i < data.length; i++) {
	            	options += '<option value="'+data[i].print_color_id+'">'+data[i].print_color+'</option>';
	            };
	            $('select#print_color_list').html(options);
	        },
	    });
	});
});