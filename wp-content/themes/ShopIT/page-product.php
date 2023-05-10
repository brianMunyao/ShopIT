<?php get_header(); ?>
<?php

global $wpdb;
$table_name = $wpdb->prefix . "products";
$data = $wpdb->get_results("SELECT * FROM $table_name ");

$index = '14';

?>

<div class=" bg-light text-dark --bs-secondary-color-rgb w-100 overflow-hidden ">
    <div class=" row grid gap-5 ps-5  mb-5 mt-3">
        <div class="col-md-8  bg-white text-dark border shadow-sm ">
            <div class="d-flex">
                <div class=" d-flex flex-row ">
                    <div class="d-flex flex-column ">
                        <?php for ($i = 0; $i < 4; $i++) { ?>
                            <picture class="d-flex flex-column  float-start p-images w-75 h-50 gap-2 lh-sm  ">
                                <source srcset="" type="image/svg+xml">
                                <img src="<?php echo $data[$index]->product_image; ?> " class=" d-flex flex-column w-75 h-50" alt="...">
                            </picture>
                        <?php } ?>
                    </div>

                    <img src="<?php echo $data[$index]->product_image; ?> " class="float-end w-75 h-75" alt="...">
                </div>
            </div>
        </div>
        <div class=" col-md-3 p-4 mb-2 bg-white text-dark border shadow-sm h-50  ">
            <div class="description">
                <p>Brand: &nbsp; <?php echo $data[$index]->product_brand; ?></p>
                <h6><?php echo $data[$index]->product_name; ?></h6>
                <img src="/ShopIT/p-images/" alt="">
                <div class="d-flex flex-row gap-row-2 stars">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p class="fw-bold"> Ksh.&nbsp;<?php echo $data[14]->product_price; ?></p>
                <p class=""> <span class="text-decoration-line-through opacity-50">Ksh. &nbsp;
                        <?php echo $data[14]->initial_price; ?>
                    </span><span class="text-success"> &nbsp; -35% </span></p>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" name="add_to_cart" type="button">Add to Cart</button>
                </div>
            </div>
        </div>


    </div>

    <div class="column grid mr-2">

        <div class="col-md-8 px-4 mb-2 bg-white text-dark border shadow-sm ms-4 mb-5 ">
            <div class="description">
                <h5 class="pt-2">Description</h5>
                <hr class="opacity-25">
                <p><?php echo $data[$index]->product_description; ?></p>
            </div>

        </div>

        <div class="col-md-8 round-1 px-3 mb-2 bg-white text-dark border shadow-sm ms-4 mb-5  ">
            <div class="reviews">
                <h5 class="pt-2">Customer Reviews</h5>
                <hr>
                <div class="d-flex flex-row gap-5 ">
                    <h3 class="fw-bold "><span class="text-warning"> 5</span> /5 </h3>
                    <div class="w-75">
                        <p>5 stars &nbsp; <button class="btn btn-secondary w-75" type="button"></button></p>
                        <p>4 stars &nbsp;<button class="btn btn-secondary w-0" type="button"></button></p>
                        <p>3 stars &nbsp;<button class="btn btn-secondary w-0" type="button"></button></p>
                        <p>2 stars &nbsp;<button class="btn btn-secondary w-0" type="button"></button></p>
                        <p>1 star &nbsp; &nbsp;<button class="btn btn-secondary w-0" type="button"></button></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 rounded-1 px-3 mb-2 bg-white text-dark border shadow-sm ms-4 mb-5  ">
            <div class="reviews">
                <h5 class="pt-2">Martin M.</h5>
                <div class="d-flex flex-row gap-row-2 stars">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <hr>
                <img src="" alt="">
                <p>Used fir steaming service quality was excellent I will guarantee it to my friends and family. I am sure they will love it and appreciate it as much as I have enjoyed the experience of being able to try out and enjoying the product. </p>
            </div>
        </div>



        <div class="col-md-8 p-3 mb-2 bg-white text-dark border shadow-sm ms-4 rounded-1 mb-3">
            <h5>You may also like</h5>
            <hr>
            <div class="likes d-flex justify-content-center grid gap-2">
                <?php
                for ($i = 1; $i <= 4; $i++) {
                ?>
                    <div class="rounded-1 border shadow-sm p-4 lh-base col-sm-2 w-25 h-50">
                        <img src="<?php echo esc_url(get_template_directory_uri() . './pimages/oraimo1.jpg') ?>" class="w-100 h-75" alt="">
                        <p>oraimo earpods<br>
                            <span class="fw-bold">KSh. 5,499</span><br>
                            <span class="text-decoration-line-through opacity-50">KSh. 6,499</span>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>