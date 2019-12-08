<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function addtype(){
       $data=array();
    $name=  $data['type_name']=$this->input->post('type_name',true);
       if(empty($name)){
           $sdata=array();
           $sdata['message']='<span style="color:red"> Field Must not be Empty </span>';
           $this->session->set_flashdata($sdata);
           redirect("type");
       }else{
        $this->db->insert('type', $data);
        $sdata=array();
           $sdata['message']='<span style="color:green"> Type inserted Successfully </span>';
           $this->session->set_flashdata($sdata);
           redirect("type");

       }
       
    }
    public function additemList(){
      $data=array();
   $name=  $data['itemList_name']=$this->input->post('itemList_name',true);
      if(empty($name)){
          $sdata=array();
          $sdata['message']='<span style="color:red"> Field Must not be Empty </span>';
          $this->session->set_flashdata($sdata);
          redirect("itemList");
      }else{
       $this->db->insert('itemList', $data);
       $sdata=array();
          $sdata['message']='<span style="color:green"> Type inserted Successfully </span>';
          $this->session->set_flashdata($sdata);
          redirect("itemList");

      }
      
   }

    public function addproduct(){
      $data= array();
      $item_name = $data['item_name']= $this->input->post('item_name',true);
      $item_type = $data['item_type']= $this->input->post('item_type',true);
      $item_price = $data['item_price']= $this->input->post('item_price',true);
      
      $sdata=array();
      
              $config['upload_path']          = 'uploads/';
              $config['allowed_types']        = 'gif|jpg|png';
              $config['max_size']             = 2048000;
              $config['max_width']            = 6144;
              $config['max_height']           = 3072;
  
              $this->load->library('upload', $config);
  
              if ( ! $this->upload->do_upload('item_image'))
              {
                      $error = array('error' => $this->upload->display_errors());
  
                     
              }
              else
              {
                      $sdata = $this->upload->data();
                      $item_image =  $data['item_image'] = $config['upload_path'].$sdata['file_name'];
                    
  
                     
              }
             
              if(empty($item_name) || empty($item_price) || empty($item_image) || $item_type == "0"  ){
                  $ssdata=array();
                  $ssdata['message2']='<span style="color:red"> Field must not be empty </span>';
                  $this->session->set_flashdata($ssdata);
                  redirect("items");
              }else{
               $this->db->insert('item', $data);
               $ssdata=array();
                  $ssdata['message2']='<span style="color:green"> Product inserted Successfully </span>';
                  $this->session->set_flashdata($ssdata);
                  redirect("product");
       
              }
  

    }

  public function  deleteproduct($product_id){
      $this->db->where('product_id', $product_id);
    $del=  $this->db->delete('product');
    if($del==true){
        $ssdata=array();
                    $ssdata['message2']='<span style="color:green"> Product Deleted Successfully </span>';
                    $this->session->set_flashdata($ssdata);
                    redirect("product");
    }



  }
  public function  deleteitem($item_id){
    $this->db->where('item_id', $item_id);
  $del=  $this->db->delete('item');
  if($del==true){
      $ssdata=array();
                  $ssdata['message2']='<span style="color:green"> Product Deleted Successfully </span>';
                  $this->session->set_flashdata($ssdata);
                  redirect("items");
  }
}

public function  deletecart($cart_id){
  $this->db->where('cart_id', $cart_id);
$del=  $this->db->delete('cart');
if($del==true){
    $ssdata=array();
                $ssdata['message2']='<span style="color:green"> Product Deleted Successfully </span>';
                $this->session->set_flashdata($ssdata);
                redirect("cart");
}
}

public function  updateCart($cart_id){
 $data= array();
$data['cart_item_quantity']= $this->input->post('cart_item_quantity');

  $this->db->where('cart_id', $cart_id);
$update=  $this->db->update('cart',$data);
if($update==true){
    $ssdata=array();
                $ssdata['message2']='<span style="color:green"> Product Deleted Successfully </span>';
                $this->session->set_flashdata($ssdata);
                redirect("cart");
}
}





  public function additem(){
    $data= array();
    $item_name = $data['item_name']= $this->input->post('item_name',true);
    $item_type = $data['item_type']= $this->input->post('item_type',true);
    $item_price = $data['item_price']= $this->input->post('item_price',true);
    
    $sdata=array();
    
            $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048000;
            $config['max_width']            = 6144;
            $config['max_height']           = 3072;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('item_image'))
            {
                    $error = array('error' => $this->upload->display_errors());

                   
            }
            else
            {
                    $sdata = $this->upload->data();
                    $item_image =  $data['item_image'] = $config['upload_path'].$sdata['file_name'];
                  

                   
            }
           
            if(empty($item_name) || empty($item_price) || empty($item_image) || $item_type == "0"  ){
                $ssdata=array();
                $ssdata['message2']='<span style="color:red"> Field must not be empty </span>';
                $this->session->set_flashdata($ssdata);
                redirect("items");
            }else{
             $this->db->insert('item', $data);
             $ssdata=array();
                $ssdata['message2']='<span style="color:green"> Product inserted Successfully </span>';
                $this->session->set_flashdata($ssdata);
                redirect("items");
     
            }

}




  public function addcart1(){
    $data = array();
    $cart_item_image=$data['cart_item_image'] =  $this->input->post('cart_item_image');
    $cart_item_name=$data['cart_item_name'] =  $this->input->post('cart_item_name');
    $cart_item_quantity=$data['cart_item_quantity'] =  $this->input->post('cart_item_quantity');
    $cart_item_type=$data['cart_item_type'] =  $this->input->post('cart_item_type');
    $cart_price= $data['cart_price'] =  $this->input->post('cart_price');
    $customer_id= $data['customer_id'] =  $this->input->post('customer_id');
    $this->db->insert('cart', $data);
    $this->db->insert('tbl_order', $data);
    redirect("cart");

  }

  public function addcustomer(){
    $data = array();
    $customer_name=$data['customer_name'] =  $this->input->post('customer_name');
    $customer_position=$data['customer_position'] =  $this->input->post('customer_position');
    $customer_mobile=$data['customer_mobile'] =  $this->input->post('customer_mobile');
    $customer_bpNo=$data['customer_bpNo'] =  $this->input->post('customer_bpNo');
    $customer_age= $data['customer_age'] =  $this->input->post('customer_age');
    $customer_jobAge= $data['customer_jobAge'] =  $this->input->post('customer_jobAge');
    $this->db->insert('customer', $data);
    redirect("customer");
        
  }

  public function  completeOrder(){
    $cId=$this->session->set_userdata['userId'];
    $this->db->select('*');
    $this->db->from('cart');
    $this->db->where('customer_id', $cId);
  $del=  $this->db->delete('cart');
  if($del==true){
      $ssdata=array();
                  $ssdata['message2']='<span style="color:green">  Successfull </span>';
                  $this->session->set_flashdata($ssdata);
                  redirect("cart");
  }
  }
  

   




}