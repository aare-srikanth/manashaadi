<section class="about-us person-details-main">
   <div class="container">
      <div class="col-md-12">
         <div class="row">
            <div class="view-profile">
               <div class="person-details row">
                  <div class="col-md-3">
                     <div class="row">
                        <div class="all-images">
                           <ul class="bxslider">
                               <?php if(isset($images_info) && count($images_info) > 0) { foreach($images_info as $value) { ?>
                                <li><a data-fancybox="gallery" href="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>"><img src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>"></a></li>
                              <?php } } else{ ?>
                              <li><a data-fancybox="gallery" href="<?php echo site_url();?>images/profilepics/noimage.jpg"><img src="<?php echo site_url();?>images/profilepics/noimage.jpg"></a></li>
                             <?php } ?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="candidate-information">
                        <div class="fx">
                           <h4 class="wd-70"><?php echo $profile_info['first_name'] . ' ' . $profile_info['last_name'];?> <span>(ID:<?php echo $profile_info['profile_id'];?>)</span></h4>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <ul>
                                 <li><?php echo $profile_info['age'];?> Years, <?php echo stripcslashes($profile_info['height']);?></li>
                                 <li><?php echo ucwords($profile_info['religion']);?>, <?php echo ucwords($profile_info['caste']);?>,<?php echo ucwords($profile_info['mother_tounge']);?></li>
                                 <li><?php echo ucwords($profile_info['marital_status']);?></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <ul>
                                 <li><?php echo $profile_info['heighst_education'];?></li>
                                 <li><?php echo ucwords($profile_info['occupation']);?></li>
                                 <li><?php echo ucwords($profile_info['living_in']);?></li>
                              </ul>
                           </div>
                        </div>
                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $profile_info['about_me']); echo substr(stripslashes(str_replace("\n","",$cdata4)),0,80);?></p>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="row text-center pt-60 candidate-information">
                         
                        <a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                        <a href="<?php echo site_url();?>contactus">
                           <p class="ex-p profile-contact">Contact Now</p>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="profile-view">
                  <div class="profile-heading">
                     <h3>My Astro Details</h3>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p>Age:<span class="clr-blue"> <?php echo $profile_info['date'];?> -<?php echo $profile_info['month'];?>-<?php echo $profile_info['year'];?> (<?php echo $profile_info['age'];?>)</span></p>
                        <p>Star(Padam):<span class="clr-blue"> <?php echo ucwords($profile_info['star']);?></span></p>
                     </div>
                     <div class="col-md-4">
                        <p>Time Of Birth:<span class="clr-blue"> <?php echo ucwords($profile_info['time_of_birth']);?></span></p>
                        <p>Raasi:<span class="clr-blue"> <?php echo ucwords($profile_info['raasi']);?></span></p>
                     </div>
                     <div class="col-md-4">
                        <p>Place Of Birth:<span class="clr-blue"> <?php echo ucwords($profile_info['place_of_birth']);?></span></p>
                        <p>Gothram:<span class="clr-blue"> <?php echo ucwords($profile_info['gothram']);?></span></p>
                     </div>
                  </div>
               </div>
               <div class="profile-view">
                  <div class="profile-heading">
                     <h3>My Professional & Educational Details</h3>
                  </div>
                  <?php if($profile_info['education_description']!=""){ ?>
                  <div class="preson-details">
                     <h4>Educational Details</h4>
                     <p><?php echo $profile_info['education_description'];?></p>
                  </div>
                  <?php } else{ ?>
                    <div class="preson-details">
                     <h4>Educational Details</h4>
                     <p>No Description Found!</p>
                  </div>
                 <?php }?>
                  <?php if($profile_info['about_profession']!=""){ ?>
                  <div class="preson-details">
                     <h4>Professional Details</h4>
                     <p><?php echo $profile_info['about_profession'];?></p>
                  </div>
                 <?php } else{?>
                    <div class="preson-details">
                     <h4>Professional Details</h4>
                      <p>No Description Found!</p>
                  </div>
                <?php }?>
                  
                  <div class="preson-details">
                     <h4>Monthly Income:<span class="clr-blue ft-14"> <?php echo $profile_info['currency'];?> -<?php echo $profile_info['annual_income'];?></span></h4>
                  </div>
                  <div class="profile-view">
                     <div class="profile-heading">
                        <h3>Current Details</h3>
                     </div>
                  <div class="row">
                        <div class="col-md-4">
                           <p>Country Living In:<span class="clr-blue"> <?php echo ucwords($profile_info['country']);?></span></p>
                            <?php if($profile_info['visatype']!="") { ?>
                           <p>Visa Type:<span class="clr-blue"> <?php echo $profile_info['visatype'];?></span></p><?php } ?>
                             <?php if($profile_info['departure-date']!="") { ?>
                           <p>Departure Date:<span class="clr-blue"> <?php echo $profile_info['departure-date'];?></span></p><?php } ?>
                        </div>
                        <div class="col-md-4">
                           <p>State Living:<span class="clr-blue"> <?php echo ucwords($profile_info['state']);?></span></p>
                           <?php if($profile_info['residing-since']!="") { ?>
                           <p>Residing Science:<span class="clr-blue"> <?php echo $profile_info['residing-since'];?></span></p><?php } ?>
                        </div>
                        <div class="col-md-4">
                           <p>City Living:<span class="clr-blue"> <?php echo ucwords($profile_info['city']);?></span></p>
                            <?php if($profile_info['arrival-date']!="") { ?>
                           <p>Arrival Date:<span class="clr-blue"> <?php echo $profile_info['arrival-date'];?></span></p><?php } ?>
                        </div>
                 </div>
                  </div>
                  <div class="profile-heading">
                     <h3>About My Family</h3>
                  </div>
                  <div class="preson-details">
                     <p>Father Name:<span class="clr-blue"> <?php echo ucwords($profile_info['father_name']);?></span></p>
                     <p>Father Father Name And Native:<span class="clr-blue"> <?php echo ucwords($profile_info['fathers_father_name']);?>  <?php echo ucwords($profile_info['fathers_father_native_place']);?> </span></p>
                     <p>Mother Name:<span class="clr-blue"> <?php echo ucwords($profile_info['mother_name']);?></span></p>
                     <p>Mother Father Name And Native:<span class="clr-blue"> <?php echo ucwords($profile_info['mothers_father_name']);?>  <?php echo ucwords($profile_info['mothers_father_native_place']);?></span></p>
                     <p>No. Of Siblings:<span class="clr-blue"> <?php echo $profile_info['no_of_brothers'] + $profile_info['no_of_sisters'];?></span></p>
                  </div>
                  <div class="profile-view">
                     <div class="profile-heading">
                        <h3>Contact Details</h3>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <p>Phone Number:<span class="clr-blue"> +91 9000000000</span></p>
                        </div>
                        <div class="col-md-6">
                           <p>Email Id:<span class="clr-blue"> abc@gmail.com</span></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>