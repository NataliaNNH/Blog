
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Profil </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img alt="User Pic" src="http://anonco.pl/contents/icons/computing/user.png" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Imię</td>
                                    <td><?php echo $row['firstname']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nazwa użytkownika</td>
                                    <td><?php echo $row['username']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $row['emailid']; ?></td>
                                </tr>
                                </tr>
                                </tbody>
                            </table>
                            <a href=<?php echo "../posts/post.php?user=".$_REQUEST['user']; ?> class="btn btn-default">Moje posty</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
