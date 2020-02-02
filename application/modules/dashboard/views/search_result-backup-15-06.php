<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.person-details.col-xs-12 {
   
     padding: 10px 0 !important;
   
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<section class="about-us person-details-main">
   <div class="container">
      <div class="col-md-12">
        
            <div class="search-form">
               <div class="col-xs-6 col-md-6">
                  <h5 class="wd-70"><?php echo count($search_records);?> profiles found</h5></div>
                  <div class="col-xs-6 col-md-6 text-right">
                  <a href="<?php echo site_url();?>dashboard/search_partner" class="modify ">Modify Search</a>
               </div>
                <div class="col-md-3 col-xs-12 well " style="padding:5px !important">
              <div class="col-md-3 col-xs-3" style="padding:0px !important">
                        <?php
                        
                        if(!empty($profile_complete[0]->photo && $profile_pic[0]['image']!='')){  ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $profile_pic[0]['image']; ?>" width="80px" height="80px" style="border-radius:5px; padding-left:2px;" >
                        <?php }else{ ?>
                        <img src="<?php echo site_url();?>assets/images/user.jpg" width="80px" height="80px" style="border-radius:5px; padding-left:2px;" >
                        <?php } ?>

       </div>
       <div class="col-md-9 col-xs-9" style="padding:0px !important">
           <ul  style="padding:0px !important; margin-left: 20px;     line-height: 26px;">
        <li class=""><a href="<?php echo site_url(); ?>dashboard"><i class="fa fa-edit"></i> Edit Profile</a></li>
        <li class=""><a href="<?php echo site_url(); ?>dashboard/imagesinfo"><i class="fa fa-camera"></i> Manage Photo</a></li>
        <li class=""><a href=""><i class="fa fa-get-pocket"></i> Edit Preferences</a></li>
        <li class=""><a href=""><i class="fa fa-expeditedssl"></i> Privacy Options</a></li></ul>
       </div>
       
        <div>
             <div class="divider col-xs-12"></div>
            <div class="col-md-12 col-xs-12">
                <strong class="username"><span style="color:#61af58"><?php echo ucfirst($primary_info['last_name'])." ".ucfirst($primary_info['first_name']); echo " (".$primary_info['profile_id'].")"; ?></span><br></strong>
            </div>
            <div class="divider col-xs-12"></div>

<ul class="nav nav-pills nav-stacked" style="padding:0px !important;margin-right: 10px;">        
    <li> <a href="<?php echo site_url(); ?>dashboard/recently_viewed"><p id="recent_views"><i class="fa fa-eye"></i> Recently Viewed(<?php echo count($recently_viewed); ?>)</p></a></li>
          <li>  <a href="<?php echo site_url(); ?>dashboard/my_shortlist"><p id="short_listed"><i class="fa fa-tag"></i> My Shortlisted(<?php echo count($shortlisted_count); ?>)</p></a></li>
        <li><a href="<?php echo site_url(); ?>dashboard/ignore_list"><p id="ignored" ><i class="fa fa-list-alt"></i> Ignored List(<?php echo count($ignored_count); ?>)</p></a></li>
            <li><a href="<?php echo site_url(); ?>dashboard/contact_list"><p id="contact_list"><i class="fa fa-address-book-o"></i> Contact List(<?php echo count($contact_list); ?>)</p></a></li>
            </ul>
        </div>
                    
                    
          </div>
               <?php if(isset($search_records) && count($search_records) >0) { foreach($search_records as $value){ ?>
               
               <div class="person-details col-xs-12 col-md-9 ">
                  <div class="col-md-4 col-xs-4 pull-left" style="padding: 0px;">
                    
                         <?php if($value['image']!="") { ?>
                        <img class="profile_img" width="25%" src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>"><?php } else{ ?>
                         <img class="profile_img" src="<?php echo site_url();?>images/profilepics/noimage.jpg" width="75%">
                       <?php }?>
                       <div class="col-xs-7 text-center" style="margin:10px 0;">
                       </div>
                    
                  </div> 
                  <div class="col-md-8 col-xs-8" style="padding:0px" >
                     <div class="candidate-information col-xs-12 col-md-12" style="margin-bottom:20px;" >
                        <div class="col-xs-12" >
                            <div class="col-xs-12" style="height:20px; "></div>
                              <div class="col-xs-6" style="padding:0px" >
                           <strong ><?php echo $value['first_name'] . ' ' . $value['last_name'];?><span>(ID:<?php echo $value['profile_id'];?>)</span></strong></div>
                             <div class="col-xs-6 text-right">
                           <a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $value['profile_id'];?>" class="details">View Profile</a> </div>
                        </div>
                        <div class="col-md-12">
                         
                              <ul>
                                 <li><?php echo $value['age'];?> Years, <?php echo stripcslashes($value['height']);?></li>
                                 <li><?php echo ucwords($value['religion']);?>, <?php echo ucwords($value['caste']);?></li>
                                 <li><?php echo ucwords($value['mother_tounge']);?></li>
                           
                                 <li><?php echo $value['heighst_education'];?></li>
                                 <li><?php echo ucwords($value['occupation']);?></li>
                                 <li><?php echo ucwords($value['annual_income']);?></li>
                              </ul>
                          
                        </div>
                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $value['about_me']); echo substr(stripslashes(str_replace("\n","",$cdata4)),0,80);?></p>
                     </div>
                  </div>
                  <div class="col-md-8" style="padding:0px" >
                     <div class="col-xs-5 candidate-information">
                        <p class="ex-p">Like This Profile</p></div>
                           <div class="col-xs-1 candidate-information">
                        <a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i></a></div>
                           <div class="col-xs-5 candidate-information">
                        <a href="#">
                           <p class="ex-p">Contact Now</p>
                        </a></div>
                     </div>
                  </div>
               
            <?php } } else{
                echo "No Records Found!";
            }?>
            </div>
        
      </div>
   </div>
</section>