function confirm_music(conf,num){
 var xmlhttp = new XMLHttpRequest(); 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('dele1').innerHTML = xmlhttp.responseText;
 }
 }
 
 xmlhttp.open('GET','phpfiles/confirm_music.php?conf='+conf+'&num='+ num ,true);
 xmlhttp.send(); 
}
