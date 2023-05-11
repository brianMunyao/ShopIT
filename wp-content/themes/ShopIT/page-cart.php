<?php get_header(); ?>

<?php
$user = get_user_info();
$user_id = $user['id'];
global $wpdb;

$cart_items = $wpdb->get_results("SELECT * FROM wp_cart JOIN wp_products ON wp_products.p_id=wp_cart.p_id  WHERE user_id=$user_id");

$sub_total = 0;
foreach ($cart_items as $item) {
    $sub_total += $item->product_price * $item->quantity;
}

$delivery = 300;


?>

<div class="p-3 mb-2 pt-5 bg-light text-dark ">
    <div class=" row grid gap-5  ms-4  ">

        <!-- ITEMS PRESENT IN THE CART -->
        <div class="col-md-8 p-3 mb-2 bg-white text-dark border shadow-sm  ">
            <h5>Cart (<?php echo count($cart_items); ?>)</h5>
            <?php
            for ($i = 0; $i < count($cart_items); $i++) {
            ?>
                <hr class="opacity-25 w-100">

                <div class="container text-center ">
                    <div class="row">
                        <div class="col d-flex flex-row ">

                                <img src="<?php echo $cart_items[$i]->product_image; ?>" class="rounded float-start w-50 h-100" alt="...">
                          
                            </div>
                        <div class="col-6 pt-3">
                        <a href="<?php echo site_url("/product?id={$cart_items[$i]->p_id}") ?>">

                            <p><?php echo $cart_items[$i]->product_name; ?></p>
                        </a>
                        </div>
                        <div class="col d-flex flex-row-reverse ">
                            <p class="fw-bold "><?php echo add_commas($cart_items[$i]->product_price); ?> <br>
                                <span class="text-decoration-line-through opacity-50">
                                    <?php echo add_commas($cart_items[$i]->initial_price); ?>
                                </span><span class="text-success d-flex flex-row-reverse lh-sm"><br>-<?php echo floor((1 - ($cart_items[$i]->product_price / $cart_items[$i]->initial_price)) * 100); ?>%</span>
                            </p>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col">
                            <form action="" method="post">

                                <div class="col d-flex flex-row px-4">
                                    <input type="hidden" name="p_id" value="<?php echo $cart_items[$i]->p_id ?>">
                                    <button class="btn btn-danger btn-sm mt-2 " type="submit" name="remove_from_cart"> <ion-icon name="trash-outline"></ion-icon>REMOVE</button>
                                </div>
                            </form>

                        </div>
                        <div class="col d-flex flex-row-reverse ">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <form action="" method="post">
                                    <input type="hidden" name="p_id" value="<?php echo $cart_items[$i]->p_id; ?>">
                                    <input type="hidden" name="decrease_quantity" value="<?php echo  $cart_items[$i]->quantity - 1; ?>">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <button type="submit" name="decrease_item_in_cart" class="btn btn-secondary px-2">-</button>

                                    </div> &nbsp;
                                </form>

                                <div class="btn-group btn-sm mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-white"><?php echo $cart_items[$i]->quantity; ?></button>

                                </div> &nbsp;
                                <form action="" method="post">
                                    <input type="hidden" name="p_id" value="<?php echo $cart_items[$i]->p_id; ?>">
                                    <input type="hidden" name="increase_quantity" value="<?php echo  $cart_items[$i]->quantity + 1; ?>">

                                    <div class="btn-group " role="group" aria-label="First group">
                                        <button type="submit" name="increase_item_in_cart" class="btn btn-secondary px-2">+</button>

                                    </div> &nbsp;
                                </form>
                            </div>

                        </div>
                    </div>

                </div>

            <?php
            }

            if (count($cart_items) === 0) {
            ?>

                <div class="no-products">
                    No products in cart
                </div>

            <?php
            }


            ?>

        </div>

        <!-- CART SUMMARY -->
        <div class=" col-md-3 p-3 mb-2 bg-white text-dark border shadow-sm h-25 ">
            <div class="description">
                <h6>Cart Summary</h6>
                <hr class="opacity-25">
                <div class="row lh-lg">
                    <div class="col-6 ">Subtotal</div>
                    <div class="col-6 "><?php echo add_commas($sub_total); ?></div>
                    <div class="col-6">Delivery</div>
                    <div class="col-6"><?php echo add_commas($delivery); ?></div>
                </div>
                <hr class="opacity-25 mb-1 mt-1">
                <div class="row lh-lg fw-bold ">
                    <div class="col-6">Total</div>
                    <div class="col-6"><?php echo add_commas($sub_total + $delivery); ?></div>
                </div>
            </div>
            <div class="d-grid gap-2 mt-1">
                <button class="btn btn-primary" type="button">Checkout</button>
            </div>
        </div>
    </div>
</div>
</div>


<?php get_footer(); ?>