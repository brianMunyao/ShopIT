<?php
if (!is_user_logged_in()) {
    wp_redirect(site_url('/login'));
    exit();
}
?>
<?php get_header(); ?>

<?php
$user = get_user_info();

$error = 'Error updating user';


if (isset($_POST['update_user_btn'])) {
    $db_user = [
        'ID' => $user['id'],
        'user_login' => $_POST['email'],
        'user_pass' => $_POST['password']
    ];

    $user_update = [];
    $user_update['fullname'] = $_POST['fullname'];
    $user_update['phone'] = $_POST['phone'];
    $user_update['address'] = $_POST['address'];

    $id = wp_update_user($db_user);
    if (!is_wp_error($id)) {
        echo "<p class='success'>$error</p>";
        sleep(3);
        $error = '';
    }

    // foreach ($user_update as $key => $value) {
    //     update_user_info($user['id'], $key, $value);
    //     wp_update_user()
    // }
}

?>





<div class="bg-light pt-4 ps-4 d-flex align-items-center justify-content-center">
    <div class="bg-white rounded pt-4 pb-3 pe-3 ps-3 d-flex flex-column justify-content-center align-items-center shadow-sm rounded-1 border mb-4 me-4">
        <div class="mx-auto text-center mb-3">
            <h3 class="fw-bold">Update Your Information</h3>
        </div>



        <form action="" method="POST" class="w-100">
            <div class="col g-2 mb-3 ">
                <div class="input-con">
                    <label for="fullname">Full Name</label>
                    <div>
                        <ion-icon name="person-outline"></ion-icon>
                        <input class="" type="text" name="fullname" placeholder="Enter your full name" value="<?php echo $user['fullname']; ?>" required />
                    </div>
                </div>
                <div class="input-con">
                    <label for="email">Email</label>
                    <div>
                        <ion-icon name="mail-outline"></ion-icon>
                        <input class="" type="email" name="email" placeholder="Enter your email" value="<?php echo $user['email']; ?>" required />
                    </div>
                </div>
                <div class="input-con">
                    <label for="phone">Phone Number</label>
                    <div>
                        <ion-icon name="call-outline"></ion-icon>
                        <input class="" type="text" name="phone" placeholder="Enter your phone number" value="<?php echo $user['phone']; ?>" required />
                    </div>
                </div>
                <div class="input-con">
                    <label for="address">Address</label>
                    <div>
                        <ion-icon name="home-outline"></ion-icon>
                        <input class="" type="text" name="address" placeholder="Enter your address" value="<?php echo $user['address']; ?>" required />
                    </div>
                </div>
                <div class="input-con">
                    <label for="email">Password</label>
                    <div>
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input class="" type="password" name="password" placeholder="Enter your password" required />
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" name="update_user_btn" class="btn btn-primary w-100">Update</button>
            </div>
        </form>
    </div>
</div>



<?php get_footer(); ?>