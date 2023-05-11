<?php
if (!is_user_logged_in()) {
    wp_redirect(site_url('/login'));
    exit();
}
?>
<?php get_header(); ?>

<?php
$user = get_user_info();
?>

<div class="container-fluid bg-light pt-5 pb-5">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-lg-6 col-md-8 col-sm-10 bg-white pt-2 pb-2 ms-4 shadow-sm rounded-1 border mb-4">
            <div>
                <h5 class="fw-bold text-center">Account Information</h5>
            </div>
            <hr class="opacity-25">
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-end pe-5 align-items-center gap-1">
                    <ion-icon name="pencil" class="text-primary"></ion-icon>
                    <a href="http://localhost/shopit/account-update/" class="link-primary text-decoration-none cursor-pointer">Edit</a>
                </div>
                <div class="d-flex flex-row gap-5 align-items-center justify-content-start ps-3">
                    <div class="fw-bold text-start">
                        <ul class="list-unstyled">
                            <li>Name:</li>
                            <li>Email:</li>
                            <li>Phone:</li>
                        </ul>
                    </div>
                    <div class="text-start">
                        <ul class="list-unstyled">
                            <li><?php echo $user['fullname']; ?></li>
                            <li><?php echo $user['email']; ?></li>
                            <li><?php echo $user['phone']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="opacity-25">
            <div>
                <h5 class="fw-bold text-center">Address Information</h5>
            </div>
            <hr>
            <div class="d-flex flex-column lh-1 ps-3">
                <h6 class="fw-bold">Default shipping address:</h6>
                <p><?php echo $user['address']; ?></p>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>