function show_comment(postid){

var post_id = document.getElementById(postid).innerHTML;

if (post_id!='')
{
	document.getElementById(postid).innerHTML = '';
}
else
{
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function(){

	if(xmlhttp.readyState == 4 && xmlhttp.status == 200)

	{
	document.getElementById(postid).innerHTML = xmlhttp.responseText;
	}

	}

 

	xmlhttp.open('GET','phpfiles/show_profile_comm.php?postid='+ postid, true);

	xmlhttp.send();
}

 

}