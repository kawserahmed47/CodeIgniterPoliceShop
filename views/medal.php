<!-- Navigation -->
<?php echo $header ?>
  <!-- Page Content -->
  <?php echo $submenu ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <!-- Button trigger modal -->
        <?php  
      $message2=$this->session->flashdata('message2');
      if(isset($message2)){
          echo $message2; echo "<br>";
      }
      ?>
      <span style="color:white; " class="bg-primary "> 
        <?php  
      $message=$this->session->set_userdata['userId'];
      if(isset($message)){
          echo $message; echo "<br>";
      }
      ?>  </span>

        <button type="button" class="btn btn-primary btn-lg mb-5" data-toggle="modal" data-target="#productModal">
          নতুন Ribbon
        </button>
        
  
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr class="text-center"> 
            <th>Select</th>
                <th>Medal নাম</th>
                <th>Type</th>
                <th>ছবি</th>
                <th>দাম</th>
                <th>একশন</th>
            </tr>
        </thead>
        <tbody>
        <form action="<?php  base_url();?>addcart1" method="POST" class="form" >
           <?php foreach($medals as $medal): ?>
           
           <tr class="text-center">
           <td> <input type="radio" value="<?php echo $medal->item_image ?>" name="cart_item_image">
              <input type="hidden" value="<?php echo $medal->item_name ?>" name="cart_item_name">
              <input type="hidden" value="1" name="cart_item_quantity">
              <input type="hidden" value="<?php echo $medal->item_type ?>" name="cart_item_type">
              <input type="hidden" value="<?php echo $medal->item_price ?>" name="cart_price">
              <input type="hidden" value="<?php echo $message ?>" name="customer_id">

               </td>
              
             <td><?php echo $medal->item_name ?></td>
             <td><?php echo $medal->item_type ?></td>
             <td><img width="100" height="100" src="<?php echo $medal->item_image ?>" alt=""></td>
             <td><?php echo $medal->item_price ?></td>
             <td>
                <a id="edit" class="btn btn-info" href="<?php base_url();?>editproduct/<?php echo $medal->item_id ?>">Edit</a>
                <a class="btn btn-danger" href="<?php echo base_url();?>deleteitem/<?php echo $medal->item_id ?>">Delete</a>
             </td>
           </tr>
         
           <?php  endforeach; ?>
           <button id="addTocart" type="submit" class="btn btn-primary btn-lg mb-5" data-toggle="modal" data-target="#productModal">
         কার্টে যোগ করুন
        </button>
           </form>
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
        <h5 class="modal-title" id="productModalLabel">নতুন Medal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php base_url();?>additem" method="POST" class="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="customer_name">নাম</label>
            <select class="form-control" name="item_name"  >
            
            <option value="0">Search Name </option>
            <?php foreach($itemLists as $itemList): ?>
            <option value="<?php echo $itemList->itemList_name ?> " > <?php echo $itemList->itemList_name ?>  </option>
            <?php  endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="customer_name">টাইপ</label>
            <select class="form-control" name="item_type"  >
            
            <option value="0">Select Type </option>
            <?php foreach($types as $type): ?>
            <option value="<?php echo $type->type_name ?> " > <?php echo $type->type_name ?> </option>
            <?php  endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="customer_name">দাম</label>
            <input type="text" class="form-control" name="item_price" >
          </div>
          <div class="form-group">
            <label for="customer_name">ছবি</label>
            <input type="file" class="form-control" name="item_image" >
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