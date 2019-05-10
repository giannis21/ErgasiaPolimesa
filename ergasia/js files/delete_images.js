function delete_im(im_name){
 var xmlhttp = new XMLHttpRequest(); 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('dele').innerHTML = xmlhttp.responseText;
 }
 }
 
 xmlhttp.open('GET','phpfiles/delete_image.php?im_name='+im_name, true);
 xmlhttp.send(); 
 
 
}        /*  $(document).ready(function() {                $("#but").click(function(event){                                     $('#load_im').html();               });             });  */      