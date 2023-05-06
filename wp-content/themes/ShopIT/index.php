<?php get_header(); ?>
<?php
$tv_url = get_template_directory_uri() . "/assets/sony-tv.png";
?>

<div class="home-container">
    <div class="home-hero">
        <div class="categories">
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
        </div>

        <div class="top-deal">

            <div class="top-deal-info">
                <h2>BIG DEALS ON SCREENS</h2>
                <p>Up to 20% OFF</p>
            </div>

            <img src="<?php echo $tv_url; ?>" alt="sony-tv">

        </div>
    </div>

    <div class="products-section">
        <div class="products-section-header">
            <span>Phone Accessories</span>
            <!-- <span>Phone</span> -->
        </div>

        <div class="products-section-content">
            <?php
            for ($i = 0; $i < 12; $i++) {
            ?>
                <div class="product">
                    <div class="product-img">
                        <img src="<?php echo $tv_url; ?>" alt="sony-tv">
                    </div>

                    <div class="product-info">
                        <p class="product-name">
                            SONY 65" Class CU7000B Crystal UHD 4K UHD Smart TV UN65CU7000BXZA 2023
                        </p>
                        <p class="product-price">
                            Ksh. 5,499
                        </p>
                        <p class="product-price-original">
                            Ksh. 6,499
                        </p>
                    </div>

                    <!-- <button class="custom-btn" onclick="">ADD TO CART</button> -->
                </div>
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
            <?php
            for ($i = 0; $i < 2; $i++) {
            ?>
                <div class="featured-product">


                    <div class="product-info">
                        <p class="product-category">
                            TVS
                        </p>
                        <p class="low">As low as</p>
                        <p class="product-price">
                            Ksh. 20,000
                        </p>
                    </div>

                    <div class="product-img">
                        <img src="<?php echo $tv_url; ?>" alt="sony-tv">
                    </div>

                    <!-- <button class="custom-btn" onclick="">ADD TO CART</button> -->
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    <div class="products-section">
        <div class="products-section-header">
            <span>Phone Accessories</span>
            <!-- <span>Phone</span> -->
        </div>

        <div class="products-section-content">
            <?php
            for ($i = 0; $i < 12; $i++) {
            ?>
                <div class="product">
                    <div class="product-img">
                        <img src="<?php echo $tv_url; ?>" alt="sony-tv">
                    </div>

                    <div class="product-info">
                        <p class="product-name">
                            SONY 65" Class CU7000B Crystal UHD 4K UHD Smart TV UN65CU7000BXZA 2023
                        </p>
                        <p class="product-price">
                            Ksh. 5,499
                        </p>
                        <p class="product-price-original">
                            Ksh. 6,499
                        </p>
                    </div>

                    <!-- <button class="custom-btn" onclick="">ADD TO CART</button> -->
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>