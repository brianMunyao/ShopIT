<?php get_header(); ?>

<div class="p-3 mb-2 pt-5 bg-light text-dark ">
    <div class=" row grid gap-5  ms-4 max-width: 100%; ">

        <!-- ITEMS PRESENT IN THE CART -->
        <div class="col-8 p-3 mb-2 bg-white text-dark border shadow-sm ">
            <h5>Cart (1)</h5>
            <hr class="opacity-25">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <img src="https://cdn.pixabay.com/photo/2016/03/21/21/37/tv-1271650__340.png" class="img-fluid img-thumbnail w-50 h-75  " alt="..."><br>
                        <div class="d-flex flex-row">
                            <a href="" class="text-decoration-none text-danger"> <ion-icon name="trash-outline">REMOVE</ion-icon></a>
                            <!-- <p>REMOVE</p> -->

                        </div>

                    </div>
                    <div class="col-6">
                        <p>Oraimo Roll Wireless Earbuds Bluetooth Headset Earphones</p>
                    </div>
                    <div class="col">
                        <p class="fw-bold">KSh 39,799</p>
                        <p class=""> <span class="text-decoration-line-through opacity-50">
                                KSh 42,999
                            </span><span class="text-success"><br>-35% </span></p>
                    </div>
                </div>

            </div>
        </div>

        <!-- CART SUMMARY -->
        <div class=" col-3 p-3 mb-2 bg-white text-dark border shadow-sm w-25 h-50">
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
                <button class="btn btn-secondary" type="button">Cashout</button>
            </div>
        </div>
    </div>


</div>
</div>


<?php get_footer(); ?>