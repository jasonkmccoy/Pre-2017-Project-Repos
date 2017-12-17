<div class="home-page-login">
    <form class="login-form" method="POST" action="login.php">
        <div class="label-container">
            <label class="login-label" for="email">
                Email
            </label>
            <div class="input-container">
                <input class="login-input" type="email" name="email" id="email" required="required" />
            </div>
        </div>
        <div class="label-container">
            <label class="login-label" for="password">
                Password
            </label>
            <div class="input-container">
                <input class="login-input" type="password" name="password" id="password" required="required" />
            </div>
        </div>
        <div class="incorrect"></div>
        <button type="button" class="blue-btn">Forgot?</button>
        <button type="submit" class="green-btn">Login</button>
    </form>
    <script type="text/javascript">
    document.getElementById('email').focus();
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="chat/js/widget.js"></script>
</div>
