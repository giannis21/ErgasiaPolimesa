<!DOCTYPE HTML>
<?php session_start()
?>

<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/albums.css"/>
	<script src="https://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="js files/showsongs.js"></script>
	<style>
div.form {
	background: linear-gradient(to bottom right, black, #4169E1);
	text-shadow: 2px 2px #000000;
	font-size: 30px;
	color: #ffbf00;
	border-radius: 10px;
	border: 1px solid;
    padding: 10px;
	
    box-shadow: 5px 10px 18px  #48D1CC;
    border: 1px solid #ccc;
	width:60%;
	margin-left:20%;
	
}

div.songs{
	 background: linear-gradient(to bottom right, black, #4169E1);
	text-shadow: 2px 2px #000000;
	color: white;
	margin:2%;
	width:46%;
	margin-left:20%;
	font-size: 30px;
	border-radius: 10px;
	border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px 18px  #48D1CC;
    border: 1px solid #ccc;
	padding-left:15%;
	
}
div.intro{
	color:white;
	font-size:20px;
	padding-right:25%;
	text-align:center;
}


.button {
     background: linear-gradient(to bottom right, black, #4169E1);
	box-shadow: 5px 10px 18px  #48D1CC;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button:hover{
	color: #EDC745;
}


</style>
	
  </head>
  <body>
    <div id="allnav">
    <div id="header">
      <p><a>MICHAEL JACKSON</a></p>
    </div>
    <div class="right"></div>
    <div class="left"></div>
    <div class ="center"></div>
    <div id="footer"></div>
	
    <nav class="navbar">
	<?php 
	include 'navbar.php';
	include "conndb.php";
	  ?>
    </nav>
   </div>  
     
      </div>
    </div>
    </div>
	</form>
	<div class="row">
  <div class="left-menu">
  
   <?php include "sidebar.php"; ?>
	<?php
	if (isset($_SESSION['username']))
	{
	echo "<h2><a href='game.php' class='button'>Play and Win</a></h2>";
	}
	?><div class='form'>
	<form name='form0'>
	YOUR SCORE:<input type='textbox' name='score' style='color:blue; font-size:20px; text-align:center; width:80%; padding-left:2px;' value='0' readonly>
	</form>
	</div><?php
	echo "</div><div class='column side'>";
	?>
	<br></br>
	<h2> 
	
	
	
	</h2>
    <p></p>
  </div>

  
  <div class=" column middle ">
<script> 


function showthem(){
	var album = form1.album.value; //pairnw to epilegmeno album 
	
	var xmlhttp = new XMLHttpRequest(); //dhmiourgw http request gia na emfanisw ta tragoudia
	
	xmlhttp.onreadystatechange = function(){

	if(xmlhttp.readyState == 4 && xmlhttp.status == 200)

	{
		document.getElementById('songs').innerHTML = xmlhttp.responseText; //edw orizw se pio <div> na paei na grapsei dhladh sto 'songs'
	}

	}

 

	xmlhttp.open('GET','phpfiles/showthem.php?album='+album, true); //anoigw to showthem.php kai tou stelnw kai to album pou epelekse o xrhsths

	xmlhttp.send(); // trexei to php
}


var score=0; //global metavlith gia to score


function newsong()
{
	
	var radios = document.getElementsByName('radio');  //pairnw ta radios gia na elegxw poio epelekse o xrhsths
	var correct = form2.corsong.value; //pairnw to swsto tragoudi pou exw valei se hidden value mesa sth forma
	
	for (var i = 0, length = radios.length; i < length; i++) //trexei gia osa radio exoume
	{
	if (radios[i].checked) //an auto einai pou exei epileksei o xrhsths
	{
		if(correct==radios[i].value) //elegxw an h timh tou radio einai idia me to swsto tragoudi
		{
			if(score<5)
				alert('Correct'); //emfanizw ena mhuma swstou
			score++; //auksanw to score kata 1 (global metavlith)
			form0.score.value= score; // vazw sto input tou score to trexon score tou xrhsth
			showthem(); // kalw ksana th showthem gia na emfanisei to epomeno tragoudi.
			if(score==5) // an to score einai iso me 5
			{
				form0.score.value= '0'; //mhdenizw to score sto input
				score=0; //mhdenizw kai thn global metavlith
				alert('You gained one more post!'); //emfanizw mhnuma oti kerdizei post
				var xmlhttp = new XMLHttpRequest(); //ftiaxnw ena akoma httprequest gia na treksw php kwdika pou tha allaksei to post_count sth vash
				xmlhttp.onreadystatechange = function(){

				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById('tipota').innerHTML = xmlhttp.responseText; //edw orizw ena id pou tha ginoun oi allages alla stn ousia den allazei kati emfanisiaka.
				}
				}
				xmlhttp.open('GET','phpfiles/incscore.php?points='+10, true); //orizw poio arxeio tha anoiksei

				xmlhttp.send(); //anoigw to arxeio php gia na treksei kai na ginoun oi allages sth vash
			}
		}else //an o xrhsths twra exei epileksei lathos tragoudi
		{
			alert("Wrong"); //emfanizw lathos mhnuma
			score=0; //mhdenizw to score
			form0.score.value= '0' //mhdenizw to input tou score
			showthem(); //kai ksana kalw thn showthem() gia na emfanisei to epomeno tragoudi
		}
	break; //spaw to for giati otan elegxeiw radios otan vreis to checked den mporeis na elegnkseis kai ta upoloipa. (apaithsh apo th glwssa programmatismou)
	}
	}
}


</script>
<div data-role="main" class="ui-content">
    <br></br>
	
	<div class='form'  align='center'>
	Select an album:
	<form name='form1'>
		<select style='font-size:20px;'name="album">
		  <option value="Off the wall" selected>Off the wall</option>
		  <option value="Thriller" >Thriller</option>
		  <option value="Dangerous">Dangerous</option>	  
		</select>
		<input type="button" style='font-size:20px;' value="GO" onclick='showthem()'>
	</form>
	</div>
	<br></br>
	
	
	<div class='songs'id='songs'>
	<div class='intro'>
	Game instructions!<br>
	Carefull! Once you pick your album and click GO this message will be vanished!<br>
	<br> 
	The game is simple. You only have to guess which song you hear and your score will be
	increased by one. If you guess wrong then the score will go back to 0. If you guess 5
	songs in a row then you will be able to post something one more time. <br> <br>
	
	Note: New users can post something only 3 times and the only way to post more is by playing! <br>
	Good luck!
	</div>
	</div>
	<br></br>
	 <div id='tipota'>
	 </div>
				
 
        
   
</div>
  </div>
  
</div>

  </body>
</html>

