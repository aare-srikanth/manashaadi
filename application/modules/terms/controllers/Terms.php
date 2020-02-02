<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms extends CI_Controller {
	
	public $headerPage = '../../../views/header';
	public $footerPage = '../../../views/footer';
	public $listPage   = 'terms';	

	public function __construct() 
	{
        parent::__construct();
 
	//$this->load->model('Common_model','common_model'); 
	$this->load->model('Terms_model','my_model'); 
    }	

	public function index()
	{
		$data['terms_info'] = $this->my_model->get_termsinfo();
		$this->load->view($this->headerPage);		
		$this->load->view($this->listPage,$data);		
		$this->load->view($this->footerPage);
	}
}

