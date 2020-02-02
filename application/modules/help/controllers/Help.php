<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends CI_Controller {
	
	public $headerPage = '../../../views/header';
	public $footerPage = '../../../views/footer';
	public $listPage   = 'help';	

	public function __construct() 
	{
        parent::__construct();
 
	$this->load->model('Help_model','my_model'); 
    }	

	public function index()
	{
		$data['help_info'] = $this->my_model->get_helpinfo();
		$this->load->view($this->headerPage);		
		$this->load->view($this->listPage,$data);		
		$this->load->view($this->footerPage);
	}
}

