function submitComment(){
 var comm = form1.message.value;
 if(comm == '' || comm==' '){
  alert('Please write something first!!!!');
  return;
 }
 var currentdate = new Date(); 
 var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " - "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
 var xmlhttp = new XMLHttpRequest();
 form1.message.value="";
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('comments').innerHTML = xmlhttp.responseText;
 
 }
 }
 
 xmlhttp.open('GET','phpfiles/comments.ins.php?comm='+ comm +'&date='+ datetime, true);
 xmlhttp.send(); 
 
 
}

 $(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#comments').load('phpfiles/commlogs.php');}, 5000);
}); 