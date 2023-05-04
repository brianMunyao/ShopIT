<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <div class="bg-light w-100 vh-100">
            <div class="bg-white w-50 rounded pt-4 pb-3 d-flex flex-column justify-content-center align-items-center">
                <div class="mx-auto text-center ">
                    <h2 class="font-bold text-justify">Update Your Information</h2>
                </div>
                <form action="#" method="POST">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="mt-2>
                            <label for=" full-name" class="mb-2">Full Name</label>
                            <div class="position-relative mb-2">
                                <ion-icon name="person-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 5%;"></ion-icon>
                                <input type="text" name="full-name" id="full-name" placeholder="Enter your full name" class="pt-1 pb-1 bg-white" style="width: 350px; padding-left: 10%">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="email">Email</label>
                            <div class="position-relative mb-2">
                                <ion-icon name="person-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 5%;"></ion-icon>
                                <input type="email" name="email" id="email" placeholder="Enter your email" class="pt-1 pb-1 bg-white" style="width: 350px; padding-left: 10%">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="phone-number">Phone Number</label>
                            <div class="position-relative mb-2">
                                <ion-icon name="person-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 5%;"></ion-icon>
                                <input type="text" name="phone-number" id="phone-number" placeholder="Enter your phone number" class="pt-1 pb-1 bg-white" style="width: 350px; padding-left: 10%">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="password">Password</label>
                            <div class="position-relative mb-2">
                                <ion-icon name="person-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 5%;"></ion-icon>
                                <input type="password" name="password" id="password" placeholder="Enter your password" class="pt-1 pb-1 bg-white" style="width: 350px; padding-left: 10%">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="address">Address</label>
                            <div class="position-relative mb-2">
                                <ion-icon name="person-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 5%;"></ion-icon>
                                <input type="text" name="address" id="address" placeholder="Enter your address" class="pt-1 pb-1 bg-white" style="width: 350px; padding-left: 10%">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 ">
                        <button type="submit" class="btn btn-dark text-white p-1" style="width: 350px">Update</button>
                    </div>
                </form>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>