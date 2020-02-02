<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Employee_model extends CI_Model
{


    public function get_costomer_info_by_membership_id($membership_id)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        // $sql_query = "SELECT cs.caste,  pinfo.father_mobile, ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        // from ms_profilesetting as ms 
        // JOIN tbl_primary_info as prm ON (prm.id = ms.ms_id  )
        // JOIN tbl_parents_info as pinfo on pinfo.user_id = ms.ms_id  
        // JOIN tbl_caste as cs ON cs.id = ms.ms_id WHERE prm.profile_id LIKE '%".$membership_id."%'" ;

        $sql_query = "SELECT cs.caste,  pinfo.father_mobile, ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        from ms_profilesetting as ms 
        JOIN tbl_primary_info as prm ON (prm.id = ms.ms_id AND prm.status = 1 )
        JOIN tbl_parents_info as pinfo on pinfo.user_id = ms.ms_id  
        JOIN tbl_religion_info as cs ON cs.user_id = ms.ms_id WHERE prm.profile_id LIKE '%" . $membership_id . "%'";

        // echo $sql_query;

        $query = $this->db->query($sql_query);


        foreach ($query->result_array() as $row) {

            $result["found"] = "1";
            $un_paid_user["user_id"] = $row['profilesetting_id'];

            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];

            $un_paid_user["user_name"] = $row['ms_user_name'];

            $un_paid_user["user_cast"] = $row['caste'];

            $un_paid_user["user_father_mobile"] = $row['father_mobile'];

            $un_paid_user["payment_status"] = $row['payment_status'];

            $un_paid_user["reg_fee"] = $row['reg_fee'];

            $un_paid_user["sa_fee"] = $row['sa_fee'];

            $un_paid_user["elite"] = $row['elite'];

            $un_paid_user["login_date"] = $row['login_date'];

            $un_paid_user["login_count"] = $row['login_count'];

            $un_paid_user["prof_owner"] = $row['profileowner'];

            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }

    public function get_un_paid_user_list()
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $sql_query = "SELECT cs.caste,  pinfo.father_mobile, ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        from ms_profilesetting as ms 
        JOIN tbl_primary_info as prm ON (prm.id = ms.ms_id AND prm.status = 1 )
        JOIN tbl_parents_info as pinfo on pinfo.user_id = ms.ms_id  
        JOIN tbl_religion_info as cs ON cs.user_id = ms.ms_id WHERE ms.profileowner IS NULL";

        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $result["found"] = "1";
            $un_paid_user["user_id"] = $row['profilesetting_id'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["user_cast"] = $row['caste'];
            $un_paid_user["user_father_mobile"] = $row['father_mobile'];
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }

    public function get_employees()
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $sql_query = "SELECT * from  tbl_admin_data";
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $un_paid_user["emp_name"] = $row['username'];

            $un_paid_user["emp_id"] = $row['id'];

            array_push($add_res_array, $un_paid_user);
        }
        $result["employees"] = $add_res_array;
        return $result;
    }

    public function get_allocated_profiles($emp_id)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $sql_query = "SELECT ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) 
        as ms_user_name from ms_profilesetting as ms INNER JOIN tbl_primary_info as prm ON prm.id = ms.ms_id 
        WHERE ms.profileowner=" . $emp_id . " AND ms.payment_status IS NULL ORDER BY ms.last_call_updated DESC";
        // echo $sql_query;
        $query = $this->db->query($sql_query);

        foreach ($query->result_array() as $row) {
            $un_paid_user = array();
            $un_paid_user["user_id"] = $row['profilesetting_id'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["user_cast"] = "1";
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            $result["found"] = "1";
            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }


    public function get_association_search($emp_id, $dor_from, $dor_to, $app_status)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $is_where = false;

        $sql_query = "SELECT ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) as ms_user_name 
            from ms_profilesetting as ms 
            INNER JOIN tbl_primary_info as prm ON prm.id = ms.ms_id AND ms.payment_status is NULL";

        if ($emp_id != '0') {
            $is_where = true;
            $sql_query .= " WHERE ms.profileowner=" . $emp_id;
        }
        if ($dor_from != '') {
            if ($is_where) {
                $sql_query .= " AND prm.registered_on > '" . $dor_from . "'";
            } else {
                $is_where = true;
                $sql_query .= " WHERE prm.registered_on > '" . $dor_from . "'";
            }
        }
        if ($dor_to != '') {
            if ($is_where) {
                $sql_query .= " AND prm.registered_on < '" . $dor_to . "'";
            } else {
                $is_where = true;
                $sql_query .= " WHERE prm.registered_on < '" . $dor_to . "'";
            }
        }
        if ($app_status != "0") {
            $sql_query .= " AND prm.status=" . $app_status;
        }
        $sql_query .= " ORDER BY ms.last_call_updated DESC";

        $query = $this->db->query($sql_query);

        foreach ($query->result_array() as $row) {
            $result["found"] = "1";
            $un_paid_user["user_id"] = $row['profilesetting_id'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["user_cast"] = "1";
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }

    public function get_user_profile_image($user_id)
    {
        $result = "img_avatar.png";
        $sql_query = "SELECT applicationphotopath, photoname FROM MS_photos WHERE MS_id =" . $user_id . " AND isactive=1 AND ismain=1";
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $result = $row["applicationphotopath"] . ".jpeg";
            return $result;
        }
        return $result;
    }

    public function get_parent_mobile_no($user_id)
    {
        $result = "not found";
        $sql_query = "SELECT father_mobile from  tbl_parents_info WHERE user_id =" . $user_id;
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $result = $row["father_mobile"];
            return $result;
        }
        return $result;
    }

    public function get_user_info($user_id)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        // "SELECT ms.*,cs.caste,pinfo.father_mobile,
        $sql_query =
            "SELECT ms.*,prm.mobile, prm.profile_id as ms_profile_id, prm.registered_on, prm.status as prof_status,CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        from ms_profilesetting as ms 
        JOIN tbl_primary_info as prm ON (prm.id = ms.ms_id)
        WHERE ms.profilesetting_id=" . $user_id;

        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $result["found"] = "1";
            $un_paid_user["user_id"] = $row['ms_id'];
            $un_paid_user["profile_id"] = $row['profilesetting_id'];
            $un_paid_user["profile_url"] = $this->get_user_profile_image($row["ms_id"]);
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["rem_date"] = $row['rem_date'];
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            $un_paid_user["father_mobile"] = $this->get_parent_mobile_no($row["ms_id"]);
            $un_paid_user["user_mobile"] = $row['mobile'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_dor"] = $row['registered_on'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["prof_status"] = $row['prof_status'];
            $result["user"] = $un_paid_user;
        }
        return $result;
    }

    public function save_cust_reg_fee($cust_profile_id, $reg_fee)
    {
        $sql_query = "UPDATE ms_profilesetting set reg_fee=" . $reg_fee . " WHERE ms_id=" . $cust_profile_id;
        $this->db->query($sql_query);
        $date_val = date("Y-m-d H:i:s");
        $sql_query_up = "UPDATE ms_profilesetting SET last_call_updated='" . $date_val . "' WHERE ms_id=" . $cust_profile_id;
        $this->db->query($sql_query_up);
    }

    public function save_cust_sa_fee($cust_profile_id, $sa_fee)
    {
        $sql_query = "UPDATE ms_profilesetting set sa_fee=" . $sa_fee . " WHERE ms_id=" . $cust_profile_id;
        $this->db->query($sql_query);
        $date_val = date("Y-m-d H:i:s");
        $sql_query_up = "UPDATE ms_profilesetting SET last_call_updated='" . $date_val . "' WHERE ms_id=" . $cust_profile_id;
        $this->db->query($sql_query_up);
    }

    public function save_cust_call_log($cust_id, $cl_type, $cl_success, $cl_description, $cl_by)
    {
        $sql_query = "INSERT INTO  ms_marketing_docket ( ms_id,call_type,call_discussion, call_enteredby,called_status ) VALUES (" . $cust_id . ",'" . $cl_type . "','" . $cl_description . "','" . $cl_by . "','" . $cl_success . "')";
        $this->db->query($sql_query);
        $date_val = date("Y-m-d H:i:s");
        $sql_query_up = "UPDATE ms_profilesetting SET last_call_updated='" . $date_val . "' WHERE ms_id=" . $cust_id;
        $this->db->query($sql_query_up);
    }

    public function save_reminder($cust_id, $rem_date)
    {
        $sql_query = "UPDATE ms_profilesetting set rem_date='" . $rem_date . "' WHERE profilesetting_id=" . $cust_id;
        $this->db->query($sql_query);
    }

    public function get_call_log($cust_id)
    {
        $result = array();
        $result["found"] = "0";
        $call_log_array = array();
        $sql_query = "SELECT md.*, ad.username as added_by  FROM ms_marketing_docket md LEFT JOIN tbl_admin_data ad ON ad.id = md.call_enteredby WHERE md.ms_id=" . $cust_id . " ORDER BY md.called_date DESC";
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $call_log = array();
            $call_log["cl_type"] = $row['call_type'];
            $call_log["cl_description"] = $row['call_discussion'];
            $call_log["cl_success"] = $row['called_status'];
            $call_log["cl_by"] = $row['call_enteredby'];
            if ($row['added_by'] == null) {
                $call_log["added_by"] =  $row['call_enteredby'];
            }
            $call_log["called_date"] = $row['called_date'];
            array_push($call_log_array, $call_log);
        }
        $result["call_log"] = $call_log_array;
        return $result;
    }

    public function update_profile_owner($cust_id, $emp_id)
    {
        $sql_query = "UPDATE ms_profilesetting set profileowner=" . $emp_id . " WHERE profilesetting_id=" . $cust_id;
        $this->db->query($sql_query);
    }
}
