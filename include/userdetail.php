<?php
$username=$_SESSION['username'];
$newpost_url='newpost.php';
$profile_url='../users/profile.php';
$logout_url='../users/logout.php';
?>
<ul class="nav navbar-nav">
    <li><a href=<?php echo $newpost_url ?> >
            <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>
        </a>
    </li>
    <li>
        <a href=<?php echo $profile_url; echo "?user=".$username; ?> >
            Witaj <?php echo "$username" ?>
        </a>
    </li>
    <li>
        <a href=<?php echo $logout_url ?> >
            <span class="glyphicon glyphicon glyphicon-off" aria-hidden="true"></span> <!-- bootstrap -->
        </a>
    </li>
</ul>
