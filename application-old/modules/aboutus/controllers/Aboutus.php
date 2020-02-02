<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public $headerPage = '../../../views/header_aboutus';
	public $footerPage = '../../../views/footer';
	public $listPage = 'aboutus';

	public function __construct()
	{
        parent::__construct();
	    
	    $this->load->model('Aboutus_model','my_model');
    }
	public function index()
	{
		$data['about_info']  = $this->my_model->get_aboutus();
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
	}
}

