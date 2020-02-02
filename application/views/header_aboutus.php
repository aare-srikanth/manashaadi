<!DOCTYPE html>
<html lang="en">
<head>
<!--SEO START-->

<title>Manashaadi.com - Matrimony Website, Marriage Bureau, Matrimonial</title>
<meta name="description" content="ManaShaadi.com - Launched in 2019, ManaShaadi.com is a pioneer in online matchmaking and Personalized marriage services.  we are the most trusted Matrimony website In India. we also have a strong offline presence.">
<meta name="title" content="Manashaadi.com - Matrimony Website, Marriage Bureau, Matrimonial">
<meta name="keywords" content="Manashaadi.com, Matrimony Website, Marriage Bureau, Matrimonial, About Matrimony, Online Matchmaking">
<link rel="canonical" href="https://www.manashaadi.com/">
<meta name="robots" content="INDEX, FOLLOW, ARCHIVE">
<meta property="og:locale" content="en_US" /> 
<meta property="og:type" content="website" />
<meta property="og:title" content="Manashaadi.com - Matrimony Website, Marriage Bureau, Matrimonial" /> 
<meta property="og:description" content="ManaShaadi.com - Launched in 2019, ManaShaadi.com is a pioneer in online matchmaking and Personalized marriage services.  we are the most trusted Matrimony website In India. we also have a strong offline presence" /> 
<meta property="og:url" content="https://www.manashaadi.com/aboutus"/>
<meta property="og:site_name" content="Telugu Marriage Bureau" /> 
<meta property="og:image" content="https://www.manashaadi.com/design/img/logo.png" /> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="HgX3tbOQXER0tivoeG8ue72hULC6AXZ_h0myW_6bcdI" />
<!--SEO END-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134414794-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134414794-1');
</script>
    <!-- Define Charset -->
    <meta charset="utf-8">

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
    height:60px;
    
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


</style>


<body>

	<header>
    	<!--<div class="container-fluid">-->
    	     <nav class="navbar navbar-default navbar-fixed-top">  
            
            
          <?php  if($this->session->userdata('user_email') == '' &&  $this->session->userdata('user_id') == '')
                { 
            ?>
            
            <!--logo-->
            <a href="<?php echo site_url();?>" id="logo" class="pull-left nav-brand"> 
                <img src="<?php echo site_url();?>design/img/logo.png" alt="logo">
            </a>
                
				
<div class="pull-right header_login">
            	
	           
	            <a class="header_register" href="<?php echo site_url();  ?>register"><span class="btn-login text-center m-l-20">Register</span></a>
	            <div class="btn-login pull-right show">
	            	<a href="#"><span class="toggle m-r-20"></span><span class="toggleText">Login</span></a>
	            	<form class="form-inline" action="<?php echo site_url();?>login" method="POST">
	            	
		            	<div class="col-xs-5">
						  <span class="add-on"><i class="icon-user"></i></span>
						  <input class="form-control" id="prependedInput" type="text" name="email" placeholder="Email / ID">
						</div>
		            	<div class="col-xs-5">
						  <span class="add-on"><i class="icon-lock"></i></span>				  
						  <input id="prependedInput2" type="password" name="password" class="form-control input-small" placeholder="Password">
						</div>
							<div class="col-xs-2" style="  float: right;  left: -18px; top:-2px;">
		   			    <input type="submit" id="home_login" name="submit" class="btn btn-xs btn-primary" value="Sign In" style="background:#337ab7;"></div>
					</form>	
	            </div>
	            
               <?php 
                
                $err_msg=$this->session->flashdata('msg_fail');
                
                if(isset($err_msg) && !empty($err_msg)){ ?>
					<div class="alert alert-danger alert-dismissible pull-right" style="margin-top:-8px;">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong><?php echo "Error ! ".$err_msg; ?></strong> 
					</div>
				<?php } ?>
            
            </div>
            
            <?php  }else{ ?>
            
            <!--logo-->
            <a href="<?php echo site_url().'dashboard/my_account';?>" id="logo" class="pull-left nav-brand"> 
                <img src="<?php echo site_url();?>design/img/logo.png" alt="logo">
            </a>
            
            
<ul class="navbar-nav bd-navbar-nav flex-row">

     <li class="nav-item"><a href="<?php echo site_url();?>dashboard/my_account">My Account</a></li>
     <li class="nav-item"><a href="<?php echo site_url();?>dashboard/search_partner">Search</a></li>
  <li class="dropdown <?php if( ($this->uri->segment(1)=="dashboard" && $this->uri->segment(2)=="") || 
  $this->uri->segment(2)=="religion" || 
  $this->uri->segment(2)=="professionalinfo" || 
  $this->uri->segment(2)=="parentsinfo" || 
  $this->uri->segment(2)=="siblingsinfo" || 
  $this->uri->segment(2)=="imagesinfo" )
  { echo "active-menu"; } ?>" >
      <a href="<?php echo site_url();?>dashboard"><i class="fa fa-edit"></i> Edit My Profile </a>
  
  </li>
  <li class="nav-item"><a href="<?php echo site_url();?>dashboard/viewprofile" class="<?php if($this->uri->segment(2)=="viewprofile") { echo "active-menu"; } ?>"><i class="fa fa-fw fa-file"></i> View My Profile</a></li>
  <!--<li class="matches-dropdown" data-toggle="dropdown"><a href="">Matches</a>-->
  <li data-toggle="dropdown" class="matchmenu_ms"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matches <span class="caret"></span></a>
 
      
  <!--<ul class="matches-dropdown-content dropdown">-->
  
  <ul class="dropdown-menu">
    <li class="<?php if ($this->uri->segment(2) == 'recently_viewed') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/recently_viewed" class="no-padding menu_txt_ms"><i class="fa fa-eye"></i> Recently Viewed</a></li>
    <li class="<?php if ($this->uri->segment(2) == 'my_shortlist') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/my_shortlist" class="no-padding menu_txt_ms" ><i class="fa fa-tag"></i> My Shortlist</a>
    <li class="<?php if ($this->uri->segment(2) == 'ignore_list') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/ignore_list" class="no-padding menu_txt_ms"><i class="fa fa-list-alt"></i> My Ignore List</a>
    <li class="<?php if ($this->uri->segment(2) == 'contact_list') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/contact_list" class="no-padding menu_txt_ms"><i class="fa fa-address-book-o"></i> My Contact List</a>
  </ul>
 
  </li>
  <li><a href="<?php echo site_url() ?>dashboard/payment" >Upgrade</a></li>
  <li><a href="<?php echo site_url() ?>dashboard/feedback" >Help</a></li>
  <li class="<?php if($this->uri->segment(2)=="userinfo") { echo "active-menu"; } ?> dropdown style="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        
                        
                        
                        <?php
                        
                        if(!empty($profile_complete[0]->photo && $profile_pic[0]['image']!='')){  ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $profile_pic[0]['image']; ?>" width="30px" height="30px" style="border-radius:50%;" >
                        <?php }else{ ?>
                        <img src="<?php echo site_url();?>assets/images/user.jpg" width="30px" height="30px" style="border-radius:50%;" >
                        <?php } ?> <span class="caret"></span>
                    </a>
                      <ul class="dropdown-menu userprofile_ms" style=" right:0px !important; top:49px;" >

        <li class="username">
        <div class="name_profile_ms"><?php echo ucfirst($primary_info['last_name'])." ".ucfirst($primary_info['first_name']); echo " (".$primary_info['profile_id'].")"; ?></div>
        <div class="id_profile_ms">
        Account Type : 
        
        <?php
        
        $payment_details=$this->session->userdata('payment_level');
        
      
        if($payment_details=="Free"){
            echo "Free | <a href='".site_url()."dashboard/payment' class='upgrade-ms'>Upgrade Account</a>";
        }else if($payment_details=="Renewal"){
            
                    echo "Renewal | <a href='<?php echo site_url();?>dashboard/payment' class='upgrade-ms'>Upgrade Account</a>";
                }else{
                    
                     echo "Paid";
                }
                
    
        
        ?>
        
        </div>
        
        
 
       
            
            <?php 
            
            $completeness=$profile_complete[0]->total;
            
            if($profile_complete[0]->religion==0){
                
               $complete_profile_link=site_url()."register/religion/".$this->session->userdata('user_id');
            }
            else if($profile_complete[0]->edu_prof==0)
            {
                $complete_profile_link=site_url()."register/profession/".$this->session->userdata('user_id');
            }
            else if($profile_complete[0]->parents==0)
            {
                $complete_profile_link=site_url()."register/parents/".$this->session->userdata('user_id');
            }
            else if($profile_complete[0]->Siblings==0)
            {
                $complete_profile_link=site_url()."register/siblings/".$this->session->userdata('user_id');
            }
            else if($profile_complete[0]->photo==0)
            {
                $complete_profile_link=site_url()."register/upload/".$this->session->userdata('user_id');
            }
            
            

            ?>
            
            <div class="col-xs-12 no-padding">
            <p class="profile_complete"><span><?php echo $completeness."%"; ?></span> Profile Completeness <?php if($completeness!=100){ ?>  | <a href="<?php echo $complete_profile_link ?>">Complete Your Profile </a><?php  } ?> </p>
            </div>
         </li>  
         <li>
         
         <div class="col-xs-12 no-padding usermenu_ms">
         
         <div class="col-xs-6"><a class="menu_txt_ms" href="<?php echo site_url();?>dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg> Edit Profile</a></div>
         <div class="col-xs-6"><a class="menu_txt_ms" href="<?php echo site_url();?>dashboard"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg> Edit Partner Preference</a></div>
         <div class="col-xs-6"><a class="menu_txt_ms" href="<?php echo site_url();?>dashboard/feedback"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"/></svg> Feedback</a></div>
         <div class="col-xs-6"><a class="menu_txt_ms" href="<?php echo site_url();?>dashboard/logout"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/></svg> Logout</a></div>
         
         
         </div>
         
         
         
         </li>
         </ul>
                </li>
</ul>


        <div>
      
        
        </div>
        
        
</nav>
            
        <?php    }?>
            
            
            
            
           
        <!--</div>-->
    </header>
    
		    