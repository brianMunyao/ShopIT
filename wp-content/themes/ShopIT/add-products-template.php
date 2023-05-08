<?php 

/**
 * Template Name: Adding Products
 * 
 */
get_header(); ?>

<div>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Price</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter product price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product SKU</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter product SKU">
  </div>
  <div class="form-group-">
    <label for="exampleInputPassword1">Product Price</label>
    <input type="password" class="form-control-file" id="exampleInputPassword1" placeholder="Enter product price">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>