<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kapu_matrimony extends CI_Controller {

	public $headerPage = '../../../views/community_header';
	public $footerPage = '../../../views/community_footer';
	public $listPage = 'kapu';


	public function __construct()
	{
        parent::__construct();
	    
    }

	public function index()
	{
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage);
		$this->load->view($this->footerPage);
	}

}