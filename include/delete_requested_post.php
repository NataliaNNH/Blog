<?php
include("../db/dbconnect.php");

if(!isset($_REQUEST['id'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    $postid=$_REQUEST['id'];
}

echo $postid;

/* usuwa z postow */
$query="DELETE FROM posts_buffer
		WHERE postID='$postid'
		";
$conn =mysqli_connect("localhost","root","","blog");
$result=mysqli_query($conn , $query);

if($result==TRUE) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Coś poszło nie tak. Spróbuj ponownie później";
}

?>
