function confirm_im(conf){
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
