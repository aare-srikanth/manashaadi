<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_pv extends MX_Controller {
	
	public $headerPage 	= 'admin_header';
	public $listPage 	= 'admin_pv';
	public $viewPage 	= 'admin_pv_result';
	public $footerPage 	= 'admin_footer';
	
	
	public function __construct()
		{
        parent::__construct();
        $this->load->model('Admin_pv_model','my_model');
       
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	public function index(){

		$this->load->view($this->headerPage);
		$data['castes'] = $this->my_model->getallcastes();		
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
		
	} 

	public function pv_result(){
	
			if(isset($_POST['submit'])) {
			$gender=$this->input->post('gender');
			$_SESSION['gender']=$gender;
		
			} 	else {
			$gender=$_SESSION['gender'];
			}
			if(isset($_POST['submit'])) {
			$payment=$this->input->post('payment');
			$_SESSION['payment']=$payment;
		
			} 	else {
			$gender=$_SESSION['payment'];
			}
			if(isset($_POST['submit'])) {
			$profileid=$this->input->post('profileid');
			$_SESSION['profileid']=$profileid;
		
			} 	else {
			$profileid=$_SESSION['profileid'];
			}


			if(isset($_POST['submit'])) {
			$allemails=$this->input->post('allemails');
			$_SESSION['allemails']=$allemails;

			} 	else {
			$allemails=$_SESSION['allemails'];
			}

		 	
			if(isset($_POST['submit'])) {
			$allphones=$this->input->post('allphones');
			$_SESSION['allphones']=$allphones;

			} 	else {
			$allphones=$_SESSION['allphones'];
			}	 			 		 

	       if(isset($_POST['submit'])) {
			$surname=$this->input->post('surname');
			$_SESSION['surname']=$surname;

			} 	else {
			$surname=$_SESSION['surname'];
			}	 			 		 

	        if(isset($_POST['submit'])) {
			$name=$this->input->post('name');
			$_SESSION['name']=$name;

			} 	else {
			$name=$_SESSION['name'];
			}

			if(isset($_POST['submit'])) {
			$status=$this->input->post('status');
			$_SESSION['status']=$status;

			} 	else {
			$caste=$_SESSION['caste'];
			}  
			if(isset($_POST['submit'])) {
			$caste=$this->input->post('caste');
			$_SESSION['caste']=$caste;

			} 	else {
			$caste=$_SESSION['caste'];
			}      
	        
		
	 $this->load->view($this->headerPage);

	$this->load->library('pagination');
    $config=[
    	'base_url'			=> base_url ('admin/Admin_pv/pv_result'),
    	'per_page'			=> 50,
    	'total_rows'		=> $this->my_model->tot_records($gender,$profileid,$allphones,$allemails,$surname,$name,$status,$caste),
    	'full_tag_open' 	=> '<ul class="pagination">',
    	'full_tag_close'	=> '</ul>',
    	'first_tag_open'	=> '<li class="page-link">',
    	'first_tag_close'	=> '</li>',
    	'last_tag_open'		=> '<li class="page-link">',
    	'last_tag_close'	=> '</li>',
    	'next_tag_open'		=> '<li class="page-link">',
    	'next_tag_close'	=> '</li>',
    	'prev_tag_open'		=> '<li class="page-link">',
    	'prev_tag_close'	=> '</li>',
    	'num_tag_open'		=> '<li class="page-link">',
    	'num_tag_close'		=> '</li>',
    	'cur_tag_open'		=> '<li class="page-link pg-blue">',
    	'cur_tag_close'		=> '</li>',
    ];   	
   	$this->pagination->initialize($config);
   	
	$data['sub_rec']=$this->my_model->sub_records($config['per_page'],$this->uri->segment(4),$gender,$profileid,$allphones,$allemails,$surname,$name,$status,$caste);
    $data['tot_rec']=$this->my_model->tot_records($gender,$profileid,$allphones,$allemails,$surname,$name,$status,$caste);
	$data['castes'] = $this->my_model->getallcastes();


	 $this->load->view($this->viewPage,$data);
	 $this->load->view($this->footerPage);
	}
  
}
?>