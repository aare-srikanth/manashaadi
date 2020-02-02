   <section>

      <div class="result-main">




         <!-- popup slider  -->


         <div class="sliderPop" style="display:none;">
            <div class="ct-sliderPop-container">

               <?php
               var_dump($images_info);

               if (isset($images_info) && count($images_info) > 0) {
                  $i = 1;
                  foreach ($images_info as $value) {

                     if ($value['fullphotopath'] != '') {
                        ?>



                        <div class="ct-sliderPop ct-sliderPop-slide<?php echo $i; ?> open">
                           <div class="inner">
                              <a href='<?php echo $value['fullphotopath'] . ".jpeg"; ?>'><img src="<?php echo $value['fullphotopath'] . ".jpeg"; ?>" class="profil-img"></a>
                              <a class="ct-newsletter-close ct-sliderPop-close" href="#">
                                 <img alt="close" src="https://www.solodev.com/assets/popup-slider/popup-close.png"></a>
                           </div>
                        </div>



               <?php

                        $i++;
                     }
                  }
               } ?>





            </div>
         </div>





         <!--  popup slider -->


         <?php if ($search_tot_rec != 0) { ?>

            <div class="result-container">
               <div class="arrow-left" style="display: flex; align-items: center;justify-content: center;font-size: 48px;"><?php echo $links; ?>
               </div>
               <div class="result">
                  <div class="result-head" style="display: flex; align-items: center;align-content: center; justify-content: center;">
                     <div style="font-size: 22px;font-weight: 700;"> Record : <?php echo $this->uri->segment(4) + 1; ?> of <?php echo $search_tot_rec; ?></div>

                     <div style="padding-left: 40px;float: right;"><a href="<?php echo site_url(); ?>admin/admin_search"><button class="submit">Modify Search</button></a></div>


                  </div>

                  <div class="result-body">
                     <div class="result-body-left">

                        <div class="result-body-left-top fx search-person-details">

                           <?php


                              if ($search_sub_rec['0']['applicationphotopath'] != "") { ?>
                              <a target="_blank" data-fancybox="gallery" href="<?php echo $search_sub_rec['0']['applicationphotopath'] . ".jpeg"; ?>">
                                 <img src="<?php echo $search_sub_rec['0']['applicationphotopath'] . ".jpeg"; ?>"></a>
                           <?php } else { ?>
                              <img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg">
                           <?php } ?>



                        </div>

                        <div class="result-body-left-bottom">

                           <table width="100%">

                              <!--   <b style="padding-top: 40px;font-weight: 500;font-size: 22px; color: blue;display: flex;"><a href="#" class="load_more"> Load more PHOTOS..</b> -->
                              <?php
                                 // $i=0;

                                 // echo count($search_img_rec);
                                 // echo "<br>";
                                 // echo $search_sub_rec['0']['id'];
                                 // echo "<br>";
                                 // echo $search_sub_rec['0']['image'];
                                 // while ( $search_img_rec['0']['image']) {

                                 //       if ($i/3 == 0){

                                 //          echo "<tr>";
                                 //       }




                                 //       if ($i/3 == 1){

                                 //          echo "</tr>";
                                 //       }

                                 //       $i++;
                                 // }
                                 ?>

                           </table>





                        </div>

                     </div>

                     <div class="result-body-right">

                        <div class="result-body-right-top">

                           <div class="result-body-right-top1">

                              <div style="width:auto;font-weight:500;font-size:18px;float: left;padding:14px 8px 14px 25px;"> <b><?php echo $search_sub_rec['0']['first_name']; ?></b></div>
                              <div style="width:auto;font-weight:500;font-size:18px;float: left;padding:14px 8px 14px 8px;"> <b><?php echo $search_sub_rec['0']['last_name']; ?></b></div>

                              <div style="width:auto;font-weight:500;font-size:18px;padding:14px 14px 14px 14px;text-align: right;"><b> ID : ( <?php echo $search_sub_rec['0']['profile_id']; ?> )</b>
                              </div>

                              <div style="width:23%;float: left;padding:14px 2px 14px 25px;">
                                 <div style="float: left;"> <?php echo $search_sub_rec['0']['date'] . "- "; ?></div>
                                 <div style="float: left;"> <?php echo $search_sub_rec['0']['month'] . "- "; ?></div>
                                 <div style="float: left;"> <?php echo $search_sub_rec['0']['year'] . ","; ?></div>
                              </div>




                              <div style="width:27%;float: left;padding:14px 14px 14px 1px;"> <?php echo " (" . $search_sub_rec['0']['age'] . " Yrs) "; ?> </div>
                              <div style="width:10%;width:auto;float: left;padding:14px 8px 14px 0px;"> <?php echo $search_sub_rec['0']['height'] . " , "; ?></div>
                              <div style="width:auto;padding:14px 14px 14px 10px;text-align: left;"><?php echo $search_sub_rec['0']['marital_status']; ?>
                              </div>


                              <div style="width:auto;float: left;padding:14px 4px 14px 25px;"> <?php echo $search_sub_rec['0']['religion'] . ","; ?></div>
                              <div style="width:auto;float: left;padding:14px 8px 14px 2px;"> <?php echo $search_sub_rec['0']['caste']; ?></div>

                              <div style="float:right;width:50%;padding:14px 14px 14px 2px;text-align:left;"><?php echo $search_sub_rec['0']['heighst_education']; ?>
                              </div>

                              <div style="width:50%;float: left;padding:14px 14px 14px 25px;"><?php echo $search_sub_rec['0']['occupation']; ?></div>
                              <div style="width:50%;float: left;padding:14px 14px 14px 0px;"> <?php echo $search_sub_rec['0']['living_in']; ?></div>

                           </div>

                           <div class="result-body-right-top2" style="text-align: center;">
                              <p class="ex-p" style="font-weight: 700;font-size: 18px;"> <a target="_blank" href="<?php echo site_url(); ?>admin/admin_search/profileview/<?php echo $search_sub_rec['0']['id']; ?>">View Profile </a></p>
                              <!-- <p class="ex-p" style="font-weight: 700;font-size: 18px;"> <a target="_blank" href="<?php echo site_url(); ?>admin/search_viewprofile/<?php echo $search_sub_rec['0']['id']; ?>">View Profile </a></p> -->

                              <br>
                              <br>
                              <br>
                              <p class="ex-p">Like This Profile</p>
                              <a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                              <a href="#">
                                 <p class="ex-p">Contact Now</p>
                              </a>

                           </div>

                        </div>


                        <div class="result-body-right-middle">


                           <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Monthly Income :</b> <?php echo $search_sub_rec['0']['annual_income']; ?></div>
                           <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Property Value :</b> <?php echo $search_sub_rec['0']['property_value']; ?> (Lakhs) </div>


                           <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Father's Native :</b> <?php echo $search_sub_rec['0']['fathers_father_district']; ?> </div>
                           <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Mother's Native :</b> <?php echo $search_sub_rec['0']['mothers_father_district']; ?> </div>

                        </div>

                        <div class="result-body-right-bottom">
                           <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Time of Birth :</b> <?php echo $search_sub_rec['0']['time_of_birth']; ?></div>
                           <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Place of Birth :</b> <?php echo $search_sub_rec['0']['place_of_birth']; ?></div>

                           <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Gothram :</b> <?php echo $search_sub_rec['0']['gothram']; ?> </div>
                           <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Star :</b> <?php echo $search_sub_rec['0']['star']; ?> </div>

                        </div>

                     </div>

                  </div>
               </div>
               <div class="arrow-right" style="display: flex; align-items: center;justify-content: center;font-size: 48px;"><?php echo $links; ?></div>
            </div>



         <?php } else { ?>

            <div class="result-container">
               <div class="result-head" style="display: flex; align-items: center;align-content: center; justify-content: center;">
                  <div style="font-size: 22px;font-weight: 700;"> No Records available </div>
                  <div style="padding-left: 100px;"><a href="<?php echo site_url(); ?>admin/admin_search" class="modify">Modify Search</a></div>
               </div>
            </div>

         <?php } ?>


      </div>
   </section>

   <style>
      .pagination>li>a,
      .pagination>li>span {
         background-color: #eae6e6;
         color: black;
      }

      .pagination>li {
         padding: 0px;
      }

      /*.pagination > li:nth-child(2){display:none;}*/
      .pagination .previous .disabled,
      .pagination .next .disabled {
         display: none;
      }
   </style>