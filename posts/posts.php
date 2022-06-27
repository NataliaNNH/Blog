<?php
include("../include/url_posts.php");
include_once("../include/algos.php");

?>

<?php

/* Sprawdzanie czy uzytkownik istnieje */
$query="SELECT * FROM posts ORDER BY postTime DESC";
$conn =mysqli_connect("localhost","root","","blog");
$result=mysqli_query($conn , $query);
if(mysqli_num_rows($result) > 0) {
    while($post=mysqli_fetch_assoc($result)) {
        $id=$post['postID'];
        $title=$post['postTitle'];
        $desc=$post['postDesc'];
        $tags=$post['postTag'];
        $author=$post['postAuthor'];
        $time=$post['postTime'];
        $shortpost=1;  /* krotki post z 'wiecej'  */
        $views=showViews($id,$author);

        include("../include/frame_post.php");
    }
}

?>
