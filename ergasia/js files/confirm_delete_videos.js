function confirm_prof_video(conf){/*   var testid = document.getElementById('load_prof_im').innerHTML;  var conf1=conf;if (testid!=''){	document.getElementById('load_prof_im').innerHTML = '';} */
 var xmlhttp = new XMLHttpRequest(); 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
 {
  document.getElementById('dele').innerHTML = xmlhttp.responseText;
 }
 }
 
 xmlhttp.open('GET','phpfiles/confirm_video.php?conf='+conf+'&if_del='+ '1', true);
 xmlhttp.send(); 
}
