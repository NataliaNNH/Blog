<?php

if(isset($_POST['submit'])) {
    if (!$_POST['name']) {
        $errName = 'Wprowadź imię';
    }

    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Wprowadź poprawny mail';
    }

    if (!$_POST['message']) {
        $errMessage = 'Wprowadź wiadomość';
    }
} else {
    $errName="";
    $errEmail="";
    $errMessage="";

}
?>

<div class="container">
    <div class="col-sm-10" >
        <form class="form-horizontal" role="form" method="post" action="contact_us.php">
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Imię</label>
                <div class="col-sm-6 ">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Imię" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-3 control-label">Wiadomość</label>
                <div class="col-sm-6">
                    <textarea class="form-control" rows="4" name="message" placeholder="Wpisz wiadomość.." required></textarea>
                </div>
            </div>
           <!-- <div class="form-group">
                <label for="human" class="col-sm-3 control-label">2+2 = ?</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="human" name="human" placeholder="odpowiedź">
                    <?php echo "<p class='human'>$erreasycaptcha</p>";?>
                </div> -->
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <?php
                    if(isset($result))
                        echo $result;
                    ?>
                </div>
            </div>
        </form>
    </div>
</div>
