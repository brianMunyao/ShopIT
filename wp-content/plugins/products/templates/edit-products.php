<?php
if (!isset($_POST['edit_id'])) {
    echo "<script>window.location='http://localhost/shopit/wp-admin/admin.php?page=all_products';</script>";
}
// get product from db to edit a 

if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];

    global $wpdb;

    $data = $wpdb->get_results("SELECT * FROM wp_products WHERE p_id=$id");

    $prod = $data[0]; // object retrieved frrom db at index 0
}
?>

<div style="width:50%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-left: 20em; margin-top:1em;">
    <form method="post" style="width:30vw; box-shadow: 2px 2px 2px 2px grey;padding: 2em 3em; line-height: 2em; border-radius: 5px; background-color:#FFFFFF">

        <h1 style="text-align:center;">Edit A Product</h1>
        <input type="hidden" name="p_id" value="<?php echo $prod->p_id ?>">

        <div>
            <label>Product Name:</label><br>
            <input type="text" style="width:100%;" placeholder="Enter product name" name="p_name" value="<?php echo $prod->product_name ?>" required>
        </div>
        <div>
            <label>Product Brand: </label><br>
            <input type="text" style="width:100%;" placeholder="Enter product brand" name="p_brand" value="<?php echo $prod->product_brand ?>" required><br>

        </div>
        <div>
            <label>Product Description: </label><br>
            <input type="text" style="width:100%;" placeholder="Enter product description" name="p_desc" value="<?php echo $prod->product_description ?>" required><br>

        </div>
        <div>
            <label>Category:</label><br>
            <select name="p_category" id="" style="width:100%" required>
                <option value="Select Category" selected disabled hidden>Select Category</option>
                <option value="Computing" <?php echo $prod->product_category === "Computing" ? 'selected' : '' ?>>Computing</option>
                <option value="TV, Audio and Video" <?php echo $prod->product_category === "TV, Audio and Video" ? 'selected' : '' ?>>TV, Audio & Video</option>
                <option value="Phone and Accessories" <?php echo $prod->product_category === "Phone and Accessories" ? 'selected' : '' ?>>Phone & Accessories</option>
                <option value="Appliances" <?php echo $prod->product_category === "Appliances" ? 'selected' : '' ?>>Appliances</option>
            </select>
        </div>

        <div>
            <label>Initial Price:</label><br>
            <input type="number" style="width:100%;" placeholder="Enter initial price" name="init_price" value="<?php echo $prod->initial_price ?>" required>
        </div>

        <div>
            <label>Product Price:</label><br>
            <input type="number" style="width:100%;" placeholder="Enter product price" name="p_price" value="<?php echo $prod->product_price ?>" required>
        </div>
        <div>
            <label>Product SKU:</label><br>
            <input type="text" style="width:100%;" placeholder="Enter product SKU" name="p_SKU" value="<?php echo $prod->product_SKU ?>" required>
        </div>
        <div>
            <label>Image url:</label><br>
            <input type="text" style="width:100%; margin-bottom: 5px;" placeholder="Enter url" name="img_url" value="<?php echo $prod->product_image ?>" required>
        </div>

        <button type="submit" style="width:100%; background-color:#0071DC; color:white; padding:7px; border-radius: 5px; font-size: 14px; border: none; margin-top:10px;" name="submit_edit_product">Submit</button>
    </form>
</div>