<?php

include("../db/dbconnect.php");

if(!isset($_REQUEST['username'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    $username=$_REQUEST['username'];
}


/* usuwa */
$query="DELETE FROM users
		WHERE username='$username'
		";

$conn =mysqli_connect("localhost","root","","blog");
$result=mysqli_query($conn , $query);

if($result==TRUE) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Coś poszło nie tak. Spróbuj ponownie później.";
}

?>
