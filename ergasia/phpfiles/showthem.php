<?php
//edw praktika einai peripou o idios kwdikas pou ekanes

	include "conndb.php";
	$counter=0; 
	$array = array();
	$album=$_REQUEST['album'];
	$sql="SELECT song FROM albums  where album='$album' ";
	$result = mysqli_query($conn,$sql); 
		 
	while($row = mysqli_fetch_array($result))
	{
		$array[++$counter]=$row['song']; 
				
	}
	echo "Guess which song is this<BR>";
	
	shuffle($array);
	$rand_keys=array();
	/* Loipon mia shmeiwsh gia thn array_rand. Den apothikeuei tris times apo ton
	pinaka poy toy les alla tria keys. Dhladh an exoume enan pinaka 20 stoixeiwn dhladh a[0]-a[19]
	tote h array_tand($a,3) tha sou dwsei tria shmeia ston pinaka dhladh 3 arithmous anamesa sto 0-19.
	opote ayto pou kanw parakatw einai na pairnw stoixeia mesa apo ton $array me ta keys poy moy edwse h
	array_rand sto $rand_keys. px to rand_keys[0] einai enas arithmos theshs tou pinaka array
	*/
	$rand_keys=array_rand($array,3);
	
?>

	<audio controls>
        
		<source src='music/<?php echo $array[$rand_keys[0]];?>.mp3' type='audio/mpeg'>

    </audio>
	
	<form name='form2'>
	<input type="hidden" name="corsong" value="<?php echo $array[$rand_keys[0]]; shuffle($rand_keys); //edw mperdeuw ta keys etsi wste na mhn emfanizetai to swsto panta prwto.?>">
	<input type="radio" name="radio" value="<?php echo $array[$rand_keys[0]];?>" checked><?php echo $array[$rand_keys[0]];?><br>
	<input type="radio" name="radio" value="<?php echo $array[$rand_keys[1]];?>" ><?php echo $array[$rand_keys[1]];?><br>
	<input type="radio" name="radio" value="<?php echo $array[$rand_keys[2]];?>" ><?php echo $array[$rand_keys[2]];?><br>

	<input type="button" style='color:blue; font-size:20px; text-align:center;' value='Submit' onclick='newsong()'/>
	</form>
	
	