<!DOCTYPE HTML>
<?php session_start()
?>

<html>
<style>

.loader {
  border: 16px solid #30353C;
  border-radius: 50%;
  border-top: 16px solid #F7BE3C;
  width: 110px;
  height: 110px;
    position: absolute;
    left: 50%;
    top: 35%;
  -webkit-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite;
  text-align:center;
}
myDiv {
  
  text-align: center;
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
  <head>
    <link rel = "stylesheet" type="text/css" href ="css/general.css"/>
  </head>
  <body onscroll="myFunction()">
    <div id="header">
      <p><a>MICHAEL JACKSON</a></p>
    </div>
    <div class="right"></div>
    <div class="left"></div>
    <div class ="center"></div>
    <div id="footer"></div>
    <nav class="navbar">
      <?php 
	include "navbar.php";
	  ?>
    </nav>
	
	 
		
 <?php                                           //efoson mpei se auth thn selida mporei na plohgh8ei
        header('Cache-Control: no cache');       //bazo ayth thn entolh epeidi otan 8elo na guriso ap ton browser piso perimeni na pari post apo kato..kai etsi dn xreiazete na parei ta post apo kato kai dn krasari
		
	    $password=$_POST["password"];
	
        $username=$_POST["username"];
		global $flag;
		 $flag=0;
		include "conndb.php";
		$result = mysqli_query($conn,"SELECT * FROM users  where username='$username' and password='$password'"); 
		 while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
					{
						if($row['password']==$password && $username==$row['username']) //elenxo an o xrhsths einai egkiros dld an iparxei mesa sth bash dedomenon
						{
							$flag=1;
							$_SESSION['userid']=$row['userid'];
					   	    $_SESSION['username']=$row['username']; 
							$_SESSION['name']=$row['name'];
		                    $_SESSION['email']=$row['email'];
							$_SESSION['ifadmin']=$row['ifadmin'];
							
							 $counter=0;
							$result11 = mysqli_query($conn,"SELECT * FROM points_user  where user_id='$_SESSION[userid]'"); 
							 while($row = mysqli_fetch_array($result11)) 
							 {
								 $counter++;
							 }
							if($counter==0)
								{
								$sql1="insert into points_user(user,user_id) values('$_SESSION[name]','$_SESSION[userid]');" ;
								$result1 = mysqli_query($conn,$sql1); //επιλογή όλων 
								if(!$result1)
								die('i eggrafh apetixe'.mysql_error());
								}

						}          //to apo8ikeuo ws session gia na to xrisimopoihso wste na emfaniso to katallhlo eksamino
						
					} 
					


		
       
		if($flag!=1)  //se periptosi po0 den uparxei o xrhsths 
		{	 
			header("Location: login.php?message=the user does not exist");         
			 
			 //se periptosi po0 den iparxo0n ta stoixeia me petaei sto login pali gia na ksana kanei login pernontas toy ena minima
		     
		}
		 else
		{
	       echo "<myDiv><div class='loader' ></div> </myDiv>"; 
		   header( "refresh:2; url=home.php", true, 303);
		   die(); 
		}
		mysqli_close($conn);
		?>

        
     
      </div>
    </div>
    </div>
	</form>
	
  </body>
</html>

