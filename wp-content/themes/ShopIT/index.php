<?php get_header(); ?>
<?php
$hero_url = get_template_directory_uri() . "/assets/hero-img.png";
$microwave = get_template_directory_uri() . "/assets/microwave.png";
$refrigerator = get_template_directory_uri() . "/assets/refrigerator.png";

global $wpdb;

$products = $wpdb->get_results("SELECT * FROM wp_products");
?>

<div class="home-container">
    <div class="home-hero">
        <!-- <div class="categories">
            <p>Categories</p>
            <div>
                <a href="#">
                    <div>Computing</div>
                </a>
                <a href="#">
                    <div>TV, Audio & Video</div>
                </a>
                <a href="#">
                    <div>Phone & Accessories</div>
                </a>
                <a href="#">
                    <div>Appliances</div>
                </a>
            </div>
        </div> -->

        <div class="top-deal">

            <div class="top-deal-info">
                <h2>BIG DEALS ON ELECTRONICS</h2>
                <p>Up to 20% OFF</p>
            </div>

            <img src="<?php echo $hero_url; ?>" alt="sony-tv">

        </div>
    </div>

    <div class="products-section">
        <?php
        $category = 'Phone and Accessories';
        $phone_accessories = $wpdb->get_results("SELECT * FROM wp_products WHERE product_category='$category'");

        ?>
        <div class="products-section-header">
            <span><?php echo $category; ?></span>
            <a href='<?php echo "/shopit/products?cat=$category" ?>'>See All <ion-icon name='arrow-forward'></ion-icon></a>
        </div>

        <div class="products-section-content">
            <?php
            for ($i = 0; $i < min(10, count($phone_accessories)); $i++) {
            ?>
                <a href="<?php echo "/shopit/product?id={$phone_accessories[$i]->p_id}" ?>">
                    <div class="product">
                        <div class="product-img">
                            <img src="<?php echo $phone_accessories[$i]->product_image; ?>" alt="product">

                        </div>

                        <div class="product-info">
                            <p class="product-name">
                                <?php echo $phone_accessories[$i]->product_name; ?>
                            </p>
                            <p class="product-price">
                                <?php echo add_commas($phone_accessories[$i]->product_price); ?>
                            </p>
                            <p class="product-price-original">
                                <?php echo add_commas($phone_accessories[$i]->initial_price); ?>
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


    <div class="products-section">
        <div class="products-section-header">
            <span>Hot Deals</span>
            <!-- <span>Phone</span> -->
        </div>

        <div class="featured-section-content">
            <div class="featured-product">
                <div class="product-info">
                    <p class="product-category">
                        Microwaves
                    </p>
                    <p class="low">As low as</p>
                    <p class="product-price">
                        Ksh. 10,000
                    </p>
                </div>

                <div class="product-img">
                    <img src="<?php echo $microwave; ?>" alt="microwave">
                </div>
            </div>
            <div class="featured-product">
                <div class="product-info">
                    <p class="product-category">
                        Refrigerators
                    </p>
                    <p class="low">As low as</p>
                    <p class="product-price">
                        Ksh. 20,000
                    </p>
                </div>

                <div class="product-img">
                    <img src="<?php echo $refrigerator; ?>" alt="re$refrigerator">
                </div>
            </div>
        </div>
    </div>


    <div class="products-section">
        <?php
        $category = 'Appliances';
        $appliances = $wpdb->get_results("SELECT * FROM wp_products WHERE product_category='$category'");
        ?>
        <div class="products-section-header">
            <span><?php echo $category; ?></span>
            <a href='<?php echo "/shopit/products?cat=$category" ?>'>See All <ion-icon name='arrow-forward'></ion-icon></a>
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

    <div class="products-section">
        <?php
        $category = 'TV, Audio and Video';
        $tv_audio = $wpdb->get_results("SELECT * FROM wp_products WHERE product_category='$category'");
        ?>
        <div class="products-section-header">
            <span><?php echo $category; ?></span>
            <a href='<?php echo "/shopit/products?cat=$category" ?>'>See All <ion-icon name='arrow-forward'></ion-icon></a>
        </div>


        <div class="products-section-content">
            <?php
            for ($i = 0; $i < min(6, count($tv_audio)); $i++) {
            ?>
                <a href="<?php echo "/shopit/product?id={$tv_audio[$i]->p_id}" ?>">
                    <div class="product">
                        <div class="product-img">
                            <img src="<?php echo $tv_audio[$i]->product_image; ?>" alt="product">

                        </div>

                        <div class="product-info">
                            <p class="product-name">
                                <?php echo $tv_audio[$i]->product_name; ?>
                            </p>
                            <p class="product-price">
                                <?php echo add_commas($tv_audio[$i]->product_price); ?>
                            </p>
                            <p class="product-price-original">
                                <?php echo add_commas($tv_audio[$i]->initial_price); ?>
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