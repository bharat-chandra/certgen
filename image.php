<?php

$con = pg_connect("host=ec2-54-160-120-28.compute-1.amazonaws.com port=5432 dbname=d2ib5a7lhgeh8c user=yfxarbzyzkexkk password=2006061801baaaaf230e4d2ee2a707686f3ea03f3023d150ddbd88ea0ad77751");
if(isset($_POST['name'])){
	$name = $_POST['name'];
        $email = $_POST['email'];
        echo $name."<br>".$email."<br>";
        $query = "INSERT INTO users(name,email) VALUES('" . $name . "','" . $email . "')";
        pg_query($con, $query);
 
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
