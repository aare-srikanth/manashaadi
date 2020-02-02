<!doctype html>
<html lang="en">

<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;ubset=devanagari,latin-ext" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/flexslider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css">
    
    <link href="<?php echo site_url();?>css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/custom101.css"/>
    
    <title>Welcome to Manashaadi</title>
    <script type="text/javascript">         

        function showform(){


            if (document.getElementById("thru_outside").checked)
           
            {
                document.getElementById("outside").style.display="block";
                document.getElementById("manashaadi").style.display="none";
                
            }
           
         else if (document.getElementById("thru_manashaadi").checked)

            {                
                document.getElementById("outside").style.display="none";
                document.getElementById("manashaadi").style.display="block";
                

            }
        } 
    </script>


</head>

<body>

<nav class="navbar navbar-expand-md navbar-bg" >

    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"> </span>
    </button>

    <div class="collapse navbar-collapse" id="collapse_target" >
    <ul class="navbar-nav">
        <li class="nav-item dropdown" >
            <a href="#" class= "nav-link dropdown-toggle" data-toggle="dropdown" data-target="#dropdown_target"  > My Account </a>  
            <span class="caret"></span>

        <div class="dropdown-menu" aria-labelledby="dropdown_target">
            <a href="<?php echo site_url();?>register" class="dropdown-item">Free Registrations</a>
            <div class="dropdown-divider"></div>            
            <a href="<?php echo site_url();?>admin/admin_pv" class="dropdown-item">Profile Validation</a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo site_url();?>admin/admin_search" class="dropdown-item">Search</a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo site_url();?>admin/admin_payment" class="dropdown-item">Payment Details</a>

        </div>

        </li>

            

        <li class="nav-item dropdown">
            <a href="#" class= "nav-link dropdown-toggle" data-toggle="dropdown" data-target="#dropdown_target"  > Masters </a>  
            <span class="caret"></span>

        <div class="dropdown-menu" aria-labelledby="dropdown_target">
            <a href="#" class="dropdown-item">CMS</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Religious Details</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Residence Details</a>
             <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Education Details</a>

        </div>

        </li>
            


        <li class="nav-item dropdown">
            <a href="#" class= "nav-link dropdown-toggle" data-toggle="dropdown" data-target="#dropdown_target"  > Reports </a>  
            <span class="caret"></span>

        <div class="dropdown-menu" aria-labelledby="dropdown_target">
            <a href="#" class="dropdown-item">Registrations</a>          
        </div>

        </li>

            

        <li class="nav-item dropdown">
            <a href="#" class= "nav-link dropdown-toggle" data-toggle="dropdown" data-target="#dropdown_target"  > Maintainence </a>  
            <span class="caret"></span>

        <div class="dropdown-menu" aria-labelledby="dropdown_target">
			<a href="<?php echo site_url();?>admin/profile_assign" class="dropdown-item">Un Assigned Profiless</a>
			<div class="dropdown-divider"></div>   
			<a href="<?php echo site_url();?>admin/call_history" class="dropdown-item">Marketing Slide</a>
			<div class="dropdown-divider"></div>   
            <a href="<?php echo site_url();?>admin/admin_photos" class="dropdown-item">Photos</a>
            <div class="dropdown-divider"></div>   
            <a href="<?php echo site_url();?>admin/admin_del_profiles" class="dropdown-item">Delete / Settle Profiles</a> 
               
             
        </div>

        </li>
   

         <li class="nav-item">
            <a href="<?php echo site_url();?>admin/admin_home?msg=back" class="nav-link">Dashboard</a>  
        </li>

    </ul>
    </div>    

    <div >
        <ul class="navbar-nav">  

             <li class="nav-item">
                <a href="<?php echo site_url();?>admin/logout" class="nav-link">Logout</a>  
            </li>

        </ul>
    </div>    
    

</nav>
<?php session_start(); ?>