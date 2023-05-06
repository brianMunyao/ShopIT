<?php get_header(); ?>

<div class="p-3 mb-2 pt-5 bg-light text-dark ">
    <div class=" row grid gap-5  ms-4  ">

        <!-- ITEMS PRESENT IN THE CART -->
        <div class="col-lg-8 p-3 mb-2 bg-white text-dark border shadow-sm col-xs-2 col-sm-4 col-md-6 ">
            <h5>Cart (1)</h5>
            <hr class="opacity-25 w-100">
            <div class="container text-center ">
                <div class="row">
                    <div class="col d-flex flex-row ">
                    
                        <img src="<?php echo esc_url(get_template_directory_uri().'./pimages/sony.png') ?> " class="rounded float-start w-50 h-100" alt="...">

                    </div>
                    <div class="col-6 pt-3">
                        <p>Oraimo Roll Wireless Earbuds Bluetooth Headset Earphones</p>
                    </div>
                    <div class="col d-flex flex-row-reverse ">
                        <p class="fw-bold ">KSh 39,799 <br>
                         <span class="text-decoration-line-through opacity-50">
                                KSh 42,999
                            </span><span class="text-danger d-flex flex-row-reverse lh-sm"><br>-35% </span></p>
                    </div>

                </div>
                <div class="row ">
                    <div class="col d-flex flex-row px-4">
                        <a href="" class="text-decoration-none text-danger"> <ion-icon name="trash-outline"></ion-icon>REMOVE</a>
                    </div>
                    <div class="col d-flex flex-row-reverse ">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary px-2">-</button>

                            </div> &nbsp;
                            <div class="btn-group btn-sm mr-2" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-white">2</button>

                            </div>  &nbsp;
                            <div class="btn-group " role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary px-2">+</button>

                            </div> &nbsp;
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- CART SUMMARY -->
        <div class=" col-lg-3 p-3 mb-2 bg-white text-dark border shadow-sm col-xs-2 col-sm-2 col-md-4">
            <div class="description">
                <h6>Cart Summary</h6>
                <hr class="opacity-25">
                <div class="row lh-lg">
                    <div class="col-6 ">Subtotal</div>
                    <div class="col-6 ">Ksh. 10,998</div>
                    <div class="col-6">Delivery</div>
                    <div class="col-6">Ksh. 300</div>
                </div>
                <hr class="opacity-25 mb-1 mt-1">
                <div class="row lh-lg fw-bold ">
                    <div class="col-6">Total</div>
                    <div class="col-6">Ksh. 11,298</div>
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