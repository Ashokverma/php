<!DOCTYPE html>
<html>
<head>
	<title>Form </title>
</head>
<body>

	<form method="GET" action="">
		
		<input type="text" name="name" placeholder="Enter Your Name " /><br/><br/>
		<input type="email" name="email" placeholder="Enter your Email" /><br/><br/>
		<input type="number" name="mobile" placeholder=" Enter Your Mobile Number " /><br/><br/>
		<input type="submit" name="x" >

	</form>

	<?php 

	if(isset($_GET['x'])){
		#code
		$name=$_GET['name'];
		$email=$_GET['email'];
		$number=$_GET['mobile'];

		echo $name;
		echo $email;
		echo $number;
	}

	?>

</body>
</html>