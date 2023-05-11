<?php
if (is_user_logged_in()) {
    wp_redirect(home_url());
}


$error = '';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = wp_signon([
        'user_login' => $email,
        'user_password' => $password
    ]);

    if (!is_wp_error($user)) {
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);
        do_action('wp_login', $user->user_login, $user);

        wp_redirect(home_url());
        exit;
    }
    // // echo count($user->errors);
    // if (count($user->errors) > 0) {
    //     // $error = $user->errors;
    //     var_dump($user->errors);
    // } else {
    // }
    $error = "Invalid username or password";
}
?>

<form method="post" action="">
    <div class="custom-form">
        <?php get_header(); ?>
        <div class="form-con">

            <h1>Login</h1>

            <?php
            echo "<p class='form-error'>" . $error . "</p>";
            ?>

            <div class="input-con">
                <label for="email">Email</label>
                <div>
                    <ion-icon name="mail-outline"></ion-icon>
                    <input class="" type="text" name="email" placeholder="Enter your email" required />
                </div>
            </div>

            <div class="input-con">
                <label for="email">Password</label>
                <div>
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" placeholder="Enter your password" required />
                </div>
            </div>

            <button class="custom-btn" name="submit" type="submit">LOGIN</button>

            <p class="form-alt-text">
                Don't have an account? <a href="/shopit/register">Register</a>
            </p>
        </div>

    </div>
</form>