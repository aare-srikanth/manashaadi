<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
.fa, .fas {
    font-weight: 900;
    padding-right: 10px;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.profile_img > img {
    width: 150px;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
.person-details {
    margin: 3px 0;
    border: 2px solid #f5f5f5;
    padding: 20px 10px;
    display: flex;
}
</style>
<section>
   <div class="main container">
      <div class="">
     
          
          
          <div class="col-md-12 search-result">
              <div class="col-md-12">
                  
                  
                  <?php if($this->input->post('submit')!=''){ ?>
                  
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
            
            
            
            <center>
                  <div class="profile_battery">  
               <div class="profile_completeness">
                   Complete Your Profile <?php echo $completeness."%"; ?>
               </div>
               
               
              
               
               <div class="profile_completeness">
                 <a href="<?php echo $complete_profile_link; ?>"><?php echo $btn_txt; ?></a>
               </div>
               </div>
               </center>
               
               <?php }  ?>
               
       
      
               <?php  if(isset($get_my_contactlist) && count($get_my_contactlist['primary']) >0) { for($i=0;$i<count($get_my_contactlist['primary']);$i++){
              
               ?>
               
              
               <div class="person-details col-xs-6 col-md-6 ">
                   
                    <div class="col-md-4">
                     <div class="profile_img">
                         <?php if($get_my_contactlist['image'][$i][0]['image']!="" ) { ?>
                        <img src="<?php echo site_url();?>images/profilepics/<?php echo $get_my_contactlist['image'][$i][0]['image'];?>"><?php } else{ ?>
                         <img src="<?php echo site_url();?>images/profilepics/noimage.jpg">
                       <?php }?>
                        <button class="btn request" style="margin: 10px 0;"><a href="#">Requst a Photo</a></button>
                     </div>
                  </div>
                   
                 
                  <div class="col-md-10">
                     <div class="candidate-information">
                        <div class="fx">
                           <h4 class="wd-70"><?php echo $get_my_contactlist['primary'][$i][0]['first_name'] . ' ' . $get_my_contactlist['primary'][$i][0]['last_name'];?><span> (ID:<?php echo $get_my_contactlist['primary'][$i][0]['profile_id'];?>)</span></h4>
                           
                           <a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $get_my_contactlist['primary'][$i][0]['profile_id'];?>" data-id="<?php echo $get_my_contactlist['primary'][$i][0]['profile_id'];  ?>" target="_blank" class="details">View Profile</a> 
                        </div>
                        <div class="col-md-12" style="padding: 0px;">
                         
                              <ul>
                                 <li><?php echo $get_my_contactlist['religion'][$i][0]['age'];?> Years, <?php echo stripcslashes($get_my_contactlist['religion'][$i][0]['height']);?></li>
                                 <li><?php echo ucwords($get_my_contactlist['religion'][$i][0]['religion']);?>, <?php echo ucwords($get_my_contactlist['religion'][$i][0]['caste']);?></li>
                                 <li><?php echo ucwords($get_my_contactlist['religion'][$i][0]['mother_tounge']);?></li>
                           
                                 <li><?php echo $get_my_contactlist['profession'][$i][0]['heighst_education'];?></li>
                                 <li><?php echo ucwords($get_my_contactlist['profession'][$i][0]['occupation']);?></li>
                                 <li><?php echo ucwords($get_my_contactlist['profession'][$i][0]['annual_income']);?></li>
                              </ul>
                          
                        </div>
                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $get_my_contactlist['profession'][$i][0]['about_me']); echo substr(stripslashes(str_replace("\n","",$cdata4)),0,80);?></p>
                     </div>
                      <div class="col-xs-12" style="padding:10px 0 !important;" >
                     <div class="pt-60 candidate-information">
                         
                           <?php
           $view_class="";
           
           for($j=0;$j<=count($recently_viewed);$j++){
               
               
                if ($get_my_contactlist['primary'][$i][0]['id']==$recently_viewed[$j]['to_msid'])
                {
                    
                $view_class="view_active";
                
                }
               
           }
           
           $shortlist_class="";
           
           for($j=0;$j<=count($shortlisted_count);$j++){
               
               
                if ($get_my_contactlist['primary'][$i][0]['id']==$shortlisted_count[$j]['to_msid'])
                {
                    
                $shortlist_class="view_active";
                
                }
            
           }
           
           $ignored_class="";
           
           for($j=0;$j<=count($ignored_count);$j++){
               
               
                if ($get_my_contactlist['primary'][$i][0]['id']==$ignored_count[$j]['to_msid'])
                {
                    
                $ignored_class="view_active";
                
                }
            
           }
           
            $contact_class="";
           
           for($j=0;$j<=count($contact_list);$j++){
               
               
                if ($get_my_contactlist['primary'][$i][0]['id']==$contact_list[$j]['to_MSid'])
                {
                    
                $contact_class="view_active_background";
                
                }
            
           }
           
           
           
           ?>
                         
                        <div class="user_action" style="padding:10px 0;">
                        <p class="view_update" data-id="<?php echo $get_my_contactlist['primary'][$i][0]['profile_id'];  ?>" ><i class="fa fa-eye <?php echo $view_class;  ?>"></i></p>
                        <p class="shortlist_update" data-id="<?php echo $get_my_contactlist['primary'][$i][0]['profile_id'];  ?>" ><i class="fa fa-bookmark <?php echo $shortlist_class;  ?>"></i></p>
                        <p class="ignore_update" data-id="<?php echo $get_my_contactlist['primary'][$i][0]['profile_id'];  ?>" ><i class="fa fa-times-circle <?php echo $ignored_class;  ?>"></i></p>
                        <p class="col-xs-6 btn btn-primary" style="margin:10px 0">Like This Profile</p>
                        </div>
                        <div class="final-action col-xs-6">
                        <a>
                            <?php 
                            if(count($payment_details)>0){ ?>
                            
                           <button class="btn btn-primary ex-p contact_now <?php echo $contact_class;  ?>" data-id="<?php echo $get_my_contactlist['primary'][$i][0]['profile_id'];  ?>" ><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Now</button>
                           
                           <?php }else{ ?>
                           
                           <button class="btn btn-primary ex-p update-contact-now" data-id="<?php echo $get_my_contactlist['primary'][$i][0];  ?>" > <i class="fa fa-phone-square <?php echo $contact_class;  ?> " aria-hidden="true"></i>  Contact Now</button>
                           
                           <?php } ?>
                           
                           
                        </a>
                        </div>
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
     
     
       
         
      </div>
   </div>
</section>