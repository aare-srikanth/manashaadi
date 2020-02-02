<section><section>
   <div class="main">
      <div class="">
     
          <?php if($this->input->post('submit')==''){ ?>
          
          <div class="col-md-2 container-left">
              
                        <?php
                        
                        if(!empty($profile_complete[0]->photo && $profile_pic[0]['image']!='')){  ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $profile_pic[0]['image']; ?>" width="30px" height="30px" style="border-radius:50%;" >
                        <?php }else{ ?>
                        <img src="<?php echo site_url();?>assets/images/user.jpg" width="30px" height="30px" style="border-radius:50%;" >
                        <?php } ?>

        <div class="">
            
        <p class="username"><span style="color:#61af58"><?php echo ucfirst($primary_info['last_name'])." ".ucfirst($primary_info['first_name']); echo " (".$primary_info['profile_id'].")"; ?></span><br></p>
        <p class=""><a href="<?php echo site_url(); ?>dashboard">Edit Profile</a></p>
        <p class=""><a href="<?php echo site_url(); ?>dashboard/imagesinfo">Manage Photo</a></p>
        <p class=""><a href="">Edit Preferences</a></p>
        <p class=""><a href="">Privacy Options</a></p>
        </div>
        
        <div>
            
            <p id="recent_views">Recently Viewed(<?php echo count($recently_viewed); ?>)</p>
            <p id="short_listed">My Shortlisted(<?php echo count($shortlisted_count); ?>)</p>
            <p id="ignored">Ignored List(<?php echo count($ignored_count); ?>)</p>
            <p id="contact_list">Contact List(<?php echo count($contact_list); ?>)</p>
            
            
          
        
        </div>
                    
                    
          </div>
          
          <?php } ?>
          
          <div class="col-md-6 search-result">
              <div class="search-form">
                  
                  <?php if($this->input->post('submit')!=''){ ?>
                  
               <div class="fx wd-100">
                  <h5 class="wd-70"><?php echo count($search_records);?> profiles found</h5>
                  <a href="<?php echo site_url();?>dashboard/my_account" class="modify">Modify Search</a>
               </div>
              
               
               
               <?php if(isset($search_records) && count($search_records) >0) { foreach($search_records as $value){ ?>
               <div class="person-details row">
                  <div class="col-md-2">
                     <div class="row">
                         <?php if($value['image']!="") { ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>"><?php } else{ ?>
                         <img src="<?php echo site_url();?>images/profilepics/noimage.jpg">
                       <?php }?>
                        <button class="btn request"><a href="#">Requst a Photo</a></button>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="candidate-information">
                        <div class="fx">
                           <h4 class="wd-70"><?php echo $value['first_name'] . ' ' . $value['last_name'];?><span>(ID:<?php echo $value['profile_id'];?>)</span></h4>
                           
                           <a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $value['profile_id'];?>" class="details">View Profile</a> 
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <ul>
                                 <li><?php echo $value['age'];?> Years, <?php echo stripcslashes($value['height']);?></li>
                                 <li><?php echo ucwords($value['religion']);?>, <?php echo ucwords($value['caste']);?></li>
                                 <li><?php echo ucwords($value['mother_tounge']);?></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <ul>
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
            <?php } } else{
                echo "No Records Found!";
            }?>
            </div>
          </div>
         
       <?php }else{ ?>
       
       
       
       
       
       
      
               <?php if(isset($get_all_records) && count($get_all_records) >0) { foreach($get_all_records as $value){ ?>
               <div class="person-details row">
                  <div class="col-md-2">
                     <div class="row">
                         <?php if($value['image']!="") { ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>"><?php } else{ ?>
                         <img src="<?php echo site_url();?>images/profilepics/noimage.jpg">
                       <?php }?>
                        <button class="btn request"><a href="#">Requst a Photo</a></button>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="candidate-information">
                        <div class="fx">
                           <h4 class="wd-70"><?php echo $value['first_name'] . ' ' . $value['last_name'];?><span>(ID:<?php echo $value['profile_id'];?>)</span></h4>
                           
                           <a href="<?php echo site_url();?>search/profile/<?php echo $value['profile_id'];?>" class="details">View Profile</a> 
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <ul>
                                 <li><?php echo $value['age'];?> Years, <?php echo stripcslashes($value['height']);?></li>
                                 <li><?php echo ucwords($value['religion']);?>, <?php echo ucwords($value['caste']);?></li>
                                 <li><?php echo ucwords($value['mother_tounge']);?></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <ul>
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
           
           ?>
                         
                         
                        <p class="view_update <?php echo $view_class;  ?>" data-id="<?php echo $value['profile_id'];  ?>" >Viewed</p>
                        <p class="shortlist_update <?php echo $shortlist_class;  ?>" data-id="<?php echo $value['profile_id'];  ?>" >Short List</p>
                        <p class="ignore_update <?php echo $ignored_class;  ?>" data-id="<?php echo $value['profile_id'];  ?>" >Ignore</p>
                        <p class="ex-p">Like This Profile</p>
                        <a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                        <a href="#">
                           <p class="ex-p contact_now" data-id="<?php echo $value['profile_id'];  ?>" >Contact Now</p>
                        </a>
                     </div>
                  </div>
               </div>
            <?php } } else{
                echo "No Records Found!";
            }?>
            </div>
          </div>
       
     <?php  } ?>
     
     <?php if($this->input->post('submit')==''){ ?>
       
          <div class="col-md-4 search">
         <div class="log-form">
            <form method="POST" action="<?php echo site_url();?>dashboard/search/searchprofiles" class="register-form" id="register-form">
               <h1>ManaShaadi.com - Telugu Matrimony Search</h1>			   
               <div class="form-row">
                  <div class="form-radio form-group">
                     <label for="gender" class="radio-label">Search For :</label>
                     <div style="display:flex;width:100%">
                        <div class="form-radio-item pr-10">
                           <input type="radio" name="gender" id="bride" value="male">
                           <label for="bride">Bride</label>
                           <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                           <input type="radio" name="gender" id="groom" value="female">
                           <label for="groom">Groom</label>
                           <span class="check"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group fx">
                     <label id="label_heightId" for="heightId" title="Height">Height : </label>
                     <select class="form-control" id="heightfrom" name="heightfrom" style="width:46%">
                        <option value="">Select Height</option>
                        <?php foreach($heights as $value) { ?>
                        <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                     </select>
                     <span class="plr-5">to</span>
                     <select class="form-control" id="heightto" name="heightto" style="width:46%">
                        <option value="">Select Height</option>
                        <?php foreach($heights as $value) { ?>
                        <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group fx"><label id="label_ageId" for="heightId" title="age">Age : </label>
                  <select name="agefrom" id="agefrom" class="form-control" tabindex="-1" style="width:46%">
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
                     </select>
                     <span class="plr-5">to</span>
                     <select name="ageto" id="ageto" class="form-control" tabindex="-1" style="width:46%">
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
                     </select>
                  </div>
                  <div class="form-group">
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
                  
                  <div class="form-group">
                     <label id="label_religionId" for="religionId">Religion</label>
                     <select class="form-control" id="religion" name="religion">
                       <option value="">Select Religion</option>
                        <?php foreach($religions as $value) { ?>
                        <option value="<?php echo $value['religion'];?>"><?php echo stripcslashes($value['religion']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label id="label_motherTongueId" for="motherTongueId">Mother Tongue</label>
                     <select class="form-control" id="mothertounge" name="mothertounge">
                       <option value="">Select Mother Tongue</option>
                        <?php foreach($mothertounges as $value) { ?>
                        <option value="<?php echo $value['mothertounge'];?>"><?php echo stripcslashes($value['mothertounge']);?></option><?php } ?>
                     </select>
                  </div>
                   <div class="form-group">
                     <label id="label_motherTongueId" for="motherTongueId">Caste</label>
                     <select class="form-control" id="caste" name="caste">
                       <option value="">Select Caste</option>
                        <?php foreach($castes as $value) { ?>
                        <option value="<?php echo $value['caste'];?>"><?php echo stripcslashes($value['caste']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
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
                 <div class="form-group">
                     <label id="label_educationLevelId" for="educationLevelId">Select Profession</label>
                     <select class="form-control" id="profession" name="profession">
                            <option value="">Select Profession</option>
                           <?php foreach($professions as $value) { ?>
                            <option value="<?php echo $value['profession'];?>"><?php echo stripcslashes($value['profession']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label id="label_countryOfBirthId" for="countryOfBirthId">Country Living In</label>
                     <select class="form-control" id="country" name="country">
                         <option value="">Select Country</option>
                      <?php foreach($countries as $value) { ?>
                        <option value="<?php echo $value['country'];?>"><?php echo stripcslashes($value['country']);?></option><?php } ?>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-10">
                     <div class="submit-form">
                        <input type="submit" value="Search" class="submit ml-40" name="submit" id="submit">
                     </div>
                  </div>
                  <div class="col-md-2">
                     <a href="#">Reset</a>
                  </div>
               </div>
            </form>
         </div>
         </div>
         <?php } ?>
         
      </div>
   </div>
</section>