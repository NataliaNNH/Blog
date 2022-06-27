<?php

/* inkrementacja */
function increament_views($id , $author) {

    include("../db/dbconnect.php");
    $query="SELECT *
          FROM user_post
          WHERE postID='$id'
          ";
    $conn =mysqli_connect("localhost","root","","blog");
    $result=mysqli_query($conn , $query);

    if($result==true) {
        if(mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)) {
                $views=$row['postViews'];
                $views = $views + 1;

                $query="UPDATE user_post
                      SET postViews='$views'
                      WHERE postID='$id'
                      ";
                $res=mysqli_query($conn , $query);

                if($res) {
                } else {
                    echo "Blad z wyswietleniami";
                }

                return $row['postViews'];
            }
        } else {
            $query="INSERT INTO user_post (postAuthor , postID ,postLikes , postDisLikes ,postComments ,postViews)
                  VALUES ('$author' , '$id' , '0' , '0' , '0' , '1')";
            $result=mysqli_query($conn , $query);

            if($result) {
                return 1;
            } else {
                echo "Bląd";
            }
        }
    } else {
        echo "Nie można załadować wyświetleń";
    }

}

return 0;

?>
/* wyswietlenia */
<?php
function showViews($id , $author)  {
    include("../db/dbconnect.php");
    $conn =mysqli_connect("localhost","root","","blog");
    $query="SELECT *
          FROM user_post
          WHERE postID='$id'
          ";
    $result=mysqli_query($conn , $query);
    if($result) {
        if(mysqli_num_rows($result)==1) {
            while($row=mysqli_fetch_assoc($result)) {
                return $row['postViews'];
            }
        } else {
            return 0;
        }
    }
    return 0;
}
?>
