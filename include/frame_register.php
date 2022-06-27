<div class="container">

    <form class="form-horizontal col-sm-offset-2" role="form" action="register.php" method="post" >

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Nazwa Użytkownika</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="username" placeholder="Nazwa Użytkownika" name="username" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Imię </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Imię " required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">E mail </label>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="email" placeholder="Email" name="emailid " required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Hasło:</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="pwd" placeholder="hasło" name="password" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <button type="submit" class="btn btn-default" name="submit">Rejestracja</button>
            </div>
        </div>


    </form>

</div>
