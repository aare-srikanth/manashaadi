<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_del_profiles extends MX_Controller {
	
	public $headerPage 	= 'admin_header';
	// public $indexPage	= 'admin/Admin_del_profiles/index';
	public $indexPage	= 'admin/set_del_profiles';
	
	public $listPage 	= 'admin_del_profiles';
	public $footerPage 	= 'admin_footer';
	
	
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('Admin_del_model','my_model');
 		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	public function index()
	{

		$this->load->view($this->headerPage);		
				if ($this->session->flashdata('del_rec_info')) 
				{
				$info['confirm']=$this->session->flashdata('del_rec_info');
				$this->load->view($this->listPage,$info);
				}
				elseif ($this->session->flashdata('no_id')) {
			 	$error['no_id']=$this->session->flashdata('no_id');
			    $this->load->view($this->listPage,$error);
		 		}
		 		elseif ($this->session->flashdata('deactive')) {
			 	$deact['exists']=$this->session->flashdata('deactive');
			    $this->load->view($this->listPage,$deact);
		 		}	
		 		elseif ($this->session->flashdata('mismatch')) {
			 	$mis['mismatched']=$this->session->flashdata('mismatch');
			    $this->load->view($this->listPage,$mis);
		 		}	
		 		else 		
			 	{
				$this->load->view($this->listPage);
				}
		$this->load->view($this->footerPage);
	}

	public function insert_del_rec()
	{

		if (isset($_POST['submit']) ) 
		{

			if ($this->uri->segment(4)=='outside') 
			{

				$ms_id = $this->input->post('ms_id');

				if ($this->my_model->get_user_id($ms_id)) {

					if ($this->my_model->get_user_id($ms_id)->status==1){

						$user_id 	= $this->my_model->get_user_id($ms_id)->id;
						$marriage_date 	= $this->input->post('marriage_date');
						$surname 		= $this->input->post('surname');
						$name 			= $this->input->post('name');
						$comments		= $this->input->post('comments');
						$now			= date ('Y-m-d');

						$rec = array(
						'user_id' 		=> $user_id,
						'marriage_date' => $marriage_date,
						'surname' 		=> $surname,
						'name'			=> $name,
						'Narration'		=> $comments,
						'created_date'	=> $now
						);

						$this->my_model->deactivate_user_id($rec);
						if ($success=1) 
						{
						$this->session->set_flashdata('del_rec_info', '** Profile Deleted successfully!');
						}
						redirect($this->indexPage);
						
					}

					else{
						$this->session->set_flashdata('deactive', '** Profile Deletion already Done!');
						redirect($this->indexPage);
					}
				}

				else {

					$this->session->set_flashdata('no_id', '** Invalid Profile ID, Please check !');
					redirect($this->indexPage);
				}

				
			 }

			elseif ($this->uri->segment(4)=='inside') 
			{


				$bms_id 	= $this->input->post('bms_id');
				$gms_id 	= $this->input->post('gms_id');

				if ($this->my_model->get_user_id($bms_id) AND $this->my_model->get_user_id($gms_id) ) {
					
					if ($this->my_model->get_user_id($bms_id)->gender!==$this->my_model->get_user_id($gms_id)->gender) {
							
							if ($this->my_model->get_user_id($bms_id)->status==1 AND $this->my_model->get_user_id($gms_id)->status==1){

								$buser_id 		= $this->my_model->get_user_id($bms_id)->id;
								$guser_id 		= $this->my_model->get_user_id($gms_id)->id;
								$e_date			= $this->input->post('e_date');
								$marriage_date 	= $this->input->post('marriage_date');
								$comments		= $this->input->post('comments');
								$now			= date ('Y-m-d');

								$rec = array(
								'user_id' 			=> $buser_id,						
								'marriage_date' 	=> $marriage_date,
								'e_date'			=> $e_date,
								'settledwith_userid'=> $guser_id,
								'Narration'			=> $comments,
								'created_date'		=> $now
								);

								$this->my_model->deactivate_user_id($rec);
								if ($success=1) 
								{
								$this->session->set_flashdata('del_rec_info', '** Both Profiles Deleted successfully!');
								}
								redirect($this->indexPage);
								
							}

							else{
								$this->session->set_flashdata('deactive', '** Profiles Deletion already Done!');
								redirect($this->indexPage);
							}

					}
					else{

						$this->session->set_flashdata('mismatch', '** Mismatched Genders, Please check !');
						redirect($this->indexPage);
					
					}
				}

				else {

					$this->session->set_flashdata('no_id', '** Invalid Profile ID/s, Please check !');
					redirect($this->indexPage);
				}
			
			}
			
		}		
    }

}