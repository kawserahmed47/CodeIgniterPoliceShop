<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bare - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  

</head>

<body>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="<?=base_url();?>">National Police Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url();?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('medal_replace');?>">Medal Replace</a>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('customer');?>">Customer</a>
          </li>
          <!--
          <li class="nav-item">
           <a class="nav-link" href="<?=base_url('order');?>">Order</a> 
          </li>
          --> 
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('cart');?>">Cart</a>
          </li>
<!--
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('product');?>">Product</a>
          </li>
          --> 

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('items');?>">Items</a>
          </li>
  
  <!--
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('type');?>">Types</a>
          </li>
           --> 
           <!--
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('itemList');?>">Item_List</a>
          </li>
          --> 
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('login');?>">Select Customer</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('logout');?>">LogOut</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>