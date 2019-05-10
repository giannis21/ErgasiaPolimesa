function delete_com(cid){
 var xmlhttp = new XMLHttpRequest(); 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('tip1').innerHTML = xmlhttp.responseText;
 }
 }
 
 xmlhttp.open('GET','phpfiles/delete_comm.php?cid='+cid, true);
 xmlhttp.send(); 
 
 
}

