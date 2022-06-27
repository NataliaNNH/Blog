<?php
/* z bazdy danych */
$query="SELECT * FROM comments WHERE postID='$id' ";

$conn =mysqli_connect("localhost","root","","blog");
$result=mysqli_query($conn , $query);

if($result) {
    echo "
        <div class='panel-footer'>
        Comments
        </div>
        ";
    if(mysqli_num_rows($result) > 0) {
        while($comment=mysqli_fetch_assoc($result)) {
            include("../include/frame_comment.php");
        }
    }
} else {
    echo "Nieprawidlowe";
}
?>
