<!-- Navigation -->
<?php echo $header ?>
  <!-- Page Content -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
      <table id="example" class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
                <th>নাম</th>
                <th>পদ</th>
                <th>প্রোডাক্ট</th>
                <th>টাইপ</th>
                <th>ইমেজ</th>
                <th>ডেট</th>
                <th>স্ট্যাটাস</th>
                <th>দাম</th>
                <th>একশন</th>
            </tr>
        </thead>
        <tbody>
           <?php //foreach($orders as $order): ?>
           <tr>
              <td><?//=$order['customer_name'];?></td>
              <td><?//=$order['badge'];?></td>
              <td><?//=$order['product'];?></td>
              <td><?//=$order['type'];?></td>
              <td><!--
              <a data-fancybox="gallery" href="<?//=base_url($order['image']);?>"><img width="300" src="<//?=base_url($order['image']);?>" alt=""></a>
               --> </td>
              <td><?//=$order['date'];?></td>
              <td><?//=($order['status'] == 0) ? 'pending':'done';?></td>
              <td>TK-<?//=$order['price'];?></td>
              <td>
                <a href="<?//=base_url('order/'.$order['id']);?>" class="btn-small btn-primary">Complete order</a>
                <a href="<?//=base_url('print_memo/'.$order['id']);?>" class="btn-small btn-primary">Print Memo</a>
              </td>
           </tr>
          <?php //endforeach; ?>
           
        </tbody>
        <!--
        <tfoot>
            <tr>
              <th>নাম</th>
              <th>পদ</th>
              <th>প্রোডাক্ট</th>
              <th>টাইপ</th>
              <th>ইমেজ</th>
              <th>ডেট</th>
              <th>স্ট্যাটাস</th>
              <th>দাম</th>
              <th>একশন</th>
            </tr>
        </tfoot>
        -->
    </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <?php echo $footer ?>