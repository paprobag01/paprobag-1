
// <script>
//     $(document).ready(function () {
//         $('#section_id').click(function () {
//             //$('#div2').hide('fast');
//             $('#output').show('fast');
//         });
//     });

//                 function get_sub_cat_name(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("sub_cat_list").innerHTML="";
//                     document.getElementById("sub_cat_list").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("sub_cat_list").innerHTML=xmlhttp.responseText;
//                       document.getElementById("sub_cat_list").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/get_product/?get_product="+str,true);
//                   xmlhttp.send();
//                 }
           
//                 function getFilters(str) {
                
//                 var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("subcategories").innerHTML="";
//                     document.getElementById("subcategories").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("subcategories").innerHTML=xmlhttp.responseText;
//                       document.getElementById("subcategories").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/get_category/?get_category="+str,true);
//                   xmlhttp.send();
//                 }
              
              
//                 function createpagenumb(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/create_number/?create_number="+str,true);
//                   xmlhttp.send();
//                 }
          
//                 function create_numberlinks_material(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_material/?numberlinks_material="+str,true);
//                   xmlhttp.send();
//                 }
                  
//                 function create_numberlinks_GSM(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_GSM/?numberlinks_GSM="+str,true);
//                   xmlhttp.send();
//                 }
                  
//                 function create_numberlinks_size(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_size/?numberlinks_size="+str,true);
//                   xmlhttp.send();
//                 }
                  
//                 function create_numberlinks_style(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_style/?numberlinks_style="+str,true);
//                   xmlhttp.send();
//                 }
                  
//                 function create_numberlinks_handle(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_handle/?numberlinks_handle="+str,true);
//                   xmlhttp.send();
//                 }
                  
//                  </script>
//                 <script>   
//                 function create_numberlinks_print(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_print/?numberlinks_print="+str,true);
//                   xmlhttp.send();
//                 }
//                    </script>
//                  <script>  
//                 function create_numberlinks_lamination(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_lamination/?numberlinks_lamination="+str,true);
//                   xmlhttp.send();
//                 }
                  
//                  </script>
//                 <script>  
//                 function create_numberlinks_special_wrk(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("paging").innerHTML="";
//                     document.getElementById("paging").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("paging").innerHTML=xmlhttp.responseText;
//                       document.getElementById("paging").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/numberlinks_special_wrk/?numberlinks_special_wrk="+str,true);
//                   xmlhttp.send();
//                 }
                  

//                  </script>
//                  <script>
//                 function showsubcat(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("material_result").innerHTML="";
//                     document.getElementById("material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_subcat/?filter_subcat="+str,true);
//                   xmlhttp.send();
//                 }
//                    </script>
//                  <script>  
//                 function showmaterial(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("material_result").innerHTML="";
//                     document.getElementById("material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_material/?filter_material="+str,true);
//                   xmlhttp.send();
//                 }
//                    </script>
//                   <script>       
//                 function showResult(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("GSM_result").innerHTML="";
//                     document.getElementById("GSM_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("GSM_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("GSM_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_GSM/?filter_GSM="+str,true);
//                   xmlhttp.send();
//                 }
//                    </script>
//                  <script>  
//                 function showsize(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("size_result").innerHTML="";
//                     document.getElementById("size_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("size_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("size_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_size/?filter_size="+str,true);
//                   xmlhttp.send();
//                 }
//                   </script> 
//                    <script>
                   
//                 function showstyle(str) {
//                  var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("style_result").innerHTML="";
//                     document.getElementById("style_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("style_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("style_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_style/?filter_style="+str,true);
//                   xmlhttp.send();
//                 }
//               </script> 
//               <script>
//                 function showhandle(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("handle_result").innerHTML="";
//                     document.getElementById("handle_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("handle_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("handle_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_handle/?filter_handle="+str,true);
//                   xmlhttp.send();
//                 }
//                  </script>  
//                    <script>
//                 function filter_print(str) {
//                  var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("print_result").innerHTML="";
//                     document.getElementById("print_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("print_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("print_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_print/?filter_print="+str,true);
//                   xmlhttp.send();
//                 }
//                   </script> 
//                    <script> 
//                 function filter_lamination(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("lamination_result").innerHTML="";
//                     document.getElementById("lamination_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("lamination_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("lamination_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_lamination/?filter_lamination="+str,true);
//                   xmlhttp.send();
//                 }
//                   </script> 
//                    <script> 
//                 function filter_spl_wrk(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("special_wrk_result").innerHTML="";
//                     document.getElementById("special_wrk_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("special_wrk_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("special_wrk_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_spl_wrk/?filter_spl_wrk="+str,true);
//                   xmlhttp.send();
//                 }
//                  </script>  
//                   <script>  
//                 function show_filter_subprod(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_subprod_result/?filter_subprod_result="+str,true);
//                   xmlhttp.send();
//                 }
//                  </script>  
//                   <script> 
//                 function show_filter_material(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_material_result1/?filter_material_result1="+str,true);
//                   xmlhttp.send();
//                 }
//                  </script>  
//                   <script>                
                  
//                 function show_filter_GSM(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_GSM_result/?filter_GSM_result="+str,true);
//                   xmlhttp.send();
//                 }
//                   </script>
//                    <script> 
                  
//                 function show_filter_size(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_size_result/?filter_size_result="+str,true);
//                   xmlhttp.send();
//                 }
//                   </script> 
//                    <script>
//                 function show_filter_style(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_style_result/?filter_style_result="+str,true);
//                   xmlhttp.send();
//                 }
//                    </script>
//                     <script>
                  
//                 function show_filter_handle(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_handle_result/?filter_handle_result="+str,true);
//                   xmlhttp.send();
//                 }
//                  </script>  
//                    <script> 
//                 function show_filter_print(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_print_result/?filter_print_result="+str,true);
//                   xmlhttp.send();
//                 }
//                    </script>
//                    <script>
//                 function show_filter_lamination(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_lamination_result/?filter_lamination_result="+str,true);
//                   xmlhttp.send();
//                 }
//                 </script>
//                  <script>
                   
//                 function show_filter_splwrk(str) {
//                   var xmlhttp;
//                   if (str.length==0) { 
//                     document.getElementById("filter_material_result").innerHTML="";
//                     document.getElementById("filter_material_result").style.border="0px";
//                     return;
//                   }
//                   if (window.XMLHttpRequest) {
//                     // code for IE7+, Firefox, Chrome, Opera, Safari
//                     xmlhttp=new XMLHttpRequest();
//                   } else {  // code for IE6, IE5
//                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//                   }
//                   xmlhttp.onreadystatechange=function() {
//                     if (xmlhttp.readyState==4 && xmlhttp.status==200) {
//                       document.getElementById("filter_material_result").innerHTML=xmlhttp.responseText;
//                       document.getElementById("filter_material_result").style.border="0px solid #A5ACB2";
//                     }
//                   }
//                   xmlhttp.open("GET","<?php echo base_url();?>Search_result/filter_splwrk_result/?filter_splwrk_result="+str,true);
//                   xmlhttp.send();
//                 }
//                 </script> 
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
                     <li class="complete"><span></span></li>
                     <li><span>3</span></li>
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
                        <div class="tabing animated  animation-done bounceInUp" data-animation="bounceInUp" style="margin:0px;">
                           <ul class="nav nav-tabs">
                              <li class="active"><a href="#custp" data-toggle="tab">Upload Product</a></li>
                              <li><a href="#rtd" data-toggle="tab">Your Catalog</a></li>
                              <li><a href="#rtd" data-toggle="tab">Live products</a></li>
                           </ul>
                           <!-- Tab panes -->
                            
                           <form method="post">

                              <div class="tab-content">
                                 <div class="tab-pane active" id="custp">
                                    <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="lbltxt" style="float:left;">Subcategory:
                                                  <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                                </div>
                                                <?php foreach($section as $row){?>
                                                <div class="select_box sub_box" style="float: left;  padding: 24px 0 13px 39px;">
                                                  
                                                       <input type="radio" name="section" onchange="return confirm('Are you sure you want to delete this item?');" id="<?php echo $row['section_id']?>" class="txtbox"><?php echo $row['section_name']?>  
                                                </div>
                                                
                                                <?php } ?>
                                              </div>
                                        
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cat_result">
                                          <div class="lbltxt" style="float:left;">Category:
                                                  <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                                </div>
                                                <?php foreach($section as $row){?>
                                                <div class="select_box sub_box" style="float: left;  padding: 24px 0 13px 39px;">
                                                  
                                                       <input type="radio" id="<?php echo $row['section_id']?>" class="txtbox"><?php echo $row['section_name']?>  
                                                </div>
                                                <?php } ?>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Select Subcategory:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="rtd">
                                    <div class="cart_tbl">
                                       <div class="clearfix title_row">
                                          <ul>
                                             <li>Photo</li>
                                             <li>Name</li>
                                             <li>Quantity</li>
                                             <li>Price</li>
                                          </ul>
                                       </div>
                                       <div class="clearfix con_row">
                                          <ul>
                                             <li>
                                                <div class="thumb"><span> <img alt="alt" src="media/product/big.jpg" class="" draggable="false"> </span></div>
                                             </li>
                                             <li>
                                                <h5><a href="#">POÄNG - Chair, Blomstermåla</a></h5>
                                                <p>Living room furniture</p>
                                             </li>
                                             <li>
                                                <a class="minus_btn"></a>
                                                <input type="text" class="txtbox" placeholder="3"> 
                                                <a class="plus_btn"></a>
                                             </li>
                                             <li>
                                                <div class="price">$360.00</div>
                                                <a href="#" class="del_btn"></a>
                                             </li>
                                          </ul>
                                          <ul>
                                             <li>
                                                <div class="thumb"><span><img alt="alt" src="media/product/big.jpg" class="" draggable="false"></span></div>
                                             </li>
                                             <li>
                                                <h5><a href="#">Mugs with yellow stripes</a></h5>
                                                <p>Kitchen utensils</p>
                                             </li>
                                             <li>
                                                <a class="minus_btn"></a>
                                                <input type="text" class="txtbox" placeholder="1"> 
                                                <a class="plus_btn"></a>
                                             </li>
                                             <li>
                                                <div class="price">$15.50</div>
                                                <a href="#" class="del_btn"></a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="clearfix total_row">
                                          <ul>
                                             <li>
                                                <p><span class="fa fa-clock-o"></span>Praesent egestas est vitae interdum amet erat varius elementum.</p>
                                             </li>
                                             <li>
                                                <div class="total_val">Total value:</div>
                                             </li>
                                             <li>
                                                <div class="price">$375.50</div>
                                                <a href="#" class="refresh_btn"></a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="cart_btn clearfix">
                                          <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                                          <a href="#" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        </form>          
                     </div>
                     <div class="cart_btn clearfix">
                        <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                        <a href="<?php echo base_url()?>seller_catalog" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>