<!--  NAVSIDE  -->
<div class="main-container">
  <div class="container no-padding" style="margin-top: 4px;margin-bottom: 20px;background-color: white;">


    <div class="col-xs-12 col-md-12 col-lg-12 no-padding">
      <h1 class="page-header" style="padding-left:10px;">
        Complete Profile
      </h1>
    </div>



    <div class="container" style="margin-top: 8px;">
      <div class="col-md-3 no-padding" style="float: left;border:solid 1px ;">

        <div class="all-images">
          <ul class="bxslider" style="min-height:250px;max-height:250px;overflow: hidden;text-align: center;">
            <?php

            if ($profile_pic[0]['applicationphotopath']) {  ?>

              <img src="<?php echo $profile_pic[0]['applicationphotopath'] . '.jpeg' ?>" class="profil-img">

            <?php } else { ?>

              <img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img">

            <?php } ?>
          </ul>
        </div>

        <div class="candidate-information">
          <div class="col-md-12" style="padding: 0px;line-height: 16px;">
            <h4 style="padding:7px;font-size: 18px;"><?php echo $primary_info['first_name'] . ' ' . $primary_info['last_name']; ?> (ID:<?php echo $primary_info['profile_id']; ?>)</h4>
          </div>
          <div class="col-md-12" style="padding: 7px;">

            <ul style=" line-height: 16px; font-size: 13px;  text-align: left; list-style:none;">
              <li><?php echo $primary_info['age']; ?> Years, <?php echo stripcslashes($religion_info['height']); ?></li>
              <li><?php echo ucwords($religion_info['religion']); ?>, <?php echo ucwords($religion_info['caste']); ?>,<?php echo ucwords($religion_info['mother_tounge']); ?></li>
              <li><?php echo ucwords($religion_info['marital_status']); ?></li>
            </ul>

          </div>
          <div class="col-md-12" style="padding: 7px;line-height: 16px;">

            <ul>
              <li><?php echo $profession_info['heighst_education']; ?></li>
              <li><?php echo ucwords($profession_info['occupation']); ?></li>
              <li><?php echo ucwords($profession_info['living_in']); ?></li>
            </ul>

          </div>
          <p class="p-20"><?php $cdata4 = preg_replace('/<[^>]*>/', '', $profession_info['about_me']);
                          echo substr(stripslashes(str_replace("\n", "", $cdata4)), 0, 80); ?></p>
        </div>

      </div>


      <div class="col-md-9 no-padding" style="float: right; border:solid 0px ; ">

        <div class="view-profile col-xs-12 col-md-12 no-padding" st>
          <div class="profile-heading">
            <h3 class="lead">My Astro Details</h3>
          </div>
          <div class="col-xs-12 col-md-12 ">
            <div class="preson-details" style="padding: 0px;width: 34%;float:left;  ">
              <p><strong>Age:</strong> <?php echo $primary_info['date']; ?> -<?php echo $primary_info['month']; ?> -<?php echo $primary_info['year']; ?> (<?php echo $primary_info['age']; ?>)</p>
              <p><strong>Star:</strong> <?php echo ucwords($religion_info['star']); ?></p>
            </div>

            <div style="padding: 0px;width: 33%;float:left;">
              <p><strong>Time Of Birth:</strong> <?php echo ucwords($religion_info['time_of_birth']); ?></p>
              <p><strong>Raasi:</strong> <?php echo ucwords($religion_info['raasi']); ?></p>
            </div>
            <div style="padding: 0px;width: 33%;float:right;">
              <p><strong>Place Of Birth:</strong> <?php echo ucwords($religion_info['place_of_birth']); ?></p>
              <p><strong>Gothram:</strong> <?php echo ucwords($religion_info['gothram']); ?></p>
            </div>
          </div>
          <div class="col-xs-12">&nbsp;</div>
        </div>


        <div class="view-profile col-xs-12 col-md-12 no-padding">
          <div class="profile-heading">
            <h3 class="lead">My Professional &amp; Educational Details</h3>
          </div>
          <?php if ($profession_info['education_description'] != "") { ?>
            <div class="preson-details">
              <strong>Educational Details</strong>
              <p><?php


                    $profession = explode("\\r\\n", $profession_info['education_description']);

                    for ($i = 0; $i < count($profession); $i++) {
                      echo $profession[$i] . "<br>";
                    }

                    ?></p>
            </div>
          <?php } else { ?>
            <div class="preson-details">
              <p><br>No Description Found!.<br></p>
            </div> <?php } ?>
          <?php if ($profession_info['about_profession'] != "") { ?>
            <div class="preson-details">
              <strong><br>Professional Details<br></strong>
              <p><?php echo $profession_info['about_profession']; ?></p>
              <p><strong>Monthly Income:</strong> <?php echo ucwords($profession_info['annual_income']); ?></p>
            </div>
            <div class="col-xs-12"> &nbsp;</div>
          <?php } else { ?>
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
          <div class="col-xs-12 col-md-12">
            <div class="preson-details" style="padding: 0px;width: 34%;float:left;">
              <p><strong>Country Living In:</strong> <?php echo ucwords($profession_info['country']); ?></p>
            </div>

            <div class="preson-details" style="padding: 0px;width: 33%;float:left;">
              <p><strong>State Living:</strong> <?php echo ucwords($profession_info['state']); ?></p>
            </div>

            <div class="preson-details" style="padding: 0px;width: 33%;float:right;">
              <p><strong>City Living:</strong> <?php echo ucwords($profession_info['city']); ?></p>
            </div>
            <?php if ($profession_info['visatype'] != "") { ?>
              <p class="preson-details"><strong>Visa Type:</strong><span class="clr-blue"> <?php echo $profession_info['visatype']; ?></span></p><?php } ?>
            <?php if ($profession_info['residing-since'] != "0000-00-00") { ?>
              <p class="preson-details">Residing Science:</strong><span class="clr-blue"> <?php echo $profession_info['residing-since']; ?></span></p><?php } ?>
            <?php if ($profession_info['arrival-date'] != "0000-00-00") { ?>
              <p class="preson-details"><strong>Arrival Date:</strong><span class="clr-blue"> <?php echo $profession_info['arrival-date']; ?></span></p><?php } ?>
            <?php if ($profession_info['departure-date'] != "0000-00-00") { ?>
              <p class="preson-details"><strong>Departure Date:</strong><span class="clr-blue"> <?php echo $profession_info['departure-date']; ?></span></p><?php } ?>

          </div>
          <div class="col-xs-12"> &nbsp;
          </div>

        </div>


        <div class="view-profile col-xs-12 col-md-12 no-padding">

          <div class="profile-heading">
            <h3 class="lead">About My Family</h3>
          </div>

          <div class="preson-details">
            <p><strong>Father Name:</strong> <?php echo ucwords($parents_info['father_name']) . ", " . $parents_info['father_education'] . ", " . $parents_info['father_profession']; ?></p>
            <?php if ($parents_info['father_mobile'] != "") { ?>
              <p class="preson-details"><strong>Father Mobile:</strong><span class="clr-blue"> <?php echo $parents_info['father_mobile']; ?></span></p><?php } ?>
            <p><strong>Father Father Name And Native:</strong> <?php echo ucwords($parents_info['fathers_father_name']); ?> , <?php echo ucwords($parents_info['fathers_father_native_place']); ?> , <?php echo ucwords($parents_info['fathers_father_district']); ?> Dist </p>
            <p><strong>Mother Name:</strong> <?php echo ucwords($parents_info['mother_name']) . ", " . $parents_info['mother_education'] . ", " . $parents_info['mother_profession']; ?></p>
            <?php if ($parents_info['mother_mobile'] != "") { ?>
              <p class="preson-details"><strong>Mother Mobile:</strong><span class="clr-blue"> <?php echo $parents_info['mother_mobile']; ?></span></p><?php } ?>
            <p><strong>Mother Father Name And Native:</strong> <?php echo ucwords($parents_info['mothers_father_name']); ?> , <?php echo ucwords($parents_info['mothers_father_native_place']); ?> , <?php echo ucwords($parents_info['mothers_father_district']); ?> Dist </p>
            <!--<p><strong>No. Of Siblings:</strong><span class="clr-blue"> <?php //echo $siblings_info['no_of_brothers'] + $siblings_info['no_of_sisters'];
                                                                            ?></span></p>-->

            <?php if ($siblings_info['no_of_elder_brothers'] != 0) { ?>

              <p><strong>No. Of Elder Brothers:</strong> <?php

                                                            echo $siblings_info['no_of_elder_brothers'];

                                                            ?></p>

            <?php } ?>


            <?php if ($siblings_info['no_of_younger_brothers'] != 0) { ?>

              <p><strong>No. Of Younger Brothers:</strong><?php

                                                            echo $siblings_info['no_of_younger_brothers'];

                                                            ?></p>

            <?php } ?>



            <?php if ($siblings_info['no_of_elder_sisters'] != 0) { ?>

              <p><strong>No. Of Elder Sisters:</strong> <?php

                                                          echo $siblings_info['no_of_elder_sisters'];

                                                          ?></p>

            <?php } ?>



            <?php if ($siblings_info['no_of_younger_sisters'] != 0) { ?>

              <p><strong>No. Of Younger Sisters:</strong><?php

                                                            echo $siblings_info['no_of_younger_sisters'];

                                                            ?></p>

            <?php } ?>



          </div>
          <div class="col-xs-12"> &nbsp;
          </div>

        </div>

        <div class="view-profile col-xs-12 col-md-12 no-padding">

          <div class="profile-heading">
            <h3 class="lead">Property Details</h3>
          </div>

          <div class="preson-details">
            <p><strong>Property Type :</strong> <?php echo ucwords($Propertyinfo['property_type']); ?></p>
            <p><strong>Property Value :</strong> <?php echo ucwords($Propertyinfo['property_value']); ?> (Lakhs)</p>
            <p><strong>Property Details :</strong> <?php echo ucwords($Propertyinfo['property_Desc']); ?></p>


          </div>
          <div class="col-xs-12"> &nbsp;
          </div>

        </div>


        <div class="view-profile col-xs-12 col-md-12 no-padding">

          <div class="col-xs-12 col-md-12 no-padding">
            <div class="profile-heading">
              <h3 class="lead">Contact Details</h3>
            </div>

            <div class="col-xs-12 ">
              <div class="preson-details" style="width: 50%;float:left;">
                <p><strong>Phone Number:</strong> +91 <?php echo $primary_info['mobile']; ?></p>
              </div>
              <div class="preson-details" style="width: 50%;float:right;">
                <p><strong>Email Id:</strong><?php echo $primary_info['email']; ?></p>
              </div>
            </div>
          </div>

          <div class="col-xs-12"> &nbsp;
          </div>

        </div>

      </div>
    </div>

  </div>
</div>

<?php
if (isset($images_info) && count($images_info) > 0) {
  ?>
  <div class="sliderPop" style="display:none;">
    <div class="ct-sliderPop-container">
      <?php
        $i = 1;
        foreach ($images_info as $value) {
          // if ($value['fullphotopath'] != '') 
          {
            ?>

          <div class="ct-sliderPop ct-sliderPop-slide<?php echo $i; ?> open">
            <div class="inner">
              <a href='<?php echo $value['fullphotopath'] . ".jpeg"; ?>'> <img src='<?php echo $value['fullphotopath'] . '.jpeg'; ?>' class="profil-img"></a>
              <a class="ct-newsletter-close ct-sliderPop-close" href="#">
                <img alt="close" src="https://www.solodev.com/assets/popup-slider/popup-close.png"></a>
            </div>
          </div>
      <?php

            $i++;
          }
        } ?>

    </div>
  </div>


<?php
}
?>



<style type="text/css">
  .view-profile {
    border: solid 1px #ccc;
    margin-bottom: 10px;
    margin-left: 8px;
  }

  .main-container {
    background-color: lightgrey;
    display: flex;
  }



  .profile-heading {
    padding-left: 0px;
  }

  .no-padding {
    padding: 0px !important;
  }

  .profile-heading h3 {
    font-size: 15px;
    padding: 5px;
    background: grey;
    margin-top: 0px;
    border-radius: 0px;

  }

  .preson-details {
    padding-left: 10px;
  }

  .log-form {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
  }

  p {
    font-weight: normal !important;
    font-size: 14px;
    line-height: 28px;

  }

  img.profil-img {
    width: 150px;
    height: 150px;
  }

  span.clr-blue {
    font-weight: normal;
    font-color: normal;

  }

  .page-header {
    padding-left: 10px;
    padding-top: 4px;
    padding-bottom: 4px;
    margin: 0px 0px 0px 0px !important;

    color: #FFF;
    font-size: 18px;
    background: #ff5a60;
  }

  .bxslider img {
    margin-bottom: 10px;
    min-height: 250px;
    max-height: 250px;
    padding-top: 0px;
    width: 270px;
  }

  @media (min-width: 768px) .navbar-nav>li {
    float: left;
    width: 100%;
  }
</style>