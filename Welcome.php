<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data= array();
		$data['header']=$this->load->view('header','',TRUE);
		$data['footer']=$this->load->view('footer','',TRUE);
		$data['products']=$this->viewProduct();
		$this->load->view('home',$data);
		
	}
	public function viewProduct(){
        $this->db->select('*');
        $this->db->from('product');
        $qresult = $this->db->get();
        $products = $qresult->result();
        return $products;
    }

	public function type()
	{
		$data= array();
		$data['header']=$this->load->view('header','',TRUE);
		$data['footer']=$this->load->view('footer','',TRUE);
		$this->load->view('type',$data);
	}

	public function login(){
		$this->load->view('login');

	}

	public function loginCheak(){
		$customer_mobile =  $this->input->post('customer_mobile');
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('customer_mobile', $customer_mobile);
        $qresult = $this->db->get();
        $customers = $qresult->result();
		
		
		if($customers){
			return $customers;
			redirect("items");
		}else{
			$ssdata=array();
			$ssdata['message2']='<span style="color:red">Not Found this customer, Add first </span>';
			$this->session->set_flashdata($ssdata);
			redirect("customer");
		}
	}

	public function logout(){
		$this->session->unset_userdata('customer_id');
		$this->session->set_customerdata('customer_login', FALSE);
		$this->session->sess_destroy();
		redirect("/");
	}

	
}
