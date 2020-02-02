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

<style>
section.about-us {
    margin-top: 0px;
}
</style>

</head>
<!-- //head -->
<!-- body -->
<body class="property_details">
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
               
               <h4><i class="fa fa-users" aria-hidden="true"></i>Property Details</h4>
                   <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/property/<?php echo $this->uri->segment(3);?>" onsubmit="return validation()">
                  <div class="form-row">
                      
                   <!--   Property Type-->
                      
                      <div class="form-radio form-group">
                        <label for="property_type" class="radio-label"><span style="color:red">*</span> Property Type :</label>
                        <div style="display:flex;width:100%;">
                           <div class="form-radio-item pr-10">
                              <input type="radio" name="property_type" id="family" value="family">
                              <label for="family">Family</label>
                              <span class="check"></span>
                              
                           </div>
                           <div class="form-radio-item">
                              <input type="radio" name="property_type" id="shared" value="shared">
                              <label for="shared">Shared</label>
                              <span class="check"></span>
                           </div>
                           <div style="margin-top:-15px;" id="property_type_error" class="text-danger font-weight-bold"></div>
                        </div>
                        
                     </div>
                     
                   <!--  Property Value -->
                     
                     
                     <div class="form-group" style="margin-top:25px;">
                        <label for="name" style="width:40%"> Property Value :</label>
                        <input type="text" maxlength="7" style="margin-right: 10%;margin-left: 20%;" name="property_value" id="property_value"/> In Lakhs
                         <span id="property_value" class="text-danger font-weight-bold"></span>
                     </div>
                     
                     <!-- Property Description -->
                     
                     
                     <div class="row">
                        
                             
                             <div class="col-md-4">
                            <label for="property_description" style="color:black;">Property Description :</label>
                            </div>
                            <div class="col-md-8">
                            <textarea type="text" style="margin-bottom:20px;" rows="4" cols="40" name="property_description" id="property_description"/></textarea>
                             </div>
                            
                        
                       
                     </div>
                     
                     
                  </div>
                  <div class="row">
                     <div class="submit-form">
                        <input type="submit" value="Submit Property Details" class="submit m-0" name="submit" id="submit">
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
       var family = document.getElementById('family').checked;
       
       var shared = document.getElementById('shared').checked;
      
           if(family==false && shared==false)
           {
                document.getElementById('property_type_error').innerHTML = " *please select property type";
               
                return false;
           }else{
                document.getElementById('property_type_error').innerHTML = " ";
                return true;
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