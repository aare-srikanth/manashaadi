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
<body class="sibling_details">
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
              
               <h4><i class="fa fa-users" aria-hidden="true"></i>Siblings Details</h4>
              <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/siblings/<?php echo $this->uri->segment(3);?>" onsubmit="return validation()">
                  <div class="form-row">
                     <div class="form-group">
                        <label for="country">Number Of Brothers :</label>
                        <select id="no-of-brothers" name="no-of-brothers" onchange="getbrothers(this.value)">
                           <option selected>Select Brothers</option>
                            <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                         <span id="no-of-brotherss" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="country">Number Of Sisters :</label>
                        <select id="no-of-sisters" name="no-of-sisters" onchange="getsisters(this.value)">
                           <option selected>Select Sisters</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                         <span id="no-of-sisterss" class="text-danger font-weight-bold"></span>
                     </div>
                     <div id="appdate" style="display:none;">
                     <div class="form-group">
                        <label for="country">Number Of Elder Brothers  :</label>
                        <select id="no-of-elder-brothers" name="no-of-elder-brothers">
                           <option value="">Select</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="country">Number Of Younger Brothers  :</label>
                        <select id="no-of-younger-brothers" name="no-of-younger-brothers">
                           <option value="">Select</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                     </div>
                     </div>
                     <div id="appdatesisters" style="display:none;">
                     <div class="form-group">
                        <label for="country">Number Of Elder Sisters :</label>
                        <select id="no-of-elder-sisters" name="no-of-elder-sisters">
                           <option value="">Select</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="0">3</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="country">Number Of Younger Sisters :</label>
                        <select id="no-of-younger-sisters" name="no-of-younger-sisters">
                           <option value="">Select</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                     </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="submit-form">
                        
                        <input type="submit" value="Complete Registration" class="submit m-0" name="submit" id="submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section><script type="text/javascript">
        //programmer defined functions
		function getbrothers(valu)
		{
		   if((valu > 0))
    		{
    			$('#appdate').show(1000);
    		}
    		else
    		{
    			$('#appdate').hide(1000);
    		}
		}
		function getsisters(valu)
		{
		   if((valu > 0))
    		{
    			$('#appdatesisters').show(1000);
    		}
    		else
    		{
    			$('#appdatesisters').hide(1000);
    		}
		}
		
</script>
<script type="text/javascript">
    function validation()
    {
       var noofbrothers = document.getElementById('no-of-brothers').value;
       var noofsisters = document.getElementById('no-of-sisters').value;
      
        if(noofbrothers == "Select Brothers")
       {
           document.getElementById('no-of-brotherss').innerHTML = " *please select no of brothers ";
           document.getElementById('no-of-brothers').focus();
           return false;
       }else {
            document.getElementById('no-of-brotherss').innerHTML = " ";
       }
       
        if(noofsisters == "Select Sisters")
       {
           document.getElementById('no-of-sisterss').innerHTML = " *please select no of sisters";
            document.getElementById('no-of-sisters').focus();
           return false;
       }else {
            document.getElementById('no-of-sisterss').innerHTML = " ";
       }
    }
</script>