<?php get_header(); ?>
<?php
$id = $_GET['id'];

global $wpdb;
$table_name = $wpdb->prefix . "products";
$data = $wpdb->get_results("SELECT * FROM $table_name WHERE p_id=$id");


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
                                <img src="<?php echo $data[0]->product_image; ?> " class=" d-flex flex-column w-75 h-50" alt="...">
                            </picture>
                        <?php } ?>
                    </div>

                    <img src="<?php echo $data[0]->product_image; ?> " class="float-end w-75 h-75" alt="...">
                </div>
            </div>
        </div>
        <div class=" col-md-3 p-4 mb-2 bg-white text-dark border shadow-sm h-50  ">
            <div class="description">
                <p>Brand: &nbsp; <?php echo $data[0]->product_brand; ?></p>
                <h6><?php echo $data[0]->product_name; ?></h6>
                <img src="/ShopIT/p-images/" alt="">
                <div class="d-flex flex-row gap-row-2 stars">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p class="fw-bold"> Ksh.&nbsp;<?php echo $data[0]->product_price; ?></p>
                <p class=""> <span class="text-decoration-line-through opacity-50">Ksh. &nbsp;
                        <?php echo $data[0]->initial_price; ?>
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
                <p><?php echo $data[0]->product_description; ?></p>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt illo suscipit voluptates atque autem ullam aut, eaque, est, dolor esse ipsum. Ratione voluptatibus id molestiae minus, corporis laboriosam excepturi itaque!</p>
            </div>
        </div>

        <div class="products-section">
            <?php
            $appliances = $wpdb->get_results("SELECT * FROM wp_products WHERE product_category='{$data[0]->product_category}'");
            ?>
            <div class="products-section-header">
                <span>You may also like</span>
            </div>


            <div class="products-section-content">
                <?php
                for ($i = 0; $i < min(6, count($appliances)); $i++) {
                ?>
                    <a href="<?php echo "/shopit/product?id={$appliances[$i]->p_id}" ?>">
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo $appliances[$i]->product_image; ?>" alt="product">

                            </div>

                            <div class="product-info">
                                <p class="product-name">
                                    <?php echo $appliances[$i]->product_name; ?>
                                </p>
                                <p class="product-price">
                                    <?php echo add_commas($appliances[$i]->product_price); ?>
                                </p>
                                <p class="product-price-original">
                                    <?php echo add_commas($appliances[$i]->initial_price); ?>
                                </p>
                            </div>

                            <!-- <button class="custom-btn" onclick="">ADD TO CART</button> -->
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>