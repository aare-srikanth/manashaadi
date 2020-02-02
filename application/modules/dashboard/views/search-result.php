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
	color:#006A96 !important;
    
}
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


.margin-bottom-30{
    margin-bottom:30px;
}

.margin-top-30{
    margin-top:30px;
}

.padding-10{
    padding:10px;
}



.next_ms{

    margin-top: -28px;
    right: 25px;
    color: #000;
}

.previous_ms{
    position: relative;
    /* margin-top: 19px; */
    /* right: 25px; */
    color: #000;
    /* border: solid 1px #000; */
    margin-right:30px;

    transform: rotate(0deg);
}

.viewProfile-ms a, .viewProfile-ms a:hover{
    font-size: 14px;
    /* text-decoration: underline; */
    text-align: right;
    color: #ff5a60;
    font-weight: bold;
    text-transform: capitalize;
}

.inline-icon-manashaddi i{
        font-size: 18px;
}

.inline-icon-manashaddi {
    display: inline-block !important;
    padding-left: 8px;
    text-align: center;
    padding-right: 8px;
    cursor: pointer;
}


.previous_ms svg,
.next_ms svg{
    fill:#FFF;
    vertical-align: middle;
}
}

 

@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<section class="about-us person-details-main search_profiles" style="background:#f3f3f3;">
   <div class="container">
      <div class="col-md-12">
        
            <div class="search-form">
              <div class="search-form-inform">
               <div class="col-xs-2 col-xs-offset-3 col-md-2 col-md-offset-2 no-padding">
                  <h4 class="wd-70"><?php echo count($search_records);?> profiles found</h4></div>
                  <div class="col-xs-6 col-md-6 text-right no-padding">
                  <a href="<?php echo site_url();?>dashboard/search_partner" class="modify ">Modify Search</a>
               </div>
               </div>
               
               <?php //echo $session_id = $this->session->userdata('username'); ?>
               
               <?php if(isset($search_records) && count($search_records) >0) { 
               
               $nb_elem_per_page = 8;
               $page = isset($_GET['page'])?intval($_GET['page']-1):0;
               $search_records = (array)$search_records;
               $number_of_pages = intval(count($search_records)/$nb_elem_per_page)+1;
               
                $records=0;
               
               foreach(array_slice($search_records, $page*$nb_elem_per_page, $nb_elem_per_page) as $value){
               
               $records++;
               
               ?>
               
                  
               
               <div class="col-xs-8 col-xs-offset-2 search-form-single" style="margin-top: 10px;margin-bottom: 10px;padding: 20px; background:#FFF;">
               
              <div class="col-md-4">
                   <div class="col-md-2">
                    
                        <?php if($value['photoname']!="" && $value['ismain']==1 && $value['isactive']) { ?>
                        <img class="profile_img" width="25%" src="<?php echo $value['applicationphotopath'].".jpeg"; ?>"><?php } else{ ?>
                         <img class="profile_img" src="<?php echo site_url();?>images/profilepics/noimage.jpg" width="75%">
                       <?php }?>
                       
                    </div>
                    
                  </div> 
                 <div class="col-xs-8 pull-right" style="padding:10px 5px;">
                        <div class="col-xs-12">
                          <div class="col-xs-8 no-padding"><h4 class="wd-70"><?php echo $value['first_name'] . ' ' . $value['last_name'];?><span> (ID:<?php echo $value['profile_id'];?>)</span></h4></div>
						  <div class="col-xs-4 viewProfile-ms text-center"><a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $value['profile_id'];?>" data-id="<?php echo $value['profile_id'];  ?>" target="_blank" class="details">View My Profile</a> </div>
                        </div>
                        <div class="col-xs-8 content-ms">
                           
                              <div class="list" style="font-size: 13px; line-height: 22px;">
                                 <div class="col-xs-12 no-padding"><?php echo $value['age'];?> Years, <?php echo stripcslashes($value['height']);?></div>
                                 <div class="col-xs-12 no-padding"><?php echo ucwords($value['religion']);?>, <?php echo ucwords($value['caste']);?></div>
                                 <div class="col-xs-12 no-padding"><?php echo ucwords($value['mother_tounge']);?></div>
                                 <div class="col-xs-12 no-padding"><?php echo $value['heighst_education'];?></div>
                                 <div class="col-xs-12 no-padding"><?php echo ucwords($value['occupation']);?></div>
                                 <div class="col-xs-12 no-padding"><?php echo ucwords($value['annual_income']);?></div>
                              </div>
                         
                        </div>
                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $value['about_me']); echo substr(stripslashes(str_replace("\n","",$cdata4)),0,80);?></p>
                    <div class="col-xs-4 candidate-information no-padding">
                         
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
           
            <div class="user_action col-xs-12" style="    text-align: center; padding-top: 30px;">
                        <p class="view_update inline-icon-manashaddi" data-id="<?php echo $value['profile_id'];  ?>" title="Mark as Viewed" ><i class="fa fa-eye <?php echo $view_class;  ?>"></i></p>
                        <p class="shortlist_update  inline-icon-manashaddi" data-id="<?php echo $value['profile_id'];  ?>" title="Shortlist" ><i class="fa fa-bookmark <?php echo $shortlist_class;  ?>" style="color:#006A96;"></i></p>
                        <p class="ignore_update  inline-icon-manashaddi" data-id="<?php echo $value['profile_id'];  ?>"  title="Ignore" ><i class="fa fa-times-circle <?php echo $ignored_class;  ?>" style="color:#ff5a60"></i></p>
                        
						 
                       
                       
                        <div class="col-xs-12 no-padding text-right" style="margin-top: 20px;">
						<a>
                            <?php 
                            
                        
                            if(count($payment_details)>0){ ?>
                            
                           <p class="ex-p col-xs-12 contact_now" data-id="<?php echo $value['profile_id'];  ?>" > Contact Now</p>
                           
                           <?php }else{ ?>
                           
                           <a  class="ex-p col-xs-12 update-contact-now" data-id="<?php echo $value['profile_id'];  ?>" >   Contact Now</a>
                           
                           <?php } ?>
                           
                           
                        </a>
						</div>
                        </div>
                     </div>
                      </div>
                  </div>
                 
             
               
            <?php } }
            
            if($records==0){
            
            echo "<center>No Results Found!</center>";
            
            }
            
            ?>
            
       
      


      
      
   </div>
         <div class="col-xs-10 no-padding margin-top-30 margin-bottom-30 text-right">
    
<?php

 if(isset($_GET["page"])){
 
$page=$_GET["page"];

}else{

$page=1;

} ?>

<?php  

if(($page-1)!=0 ){
    
?>

<a class="submit bsbb darkbg1 white bdr previous_ms padding-10" href='./searchprofilesPage?page=<?=$page-1?>'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Previous </a>

<?php }

echo '<h4></h4>';

if($page < $number_of_pages){

?>

 
<a class="submit bsbb darkbg1 white bdr next_ms padding-10" href='./searchprofilesPage?page=<?=$page+1?>'>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Next 
</a>

<?php } ?>


</div>
</section>