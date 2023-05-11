<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="overall-nav">

        <?php

        $slug = basename(get_permalink());
        $logo_url = get_template_directory_uri() . "/assets/logo-cart.png";

        $searchterm = isset($_GET['q']) ? $_GET['q'] : '';
        $category = isset($_GET['cat']) ? $_GET['cat'] : '';

        if ($slug == 'register' || $slug == 'login') {
        ?>
            <nav class="nav-login">
                <a href="/shopit/">
                    <img src='<?php echo $logo_url; ?>' class="logo" alt='logo' />
                </a>
            </nav>

        <?php
        } else {
            if (is_user_logged_in()) {
                $user = get_user_info();
                $fullname = $user['fullname'];
                $names = explode(' ', $fullname);

                $firstname = $names[0];
                $user_id = $user['id'];
                global $wpdb;

                $cart_items = $wpdb->get_results("SELECT * FROM wp_cart JOIN wp_products ON wp_products.p_id=wp_cart.p_id  WHERE user_id=$user_id");
            }
        ?>
            <nav class="nav-main">
                <a href="/shopit">
                    <img src='<?php echo $logo_url; ?>' class="logo" alt='logo' />
                </a>

                <div class="nav-search-con">
                    <div class="nav-dropdown">
                        <button class="nav-dropbtn">Categories <ion-icon name="caret-down"></ion-icon></button>
                        <div class="nav-dropdown-content">
                            <a href="/shopit/products?cat=computing">Computing</a>
                            <a href="/shopit/products?cat=tv, audio and video">TV, Audio & Video</a>
                            <a href="/shopit/products?cat=phone and accessories">Phone & Accessories</a>
                            <a href="/shopit/products?cat=appliances">Appliances</a>
                        </div>
                    </div>
                    <form role="search" action="/shopit/products" method="get">
                        <div class="search-con">
                            <input type="search" placeholder="What are you looking for?" name="q" value="<?php echo $searchterm; ?>">
                            <ion-icon name="search"></ion-icon>
                        </div>
                    </form>
                </div>
                <input type="submit" style="position:absolute;height:0;width:0;display:none;" name="searchsubmit" />

                <div class="nav-right-links">
                    <div class="nav-btn" id="account-btn">
                        <ion-icon name="person-outline"></ion-icon>

                        <span><?php
                                echo (is_user_logged_in()) ?  $firstname : "Account";
                                ?></span>
                    </div>

                    <a href="/shopit/cart">
                        <div class="nav-btn" id="cart-btn">
                            <ion-icon name="cart-outline"></ion-icon>

                            <span>Cart <?php echo is_user_logged_in() ? "(" . count($cart_items) . ")" : ''; ?></span>
                        </div>
                    </a>
                </div>

                <div class="account-drop" id="account-drop">
                    <a href="/shopit/account" class="ad">
                        <ion-icon name="person-outline"></ion-icon>
                        Account
                    </a>
                    <?php
                    if (is_user_logged_in()) {
                    ?><form action="logout.php" method="POST">
                            <input class="custom-btn" type="submit" value="Logout">
                        </form>
                    <?php
                    } else {
                    ?>
                        <a href="/shopit/login">
                            <button class="custom-btn">
                                SIGNIN
                            </button>
                        </a>
                    <?php
                    }
                    ?>

                </div>

            </nav>

            <div class="nav-bottom">
                <div class="nav-search-con">
                    <div class="nav-dropdown">
                        <button class="nav-dropbtn">Categories <ion-icon name="caret-down"></ion-icon></button>
                        <div class="nav-dropdown-content">
                            <a href="/shopit/products?cat=computing">Computing</a>
                            <a href="/shopit/products?cat=tv, audio and video">TV, Audio & Video</a>
                            <a href="/shopit/products?cat=phone and accessories">Phone & Accessories</a>
                            <a href="/shopit/products?cat=appliances">Appliances</a>
                        </div>
                    </div>
                    <form role="search" action="/shopit/products" method="get">
                        <div class="search-con">
                            <input type="search" placeholder="What are you looking for?" name="q" value="<?php echo $searchterm; ?>" />
                            <ion-icon name="search"></ion-icon>
                        </div>
                        <input type="submit" style="position:absolute;height:0;width:0;display:none;" name="searchsubmit" />
                    </form>
                </div>
            </div>

            <!-- NAVWALKER -->
            <!-- <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/shopit/"><img src='<?php echo $logo_url; ?>' class="logo" alt='logo' /></a>
                <?php
                // wp_nav_menu(
                //     array(
                //         'theme_location' => 'primary',
                //         'depth' => 2,
                //         'container' => 'div',
                //         'container_class' => 'collapse navbar-collapse',
                //         'container_id' => 'bs-example-navbar-collapse-1',
                //         'menu_class' => 'nav navbar-nav',
                //         'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                //         'walker' => new WP_Bootstrap_Navwalker(),
                //     )
                // );
                ?>
            </div>
        </nav> -->

        <?php
        }

        ?>
    </div>