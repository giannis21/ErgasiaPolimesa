function showSongs(album){

var testid = document.getElementById(album).innerHTML;

if (testid!='')
{
	document.getElementById(album).innerHTML = '';
}
else
{
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function(){

	if(xmlhttp.readyState == 4 && xmlhttp.status == 200)

	{
	document.getElementById(album).innerHTML = xmlhttp.responseText;
	}

	}

 

	xmlhttp.open('GET','phpfiles/showsongs.php?album1='+ album, true);

	xmlhttp.send();
}

 

}