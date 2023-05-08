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
            }




            // $user = wp_get_current_user();
            // $email = $user->user_email;
            // $id = $user->ID;

            // $user_meta = get_user_meta($id);
            // $fullname = $user_meta['fullname'][0];
            // $names = explode(' ', $fullname);

            // echo array_shift($names);
            // var_dump($names);

            // echo $names[0];
        ?>
            <nav class="nav-main">
                <a href="/shopit/">
                    <img src='<?php echo $logo_url; ?>' class="logo" alt='logo' />
                </a>

                <div class="nav-search-con">
                    <div class="nav-dropdown">
                        <button class="nav-dropbtn">Categories <ion-icon name="caret-down"></ion-icon></button>
                        <div class="nav-dropdown-content">
                            <a href="#">Computing</a>
                            <a href="#">TV, Audio & Video</a>
                            <a href="#">Phone & Accessories</a>
                            <a href="#">Appliances</a>
                        </div>
                    </div>
                    <div class="search-con">
                        <input type="text" placeholder="What are you looking for?">
                        <ion-icon name="search"></ion-icon>
                    </div>
                </div>

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

                            <span>Cart</span>
                        </div>
                    </a>
                </div>

                <div class="account-drop" id="account-drop">
                    <a href="/shopit/account">
                        <ion-icon name="person-outline"></ion-icon>
                        Account
                    </a>
                    <a href="/shopit/#">
                        <ion-icon name="storefront-outline"></ion-icon>
                        Orders
                    </a>

                    <?php
                    if (is_user_logged_in()) {
                    ?>
                        <input class="custom-btn" type="submit" value="Logout">
                    <?php
                    } else {
                    ?>
                        <button class="custom-btn">SIGNIN</button>
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
                            <a href="#">Computing</a>
                            <a href="#">TV, Audio & Video</a>
                            <a href="#">Phone & Accessories</a>
                            <a href="#">Appliances</a>
                        </div>
                    </div>
                    <div class="search-con">
                        <input type="text" placeholder="What are you looking for?">
                        <ion-icon name="search"></ion-icon>
                    </div>
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