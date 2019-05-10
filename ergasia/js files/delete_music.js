function delete_music(m_name){
 var xmlhttp = new XMLHttpRequest(); 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('dele1').innerHTML = xmlhttp.responseText;
 }
 }
  
 xmlhttp.open('GET','phpfiles/Delete_Music.php?m_name='+m_name, true);
 xmlhttp.send();  // window.location.reload(true);
 
 
}      