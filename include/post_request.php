<?php

if(!isset($_SESSION['username'])){
    header('Location:../index.php');
}
else if($_SESSION['usertype']!='admin') {
    header('Location:../index.php');
}
else {
    $user=$_SESSION['username'];
}
$query="SELECT * FROM posts_buffer";
$conn = mysqli_connect("localhost", "root","", "blog");

$result=mysqli_query($conn , $query );

if($result) {
    if(mysqli_num_rows($result)==0) {
        echo "Brak próśb";
    }

    else if(mysqli_num_rows($result)>0) {
        while($row=mysqli_fetch_assoc($result)) {
            include("frame_post_requested.php");
        }
    }
} else {
    echo "błąd";
}

?>
