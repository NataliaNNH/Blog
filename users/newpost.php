<?php

include("../include/url_users.php");

/* Jezeli nie ejst sie zalogowanym to */
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

if(isset($_POST['submit'])) {

    $postTitle=$_POST['title'];
    $postDesc=$_POST['description'];
    $postTag=$_POST['tag'];
    $postAuthor=$_SESSION['username'];

    include("../db/dbconnect.php");

    /*Sprawdza czy uzytkownik istnieje */
    $query="INSERT INTO posts (postTitle , postDesc , postTag , postAuthor)
			VALUES ('$postTitle' , '$postDesc' , '$postTag' , '$postAuthor') ";
    $conn =mysqli_connect("localhost","root","","blog");
    mysqli_query($conn , $query);

    printf("Post wstawiony\n");
}

/* jak ma wygladac post */
else {
    echo "
		<form action='newpost.php' method='POST' >
			Tytul : <input type='text' name='title'></br>
			Opis : <input type='text' name='description'></br>
			Tagi : <input type='text' name='tag'></br>
			<input type='submit' name='submit' value='Publish'></br>
		</form>
	";
}


?>