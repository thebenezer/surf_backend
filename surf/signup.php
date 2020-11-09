<form action="includes/signup.inc.php" method="POST" class="ls-form">

        <label class="ls-label">
            <input type="text" name="uid"/>
            <div class="ls-label-text">Username</div>
        </label>
        <label class="ls-label">
            <input type="email" name="mail" />
            <div class="ls-label-text">E-mail</div>
        </label>
        <label class="ls-label">
            <input type="password" name="pwd" />
            <div class="ls-label-text">Password</div>
        </label>
        <label class="ls-label">
            <input type="password" name="conf_pwd" />
            <div class="ls-label-text">Confirm Password</div>
        </label>

        <button type="submit" class="btn" name="signup-submit">Sign-up</button>    
    </form>