<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_payment extends MX_Controller
{

	public $headerPage 	= 'admin_header';
	// public $indexPage	= 'admin/Admin_payment/index';
	public $indexPage	= 'admin/enterpayment';
	public $listPage_a 	= 'admin_payment_a';
	public $listPage_ini = 'admin_payment_initial';
	public $listPage_bal = 'admin_payment_balance';
	public $listPage_ren = 'admin_payment_renewal';
	public $viewPage_a	= 'admin_payment_a_status';
	public $footerPage 	= 'admin_footer';





	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_payment_model', 'my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'off');
		if (($this->session->userdata('user_id') == "0") || $this->session->userdata('user_id') == NULL) {
			redirect('admin/login');
		}
	}

	public function index()
	{

		$this->load->view($this->headerPage);

		if ($this->session->flashdata('no_rec')) {

			$error['msg'] = $this->session->flashdata('no_rec');
			$this->load->view($this->listPage_a, $error);
		} else if ($this->session->flashdata('insert_rec_info')) {
			$info['ins'] = $this->session->flashdata('insert_rec_info');
			$this->load->view($this->listPage_a, $info);
		} else {

			$this->load->view($this->listPage_a);
		}

		$this->load->view($this->footerPage);
	}


	public function initial_details_form()
	{
		$data['id_rec'] = $this->session->userdata('profileid');
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage_ini, $data);
		$this->load->view($this->footerPage);
	}

	public function insert_initial_payment_details()
	{

		if (isset($_POST['submit'])) {

			$user_id = $this->session->userdata('user_id');
			$agreed_amount = $this->input->post('agreed_amount');
			$paid_amount = $this->input->post('paid_amount');
			$bal_amount = $agreed_amount - $paid_amount;
			$payment_type = 'Registration';
			$allowed_contacts = $this->input->post('allowed_contacts');
			$used_contacts	= 0;
			$expiry_date = date('Y-m-d', strtotime("+" . $this->input->post('expiry_date') . " months"));
			$now	= date('Y-m-d');
			$entered_by = $this->session->userdata('uname');
			$comments	=  $this->input->post('comments');



			$insert_rec1 = array(
				'user_id' => $user_id,
				'agreed_amount' => $agreed_amount,
				'paid_amount' => $paid_amount,
				'bal_amount' => $bal_amount,
				'payment_type' => $payment_type,
				'paid_date'  => $now,
				'entered_by' => $entered_by,
				'comments'	 => $comments
			);
			$this->my_model->insert_payment_rec1($insert_rec1);


			$payment_id = $this->my_model->get_payment_id($user_id)->payment_id;

			$insert_rec2 = array(
				'payment_id'	  => $payment_id,
				'user_id' 		  => $user_id,
				'allowed_contacts' => $allowed_contacts,
				'used_contacts'	  => $used_contacts,
				'expiry_date'     => $expiry_date
			);


			$this->my_model->insert_payment_rec2($insert_rec2);
			if ($success1 = 1 and $success2 = 1) {
				$this->session->set_flashdata('insert_rec_info', 'Registration payment details recorded successfully!');
			}
			redirect($this->indexPage);
		}
	}


	public function balance_details_form()
	{



		$user_id = $this->session->userdata('user_id');
		$payments['latest_rec'] = $this->my_model->get_latest_payment_rec($user_id);
		$contacts['contacts_rec'] = $this->my_model->get_contacts_rec($user_id);
		$data = array_merge($payments, $contacts);
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage_bal, $data);
		$this->load->view($this->footerPage);
	}


	public function insert_balance_payment_details()
	{

		if (isset($_POST['submit'])) {

			$user_id = $this->session->userdata('user_id');
			$paid_amount = $this->input->post('paid_amount');
			$bal_amount = $this->uri->segment(4) - $paid_amount;
			$payment_type = 'Balance';
			$now	= date('Y-m-d');
			$entered_by = $this->session->userdata('uname');
			$comments	=  $this->input->post('comments');



			$insert_rec1 = array(
				'user_id'   => $user_id,
				'paid_amount' => $paid_amount,
				'bal_amount'  => $bal_amount,
				'payment_type' => $payment_type,
				'paid_date'   => $now,
				'entered_by'  => $entered_by,
				'comments'	  => $comments
			);

			$this->my_model->insert_payment_rec1($insert_rec1);
			if ($success1 = 1) {
				$this->session->set_flashdata('insert_rec_info', 'Balance payment details recorded successfully!');
			}
			redirect($this->indexPage);
		}
	}



	public function renewal_details_form()
	{
		$data['id_rec'] = $this->session->userdata('profileid');
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage_ren, $data);
		$this->load->view($this->footerPage);
	}

	public function insert_renewal_payment_details()
	{

		if (isset($_POST['submit'])) {

			$user_id = $this->session->userdata('user_id');
			$agreed_amount = $this->input->post('agreed_amount');
			$paid_amount = $this->input->post('paid_amount');
			$bal_amount = $agreed_amount - $paid_amount;
			$payment_type = 'Renewal';
			$allowed_contacts = $this->input->post('allowed_contacts');
			$used_contacts	= 0;
			$expiry_date = date('Y-m-d', strtotime("+" . $this->input->post('expiry_date') . " months"));
			$now	= date('Y-m-d');
			$entered_by = $this->session->userdata('uname');
			$comments	=  $this->input->post('comments');

			$insert_rec1 = array(
				'user_id' 		=> $user_id,
				'agreed_amount' => $agreed_amount,
				'paid_amount'	=> $paid_amount,
				'bal_amount'	=> $bal_amount,
				'payment_type'	=> $payment_type,
				'paid_date'  	=> $now,
				'entered_by' 	=> $entered_by,
				'comments'	 	=> $comments
			);

			$this->my_model->insert_payment_rec1($insert_rec1);


			$payment_id = $this->my_model->get_payment_id($user_id)->payment_id;

			$insert_rec2 = array(
				'payment_id'	  => $payment_id,
				'user_id' => $user_id,
				'allowed_contacts' => $allowed_contacts,
				'used_contacts' => $used_contacts,
				'expiry_date' => $expiry_date
			);

			$this->my_model->insert_payment_rec2($insert_rec2);

			if ($success1 = 1 and $success2 = 1) {

				$this->session->set_flashdata('insert_rec_info', 'Renewal payment details recorded successfully!');
			}
			redirect($this->indexPage);
		}
	}


	public function get_payment_status()
	{


		if ($this->input->post('submit') != '') {

			$profileid = $this->input->post('profileid');

			if ($profileid != "") {
				$this->session->set_userdata('profileid', $profileid);
				$user_id = $this->my_model->get_user_id($profileid)->id;
				$this->session->set_userdata('user_id', $user_id);
			}

			$data['payment_rec'] = $this->my_model->get_payment_rec($user_id);
			$count_rec = $this->my_model->get_count_rec($user_id);
			if ($count_rec) {

				$this->load->view($this->headerPage);
				$this->load->view($this->viewPage_a, $data);
				$this->load->view($this->footerPage);
			} else {

				$this->session->set_flashdata('no_rec', 'No payment record available!');
				redirect($this->indexPage);
			}
		}
	}
}
