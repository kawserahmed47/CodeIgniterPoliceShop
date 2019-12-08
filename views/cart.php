
  <!-- Navigation -->
  <?php echo $header ?>
  
  <?php 
   $message=$this->session->set_userdata['userlogin'];
  if(!$message){

    redirect("customer");

  }else{
    echo $submenu ;

  }
  
  ?>
  <!-- Page Content -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <!-- Button trigger modal -->
        
        <a class="btn btn-primary btn-lg mb-5"  href="<?=base_url('memo');?>">Print Memo</a>

        <a class="btn btn-primary btn-lg mb-5"  href="<?=base_url('completeOrder');?>">Complete Order</a>
       


      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr class="text-center" >
                <th>#ID</th>
                <th>প্রোডাক্ট নাম</th>
                <th>Types</th>
                <th>ছবি</th>
                <th>Quantity</th>
                <th>দাম</th>
                <th>একশন</th>
            </tr>
        </thead>
        <tbody>
           <?php $i=1; $total = 0; foreach($carts as $cart): ?>
           <tr class="text-center">
           <td><?php echo $i++ ?></td>
            <td><?php echo $cart->cart_item_name ?></td>
             <td><?php echo $cart->cart_item_type ?></td>
             <td><img width="100" height="100" src="<?php echo $cart->cart_item_image ?>" alt=""></td>
             <td>
             <form action="updateCart/<?php echo $cart->cart_id ?>" method="post"> 
             <input type="number" value="<?php echo $cart->cart_item_quantity ?>" name="cart_item_quantity">
             <input type="submit" value="Update">
             </form>
             </td>
             <td><?php
             $subTotal =0;
             
             $price= $cart->cart_price;
             $quantity= $cart->cart_item_quantity;
             $subTotal= $quantity * $price;
             $total = $total + $subTotal;
             echo ($subTotal);
             
             ?></td>
             
             <td>
                <a class="btn btn-danger" href="<?php echo base_url();?>deletecart/<?php echo $cart->cart_id ?>">Delete</a>
             </td>
           </tr>
           <?php  endforeach; ?>
           
            

        </tbody>
        
    
    </table>
    <h1> Total Price: <?php echo $total ?> </h1>
    
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <?php echo $footer ?>
