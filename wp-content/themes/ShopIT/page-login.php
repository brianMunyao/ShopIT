<form method="post" action="">
    <div class="custom-form">
        <?php get_header(); ?>
        <div class="form-con">

            <h1>Login</h1>

            <div class="input-con">
                <label for="email">Email</label>
                <div>
                    <ion-icon name="mail-outline"></ion-icon>
                    <input class="" type="email" name="email" placeholder="Enter your email" required />
                </div>
            </div>

            <div class="input-con">
                <label for="email">Password</label>
                <div>
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" placeholder="Enter your password" required />
                </div>
            </div>

            <button class="custom-btn" name="submit" type="submit">SUBMIT</button>

            <p class="form-alt-text">
                Don't have an account? <a href="/shopit/register">Register</a>
            </p>
        </div>

    </div>
</form>