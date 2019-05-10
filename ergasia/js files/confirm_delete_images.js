function confirm_im(conf){  var testid = document.getElementById('load_prof_im').innerHTML;  var conf1=conf;if (testid!=''){	document.getElementById('load_prof_im').innerHTML = '';}
 var xmlhttp = new XMLHttpRequest(); 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('dele').innerHTML = xmlhttp.responseText;
 }
 }
 
 xmlhttp.open('GET','phpfiles/confirm_image.php?conf='+conf1+'&if_del='+ '1', true);
 xmlhttp.send(); 
}
function delete_im(conf){      var testid = document.getElementById('load_prof_im').innerHTML;if (testid!=''){	document.getElementById('load_prof_im').innerHTML = '';} var xmlhttp = new XMLHttpRequest();  xmlhttp.onreadystatechange = function(){ if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {  document.getElementById('dele').innerHTML = xmlhttp.responseText; } }  xmlhttp.open('GET','phpfiles/confirm_image.php?conf='+conf+'&if_del='+ '0', true); xmlhttp.send(); }/*  $(document).ready(function() {                $("#b1").click(function(event){                                     $('#load_im').html();               });             }); 						 $(document).ready(function() {                $("#b2").click(function(event){                                     $('#load_im').html();               });             });  */