<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller
{

    public $index_page        = "admin_login";
    // public $listPage_redirect = 'admin/Admin_home';
    public $listPage_redirect = 'admin/MyDashboard';
    public $login_redirect    = 'admin/index';
    public $login_redirect1    = 'admin/login';
    public $dashboardPage    = 'user_dashboard';
    public $religionPage    = 'user_religion';
    public $professionPage    = 'user_profession';
    public $parentsPage    = 'user_parents';
    public $siblingsPage = 'user_siblings';
    public $propertyPage = 'user_property';
    public $headerPage    = '../views/header_admin';
    // public $headerPage    = 'admin_header';

    public $imagesRedirect = 'admin/edit_images';


    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Admin_login_model', 'my_model');
        $this->load->model('Admin_dashboard_model', 'dashboard_model');
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }

    public function index()
    {
        if ($this->input->post('submit') != '') {
            $admin_details = $this->my_model->getadmindata();
            if ($admin_details) {
                $this->session->set_userdata('uname', $admin_details['username']);
                $this->session->set_userdata('user_id', $admin_details['id']);
                redirect($this->listPage_redirect);
            } else {
                $this->session->set_flashdata('msg_fail', 'Bad Credentials, Try again.');
                redirect($this->login_redirect);
            }
        }
        if ($this->session->flashdata('msg_fail')) {
            $error['msg'] = $this->session->flashdata('msg_fail');
            $this->load->view($this->index_page, $error);
        } else {

            $this->load->view($this->index_page);
        }
    }


    public function backupdb()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $this->load->dbutil();
        $prefs = array(
            'format'      => 'zip',
            'filename'    => 'my_db_backup.sql'
        );
        $backup = &$this->dbutil->backup($prefs);
        $db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip';
        $save = 'pathtobkfolder/' . $db_name;
        $this->load->helper('file');
        write_file($save, $backup);
        $this->load->helper('download');
        force_download($db_name, $backup);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        // echo $this->login_redirect;
        // exit();
        redirect($this->login_redirect);
    }

    public function log_out()
    {
        $this->session->sess_destroy();
        echo $this->login_redirect;
        exit();
        // redirect($this->login_redirect1);
    }


    /*********************    edit basic details ***********************/

    public function edit_profile()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);
        $this->session->set_userdata('admin_user_id', $user_id);

        if ($this->input->post('Submit') != "") {
            $user_id = $this->input->post('user_id');

            $profile_id = substr($this->input->post('year'), -2);
            $age = date('Y') - $this->input->post('year');
            $data = array(
                'mobile' => $this->input->post('mobile'),
                'first_name'    => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'gender' => $this->input->post('gender'),
                'date' => $this->input->post('date'),
                'month' => $this->input->post('month'),
                'year' => $this->input->post('year'),
                'profile_id' => 'MS' . $profile_id . '0000' . $user_id,
                'living_in' => $this->input->post('country'),
                'age' => $age,
                'updated_on' => date('Y-m-d H:i:s')
            );
            $this->db->where('id', $user_id);
            $query = $this->db->update('tbl_primary_info', $data);

            if ($query) {
                $data['msg'] = "Profile Updated Successfully";

                $data['primary_info'] = $this->dashboard_model->get_primary_details($user_id);
                $data['countries'] = $this->dashboard_model->get_all_countries();

                $this->load->view($this->headerPage, $data);
                $this->load->view($this->dashboardPage, $data);
            }
        } else {
            $data['primary_info'] = $this->dashboard_model->get_primary_details($user_id);
            $data['countries'] = $this->dashboard_model->get_all_countries();

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->dashboardPage, $data);
        }
    }



    /*********************    edit religion details ***********************/

    public function edit_religion()
    {
        if (($this->session->userdata('user_id') == "0") || $this->session->userdata('user_id') == NULL) {
            redirect('admin/login');
        }
        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {
            $user_id =  $this->input->post('user_id');
            var_dump($user_id);
            $set_data = array(
                'user_id' => $user_id,
                'marital_status'    => $this->input->post('marital_status'),
                'height'    => $this->input->post('height'),
                'religion' => $this->input->post('religion'),
                'mother_tounge'    => $this->input->post('mothertounge'),
                'caste'    => $this->input->post('caste'),
                'sub_caste' => $this->input->post('subcaste'),
                'gothram' => $this->input->post('gothram'),
                'place_of_birth' => $this->input->post('place'),
                'time_of_birth' => $this->input->post('time'),
                'star' => $this->input->post('star'),
                'raasi' => $this->input->post('raasi'),
                'dosham' => $this->input->post('dosham'),
                'updated_on' => date('Y-m-d H:i:s')
            );
            $this->db->where('user_id', $user_id);
            $query = $this->db->update('tbl_religion_info', $set_data);
            if ($query) {
                $data['msg'] = "Profile Updated Successfully";

                $data['heights'] = $this->dashboard_model->get_all_heights();
                $data['religions'] = $this->dashboard_model->get_all_religions();
                $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
                $data['castes'] = $this->dashboard_model->get_all_castes();
                $data['subcastes'] = $this->dashboard_model->get_all_subcastes();
                $data['stars'] = $this->dashboard_model->get_all_stars();
                $data['zodic_signs'] = $this->dashboard_model->get_all_zodic_signs();

                $data['religion_info'] = $this->dashboard_model->get_religion_details($user_id);

                $this->load->view($this->headerPage, $data);
                $this->load->view($this->religionPage, $data);
            }
        } else {
            $data['heights'] = $this->dashboard_model->get_all_heights();
            $data['religions'] = $this->dashboard_model->get_all_religions();
            $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
            $data['castes'] = $this->dashboard_model->get_all_castes();
            $data['subcastes'] = $this->dashboard_model->get_all_subcastes();
            $data['stars'] = $this->dashboard_model->get_all_stars();
            $data['zodic_signs'] = $this->dashboard_model->get_all_zodic_signs();

            $data['religion_info'] = $this->dashboard_model->get_religion_details($user_id);

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->religionPage, $data);
        }
    }  //  religion end



    /*********************    edit profession details ***********************/


    public function edit_profession()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }

        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {
            $user_id =  $this->input->post('user_id');
            $set_data = array(
                'user_id' => $user_id,
                'heighst_education'    => $this->input->post('highest_education'),
                'education_degree'    => $this->input->post('education_degree'),
                'specialization' => $this->input->post('specialization'),
                'university'    => $this->input->post('university'),
                'college'    => $this->input->post('college'),
                'education_description'    => $this->input->post('education-details'),
                'employee_in' => $this->input->post('employee_in'),
                'occupation' => $this->input->post('occupation'),
                'currency' => $this->input->post('currency'),
                'annual_income' => $this->input->post('monthly_income'),
                'company' => $this->input->post('company'),
                'about_profession' => $this->input->post('about_profession'),
                'country' => $this->input->post('groom_country'),
                'state' => $this->input->post('state_id'),
                'city' => $this->input->post('city'),
                'about_me' => $this->input->post('about'),
                'visatype' => $this->input->post('visatype'),
                'residing-since' => $this->input->post('residing-since'),
                'arrival-date' => $this->input->post('arrival-date'),
                'departure-date' => $this->input->post('departure-date'),
                'updated_on' => date('Y-m-d H:i:s')
            );

            $this->db->where('user_id', $user_id);
            $query = $this->db->update('tbl_professional_info', $set_data);
            if ($query) {
                $data['msg'] = "Profile Updated Successfully";



                $data['professional_info'] = $this->dashboard_model->get_professional_details($user_id);

                $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
                $data['educationdegree'] = $this->dashboard_model->get_educationdegrees();
                $data['specialization'] = $this->dashboard_model->get_specializations();
                $data['countries'] = $this->dashboard_model->get_all_countries();
                $data['states'] = $this->dashboard_model->get_all_states();
                $data['professions'] = $this->dashboard_model->getallprofessions();

                $this->load->view($this->headerPage, $data);
                $this->load->view($this->professionPage, $data);
            }
        } else {

            $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
            $data['educationdegree'] = $this->dashboard_model->get_educationdegrees();
            $data['specialization'] = $this->dashboard_model->get_specializations();
            $data['countries'] = $this->dashboard_model->get_all_countries();
            $data['states'] = $this->dashboard_model->get_all_states();
            $data['professions'] = $this->dashboard_model->getallprofessions();

            $data['professional_info'] = $this->dashboard_model->get_professional_details($user_id);

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->professionPage, $data);
        }
    }  //  profession end




    /*********************    edit parents details ***********************/


    public function edit_parents()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {
            $user_id =  $this->input->post('user_id');
            $set_data = array(

                'user_id' => $user_id,
                'father_name'    => $this->input->post('father-name'),
                'father_education'    => $this->input->post('father-education'),
                'father_profession' => $this->input->post('father-profession'),
                'father_email'    => $this->input->post('father-email'),

                'father_mobile'    => $this->input->post('father-mobile'),
                'fathers_father_name' => $this->input->post('fathers-father-name'),
                'fathers_father_state' => $this->input->post('fathers-father-state'),
                'fathers_father_district' => $this->input->post('fathers-father-district'),
                'fathers_father_native_place' => $this->input->post('fathers-father-native-place'),
                'mother_name' => $this->input->post('mother-name'),
                'mother_education' => $this->input->post('mother-education'),
                'mother_profession' => $this->input->post('mother-profession'),
                'mother_email' => $this->input->post('mother-email'),
                'mother_mobile' => $this->input->post('mother-mobile'),
                'mothers_father_name' => $this->input->post('mothers-father-name'),
                'mothers_father_state' => $this->input->post('mothers-father-state'),
                'mothers_father_district' => $this->input->post('mothers-father-district'),
                'mothers_father_native_place' => $this->input->post('mothers-father-native-place'),

                'updated_on' => date('Y-m-d H:i:s')
            );
            $this->db->where('user_id', $user_id);
            $query = $this->db->update('tbl_parents_info', $set_data);
            if ($query) {
                $data['msg'] = "Profile Updated Successfully";


                $data['parents_info'] = $this->dashboard_model->get_parent_details($user_id);
                $data['states'] = $this->dashboard_model->get_all_states();
                $data['districts'] = $this->dashboard_model->get_all_districts();

                $this->load->view($this->headerPage, $data);
                $this->load->view($this->parentsPage, $data);
            }
        } else {
            $data['parents_info'] = $this->dashboard_model->get_parent_details($user_id);
            $data['states'] = $this->dashboard_model->get_all_states();
            $data['districts'] = $this->dashboard_model->get_all_districts();

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->parentsPage, $data);
        }
    }  //  parents end




    /*********************    edit siblings details ***********************/
    public function edit_siblings()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {
            $user_id =  $this->input->post('user_id');


            $set_data = array(
                'user_id' => $user_id,
                'no_of_brothers'    => $this->input->post('no-of-brothers'),
                'no_of_sisters'    => $this->input->post('no-of-sisters'),
                'no_of_elder_brothers' => $this->input->post('no-of-elder-brothers'),
                'no_of_younger_brothers'    => $this->input->post('no-of-younger-brothers'),
                'no_of_elder_sisters'    => $this->input->post('no-of-elder-sisters'),
                'no_of_younger_sisters' => $this->input->post('no-of-younger-sisters'),
                'updated_on' => date('Y-m-d H:i:s')
            );
            $this->db->where('user_id', $user_id);
            $query = $this->db->update('tbl_siblings_info', $set_data);
            if ($query) {
                $data['msg'] = "Profile Updated Successfully";
                $data['siblings_info'] = $this->dashboard_model->get_sibling_details($user_id);


                $this->load->view($this->headerPage, $data);
                $this->load->view($this->siblingsPage, $data);
            }
        } else {


            $data['siblings_info'] = $this->dashboard_model->get_sibling_details($user_id);
            $this->load->view($this->headerPage, $data);
            $this->load->view($this->siblingsPage, $data);
        }
    }  //  siblings end



    /*********************    edit property details ***********************/
    public function edit_property()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {


            // update record

            $user_id =  $this->input->post('user_id');

            $set_data = array(
                'property_type' => $this->input->post('property_type'),
                'property_value' => $this->input->post('property_value'),
                'property_desc' => $this->input->post('property_description')
            );



            $this->db->where('ms_id', $user_id);
            $query = $this->db->update('ms_property_info', $set_data);
            if ($query) {
                $data['msg'] = "Property Details Updated Successfully";
            }

            $data['property_count'] = $this->dashboard_model->get_property_count($user_id);
            $data['property_info'] = $this->dashboard_model->get_property_details($user_id);


            $this->load->view($this->headerPage, $data);
            $this->load->view($this->propertyPage, $data);
        } else if ($this->input->post('insert_submit') != "") {


            /*  --------------- INSERT RECORD -------------   */

            $set_data = array(
                'ms_id' => $user_id,
                'property_type' => $this->input->post('property_type'),
                'property_value' => $this->input->post('property_value'),
                'property_desc' => $this->input->post('property_description'),
                'created_date' => date('Y-m-d H:i:s'),
            );



            $this->db->where('ms_id', $user_id);
            $query = $this->db->insert('ms_property_info', $set_data);
            if ($query) {
                $data['msg'] = "Property Details Inserted Successfully";
            }

            $data['property_count'] = $this->dashboard_model->get_property_count($user_id);
            $data['property_info'] = $this->dashboard_model->get_property_details($user_id);

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->propertyPage, $data);
        } else {

            $data['property_count'] = $this->dashboard_model->get_property_count($user_id);
            $data['property_info'] = $this->dashboard_model->get_property_details($user_id);

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->propertyPage, $data);
        }
    }  //  property end



    /*********************    edit images details ***********************/
    public function edit_images()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);


        if ($this->input->post('submit') != '') {

            $user_id = $this->uri->segment(3);

            $data['images_count'] = $this->dashboard_model->get_images($user_id);




            if (count($data['images_count']) <= 3) {


                if ($_FILES['image']['name'] != '') {

                    $j = count($data['images_count']) + 1;

                    if ($j == 1) {
                        $main_photo = 1;
                    } else {
                        $main_photo = 0;
                    }

                    $user_id = $this->uri->segment(3);


                    /* $_FILES['image']['name'] = $user_id."_".$_FILES['image']['name'];*/

                    $image_type = $_FILES['image']['type'];
                    $image_type = explode("/", $image_type);
                    $image_type = "." . $image_type[1];

                    $_FILES['image']['name'] = "image_" . $j . $image_type;

                    $target_path = "images/profilepics/" . $user_id;

                    if (!is_dir($target_path)) {
                        mkdir($target_path);
                    }


                    $uploadPath = $target_path;
                    $config['upload_path'] = $uploadPath;

                    $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
                    $config['max_size']  = '0';
                    $config['max_width']  = '0';
                    $config['max_height']  = '0';
                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('image')) {
                        $data['msg'] = $this->upload->display_errors();
                    } else {
                        $data = $this->upload->data();
                        //echo '<pre>';print_r($data);
                        $ImgData = $data['file_name'];
                    }
                } else {
                    $data['msg'] = 'Please Upload Image...';
                }



                $result = $this->dashboard_model->add_record($ImgData, $main_photo, $user_id);



                if ($result) {
                    $this->session->set_flashdata('msg_succ', 'added Successfully...');
                    $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
                    $data['imagescount'] = $this->dashboard_model->imagescount($user_id);
                    $this->load->view($this->headerPage, $data);
                    $this->load->view('user-images-info-add');
                } else {
                    $data['msg'] = "please try again...";
                }
            } else {
                $this->session->set_flashdata('msg', 'You can add max 3 photos.');
                $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
                $data['imagescount'] = $this->dashboard_model->imagescount($user_id);
                $this->load->view($this->headerPage, $data);
                $this->load->view('user-images-info-add');
            }
        } else {

            $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
            $data['imagescount'] = $this->dashboard_model->imagescount($user_id);


            $this->load->view($this->headerPage, $data);
            $this->load->view('user-images-info-add');
        }
    }  // end update images


    /*	edit main image */


    public function imagesedit($id)
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }

        $user_id = $this->session->userdata('admin_user_id');


        $data['record'] = $this->dashboard_model->get_single_record($id);
        $data['msg'] = '';
        $old_image = $data['record']['image'];
        if ($this->input->post('submit') != '') {


            if ($_FILES['image']['name'] != '') {
                /*$_FILES['image']['name'] = $user_id."_".$_FILES['image']['name'];*/

                $image_type = $_FILES['image']['type'];
                $image_type = explode("/", $image_type);
                $image_type = "." . $image_type[1];

                $_FILES['image']['name'] = "image_1" . $image_type;

                $target_path = "images/profilepics/" . $user_id;
                $uploadPath = $target_path;
                $config['upload_path'] = $uploadPath;

                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
                $config['max_size']  = '0';
                $config['max_width']  = '0';
                $config['max_height']  = '0';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $data['msg'] = $this->upload->display_errors();
                } else {
                    $data = $this->upload->data();
                    $ImgData = $data['file_name'];
                }
            } else {
                $ImgData = $old_image;
            }
            $result = $this->dashboard_model->update_record($id, $ImgData, $user_id);
            if ($result) {
                $this->session->set_flashdata('msg_succ', 'updated Successfully...');

                $redirect_url = site_url() . 'admin/edit_images/' . $user_id;

                redirect($redirect_url);
            } else {

                $data['msg'] = "please try again...";
            }
        } else {


            $this->load->view($this->headerPage);
            $this->load->view('user-edit-image-info', $data);
        }
    }


    //  end edit main image


}
/** the end **/
