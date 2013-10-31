<form class="form-inline" method='POST' action='/users/p_login'>


    <input type="text" class="input-small" placeholder="Email" name="email">
    <input type="password" class="input-small" placeholder="Password" name="password">
    <label class="checkbox">
        <input type="checkbox"> Remember me
    </label>
    <button type="submit" class="btn">Sign in</button>
</form>

    <br><br>



    <?php if(isset($error)): ?>
        <p class="error">
            Login failed. Please double check your email and password.
        </p>
        <br>
    <?php endif; ?>