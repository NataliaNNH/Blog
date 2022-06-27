<?php

include("../include/url_users.php");

if(isset($_POST['submit'])) {

    $username=$_POST['username'];
    $password=$_POST['password'];


    /* Sprawdza poprawdnosc*/
    $query="SELECT * FROM users WHERE username='$username' AND password='$password' ";
    $conn =mysqli_connect("localhost","root","","blog");
    $result=mysqli_query($conn , $query);
    //$rows=1;

    /* Niepoprawne */
    if($result==FALSE) {
        printf("Query failed \n");
        header("location:login.php");
    }

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;

        $detail=mysqli_fetch_assoc($result);
        $_SESSION['usertype']=$detail['usertype'];

        /* Powrot do poprzedniej strony*/
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    } else {
        echo "
		<div class=\"alert alert-danger container\" role=\"alert\">
	  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
	  <span class=\"sr-only\">Error:</span>
	   Błędna nazwa użytkownika lub hasło
		</div>
		";
    }
} else {
    if(!isset($_SESSION['username'])) {
        echo "
			<div class=\"alert alert-danger\" role=\"alert\">
		  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
		  <span class=\"sr-only\">Error:</span>
		   Login Again
			</div>
			";
    } else {
        header("location:../index.php");
    }
}
?>
