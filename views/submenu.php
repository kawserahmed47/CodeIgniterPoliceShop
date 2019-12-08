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




<nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
    <span style="color:white; " class="bg-primary "> 
        <?php  
      $message=$this->session->set_userdata['userName'];
      if(isset($message)){
          echo $message; echo "<br>";
      }
      ?>  </span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('ribbon');?>">Ribbon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('medal');?>">Medal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?//=base_url('cart');?>">Mascade Medal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?//=base_url('product');?>">Tunic Medal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('product');?>">Product</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>