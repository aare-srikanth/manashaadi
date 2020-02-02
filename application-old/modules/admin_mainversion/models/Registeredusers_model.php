<?php 

class Registeredusers_model extends CI_Model {

	public $table_name = 'tbl_primary_info';

	public function __construct() 
	{
        parent::__construct();
    }

	
    public function get_all_records() 
    {
        $this->db->select("p.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->select("r.user_id,r.marital_status,r.height,r.religion,r.mother_tounge,r.caste");
		$this->db->join('tbl_religion_info as r','p.id=r.user_id','inner');
		$this->db->select("pf.user_id,pf.heighst_education,pf.education_degree,pf.specialization");
		$this->db->join('tbl_professional_info as pf','p.id=pf.user_id','inner');
		$this->db->order_by('id','asc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }

    public function get_single_record($id='')
    {
		$this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.year,p.month,p.mobile,p.registered_on");
	 	$this->db->from('tbl_primary_info as p');
	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.star,r.time_of_birth,r.raasi,r.place_of_birth,r.gothram,r.dosham');
	 	$this->db->join('tbl_religion_info as r','p.id=r.user_id','inner');
	 	$this->db->select('e.user_id,e.heighst_education,e.education_degree,e.annual_income,e.employee_in,e.occupation,e.about_me,e.education_description,e.about_profession,e.currency,e.country,e.state,e.city,e.departure-date,e.residing-since,e.arrival-date');
	 	$this->db->join('tbl_professional_info as e','p.id=e.user_id','inner');
	 	$this->db->select('f.father_name,f.fathers_father_name,f.fathers_father_native_place,f.father_mobile,f.mother_profession,f.	father_profession,f.mother_name,mothers_father_name,f.mothers_father_native_place,f.user_id');
	 	$this->db->join('tbl_parents_info as f','p.id=f.user_id','inner');
	 	$this->db->select('s.user_id,s.no_of_brothers,s.no_of_sisters');
	 	$this->db->join('tbl_siblings_info as s','p.id=s.user_id','inner');
    	$this->db->where('p.id', $id);
	 	$query = $this->db->get();
	 	$result = $query->row_array();
	 	return $result;
		
    }

	public function add_record($ImgData){

		$set_data = array(

						'mothertounge'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mothertounge')),
						'created_time'=>date('Y-m-d H:i:s'),
						'status' =>1
					);

		$result = $this->db->insert($this->table_name, $set_data); 

		return $result;

	}



	public function update_record($id,$ImgData){

		$set_data = array(

						'mothertounge'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mothertounge')),
						'updated_time'=>date('Y-m-d H:i:s'),
						);

		$this->db->where('id',$id);
		$result = $this->db->update($this->table_name, $set_data);
		return $result;
	}

	public function delete_record($id)
	{
		$this->db->where('id',$id);
		$result = $this->db->delete($this->table_name); 
		return $result;
	}
    
	public function status_record($id,$status){
		$sts = ($status == 1 ? 0 : 1);
		$set_data = array(
						'status' => $sts
					);
		$this->db->where('id',$id);
		$result = $this->db->update($this->table_name, $set_data); 
		return $result;
	}
    
    	public function get_images($user_id){
	        $this->db->select('*');
	        $this->db->from('upload-images');
	        $this->db->where('user_id',$user_id);
	        $result = $this->db->get()->result_array();
	        return $result;
		return $result;
	}

	public function get_mysqli()
	{
	   $db = (array)get_instance()->db;
	   return mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
	}

}

?>
