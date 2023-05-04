<form method="post" action="">
    <div class="custom-form">
        <?php get_header(); ?>

        <div class="form-con">

            <h2>Register</h2>

            <div class="input-con">
                <label for="fullname">Fullname</label>
                <div>
                    <ion-icon name="person-outline"></ion-icon>
                    <input id="fullname" class="" type="text" name="fullname" placeholder="Enter your fullname" required />
                </div>
            </div>

            <div class="input-con">
                <label for="email">Email Address</label>
                <div>
                    <ion-icon name="mail-outline"></ion-icon>
                    <input id="email" type="email" name="email" placeholder="Enter your email address" required />
                </div>
            </div>
            <div class="input-con">
                <label for="phone">Phone Number</label>
                <div>
                    <ion-icon name="call-outline"></ion-icon>
                    <input id="phone" class="" type="tel" name="phone" placeholder="Enter your phone number" required />
                </div>
            </div>

            <div class="input-con">
                <label for="password">Password</label>
                <div>
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input id="password" type="password" name="password" placeholder="Enter your password" required />
                </div>
            </div>

            <button class="custom-btn" name="submit" type="submit">SUBMIT</button>

            <p class="form-alt-text">
                Already have an account? <a href="/shopit/login">Login</a>
            </p>
        </div>

    </div>
</form>