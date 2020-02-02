<?php
	$to = "company@youremail.com"; /*Your Email*/
	$subject = "Join dating"; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	//$Email=$_REQUEST['Email'];

	$userGender        =$_REQUEST['optionsRadios'];
	
	$lookingGender1    =$_REQUEST['lookingMale'];
	$lookingGender2    =$_REQUEST['lookingfemale'];

	$lookingfor        = $lookingGender2.$lookingGender1;

	$name              =$_REQUEST['name'];
	
	$month             =$_REQUEST['month'];
	$day               =$_REQUEST['day'];
	$year              =$_REQUEST['year'];
	
	$country           =$_REQUEST['country'];
	
	$usr               =$_REQUEST['usr'];
	$pass              =$_REQUEST['pass'];
	

	

	$msg="

		Name: $name /n		
		Gender: $userGender
		Lookin for: $lookingGender1 $lookingGender2 
		Birth: $month $day $year 
		Country: $country 
		Name: $usr 
		Name: $pass  
		Suscription from website on date  $date, hour: $time.";
	  
	  
	  
	if ($name=="" or $month=="Month" or $lookingfor==""  or $day=="day" or $year=="Year" or $userGender=="" or $country=="" or $usr=="" or $pass=="") {
		echo "<div class='alert alert-error'>
  				<a class='close' data-dismiss='alert'>×</a>
  				<strong>Warning!</strong> Please fill all fields
			</div>
		
		";
	}	
	else{
		mail($to, $subject, $msg, "From: $name ");
		echo "<div class='alert alert-success'>
  				<a class='close' data-dismiss='alert'>×</a>
  				<strong>Thank you for your Suscription!</strong>
			</div>
		";	
	}
	
?>
