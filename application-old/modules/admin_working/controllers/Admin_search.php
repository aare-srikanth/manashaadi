<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_search extends MX_Controller
{
	public $headerPage   = 'admin_header';
	public $listPage     = 'admin_search';
	public $viewPage     = 'admin_search_result';
	public $profilePage  = 'admin_view_profile';
	public $profilePV	 = 'admin_profile_view';
	public $footerPage   = 'admin_footer';


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_search_model', 'my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'off');

		if (($this->session->userdata('user_id') == "0") || $this->session->userdata('user_id') == NULL) {
			redirect('admin/login');
		}
	}

	public function index()
	{
		$this->load->view($this->headerPage);
		$data['heights'] = $this->my_model->getallheights();
		$data['religions'] = $this->my_model->getallreligions();
		$data['mothertounges'] = $this->my_model->getallmothertounges();
		$data['countries'] = $this->my_model->getallcountries();
		$data['professions'] = $this->my_model->getallprofessions();
		$data['castes'] = $this->my_model->getallcastes();
		$data['educations'] = $this->my_model->getalleducations();
		$this->load->view($this->listPage, $data);
		$this->load->view($this->footerPage);
	}


	public function searchprofiles()
	{

		if (isset($_POST['submit'])) {
			$gender = $this->input->post('gender');
			$_SESSION['gender'] = $gender;
		} else {
			$gender = $_SESSION['gender'];
		}

		if (isset($_POST['submit'])) {
			$heightfrom = $this->input->post('heightfrom');
			$_SESSION['heightfrom'] = $heightfrom;
		} else {
			$heightfrom = $_SESSION['heightfrom'];
		}

		if (isset($_POST['submit'])) {
			$heightto = $this->input->post('heightto');
			$_SESSION['heightto'] = $heightto;
		} else {
			$heightto = $_SESSION['heightto'];
		}

		if (isset($_POST['submit'])) {
			$agefrom = $this->input->post('agefrom');
			$_SESSION['agefrom'] = $agefrom;
		} else {
			$agefrom = $_SESSION['agefrom'];
		}

		if (isset($_POST['submit'])) {
			$ageto = $this->input->post('ageto');
			$_SESSION['ageto'] = $ageto;
		} else {
			$ageto = $_SESSION['ageto'];
		}

		if (isset($_POST['submit'])) {
			$maritalstatus = $this->input->post('maritalstatus');
			$_SESSION['maritalstatus'] = $maritalstatus;
		} else {
			$maritalstatus = $_SESSION['maritalstatus'];
		}

		if (isset($_POST['submit'])) {
			$caste = $this->input->post('caste');
			$_SESSION['caste'] = $caste;
		} else {
			$caste = $_SESSION['caste'];
		}

		if (isset($_POST['submit'])) {
			$religion = $this->input->post('religion');
			$_SESSION['religion'] = $religion;
		} else {
			$religion = $_SESSION['religion'];
		}

		if (isset($_POST['submit'])) {
			$mothertounge = $this->input->post('mothertounge');
			$_SESSION['mothertounge'] = $mothertounge;
		} else {
			$mothertounge = $_SESSION['mothertounge'];
		}

		if (isset($_POST['submit'])) {
			$education = $this->input->post('education');
			$_SESSION['education'] = $education;
		} else {
			$education = $_SESSION['education'];
		}

		if (isset($_POST['submit'])) {
			$profession = $this->input->post('profession');
			$_SESSION['profession'] = $profession;
		} else {
			$profession = $_SESSION['profession'];
		}

		if (isset($_POST['submit'])) {
			$country = $this->input->post('country');
			$_SESSION['country'] = $country;
		} else {
			$country = $_SESSION['country'];
		}


		$this->load->view($this->headerPage);

		$this->load->library('pagination');
		$config = [
			'base_url'			=> base_url ('admin/Admin_search/searchprofiles'),
			// 'base_url'			=> base_url('admin/search_result'),
			'per_page'			=> 1,
			'total_rows'		=> $this->my_model->search_tot_records($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country),
			'display_pages'		=> FALSE,
			'first_link' 		=> FALSE,
			'last_link'  		=> FALSE,

			'full_tag_open' 	=> '<ul class="pagination">',
			'full_tag_close'	=> '</ul>',
			'first_tag_open'	=> '<li class="page-link">',
			'first_tag_close'	=> '</li>',
			'last_tag_open'		=> '<li class="page-link">',
			'last_tag_close'	=> '</li>',
			'next_tag_open'		=> '<li class="page-link">',
			'next_tag_close'	=> '</li>',
			'prev_tag_open'		=> '<li class="page-link">',
			'prev_tag_close'	=> '</li>',
			'num_tag_open'		=> '<li class="page-link">',
			'num_tag_close'		=> '</li>',
			'cur_tag_open'		=> '<li class="page-link pg-blue">',
			'cur_tag_close'		=> '</li>',
		];
		$this->pagination->initialize($config);

		$data['search_sub_rec'] = $this->my_model->search_sub_records($config['per_page'], $this->uri->segment(4), $gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country);
		$data['search_tot_rec'] = $this->my_model->search_tot_records($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country);
		$data['images_info']  = $this->my_model->get_images($this->uri->segment(4));
		$data['links'] = $this->pagination->create_links();
		$this->load->view($this->viewPage, $data);
		$this->load->view($this->footerPage);
	}


	public function viewprofile($id)
	{
		// if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != ''){
		$data['primary_info'] = $this->my_model->get_primary_details($id);
		// $data['profile_complete']=$this->my_model->get_profile_complete($id);
		$data['profile_pic'] = $this->my_model->get_profilepic_details($id);
		$data['profile_info'] = $this->my_model->get_profile_info($id);
		$data['images_info'] = $this->my_model->get_images($id);
		// $data['payment_details']=$this->my_model->get_payment_details($id);

		$data['religion_info'] = $this->my_model->get_religion_details($id);
		$data['profession_info'] = $this->my_model->get_professional_details($id);
		$data['parents_info'] = $this->my_model->get_parents_details($id);
		$data['siblings_info'] = $this->my_model->get_siblings_details($id);
		$data['Propertyinfo'] = $this->my_model->get_property_details($id);

		// $data['recently_viewed']=$this->my_model->recently_viewed($id);
		// $data['shortlisted_count']=$this->my_model->shortlisted_count($id);
		// $data['ignored_count']=$this->my_model->ignored_count($id);
		// $data['contact_list']=$this->my_model->contact_count($id);

		$this->load->view($this->headerPage);
		$this->load->view($this->profilePage, $data);
		$this->load->view($this->footerPage);
		// }
		// else{
		// redirect($this->listPage_redirect,'refresh');
		// }
	}


	public function profileview($id)
	{
		// if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != ''){
		$data['primary_info'] = $this->my_model->get_primary_details($id);
		// $data['profile_complete']=$this->my_model->get_profile_complete($id);
		$data['profile_pic'] = $this->my_model->get_profilepic_details($id);
		$data['profile_info'] = $this->my_model->get_profile_info($id);
		$data['images_info'] = $this->my_model->get_images($id);
		// $data['payment_details']=$this->my_model->get_payment_details($id);

		$data['religion_info'] = $this->my_model->get_religion_details($id);
		$data['profession_info'] = $this->my_model->get_professional_details($id);
		$data['parents_info'] = $this->my_model->get_parents_details($id);
		$data['siblings_info'] = $this->my_model->get_siblings_details($id);
		$data['Propertyinfo'] = $this->my_model->get_property_details($id);

		// $data['recently_viewed']=$this->my_model->recently_viewed($id);
		// $data['shortlisted_count']=$this->my_model->shortlisted_count($id);
		// $data['ignored_count']=$this->my_model->ignored_count($id);
		// $data['contact_list']=$this->my_model->contact_count($id);

		$this->load->view($this->headerPage);
		$this->load->view($this->profilePV, $data);
		$this->load->view($this->footerPage);
		// }
		// else{
		// redirect($this->listPage_redirect,'refresh');
		// }
	}
}
