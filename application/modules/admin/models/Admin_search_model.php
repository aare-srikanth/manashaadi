<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_search_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    public function getallheights()
    {
        $this->db->select('height,status');
        $this->db->from('tbl_height');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallcastes()
    {
        $this->db->select('caste,status');
        $this->db->from('tbl_caste');
        $this->db->order_by('caste', 'asc');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallreligions()
    {
        $this->db->select('religion,status');
        $this->db->from('tbl_religion');
        $this->db->where('status', 1);
        $this->db->order_by('religion', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallmothertounges()
    {
        $this->db->select('mothertounge,status');
        $this->db->from('tbl_mothertounge');
        $this->db->where('status', 1);
        $this->db->order_by('mothertounge', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallprofessions()
    {
        $this->db->select('profession,status');
        $this->db->from('tbl_profession');
        $this->db->where('status', 1);
        $this->db->order_by('profession', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getalleducations()
    {
        $this->db->select('heighsteducation,status');
        $this->db->from('tbl_heighsteducation');
        $this->db->where('status', 1);
        $this->db->order_by('heighsteducation', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallcountries()
    {
        $this->db->select('country,status');
        $this->db->from('tbl_country');
        $this->db->where('status', 1);
        $this->db->order_by('country', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }


    public function search_sub_records($limit, $offset, $gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country)
    {

        $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.month,p.year");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
        $this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');

        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');

        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');

        $this->db->select('pr.property_value,pr.property_type,pr.property_Desc');

        $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        
        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        if ($agefrom != "" && $ageto != "") {
            $this->db->where("p.age BETWEEN $agefrom AND $ageto");
        }
        if ($heightfrom != "") {
            $this->db->where('r.height >=', $heightfrom);
        }
        if ($heightto != "") {
            $this->db->where('r.height <=', $heightto);
        }
        if ($maritalstatus != "") {
            $this->db->where('r.marital_status', $maritalstatus);
        }
        if ($religion != "") {
            $this->db->where('r.religion', $religion);
        }
        if ($caste != "") {
            $this->db->where('r.caste', $caste);
        }
        if ($mothertounge != "") {
            $this->db->where('r.mother_tounge', $mothertounge);
        }
        if ($education != "") {
            $this->db->where('e.heighst_education', $education);
        }
        if ($country != "") {
            $this->db->where('p.living_in', $country);
        }

        if ($profession != "") {
            $this->db->where('e.occupation', $profession);
        }
        $this->db->where('p.status', 1);
        $this->db->limit($limit, $offset);
        $this->db->group_by('p.id');
        $this->db->order_by('p.registered_on', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }


    public function search_tot_records($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country)
    {

        $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,p.age,p.living_in,p.profile_id");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
        $this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');

        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');

        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        if ($agefrom != "" && $ageto != "") {
            $this->db->where("p.age BETWEEN $agefrom AND $ageto");
        }
        if ($heightfrom != "") {
            $this->db->where('r.height >=', $heightfrom);
        }
        if ($heightto != "") {
            $this->db->where('r.height <=', $heightto);
        }
        if ($maritalstatus != "") {
            $this->db->where('r.marital_status', $maritalstatus);
        }
        if ($religion != "") {
            $this->db->where('r.religion', $religion);
        }
        if ($caste != "") {
            $this->db->where('r.caste', $caste);
        }
        if ($mothertounge != "") {
            $this->db->where('r.mother_tounge', $mothertounge);
        }
        if ($education != "") {
            $this->db->where('e.heighst_education', $education);
        }
        if ($country != "") {
            $this->db->where('p.living_in', $country);
        }

        if ($profession != "") {
            $this->db->where('e.occupation', $profession);
        }
        $this->db->where('p.status', 1);
        $this->db->group_by('p.id');
        $this->db->order_by('p.registered_on', 'DESC');
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }

    public function search_img_records($id)
    {

        $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,p.age,p.living_in,p.profile_id");
        $this->db->from('tbl_primary_info as p');

        $this->db->select('u.image,u.user_id');
        $this->db->join('upload-images as u', 'p.id=u.user_id', 'left');

        $this->db->where('u.user_id', $id);
        $this->db->where('p.status', 1);
        // $this->db->limit ($limit,$offset);
        // $this->db->group_by('u.image');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }






    public function get_primary_details($user_id)
    {
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age');
        $this->db->from('tbl_primary_info');
        $this->db->where('id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_profile_complete($user_id)
    {

        $query = $this->db->query("select (basicdetails+religion+edu_prof+parents+Siblings+photo) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id=$user_id");
        $result = $query->result();

        return $result;
    }

    public function get_profilepic_details($user_id)
    {
        /*$this->db->select('id,user_id,image,updated_on,status');
        $this->db->from('upload-images');
        $this->db->where('user_id',$user_id);
        $this->db->order_by('id', 'ASC');
        $this->db->limit('1');
        $query = $this->db->get()->result_array();
        return $query;*/

        $this->db->select('photoname,MS_id,ismain,isactive,applicationphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $user_id);
        $this->db->where('ismain', 1);
        $this->db->where('isactive', 1);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_profile_info($id)
    {
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.year,p.month,p.email,p.mobile");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.star,r.time_of_birth,r.raasi,r.place_of_birth,r.gothram');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'inner');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.education_description,e.about_profession,e.currency,e.country,e.state,e.city,e.residing-since,e.arrival-date,e.departure-date,e.visatype');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'inner');
        $this->db->select('f.father_name,f.fathers_father_name,f.fathers_father_native_place,f.mother_name,mothers_father_name,f.mothers_father_native_place,f.father_mobile,f.mother_mobile,f.user_id');
        $this->db->join('tbl_parents_info as f', 'p.id=f.user_id', 'inner');
        $this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
        $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'inner');
        $this->db->select('s.user_id,s.no_of_brothers,s.no_of_sisters');
        $this->db->join('tbl_siblings_info as s', 'p.id=s.user_id', 'inner');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }



    public function get_images($id)
    {

        $this->db->select('*');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $id);
        $this->db->order_by('photos_id', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function imagescount($id)
    {
        $this->db->select('id');
        $this->db->from('upload-images');
        $this->db->where('user_id', $id);
        $result = $this->db->get()->result_array();
        return count($result);
    }

    public function get_religion_details($user_id)
    {
        $this->db->select('user_id,marital_status,height,religion,mother_tounge,caste,sub_caste,gothram,place_of_birth,time_of_birth,star,raasi,dosham,updated_on');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_professional_details($user_id)
    {
        $this->db->select('user_id,heighst_education,education_degree,specialization,university,college,education_description ,employee_in,occupation,annual_income,currency,company,about_profession,country,visatype,residing-since,arrival-date,departure-date,city,state,about_me,updated_on');
        $this->db->from('tbl_professional_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_parents_details($user_id)
    {
        $this->db->select('user_id,father_name,father_education,father_profession,father_email,father_mobile,fathers_father_name,fathers_father_state,fathers_father_district,fathers_father_native_place,mother_name,mother_education,mother_profession,mother_email,mother_mobile,mothers_father_name,mothers_father_state,mothers_father_district,mothers_father_native_place,updated_on');
        $this->db->from('tbl_parents_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_siblings_details($user_id)
    {
        $this->db->select('user_id,no_of_brothers,no_of_sisters,no_of_elder_brothers,no_of_younger_brothers,no_of_elder_sisters,no_of_younger_sisters,updated_on');
        $this->db->from('tbl_siblings_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_property_details($user_id)
    {
        $this->db->select('property_type,property_value,property_Desc');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function recently_viewed($user_id)
    {

        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('viewed_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();

        return $result;
    }

    public function shortlisted_count($user_id)
    {

        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('shortlist_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();

        return $result;
    }

    public function ignored_count($user_id)
    {

        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('ignore_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();

        return $result;
    }

    public function contact_count($user_id)
    {

        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('from_msid', $user_id);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();

        return $result;
    }

    public function get_payment_details($user_id)
    {

        $this->db->select('*');
        $this->db->from('tbl_payments');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->result_array();
        return $query;
    }
}
