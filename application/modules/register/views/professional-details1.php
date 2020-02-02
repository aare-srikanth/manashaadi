<style type="text/css">
    .text-danger {
    color: #a94442;
    font-size: 11px;
    display: grid;
    position: absolute;
}
</style>
  
  <div class="container person-details" style="margin-top:100px !important; ">
     
        
            <div class="log-form">
               <h3 style="padding: 10px;font-size: 19px;margin: 10px;"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Education Details</h3>
               <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/profession/<?php echo $this->uri->segment(3);?>" onsubmit="return validation()">
                  <div class="form-row ">
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="country">Highest Education :</label>
                        <select class="form-control" id="highest_education" name="highest_education" onchange="getdegree(this.value)">
                           <option value="Select Education">Select Education</option>
                           <?php foreach($heighsteducation as $value) { ?>
                           <option value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option><?php } ?>
                        </select>
                        <span id="highest_educations" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="height">Education Degree :</label>
                        <select class="form-control" id="education_degree" name="education_degree" onchange="getspecialization(this.value)">
                           <option value="Select Education Degree">Select Education Degree</option>
                        </select>
                        <span id="education_degrees" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="country">Specialization :</label>
                        <select id="specialization" class="form-control" name="specialization">
                           <option value="Select Specialization" selected="selected">Select Specialization</option>
                        </select>
                        <span id="specializations" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="university">University :</label>
                        <input type="text" class="form-control" name="university" id="university"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="college">College :</label>
                        <input type="text"class="form-control" name="college" id="college"/>
                     </div>
                     <div class="form-group col-md-12 col-xs-12">
                        <label for="college">Education in Detail :</label>
                        <textarea class="form-control" name="education-details" id="education-details" cols="20" rows="3"></textarea>
                     </div>
                  </div>
               <hr>
               <h3 style="padding: 10px;font-size: 19px; margin: 10px; clear: both;"><i class="fa fa-suitcase" aria-hidden="true"></i> Professional Details</h3>
              
                  <div class="form-row">
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="employeein">Employed In :</label>
                        <select class="form-control" id="employee_in" name="employee_in">
                          <option value="Employed In">Select Employed In</option>
                           <option value="Government">Government</option>
                           <option value="Private">Private</option>
                           <option value="Business">Business</option>
                           <option value="Defencce">Defencce</option>
                           <option value="Student">Student</option>
                           <option value="Not-Working">Not-Working</option>
                        </select><span id="employee_ins" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="occupation">Profession :</label>
                        <select class="form-control" id="profession" name="profession" onchange="getprofessioninfo(this.value)">
                          <option value="Select Profession">Select Profession</option>
                           <?php foreach($professions as $value) { ?>
                            <option value="<?php echo $value['profession'];?>"><?php echo stripcslashes($value['profession']);?></option><?php } ?>
                        </select>
                        <span id="professions" class="text-danger font-weight-bold"></span>
                     </div>
                     <div id="hidedata" class="col-xs-12 col-md-12" style="display:none; clear:both !important; padding-left:0px">
                     <div class="form-group col-md-6 col-xs-12">
                        <label id="label_annualIncomeCurrencyId" for="annualIncomeCurrencyId">Currency : </label>
                        <select id="currency" class="form-control" name="currency">
                           <option value="Select Currency">Select Currency</option>
                           
                            <option value="Rs">India</option>	
                            <option value="US">USA</option>
                            <option value="GBP">UK</option>
                            <option value="CAD">Canada</option>
                            <option value="AUD">Australia</option>
                            <option value="SGD">Singapore</option>
                            <option value="SAR">Saudi Arabia</option>
                            <option value="ZAR">South Africa</option>
                            <option value="KWD">Kuwait</option>
                            <option value="PKR">Pakistan</option>
                            <option value="AFA">Afghanistan</option>
                            <option value="ALL">Albania</option>
                            <option value="DZD">Algeria</option>
                            <option value="SAR">Anguiila</option>
                            <option value="XCD">South Africa</option>
                            <option value="XCD">Antarctica</option>
                            <option value="AMD">Armenia</option>
                            <option value="AWG">Aruba</option>
                            <option value="EUR">Austria</option>
                            <option value="AZM">Azerbaijan</option>
                            <option value="BHD">Bahrain</option>
                            <option value="BDT">Bangladesh</option>
                            <option value="EUR">Belgium</option>
                            <option value="BWP">Botswana</option>
                            <option value="BRL">Brazil</option>
                            <option value="USD">British Indian Ocean Territory</option>
                            <option value="BND">Brunei</option>
                            <option value="CNY">China</option>
                            <option value="XAF">Congo</option>
                            <option value="CZK">Czech Republic</option>
                            <option value="DKK">Denmark</option>
                            <option value="ERN">Eritrea</option>
                            <option value="ETB">Ethiopia</option>
                            <option value="EUR">Finland</option>
                            <option value="EUR">France</option>
                            <option value="EUR">Germany</option>
                            <option value="GHC">Ghana</option>
                            <option value="XCD">Grenada</option>
                            <option value="HKD">Hong Kong</option>
                            <option value="HUF">Hungary</option>
                            <option value="ISK">Iceland</option>
                            <option value="IDR">Indonesia</option>
                            <option value="IQD">Iraq</option>
                            <option value="EUR">Ireland</option>
                            <option value="ILS">Israel</option>
                            <option value="EUR">Italy</option>
                            <option value="XOF">Ivory Coast</option>
                            <option value="JMD">Jamaica</option>
                            <option value="JPY">Japan</option>
                            <option value="JOD">Jordan</option>
                            <option value="KZT">Kazakstan</option>
                            <option value="KES">Kenya</option>
                            <option value="KRW">South Korea</option>
                            <option value="KPW">North Korea</option>
                            <option value="LNP">Lebanon</option>
                            <option value="LRD">Liberia</option>
                            <option value="EUR">Luxembourg</option>
                            <option value="MYR">Malaysia</option>
                            <option value="MVR">Maldives</option>
                            <option value="LRD">Liberia</option>
                            <option value="EUR">Luxembourg</option>
                            <option value="MYR">Malaysia</option>
                            <option value="MVR">Maldives</option>
                            <option value="XOF">Mali</option>
                            <option value="EUR">Martinique</option>
                            <option value="MUR">Martinique</option>
                            <option value="MXN">Mexico</option>
                            <option value="NPR">Nepal</option>
                            <option value="EUR">Netherlands</option>
                            <option value="NZD">New Zealand</option>
                            <option value="NGN">Nigeria</option>
                            <option value="NOK">Norway</option>
                            <option value="OMR">Oman</option>
                            <option value="PHP">Philippines</option>
                            <option value="PLZ">Poland</option>
                            <option value="USD">Puerto Rico</option>
                            <option value="QAR">Qatar</option>
                            <option value="RUR">Russia</option>
                            <option value="XOF">Senegal</option>
                            <option value="EUR">Spain</option>
                            <option value="SDD">Sudan</option>
                            <option value="SZL">Swaziland</option>
                            <option value="SEK">Sweden</option>
                            <option value="CHF">Switzerland</option>
                            <option value="RUR">Russia</option>
                            <option value="XOF">Senegal</option>
                            <option value="EUR">Spain</option>
                            <option value="SDD">Sudan</option>
                            <option value="SZL">Swaziland</option>
                            <option value="SEK">Sweden</option>
                            <option value="CHF">Switzerland</option>
                            <option value="TWD">Taiwan</option>
                            <option value="TZS">Tanzania</option>
                            <option value="THB">Thailand</option>
                            <option value="TRL">Turkey</option>
                            <option value="UGS">Uganda</option>
                            <option value="NO">Ukraine</option>
                            <option value="AED">United Arab Emirates</option>
                            <option value="VND">Vietnam</option>
                            <option value="ZMK">Zambia</option>
                            <option value="NotG">Not Given</option>
                            <option value="OthR">Other</option>
                            <option value="LKR">Srilanka</option>
                            <option value="BWI">West Indies</option>
                            <option value="Euro">Europe</option>
                            <option value="CFA">WEST AFRICA</option>
                            <option value="Riel">Cambodia</option>
                            <option value="RS">Seychelles</option>
                         </select>
                      <span id="currencys" class="text-danger font-weight-bold"></span>
                     </div>
                     
                     <div class="form-group col-md-6 col-xs-12">
                        <label id="label_annualIncomeAmount" for="annualIncomeAmount">Monthly Income : </label>
                        <input type="number" id="monthly_income" class="form-control" name="monthly_income">
                        <span id="monthly_incomes" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="company">Company :</label>
                        <input type="text" name="company" class="form-control" id="company"/>
                        <span id="companys" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="occupation">Profession In Details :</label>
                        <textarea type="text" name="about_profession" id="about_profession" class="form-control" cols="20" rows="3"></textarea>
                        
                     </div>
                     </div>
                  </div>
             
               <hr>
            
               
                  <div class="form-row" style="clear: both;">
                         <h3 style="padding: 10px;font-size: 19px; margin: 10px;"><i class="fa fa-map-marker" aria-hidden="true"></i> Groom's Current Location</h3>
                     <div class="form-group col-md-6 col-xs-12">
                        <label id="countryId" for="countryId">Country   :</label>
                        <select class="form-control" id="groom_country" name="groom_country" onchange="getstates(this.value)">
                           <option value="Select Country">Select Country</option>
                           <?php foreach($countries as $value) { ?>
                            <option  value="<?php echo $value['country'];?>"><?php echo ucwords($value['country']);?></option><?php } ?>
                        </select>
                         <span id="groom_countrys" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label id="label_stateId" for="stateId">State :  </label>
                        <select class="form-control" id="state_id" name="state_id">
                           <option value="Select State">Select State</option>
                        </select>
                        <span id="state_ids" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="city">City :</label>
                        <input type="text" name="city" class="form-control " id="city" />
                         <span id="citys" class="text-danger font-weight-bold"></span>
                     </div>
                     <div id="appdate" class="col-md-12 col-xs-12" style="display:none; clear:both;">
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="visatype">Visa Type :</label>
                        <select class="form-control" id="visatype" name="visatype">
                           <option value="">Select Visa Type</option>
                           <option value="Student Visa">Student Visa</option>
                           <option value="Work Permit">Work Permit</option>
                           <option value="Temporary Vissa">Temporary Vissa</option>
                           <option value="Citizen">Citizen</option>
                           <option value="Permanent Resident">Permanent Resident</option>
                           <option value="Green Card">Green Card</option>
                           <option value="Opt">Opt</option>
                        </select>
                     </div>
                    <div class="form-group col-md-6 col-xs-12">
                  <label for="birth_date">Residing Since :</label>
                 
                     <input type="date" name="residing-since"  class="form-control">
                  </div>
               
               <div class="form-group col-md-6 col-xs-12">
                  <label for="birth_date">Arrival Date :</label>
                  
                     <input type="date" name="arrival-date"  class="form-control">
                  
               </div>
               <div class="form-group col-md-6 col-xs-12">
                  <label for="birth_date">Departure Date :</label>
                 
                     <input type="date" name="departure-date" class="form-control">
                  
               </div>
              </div>
               
               <p class="col-md-12 form-p">Prospective matches would like to know what you are like,as a person.Write about yourself</p>
                  <div class="form-row" style="padding-left:10px !important;">
                     <div class="form-group" style="clear: both !important;">
                         <label><i class="fa fa-pencil-square" aria-hidden="true"></i> About Me</label>
                        <textarea class="form-control" name="about" id="about" cols="20" rows="3"></textarea>
                     </div>
                  </div> 
             
                
            </div>
            <div class="submit-form col-xs-12 text-center" >
                 <input type="submit" value="Submit Profession Details" class="btn btn-primary m-0" name="submit" id="submit">
               </div>
               
              <!-- <div class="submit-form">
                <a href="login.php"><input type="submit" value="Submit Religion Details" class="submit m-0" name="submit" id="submit"></a>
                  </div>-->
               
               
               </form>
         </div>
      
   </div>

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
    		
			$.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getstates',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#state_id").html(op);
			   }
		   });
		}
		function getdegree(valu)
		{
		    
		    $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getdegree',
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
			   url: '<?php echo site_url();?>register/getspecialization',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				   //alert(op);
				  $("#specialization").html(op);
			   }
		   });
		}
		function getprofessioninfo(valu)
		{
		    if((valu=="student")||(valu=="not working"))
    		{
    			$('#hidedata').hide(1000);
    		}
    		else
    		{
    			$('#hidedata').show(1000);
    		}
		}
</script>
<script type="text/javascript">
    function validation()
    {
       var country = document.getElementById('groom_country').value;
       var state = document.getElementById('state_id').value;
       var city = document.getElementById('city').value;
       var employee_in = document.getElementById('employee_in').value;
       var currency = document.getElementById('currency').value;
       var profession = document.getElementById('profession').value;
       var monthly_income = document.getElementById('monthly_income').value;
       var company = document.getElementById('company').value;
       var heighsteducation = document.getElementById('highest_education').value;
       var education_degree = document.getElementById('education_degree').value;
       var specialization = document.getElementById('specialization').value;
      
      
        if(heighsteducation == "Select Education")
       {
           document.getElementById('highest_educations').innerHTML = " *please select heighst education ";
           document.getElementById('highest_education').focus();
           return false;
       }else {
            document.getElementById('highest_educations').innerHTML = " ";
       }
       
        if(education_degree == "Select Education Degree")
       {
           document.getElementById('education_degrees').innerHTML = " *please select education degree";
            document.getElementById('education_degree').focus();
           return false;
       }else {
            document.getElementById('education_degrees').innerHTML = " ";
       }
       
        if(specialization == "Select Specialization")
       {
           document.getElementById('specializations').innerHTML = " *please select specialization";
           document.getElementById('specialization').focus();
           return false;
       }else {
            document.getElementById('specializations').innerHTML = " ";
       }
       if(employee_in == "Employed In")
       {
           document.getElementById('employee_ins').innerHTML = " *please select this field";
           document.getElementById('employee_in').focus();
           return false;
       }else {
            document.getElementById('employee_ins').innerHTML = " ";
       }
        if(profession == "Select Profession")
           {
               document.getElementById('professions').innerHTML = " *please select profession";
               document.getElementById('profession').focus();
               return false;
           }else {
                document.getElementById('professions').innerHTML = " ";
           }
           
      /*  if((employee_in != "Student")||(employee_in != "Not-Working"))
       {
           
           
           if(currency == "Select Currency")
           {
               document.getElementById('currencys').innerHTML = " *please select currency";
               document.getElementById('currency').focus();
               return false;
           }else {
                document.getElementById('currencys').innerHTML = " ";
           }
           
           if(monthly_income == "")
           {
               document.getElementById('monthly_incomes').innerHTML = " *please enter income";
               document.getElementById('monthly_income').focus();
               return false;
           }else {
                document.getElementById('monthly_incomes').innerHTML = " ";
           }
            if(company == "")
           {
               document.getElementById('companys').innerHTML = " *please enter company name";
               document.getElementById('company').focus();
               return false;
           }else {
                document.getElementById('companys').innerHTML = " ";
           }
           if(!isNaN(company))
           {
               document.getElementById('companys').innerHTML = " * please enter only characters";
               document.getElementById('company').focus();
               return false;
           }else {
                document.getElementById('companys').innerHTML = " ";
           }
       }*/
       
       if(country == "Select Country")
       {
           document.getElementById('groom_countrys').innerHTML = " *please select country";
           document.getElementById('groom_country').focus();
           return false;
       }else {
            document.getElementById('groom_countrys').innerHTML = " ";
       }
       
       if(state == "Select State")
       {
           document.getElementById('state_ids').innerHTML = " *please select state ";
           document.getElementById('state_id').focus();
           return false;
       }else {
            document.getElementById('state_ids').innerHTML = " ";
       }
       
        if(city == "")
       {
           document.getElementById('citys').innerHTML = " * please enter city";
           return false;
           document.getElementById('city').focus();
       }else {
            document.getElementById('citys').innerHTML = " ";
       }
        if((city.length < 3))
       {
           document.getElementById('citys').innerHTML = " * please fill the city with minimum 3 characters";
            document.getElementById('city').focus();
           return false;
       }else {
            document.getElementById('citys').innerHTML = " ";
       }
        if(!isNaN(city))
       {
           document.getElementById('citys').innerHTML = " * please enter only characters";
            document.getElementById('city').focus();
           return false;
       }else {
            document.getElementById('citys').innerHTML = " ";
       }
       
    }
</script>
