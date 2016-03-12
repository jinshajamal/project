<?php

if(isset($_POST['register'])){	
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	//do the sanity check
	$valid=true;
if($name="") {
	echo "invalid";
	$valid=false;
}
if($email="") {
	echo "invalid";
	$valid=false;
}

if($password="") {
	echo "invalid";
	$valid=false;
}

if($repassword="") {
	echo "invalid";
	$valid=false;
} 
if($password==$repassword){
echo "success";
} 
if($valid) {
	//connect to database
	
		$conn = new mysqli("localhost", "root", "", "chat");
	//insert the values 
		$sql_query = "INSERT INTO chatp(id, name, email,password) VALUES(NULL,'$name','$email','$password');";

//echo "## $sql_query ##";php");

		
		$result = $conn -> query($sql_query);
		if ($result) {
			echo "Insert into DB Success";
		} else {
			echo "Insert into DB Failed";
		}
		// Close the Connection

		$conn -> close();
}

	}require_once("./views/templates/header.php");
require_once("./header.php");


?>
<div class="col-md-12">
	<form method="post">
		<div class="form-group">
			<label for="txtName">
				Name	
			</label>
			<input type="text" name="name" id="txtName" class="form-control">
		</div>
		<div class="form-group">
			<label for="txtphone">
				phone	
			</label>
			<input type="text" name="phone" id="txtphone" class="form-control">
		</div>
		<div class="form-group">
			<label for="txtadd">
				Address	</br>
			</label>
			<textarea name="txtadd" rows="3" cols="40"  class="form-control"></textarea>
		</div>
		
		<div class="form-group">
			<label for="txtEmail">
				Email
			</label>
			<input type="text" name="email" id="txtEmail" class="form-control">
		</div>
		<div class="form-group">
				<div class="form-group">
			<label for="pswdPassword">
				Password
			</label>
			<input type="password" name="password" id="pswdPassword" class="form-control">
		</div>
		<div class="form-group">
			<label for="pswdRepassword">
				Re-Enter Password
		</label>
			<input type="password" name="repassword" id="pswdRepassword" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="register" value="Register" class="form-control btn btn-primary">
		</div>
	</form>
</div>
<?php
require_once("./views/templates/footer.php");
?>

