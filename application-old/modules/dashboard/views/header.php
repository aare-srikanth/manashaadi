<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Manashaadi</title>
      <!-- Bootstrap Styles-->
      <link href="<?php echo site_url();?>design/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
      <!-- FontAwesome Styles-->
     <link href="<?php echo site_url();?>dashboard-assets/css/font-awesome.css" rel="stylesheet" />
      <!-- Morris Chart Styles-->
      <link href="<?php echo site_url();?>dashboard-assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
      <!-- Custom Styles-->
      
     
      <link href="<?php echo site_url();?>dashboard-assets/css/custom-styles.css" rel="stylesheet" />
       
      <!-- Google Fonts-->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   </head>
   <body>
      <div id="wrapper">
       
      <nav class="navbar navbar-default">
<ul class="nav navbar-nav">
<li><a class="navbar-brand plr-30" href="<?php echo site_url();?>dashboard"><img src="<?php echo site_url();?>images/logo2.png"></a></li>
     <li><a href="<?php echo site_url();?>dashboard/my_account">My Account</a></li>
     <li><a href="<?php echo site_url();?>dashboard/search_partner">Search</a></li>
  <li class="dropdown <?php if( ($this->uri->segment(1)=="dashboard" && $this->uri->segment(2)=="") || 
  $this->uri->segment(2)=="religion" || 
  $this->uri->segment(2)=="professionalinfo" || 
  $this->uri->segment(2)=="parentsinfo" || 
  $this->uri->segment(2)=="siblingsinfo" || 
  $this->uri->segment(2)=="imagesinfo" )
  { echo "active-menu"; } ?>" >
      <a href="<?php echo site_url();?>dashboard"><i class="fa fa-edit"></i> Edit My Profile </a>
  
  </li>
  <li><a href="<?php echo site_url();?>dashboard/viewprofile" class="<?php if($this->uri->segment(2)=="viewprofile") { echo "active-menu"; } ?>"><i class="fa fa-fw fa-file"></i> View My Profile</a></li>

  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matches <span class="caret"></span></a>
          <ul class="dropdown-menu">>
    <li class="<?php if ($this->uri->segment(2) == 'recently_viewed') echo 'active-menu'; ?>" ><a href="http://glowindiablowindia.com/test2/dashboard/recently_viewed"  >Recently Viewed</a></li>
    <li class="<?php if ($this->uri->segment(2) == 'my_shortlist') echo 'active-menu'; ?>" ><a class="" href="http://glowindiablowindia.com/test2/dashboard/my_shortlist" >My Shortlist</a>
    <li class="<?php if ($this->uri->segment(2) == 'ignore_list') echo 'active-menu'; ?>" ><a class="" href="http://glowindiablowindia.com/test2/dashboard/ignore_list">My Ignore List</a>
    <li class="<?php if ($this->uri->segment(2) == 'contact_list') echo 'active-menu'; ?>" ><a class="" href="http://glowindiablowindia.com/test2/dashboard/contact_list">My Contact List</a>
  </ul>
 
        </li>
  <li><a href='<?php echo site_url()."dashboard/payment"; ?>' >Upgrade</a></li>
  <li><a href='<?php echo site_url()."dashboard/feedback"; ?>' >Help</a></li>
  <li  class="<?php if($this->uri->segment(2)=="userinfo  ") { echo "active-menu dropdown "; } ?> user-info" style="">
                    <ahref="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span>
                        
                        
                        
                        <?php
                        
                        if(!empty($profile_complete[0]->photo && $profile_pic[0]['image']!='')){  ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $profile_pic[0]['image']; ?>" width="30px" height="30px" style="border-radius:50%;" >
                        <?php }else{ ?>
                        <img src="<?php echo site_url();?>assets/images/user.jpg" width="30px" height="30px" style="border-radius:50%;" >
                        <?php } ?>
                    </a>
                    
                </li>
</ul>


 <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <p class="username"><span style="color:#61af58"><?php echo ucfirst($primary_info['last_name'])." ".ucfirst($primary_info['first_name']); echo " (".$primary_info['profile_id'].")"; ?></span><br>
        <span>Account Type : 
        
        <?php
        
      
        if(count($payment_details)==0){
            echo "Free | <a href='".site_url()."dashboard/payment'>Upgrade Account</a>";
        }else{
            
            
            
                if(($payment_details[0]['used_contacts']>=$payment_details[0]['allowed_contacts']) || ($payment_details[0]['createddate']==$payment_details[0]['expirydate'])){
                    echo "Renewal | <a href='<?php echo site_url();?>dashboard/payment'>Upgrade Account</a>";
                }else{
                    
                     echo "Paid";
                }
                
        
        }
        
        ?>
        
        </span>
          <?php 
            
            $completeness=$profile_complete[0]->total;
            
            if($profile_complete[0]->religion==0){
                
               $complete_profile_link="http://glowindiablowindia.com/test2/register/religion/".$this->session->userdata('user_id');
            }
            else if($profile_complete[0]->edu_prof==0)
            {
                $complete_profile_link="http://glowindiablowindia.com/test2/register/profession/".$this->session->userdata('user_id');
            }
            else if($profile_complete[0]->parents==0)
            {
                $complete_profile_link="http://glowindiablowindia.com/test2/register/parents/".$this->session->userdata('user_id');
            }
            else if($profile_complete[0]->Siblings==0)
            {
                $complete_profile_link="http://glowindiablowindia.com/test2/register/siblings/".$this->session->userdata('user_id');
            }
            else if($profile_complete[0]->photo==0)
            {
                $complete_profile_link="http://glowindiablowindia.com/test2/register/upload/".$this->session->userdata('user_id');
            }
            
            

            ?>
            
        </li> <li class="profile_complete">Profile Completeness : <span><?php echo $completeness."%"; ?></span><?php if($completeness!=100){ ?>  | <a href="<?php echo $complete_profile_link ?>">Complete Your Profile </a><?php  } ?> </li>
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url();?>dashboard">Edit Profile</a></li>
                            <li><a href="">Edit Partner Preference</a></li>
                            <li>><a href="<?php echo site_url();?>dashboard/feedback">Feedback</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url();?>dashboard/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>

</nav>
     
     <!-- <nav class="navbar-default navbar-side" role="navigation">
         <div class="sidebar-collapse">
            <ul class="nav">
            <li class=" <?php if ($this->uri->segment(2) == 'dashboard') echo 'active'; ?>
       <?php if ($this->uri->segment(2) == 'religion') echo 'active'; ?>
       <?php if ($this->uri->segment(2) == 'professionalinfo') echo 'active'; ?>
         <?php if ($this->uri->segment(2) == 'parentsinfo') echo 'active'; ?>
          <?php if ($this->uri->segment(2) == 'siblingsinfo') echo 'active'; ?>
           <?php if ($this->uri->segment(2) == 'imagesinfo') echo 'active'; ?>
           <?php if ($this->uri->segment(2) == 'viewprofile') echo 'active'; ?>
       " style="border:1px solid #ccc;background:#ddd;">
               <a href="<?php echo site_url();?>dashboard"><i class="fa fa-edit"></i> Edit My Profile<span class="fa arrow"></span></a>
               <ul class="nav nav-second-level" style="border:1px solid #ccc;background:#fff;">
                  <li class="<?php if($this->uri->segment(2)=="dashboard") { echo "active-menu"; } ?>">
                     <a href="<?php echo site_url();?>dashboard">Basic Details</a>
                  </li>
                  <li class="<?php if($this->uri->segment(2)=="religion") { echo "active-menu"; } ?>">
                     <a href="<?php echo site_url();?>dashboard/religion">Religion Details</a>
                  </li>
                  <li class="<?php if($this->uri->segment(2)=="professionalinfo") { echo "active-menu"; } ?>">
                     <a href="<?php echo site_url();?>dashboard/professionalinfo">Education & Profession Details</a>
                  </li>
                  <li class="<?php if($this->uri->segment(2)=="parentsinfo") { echo "active-menu"; } ?>">
                     <a href="<?php echo site_url();?>dashboard/parentsinfo">Parents Details</a>
                  </li>
                  <li class="<?php if($this->uri->segment(2)=="siblingsinfo") { echo "active-menu"; } ?>">
                     <a href="<?php echo site_url();?>dashboard/siblingsinfo">Sibling Details</a>
                  </li>
                  <li class="<?php if($this->uri->segment(2)=="imagesinfo") { echo "active-menu"; } ?>">
                     <a href="<?php echo site_url();?>dashboard/imagesinfo">Update Images</a>
                  </li>
               </ul>
               <li class="<?php if($this->uri->segment(2)=="viewprofile") { echo "active-menu"; } ?>" style="border:1px solid #ccc;background:#ddd;">
                    <a href="<?php echo site_url();?>dashboard/viewprofile"><i class="fa fa-fw fa-file"></i> View Profile</a>
                </li>
                <li class="<?php if($this->uri->segment(2)=="userinfo") { echo "active-menu"; } ?> user-info" style="border:1px solid #ccc;background:#ddd;text-align:center;">
                    <a>
                        
                        <?php if(!empty($profile_complete[5]['image'])){  ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $profile_complete[5]['image']; ?>" width="50px" height="50px" style="border-radius:50%;" >
                        <?php }else{ ?>
                        <img src="<?php echo site_url();?>assets/images/user.jpg" width="50px" height="50px" style="border-radius:50%;" >
                        <?php } ?>
                    </a>
                </li>
                
    <div>-->
       
        
    </div>
                
                </li></ul>
         </div>
      </nav>
      
    