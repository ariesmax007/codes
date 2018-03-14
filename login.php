<!DOCTYPE html>
<html>

<head>
		<a href="index.php"><h1>HOME</h1></a>

<script>
function validateForm() {
    var x = document.forms["myForm"]["nm","pwd"].value;
    if (x == "") {
        alert("all data must be filled out");
        return false;
    }
}


</script>
</head>
	<body>
		<h2>please login </h2>

	<form name="myForm" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validateForm()" method="post">

		<!--creating name field-->
				
			<div>
                <label>username</label>
			    <input type="text" name="nm"><br>
			</div>
		<!-- creating password field-->
		    <div>
		    	<label>password</label>
		    	<input type="text" name="pwd"><br>
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
	$query = "SELECT * FROM games WHERE name ='".$nm."' AND password ='".$pwd."'";

	$result = mysqli_query($connection,$query);	
	$rows = mysqli_num_rows($result);
	if($rows == 1){
		echo "Login Successfull";
		header("Location:enterdata.php");
	}else{
		echo "failed";
	}

}
 ?>
