<?php 

//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_payment_a extends MX_Controller {
	
	public $headerPage 	= 'admin_header';
	public $listPage 	= 'admin_payment_a';
	public $footerPage 	= 'admin_footer';
	
	
	public function __construct() 
	{
        parent::__construct();
		//$this->load->model('Home_model','my_model');
 		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	public function index(){

		$this->load->view($this->headerPage);
		
		$this->load->view($this->listPage);

		$this->load->view($this->footerPage);
	}
	
    

}