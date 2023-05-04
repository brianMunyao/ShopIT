<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>

        <div class="w-100 bg-light vh-100">
            <div class="w-50 bg-white d-flex flex-column pt-2 pb-2">
                <div>
                    <h5 class="fw-bold text-center">Account Information</h5>
                </div>
                <hr>
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-end pe-5 align-items-center gap-1">
                        <ion-icon name="pencil" class="text-primary"></ion-icon>
                        <a href="#" class="link-primary text-decoration-none cursor-pointer">Edit</a>
                    </div>
                    <div class="d-flex flex-row gap-5 align-items-center justify-content-start ps-3">
                        <div class="fw-bold text-start">
                            <ul class="list-unstyled">
                                <li>Name: </li>
                                <li>Email: </li>
                                <li>Phone: </li>
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
                <hr>
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

        <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>