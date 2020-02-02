<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faqs extends CI_Controller {

	public $headerPage = '../../../views/header';
	public $footerPage = '../../../views/footer';
	public $listPage = 'faqs';

	public function __construct()
	{
        parent::__construct();
	    
	    $this->load->model('Faqs_model','my_model');
    }
	public function index()
	{
		$data['faqs']  = $this->my_model->get_all_faqs();
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
	}
}

