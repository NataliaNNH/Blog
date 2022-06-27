<?php
include("../include/url_posts.php");
if(!isset($_REQUEST['id'])) {
	header("posts.php");
}

if(!isset($_POST['submit'])) {

	include("../db/dbconnect.php");

	$id=$_REQUEST['id'];

	$query="SELECT * FROM posts WHERE postID='$id' ";
	$conn =mysqli_connect("localhost","root","","blog");
	$result=mysqli_query($conn , $query);

	if(mysqli_num_rows($result) > 0) {
		$post=mysqli_fetch_assoc($result);

		/* Autor postu moze go edytowac */
		if($_SESSION['username']  != $post['postAuthor'] && $_SESSION['usertype']!='admin') {
			 printf("You are not valid user to update this post");
			 header("location:post.php?id=".$post['postID']);
		}

		$id=$post['postID'];
		$desc=$post['postDesc'];
		$title=$post['postTitle'];
		$tags=$post['postTag'];
		$author=$post['postAuthor'];

		include("../include/frame_update.php");

	} else {
		echo "Taki post nie istnieje";
	}
}
else {
	include("../db/dbconnect.php");

	echo "hello";

	$id=$_REQUEST['id'];
	$desc=$_POST['postDesc'];
	$title=$_POST['postTitle'];
	$tags=$_POST['postTag'];
	echo "ID : " .$id;

	$query="UPDATE posts
			SET postTitle='$title' , postDesc='$desc' , postTag='$tags'
			WHERE postID='$id';
			";
	$conn =mysqli_connect("localhost","root","","blog");
	$result=mysqli_query($conn , $query);

	if($result) {
		echo "Zaktualizowano pomyślnie!";
		header("location:post.php?id=".$id);
	} else {
		echo "updation failed";
		header("location:update.php?id='$id' ");
	}

}

?>
