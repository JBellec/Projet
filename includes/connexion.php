<form class="form-signin" method ="post" action="includes/act_login.php">
    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" required autofocus>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    <label class="checkbox">
    <input type="checkbox" value="remember-me"> Remember me
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-sign-in"></i> Sign in</button>
    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="self.location.href='inscription.php'"><i class="fa fa-pencil-square-o"></i> Sign up</button>
</form>
