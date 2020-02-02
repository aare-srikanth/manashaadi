<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.log-form {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}
.view-profile{
background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
 <div id="page-inner" style="margin-top:60px; border:solid 0px #000; background:#f3f3f3">
     
     <div class="container">
          <div class="col-xs-12">
              <div class="col-xs-12">
                  <div class="sidebar col-xs-3" style="margin-top:98px">
                   <div class="dropdown-content">
                       
    <?php $user_id=$this->session->userdata('admin_user_id')  ?>
                       
    <a class="<?php if($this->uri->segment(2)=="edit_profile" && $this->uri->segment(2)=="edit_profile") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_profile/<?php echo $user_id; ?>">Basic Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_religion") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_religion/<?php echo $user_id; ?>">Religion Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_profession") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_profession/<?php echo $user_id; ?>">Education & Profession Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_property") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_property/<?php echo $user_id; ?>">Property Details</a>
     <a class="<?php if($this->uri->segment(2)=="edit_parents") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_parents/<?php echo $user_id; ?>">Parents Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_siblings") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_siblings/<?php echo $user_id; ?>">Sibling Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_images") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_images/<?php echo $user_id; ?>">Update Images</a>
           
  </ul>
  
                </div>
              </div>
                  <div class="col-xs-9 no-padding">
                <div class="col-md-12">
                <h1 class="page-header">
                <i class="fa fa-book" aria-hidden="true"></i> Religion Details</small>
                </h1>
                </div>
                
<?php if(isset($msg)){ ?>
					<div class="alert alert-info alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong><?php echo $msg ?></strong> 
					</div>
				<?php }?>
<div class="col-md-12 col-xs-12 view-profile ">
   
      
         <form method="POST" action="" class="register-form" id="register-form">
             <input type="hidden" value="<?php echo $user_id; ?>" name="user_id"/>
            <div class="form-row" style="padding:10px 0">
               <div class="form-group col-md-6 col-xs-12" >
                  <label for="country">Marital Status :</label>
                  <select class="form-control input-sm" id="marital_status" name="marital_status">
                    <option value="">Select Marital Status</option>
                   <option <?php if($religion_info['marital_status'] == "never_married") { ?> selected <?php } ?> value="never_married">Never Married</option>
                   <option <?php if($religion_info['marital_status'] == "divorced") { ?> selected <?php } ?> value="divorced">Divorced</option>
                   <option <?php if($religion_info['marital_status'] == "widow-widower") { ?> selected <?php } ?> value="widow-widower">Widow / Widower</option>
                   <option <?php if($religion_info['marital_status'] == "separated") { ?> selected <?php } ?> value="separated">Separated</option>
                   <option <?php if($religion_info['marital_status'] == "annulled") { ?> selected <?php } ?> value="annulled">Annulled</option>
                  </select>
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="height">Height :</label>
                  <select class="form-control input-sm" id="height" name="height" aria-invalid="false">
                     <option selected="selected">Select Height</option>
                           <?php foreach($heights as $value) { ?>
                           <option <?php if(stripcslashes($religion_info['height']) == stripcslashes($value['height'])) { ?> selected <?php } ?> value="<?php echo stripcslashes($value['height']);?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                  </select>
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="country">Religion :</label>
                  <select class="form-control input-sm"id="religion" name="religion" onchange="showPrompt('casteName');showPrompt('subCasteName');">
                     <option selected="selected">Select Religion</option>
                           <?php foreach($religions as $value) { ?>
                           <option <?php if($religion_info['religion'] == $value['religion']) { ?> selected <?php } ?> value="<?php echo $value['religion'];?>"><?php echo $value['religion'];?></option><?php } ?>
                  </select>
                  <!-- <span class="select-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>-->
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="country">Mother Tongue :</label>
                  <select class="form-control input-sm" id="mothertounge" name="mothertounge">
                   <option selected="selected">Select Mother Tongue</option>
                           <?php foreach($mother_tounges as $value) { ?>
                           <option <?php if($religion_info['mother_tounge'] == $value['mothertounge']) { ?> selected <?php } ?> value="<?php echo $value['mothertounge'];?>"><?php echo $value['mothertounge'];?></option><?php } ?>
                  </select>
                 
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="casteName">Caste :</label>
                  <select class="form-control input-sm" id="caste" name="caste" onchange="getsubcaste(this.value)">
                     <option selected="selected">Select Caste</option><?php foreach($castes as $value) { ?>
                           <option <?php if($religion_info['caste'] == $value['caste']) { ?> selected <?php } ?> value="<?php echo $value['caste'];?>"><?php echo $value['caste'];?></option><?php } ?>
                  </select>
                  
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="casteName">Sub Caste :</label>
                  <select class="form-control input-sm" id="subcaste" name="subcaste">
                     <option value="">Select Subcaste</option>
                           <?php foreach($subcastes as $value) { ?>
                           <option <?php if($religion_info['sub_caste'] == $value['subcaste']) { ?> selected <?php } ?> value="<?php echo $value['subcaste'];?>"><?php echo $value['subcaste'];?></option><?php } ?>
                  </select>
                 
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="gothram">Gothram :</label>
                  <input type="text" name="gothram" id="gothram" class="form-control" value="<?php echo $religion_info['gothram'];?>">
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="place">Place Of Birth :</label>
                  <input type="place" name="place" id="place" class="form-control" value="<?php echo $religion_info['place_of_birth'];?>">
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="last_name">Time of Birth :</label>
                  <div class="input-group time" id="timepicker"><input class="form-control" value="<?php echo $religion_info['time_of_birth'];?>" name="time"><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                  </div>
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label id="label_starId" for="starId">Star</label>
                  <select class="form-control input-sm" id="star" name="star">
                    <option value="">Select Star</option>
                           <?php foreach($stars as $value) { ?>
                           <option <?php if($religion_info['star'] == $value['star']) { ?> selected <?php } ?> value="<?php echo $value['star'];?>"><?php echo $value['star'];?></option><?php } ?>
                  </select>
                 
               </div>
               <div class="form-group col-md-4 col-xs-12" style="clear:both">
                  <label id="label_maternalGothramName" for="maternalGothramName">Raasi :</label>
                  <select class="form-control input-sm" id="raasi" name="raasi">
                     <option value="">Select Raasi</option>
                           <?php foreach($zodic_signs as $value) { ?>
                           <option <?php if($religion_info['raasi'] == $value['zodic']) { ?> selected <?php } ?> value="<?php echo $value['zodic'];?>"><?php echo $value['zodic'];?></option><?php } ?>
                  </select>
                
               </div>
               <div class="form-radio form-group col-md-8 col-xs-12" >
                  <label for="dosham" class="radio-label">Dosham :</label><br/>
                
                     <div class="form-radio-item pr-10 col-xs-2" style="padding: 0px;">
                        <input type="radio" name="dosham" id="dosham" value="no" <?php if($religion_info['dosham'] == "no") { ?> checked <?php } ?>>
                        <label for="no">No</label>
                        <span class="check"></span>
                     </div>
                     <div class="form-radio-item col-xs-2" style="padding: 0px;">
                        <input type="radio" name="dosham" id="dosham" value="yes" <?php if($religion_info['dosham'] == "yes") { ?> checked <?php } ?>>
                        <label for="yes">Yes</label>
                        <span class="check"></span>
                     </div>
                     <div class="form-radio-item col-xs-4" style="padding: 0px;">
                        <input type="radio" name="dosham" id="dosham" value="dont_know" <?php if($religion_info['dosham'] == "dont_know") { ?> checked <?php } ?>>
                        <label for="dont_know">Don't Know</label>
                        <span class="check"></span>
                     </div>
                 
               </div>
            </div>
            <div class="submit-form col-xs-12 text-center" style="margin-bottom:20px;">
              <input type="submit" value="Submit Religion Details" class="btn btn-primary submit m-0" name="submit" id="submit">
            </div>
         </form>
     
      <!--end log form -->
   </div>
              </div>
</div>
<script type="text/javascript">
        //programmer defined functions
		function getsubcaste(valu)
		{
			$.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>dashboard/getsubcastes',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#subcaste").html(op);
			   }
		   });
		}
		</script>
		
	
		 
		</div>