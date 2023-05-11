<?php get_header(); ?>

<div class="products-container">
    <?php

    $searchterm = isset($_GET['q']) ? $_GET['q'] : '';
    $category = isset($_GET['cat']) ? $_GET['cat'] : '';

    $query = "SELECT * FROM wp_products ";
    $where_added = false;
    if ($searchterm !== '') {
        $query .= " WHERE product_name LIKE '%$searchterm%' OR product_description LIKE '%$searchterm%'  ";
        $where_added = true;
    }
    if ($category !== '') {
        if ($where_added) {
            $query .= " OR product_category='$category'";
        } else {
            $query .= " WHERE product_category='$category'";
        }
    }
    global $wpdb;

    $products = $wpdb->get_results($query);

    if ($category === '' && $searchterm === '') {
        echo "<h4>For you</h4>";
    } else {

        $results_for =  "<h4>" . count($products) . " result(s) for "  . ($searchterm !== '' ? "'$searchterm'" : '') . ($category !== '' ? " '$category'" : '') . "</h4>";
        echo $results_for;
    }


    if (count($products) > 0) {
    ?>

        <div class="products-section-content">
            <?php
            for ($i = 0; $i < count($products); $i++) {
            ?>
                <a href="<?php echo "/shopit/product?id={$products[$i]->p_id}" ?>" class="custom-link">
                    <div class="product">
                        <div class="product-img">
                            <img src="<?php echo $products[$i]->product_image; ?>" alt="product">

                        </div>

                        <div class="product-info">
                            <p class="product-name">
                                <?php echo $products[$i]->product_name; ?>
                            </p>
                            <p class="product-price">
                                <?php echo add_commas($products[$i]->product_price); ?>
                            </p>
                            <p class="product-price-original">
                                <?php echo  add_commas($products[$i]->initial_price); ?>
                            </p>
                        </div>

                        <!-- <button class="custom-btn" onclick="">ADD TO CART</button> -->
                    </div>
                </a>
            <?php
            }
        } else {
            ?>

            <div class="no-products">
                No Available products
            </div>

        <?php } ?>


        </div>

</div>


<?php get_footer(); ?>