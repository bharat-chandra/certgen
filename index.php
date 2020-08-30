<?php
if(isset($_GET['name'])){
    $name = $_GET['name'];
    header("location:image.php?name=$name");
}
 else {
     echo "<form action=\"image.php\" method=\"POST\" style=\"padding-top:50px;padding-bottom:20px;background-color:skyblue\"><input size=\"50\" name=\"name\" type=\"text\" placeholder=\"enter your name to be printed on certificate\"><br><input size=\"50\" name=\"email\" type=\"email\" placeholder=\"enter your email-id\"><br><button type=\"submit\">=> submit <=</button></form><br><div class=\"container text-center img-thumbnail\" style=\"margin-top:8%;background-color:blue\">"
    . "<h1 style=\"color:white\">This is a certificate generator</h1>"
            . "</div>"
             ."<h1 style=\"left\">Developed by &copyBharat Chandra</h1><br><h1 style=\"left\">contact:bharat.chandra200@gmail.com</h1>";
            die();
}
?>




