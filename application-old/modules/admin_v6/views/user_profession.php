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
.log-form {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}
h4.sub-leadings {
    padding: 5px 10px;
    border-bottom: 1px solid #17a554;
    margin: 15px 0;
    font-size: 15px;
    font-weight: bold;
}
.view-profile{
background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
    margin:5px 0;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<div> 
   <div id="page-inner" style="margin-top:60px; background:#f2f2f2;">
       
        <div class="container">
           <div class="col-xs-12 no-padding">
               
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
    <a class="<?php if($this->uri->segment(2)=="imagesadd") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/imagesadd">Update Images</a>
                     </div>
                </div>
                       
                   </div>
                   <div class="col-xs-9 no-padding">
      <div class="col-xs-12 col-md-12">
         <div class="col-xs-12">
      <h1 class="page-header">
         <i class="fa fa-suitcase" aria-hidden="true"></i>Education & Professional Details</small>
      </h1>
   </div>
</div>
<?php if(isset($msg)){ ?>
					<div class="alert alert-info alert-dismissible">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong><?php echo $msg ?></strong> 
					</div>
				<?php } ?>
				
	
<div class="col-xs-12 col-md-12 view-profile log-form">
  
     
         <h4 class="sub-leadings"><i class="fa fa-book" aria-hidden="true"></i>Education Details</h4><hr/>
         <form method="post" action="">
              <input type="hidden" value="<?php echo $user_id; ?>" name="user_id"/>
            <div class="form-row">
                  <div class="form-group col-xs-12 col-md-6">
                  <label for="country">Highest Education :</label>
                  <select class="form-control input-sm" id="highest_education" name="highest_education" onchange="getdegree(this.value)">
                      <option value="Select Education">Select Education</option>
                           <?php foreach($heighsteducation as $value) { ?>
                       <option <?php if($professional_info['heighst_education']== $value['heighsteducation']) { ?> selected <?php } ?> value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option><?php } ?>
                  </select>
                
               </div>
                <div class="form-group col-xs-12 col-md-6">
                  <label for="height">Education Degree :</label>
                  <select class="form-control input-sm" id="education_degree" name="education_degree" aria-invalid="false" onchange="getspecialization(this.value)">
                  <option value="Select Education Degree">Select Education Degree</option>
                   <?php foreach($educationdegree as $value) { ?>
                       <option <?php if($professional_info['education_degree'] == $value['educationdegree']) { ?> selected <?php } ?>value="<?php echo $value['educationdegree'];?>"><?php echo $value['educationdegree'];?></option><?php } ?>
                  </select>
               </div>
             <div class="form-group col-xs-12 col-md-6">
                  <label for="country">Specilization :</label>
                  <select id="specialization" class="form-control input-sm" name="specialization">
                     <option value="Select Specialization" selected="selected">Select Specialization</option>
                     <?php foreach($specialization as $value) { ?>
                       <option <?php if($professional_info['specialization'] == $value['specialization']) { ?> selected <?php } ?> value="<?php echo $value['specialization'];?>"><?php echo $value['specialization'];?></option><?php } ?>
                  </select>
               </div>
              <div class="form-group col-xs-12 col-md-6">
                  <label for="university">University :</label>
                  <input type="text" name="university" class="form-control" id="university" value="<?php echo $professional_info['university'];?>">
               </div>
             <div class="form-group col-xs-12 col-md-6">
                  <label for="college">College :</label>
                  <input type="text" name="college" id="college" class="form-control" value="<?php echo $professional_info['college'];?>"> 
               </div>
            <div class="form-group col-xs-12 col-md-12">
                  <label for="college">Education in Detail :</label>
                  <textarea class="form-control input-sm" name="education-details" id="education-details" cols="20" rows="5" ><?php echo $professional_info['education_description'];?></textarea>
               </div>
            </div>
       
         <h4 class="sub-leadings" style="clear:both;"><i class="fa fa-suitcase" aria-hidden="true"></i>Professional Details</h4>
         <hr>
            <div class="form-row">
                <div class="form-group col-xs-12 col-md-6">
                  <label for="employeein">Employee In :</label>
                  <select class="form-control input-sm" id="employee_in" name="employee_in">
                      <option value="">Employed In</option>
                           <option <?php if($professional_info['employee_in']=="Government") { ?> selected <?php } ?> value="Government">Government</option>
                           <option <?php if($professional_info['employee_in']=="Private") { ?> selected <?php } ?> value="Private">Private</option>
                           <option <?php if($professional_info['employee_in']=="Business") { ?> selected <?php } ?> value="Business">Business</option>
                           <option <?php if($professional_info['employee_in']=="Defencce") { ?> selected <?php } ?> value="Defencce">Defencce</option>
                           <option <?php if($professional_info['employee_in']=="Student") { ?> selected <?php } ?> value="Student">Student</option>
                           <option <?php if($professional_info['employee_in']=="Not-Working") { ?> selected <?php } ?> value="Not-Working">Not-Working</option>
                           
                  </select>
               </div>
                 <div class="form-group col-xs-12 col-md-6">
                  <label for="occupation">Profession :</label>
                  <select class="form-control input-sm" id="occupation" name="occupation">
                      <option value="Select Profession">Select Profession</option>
                           <?php foreach($professions as $value) { ?>
                            <option <?php if($professional_info['occupation']==$value['profession']) { ?> selected <?php } ?> value="<?php echo $value['profession'];?>"><?php echo stripcslashes($value['profession']);?></option><?php } ?>
                  </select>
               </div>
                <div class="form-group col-xs-12 col-md-6">
                  <label id="label_annualIncomeCurrencyId" for="annualIncomeCurrencyId">Currency : </label>
                  <select id="currency" class="form-control input-sm" name="currency">
                    <option value="Select Currency">Select Currency</option>
                            <option <?php if($professional_info['currency']=="Rs") { ?> selected <?php } ?> value="Rs">India</option>	
                            <option <?php if($professional_info['currency']=="US") { ?> selected <?php } ?> value="US">USA</option>
                            <option <?php if($professional_info['currency']=="GBP") { ?> selected <?php } ?> value="GBP">UK</option>
                            <option <?php if($professional_info['currency']=="CAD") { ?> selected <?php } ?> value="CAD">Canada</option>
                            <option <?php if($professional_info['currency']=="AUD") { ?> selected <?php } ?> value="AUD">Australia</option>
                            <option <?php if($professional_info['currency']=="SGD") { ?> selected <?php } ?> value="SGD">Singapore</option>
                            <option <?php if($professional_info['currency']=="SAR") { ?> selected <?php } ?> value="SAR">Saudi Arabia</option>
                            <option <?php if($professional_info['currency']=="ZAR") { ?> selected <?php } ?> value="ZAR">South Africa</option>
                            <option <?php if($professional_info['currency']=="KWD") { ?> selected <?php } ?> value="KWD">Kuwait</option>
                            <option <?php if($professional_info['currency']=="PKR") { ?> selected <?php } ?> value="PKR">Pakistan</option>
                            <option <?php if($professional_info['currency']=="AFA") { ?> selected <?php } ?> value="AFA">Afghanistan</option>
                            <option <?php if($professional_info['currency']=="ALL") { ?> selected <?php } ?> value="ALL">Albania</option>
                            <option <?php if($professional_info['currency']=="DZD") { ?> selected <?php } ?> value="DZD">Algeria</option>
                            <option <?php if($professional_info['currency']=="SAR") { ?> selected <?php } ?> value="SAR">Anguiila</option>
                            <option <?php if($professional_info['currency']=="XCD") { ?> selected <?php } ?> value="XCD">South Africa</option>
                            <option <?php if($professional_info['currency']=="XCD") { ?> selected <?php } ?> value="XCD">Antarctica</option>
                            <option <?php if($professional_info['currency']=="AMD") { ?> selected <?php } ?> value="AMD">Armenia</option>
                            <option <?php if($professional_info['currency']=="AWG") { ?> selected <?php } ?> value="AWG">Aruba</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Austria</option>
                            <option <?php if($professional_info['currency']=="AZM") { ?> selected <?php } ?> value="AZM">Azerbaijan</option>
                            <option <?php if($professional_info['currency']=="BHD") { ?> selected <?php } ?> value="BHD">Bahrain</option>
                            <option <?php if($professional_info['currency']=="BDT") { ?> selected <?php } ?> value="BDT">Bangladesh</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Belgium</option>
                            <option <?php if($professional_info['currency']=="BWP") { ?> selected <?php } ?> value="BWP">Botswana</option>
                            <option <?php if($professional_info['currency']=="BRL") { ?> selected <?php } ?> value="BRL">Brazil</option>
                            <option <?php if($professional_info['currency']=="USD") { ?> selected <?php } ?> value="USD">British Indian Ocean Territory</option>
                            <option <?php if($professional_info['currency']=="BND") { ?> selected <?php } ?> value="BND">Brunei</option>
                            <option <?php if($professional_info['currency']=="CNY") { ?> selected <?php } ?> value="CNY">China</option>
                            <option <?php if($professional_info['currency']=="XAF") { ?> selected <?php } ?> value="XAF">Congo</option>
                            <option <?php if($professional_info['currency']=="CZK") { ?> selected <?php } ?> value="CZK">Czech Republic</option>
                            <option <?php if($professional_info['currency']=="DKK") { ?> selected <?php } ?> value="DKK">Denmark</option>
                            <option <?php if($professional_info['currency']=="ERN") { ?> selected <?php } ?> value="ERN">Eritrea</option>
                            <option <?php if($professional_info['currency']=="ETB") { ?> selected <?php } ?> value="ETB">Ethiopia</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Finland</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">France</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Germany</option>
                            <option <?php if($professional_info['currency']=="GHC") { ?> selected <?php } ?> value="GHC">Ghana</option>
                            <option <?php if($professional_info['currency']=="XCD") { ?> selected <?php } ?> value="XCD">Grenada</option>
                            <option <?php if($professional_info['currency']=="HKD") { ?> selected <?php } ?> value="HKD">Hong Kong</option>
                            <option <?php if($professional_info['currency']=="HUF") { ?> selected <?php } ?> value="HUF">Hungary</option>
                            <option <?php if($professional_info['currency']=="ISK") { ?> selected <?php } ?> value="ISK">Iceland</option>
                            <option <?php if($professional_info['currency']=="IDR") { ?> selected <?php } ?> value="IDR">Indonesia</option>
                            <option <?php if($professional_info['currency']=="IQD") { ?> selected <?php } ?> value="IQD">Iraq</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Ireland</option>
                            <option <?php if($professional_info['currency']=="ILS") { ?> selected <?php } ?> value="ILS">Israel</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Italy</option>
                            <option <?php if($professional_info['currency']=="XOF") { ?> selected <?php } ?> value="XOF">Ivory Coast</option>
                            <option <?php if($professional_info['currency']=="JMD") { ?> selected <?php } ?> value="JMD">Jamaica</option>
                            <option <?php if($professional_info['currency']=="JPY") { ?> selected <?php } ?> value="JPY">Japan</option>
                            <option <?php if($professional_info['currency']=="JOD") { ?> selected <?php } ?> value="JOD">Jordan</option>
                            <option <?php if($professional_info['currency']=="KZT") { ?> selected <?php } ?> value="KZT">Kazakstan</option>
                            <option <?php if($professional_info['currency']=="KES") { ?> selected <?php } ?> value="KES">Kenya</option>
                            <option <?php if($professional_info['currency']=="KRW") { ?> selected <?php } ?> value="KRW">South Korea</option>
                            <option <?php if($professional_info['currency']=="KPW") { ?> selected <?php } ?> value="KPW">North Korea</option>
                            <option <?php if($professional_info['currency']=="LNP") { ?> selected <?php } ?> value="LNP">Lebanon</option>
                            <option <?php if($professional_info['currency']=="LRD") { ?> selected <?php } ?> value="LRD">Liberia</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Luxembourg</option>
                            <option <?php if($professional_info['currency']=="MYR") { ?> selected <?php } ?> value="MYR">Malaysia</option>
                            <option <?php if($professional_info['currency']=="MVR") { ?> selected <?php } ?> value="MVR">Maldives</option>
                            <option <?php if($professional_info['currency']=="LRD") { ?> selected <?php } ?> value="LRD">Liberia</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Luxembourg</option>
                            <option <?php if($professional_info['currency']=="MYR") { ?> selected <?php } ?> value="MYR">Malaysia</option>
                            <option <?php if($professional_info['currency']=="MVR") { ?> selected <?php } ?> value="MVR">Maldives</option>
                            <option <?php if($professional_info['currency']=="XOF") { ?> selected <?php } ?> value="XOF">Mali</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Martinique</option>
                            <option <?php if($professional_info['currency']=="MUR") { ?> selected <?php } ?> value="MUR">Martinique</option>
                            <option <?php if($professional_info['currency']=="MXN") { ?> selected <?php } ?> value="MXN">Mexico</option>
                            <option <?php if($professional_info['currency']=="NPR") { ?> selected <?php } ?> value="NPR">Nepal</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Netherlands</option>
                            <option <?php if($professional_info['currency']=="NZD") { ?> selected <?php } ?> value="NZD">New Zealand</option>
                            <option <?php if($professional_info['currency']=="NGN") { ?> selected <?php } ?> value="NGN">Nigeria</option>
                            <option <?php if($professional_info['currency']=="NOK") { ?> selected <?php } ?> value="NOK">Norway</option>
                            <option <?php if($professional_info['currency']=="OMR") { ?> selected <?php } ?> value="OMR">Oman</option>
                            <option <?php if($professional_info['currency']=="PHP") { ?> selected <?php } ?> value="PHP">Philippines</option>
                            <option <?php if($professional_info['currency']=="PLZ") { ?> selected <?php } ?> value="PLZ">Poland</option>
                            <option <?php if($professional_info['currency']=="USD") { ?> selected <?php } ?> value="USD">Puerto Rico</option>
                            <option <?php if($professional_info['currency']=="QAR") { ?> selected <?php } ?> value="QAR">Qatar</option>
                            <option <?php if($professional_info['currency']=="RUR") { ?> selected <?php } ?> value="RUR">Russia</option>
                            <option <?php if($professional_info['currency']=="XOF") { ?> selected <?php } ?> value="XOF">Senegal</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Spain</option>
                            <option <?php if($professional_info['currency']=="SDD") { ?> selected <?php } ?> value="SDD">Sudan</option>
                            <option <?php if($professional_info['currency']=="SZL") { ?> selected <?php } ?> value="SZL">Swaziland</option>
                            <option <?php if($professional_info['currency']=="SEK") { ?> selected <?php } ?> value="SEK">Sweden</option>
                            <option <?php if($professional_info['currency']=="CHF") { ?> selected <?php } ?> value="CHF">Switzerland</option>
                            <option <?php if($professional_info['currency']=="RUR") { ?> selected <?php } ?> value="RUR">Russia</option>
                            <option <?php if($professional_info['currency']=="XOF") { ?> selected <?php } ?> value="XOF">Senegal</option>
                            <option <?php if($professional_info['currency']=="EUR") { ?> selected <?php } ?> value="EUR">Spain</option>
                            <option <?php if($professional_info['currency']=="SDD") { ?> selected <?php } ?> value="SDD">Sudan</option>
                            <option <?php if($professional_info['currency']=="SZL") { ?> selected <?php } ?> value="SZL">Swaziland</option>
                            <option <?php if($professional_info['currency']=="SEK") { ?> selected <?php } ?> value="SEK">Sweden</option>
                            <option <?php if($professional_info['currency']=="CHF") { ?> selected <?php } ?> value="CHF">Switzerland</option>
                            <option <?php if($professional_info['currency']=="TWD") { ?> selected <?php } ?> value="TWD">Taiwan</option>
                            <option <?php if($professional_info['currency']=="TZS") { ?> selected <?php } ?> value="TZS">Tanzania</option>
                            <option <?php if($professional_info['currency']=="THB") { ?> selected <?php } ?> value="THB">Thailand</option>
                            <option <?php if($professional_info['currency']=="TRL") { ?> selected <?php } ?> value="TRL">Turkey</option>
                            <option <?php if($professional_info['currency']=="UGS") { ?> selected <?php } ?> value="UGS">Uganda</option>
                            <option <?php if($professional_info['currency']=="NO") { ?> selected <?php } ?> value="NO">Ukraine</option>
                            <option <?php if($professional_info['currency']=="AED") { ?> selected <?php } ?> value="AED">United Arab Emirates</option>
                            <option <?php if($professional_info['currency']=="VND") { ?> selected <?php } ?> value="VND">Vietnam</option>
                            <option <?php if($professional_info['currency']=="ZMK") { ?> selected <?php } ?> value="ZMK">Zambia</option>
                            <option <?php if($professional_info['currency']=="NotG") { ?> selected <?php } ?> value="NotG">Not Given</option>
                            <option <?php if($professional_info['currency']=="OthR") { ?> selected <?php } ?> value="OthR">Other</option>
                            <option <?php if($professional_info['currency']=="LKR") { ?> selected <?php } ?> value="LKR">Srilanka</option>
                            <option <?php if($professional_info['currency']=="BWI") { ?> selected <?php } ?> value="BWI">West Indies</option>
                            <option <?php if($professional_info['currency']=="Euro") { ?> selected <?php } ?> value="Euro">Europe</option>
                            <option <?php if($professional_info['currency']=="CFA") { ?> selected <?php } ?> value="CFA">WEST AFRICA</option>
                            <option <?php if($professional_info['currency']=="Riel") { ?> selected <?php } ?> value="Riel">Cambodia</option>
                            <option <?php if($professional_info['currency']=="RS") { ?> selected <?php } ?> value="RS">Seychelles</option> 
                  </select>
               </div>
                 <div class="form-group col-xs-12 col-md-6">
                  <label id="label_annualIncomeAmount" for="annualIncomeAmount">Monthly Income : </label>
                  <input type="number" id="monthly_income" class="form-control" name="monthly_income" value="<?php echo $professional_info['annual_income'];?>">
                 
               </div>
                 <div class="form-group col-xs-12 col-md-6">
                  <label for="company">Company :</label>
                  <input type="text" name="company" class="form-control" id="company" value="<?php echo $professional_info['company'];?>">
               </div>
                 <div class="form-group col-xs-12 col-md-12">
                  <label for="occupation">Profession In Details :</label>
                  <textarea class="form-control input-sm" name="about_profession" id="about_profession" cols="20" rows="5"><?php echo $professional_info['about_profession'];?></textarea>
               </div>
            </div>
         
          <div class="col-xs-12 col-md-12 ">
         <hr>
         <h4 class="sub-leadings"><i class="fa fa-map-marker" aria-hidden="true"></i>Groom's Current Location</h4>
       
            <div class="form-row">
                <div class="form-group col-xs-12 col-md-6">
                  <label id="countryId" for="countryId">Country   :</label>
                  <select class="form-control input-sm" id="groom_country" name="groom_country" onchange="getstates(this.value)" >
                      <option value="Select Country">Select Country</option>
                           <?php foreach($countries as $value) { ?>
                            <option <?php if($professional_info['country']== $value['country']) { ?> selected <?php } ?> value="<?php echo $value['country'];?>"><?php echo ucwords($value['country']);?></option><?php } ?>
                  </select>
                 
               </div>
                <div class="form-group col-xs-12 col-md-6">
                  <label id="label_stateId" for="stateId">State :  </label>
                  <select class="form-control input-sm" id="state_id" name="state_id" >
                     <option value="Select Country">Select State</option>
                           <?php foreach($states as $value) { ?>
                            <option <?php if($professional_info['state'] == $value['state']) { ?> selected <?php } ?> value="<?php echo $value['state'];?>"><?php echo ucwords($value['state']);?></option><?php } ?>
                  </select>
                 
               </div>
                <div class="form-group col-xs-12 col-md-6">
                  <label for="city">City :</label>
                  <input type="text" name="city" class="form-control" id="city" value="<?php echo $professional_info['city'];?>">
                  
               </div>
                <div id="appdate" class="col-xs-12 col-md-12" style="display:none;">
             <div class="form-group col-xs-12 col-md-6" style="padding:0px;">
                  <label for="visatype">Visa Type :</label>
                  <select class="form-control input-sm" id="visatype" name="visatype">
                       <option value="">Select Visa Type</option>
                       <option <?php if($professional_info['visatype']=="Student Visa") { ?> selected <?php } ?> value="Student Visa">Student Visa</option>
                       <option <?php if($professional_info['visatype']=="Work Permit") { ?> selected <?php } ?> value="Work Permit">Work Permit</option>
                       <option <?php if($professional_info['visatype']=="Temporary Vissa") { ?> selected <?php } ?> value="Temporary Vissa">Temporary Vissa</option>
                       <option <?php if($professional_info['visatype']=="Citizen") { ?> selected <?php } ?> value="Citizen">Citizen</option>
                       <option <?php if($professional_info['visatype']=="Permanent Resident") { ?> selected <?php } ?> value="Permanent Resident">Permanent Resident</option>
                       <option <?php if($professional_info['visatype']=="Green Card") { ?> selected <?php } ?> value="Green Card">Green Card</option>
                       <option <?php if($professional_info['visatype']=="Opt") { ?> selected <?php } ?> value="Opt">Opt</option>
                       
                  </select>
               </div>
                <div class="form-group col-xs-12 col-md-6">
                  <label for="birth_date">Residing Since :</label>
                     <input type="date" name="residing-since" value="<?php echo $professional_info['residing-since'];?>" class="form-control">
                  </div>
               <div class="form-group col-xs-2 col-md-6">
                  <label for="birth_date">Arrival Date :</label>
                     <input type="date" name="arrival-date" value="<?php echo $professional_info['arrival-date'];?>" class="form-control">
               </div>
               <div class="form-group col-xs-2 col-md-6">
                  <label for="birth_date">Departure Date :</label>
                     <input type="date" name="departure-date" value="<?php echo $professional_info['departure-date'];?>" class="form-control">
               </div>
              </div>
            </div></div>
         <hr>
          <div class="col-xs-12 col-md-12 view-profile log-form">
         <h4 style="padding:20px;"><i class="fa fa-pencil-square" aria-hidden="true"></i>About Me</h4>
        
            <div class="form-row">
               <p class="col-md-12 form-p">Prospective matches would like to know what you are like,as a person.Write about yourself</p>
               <div class="form-group">
                  <textarea class="form-control input-sm" name="about" id="about" cols="20" rows="5"><?php echo $professional_info['about_me'];?></textarea>
               </div>
            </div>
       </div>
       
       <div class="col-xs-12 col-md-12 mt-20 text-cneter" style="margin:10px 35%;">
            
               <input type="submit" name="submit" value="Submit Profession Details" class="submit btn btn-primary m-0" name="submit" id="submit">
           
         </div>
       
       </div>
       
       
   
      <!--end log form -->
  
</div>
 
         </form>
<script type="text/javascript">
    window.onload = function() {
    getstates('<?php echo $professional_info['country']; ?>');
};
</script>
<script type="text/javascript">
        //programmer defined functions
		function getstates(valu)
		{
		    if((valu!="india"))
    		{
    			$('#appdate').show(1000);
    		}
    		else
    		{
    			$('#appdate').hide(1000);
    		}
    		
		}
		
        function getdegree(valu)
		{
		    
		    $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>dashboard/getdegree',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				   //alert(op);
				  $("#education_degree").html(op);
			   }
		   });
		}
		function getspecialization(valu)
		{
			$.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>dashboard/getspecialization',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				   //alert(op);
				  $("#specialization").html(op);
			   }
		   });
		}
</script>
</div>
                       
                       
                       
                   </div>
                   
               </div>
               

       
       

    </div>
</div>