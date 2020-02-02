<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kamma_matrimony extends CI_Controller {

	public $headerPage = '../../../views/community_header';
	public $footerPage = '../../../views/community_footer';
	public $listPage = 'kamma';


	public function __construct()
	{
        parent::__construct();
        $this->load->model('Kamma_model','my_model');
		$this->load->library('email');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
	    
    }

	public function index()
	{
		$data['success_stories'] = $this->my_model->get_successstories();
		$data['religions'] = $this->my_model->get_all_religions();
		$data['mother_tounges'] = $this->my_model->get_all_mothertounges();
		$data['countries'] = $this->my_model->get_all_countries();
		$data['new_bride_records'] = $this->my_model->getbriderecords();
		$data['new_groom_records'] = $this->my_model->getgroomrecords();

		$this->load->view($this->headerPage);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
	}

}