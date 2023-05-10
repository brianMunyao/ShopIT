<?php
global $wpdb;
$table_name = $wpdb->prefix . 'products';

//to edit a product of a given id
// if (isset($_POST['delete_btn'])) {


//to delete a product of a given id
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $result = $wpdb->query("DELETE FROM $table_name WHERE p_id=$id");

    if (!$result) {
        $error = "Error deleting product";
    }
}

$products = $wpdb->get_results("SELECT * FROM wp_products");

?>

<style>
    button {
        font-size: 14px;
        font-weight: 600;
        width: 100%;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.1s linear;
    }

    .admin-products {
        padding: 20px 20px 20px 0;
    }


    table {
        width: 100%;
        border: 1px solid teal;
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid teal;
        padding: 7px;
        text-align: left;
    }

    .delete-link {
        color: red;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    table td,
    table th {
        border: 2px solid rgba(0, 128, 128, 0.1);
    }

    table th {
        background: rgba(0, 128, 128, 0.1);
        color: rgb(69, 69, 69);
    }

    table td,
    table th {
        padding: 6px 10px;
        text-align: left;
    }

    .btn-delete {
        background: #ff6347;
        color: #fff;
    }

    .btn-edit {
        background: #1e90ff;
        color: #fff;
    }

    .btn-edit:hover {
        background: #137ae0;
    }

    .btn-delete:hover {
        background: #ff3916;
    }

    .btn-edit:active {
        background: #1378dc;
    }

    .btn-delete:active {
        background: #e42200;
    }

    .success,
    .error {
        display: none;
        font-size: 15px;
        padding: 10px;
        border-radius: 6px;
    }

    .success {
        color: rgb(10, 159, 44);
        background: rgba(10, 159, 44, 0.2);
    }

    .error {
        color: rgb(159, 10, 20);
        background: rgba(159, 10, 20, 0.2);
    }

    .success:empty,
    .error:empty {
        background: yellow;
    }
</style>

<div class="admin-products">
    <p class="success" id="success-msg"><?php echo AddProducts::$success; ?></p>
    <p class="error" id="error-msg"><?php echo AddProducts::$error; ?></p>

    <h1>All Available Products</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Description</th>
            <th>Category</th>
            <th>Original Price</th>
            <th>Price</th>
            <th>SKU</th>
            <th>Image URL</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        for ($i = 0; $i < count($products); $i++) {
        ?>
            <tr>
                <td><?php echo shorten_string($products[$i]->product_name, 15) ?></td>
                <td><?php echo $products[$i]->product_brand ?></td>
                <td><?php echo shorten_string($products[$i]->product_description, 20) ?></td>
                <td><?php echo $products[$i]->product_category ?></td>
                <td><?php echo add_commas($products[$i]->initial_price) ?></td>
                <td><?php echo add_commas($products[$i]->product_price) ?></td>
                <td><?php echo shorten_string($products[$i]->product_SKU, 10) ?></td>
                <td><?php echo shorten_string($products[$i]->product_image, 10) ?></td>

                <td>
                    <form action="http://localhost/shopit/wp-admin/admin.php?page=edit_products" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $products[$i]->p_id; ?>">
                        <button type="submit" name="edit_btn" class="btn-edit">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $products[$i]->p_id; ?>">
                        <button type="submit" name="delete_btn" class="btn-delete">Delete</button>
                </td>
                </form>
            </tr>
        <?php
        }
        ?>

    </table>
</div>

<script>
    // if ()
    //     document.querySelector('.success').addEventListener('click', function() {
    //         successMsg.style.display = 'none';
    //     })
    // document.querySelector('.error').addEventListener('click', function() {
    //     errorMsg.style.display = 'none';
    // })
</script>