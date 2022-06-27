<?php

include("../db/dbconnect.php");

if(!isset($_REQUEST['postid'])) {
    header("location:post.php?id=".$id);
} else {
    $postid=$_REQUEST['postid'];
}
/* usuniecie */
$query="DELETE FROM posts
		WHERE postID='$postid'
		";
$conn =mysqli_connect("localhost","root","","blog");
$result=mysqli_query($conn , $query);

/* usuniecie */
$query="DELETE FROM user_post
		WHERE postID='$postid'
		";

$result=mysqli_query($conn , $query);

/* usueniecie */
$query="DELETE FROM comments
				WHERE postID='$postid'";

$result=mysqli_query($conn , $query);

if($result==TRUE) {
    header("location:posts.php");
} else {
    echo "Błąd";
}

?>
