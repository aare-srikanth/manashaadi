<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.view-profile {
    
    border:solid 1px #ccc;
    margin-bottom:10px;

}

.profile-heading{
    background:#ccc;
    padding-left:10px;
}

.profile-heading h3{
    font-size: 15px;
    color: #484848;
    padding: 5px;
}

.preson-details{
    padding-left:10px;
}

.log-form {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}
p {
    font-weight: normal !important;
}

img.profil-img {
    width: 150px;
    height: 150px;
}
span.clr-blue {
    font-weight: normal;
}
 
.page-header {
    padding-left: 10px;
    padding-top: 10px;
    margin: 0px 0px 10px 0px !important;
    padding-left: 10px;
    padding-top: 10px;
    color: #FFF;
    font-size: 16px;
    background: #ff5a60;
}
.bxslider img{
    margin-bottom: 10px;
    min-height: 250px;
    max-height: 250px;
    padding-top: 14px;
    width: 270px;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<!-- /. NAV SIDE  -->
<div class="col-xs-12 no-padding view_profile_page" style="background:#f3f3f3;"> 
   <div id="page-inner" class="container no-padding" style="margin-top:75px !important; background:#f3f3f3;padding-bottom:50px !important;">
      
<div class=" col-xs-12 col-md-12 col-lg-12 no-padding" style="border: solid 1px #eee; background:#FFF;">
    <div class="col-xs-12 col-md-12 col-lg-12 no-padding">
         <h1 class="page-header" style="padding-left:10px;">
         Complete Profile</small>
      </h1>
</div>
   <div class=" container">



    <!-- popup slider  -->


<div class="sliderPop" style="display:none;">
  <div class="ct-sliderPop-container">
     
        <?php


       
                   if(isset($images_info) && count($images_info) > 0) { $i=1; foreach($images_info as $value)
                    {

                        if($value['fullphotopath']!=''){
                     ?>


                
<div class="ct-sliderPop ct-sliderPop-slide<?php echo $i; ?> open">
   <div class="inner">
                  <a href='#' ><img src="<?php echo $value['fullphotopath'].".jpeg"; ?>" class="profil-img"></a>
                   <a class="ct-newsletter-close ct-sliderPop-close" href="#">
        <img alt="close" src="https://www.solodev.com/assets/popup-slider/popup-close.png"></a>
      </div>
    </div>



                <?php

                 $i++; 
               }

               } } ?>


       
  
    
  </div>
</div>



<!-- popup slider  -->


 <!--  to display all images -->

<div class="modal"  style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title text-center">Gallery</h4>
                            </div>
                 <!-- Modal body -->

                 <div class="modal-body">

                  <?php

                   if(isset($images_info) && count($images_info) > 0) { foreach($images_info as $value)
                    { ?>
                

                  <a href='<?php echo site_url(); ?>images/profilepics/<?php echo $value['MS_id'].'/'.$value['photoname'] ?>' ><img src="<?php echo site_url(); ?>images/profilepics/<?php echo $value['MS_id'].'/'.$value['photoname'] ?>" class="profil-img"></a>

                <?php } } ?>

                 </div>
                           
                                  <div class="form-group">
                                      <button type="button" class="btn btn-danger modal_close">Close</button>
                                  </div>
                               
                           
                </div>
              </div>
            </div>

           <!--  to display all images -->

      <div class="col-md-3 no-padding">

        

        
            <div class="all-images">
               <ul class="bxslider" style="min-height:250px;max-height:250px;overflow: hidden;text-align: center;">
                  <?php if(isset($images_info) && count($images_info) > 0) { foreach($images_info as $value) { ?>
                                <li >


                                  <?php if($value['photoname']!="" && $value['ismain']==1 && $value['isactive']) { ?>

                                  <img src="<?php echo $value['applicationphotopath'].".jpeg"; ?>" class="profil-img">
                                  
                                <?php  } else{ ?>

                                  <img src="<?php echo site_url();?>images/profilepics/noimage.jpg" class="profil-img">

                               <?php  } ?>

                                </li>
                <?php } } else{ ?>
                              <li ><a data-fancybox="gallery" href="<?php echo site_url();?>images/profilepics/noimage.jpg"><img src="<?php echo site_url();?>images/profilepics/noimage.jpg" class="profil-img"></a></li>
                             <?php } ?>
               </ul>
            </div>
            
           <div class="candidate-information">
                        <div class="col-xs-12" style="padding: 0px;">
                           <h4 style="font-weight:normal; padding:10px 0;" ><?php echo $primary_info['first_name'] . ' ' . $primary_info['last_name'];?> <span>(ID:<?php echo $primary_info['profile_id'];?>)</span></h4>
                        </div>
                        <div class="col-md-12" style="padding: 0px;">
                          
                              <ul style=" line-height: 24px; font-size: 13px;  text-align: left; list-style:none;">
                                 <li><?php echo $primary_info['age'];?> Years, <?php echo stripcslashes($religion_info['height']);?></li>
                                 <li><?php echo ucwords($religion_info['religion']);?>, <?php echo ucwords($religion_info['caste']);?>,<?php echo ucwords($religion_info['mother_tounge']);?></li>
                                 <li><?php echo ucwords($religion_info['marital_status']);?></li>
                              </ul>
                        
                        </div>
                        <div class="col-md-12" style="padding: 0px;">
                         
                              <ul>
                                 <li><?php echo $profession_info['heighst_education'];?></li>
                                 <li><?php echo ucwords($profession_info['occupation']);?></li>
                                 <li><?php echo ucwords($profession_info['living_in']);?></li>
                              </ul>
                          
                        </div>
                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $profession_info['about_me']); echo substr(stripslashes(str_replace("\n","",$cdata4)),0,80);?></p>
                     </div>
         
      </div>
      <div class=" col-xs-8 col-md-8 no-padding view_all_details">
   <div class="view-profile col-xs-12 col-md-12 no-padding">
      <div class="profile-heading">
         <h3 class="lead">My Astro Details</h3>
      </div>
      <div class="col-xs-12 col-md-12 profile_single_details">
         <div class="col-md-4" style="padding: 0px;">
            <p><strong>Age:</strong><span class="clr-blue"> <?php echo $primary_info['date'];?> -<?php echo $primary_info['month'];?> -<?php echo $primary_info['year'];?>  (<?php echo $primary_info['age'];?>)</span></p>
            <p><strong>Star(Padam):</strong><span class="clr-blue"> <?php echo ucwords($religion_info['star']);?></span></p>
         </div>
         <div class="col-md-4">
            <p><strong>Time Of Birth:</strong><span class="clr-blue"> <?php echo ucwords($religion_info['time_of_birth']);?></span></p>
            <p><strong>Raasi:</strong><span class="clr-blue"> <?php echo ucwords($religion_info['raasi']);?></span></p>
         </div>
         <div class="col-md-4">
            <p><strong>Place Of Birth:</strong><span class="clr-blue"> <?php echo ucwords($religion_info['place_of_birth']);?></span></p>
            <p><strong>Gothram:</strong><span class="clr-blue"> <?php echo ucwords($religion_info['gothram']);?></span></p>
         </div>
      </div>
      <div class="col-xs-12">&nbsp;</div>
   </div>
   <div class="view-profile col-xs-12 col-md-12 no-padding">
      <div class="profile-heading">
          <h3 class="lead">My Professional &amp; Educational Details</h3>
      </div>
      <?php if($profession_info['education_description']!=""){ ?>
      <div class="preson-details">
         <strong>Educational Details</strong>
        <p><?php 
        
      
       $profession=explode("\\r\\n",$profession_info['education_description']);
       
for($i=0;$i<count($profession);$i++){
    echo $profession[$i]."<br>";
}
       
        
      
        
        ?></p>
      </div>
      <?php } else{ ?>
            <div class="preson-details">
             <p><br>No Description Found!.<br></p>
          </div> <?php } ?>
          <?php if($profession_info['about_profession']!=""){ ?>
      <div class="preson-details">
         <strong><br>Professional Details<br></strong>
          <p><?php echo $profession_info['about_profession'];?></p>
      </div> 
      <div class="col-xs-12"> &nbsp;</div>
      <?php } else{ ?>
            <div class="preson-details">
            <h4><br>Professional Details<br></h4>
             <p>No Description Found!</p>
          </div> <?php } ?>
                <div class="col-xs-12"> &nbsp;</div>
          </div>
    <div class="view-profile col-xs-12 col-md-12 no-padding">
                     <div class="profile-heading">
                        <h3 class="lead">Current Details</h3>
                     </div>
                  <div class="col-xs-12 col-md-12 profile_single_details" style="padding: 0px;">
                        <div class="col-md-4" style="padding: 0px;">
                       <p class="preson-details"><strong>Country Living In:</strong><span class="clr-blue"> <?php echo ucwords($profession_info['country']);?></span></p>
                            <?php if($profession_info['visatype']!="") { ?>
                           <p class="preson-details"><strong>Visa Type:</strong><span class="clr-blue"> <?php echo $profession_info['visatype'];?></span></p><?php } ?>
                             <?php if($profession_info['departure-date']!="0000-00-00") { ?>
                           <p class="preson-details"><strong>Departure Date:</strong><span class="clr-blue"> <?php echo $profession_info['departure-date'];?></span></p><?php } ?>
                        </div>
                        <div class="col-md-4">
                           <p class="preson-details"><strong>State Living:</strong><span class="clr-blue"> <?php echo ucwords($profession_info['state']);?></span></p>
                           <?php if($profession_info['residing-since']!="0000-00-00") { ?>
                           <p class="preson-details">Residing Science:</strong><span class="clr-blue"> <?php echo $profession_info['residing-since'];?></span></p><?php } ?>
                        </div>
                        <div class="col-md-4">
                           <p class="preson-details"><strong>City Living:</strong><span class="clr-blue"> <?php echo ucwords($profession_info['city']);?></span></p>
                            <?php if($profession_info['arrival-date']!="0000-00-00") { ?>
                           <p class="preson-details"><strong>Arrival Date:</strong><span class="clr-blue"> <?php echo $profession_info['arrival-date'];?></span></p><?php } ?>
                        </div>
                 </div>
                       <div class="col-xs-12"> &nbsp;</div>
                  </div>
                  <div class="view-profile col-xs-12 col-md-12 no-padding">
                  <div class="profile-heading">
                      <h3 class="lead">About My Family</h3>
                  </div>
                  <div class="preson-details">
                     <p><strong>Father Name:</strong><span class="clr-blue"> <?php echo ucwords($parents_info['father_name']).",".$parents_info['father_education'].",".$parents_info['father_profession'];?></span></p>
                     <p><strong>Father Father Name And Native:</strong><span class="clr-blue"> <?php echo ucwords($parents_info['fathers_father_name']);?>  <?php echo ucwords($parents_info['fathers_father_native_place']);?> </span></p>
                     <p><strong>Mother Name:</strong><span class="clr-blue"> <?php echo ucwords($parents_info['mother_name']).",".$parents_info['mother_education'].",".$parents_info['mother_profession'];?></span></p>
                     <p><strong>Mother Father Name And Native:</strong><span class="clr-blue"> <?php echo ucwords($parents_info['mothers_father_name']);?>  <?php echo ucwords($parents_info['mothers_father_native_place']);?></span></p>
                     <!--<p><strong>No. Of Siblings:</strong><span class="clr-blue"> <?php //echo $siblings_info['no_of_brothers'] + $siblings_info['no_of_sisters'];?></span></p>-->
                     
                     <?php if($siblings_info['no_of_elder_brothers']!=0){ ?>
                    
                     <p><strong>No. Of Elder Brothers:</strong><span class="clr-blue"> <?php 
                     
                     echo $siblings_info['no_of_elder_brothers'];
                     
                     ?></span></p>
                     
                      <?php } ?>
                     
                     
                     <?php if($siblings_info['no_of_younger_brothers']!=0){ ?>
                     
                     <p><strong>No. Of Younger Brothers:</strong><span class="clr-blue"><?php 
                     
                     echo $siblings_info['no_of_younger_brothers'];
                     
                     ?></span></p>
                     
                     <?php } ?>
                     
                     
                     
                     <?php if($siblings_info['no_of_elder_sisters']!=0){ ?>
                     
                     <p><strong>No. Of Elder Sisters:</strong><span class="clr-blue"> <?php 
                     
                     echo $siblings_info['no_of_elder_sisters'];
                     
                     ?></span></p>
                     
                      <?php } ?>
                      
                      
                      
                      <?php if($siblings_info['no_of_younger_sisters']!=0){ ?>
                     
                     <p><strong>No. Of Younger Sisters:</strong><span class="clr-blue"><?php 
                     
                     echo $siblings_info['no_of_younger_sisters'];
                     
                     ?></span></p>
                     
                      <?php } ?>
                     
                     
                     
                  </div>
                  <div class="col-xs-12"> &nbsp;</div>
               </div>
                    
                <div class="view-profile col-xs-12 col-md-12 no-padding">
                  <div class="col-xs-12 col-md-12 no-padding">
                     <div class="profile-heading">
                        <h3 class="lead">Contact Details</h3>
                     </div>
                     <div class="col-xs-12 no-padding">
                        <div class="col-md-6">
                           <p><strong>Phone Number:</strong><span class="clr-blue"> +91 <?php echo $primary_info['mobile']; ?></span></p>
                        </div>
                        <div class="col-md-6">
                           <p><strong>Email Id:</strong> <span class="clr-blue"><?php echo $primary_info['email']; ?></span></p>
                        </div>
                     </div>
                  </div>
                        <div class="col-xs-12"> &nbsp;</div>
                  </div>
                  
                  </div>
            </div>
      </div>
   </div>
</section>