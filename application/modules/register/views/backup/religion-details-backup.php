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
                  <div class="col-md-6 text-right">
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
                
               <h4><i class="fa fa-book" aria-hidden="true"></i> Religion Details</h4>
                 <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/religion/<?php echo $this->uri->segment(3);?>" onsubmit="return validation()">
                  <div class="form-row">
                     <div class="form-group">
                        <label for="country"><span style="color:red;">*</span> Marital Status :</label>
                        <select class="form-control" id="marital_status" name="marital_status">
                             <option selected="selected">Select Marital Status</option>
                           <option value="never_married">Never Married</option>
                           <option value="divorced">Divorced</option>
                           <option value="widow-widower">Widow / Widower</option>
                           <option value="separated">Separated</option>
                           <option value="annulled">Annulled</option>
                        </select>
                         <span id="marital_statuss" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="height"><span style="color:red;">*</span> Height :</label>
                        <select class="form-control" id="height" name="height" aria-invalid="false">
                           <option selected="selected">Select Height</option>
                           <?php foreach($heights as $value) { ?>
                           <option value="<?php echo stripcslashes($value['height']);?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                        </select>
                         <span id="heights" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="country"><span style="color:red;">*</span> Religion :</label>
                        <select class="form-control" id="religion" name="religion">
                            <option selected="selected">Select Religion</option>
                           <?php foreach($religions as $value) { ?>
                           <option value="<?php echo $value['religion'];?>"><?php echo $value['religion'];?></option><?php } ?>
                        </select>
                         <span id="religions" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="country"><span style="color:red;">*</span> Mother Tongue :</label>
                        <select class="form-control" id="mothertounge" name="mothertounge">
                           <option selected="selected">Select Mother Tongue</option>
                           <?php foreach($mother_tounges as $value) { ?>
                           <option value="<?php echo $value['mothertounge'];?>"><?php echo $value['mothertounge'];?></option><?php } ?>
                        </select>
                       <span id="mothertounges" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="casteName"><span style="color:red;">*</span> Caste :</label>
                        <select class="form-control" id="caste" name="caste" onchange="getsubcaste(this.value)">
                            <option selected="selected">Select Caste</option><?php foreach($castes as $value) { ?>
                           <option value="<?php echo $value['caste'];?>"><?php echo $value['caste'];?></option><?php } ?>
                        </select>
                         <span id="castes" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="casteName">Sub Subcaste :</label>
                        <select class="form-control" id="subcaste" name="subcaste">
                            <option value="">Select Subcaste</option>
                        </select>
                       
                     </div>
                     <div class="form-group">
                        <label for="gothram">Gothram :</label>
                        <input type="text" name="gothram" id="gothram" />
                     </div>
                     <div class="form-group">
                        <label for="place">Place Of Birth :</label>
                        <input type="place" name="place" id="place" />
                     </div>
                     <div class="form-group">
                        <label for="last_name">Time of Birth :</label>
                        <div class="input-group time" id="timepicker"><input class="form-control" name="time"/><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label id="label_maternalGothramName" for="maternalGothramName">Raasi :</label>
                        <select class="form-control" id="raasi" name="raasi">
                           <option value="">Select Raasi</option>
                           <?php foreach($zodic_signs as $value) { ?>
                           <option value="<?php echo $value['zodic'];?>"><?php echo $value['zodic'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label id="label_starId" for="starId">Star</label>
                        <select class="form-control" id="star" name="star">
                           <option value="">Select Star</option>
                           <?php foreach($stars as $value) { ?>
                           <option value="<?php echo $value['star'];?>"><?php echo $value['star'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="form-radio form-group">
                        <label for="gender" class="radio-label">Dosham :</label>
                        <div style="display:flex;width:100%;">
                           <div class="form-radio-item pr-10">
                              <input type="radio" name="dosham" id="no" value="no">
                              <label for="no">No</label>
                              <span class="check"></span>
                           </div>
                           <div class="form-radio-item">
                              <input type="radio" name="dosham" id="yes" value="yes">
                              <label for="yes">Yes</label>
                              <span class="check"></span>
                           </div>
                           <div class="form-radio-item">
                              <input type="radio" name="dosham" id="dont_know" value="dont_know">
                              <label for="dont_know">Don't Know</label>
                              <span class="check"></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="submit-form">
                <a href="login.php"><input type="submit" value="Submit Religion Details" class="submit m-0" name="submit" id="submit" /></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<footer style="background-color:#eee">
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
			<div class="col-md-4 footer-grids">
						<h3>About</h3>
						<p>We follow the Indian traditional Match Making System with the help of latest technology to help the individuals to find their soul mates</p>
					</div>
					<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Quick links</h3>
						<ul>
						<li><a href="<?php echo site_url();?>aboutus"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:16px;"></i>About Us</a></li>
							<li><a href="<?php echo site_url();?>search"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Search</a></li>
							<li><a href="<?php echo site_url();?>contactus"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Contact Us</a></li>
							<li><a href="<?php echo site_url();?>faqs"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>FAQ</a></li>
						
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="<?php echo site_url();?>terms"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Terms of use</a></li>
							<li><a href="<?php echo site_url();?>privacypolicy"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Privacy Policy</a></li>
							<li><a href="<?php echo site_url();?>feedback"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Success Stories</a></li>  
							<li><a href="<?php echo site_url();?>help"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Help</a></li>  
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li><i class="fa fa-map-marker"></i> Hyderabad.</li>
						<li><i class="fa fa-mobile"></i> +91 00000 00000 </li>
						<li><i class="fa fa-envelope-o"></i> <a href=""> info@manashaadi.com</a></li>
						</ul> 
						<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>	
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						</section>
					</div>
				</div>
					
					<div class="clearfix"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<div class="copy-right"> 
		<div class="container">
			<p>© 2018 Manamatrimony. All rights reserved | Design by <a href="https://www.royalitpark.com/"> Royal IT Park.</a></p>
		</div>
	</div> 
</footer>
	<script src="<?php echo site_url();?>js/jquery.menu-aim.js"> </script>
	<script src="<?php echo site_url();?>js/main.js"></script> <!-- Resource jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<!-- //menu js aim -->		
<!-- Calendar -->
	<link rel="stylesheet" href="<?php echo site_url();?>css/jquery-ui.css" />
	<script src="<?php echo site_url();?>js/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		 });
		</script>
<!-- //Calendar -->	
	<!-- for bootstrap working -->
		<script src="<?php echo site_url();?>js/bootstrap.js"></script>
<!-- //for bootstrap working -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- for smooth scrolling -->
	<script type="text/javascript" src="<?php echo site_url();?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>js/easing.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	</script>
	<!-- //for smooth scrolling -->
	<script>if (/Mobi/.test(navigator.userAgent)) {
  // if mobile device, use native pickers
  $(".date-time input").attr("type", "datetime-local");
  $(".date input").attr("type", "date");
  $(".time input").attr("type", "time");
} else {
  // if desktop device, use DateTimePicker
  $("#datetimepicker").datetimepicker({
    icons: {
      time: "fa fa-clock-o",
      date: "fa fa-calendar",
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down",
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left"
    }
  });
  $("#datepicker").datetimepicker({
    useCurrent: false,
    format: "L",
    icons: {
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left"
    }
  });
  $("#timepicker").datetimepicker({
    format: "LT",
    icons: {
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down"
    }
  });
}
</script>

</body>
  <script type="text/javascript">
        //programmer defined functions
		function getsubcaste(valu)
		{
			$.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getsubcastes',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#subcaste").html(op);
			   }
		   });
		}
		</script>
		<script type="text/javascript">
    function validation()
    {
       var marital_status = document.getElementById('marital_status').value;
       var height = document.getElementById('height').value;
       var religion = document.getElementById('religion').value;
       var mothertounge = document.getElementById('mothertounge').value;
       var caste = document.getElementById('caste').value;
      
       if(marital_status == "Select Marital Status")
       {
           document.getElementById('marital_statuss').innerHTML = " *please select marital_status";
           document.getElementById('marital_status').focus();
           return false;
       }else {
            document.getElementById('marital_statuss').innerHTML = " ";
       }
       if(height == "Select Height")
       {
           document.getElementById('heights').innerHTML = " *please select height";
           document.getElementById('height').focus();
           return false;
       }else {
            document.getElementById('heights').innerHTML = " ";
       }
        if(religion == "Select Religion")
       {
           document.getElementById('religions').innerHTML = " *please select religion";
           document.getElementById('religion').focus();
           return false;
       }else {
            document.getElementById('religions').innerHTML = " ";
       }
       if((mothertounge == "Select Mother Tongue"))
       {
           document.getElementById('mothertounges').innerHTML = " *please select mothertounge";
           document.getElementById('mothertounge').focus();
           return false;
       }else {
            document.getElementById('mothertounges').innerHTML = " ";
       }
      if((caste == "Select Caste"))
       {
           document.getElementById('castes').innerHTML = " *please select caste";
           document.getElementById('caste').focus();
           return false;
       }else {
            document.getElementById('castes').innerHTML = " ";
       }
    }
</script>