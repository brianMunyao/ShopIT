<div style="width:50%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-left: 20em; margin-top:1em;">
    <form method="post" style="width:30vw; box-shadow: 2px 2px 2px 2px grey;padding: 2em 3em; line-height: 2em; border-radius: 5px; background-color:#FFFFFF">

        <h1 style="text-align:center;">Add A Product</h1>
        <div>
            <label>Product Name:</label><br>
            <input type="text" style="width:100%;" placeholder="Enter product name" name="p_name" required>
        </div>
        <div>
            <label>Product Brand: </label><br>
            <input type="text" style="width:100%;" placeholder="Enter product brand" name="p_brand" required><br>

        </div>
        <div>
            <label>Product Description: </label><br>
            <input type="text" style="width:100%;" placeholder="Enter product description" name="p_desc" required><br>

        </div>
        <div>
            <label>Category:</label> </label><br>
            <select name="p_category" id="" style="width:100%">
                <option value="Select Category">Select Category</option>
                <option value="Computing">Computing</option>
                <option value="TV, Audio and Video">TV, Audio & Video</option>
                <option value="Phone and Accessories">Phone & Accessories</option>
                <option value="Appliances">Appliances</option>

            </select>
        </div>

        <div>
            <label>Initial Price:</label><br>
            <input type="number" style="width:100%;" placeholder="Enter initial price" name="init_price" required>
        </div>

        <div>
            <label>Product Price:</label><br>
            <input type="number" style="width:100%;" placeholder="Enter product price" name="p_price" required>
        </div>
        <div>
            <label>Product SKU:</label><br>
            <input type="text" style="width:100%;" placeholder="Enter product SKU" name="p_SKU" required>
        </div>
        <div>
            <label>Image url:</label><br>
            <input type="text" style="width:100%; margin-bottom: 5px;" placeholder="Enter url" name="img_url" required>
        </div>

        <button type="submit" style="width:100%; background-color:#0071DC; color:white; padding:7px; border-radius: 5px; font-size: 14px; border: none; " name="submitbtn">Submit</button>
    </form>
</div>