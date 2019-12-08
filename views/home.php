
  <!-- Navigation -->
  <?php echo $header ?>
  <!-- Page Content -->
  <style>
body, html {
  height: 100%;
  
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("uploads/slider/1.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  margin: 25px;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>


<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Shop Name</h1>
    <p>Shop </p>
    <a class="btn btn-primary btn-lg mb-5"  href="<?=base_url('login');?>">Select Customer</a>
  </div>
</div>




<!-- Add Hil, Mission 4 e click korle 2ta add hobe, memo theke product er details lagbe na sudu type hole hobe. product imagge upload hobe -->

  <!-- Bootstrap core JavaScript -->
  <?php echo $footer ?>
