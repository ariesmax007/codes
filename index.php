<!DOCTYPE html>
<html>

<head>
	
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
		<h2>Register </h2>

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

		  <!--  <div>
		    	<label>confirm pass</label>
		    	<input type="text" name="pwds"><br>
		    </div>  -->

		    <input type="submit" value = 'submit' name = 'submit' id="submit">

		</form>

		<a href="login.php"><h4>login</h4></a>

		
	</body>
</html>


<?php
extract($_POST);
include 'config.php';
if(isset($_POST['submit']))
{
	$query = "INSERT INTO games(name,password)
	          values('".$nm."','".$pwd."')";

	$result = mysqli_query($connection,$query);	

	if($result){
		echo " Data insert successfull";
	}else{
		echo "Insert failed";
	}

}
 ?>
