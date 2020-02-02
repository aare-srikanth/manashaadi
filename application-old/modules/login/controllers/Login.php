<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Login extends CI_Controller {
	public $headerPage = '../../views/header';
	public $footerPage = '../../views/footer';
	public $listPage = 'login';
	public $listPage_redirect ='login';
	public $login_redirect    ='home';
	
	public function __construct() {
        parent::__construct();
		//$this->load->model('Common_model','common_model');
		$this->load->model('Login_model','login_model');
		$this->load->library('email');
		//$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	public function index(){
			if($this->input->post('submit')!='')
        		{
        		      $username = $this->input->post("email");
        		      $password = $this->input->post("password");
        		      $data = $this->login_model->login($username, $password);
        		     
        		      if(isset( $data ) ){
        		         
        		        	$this->session->set_userdata('user_login', TRUE);
        		        	$this->session->set_userdata('user_id', $data['id']);
        		        	$this->session->set_userdata('user_email', $data['email']);
        		        	
        		        	$data = $this->login_model->get_payment_details($this->session->userdata('user_id'));
        		        	
                                if(count($data)==0){
                                    $payment_level="Free";
                                    }else{
                                    
                                    $current_date=date('Y-m-d H:i:s');
                                    
                                    if(($data[0]['used_contacts']>=$data[0]['allowed_contacts']) || ($current_date >= $data[0]['expiry_date'])){
                                    $payment_level="Renewal";
                                    }else{
                                    
                                   $payment_level="Paid";
                                    }
                                
                                
                                }
                                
                                $this->session->set_userdata('payment_level',$payment_level);
        		        	
                           /* $ip=$_SERVER['REMOTE_ADDR'];
                            $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json")); 
                            $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
                            $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
                            $location = $details->loc;
                            $city =  $details->city;
                            $region =  $details->region;
                            $country =  $details->country;
                            $date =  date("D dS M,Y h:i a");
                            $setdata = array(
                                'ip_address'=>$ip,
                                'location'=>$location,
                                'city'=>$city,
                                'region'=>$region,
                                'user_id'=>$this->session->userdata('user_id'),
                                'country'=>$country,
                                'logged_time'=>date('Y-m-d H:i:s'),
                            );
                            $result = $this->db->insert('tbl_track_users',$setdata);
                            var_dump(isset( $data ));
                            if($result)
                            {
                				$message = 'Somebody is logged into admin panel' . "\n\n" . ' Profile Id: ' . $data['profile_id'] . "\n\n" . 'Email Id: ' . $data['email'] . "\n\n" . ' Ip Address: ' . $ip . "\n\n" . 'Location: ' . $location . "\n\n" . 'City: ' . $city ."\n\n" . 'Region: ' . $region . "\n\n" . 'Country: ' . $country . "\n\n" . 'Logged Time: ' . $date;
                				
                				$this->email->from('info@manashaadi.com');
                				$this->email->to('manashaadi@gmail.com');
                				$this->email->subject('Users Login Information');
                				$this->email->message($message);	
                				$this->email->send();
                				
                				$this->session->set_userdata($newdata);
                               	redirect(site_url().'dashboard/my_account');
                         }*/
                         
                         /*redirect(site_url().'dashboard/my_account');*/
                          
                          redirect(site_url().'dashboard/my_account');
        		        
        		    	}else{
        				    $this->session->set_flashdata('msg_fail', 'Invalid Credentials.Try again.');
        				    redirect(site_url());
        			}
               	}
		$this->load->view($this->listPage);
	$this->load->view($this->footerPage);
	
	}	
	public function logout()
	{	
		$this->session->unset_userdata('user_login');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_email');
		$this->session->sess_destroy();
		redirect($this->login_redirect,'refresh');
	}
	public function forget_password()
	{
	    	$this->load->view('forget_password');
	    	$this->load->view($this->footerPage);
	}
	public function resetpassword()
	{
		if ($this->input->post('email')!='') 
		{

			$pwddigt  =  substr(rand(1,1000000),0,4); 
			$pwdchar  =   substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUXYVWZ"), 0, 4); 
			$password =   $pwdchar.$pwddigt;
			
			if($this->login_model->email_check() != 0)
			{ 
				$changepass=$this->login_model->change_password($password);
				if($changepass)
				{
					$msg = "Your new Password is : ".$password." ";
					$result = $this->emailssend($msg);
					if($result)
					{
					    $data['msg'] = "Password reset link has been sent to the email id provided";
				    	$this->load->view('forget_password',$data);
					    $this->load->view($this->footerPage);
					}
					else
					{
						$data['msg'] = "Unable to trigger email!";
					
						$this->load->view('forget_password',$data);
						$this->load->view($this->footerPage);
					}
				}
			}
			else
			{
				$data['msg'] = "Enter Valid ManaShaadi ID / E-Mail ID";
				$this->load->view('forget_password',$data);
				$this->load->view($this->footerPage);
			}
			
		}
		
	}
    public function emailssend($msg)
	{
	    
		$this->load->library('email');
		$this->email->from("info@manashaadi.com", "Mnashaadi Team");
		$this->email->to('manasa@royalinfosys.com');
		$this->email->subject("Password was Reset Successfully...");
		$this->email->message($msg);
		return $result = $this->email->send();
	
	}
	
}