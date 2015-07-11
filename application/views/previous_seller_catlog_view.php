      
               <script>  
                function get_sub_cat_name(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("sub_cat_list").innerHTML="";
                    document.getElementById("sub_cat_list").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("sub_cat_list").innerHTML=xmlhttp.responseText;
                      document.getElementById("sub_cat_list").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/get_product/?get_product="+str,true);
                  xmlhttp.send();
                }
              </script> 
       <script>  
                function getFilters(str) {
                if (str.checked) {
                var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("subcategories").innerHTML="";
                    document.getElementById("subcategories").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("subcategories").innerHTML=xmlhttp.responseText;
                      document.getElementById("subcategories").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/get_category/?get_category="+str,true);
                  xmlhttp.send();
                }
              }
              
              </script>    
          <script>  
                function createpagenumb(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/create_number/?create_number="+str,true);
                  xmlhttp.send();
                }
              </script>    
               <script>                  
                function create_numberlinks_material(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_material/?numberlinks_material="+str,true);
                  xmlhttp.send();
                }
                  
                   </script>
                 <script> 
                function create_numberlinks_GSM(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_GSM/?numberlinks_GSM="+str,true);
                  xmlhttp.send();
                }
                  
                 </script>
                 <script>  
                function create_numberlinks_size(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_size/?numberlinks_size="+str,true);
                  xmlhttp.send();
                }
                  
                   </script>
                  <script> 
                function create_numberlinks_style(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_style/?numberlinks_style="+str,true);
                  xmlhttp.send();
                }
                  
                 </script>
                <script>
                function create_numberlinks_handle(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_handle/?numberlinks_handle="+str,true);
                  xmlhttp.send();
                }
                  
                 </script>
                <script>   
                function create_numberlinks_print(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_print/?numberlinks_print="+str,true);
                  xmlhttp.send();
                }
                   </script>
                 <script>  
                function create_numberlinks_lamination(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_lamination/?numberlinks_lamination="+str,true);
                  xmlhttp.send();
                }
                  
                 </script>
                <script>  
                function create_numberlinks_special_wrk(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("paging").innerHTML="";
                    document.getElementById("paging").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("paging").innerHTML=xmlhttp.responseText;
                      document.getElementById("paging").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_special_wrk/?numberlinks_special_wrk="+str,true);
                  xmlhttp.send();
                }
                  

                 </script>
                 <script>
                function showsubcat(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("material_result").innerHTML="";
                    document.getElementById("material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_subcat/?filter_subcat="+str,true);
                  xmlhttp.send();
                }
                   </script>
                 <script>  
                function showmaterial(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("material_result").innerHTML="";
                    document.getElementById("material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_material/?filter_material="+str,true);
                  xmlhttp.send();
                }
                   </script>
                  <script>       
                function showResult(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("GSM_result").innerHTML="";
                    document.getElementById("GSM_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("GSM_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("GSM_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_GSM/?filter_GSM="+str,true);
                  xmlhttp.send();
                }
                   </script>
                 <script>  
                function showsize(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("size_result").innerHTML="";
                    document.getElementById("size_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("size_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("size_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_size/?filter_size="+str,true);
                  xmlhttp.send();
                }
                  </script> 
                   <script>
                   
                function showstyle(str) {
                 var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("style_result").innerHTML="";
                    document.getElementById("style_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("style_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("style_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_style/?filter_style="+str,true);
                  xmlhttp.send();
                }
              </script> 
              <script>
                function showhandle(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("handle_result").innerHTML="";
                    document.getElementById("handle_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("handle_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("handle_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_handle/?filter_handle="+str,true);
                  xmlhttp.send();
                }
                 </script>  
                   <script>
                function filter_print(str) {
                 var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("print_result").innerHTML="";
                    document.getElementById("print_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("print_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("print_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_print/?filter_print="+str,true);
                  xmlhttp.send();
                }
                  </script> 
                   <script> 
                function filter_lamination(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("lamination_result").innerHTML="";
                    document.getElementById("lamination_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("lamination_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("lamination_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_lamination/?filter_lamination="+str,true);
                  xmlhttp.send();
                }
                  </script> 
                   <script> 
                function filter_spl_wrk(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("special_wrk_result").innerHTML="";
                    document.getElementById("special_wrk_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("special_wrk_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("special_wrk_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_spl_wrk/?filter_spl_wrk="+str,true);
                  xmlhttp.send();
                }
                 </script>  
                  <script>  
                function show_filter_subprod(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_subprod_result/?filter_subprod_result="+str,true);
                  xmlhttp.send();
                }
                 </script>  
                  <script> 
                function show_filter_material(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_material_result1/?filter_material_result1="+str,true);
                  xmlhttp.send();
                }
                 </script>  
                  <script>                
                  
                function show_filter_GSM(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_GSM_result/?filter_GSM_result="+str,true);
                  xmlhttp.send();
                }
                  </script>
                   <script> 
                  
                function show_filter_size(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_size_result/?filter_size_result="+str,true);
                  xmlhttp.send();
                }
                  </script> 
                   <script>
                function show_filter_style(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_style_result/?filter_style_result="+str,true);
                  xmlhttp.send();
                }
                   </script>
                    <script>
                  
                function show_filter_handle(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_handle_result/?filter_handle_result="+str,true);
                  xmlhttp.send();
                }
                 </script>  
                   <script> 
                function show_filter_print(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_print_result/?filter_print_result="+str,true);
                  xmlhttp.send();
                }
                   </script>
                   <script>
                function show_filter_lamination(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_lamination_result/?filter_lamination_result="+str,true);
                  xmlhttp.send();
                }
                </script>
                 <script>
                   
                function show_filter_splwrk(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("filter_material_result").innerHTML="";
                    document.getElementById("filter_material_result").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
                      document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_splwrk_result/?filter_splwrk_result="+str,true);
                  xmlhttp.send();
                }
                </script> 
                <style type='text/css'>
     
     span.unclickable:hover { cursor: default; }
     </style>
<div id="content">
   <div class="container">
      <div class="cart_c">
         <div class="cart_bot">
            <div class="title clearfix">
               <h2>Your cart - Shipping Information</h2>
               <div class="title_right cart_list">
                  <ul>
                     <li class="complete"><span></span></li>
                     <li><span>2</span></li>
                     <li><span>3</span></li>
                     <li><span>4</span></li>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                  <div class="sidebar">
                     <div class="side_box side_box_1 red5">
                        <h5>helpful information</h5>
                        <ul>
                           <li><a href="#">Personal Details</a></li>
                           <li><a href="#">Email ID </a></li>
                           <li><a href="#">Contact Number</a></li>
                           <li><a href="#">Address</a></li>
                           <li><a href="#">Product Upload</a></li>
                           <li><a href="#">Verfication</a></li>
                           <li><a href="#">Ready To Sell</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                  <div class="ship_frm_c">
                     <div class="frm ship_frm">
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Section</a></h5></span>                                     
                                      <?php foreach($section as $row){ ?>
                                        <ul class="tgl_c1">
                                             <li id="<?php echo $row['section_id']; ?>" onclick="getFilters(this.id)"><?php echo $row['section_name']; ?></li>
                                        </ul>                                        
                                        <?php } ?>

                                 </div>
                              </div>
                           </div>
                      </div>
                    <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="subcategories">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Category</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Section"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                        <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="sub_cat_list">
                                     <span class="unclickable"> <h5><a href="#" class="tgl_btn">Product</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Category"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="material_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Material</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Category"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="GSM_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">GSM</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Material"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5"  id="size_result" id="style_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Size</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select GSM"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="style_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Style</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Size"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="handle_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Handle</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Style"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="print_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Prinr</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Handle"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="print_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Select Number Of Colors</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li>1
                                            <input type="checkbox" class="icheckbox_minimal">
                                          </li>
                                           <li>2
                                            <input type="checkbox" class="icheckbox_minimal">
                                          </li>
                                          <li>3
                                            <input type="checkbox" class="icheckbox_minimal">
                                          </li>
                                          <li>4
                                            <input type="checkbox" class="icheckbox_minimal">
                                          </li>
                                          <li>Multicolor
                                            <input type="checkbox" class="icheckbox_minimal">
                                          </li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="lamination_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Lamination</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Print"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                              <div class="sidebar">
                                 <div class="side_box side_box_1 red5" id="special_wrk_result">
                                    <span class="unclickable"> <h5><a href="#" class="tgl_btn">Special Work</a></h5></span>
                                      <ul class="tgl_c1">
                                           <li> <?php echo "Select Lamination"; ?></li>
                                      </ul>
                                 </div>
                              </div>
                           </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="lbltxt">Product Price :<span class="req">*</span></div>
                              <input type="text" class="txtbox">
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="lbltxt">Weight Caring Capacity Of Bag:<span class="req">*</span></div>
                              <input type="text" class="txtbox">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="lbltxt">Product ID :<span class="req">*</span></div>
                              <input type="text" class="txtbox">
                          </div>                          
                      </div>
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="lbltxt">Image1 :<span class="req">*</span></div>
                              <input type="file">
                          </div> 
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="lbltxt">Image2 :<span class="req">*</span></div>
                              <input type="file">
                          </div> 
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="lbltxt">Image3 :<span class="req">*</span></div>
                              <input type="file">
                          </div> 
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="lbltxt">Image4 :<span class="req">*</span></div>
                              <input type="file">
                          </div>                          
                      </div>
                     </div>
                     <div class="cart_btn clearfix">
                        <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                        <a href="<?php echo base_url()?>verification" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--<div class="clearfix frm_bot">
   <input type="submit" class="btn_c" value="Submit">
   <input type="reset" class="clear_btn" value="Clear">
    </div>-->
