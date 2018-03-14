<!DOCTYPE html>
<html>

<head>

		<a href="index.php"><h1>HOME</h1></a>
<script>
function validateForm() {
    var x = document.forms["myForm"]["gamenm","gametyp","release_date"].value;
    if (x == "") {
        alert("all data must be filled out");
        return false;
    }
}

</script>
</head>
<h2>Enter Your Game Details. !</h2>
	<body>

	<form name="myForm" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validateForm()" method="post">
		

		<!--creating name field-->
				
			<div>
                <label>game name</label>
			    <input type="text" name="gamenm"><br>
			</div>
		<!-- creating password field-->
		    <div>
		    	<label>Game Type</label>
		    	<input type="text" name="gametyp"><br>
		    </div>

		      <div>
		    	<label>Release date</label>
		    	<input type="text" name="release_date"><br>
		    </div>    

		    <input type="submit" value = 'submit' name = 'submit' id="submit">

		</form>

		
	</body>
</html>


<?php
extract($_POST);
include 'config.php';
if(isset($_POST['submit']))
{
	$query = "INSERT INTO games(game_name,game_type,release_date)
	values('".$gamenm."','".$gametyp."','".$release_date."')";

	$result = mysqli_query($connection,$query);	

	if($result){
		echo " Data insert successfull";
	}else{
		echo "Insert failed";
	}

}
 ?>
