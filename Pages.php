<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function customer(){
        $data= array();
        $data['header']=$this->load->view('header','',TRUE);
        $data['customers']=$this->viewCustomer();
		$data['footer']=$this->load->view('footer','',TRUE);
		$this->load->view('customer',$data);
    }

    public function viewCustomer(){
        $this->db->select('*');
		$this->db->from('customer');
        $qqqresult = $this->db->get();
        $customers = $qqqresult->result();
		
		return $customers;
    }   


    public function loginCheck(){
		$customer_mobile =  $this->input->post('customer_mobile');
        $this->db->select('*');
		$this->db->from('customer');
		$this->db->where('customer_mobile', $customer_mobile);
        $qqqresult = $this->db->get();
        $customersMobile = $qqqresult->result();
       
     if($customersMobile){
      
        $sdata=array();
        $sdata['userId']=$customersMobile['0']->customer_id;
        $sdata['userName']=$customersMobile['0']->customer_name;
        $sdata['userMobile']=$customersMobile['0']->customer_mobile;
        $sdata['userlogin'] = TRUE;
       $this->session->set_userdata=$sdata;
      // print_r($this->session->set_userdata);
       redirect("cart");

      
      }else{
        redirect("customer");
        
      }
		
    }
    
public function logout(){
    $this->session->unset_userdata($userId);
        $this->session->set_userdata('userlogin',False);
        $this->session->sess_destroy();
        redirect('customer');
}


    public function product(){
        $data= array();
        $data['header']=$this->load->view('header','',TRUE);
        $data['submenu']=$this->load->view('submenu','',TRUE);
        $data['footer']=$this->load->view('footer','',TRUE);
        $data['types']=$this->viewType();
        $data['products']=$this->viewProduct();
		$this->load->view('product',$data);
    }
    public function viewProduct(){
        $type="Others";
        $this->db->select('*');
        $this->db->where('item_type', $type);
        $this->db->from('item');
        $qqresult = $this->db->get();
        $products = $qqresult->result();
        return $products;
    }

    public function ribbon(){
 
        $data= array();
        $data['header']=$this->load->view('header','',TRUE);
        $data['submenu']=$this->load->view('submenu','',TRUE);
        $data['footer']=$this->load->view('footer','',TRUE);
        $data['types']=$this->viewType();
        $data['ribbons']=$this->viewRibbon();
        $data['itemLists']=$this->viewitemList();
		$this->load->view('ribbon',$data);

    }
    public function viewRibbon(){
        $type="Ribbon";
        $this->db->select('*');
        $this->db->where('item_type', $type);
        $this->db->from('item');
        $qqresult = $this->db->get();
        $ribbons = $qqresult->result();
        return $ribbons;


    }

    public function medal(){
        $data= array();
        $data['header']=$this->load->view('header','',TRUE);
        $data['submenu']=$this->load->view('submenu','',TRUE);
        $data['footer']=$this->load->view('footer','',TRUE);
        $data['types']=$this->viewType();
        $data['medals']=$this->viewMedal();
        $data['itemLists']=$this->viewitemList();
		$this->load->view('medal',$data);


    }
    public function viewMedal(){
        $type="Medal";
        $this->db->select('*');
        $this->db->where('item_type', $type);
        $this->db->from('item');
        $qqresult = $this->db->get();
        $medals = $qqresult->result();
        return $medals;


    }

   
    public function items(){
        $data= array();
        $data['header']=$this->load->view('header','',TRUE);
        $data['submenu']=$this->load->view('submenu','',TRUE);
        $data['footer']=$this->load->view('footer','',TRUE);
        $data['types']=$this->viewType();
        $data['items']=$this->viewItem();
        $data['itemLists']=$this->viewitemList();
		$this->load->view('items',$data);
    }
    public function viewItem(){
        $this->db->select('*');
        $this->db->from('item');
        $qresult2 = $this->db->get();
        $items = $qresult2->result();
        return $items;
    }
    public function order(){
        $data= array();
		$data['header']=$this->load->view('header','',TRUE);
		$data['footer']=$this->load->view('footer','',TRUE);
		$this->load->view('order',$data);
    }
    public function cart(){
        $data= array();
        $data['header']=$this->load->view('header','',TRUE);
        $data['submenu']=$this->load->view('submenu','',TRUE);
        $data['customers']=$this->viewCustomer();	
        $data['footer']=$this->load->view('footer','',TRUE);
        $data['carts']=$this->cartView();
		$this->load->view('cart',$data);
    }

    public function cartView(){
            $this->db->select('*');
           $this->db->from('cart');
           $qresult2 = $this->db->get();
           $carts = $qresult2->result();
           return $carts;

    }







    public function medal_replace(){
        $data= array();
		$data['header']=$this->load->view('header','',TRUE);
		$data['footer']=$this->load->view('footer','',TRUE);
		$this->load->view('medal_replace',$data);
    }
    public function type()
	{
		$data= array();
		$data['header']=$this->load->view('header','',TRUE);
        $data['footer']=$this->load->view('footer','',TRUE);
        $data['types']=$this->viewType();
        $this->load->view('type',$data);
        
        
    }
    public function itemList()
	{
		$data= array();
		$data['header']=$this->load->view('header','',TRUE);
        $data['footer']=$this->load->view('footer','',TRUE);
        $data['itemLists']=$this->viewitemList();
        $this->load->view('itemList',$data);
        
        
    }
    public function viewType(){
        $this->db->select('*');
        $this->db->from('type');
        $qresult = $this->db->get();
        $types = $qresult->result();
        return $types;
    }
    public function viewitemList(){
        $this->db->select('*');
        $this->db->from('itemlist');
        $qresult = $this->db->get();
        $itemLists = $qresult->result();
        return $itemLists;
    }


    public function memo(){
        $order= 0;
        $order= $order+1;
        $data= array();
        $data['order']=$order;
        $data['carts']=$this->cartView();
		$this->load->view('memo',$data);


    }
    
    
}
