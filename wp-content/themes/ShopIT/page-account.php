<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>

        <div class="container-fluid bg-light pt-3">
            <div class="row justify-content-start align-items-center h-100">
                <div class="col-lg-6 col-md-8 col-sm-10 bg-white pt-2 pb-2 ms-4 shadow-sm rounded-1 border mb-4">
                    <div>
                        <h5 class="fw-bold text-center">Account Information</h5>
                    </div>
                    <hr class="opacity-25">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-end pe-5 align-items-center gap-1">
                            <ion-icon name="pencil" class="text-primary"></ion-icon>
                            <a href="#" class="link-primary text-decoration-none cursor-pointer">Edit</a>
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
                                    <li>John Doe</li>
                                    <li>john@yahoo.org</li>
                                    <li>+254700001111</li>
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
                        <p>Nairobi</p>
                        <p>Dagoreti North/Upper Hill</p>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>