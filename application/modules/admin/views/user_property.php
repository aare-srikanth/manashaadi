<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
.col-md-6.col-xs-12 {
    padding: 5px;
}
.view-profile {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}

ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.no-padding{
    margin-bottom: 20px;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<div> 
   <div id="page-inner" style="padding-top: 60px; background:#f2f2f2">
       <div class="container">
           <div class="col-xs-12">
               <div class="col-xs-3 no-padding">
                    <div class="sidebar" style="margin-top:98px;"> 
                   <ul class="dropdown-content">
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
                
               <?php if($property_count>0){ ?>
               
            
               
              <!-- Update property records start-->
               
              <div class="col-xs-9 no-padding">
                         <div class="col-xs-12">
                <h1 class="page-header">
                <i class="fa fa-user" aria-hidden="true"></i>Property Details</small>
                </h1>
      
      
      
      <?php if(isset($msg)){ ?>
					<div class="alert alert-info alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong><?php echo $msg ?></strong> 
					</div>
				<?php }?>
				 <div class="col-xs-12 view-profile">
    <form method="POST" class="register-form" id="register-form" action="" onsubmit="return validation()">

        
          <input type="hidden" value="<?php echo $user_id; ?>" name="user_id"/>
         <div class="form-group">
            <div class="col-md-12 col-xs-12 no-padding">
                <div class="col-xs-3 margin_bottom">
                    <label for="property_type" class="radio-label"><span style="color:red">*</span> Property Type :</label>
                </div>
               <div class="col-xs-8">
                                  <div style="display:flex;width:100%">
                  <div class="form-radio-item pr-10">
                     <input type="radio" name="property_type" id="family" <?php if($property_info['Property_type']=="family") { ?> checked <?php } ?> value="family">
                              <label for="family">Family</label>
                              <span class="check"></span>
                  </div>
                  <div class="form-radio-item">
                     <input type="radio" name="property_type" id="shared" <?php if($property_info['Property_type']=="shared") { ?> checked <?php } ?> value="shared">
                              <label for="shared">Shared</label>
                              <span class="check"></span>
                  </div>
                  <div id="property_type_error" class="text-danger font-weight-bold"></div>
               </div>
               </div>

            </div>
            
              <!--  Property Value -->
            
            <div class="col-md-12 col-xs-12">
                    <div class="col-md-3  col-xs-2 margin_bottom">
                      <label for="name"> Property Value :</label>
                    </div>
                    <div class="col-xs-12  col-md-8 no-padding">
                        
                        <input type="text" name="property_value" maxlength="7" value="<?php echo $property_info['property_value']; ?>" id="property_value"/> In Lakhs
                      
                    </div>
            </div>
            
            <!-- Property Description -->

             <div class="col-md-12 col-xs-12">
                    <div class="col-md-3  col-xs-2 margin_bottom">
                      <label for="property_description">Property Description :</label>
                    </div>
                    <div class="col-xs-12  col-md-8 no-padding">
                        <textarea type="text" rows="4" cols="50" name="property_description" id="property_description"/><?php echo $property_info['property_Desc']; ?></textarea>
                    </div>
            </div>
            
             <!-- Property Description -->
             
		
			<div class="col-xs-12"> &nbsp;</div>
            <div class="submit-form col-xs-12 text-center">
               <input type="submit" value="Submit Property Details" class="btn btn-primary submit m-0" style="margin-top:20px;" name="submit" id="submit" />
            </div>
            <div class="col-xs-12" style="clear:both">&nbsp;</div>
            
         </div>
      </form>
	  </div>
               </div>
               
               

           
       

      </div>
      
      <!-- Update property records end-->
      
      <?php }else{ ?>
      
      
       <!-- Insert property records start-->
               
              <div class="col-xs-9 no-padding">
                         <div class="col-xs-12">
                <h1 class="page-header">
                <i class="fa fa-user" aria-hidden="true"></i>Property Details</small>
                </h1>
      
      
      
                <?php if(isset($msg)){ ?>
					<div class="alert alert-info alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong><?php echo $msg ?></strong> 
					</div>
				<?php }?>
				
				 <div class="col-xs-12 view-profile">
    <form method="POST" class="register-form" id="register-form" action="" onsubmit="return validation()">

        
          <input type="hidden" value="<?php echo $this->session->userdata('user_id');?>" name="user_id"/>
         <div class="form-group">
            <div class="col-md-12 col-xs-12 no-padding">
                <div class="col-xs-3 margin_bottom">
                    <label for="property_type" class="radio-label"><span style="color:red">*</span> Property Type :</label>
                </div>
               <div class="col-xs-8">
                                  <div style="display:flex;width:100%">
                  <div class="form-radio-item pr-10">
                     <input type="radio" name="property_type" id="family" <?php if($property_info['property_type']=="family") { ?> checked <?php } ?> value="family">
                              <label for="family">Family</label>
                              <span class="check"></span>
                  </div>
                  <div class="form-radio-item">
                     <input type="radio" name="property_type" id="shared" <?php if($property_info['property_type']=="shared") { ?> checked <?php } ?> value="shared">
                              <label for="shared">Shared</label>
                              <span class="check"></span>
                  </div>
                  <div id="property_type_error" class="text-danger font-weight-bold"></div>
               </div>
               </div>

            </div>
            
              <!--  Property Value -->
            
            <div class="col-md-12 col-xs-12">
                    <div class="col-md-3  col-xs-2 margin_bottom">
                      <label for="name"> Property Value :</label>
                    </div>
                    <div class="col-xs-12  col-md-8 no-padding">
                        
                        <input type="text" name="property_value" maxlength="7" value="<?php echo $property_info['property_value']; ?>" id="property_value"/> In Lakhs
                      
                    </div>
            </div>
            
            <!-- Property Description -->
           
             <div class="col-md-12 col-xs-12">
                    <div class="col-md-3  col-xs-2 margin_bottom">
                      <label for="property_description">Property Description :</label>
                    </div>
                    <div class="col-xs-12  col-md-8 no-padding">
                        <textarea type="text" rows="4" cols="50" name="property_description" id="property_description"/><?php echo $property_info['property_desc']; ?></textarea>
                    </div>
            </div>
            
             <!-- Property Description -->
             
		
			<div class="col-xs-12"> &nbsp;</div>
            <div class="submit-form col-xs-12 text-center">
               <input type="submit" value="Submit Property Details" class="btn btn-primary submit m-0" style="margin-top:20px;" name="insert_submit" id="submit" />
            </div>
            <div class="col-xs-12" style="clear:both">&nbsp;</div>
            
         </div>
      </form>
	  </div>
               </div>
               
               

           
       

      </div>
      
      <!-- insert property records end-->
      
      <?php  }  ?>
      
      
      </div>
    </div> 
</div>    

<script type="text/javascript">

    function validation()
    {
       
       var family = document.getElementById('family').checked;
       
       var shared = document.getElementById('shared').checked;
      
           if(family==false && shared==false)
           {
                document.getElementById('property_type_error').innerHTML = " *please select property type";
               
                return false;
           }else{
                document.getElementById('property_type_error').innerHTML = " ";
                return true;
           }
           
           
          
    }
</script>