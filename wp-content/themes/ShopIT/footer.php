<?php
$logo_url = get_template_directory_uri() . "/assets/logo-cart.png";
?>
<footer>
    <div class="footer-top">
        <div class="ft-col">
            <img class="logo" src="<?php echo $logo_url; ?>" alt="logo">
        </div>
        <div class="ft-col">
            <div class="ft-header">
                LET US HELP YOU
            </div>
            <a href="#">
                Frequently Asked Questions
            </a>
            <a href="#">
                Contact Us
            </a>
        </div>
        <div class="ft-col">
            <div class="ft-header">
                ABOUT SHOPIT
            </div>
            <a href="#">
                Privacy Policy
            </a>
            <a href="#">
                About Us
            </a>
        </div>
        <div class="ft-col">
            <div class="ft-header">
                FOLLOW US ON
            </div>
            <a href="#">
                <ion-icon name="logo-instagram"></ion-icon>shop_it
            </a>
            <a href="#">
                <ion-icon name="logo-facebook"></ion-icon>
                shopit
            </a>
            <a href="#">
                <ion-icon name="logo-youtube"></ion-icon>
                ShopitKE
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2023 ShopIT. All rights reserved.
    </div>

    <?php // wp_nav_menu(['theme_location' => 'secondary']); 
    ?>
</footer>

<?php wp_footer(); ?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>