<?php
include("../include/url_users.php");
?>
<?php
if (isset($_POST["submit"])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    $query="INSERT INTO messages (name , email , message )
          VALUES (' $name' , '$email' , '$msg' )";
    $conn =mysqli_connect("localhost","root","","blog");
    $result=mysqli_query($conn , $query);

    if($result) {
        echo "Wiadomość wysłano pomyślnie";
    } else {
        echo "Błąd";
    }
}

else {
    include("../include/frame_contact_us.php");
}
?>
