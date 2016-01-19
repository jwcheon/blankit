<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->load->model('order_model');
		$data['cart']=$this->order_model->cart();
		
		$this->load->view('header');
		$this->load->view('order',$data);
		$this->load->view('footer');
	}
	public function complete()
	{
		$this->load->view('header');
		$this->load->view('order_complete');
		$this->load->view('footer');
	}
	public function func_order_ok()
	{
		 $receiver = $this->input->post('receiver');
		 $email = $this->input->post('email');
		 $phone1 = $this->input->post('phone1');
		 $phone2 = $this->input->post('phone2');
		 $phone3 = $this->input->post('phone3');
		 $home1 = $this->input->post('home1');
		 $home2 = $this->input->post('home2');
		 $home3 = $this->input->post('home3');
		 $payer = $this->input->post('payer');
		 $bank = $this->input->post('bank');
		 $account = $this->input->post('account');
		 $notice = $this->input->post('notice');
		 $totalPrice = $this->input->post('totalPrice');
		
		 $this->load->model('order_model');
		 $this->order_model->order($receiver, $email, $phone1, $phone2, $phone3, $home1, $home2, $home3, $payer, $bank, $account, $notice, $totalPrice);
		 
		 //완료 페이지로 redirect
		 $completeUrl = "http://blankit.kr/order/complete" . "?codeNum=12345" . hash('001') . "&bank=" . $bank . "&account=" . $account;
		 $this->load->helper('url');
		 redirect($completeUrl);
		
	}
}
