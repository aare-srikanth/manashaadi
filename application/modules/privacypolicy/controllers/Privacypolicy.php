<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privacypolicy extends CI_Controller {
	
	public $headerPage = '../../../views/header';
	public $footerPage = '../../../views/footer';
	public $listPage   = 'privacypolicy';	

	public function __construct() 
	{
        parent::__construct();
	$this->load->model('Privacypolicy_model','my_model'); 
    }	

	public function index()
	{
		$data['policy_info'] = $this->my_model->get_privacyinfo();
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
	}
}
