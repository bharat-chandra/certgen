<?php
if(isset($_POST['name'])){
    $con = pg_connect("host=ec2-54-160-120-28.compute-1.amazonaws.com port=5432 dbname=d2ib5a7lhgeh8c user=yfxarbzyzkexkk password=2006061801baaaaf230e4d2ee2a707686f3ea03f3023d150ddbd88ea0ad77751")or die(pg_errormessage($connection));
	$name = $_POST['name'];
        $email = $_POST['email'];
        $query = "INSERT INTO users(name,email) VALUES('" . $name . "','" . $email . "')";
        $result = pg_query($con, $query) or iferror($name);
 	if($result){
		ifnoerror($name);
	}
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
function iferror($name){
if(isset($_POST['name'])){
	echo "<a href=\"render.php?name=$name\" download><img src=\"render.php?name=$name\" alt=\"hmmm !!!\" height=\"550px\" width=\"850px\"></a>"."<br>"."<h3>tap on image to download 😎🎉</h3>";
echo "<br>"."query unsucess , but no issues !!!";
}
else{
echo "<a href=\"render.php?name=$name_get\" download><img src=\"render.php?name=$name_get\" alt=\"hmmm !!!\" height=\"550px\" width=\"850px\"></a>"."<br>"."<h3>tap on image to download 😎🎉</h3>";
}
}
function ifnoerror($name){
if(isset($_POST['name'])){
	echo "<a href=\"render.php?name=$name\" download><img src=\"render.php?name=$name\" alt=\"hmmm !!!\" height=\"550px\" width=\"850px\"></a>"."<br>"."<h3>tap on image to download 😎🎉</h3>";
echo "<br>"."query success";
}
else{
echo "<a href=\"render.php?name=$name_get\" download><img src=\"render.php?name=$name_get\" alt=\"hmmm !!!\" height=\"550px\" width=\"850px\"></a>"."<br>"."<h3>tap on image to download 😎🎉</h3>";
}
}
?>
</body>
</html> 
