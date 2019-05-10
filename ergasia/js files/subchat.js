function submitChat(){
 var msg = form1.msg.value;
 if(msg == '' || msg == ' ' || msg == '\n' || msg == '\n '){
  form1.msg.value="";
  alert('Please write a message first!!!!');
  return;
 }
 var xmlhttp = new XMLHttpRequest();
 form1.msg.value="";
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
 
 }
 }
 
 xmlhttp.open('GET','phpfiles/insert.php?msg='+msg, true);
 xmlhttp.send();
 
}

$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#chatlogs').load('phpfiles/logs.php');}, 2000);
});