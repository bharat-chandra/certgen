<?php

$con = mysqli_connect("localhost", "root", "", "certgen")or die(mysqli_error($con));
if(isset($_POST['name'])){
	$name = $_POST['name'];
        $name = mysqli_real_escape_string($con,$name);
        $email = $_POST['email'];
        $email = mysqli_real_escape_string($con,$email);
        echo $name."<br>".$email."<br>";
        $query = "INSERT INTO users(name,email) VALUES('" . $name . "','" . $email . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
 
}
else{
	$name_get = $_GET['name'];
}
?>
<!DOCKTYPE html>
<html>
<head>
	<title>E-Certificate | generator</title>
</head>
<body>
<?php
if(isset($_POST['name'])){

	echo "<a href=\"render.php?name=$name\" download><img src=\"render.php?name=$name\" alt=\"hmmm !!!\" height=\"550px\" width=\"850px\"></a>"."<br>"."<h3>tap on image to download 😎🎉</h3>";
}
else{
echo "<a href=\"render.php?name=$name_get\" download><img src=\"render.php?name=$name_get\" alt=\"hmmm !!!\" height=\"550px\" width=\"850px\"></a>"."<br>"."<h3>tap on image to download 😎🎉</h3>";
}
?>
</body>
</html> 
