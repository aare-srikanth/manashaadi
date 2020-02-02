<section class="search_result person-details-main">
   <div class="container">
      <div class="col-md-12">
         <div class="row">
            <div class="search-form">
               <div class="fx wd-100">
                  <h5 class="wd-70"><?php echo count($search_records);?> profiles found</h5>
                  <a href="<?php echo site_url();?>dashboard/search_partner" class="modify">Modify Search</a>
               </div>
               <?php if(isset($search_records) && count($search_records) >0) { foreach($search_records as $value){ ?>
               <div class="person-details row">
                  <div class="col-md-3">
                     <div class="row">
                         <?php if($value['image']!="") { ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>"><?php } else{ ?>
                         <img src="<?php echo site_url();?>images/profilepics/noimage.jpg">
                       <?php }?>
                        <button class="btn request"><a href="#">Requst a Photo</a></button>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="candidate-information">
                        <div class="fx">
                           <h4 class="wd-70"><?php echo $value['first_name'] . ' ' . $value['last_name'];?><span>(ID:<?php echo $value['profile_id'];?>)</span></h4>
                           
                           <a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $value['profile_id'];?>" data-id="<?php echo $value['profile_id'];  ?>" target="_blank" class="details">View Profile</a> 
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
      </div>
   </div>
</section>