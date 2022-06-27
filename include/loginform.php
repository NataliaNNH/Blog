<form class="navbar-form navbar-left" action=<?php echo $login_url; ?> method="POST">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Użytkownik" name="username">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Hasło" name="password">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Zaloguj się</button>
    <a href=<?php echo
    $register_url='../users/register.php';
    $register_url; ?> class="btn btn-default">Zarejestruj się</a>
</form>
