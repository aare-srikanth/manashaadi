<!DOCTYPE html>
<!-- html -->
<html>
   <!-- head -->
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>Welcome to Manashaadi</title>
      <link href="<?php echo site_url();?>design/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
      <link href="<?php echo site_url();?>css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
      <script type='text/javascript' src='<?php echo site_url();?>js/jquery-2.2.3.min.js'></script>
      <link href="<?php echo site_url();?>css/menu.css" rel="stylesheet" type="text/css" media="all" />
      <link href="<?php echo site_url();?>design/css/style.css" rel="stylesheet" type="text/css" media="all" />
      <script type='text/javascript' src='<?php echo site_url();?>js/jquery-2.2.3.min.js'></script>
      <link href="<?php echo site_url();?>css/menu.css" rel="stylesheet" type="text/css" media="all" />
      <!-- menu style --> 
      <!--theme-style-->
      <link href="<?php echo site_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
      <!--//theme-style-->
      <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/easy-responsive-tabs.css" />
      <!--meta data-->
      <script type="application/x-javascript"> 
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
          function hideURLbar(){ window.scrollTo(0,1); } 
      </script>
      <!--//meta data-->
      <!-- online fonts -->
      <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
      <!-- /online fonts -->
      <!-- nav smooth scroll -->
      <style>
         :focus{
         outline: none;
         }
         .form1{
         /* background-image: linear-gradient(
         to top, #fbc2eb 0%, #a6c1ee 100%);*/
         padding: 5px;
         width:100%;
         margin:0 auto;
         position: relative;
         z-index: 0;
         }
         .log-form form{
         width:80%;
         margin:0 auto;
         }
         .form1 div{
         margin: 10px 10px 25px 10px;
         padding: 10px;
         width:100%;
         position: relative;
         }
         .form1 div input[type="text"],
         .form1 div input[type="password"]{
         width:100%;
         height:25px;
         position: relative;
         background-color: transparent;
         z-index: 2;
         border:1px solid transparent;
         border-bottom-color:#ccc;
         font-size: 18px;
         color: #666;
         }
         .form1 .btnF{
         width:70px;
         padding:5px;
         margin:5px calc(50% - 40px);
         border:1px solid #E8E1E1;
         border-radius: 5px;
         font-size: 15px;
         color:#214D64;
         }
         label{
         position: absolute;
         top:30%;
         left: 6%;
         display: inline-block;
         transition:  1s;
         z-index: 1;
         color:#9C52C5;
         font-size: 17px;
         }
         .stayPlaceInput{
         top: -17%;
         left: 0px;
         }
         /*===== EFFECT ======*/
         .form1 div input:focus + label{
         top:-17%;
         left:0px;
         }
         .form1 .btnF:hover{
         color:#a6c1ee
         }
         .log-form input{
         margin-bottom:0px;
         }
      </style>
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
      <!-- //nav smooth scroll -->			
      <link rel="stylesheet" href="<?php echo site_url();?>css/intlTelInput.css">
      <script src='<?php echo site_url();?>js/jquery.min.js'></script>
      <script src="<?php echo site_url();?>js/monetization.js" type="text/javascript"></script>
   </head>
   <!-- //head -->
   <!-- body -->
   <body>
      <!-- header -->
      <header>
         <div class="navbar navbar-inverse-blue navbar">
            <div class="navbar-inner">
               <div class="container">
                  <div class="col-md-6">
                     <div class="row">
                        <div class="menu">
                           <div class="logo">
                              <a class="cd-logo link link--takiri" href="<?php echo site_url();?>home"><img src="http://clientdemopanel.in/manashaadi/images/logo2.png"></a>
                           </div>
                        </div>
                     </div>
                     <!-- .cd-dropdown-wrapper -->	 
                  </div>
                  <div class="col-md-6 text-right">
                     <div class="row">
                        <p class="fx">Support: 
                           <a href="tel:+91 8500077577">8500077577 </a>/ 
                           <a href="tel:+91 8500077377">8500077377</a>
                        </p>
                     </div>
                  </div>
                  <!-- end pull-right -->
                  <div class="clearfix"> </div>
               </div>
               <!-- end container -->
            </div>
            <!-- end navbar-inner -->
         </div>
      </header>
      <section class="about-us">
         <div class="container">
            <div class="col-md-12">
               <div class="row">
                  <div class="log-form">
                     <h2>Forgot Password</h2>
                    <?php if(isset($msg)){ ?>
                		<div class="alert alert-danger alert-dismissible">
                			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                			  <strong><?php echo $msg ?></strong> 
                		</div>
                    <?php }?><br/><br/>
                     <form action="<?php echo site_url();?>login/resetpassword" method="POST" class="form1">
                        <div style="margin-bottom:0px">
                           <input type="text" name="email" 
                              data-Nclass=".labelUser" class="username" />
                           <label class="labelUser">Email Id </label>
                        </div>
                        <p class="forget-p">Enter the Email that you register with</p>
                        <button type="submit" name="submit" class="btn">Send Password</button>
                     </form>
                     <hr>
                     <p class="text-center mt-20">New to manashaadi.com? <a href="<?php echo site_url();?>register"> SignUp Free</a> </p>
                  </div>
               </div>
            </div>
         </div>
      </section>