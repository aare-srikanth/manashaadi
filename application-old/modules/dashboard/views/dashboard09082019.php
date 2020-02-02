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
    <a class="<?php if($this->uri->segment(1)=="dashboard" && $this->uri->segment(2)=="") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard">Basic Details</a>
    <a class="<?php if($this->uri->segment(2)=="religion") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/religion">Religion Details</a>
    <a class="<?php if($this->uri->segment(2)=="professionalinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/professionalinfo">Education & Profession Details</a>
    <a class="<?php if($this->uri->segment(2)=="parentsinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/parentsinfo">Parents Details</a>
    <a class="<?php if($this->uri->segment(2)=="siblingsinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/siblingsinfo">Sibling Details</a>
    <a class="<?php if($this->uri->segment(2)=="imagesadd") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/imagesadd">Update Images</a>
            
  </ul>
  
                </div>
               </div>
               
               <div class="col-xs-9 no-padding">
                         <div class="col-xs-12">
                <h1 class="page-header">
                <i class="fa fa-user" aria-hidden="true"></i> Basic Details</small>
                </h1>
      
      
      
      <?php if(isset($msg)){ ?>
					<div class="alert alert-info alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong><?php echo $msg ?></strong> 
					</div>
				<?php }?>
				 <div class="col-xs-12 view-profile">
      <form method="POST" class="register-form" id="register-form">
            
          <input type="hidden" value="<?php echo $this->session->userdata('user_id');?>" name="user_id"/>
         <div class="form-group">
            <div class="col-md-12 col-xs-12 no-padding">
                <div class="col-xs-1 no-padding">
                    <label for="gender" class="radio-label" style="padding-left:5px;">Gender</label>
                </div>
               <div class="col-xs-11">
                                  <div style="display:flex;width:100%">
                  <div class="form-radio-item pr-10">
                     <input type="radio" name="gender" id="male" <?php if($primary_info['gender']=="male") { ?> checked <?php } ?> value="<?php echo $primary_info['gender'];?>">
                     <label for="male">Male</label>
                     <span class="check"></span>
                  </div>
                  <div class="form-radio-item">
                     <input type="radio" name="gender" <?php if($primary_info['gender']=="female") { ?> checked <?php } ?> id="female" value="<?php echo $primary_info['gender'];?>">
                     <label for="female">Female</label>
                     <span class="check"></span>
                  </div>
               </div>
               </div>

            </div>
            <div class="col-md-6 col-xs-12">
               <label for="email">Email ID</label>
               <input type="email" class="form-control" name="email" id="email" readonly value="<?php echo $primary_info['email'];?>"/>
            </div>
		
            <div class="col-md-6 col-xs-12 ">
               <label for="phone">Phone</label>
               <input type="tel" class="form-control" name="mobile" id="contact" value="<?php echo $primary_info['mobile'];?>"/>
            </div>
		
            <div class="col-md-6 col-xs-12">
               <label for="name">First Name</label>
               <input type="text" name="first_name"  class="form-control" id="name" value="<?php echo $primary_info['first_name'];?>"/>
            </div>
		
            <div class="col-md-6 col-xs-12">
               <label for="last_name">Last Name</label>
               <input type="text" name="last_name"  class="form-control" id="last_name" value="<?php echo $primary_info['last_name'];?>"/>
            </div>
		

          <div class="col-md-6 col-xs-12">
               <label for="birth_date" class="col-xs-12 no-padding">DOB</label>
              <div class="col-xs-4 no-padding">
                  <select name="date" id="date" class="form-control" tabindex="-1">
                    <option selected="selected">DD</option>
                           <option <?php if($primary_info['date']==1) { ?> selected <?php } ?> label="1">1</option>
                           <option <?php if($primary_info['date']==2) { ?> selected <?php } ?> label="2">2</option>
                           <option <?php if($primary_info['date']==3) { ?> selected <?php } ?> label="3">3</option>
                           <option <?php if($primary_info['date']==4) { ?> selected <?php } ?> label="4">4</option>
                           <option <?php if($primary_info['date']==5) { ?> selected <?php } ?> label="5">5</option>
                           <option <?php if($primary_info['date']==6) { ?> selected <?php } ?> label="6">6</option>
                           <option <?php if($primary_info['date']==7) { ?> selected <?php } ?> label="7">7</option>
                           <option <?php if($primary_info['date']==8) { ?> selected <?php } ?> label="8">8</option>
                           <option <?php if($primary_info['date']==9) { ?> selected <?php } ?> label="9">9</option>
                           <option <?php if($primary_info['date']==10) { ?> selected <?php } ?> label="10">10</option>
                           <option <?php if($primary_info['date']==11) { ?> selected <?php } ?> label="11">11</option>
                           <option <?php if($primary_info['date']==12) { ?> selected <?php } ?> label="12">12</option>
                           <option <?php if($primary_info['date']==13) { ?> selected <?php } ?> label="13">13</option>
                           <option <?php if($primary_info['date']==14) { ?> selected <?php } ?> label="14">14</option>
                           <option <?php if($primary_info['date']==15) { ?> selected <?php } ?> label="15">15</option>
                           <option <?php if($primary_info['date']==16) { ?> selected <?php } ?> label="16">16</option>
                           <option <?php if($primary_info['date']==17) { ?> selected <?php } ?> label="17">17</option>
                           <option <?php if($primary_info['date']==18) { ?> selected <?php } ?> label="18">18</option>
                           <option <?php if($primary_info['date']==19) { ?> selected <?php } ?> label="19">19</option>
                           <option <?php if($primary_info['date']==20) { ?> selected <?php } ?> label="20">20</option>
                           <option <?php if($primary_info['date']==21) { ?> selected <?php } ?> label="21">21</option>
                           <option <?php if($primary_info['date']==22) { ?> selected <?php } ?> label="22">22</option>
                           <option <?php if($primary_info['date']==23) { ?> selected <?php } ?> label="23">23</option>
                           <option <?php if($primary_info['date']==24) { ?> selected <?php } ?> label="24">24</option>
                           <option <?php if($primary_info['date']==25) { ?> selected <?php } ?> label="25">25</option>
                           <option <?php if($primary_info['date']==26) { ?> selected <?php } ?> label="26">26</option>
                           <option <?php if($primary_info['date']==27) { ?> selected <?php } ?> label="27">27</option>
                           <option <?php if($primary_info['date']==28) { ?> selected <?php } ?> label="28">28</option>
                           <option <?php if($primary_info['date']==29) { ?> selected <?php } ?> label="29">29</option>
                           <option <?php if($primary_info['date']==30) { ?> selected <?php } ?> label="30">30</option>
                           <option <?php if($primary_info['date']=="31") { ?> selected <?php } ?> label="31">31</option>
                  </select></div>
              <div class="col-xs-4">    
                  <select name="month" id="month" class="form-control" tabindex="-1">
                     <option selected="selected">MM</option>
                           <option <?php if($primary_info['month']=="Jan") { ?> selected <?php } ?>>Jan</option>
                           <option <?php if($primary_info['month']=="Feb") { ?> selected <?php } ?>>Feb</option>
                           <option <?php if($primary_info['month']=="Mar") { ?> selected <?php } ?>>Mar</option>
                           <option <?php if($primary_info['month']=="Apr") { ?> selected <?php } ?>>Apr</option>
                           <option <?php if($primary_info['month']=="May") { ?> selected <?php } ?>>May</option>
                           <option <?php if($primary_info['month']=="Jun") { ?> selected <?php } ?>>Jun</option>
                           <option <?php if($primary_info['month']=="Jul") { ?> selected <?php } ?>>Jul</option>
                           <option <?php if($primary_info['month']=="Aug") { ?> selected <?php } ?>>Aug</option>
                           <option <?php if($primary_info['month']=="Sep") { ?> selected <?php } ?>>Sep</option>
                           <option <?php if($primary_info['month']=="Oct") { ?> selected <?php } ?>>Oct</option>
                           <option <?php if($primary_info['month']=="Nov") { ?> selected <?php } ?>>Nov</option>
                           <option <?php if($primary_info['month']=="Dec") { ?> selected <?php } ?>>Dec</option>
                  </select></div>
                  <div class="col-xs-4 no-padding">
                  <select name="year" id="year" class="form-control" tabindex="-1">
                     <option label="Year" selected="selected">Year</option>
                           <option <?php if($primary_info['year']=="1970") { ?> selected <?php } ?> label="1970">1970</option>
                           <option <?php if($primary_info['year']=="1971") { ?> selected <?php } ?> label="1971">1971</option>
                           <option <?php if($primary_info['year']=="1972") { ?> selected <?php } ?> label="1972">1972</option>
                           <option <?php if($primary_info['year']=="1973") { ?> selected <?php } ?> label="1973">1973</option>
                           <option <?php if($primary_info['year']=="1974") { ?> selected <?php } ?> label="1974">1974</option>
                           <option <?php if($primary_info['year']=="1975") { ?> selected <?php } ?> label="1975">1975</option>
                           <option <?php if($primary_info['year']=="1976") { ?> selected <?php } ?> label="1976">1976</option>
                           <option <?php if($primary_info['year']=="1977") { ?> selected <?php } ?> label="1977">1977</option>
                           <option <?php if($primary_info['year']=="1978") { ?> selected <?php } ?> label="1978">1978</option>
                           <option <?php if($primary_info['year']=="1979") { ?> selected <?php } ?> label="1979">1979</option>
                           <option <?php if($primary_info['year']=="1980") { ?> selected <?php } ?> label="1980">1980</option>
                           <option <?php if($primary_info['year']=="1981") { ?> selected <?php } ?> label="1981">1981</option>
                           <option <?php if($primary_info['year']=="1982") { ?> selected <?php } ?> label="1982">1982</option>
                           <option <?php if($primary_info['year']=="1983") { ?> selected <?php } ?> label="1983">1983</option>
                           <option <?php if($primary_info['year']=="1984") { ?> selected <?php } ?> label="1984">1984</option>
                           <option <?php if($primary_info['year']=="1985") { ?> selected <?php } ?> label="1985">1985</option>
                           <option <?php if($primary_info['year']=="1986") { ?> selected <?php } ?> label="1986">1986</option>
                           <option <?php if($primary_info['year']=="1987") { ?> selected <?php } ?> label="1987">1987</option>
                           <option <?php if($primary_info['year']=="1988") { ?> selected <?php } ?> label="1988">1988</option>
                           <option <?php if($primary_info['year']=="1989") { ?> selected <?php } ?> label="1989">1989</option>
                           <option <?php if($primary_info['year']=="1990") { ?> selected <?php } ?> label="1990">1990</option>
                           <option <?php if($primary_info['year']=="1991") { ?> selected <?php } ?> label="1991">1991</option>
                           <option <?php if($primary_info['year']=="1992") { ?> selected <?php } ?> label="1992">1992</option>
                           <option <?php if($primary_info['year']=="1993") { ?> selected <?php } ?> label="1993">1993</option>
                           <option <?php if($primary_info['year']=="1994") { ?> selected <?php } ?> label="1994">1994</option>
                           <option <?php if($primary_info['year']=="1995") { ?> selected <?php } ?> label="1995">1995</option>
                           <option <?php if($primary_info['year']=="1996") { ?> selected <?php } ?> label="1996">1996</option>
                           <option <?php if($primary_info['year']=="1997") { ?> selected <?php } ?> label="1997">1997</option>
                           <option <?php if($primary_info['year']=="1998") { ?> selected <?php } ?> label="1998">1998</option>
                           <option <?php if($primary_info['year']=="1999") { ?> selected <?php } ?> label="1999">1999</option>
                           <option <?php if($primary_info['year']=="2000") { ?> selected <?php } ?> label="2000">2000</option>
                           <option <?php if($primary_info['year']=="2001") { ?> selected <?php } ?> label="2001">2001</option>
                  </select></div>
               </div>
			  
            </div>
           <div class="col-md-6 col-xs-12">
               <label for="country">Living In</label>
               <select id="country" class="form-control" name="country">
                  <option value="">Select Country</option>
                  <?php foreach($countries as $value) { ?>
                  <option <?php if($primary_info['living_in']== $value['country']) { ?> selected <?php } ?> value="<?php echo $value['country'];?>"><?php echo $value['country'];?></option><?php } ?>
               </select>
            </div>
			<div class="col-xs-12"> &nbsp;</div>
            <div class="submit-form col-xs-12 text-center">
               <input type="submit" value="Submit Basic Details" class="btn btn-primary submit m-0" style="margin-top:20px;" name="Submit" id="submit" />
            </div>
            <div class="col-xs-12" style="clear:both">&nbsp;</div>
         </div>
      </form>
	  </div>
               </div>
               
               

           
       

      </div>
      </div>
       </div> 
      