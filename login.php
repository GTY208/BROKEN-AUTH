<?php

include "db.php";


$email = $_POST["email"];
$password = $_POST["password"];

print "email: ". $email . "<br>" ."password: ". $password;

$myConn = new DB;


$query = "SELECT * FROM user WHERE email = 'email'";

$result = $myConn->executeSQL($query);


gettype($result);

if (!empty($result)) {
    echo "<br> Invalid login! <br>";
    
} else {
    echo "<br> Login as $email <br>";
}

?>

