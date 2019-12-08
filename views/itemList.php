<!-- Navigation -->
<?php echo $header ?>
  <!-- Page Content -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg mb-5" data-toggle="modal" data-target="#productModal">
          নতুন টাইপ
        </button>
        <?php  
      $message=$this->session->flashdata('message');
      if(isset($message)){
          echo $message;
      }
      ?>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr class="text-center"> 
                <th>#আইডি</th>
                <th>item নাম</th>
                
            </tr>
        </thead>
        <tbody>
           <?php foreach($itemLists as $itemList): ?>
           <tr class="text-center">
             <td><?php echo $itemList->itemList_id ?></td>
           
             <td><?php echo $itemList->itemList_name ?></td>
             
           </tr>
           <?php  endforeach; ?>
           
        </tbody>
        <!-- 
        <tfoot>
            <tr>
                <th>প্রোডাক্ট নাম</th>
                <th>ছবি</th>
                <th>দাম</th>
                <th>একশন</th>
            </tr>
        </tfoot>
        -->
    </table>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">নতুন item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <form action="<?php base_url();?>additemList" method="POST" class="form">
       
         
          <div class="form-group">
            <label for="customer_name">নাম</label>
            <input type="text" class="form-control" name="itemList_name" >
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