<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Page Title -->
    <title>Matrimonial Website</title>

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="manashaadi.com, shaadi, Shaadi Matrimony, matrimonial, matrimony, marriage Bureau, Matrimony sites, telugumatrimony
">

    <!-- Page Description and Author -->
	<meta name="description" content="Manashaadi.com - Matrimony services for the people of All Community of India and the world,Telugu Matrimony, shaadi matrimonial,marriage bureau
">
<meta name="description" content="manashaadi.com, shaadi, Shaadi Matrimony, matrimonial, matrimony, marriage Bureau, Matrimony sites, telugumatrimony" title="Manashaadi.com - Shaadi Matrimony, Matrimonial Sites, Marriage Bureau" description="Manashaadi.com - Matrimony services for the people of All Community of India and the world,Telugu Matrimony, shaadi matrimonial,marriage bureau">
<meta name="author" content="Matrimonial"  title="Manashaadi.com - Shaadi Matrimony, Matrimonial Sites, Marriage Bureau">

    <!-- Stylesheet
	===================================================================================================	 -->
	
   
	<!-- Bootstrap -->
	     <link href="<?php echo site_url();?>design/css/style.css" rel="stylesheet" media="screen">
<link href="<?php echo site_url();?>design/css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo site_url();?>css/font-awesome.css" rel="stylesheet" media="screen">
	<link href="<?php echo site_url();?>design/css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
 <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<!-- Grid galery -->
	<noscript><link rel="stylesheet" type="text/css" href="<?php echo site_url();?>design/css/grid/fallback.css" /></noscript>	
	
    <link href="<?php echo site_url();?>design/css/mi_home.css" rel="stylesheet" media="screen">

	<!-- Media Queries -->
    <link href="<?php echo site_url();?>design/css/media-queries.css" rel="stylesheet" media="screen">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo site_url();?>design/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo site_url();?>design/img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url();?>design/img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url();?>design/img/icons/apple-touch-icon-114x114.png">


    

</head>

<style>

header{
   height: 45px;
    
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    color: #33ac45 !important;
    background: #FFF !important;
    border-radius: 5px;
    text-decoration: none;
}

.dropdown-menu {
   
    padding: 12px;
    line-height: 33px;
}

.sub-menu{
display: none;
  
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
   
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
  }



.dropdown-menu li{
	display:block;
}

.username{
	font-size:14px;
}


.username span{
	font-size:14px;
	color:#000;
	margin-right:10px;
}

.username a{
	font-size:13px;
	color:#006a97;
	margin-left:10px;
}

.user-details a,.user-details a:hover{
    color:#fff;
}

.divider{
	width:100%;
	background:#CCC;
	height:2px;
}

.userprofile_ms li{
    width:400px;
}
.name_profile_ms{
    font-size: 16px;
    margin-top:-10px;
}
.id_profile_ms{
    font-size: 13px;
    margin-top: -8px;
    border-bottom: solid 1px #e5e5e5;
    margin-bottom: 5px;
}

.id_profile_ms a{
    font-size:13px;
    color:#006a97;
    font-weight:bold;
    margin:0px;
}

.profile_complete{
    font-size: 13px;
    border-bottom: solid 1px #e5e5e5;
    padding-bottom: 5px;
}

.usermenu_ms, .upgrade-ms{
    font-size:13px;
}

.usermenu_ms svg{
    width: 20px;
    height: 20px;
    margin-top: 7px;
    vertical-align: top;
    margin-right: 10px;
    fill: #ccc;
}

.menu_txt_ms{
    font-size:13px;
}

.menu_txt_ms i{
    padding-right:10px !important;
    font-size:13px;
}

.matchmenu_ms ul{
border:solid 0px #000 !important;
padding:0px;
}

.matchmenu_ms ul li{
    padding: 5px;
    border-bottom: solid 1px #e8e8e8;
    color: #024;
    font-weight: normal;
}


#prependedInput, #prependedInput2{
    height:30px;
    line-height:30px;
}

.navbar-nav {
width: 95%!important;

}

.navbar-nav li a{

color: white;
    padding: 10px;
    margin-right: 30px;
    font-size: 20px;

  }

  .navbar-nav li a:hover{
  	color: white!important;
  }
.navbar-nav li ul li a{
    color: black;
    font-size: 16px;
}

.navbar-nav li ul li a:hover{
    color: black!important;
    font-size: 16px;
}

.dropdown-divider {
    height: 0;
    margin: .5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef;
}
.logout a{
	color:white!important;
	float: right;
	font-size:20px
}

.logout a:hover{
    color:white!important;
}


</style>


<body>

	<header>
    	<!--<div class="container-fluid">-->
<ul class="navbar-nav">
       <li ><a href="#">My Account <span class="caret"></span></a>
 
      
  <!--<ul class="matches-dropdown-content dropdown">-->
  
  <ul class="sub-menu">

    <li><a href="<?php echo site_url();?>register">Free Registrations</a></li>
    <div class="dropdown-divider"></div>
    <li><a href="<?php echo site_url();?>admin/admin_pv">Profile Validation</a></li>
    <div class="dropdown-divider"></div>
    <li><a href="<?php echo site_url();?>admin/admin_search" class="dropdown-item">Search</a></li>
    <div class="dropdown-divider"></div>
   <li><a href="<?php echo site_url();?>admin/admin_payment" class="dropdown-item">Payment Details</a></li>
   


  </ul>
 
  </li>

  <li>
            <a href="#"> Masters <span class="caret"></span> </a>  
           

        <ul class="sub-menu">
            <li><a href="#" class="dropdown-item">CMS</a></li>
            <div class="dropdown-divider"></div>
            <li><a href="#" class="dropdown-item">Religious Details</a></li>
            <div class="dropdown-divider"></div>
            <li><a href="#" class="dropdown-item">Residence Details</a></li>
             <div class="dropdown-divider"></div>
            <li><a href="#" class="dropdown-item">Education Details</a></li>
        </ul>

        </li>

        <li>
            <a href="#"> Reports <span class="caret"></span> </a>  
          
        <ul class="sub-menu">
            <li><a href="#" class="dropdown-item">Registrations</a></li>         
        </ul>

        </li>

        <li>
            <a href="#"> Maintainence <span class="caret"></span></a>  
           

         <ul class="sub-menu">
            <li><a href="<?php echo site_url();?>admin/admin_photos">Photos</a></li>
            <div class="dropdown-divider"></div>   
            <li><a href="<?php echo site_url();?>admin/admin_del_profiles" class="dropdown-item">Delete / Settle Profiles</a> </li>
               
             
       </ul>

        </li>


       <li class="nav-item">
            <a href="<?php echo site_url();?>admin/admin_home?msg=back" class="nav-link">Dashboard</a>  
        </li>


        
</nav>

 <div class="logout">
         	<a href="<?php echo site_url();?>admin/log_out">Logout</a>
         </div>
           
           
        <!--</div>-->
    </header>

    <!-- ======================= JQuery libs =========================== -->
    <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery-1.8.2.min.js"></script>        
        <!-- Bootstrap.js-->
        <script src="<?php echo site_url();?>design/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo site_url();?>design/js/bootstrap-select.min.js" type="text/javascript"></script>        
        <!-- Gallery -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/modernizr.custom.26633.js"></script>
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery.gridrotator.js"></script>        
        <!-- Slider -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/responsiveslides.min.js"></script>        
        <!-- Controls styles -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery.jstyling.min.js"></script>        
        <!-- Video Responsive-->
        <script src="<?php echo site_url();?>design/js/jquery.fitvids.min.js" type="text/javascript"></script>        
        <!-- Easing plugin ( optional ) -->
        <script src="<?php echo site_url();?>design/js/easing.js" type="text/javascript"></script>        
        <!-- UItoTop plugin -->
        <script src="<?php echo site_url();?>design/js/jquery.ui.totop.min.js" type="text/javascript"></script>        
        <!--  Waypoints -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/waypoints.min.js"></script>        
        <!-- Template custom script  -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery-func.js"></script>
  <!-- ======================= End JQuery libs ======================= -->


<script>

  $(document).ready(function(){

   $('.navbar-nav li a').click(function() {
   
    if($(this).next().hasClass('sub-menu')){
    /*  e.preventDefault();*/
      $('.sub-menu').slideUp();
      $('.navbar-nav ul li a').removeClass('active');
      if ($(this).next('.sub-menu').is(':visible')) {
        $(this).removeClass('active');
        $(this).next('.sub-menu').slideUp();
      } else {
        $(this).addClass('active');
        $(this).next('.sub-menu').slideToggle();
      }
    }
  });

  });

  </script>


    
		    