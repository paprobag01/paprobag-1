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
	        	var options = '';
	            for (var i = 0; i < data.length; i++) {
	            	options += '<option value="'+data[i].category_id+'">'+data[i].category+'</option>';
	            };
	            $('select#category_list').html(options);
	        },
	    });
	});
	//load subcategories

	//load materials

	//load gsms

	//load styles

	//load sizes

	//load handles

	//load print

	//load print colors

	//load lamination

	//load special work

});