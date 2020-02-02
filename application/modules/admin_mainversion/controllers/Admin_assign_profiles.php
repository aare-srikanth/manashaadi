<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employee extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('session');
	}

	

	public function profile_assign()
	{
		$data = array();
		$data['user_id'] = $this->session->userdata('user_id');
		$user_data = $this->Employee_model->get_un_paid_user_list();
		$emp_data = $this->Employee_model->get_employees(); 
		$data["users"] = $user_data["users"]; 
		$data["employees"] = $emp_data["employees"]; 
		$data["title"] ="Profile List";
		$this->load->view('employee/employee_header',$data);
		$this->load->view('employee/profile_assign',$data);
	}

	public function call_history()
	{
		$emp_id  =array();
		$emp_id["user_id"] = $this->session->userdata('user_id');
		if($emp_id["user_id"] != ''){
			$user_data = $this->Employee_model->get_allocated_profiles($emp_id["user_id"]);
			$user_data = $this->Employee_model->get_allocated_profiles($emp_id["user_id"]);
			$data["users"] =$user_data["users"];
			$data["user_id"] = $emp_id["user_id"];
			$emp_data = $this->Employee_model->get_employees(); 
			$data["employees"] =$emp_data["employees"]; 
			$data["title"] ="Call History";
			$this->load->view('employee/employee_header',$data);
			$this->load->view('employee/call_history',$data);
		}else{
			redirect('index.php/employee/login');
		}
	}

	// ws

	public function get_employees(){
		$data = array();
		$emp_data = $this->Employee_model->get_employees(); 
		$data["employees"] = $emp_data["employees"]; 
		$result = array(
			"success" =>"1",
			"data" => $data
		);
		echo json_encode($result);
	}

	public function get_customer_data()
	{
		$data = array();
		$emp_data = $this->Employee_model->get_employees(); 
		$data["employees"] = $emp_data["employees"]; 

		if(!isset($_POST["customer_id"]))
		{
			$user_data = $this->Employee_model->get_un_paid_user_list();
			$data["users"] = $user_data["users"]; 	
		}else{
			$customer_id = $_POST["customer_id"];
			$user_data = $this->Employee_model->get_costomer_info_by_membership_id($customer_id);
			$data["users"] = $user_data["users"];		
		}
		$result = array(
			"success" =>"1",
			"data" => $data
		);
		echo json_encode($result);
	}

	public function get_user_info(){
		if(isset($_POST["user_id"]))
		{
			$user_id = $_POST["user_id"];
			$user_data = $this->Employee_model->get_user_info($user_id);
			$result = array(
				"success" =>"1",
				"data" => $user_data
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the user_ms_id"
			);
			echo json_encode($result);
		}
	}

	public function get_emp_associated_profiles(){
		if(isset($_POST["emp_id"]))
		{
			$emp_id = $_POST["emp_id"];
			$user_data = $this->Employee_model->get_allocated_profiles($emp_id);
			$result = array(
				"success" =>"1",
				"data" => $user_data
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the employee id"
			);
			echo json_encode($result);
		}
	}

	public function get_association_search(){
		if(isset($_POST["emp_id"]) && isset($_POST["app_status"]) && isset($_POST["dor_from"]) && isset($_POST["dor_to"]))
		{

			$emp_id = $_POST["emp_id"];
			$dor_from =$_POST["dor_from"];
			$dor_to = $_POST["dor_to"];
			$app_status = $_POST["app_status"];
			$user_data = $this->Employee_model->get_association_search($emp_id,$dor_from,$dor_to,$app_status);
			$result = array(
				"success" =>"1",
				"data" => $user_data
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the employee id"
			);
			echo json_encode($result);
		}
	}




	public function save_customer_reg_fee(){
		if(isset($_POST["cust_profile_id"]) && isset($_POST['cust_reg_fee']))
		{
			$cust_profile_id = $_POST["cust_profile_id"];
			$cust_reg_fee = $_POST["cust_reg_fee"];

			$user_data = $this->Employee_model->save_cust_reg_fee($cust_profile_id,$cust_reg_fee);
			$result = array(
				"success" =>"1"
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the cust_profile_id"
			);
			echo json_encode($result);
		}
	}

	public function save_customer_sa_fee(){
		if(isset($_POST["cust_profile_id"]) && isset($_POST['cust_sa_fee']))
		{
			$cust_profile_id = $_POST["cust_profile_id"];
			$cust_sa_fee = $_POST["cust_sa_fee"];

			$user_data = $this->Employee_model->save_cust_sa_fee($cust_profile_id,$cust_sa_fee);
			$result = array(
				"success" =>"1"
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the cust_profile_id"
			);
			echo json_encode($result);
		}
	}

	public function save_call_log(){
		if(isset($_POST["cl_type"]) && isset($_POST['cl_success']) && isset($_POST['cl_description']) && isset($_POST['cl_by']) && isset($_POST['cust_id']))
		{
			$cl_type = $_POST["cl_type"];
			$cl_success = $_POST["cl_success"];
			$cl_description = $_POST["cl_description"];
			$cl_by = $_POST["cl_by"];
			$cust_id = $_POST["cust_id"];
			$user_data = $this->Employee_model->save_cust_call_log($cust_id, $cl_type, $cl_success, $cl_description, $cl_by);
			$result = array(
				"success" =>"1"
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the required parameters"
			);
			echo json_encode($result);
		}
	}

	public function get_call_log(){
		if(isset($_POST['cust_id']))
		{
			$cust_id = $_POST["cust_id"];
			$user_data = $this->Employee_model->get_call_log($cust_id);
			$result = array(
				"success" =>"1",
				"data"=> $user_data
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the cust_id"
			);
			echo json_encode($result);
		}
	}

	public function save_reminder(){
		if(isset($_POST['cust_id']) && isset($_POST['rem_date']))
		{
			$cust_id = $_POST["cust_id"];
			$rem_date = $_POST["rem_date"];
			$this->Employee_model->save_reminder($cust_id,$rem_date);
			$result = array(
				"success" =>"1"
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the cust_id"
			);
			echo json_encode($result);
		}
	}

	public function update_profile_owner(){
		if(isset($_POST['cust_id']) && isset($_POST['emp_id']))
		{
			$cust_id = $_POST["cust_id"];
			$emp_id = $_POST["emp_id"];
			$this->Employee_model->update_profile_owner($cust_id,$emp_id);
			$result = array(
				"success" =>"1"
			);
			echo json_encode($result);
		}else{
			$result = array(
				"success" =>"0",
				"data" =>"Please provide the emp_id"
			);
			echo json_encode($result);
		}
	}
}