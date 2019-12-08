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
<style>
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
</style>
</head>
<body>
<div class="container ">
<div class="row">
<div class="col-md-4 card">
<div class="card-body">
        <form action="<?php base_url();?>loginCheck" method="POST" class="form">
          <div class="form-group">
            <label class=".bg-primary" for="customer_name">Mobile</label>
            <input type="text" class="form-control" name="customer_mobile" required><br>
            <Button class="btn btn-primary" type="submit" >Trun In</Button>
          </div>
        </form>
 </div>
 </div>

</div>
 </div>
</body>
</html>