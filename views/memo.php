<html>
    <head>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <?php  
      $message=$this->session->set_userdata['userName'];
      if(isset($message)){
          //echo $message; echo "<br>";
      }
      ?>  


        <?php  
      $message3=$this->session->set_userdata['userMobile'];
      if(isset($message3)){
          //echo $message; echo "<br>";
      }
      ?> 



    <div id="memo">
        <div id="memo_header">
            <p class="m-0">বিসমিল্লাহির রাহমানির রাহিম</p>
            <a href="#" class="m-0 btn btn-primary">ক্যাশ মেমো</a>
            <h4 class="m-0">মেসাস ন্যাশনাল পুলিশ স্টোর</h4>
            <h4>M/S NATIONAL POLICE STORE</h4>
            <p class="m-0">এখানে মেডেল ও রিবন তৈরি করা হয়।</p>
            <P>সি/১০-এ, পলওয়েল সুপার মার্কেট, নয়াপল্টন, ঢাকা-১০০০</P>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="input-group mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">অর্ডার নং-     </span>
                  </div>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $order ?>">
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="input-group mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">তারিখঃ</span>
                  </div>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo date("d/m/Y") ?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="input-group mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">নামঃ</span>
                  </div>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $message?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="input-group mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">ঠিকানাঃ</span>
                  </div>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?php echo $message3 ?>">
                </div>
            </div>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ক্রঃ নং</th>
              <th scope="col">মালের Name</th>
              <th scope="col">মালের Type</th>
              <th scope="col">পরিমাণ</th>
              <th scope="col">দর</th>
              <th scope="col">টাকা</th>
            </tr>
          </thead>
          <tbody>
          <?php $i=1; $total = 0; foreach($carts as $cart): ?>
            <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $cart->cart_item_name ?></td>
            <td><?php echo $cart->cart_item_type ?></td>
            <td><?php echo $cart->cart_item_quantity ?></td>
            <td><?php  $price= $cart->cart_price;
              echo $price;
            
            ?></td>
            <td> <?php  $subTotal =0;
             $quantity= $cart->cart_item_quantity;
             $subTotal= $quantity * $price;
             $total = $total + $subTotal;
             echo ($subTotal); ?>  </td>
            </tr>
            <?php  endforeach; ?>
            
          </tbody>
          <tfoot>
              <tr>
                  <td colspan="1"></td>
                  <td colspan="3"><strong>মোট টাকা</strong><td>
                  <td colspan="4"><strong> <?php echo $total ?>/- টাকা</strong></td>
              </tr>
          </tfoot>
        </table>
    </div>

<style>
    .input-group-text {
        background: lightblue !important;
    }
    .form-control, .input-group-text {
        background: #ececec;
        border-radius: 0px;
        -webkit-border-radius: 0px;
    }
    #memo {
        padding: 10px;
        width: 700px;
        background: pink;
        /* height: 700px; */
        border: 1px solid;
    }
    #memo_header {
        text-align: center;
    }
    .table thead th {
        text-align: center;
        border: 1px solid black !important;
    }
    table tr td {
        border: 1px solid black !important;
    }
    
</style>
    </body>
</html>