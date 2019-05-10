function delete_video(v_name){
 var xmlhttp = new XMLHttpRequest(); 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('dele').innerHTML = xmlhttp.responseText;
 }
 }
  
 xmlhttp.open('GET','phpfiles/delete_video.php?v_name='+v_name, true);
 xmlhttp.send();  // window.location.reload(true);
 
 
}      