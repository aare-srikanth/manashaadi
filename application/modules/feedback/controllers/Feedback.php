<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feedback extends CI_Controller {
	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';
	public $listPage     = 'feedback';

	
	public function __construct() 
	{
        parent::__construct();
        
		$this->load->model('Feedback_model','my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	public function index(){
	    $data['successstories'] = $this->my_model->get_allrecords();
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
	}
}
