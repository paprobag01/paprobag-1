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