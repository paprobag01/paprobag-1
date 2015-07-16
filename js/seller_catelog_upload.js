$(document).ready(function() {
	//load sections
    $.ajax({
        dataType: 'json',
        ContentType: "application/json",
        url: base_url+"/filters/get_sections",
        success: function(data) { 
        	var options = '<option>select section</option>';
            for (var i = 0; i < data.length; i++) {
            	options += '<option value="'+data[i].section_id+'">'+data[i].section+'</option>';
            };
            $('select#section_list').html(options);
        },
    });
	//load categories
	$('#section_list').change(function(){
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
	        	var options = '<option>select section</option>';
	            for (var i = 0; i < data.length; i++) {
	            	options += '<option value="'+data[i].category_id+'">'+data[i].category+'</option>';
	            };
	            $('select#category_list').html(options);
	        },
	    });
	});

	//load subcategories
	$('#category_list').change(function(){
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
	        	var options = '<option>select section</option>';
	            for (var i = 0; i < data.length; i++) {
	            	options += '<option value="'+data[i].sub_category_id+'">'+data[i].sub_category+'</option>';
	            };
	            $('select#sub_category_list').html(options);
	        },
	    });
	});

	//load materials
	$('#sub_category_list').change(function(){
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
	        	var options = '<option>select section</option>';
	            for (var i = 0; i < data.length; i++) {
	            	options += '<option value="'+data[i].material_id+'">'+data[i].material+'</option>';
	            };
	            $('select#material_list').html(options);
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

	$('#material_list').change(function(){
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
	        	// var options = '<option>select section</option>';
	         //    for (var i = 0; i < data.length; i++) {
	         //    	options += '<option value="'+data[i].material_id+'">'+data[i].material+'</option>';
	         //    };
	         //    $('select#material_list').html(options);
	        },
	    });
	});
});