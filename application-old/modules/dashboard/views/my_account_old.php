<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
h4.wd-70 {
    font-size: 16px;
    font-weight: bold;
    line-height: 20px;
    
}
.col-md-3.well.search {
    padding: 5px;
}
.person-details {
    margin: 5px 0 !important;
    border: 2px solid #f5f5f5;
    padding: 0 10px;
}

.fa, .fas {
    font-weight: 900;
    padding-right: 10px;
}
.divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #17a554;
}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eeeeee;
}
hr.style-two {
border: 0;
height: 0;
border-top: 1px solid rgba(0, 0, 0, 0.1);
border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.f_heading h1, h2, h3 {
    font-size: 26px !important;
    color: #70cb5e;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 5px !important;
}
.nav>li>a:focus, .nav>li>a:hover {
    /* text-decoration: none; */
     background: none !important;
}
.f_heading h1, h2, h3 {
    font-size: 24px !important;
    color: #70cb5e;
    padding: 5px;
}
.dropdown-menu{ width:350px;}

@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>

   <div class="main container-fluid">
      <div class="">
          <div class="col-md-3 col-xs-12 well container-left" style="padding:5px !important">
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
       <!-- <li><a><i class="fa fa-edit"></i> Edit Profile</a></li>
        <li class=""><a href="<?php echo site_url(); ?>dashboard/imagesinfo"><i class="fa fa-camera"></i> Manage Photo</a></li>
        <li class=""><a href=""><i class="fa fa-get-pocket"></i> Edit Preferences</a></li>
        <li class=""><a href=""><i class="fa fa-expeditedssl"></i> Privacy Options</a></li>-->
        <li>fsfsfs</li>
        </ul>
       </div>
       
        <div>
             <div class="divider col-xs-12"></div>
            <div class="col-md-12 col-xs-12">
                <strong class="username"><span style="color:#61af58"><?php echo ucfirst($primary_info['last_name'])." ".ucfirst($primary_info['first_name']); echo " (".$primary_info['profile_id'].")"; ?></span><br></strong>
            </div>
            <div class="divider col-xs-12"></div>

     <ul class="nav nav-pills nav-stacked" style="padding:0px !important;margin-right: 10px;">        
    <li><a href="<?php echo site_url(); ?>dashboard/recently_viewed"><p id="recent_views"><i class="fa fa-eye"></i> Recently Viewed(<?php echo count($recently_viewed); ?>)</p></a></li>
          <li>  <a href="<?php echo site_url(); ?>dashboard/my_shortlist"><p id="short_listed"><i class="fa fa-tag"></i> My Shortlisted(<?php echo count($shortlisted_count); ?>)</p></a></li>
        <li><a href="<?php echo site_url(); ?>dashboard/ignore_list"><p id="ignored" ><i class="fa fa-list-alt"></i> Ignored List(<?php echo count($ignored_count); ?>)</p></a></li>
            <li><a href="<?php echo site_url(); ?>dashboard/contact_list"><p id="contact_list"><i class="fa fa-address-book-o"></i> Contact List(<?php echo count($contact_list); ?>)</p></a></li>
            </ul>
        </div>
                    
                    
          </div>
          
          <div class="col-md-6 col-xs-12 search-result">
               <!--<div class="col-xs-12 person-details col-md-12">
              <div class="col-xs-12 col-md-4">
                  <lead>Complete Your Profile</lead>
                  </div>
               <div class="col-xs-12 col-md-8">
                       <div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
    68%
  </div>
</div>
                   </div>
                   
                   
                   </div>
                   
                   <div class="divider col-xs-12"></div>-->
                  <?php if($this->input->post('submit')!=''){ ?>
                  
               <div class="fx wd-100">
                  <h5 class="wd-70"><?php echo count($search_records);?> profiles found</h5>
                  <a href="<?php echo site_url();?>home/search" class="modify">Modify Search</a>
               </div>
               
               
               <?php if(isset($search_records) && count($search_records) >0) { foreach($search_records as $value){ ?>
               <div class="person-details">
                  <div class="col-md-2 profile_img">
                    
                         <?php if($value['image']!="") { ?>
                        <img class="profile_img" width="150px" height="150px" src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?> width="150px" height="150px""><?php } else{ ?>
                         <img class="profile_img" width="150px" height="150px"  src="<?php echo site_url();?>images/profilepics/noimage.jpg">
                       <?php }?> 
                  </div>
                  <div class="col-md-8">
                     <div class="col-xs-12 pull-right">
                        <div class="fx">
                           <h4 class="wd-70"><?php echo $value['first_name'] . ' ' . $value['last_name'];?><span>(ID:<?php echo $value['profile_id'];?>)</span></h4>
                           
                           <a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $value['profile_id'];?>" target="_blank" class="details">View Profile</a> 
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
                        <p class="view_update" data-id="<?php echo $value['profile_id'];  ?>">Viewed</p>
                        <p class="ex-p">Like This Profile</p>
                        <a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                        <a href="#">
                           <p class="ex-p">Contact Now</p>
                        </a>
                     </div>
                  </div>
               </div>
            <?php } } else{
                echo "No Records Found!";
            }?>
          
          </div>
         
       <?php }else{ ?>
       <?php 
            
            $completeness=$profile_complete[0]->total;
            
            if($profile_complete[0]->religion==0){
                
               $complete_profile_link=site_url()."register/religion/".$this->session->userdata('user_id');
               $btn_txt="Add your religion details";
            }
            else if($profile_complete[0]->edu_prof==0)
            {
                $complete_profile_link=site_url()."register/profession/".$this->session->userdata('user_id');
                $btn_txt="Add your profession details";
            }
            else if($profile_complete[0]->parents==0)
            {
                $complete_profile_link=site_url()."register/parents/".$this->session->userdata('user_id');
                $btn_txt="Add your parents details";
            }
            else if($profile_complete[0]->Siblings==0)
            {
                $complete_profile_link=site_url()."register/siblings/".$this->session->userdata('user_id');
                $btn_txt="Add your siblings details";
            }
            else if($profile_complete[0]->photo==0)
            {
                $complete_profile_link=site_url()."register/upload/".$this->session->userdata('user_id');
                $btn_txt="Add your images";
            }
            
            if($completeness!=100){

            ?>
            
            
            
            
            <div class="col-xs-12 person-details col-md-12">
              <div class="col-xs-12 col-md-4">
                  <lead>Complete Your Profile</lead>
                  </div>
               <div class="col-xs-12 col-md-8">
                       <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $completeness; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completeness."%"; ?>;">
                    <?php echo $completeness."%"; ?>
                    </div>
                    </div>
                </div>
                   
            </div>
                   
                   
           
                  <div class="profile_battery col-xs-12 col-md-12"  style="padding:0px">  
               <div class="profile_completeness col-xs-7 col-md-7" style="padding:0px">
                  
			   <div class="triangle-topleft col-xs-1">
			   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 7l-1.41-1.41-6.34 6.34 1.41 1.41L18 7zm4.24-1.41L11.66 16.17 7.48 12l-1.41 1.41L11.66 19l12-12-1.42-1.41zM.41 13.41L6 19l1.41-1.41L1.83 12 .41 13.41z"/></svg>
			   </div>
			   <!-- <div class="profile_completeness col-xs-8 col-md-8">
                   Complete Your Profile <?php //echo $completeness."%"; ?></div>
               </div>-->
               
               <div class="profile_completeness col-xs-5 text-right">
                 <a href="<?php echo $complete_profile_link; ?>"><?php echo $btn_txt; ?></a>
               </div>
               </div>
               <div class="divider col-xs-12"></div>
               <?php   }  ?>
               <?php if(isset($get_all_records) && count($get_all_records) >0) { foreach($get_all_records as $value){ ?>
            
                   
                
                  <div class="col-md-12 person-details">
                      
                        <div class="col-md-2" style="margin-bottom:30px;">
                   
                         <?php if($value['image']!="") { ?>
                        <img class="profile_img" src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>"><?php } else{ ?>
                         <img class="profile_img" src="<?php echo site_url();?>images/profilepics/noimage.jpg">
                       <?php }?>
                        <!--<button class="btn request"><a href="#">Requst a Photo</a></button>-->
                    
                  </div>
                    <div class="col-xs-8 pull-right" style="padding:10px 5px">
                        <div class="col-xs-12">
                           <h4 class="wd-70"><?php echo $value['first_name'] . ' ' . $value['last_name'];?><span> (ID:<?php echo $value['profile_id'];?>)</span></h4>
                           
                           <a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $value['profile_id'];?>" data-id="<?php echo $value['profile_id'];  ?>" target="_blank" class="details">View Profile</a> 
                        </div>
                        <div class="col-md-12">
                           
                              <ul class="list">
                                 <li><?php echo $value['age'];?> Years, <?php echo stripcslashes($value['height']);?></li>
                                 <li><?php echo ucwords($value['religion']);?>, <?php echo ucwords($value['caste']);?></li>
                                 <li><?php echo ucwords($value['mother_tounge']);?></li>
                                 <li><?php echo $value['heighst_education'];?></li>
                                 <li><?php echo ucwords($value['occupation']);?></li>
                                 <li><?php echo ucwords($value['annual_income']);?></li>
                              </ul>
                         
                        </div>
                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $value['about_me']); echo substr(stripslashes(str_replace("\n","",$cdata4)),0,80);?></p>
                    
                 
                     <div class="pt-60 candidate-information">
                         
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
                         
                         <div class="user_action col-xs-12" >
                        <p class="view_update" data-id="<?php echo $value['profile_id'];  ?>" ><i class="fa fa-eye <?php echo $view_class;  ?>"></i></p>
                        <p class="shortlist_update" data-id="<?php echo $value['profile_id'];  ?>" ><i class="fa fa-bookmark <?php echo $shortlist_class;  ?>"></i></p>
                        <p class="ignore_update" data-id="<?php echo $value['profile_id'];  ?>" ><i class="fa fa-times-circle <?php echo $ignored_class;  ?>"></i></p>
                        <div class="col-xs-6 ex-p">Like This Profile</div>
                       
                       
                        <a>
                            <?php 
                            
                        
                            if(count($payment_details)>0){ ?>
                            
                           <p class="ex-p col-xs-6 contact_now" data-id="<?php echo $value['profile_id'];  ?>" ><i class="fa fa-phone-square <?php echo $contact_class;  ?> " aria-hidden="true"></i> Contact Now</p>
                           
                           <?php }else{ ?>
                           
                           <a  class="ex-p update-contact-now" data-id="<?php echo $value['profile_id'];  ?>" > <i class="fa fa-phone-square <?php echo $contact_class;  ?> " aria-hidden="true"></i> Contact Now</a>
                           
                           <?php } ?>
                           
                           
                        </a>
                        </div>
                     </div>
                      </div>
                  </div>
             
            <?php } } else{
                echo "No Records Found!";
            }?>
            </div>
          </div>
       
     <?php  } ?>
     
     
       
          <div class="col-md-3 well search">
         <div class="log-form">
            <form method="POST" action="<?php echo site_url();?>dashboard/search_partner/searchprofiles" class="register-form" id="register-form">
               <h2>Search Your Partner</h2>
               <div class="divider"></div>
               <div class="form-row">
                  <div class="form-radio form-group">
                     <label for="gender" class="radio-label">Search For :</label>
                     <div style="display:flex;width:100%">
                        <div class="form-radio-item pr-10">
                           <input type="radio" name="gender"  <?php if($primary_info['gender']=="male"){ echo 'checked'; }else{ echo 'disabled'; } ?> id="bride" value="female">
                           <label for="bride">Bride</label>
                           <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                           <input type="radio" name="gender" id="groom"  <?php if($primary_info['gender']=="female"){ echo 'checked'; }else{ echo 'disabled';  } ?> value="male">
                           <label for="groom">Groom</label>
                           <span class="check"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-xs-12 fx" style="padding: 0px;" >
                      <div class="col-xs-6" >
                     <label id="label_heightId" for="heightId" title="Height">Height : </label>
                     <select class="form-control" id="heightfrom" name="heightfrom" >
                        <option value="">Select Height</option>
                        <?php foreach($heights as $value) { ?>
                        <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                     </select></div>
                     <div class="col-xs-6">
                     <span class="plr-5">to</span>
                     <select class="form-control" id="heightto" name="heightto" >
                        <option value="">Select Height</option>
                        <?php foreach($heights as $value) { ?>
                        <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                     </select></div>
                  </div>
                  <div class="form-group fx">
                      <div class="col-xs-6">
                      <label id="label_ageId" for="heightId" title="age">Age : </label>
                  <select name="agefrom" id="agefrom" class="form-control" tabindex="-1">
                        <option value="">Age</option>
                        <option selected value="18" label="18">18</option>
                        <option value="19" label="19">19</option>
                        <option value="20" label="20">20</option>
                        <option value="21" label="21">21</option>
                        <option value="22" label="22">22</option>
                        <option value="23" label="23">23</option>
                        <option value="24" label="24">24</option>
                        <option value="25" label="25">25</option>
                        <option value="26" label="26">26</option>
                        <option value="27" label="27">27</option>
                        <option value="28" label="28">28</option>
                        <option value="29" label="29">29</option>
                        <option value="30" label="30">30</option>
                        <option value="31" label="31">31</option>
                        <option value="32" label="32">32</option>
                        <option value="33" label="33">33</option>
                        <option value="34" label="34">34</option>
                        <option value="35" label="35">35</option>
                        <option value="36" label="36">36</option>
                        <option value="37" label="37">37</option>
                        <option value="38" label="38">38</option>
                        <option value="39" label="39">39</option>
                        <option value="40" label="40">40</option>
                        <option value="41" label="41">41</option>
                        <option value="42" label="42">42</option>
                        <option value="43" label="43">43</option>
                        <option value="44" label="44">44</option>
                        <option value="45" label="45">45</option>
                        <option value="46" label="46">46</option>
                        <option value="47" label="47">47</option>
                        <option value="48" label="48">48</option>
                        <option value="49" label="49">49</option>
                        <option value="50" label="50">50</option>
                     </select></div>
                     <div class="col-xs-6">
                     <span class="plr-5">to</span>
                     <select name="ageto" id="ageto" class="form-control" tabindex="-1" >
                         <option value="">Age</option>
                        <option value="18" label="18">18</option>
                        <option value="19" label="19">19</option>
                        <option value="20" label="20">20</option>
                        <option value="21" label="21">21</option>
                        <option value="22" label="22">22</option>
                        <option value="23" label="23">23</option>
                        <option value="24" label="24">24</option>
                        <option value="25" label="25">25</option>
                        <option value="26" label="26">26</option>
                        <option value="27" label="27">27</option>
                        <option value="28" label="28">28</option>
                        <option value="29" label="29">29</option>
                        <option value="30" label="30">30</option>
                        <option value="31" label="31">31</option>
                        <option value="32" label="32">32</option>
                        <option value="33" label="33">33</option>
                        <option value="34" label="34">34</option>
                        <option selected value="35" label="35">35</option>
                        <option value="36" label="36">36</option>
                        <option value="37" label="37">37</option>
                        <option value="38" label="38">38</option>
                        <option value="39" label="39">39</option>
                        <option value="40" label="40">40</option>
                        <option value="41" label="41">41</option>
                        <option value="42" label="42">42</option>
                        <option value="43" label="43">43</option>
                        <option value="44" label="44">44</option>
                        <option value="45" label="45">45</option>
                        <option value="46" label="46">46</option>
                        <option value="47" label="47">47</option>
                        <option value="48" label="48">48</option>
                        <option value="49" label="49">49</option>
                        <option value="50" label="50">50</option>
                     </select></div>
                  </div>
                  <div class="form-group col-xs-6" style="clear: both;" >
                     <label id="label_maritalStatusId" for="maritalStatusId">Marital Status</label>
                     <select class="form-control" id="maritalstatus" name="maritalstatus">
                      <option value="">Select Marital
                      Status</option>
                           <option value="never_married">Never Married</option>
                           <option value="divorced">Divorced</option>
                           <option value="widow-widower">Widow / Widower</option>
                           <option value="separated">Separated</option>
                           <option value="annulled">Annulled</option>
                     </select>
                  </div>
                  
                  <div class="form-group col-xs-6" >
                     <label id="label_religionId" for="religionId">Religion</label>
                     <select class="form-control" id="religion" name="religion">
                       <option value="">Select Religion</option>
                        <?php foreach($religions as $value) { ?>
                        <option value="<?php echo $value['religion'];?>"><?php echo stripcslashes($value['religion']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group col-xs-6" >
                     <label id="label_motherTongueId" for="motherTongueId">Mother Tongue</label>
                     <select class="form-control" id="mothertounge" name="mothertounge">
                       <option value="">Select Mother Tongue</option>
                        <?php foreach($mothertounges as $value) { ?>
                        <option value="<?php echo $value['mothertounge'];?>"><?php echo stripcslashes($value['mothertounge']);?></option><?php } ?>
                     </select>
                  </div>
                   <div class="form-group col-xs-6" >
                     <label id="label_motherTongueId" for="motherTongueId">Caste</label>
                     <select class="form-control" id="caste" name="caste">
                       <option value="">Select Caste</option>
                        <?php foreach($castes as $value) { ?>
                        <option value="<?php echo $value['caste'];?>"><?php echo stripcslashes($value['caste']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group col-xs-6">
                     <label id="label_educationLevelId" for="educationLevelId">Education Level</label>
                     <select class="form-control" id="education" name="education">
                            <option value="">Select Education</option>
                           <option value="Bachelors in Engineering">Bachelors in Engineering</option>
                           <option value="Bachelors in Medicine">Bachelors in Medicine</option>
                           <option value="Bachelors in Degree">Bachelors in Degree</option>
                           <option value="Masters in Engineering">Masters in Engineering</option>
                           <option value="Masters in Medicine">Masters in Medicine</option>
                           <option value="Masters in Degree">Masters in Degree</option>
                           <option value="Finance - ICWAI/CA/CS">Finance - ICWAI/CA/CS</option>
                           <option value="Union Public Service Commision-Civil Services">Union Public Service Commision-Civil Services</option>
                           <option value="Doctorate/phd">Doctorate/phd</option>
                           <option value="Diploma / Below Graduation">Diploma / Below Graduation</option>
                           <option value="Others">Others</option>
                     </select>
                  </div>
                 <div class="form-group col-xs-6">
                     <label id="label_educationLevelId" for="educationLevelId">Select Profession</label>
                     <select class="form-control" id="profession" name="profession">
                            <option value="">Select Profession</option>
                           <?php foreach($professions as $value) { ?>
                            <option value="<?php echo $value['profession'];?>"><?php echo stripcslashes($value['profession']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group col-xs-6">
                     <label id="label_countryOfBirthId" for="countryOfBirthId">Country Living In</label>
                     <select class="form-control" id="country" name="country">
                         <option value="">Select Country</option>
                      <?php foreach($countries as $value) { ?>
                        <option value="<?php echo $value['country'];?>"><?php echo stripcslashes($value['country']);?></option><?php } ?>
                     </select>
                  </div>
               </div>
                <div class="col-md-12 col-xs-126 submit-form" >
                    
                        <input type="submit" value="Search" class="submit btn btn-primary ml-40" name="submit" id="submit">
                   
                 
                     <a href="#" class="btn btn-warning">Reset</a>
                  </div>
            </form>
         </div>
         </div>
      </div>
   </div>
