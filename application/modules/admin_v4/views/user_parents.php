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
<div> 
   <div id="page-inner" style="background: #f3f3f3;">
       
        <div class="container" style="margin-top:60px;">
           <div class="col-xs-12">
               <div class="col-xs-3 no-padding">
               <div class="sidebar col-xs-12" style="margin-top:98px;">
                    <div class="dropdown-content">
                     <?php $user_id=$this->session->userdata('admin_user_id')  ?>
                       
     <a class="<?php if($this->uri->segment(2)=="edit_profile" && $this->uri->segment(2)=="edit_profile") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_profile/<?php echo $user_id; ?>">Basic Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_religion") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_religion/<?php echo $user_id; ?>">Religion Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_profession") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_profession/<?php echo $user_id; ?>">Education & Profession Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_property") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_property/<?php echo $user_id; ?>">Property Details</a>
     <a class="<?php if($this->uri->segment(2)=="edit_parents") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_parents/<?php echo $user_id; ?>">Parents Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_siblings") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_siblings/<?php echo $user_id; ?>">Sibling Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_images") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_images/<?php echo $user_id; ?>">Update Images</a>
                      </div>
                </div>
               </div>
               <div class="col-xs-9 no-padding">
      <div class="col-xs-12 no-padding">
         <div class="col-xs-12">
      <h1 class="page-header">
         <i class="fa fa-users" aria-hidden="true"></i> Parents Details
      </h1>
   </div>
</div>

<?php if(isset($msg)){ ?>
		<div class="alert alert-info alert-dismissible">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong><?php echo $msg ?></strong> 
		</div>
<?php }?>



<div class="col-md-12 col-xs-12 log-form" style="padding:10px;">
  
     
           <form method="POST" action="" class="register-form" id="register-form">
              <input type="hidden" value="<?php echo $user_id; ?>" name="user_id"/>
            <div class="form-row">
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Father Name :</label> 
                  <input type="text" class="form-control" name="father-name" id="father-name" value="<?php echo $parents_info['father_name'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Father Education :</label>
                  <input type="text" class="form-control" name="father-education" id="father-education" value="<?php echo $parents_info['father_education'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Father Profession :</label>
                  <input type="text" class="form-control" name="father-profession" id="father-profession" value="<?php echo $parents_info['father_profession'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Father Email :</label>
                  <input type="email" class="form-control" name="father-email" id="father-email"  value="<?php echo $parents_info['father_email'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Father Mobile :</label>
                  <input type="phone" class="form-control" name="father-mobile" id="father-mobile"  value="<?php echo $parents_info['father_mobile'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Father Father Name :</label>
                  <input type="text" class="form-control" name="fathers-father-name" id="fathers-father-name"  value="<?php echo $parents_info['fathers_father_name'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="country">Father Father State :</label>
                  <select class="form-control" id="state" name="fathers-father-state" id="fathers-father-state" onchange="getfatherdistricts(this.value)">
                    <option value="">Select State</option>
                           <?php foreach($states as $value) { ?>
                           <option <?php if($parents_info['fathers_father_state']==$value['state']) { ?> selected <?php } ?> value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option><?php } ?>
                  </select>
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="country">Father Father District :</label>
                 <select class="form-control" id="fathers-father-district" name="fathers-father-district">
                         <option value="">Select State</option>
                           <?php foreach($districts as $value) { ?>
                           <option <?php if($parents_info['mothers_father_district']==$value['district']) { ?> selected <?php } ?> value="<?php echo $value['district'];?>"><?php echo $value['district'];?></option>
                           <?php } ?>
                </select>
               </div>
              <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Father Father Native Place :</label>
                  <input type="text" class="form-control" name="fathers-father-native-place" id="fathers-father-native-place"  value="<?php echo $parents_info['fathers_father_native_place'];?>">
               </div>
              <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Mother Name :</label>
                  <input type="text" class="form-control" name="mother-name" id="mother-name" value="<?php echo $parents_info['mother_name'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Mother Education :</label>
                  <input type="text" class="form-control" name="mother-education" id="mother-education"  value="<?php echo $parents_info['mother_education'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Mother Profession :</label>
                  <input type="text" class="form-control"  name="mother-profession" id="mother-profession"  value="<?php echo $parents_info['mother_profession'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Mother Email :</label>
                  <input type="email" class="form-control" name="mother-email" id="mother-email"  value="<?php echo $parents_info['mother_email'];?>">
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Mother Mobile :</label>
                  <input type="phone" class="form-control" name="mother-mobile" id="mother-mobile" value="<?php echo $parents_info['mother_mobile'];?>">
               </div>
              <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Mother Father Name :</label>
                  <input type="text" class="form-control" name="mothers-father-name" id="mothers-father-name"  value="<?php echo $parents_info['mothers_father_name'];?>">
               </div>
                <div class="form-group col-xs-12 col-md-6">
                  <label for="country">Mother Father State :</label>
                  <select class="form-control" id="mothers-father-state" onchange="getdistricts(this.value)" name="mothers-father-state">
                    <option value="">Select State</option>
                           <?php foreach($states as $value) { ?>
                           <option <?php if($parents_info['mothers_father_state']==$value['state']) { ?> selected <?php } ?> value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option><?php } ?>
                  </select>
               </div>
              <div class="form-group col-xs-12 col-md-6">
                  <label for="country">Mother Father District :</label>
                 <select class="form-control" id="mothers-father-district" name="mothers-father-district">
                           <option value="">Select State</option>
                           <?php foreach($districts as $value) { ?>
                           <option <?php if($parents_info['mothers_father_district']==$value['district']) { ?> selected <?php } ?> value="<?php echo $value['district'];?>"><?php echo $value['district'];?></option>
                           <?php } ?>
                        </select>
               </div>
               <div class="form-group col-xs-12 col-md-6">
                  <label for="name">Mother Father Native Place :</label>
                  <input type="text" class="form-control" name="mothers-father-native-place" id="mothers-father-native-place" value="<?php echo $parents_info['mothers_father_native_place'];?>">
               </div>
            </div>
            
            <div class="submit-form text-center col-xs-12" style="margin:10px 0; padding:20px;">
                  <input type="submit" value="Submit Parents Details" class="submit btn btn-primary m-0" name="submit" id="submit">
               </div>
          
     
   </div>
     
         </form>

<script>
    function getdistricts(value){
        $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>dashboard/getdistricts',
			   data: "value="+value,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#mothers-father-district").html(op);
			   }
		   });
        
    }
    function getfatherdistricts(value){
        $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>dashboard/getdistricts',
			   data: "value="+value,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#fathers-father-district").html(op);
			   }
		   });
        
    }
</script>
</div>
                   
               </div>
               

       


    </div>