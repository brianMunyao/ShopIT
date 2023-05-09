<?php

/**
 * Template Name: Adding Products
 * 
 */
get_header(); ?>

<div class="w-50 d-flex flex-column justify-content-center align-items-center ms-5 mt-5">
    <form method="post" style="width:40vw; box-shadow: 2px 2px 2px 2px grey;padding: 3em 3em; line-height: 2em; border-radius: 5px">

        <div class="form-group ">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter product name" name="p_name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Product Description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter product price" name="p_desc">

        </div>
        <div class="form-group ">
            <select name="p_category" id="" class="w-100">
                <option value="Computing">Computing</option>
                <option value="TV,Audio & Video">TV, Audio & Video</option>
                <option value="Phone & Accessories">Phone & Accessories</option>
                <option value="Appliances">Appliances</option>

            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Initial Price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter initial price" name="init_price">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Product Price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter product price" name="p_price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Product SKU</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter product SKU" name="p_SKU">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image url</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter url" name="img_url">
        </div>


        <button type="submit" class="btn btn-primary w-100 " name="submitbtn">Submit</button>
    </form>
</div>