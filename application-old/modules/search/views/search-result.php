<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}

.phone_ms i{
    font-size:35px;
    margin: 15px;
    
}

.ex-p {
    margin-top:15px;
    margin-bottom:15px;
    
}

   .contact_now{
		line-height: 26px;
		background: #17a554;
		border-radius: 0px;
		text-align: center;
		color: #FFF;
		font-size: 14px;
   }
   
      .contact_now:hover{

	   background:#ff5a60;

   }
   
.about-us {
    margin-top: 50px !important;
    background:#f5f5f5;
    padding-bottom:50px;
}

@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<section class="about-us person-details-main">
   <div class="container">
      <div class="col-md-9 col-md-offset-1">
        
            <div class="search-form">
               <div class="col-xs-6">
                  <h5 class="wd-70"></strong></div>
               <div class="col-xs-6 text-right">
                  <a href="<?php echo site_url().'search';?>" class="modify">Modify Search</a>
               </div>
               <?php if(isset($search_records) && count($search_records) >0) { foreach($search_records as $value){ ?>
               <div class="person-details col-xs-12 ">
                  <div class="col-md-3 col-xs-3 pull-left">
                    
                         <?php if($value['photoname']!="" && $value['ismain']==1 && $value['isactive']) { ?>
                        <img class="profile_img" width="25%" src="<?php echo $value['applicationphotopath'].".jpeg"; ?>"><?php } else{ ?>
                         <img class="profile_img" src="<?php echo site_url();?>images/profilepics/noimage.jpg" width="75%">
                       <?php }?>
                       <div class="col-xs-12 text-center" style="display:none;">
                        <button class="btn request"><a href="#">Requst a Photo</a></button></div>
                    
                  </div>
                  <div class="col-md-7 col-xs-7">
                     <div class="candidate-information">
                        <div class="fx">
                           <h4 class="wd-70"><?php echo $value['first_name'] . ' ' . $value['last_name'];?><span>(ID:<?php echo $value['profile_id'];?>)</span></h4>
                           
                          
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <ul>
                                 <li><?php echo $value['age'];?> Years, <?php echo stripcslashes($value['height']);?></li>
                                 <li><?php echo ucwords($value['religion']);?>, <?php echo ucwords($value['caste']);?></li>
                                 <li><?php echo ucwords($value['mother_tounge']);?></li>
                                  <li><?php echo $value['heighst_education'];?></li>
                                 <li><?php echo ucwords($value['occupation']);?></li>
                                 <li><?php echo ucwords($value['annual_income']);?></li>
                              </ul>
                           </div>
                        </div>
                        
                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $value['about_me']); echo substr(stripslashes(str_replace("\n","",$cdata4)),0,80);?></p>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="row text-center pt-60 candidate-information">
                         <p><a href="<?php echo site_url();?>search/profile/<?php echo $value['profile_id'];?>" class="details">View My Profile</a> </p>
                        <a href="#" class="phone_ms"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                        <a href="<?php echo site_url()."register"; ?>">
                           <p class="ex-p btn btn-primary btn-sm">Contact Now</p>
                        </a>
                     </div>
                  </div>
               </div>
            <?php } } else{
                echo "No Records Found!";
            }?>
            </div>
        
      </div>
   </div>
</section>