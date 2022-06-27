<?php
include("../include/url_users.php");
/* Jezeli zaglogowany*/
if(isset($_SESSION['username'])) {
    header('Location:../index.php');
}
if(isset($_POST['submit'])) {
    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    include("../db/dbconnect.php");
    /* Sprawdza czy uzytkownik dalej istnieje */


    $conn =mysqli_connect("eu-cdbr-west-02.cleardb.net","b67d3db54acc4f","78247360","@eu-cdbr-west-02.cleardb.net");
    $query="SELECT * FROM users WHERE username='$username'";
    $result=mysqli_query($conn , $query);
    $rows=mysqli_num_rows($result);

    $query2="SELECT * FROM users WHERE emailid='$emailid'";
    $result2=mysqli_query($conn , $query2);
    $rows2=mysqli_num_rows($result2);


    if($rows > 0) {
        header("location:registeragain.php");
    } else if ($rows2 > 0){
        header("location:registermailexists.php");
    }else{
        $query="INSERT INTO users_buffer (username, firstname, password, emailid)
				VALUES ('$username','$firstname','$password','$emailid')";
        mysqli_query($conn , $query);
        header("location:../index.php");
        }
}
    else {
    include("../include/frame_register.php");
    }
?>
