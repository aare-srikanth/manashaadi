<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<title>Welcome to Manashaadi</title>
<link href="<?php echo site_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="<?php echo site_url();?>css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='<?php echo site_url();?>js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<link href="<?php echo site_url();?>css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="<?php echo site_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/easy-responsive-tabs.css" />
<!--meta data-->
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css">
<!-- /online fonts -->
<!-- nav smooth scroll -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>	
<link rel="stylesheet" href="<?php echo site_url();?>css/intlTelInput.css">
<script src='<?php echo site_url();?>js/jquery.min.js'></script>
<script src="<?php echo site_url();?>js/monetization.js" type="text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134414794-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134414794-1');
</script>

</head>
<!-- //head -->
<!-- body -->
<body>
<!-- header -->
<header>
<div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
                  <div class="col-md-6">
                     <div class="row">
                        <div class="menu">
                           <div class="logo">
                              <a class="cd-logo link link--takiri" href="http://clientdemopanel.in/manashaadi/home"><img src="http://clientdemopanel.in/manashaadi/images/logo2.png"></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="row">
                       <div class="person-details">
                    <?php if(count($users_info) > 0) { ?> 
                    <div class="col-md-6 col-xs-6 col-sm-6">
                        <h5>Name : <?php echo $users_info['first_name'] . ' ' . $users_info['last_name'];?></h5>
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6">
                        <h5 class="pull-right">Id: <?php echo $users_info['profile_id'];?></h5>
                    </div>
                    <?php } ?>
                </div>
                     </div>
                  </div>
                  <div class="clearfix"> </div>
               </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> 
</header>
<section class="about-us">
   <div class="container">
      <div class="col-md-12">
         <div class="row">
            <div class="log-form">
               
               <h4><i class="fa fa-users" aria-hidden="true"></i>Parents Details</h4>
                   <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/parents/<?php echo $this->uri->segment(3);?>" onsubmit="return validation()">
                  <div class="form-row">
                     <div class="form-group">
                        <label for="name"><span style="color:red">*</span> Father Name :</label>
                        <input type="text" name="father-name" id="father-name"/>
                         <span id="father-names" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="name"><span style="color:red;">*</span> Father Education :</label>
                        <input type="text" name="father-education" id="father-education"/>
                        <span id="father-educations" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="name"><span style="color:red;">*</span> Father Profession :</label>
                        <input type="text" name="father-profession" id="father-profession"/>
                         <span id="father-professions" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="name">Father Email :</label>
                        <input type="email" name="father-email" id="father-email"/>
                     </div>
                     <div class="form-group">
                        <label for="name">Father Mobile :</label>
                        <input type="phone" name="father-mobile" id="father-mobile"/>
                     </div>
                     <div class="form-group">
                        <label for="name">Father Father Name :</label>
                        <input type="text" name="fathers-father-name" id="fathers-father-name"/>
                     </div>
                     <div class="form-group">
                        <label for="country">Father Father State :</label>
                        <select id="fathers-father-state" onchange="getfatherdistricts(this.value)" name="fathers-father-state">
                            <option value="">Select State</option>
                           <?php foreach($states as $value) { ?>
                           <option value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="country">Father Father District :</label>
                        <select id="fathers-father-district" name="fathers-father-district">
                           <option value="">Select State First</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="name">Father's Father Native Place :</label>
                        <input type="text" name="fathers-father-native-place" id="fathers-father-native-place"/>
                     </div>
                     <div class="form-group">
                        <label for="name"><span style="color:red;">*</span> Mother Name :</label>
                        <input type="text" name="mother-name" id="mother-name" />
                         <span id="mother-names" class="text-danger font-weight-bold"></span>
                     </div>
                     
                     <span id="groom_countrys" class="text-danger font-weight-bold"></span>
                     <div class="form-group">
                        <label for="name">Mother Education :</label>
                        <input type="text" name="mother-education" id="mother-education"/>
                     </div>
                     <div class="form-group">
                        <label for="name">Mother Profession :</label>
                        <input type="text" name="mother-profession" id="mother-profession"/>
                     </div>
                     <div class="form-group">
                        <label for="name">Mother Email :</label>
                        <input type="email" name="mother-email" id="mother-email"/>
                     </div>
                     <div class="form-group">
                        <label for="name">Mother Mobile :</label>
                        <input type="phone" name="mother-mobile" id="mother-mobile"/>
                     </div>
                     <div class="form-group">
                        <label for="name">Mother's Father Name :</label>
                        <input type="text" name="mothers-father-name" id="mothers-father-name"/>
                     </div>
                     <div class="form-group">
                        <label for="country">Mother's Father State :</label>
                        <select id="mothers-father-state" onchange="getdistricts(this.value)" name="mothers-father-state">
                           <option value="">Select State</option>
                           <?php foreach($states as $value) { ?>
                           <option value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="country">Mother's Father District :</label>
                        <select id="mothers-father-district" name="mothers-father-district">
                           <option value="">Select State</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="name">Mother Father Native Place :</label>
                        <input type="text" name="mothers-father-native-place" id="mothers-father-native-place"/>
                     </div>
                  </div>
                  <div class="row">
                     <div class="submit-form">
                        <input type="submit" value="Submit Parents Details" class="submit m-0" name="submit" id="submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<script type="text/javascript">
    function validation()
    {
       var fathername = document.getElementById('father-name').value;
       var fatherprofession = document.getElementById('father-profession').value;
       var fathereducation = document.getElementById('father-education').value;
       var mothername = document.getElementById('mother-name').value;
       
           
           if(fathername == "")
           {
               document.getElementById('father-names').innerHTML = " *please enter fathername";
                document.getElementById('father-name').focus();  
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
            if(!isNaN(fathername))
           {
               document.getElementById('father-names').innerHTML = " * please enter only characters";
               document.getElementById('father-name').focus();
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
            if(fathername.length < 3)
           {
               document.getElementById('father-names').innerHTML = " name should be grater than 2 characters";
               document.getElementById('father-name').focus();
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
           if(fathereducation == "")
           {
               document.getElementById('father-educations').innerHTML = " *please enter fathereducation";
               document.getElementById('father-education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
            if(!isNaN(fathereducation))
           {
               document.getElementById('father-educations').innerHTML = " * please enter only characters";
                document.getElementById('father-education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
            if(fathereducation.length < 3)
           {
               document.getElementById('father-educations').innerHTML = " profession should be grater than 2 characters";
                document.getElementById('father-education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
           if(fatherprofession == "")
           {
               document.getElementById('father-professions').innerHTML = " *please enter fatherprofession";
               document.getElementById('father-profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }
            if(!isNaN(fatherprofession))
           {
               document.getElementById('father-professions').innerHTML = " * please enter only characters";
               document.getElementById('father-profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }
            if(fatherprofession.length < 3)
           {
               document.getElementById('father-professions').innerHTML = " profession should be grater than 2 characters";
               document.getElementById('father-profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }
           
           
           
           if(mothername == "")
           {
               document.getElementById('mother-names').innerHTML = " *please enter fatherprofession";
               document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
            if(!isNaN(mothername))
           {
               document.getElementById('mother-names').innerHTML = " * please enter only characters";
                document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
            if(mothername.length < 3)
           {
               document.getElementById('mother-names').innerHTML = " profession should be grater than 2 characters";
                document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
    }
</script>
<script>
    function getdistricts(value){
        $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getdistricts',
			   data: "value="+value,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#mothers-father-district").html(op);
			   }
		   });
        
    }
    function getfatherdistricts(value){
        $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getdistricts',
			   data: "value="+value,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#fathers-father-district").html(op);
			   }
		   });
        
    }
</script>