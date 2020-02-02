<section class="dashboard person-details-main">

   <div class="container">

      <div class="col-md-12">

         <div class="row">

             

            <div class="profile-view-close">

                 <a class="close-btn">CLOSE</a>

             </div>

             

            <div class="dashboard-view-profile">

                

            

                

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

                           <h4 class="wd-70"><?php echo $primary_info['first_name'] . ' ' . $primary_info['last_name'];?> <span>(ID:<?php echo $primary_info['profile_id'];?>)</span></h4>

                        </div>

                        <div class="col-md-6">

                           <div class="row">

                              <ul>

                                 <li><?php echo $primary_info['age'];?> Years, <?php echo stripcslashes($religion_info['height']);?></li>

                                 <li><?php echo ucwords($religion_info['religion']);?>, <?php echo ucwords($religion_info['caste']);?>,<?php echo ucwords($religion_info['mother_tounge']);?></li>

                                 <li><?php echo ucwords($religion_info['marital_status']);?></li>

                              </ul>

                           </div>

                        </div>

                        <div class="col-md-6">

                           <div class="row">

                              <ul>

                                 <li><?php echo $profession_info['heighst_education'];?></li>

                                 <li><?php echo ucwords($profession_info['occupation']);?></li>

                                 <li><?php echo ucwords($profession_info['living_in']);?></li>

                              </ul>

                           </div>

                        </div>

                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $profession_info['about_me']); echo substr(stripslashes(str_replace("\n","",$cdata4)),0,80);?></p>

                     </div>

                  </div>

                  <div class="col-md-2">

                     <div class="row text-center pt-60 candidate-information">

                         

                         

                                                 <?php

                           

           

           

           //echo var_dump($recently_viewed);

           

           $view_class="";

           

           for($i=0;$i<=count($recently_viewed);$i++){

               

               

                if ($value['id']==$recently_viewed[$i]['to_msid'])

                {

                    

                $view_class="view_active";

                

                }

               

           }

           

           $shortlist_class="";

           

           for($i=0;$i<=count($shortlisted_count);$i++){

               

               

                if ($value['id']==$shortlisted_count[$i]['to_msid'])

                {

                    

                $shortlist_class="view_active";

                

                }

            

           }

           

           $ignored_class="";

           

           for($i=0;$i<=count($ignored_count);$i++){

               

               

                if ($value['id']==$ignored_count[$i]['to_msid'])

                {

                    

                $ignored_class="view_active";

                

                }

            

           }

           

            $contact_class="";

           

           for($i=0;$i<=count($contact_list);$i++){

               

               

                if ($value['id']==$contact_list[$i]['to_MSid'])

                {

                    

                $contact_class="view_active";

                

                }

            

           }

           

           

           

           ?>

                         

                            <div class="user_action">

                        <p class="view_update" data-id="<?php echo $value['profile_id'];  ?>" ><i class="fas fa-eye <?php echo $view_class;  ?>"></i></p>

                        <p class="shortlist_update" data-id="<?php echo $value['profile_id'];  ?>" ><i class="fas fa-bookmark <?php echo $shortlist_class;  ?>"></i></p>

                        <p class="ignore_update" data-id="<?php echo $value['profile_id'];  ?>" ><i class="fas fa-times-circle <?php echo $ignored_class;  ?>"></i></p>

                        <p class="ex-p">Like This Profile</p>

                        </div>

                        <div class="final-action">

                        <a><i class="fa fa-phone-square <?php echo $contact_class;  ?> " aria-hidden="true"></i></a>

                        <a>

                            

                            <?php 

                            

                            //var_dump($payment_details);die();

                            

                            

                            if(count($payment_details)>0){ ?>

                            

                           <p class="ex-p contact_now" data-id="<?php echo $value['profile_id'];  ?>" >Contact Now</p>

                           

                           <?php }else{ ?>

                           

                           <a  class="ex-p update-contact-now" data-id="<?php echo $value['profile_id'];  ?>" >Contact Now</a>

                           

                           <?php } ?>

                           

                           

                        </a>

                        </div>

                        

                     </div>

                  </div>

               </div>

               <div class="profile-view">

                  <div class="profile-heading">

                     <h3>My Astro Details</h3>

                  </div>

                  <div class="row">

                     <div class="col-md-4">

                        <p>Age:<span class="clr-blue"> <?php echo $primary_info['date'];?> -<?php echo $primary_info['month'];?>-<?php echo $primary_info['year'];?> (<?php echo $primary_info['age'];?>)</span></p>

                        <p>Star(Padam):<span class="clr-blue"> <?php echo ucwords($religion_info['star']);?></span></p>

                     </div>

                     <div class="col-md-4">

                        <p>Time Of Birth:<span class="clr-blue"> <?php echo ucwords($religion_info['time_of_birth']);?></span></p>

                        <p>Raasi:<span class="clr-blue"> <?php echo ucwords($religion_info['raasi']);?></span></p>

                     </div>

                     <div class="col-md-4">

                        <p>Place Of Birth:<span class="clr-blue"> <?php echo ucwords($religion_info['place_of_birth']);?></span></p>

                        <p>Gothram:<span class="clr-blue"> <?php echo ucwords($religion_info['gothram']);?></span></p>

                     </div>

                  </div>

               </div>

               <div class="profile-view">

                  <div class="profile-heading">

                     <h3>My Professional & Educational Details</h3>

                  </div>

                  <?php if($profession_info['education_description']!=""){ ?>

                  <div class="preson-details">

                     <h4>Educational Details</h4>

                     <p><?php echo $profession_info['education_description'];?></p>

                  </div>

                  <?php } else{ ?>

                    <div class="preson-details">

                     <h4>Educational Details</h4>

                     <p>No Description Found!</p>

                  </div>

                 <?php }?>

                  <?php if($profession_info['about_profession']!=""){ ?>

                  <div class="preson-details">

                     <h4>Professional Details</h4>

                     <p><?php echo $profession_info['about_profession'];?></p>

                  </div>

                 <?php } else{?>

                    <div class="preson-details">

                     <h4>Professional Details</h4>

                      <p>No Description Found!</p>

                  </div>

                <?php }?>

                  

                  <div class="preson-details">

                     <h4>Monthly Income:<span class="clr-blue ft-14"> <?php echo $profession_info['currency'];?> -<?php echo $profession_info['annual_income'];?></span></h4>

                  </div>

                  <div class="profile-view">

                     <div class="profile-heading">

                        <h3>Current Details</h3>

                     </div>

                  <div class="row">

                        <div class="col-md-4">

                           <p>Country Living In:<span class="clr-blue"> <?php echo ucwords($profession_info['country']);?></span></p>

                            <?php if($profession_info['visatype']!="") { ?>

                           <p>Visa Type:<span class="clr-blue"> <?php echo $profession_info['visatype'];?></span></p><?php } ?>

                             <?php if($profession_info['departure-date']!="") { ?>

                           <p>Departure Date:<span class="clr-blue"> <?php echo $profession_info['departure-date'];?></span></p><?php } ?>

                        </div>

                        <div class="col-md-4">

                           <p>State Living:<span class="clr-blue"> <?php echo ucwords($profession_info['state']);?></span></p>

                           <?php if($profession_info['residing-since']!="") { ?>

                           <p>Residing Science:<span class="clr-blue"> <?php echo $profession_info['residing-since'];?></span></p><?php } ?>

                        </div>

                        <div class="col-md-4">

                           <p>City Living:<span class="clr-blue"> <?php echo ucwords($profession_info['city']);?></span></p>

                            <?php if($profession_info['arrival-date']!="") { ?>

                           <p>Arrival Date:<span class="clr-blue"> <?php echo $profession_info['arrival-date'];?></span></p><?php } ?>

                        </div>

                 </div>

                  </div>

                  <div class="profile-heading">

                     <h3>About My Family</h3>

                  </div>

                  <div class="preson-details">

                     <p>Father Name:<span class="clr-blue"> <?php echo ucwords($parents_info['father_name']);?></span></p>

                     <p>Father Father Name And Native:<span class="clr-blue"> <?php echo ucwords($parents_info['fathers_father_name']);?>  <?php echo ucwords($parents_info['fathers_father_native_place']);?> </span></p>

                     <p>Mother Name:<span class="clr-blue"> <?php echo ucwords($parents_info['mother_name']);?></span></p>

                     <p>Mother Father Name And Native:<span class="clr-blue"> <?php echo ucwords($parents_info['mothers_father_name']);?>  <?php echo ucwords($parents_info['mothers_father_native_place']);?></span></p>

                     <p>No. Of Siblings:<span class="clr-blue"> <?php echo $siblings_info['no_of_brothers'] + $siblings_info['no_of_sisters'];?></span></p>

                  </div>

                  <div class="profile-view">

                     <div class="profile-heading">

                        <h3>Contact Details</h3>

                     </div>

                     <div class="row">

                        <div class="col-md-6">

                           <p>Phone Number:<span class="clr-blue"> +91 <?php echo $primary_info['mobile']; ?></span></p>

                        </div>

                        <div class="col-md-6">

                           <p>Email Id:<span class="clr-blue"><?php echo $primary_info['email']; ?></span></p>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>