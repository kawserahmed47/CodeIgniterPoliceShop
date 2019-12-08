<!-- Navigation -->
<?php echo $header ?>
  <!-- Page Content -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <!-- Button trigger modal -->
        <?php  
      $message=$this->session->flashdata('message2');
      if(isset($message)){
          echo $message;
      }
      ?>
       <br> <button type="button" class="btn btn-primary btn-lg mb-5" data-toggle="modal" data-target="#exampleModal">
          নতুন কাস্টোমার
        </button>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>নাম</th>
                <th>পদবি</th>
                <th>ঠিকানা</th>
                <th>মোবাইল</th>
                <th>বিপি নং</th>
                <th>এস এম এস</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach($customers as $customer): ?>
           <tr>
             <td><?php echo $customer->customer_name?></td>
             <td><?php echo $customer->customer_position?></td>
             <td><?php echo $customer->customer_age?></td>
             <td><?php echo $customer->customer_mobile?></td>
             <td><?php echo $customer->customer_bpNo?></td>
             <td><a href="#" class="btn btn-primary">SEND SMS</a></td>
           </tr>
           <?php endforeach; ?>
           
        </tbody>
        <!--
        <tfoot>
            <tr>
                <th>নাম</th>
                <th>পদবি</th>
                <th>ঠিকানা</th>
                <th>মোবাইল</th>
                <th>বিপি নং</th>
                <th>এস এম এস</th>
            </tr>
        </tfoot>
        -->
    </table>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">নতুন কাস্টোমার</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php base_url();?>addcustomer"  method="POST" class="form">
          <div class="form-group">
            <label for="customer_name">নাম</label>
            <input type="text" class="form-control" name="customer_name" required>
          </div>
          <div class="form-group">
            <label for="customer_name">পদবী</label>
            <select name="customer_position" class="form-control">
              <option value="IGP">IGP</option>
              <option value="Add. IGP">Add. IGP</option>
              <option value="DIG">DIG</option>
              <option value="Add. DIG">Add. DIG</option>
              <option value="SP">SP</option>
              <option value="Add. SP">Add. SP</option>
              <option value="Sr. ASP">Sr. ASP</option>
              <option value="ASP">ASP</option>
              <option value="Inspector">Inspector</option>
              <option value="SI">SI</option>
              <option value="Sergeant">Sergeant</option>
              <option value="ASI">ASI</option>
              <option value="Nayek">Nayek</option>
              <option value="Constable">Constable</option>
            </select>
            <!-- BP NO Or JOB AGE OPTION -->
          </div>
          <div class="form-group">
            <label for="customer_name">Age</label>
            <input type="text" class="form-control" name="customer_age" required>
          </div>
          <div class="form-group">
            <label for="customer_name">মোবাইল</label>
            <input type="text" class="form-control" name="customer_mobile" required>
          </div>
          <div class="form-group">
            <label for="customer_name">সার্ভিস বয়স</label>
            <input type="number" class="form-control" name="customer_jobAge" id="service_age">
          </div>
          <div class="form-group">
            <label for="customer_name">বিপি নং</label>
            <input type="text" class="form-control" name="customer_bpNo" id="bp_no" required>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- Bootstrap core JavaScript -->
  <?php echo $footer ?>