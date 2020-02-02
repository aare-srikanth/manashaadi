<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {

	public $index_page        = "admin_login";
	public $listPage_redirect = '/admin/Admin_home';
	public $login_redirect    = '/admin/index';
	
	public function __construct() 
	{
        parent::__construct();
		$this->load->library('session');
        if ($this->session->userdata('username')!="") { 
            redirect($this->listPage_redirect, 'refresh'); 
        }
  		$this->load->model('Admin_login_model','my_model'); 
  		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
   }
	
	public function index()
	{
		
		if($this->input->post('submit')!='')
		  {

					$admin_details = $this->my_model->getadmindata();

				
					if($admin_details)
					{				
							//echo "you have entered correct credentials";
							// $newdata = array
							// 		(
							// 			'user'  => $admin_details['username'],
							// 			'developed_by' => "pradeep"
							// 		);
							//$this->session->set_userdata($newdata);
							//$this->session->set_flashdata('msg_succ', 'You are signed in Successfully.');
							$this->session->set_userdata('uname', $admin_details['username']);

							redirect($this->listPage_redirect);
					}
					else 
					{
							//echo "you have entered wrong credentials";
							$this->session->set_flashdata('msg_fail', 'Bad Credentials, Try again.');
							redirect($this->login_redirect);
					}	
	 	 }


			 	 	if ($this->session->flashdata('msg_fail')) 
				  	{
						$error['msg']=$this->session->flashdata('msg_fail');
						$this->load->view($this->index_page,$error);
					}
					else
					{

						$this->load->view($this->index_page);

					}


		
	}
	
	public function backupdb()
	{
	$this->load->dbutil();
        $prefs = array(     
                        'format'      => 'zip',             
                        'filename'    => 'my_db_backup.sql'
                      );
        $backup =& $this->dbutil->backup($prefs); 
        $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = 'pathtobkfolder/'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup); 
        $this->load->helper('download');
        force_download($db_name, $backup); 
      }
       public function logout() {
		$this->session->sess_destroy();
		redirect($this->login_redirect);
	}
}
