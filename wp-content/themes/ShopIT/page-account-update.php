<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <div class="bg-light pt-4 ps-4 d-flex align-items-center justify-content-start">
            <div class="bg-white rounded pt-4 pb-3 pe-3 ps-3 d-flex flex-column justify-content-center align-items-center shadow-sm rounded-1 border mb-4">
                <div class="mx-auto text-center mb-3">
                    <h2 class="fw-bold">Update Your Information</h2>
                </div>
                <form action="#" method="POST" class="w-100">
                    <div class="col g-2 mb-3">
                        <div class="col-md-6 mb-2">
                            <label for="full-name" class="form-label">Full Name</label>
                            <div class="position-relative">
                                <ion-icon name="person-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 8%;"></ion-icon>
                                <input type="text" name="full-name" id="full-name" placeholder="Enter your full name" class="form-control" style="padding-left: 15%;" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <div class="position-relative">
                                <ion-icon name="mail-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 8%;"></ion-icon>
                                <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" style="padding-left: 15%;" />
                            </div>
                        </div>
                    </div>
                    <div class="col g-2 mb-3">
                        <div class="col-md-6 mb-2">
                            <label for="phone-number" class="form-label">Phone Number</label>
                            <div class="position-relative">
                                <ion-icon name="call-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 8%;"></ion-icon>
                                <input type="text" name="phone-number" id="phone-number" placeholder="Enter your phone number" class="form-control" style="padding-left: 15%;" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <div class="position-relative">
                                <ion-icon name="lock-closed-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 8%;"></ion-icon>
                                <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" style="padding-left: 15%;" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <div class="position-relative">
                            <ion-icon name="home-outline" class="position-absolute top-50 translate-middle" style="width: 18px; height: 18px; left: 8%;"></ion-icon>
                            <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control" style="padding-left: 15%;" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </div>
                </form>
            </div>
        </div>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>