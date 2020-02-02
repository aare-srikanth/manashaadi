<section>
   <div class="main col-xs-12 no-padding" style="padding:30px; background:#FFF;">
      <div class="container">
          <div class="regd-heading" style="color:#ff5a60;">
            <h1>MATRIMONY REGISTER FREE</h1>
                        <p>Let's Create Your Profile, while we find Matches for you!
</p></div>
         <div class="signup-content">
            <div class="signup-img">
               <img src="<?php echo site_url();  ?>images/register.jpg" alt="">
            </div>
            <div class="signup-form">
               <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register" onsubmit="return validation()">
                 
                  <?php if($this->session->flashdata('msg_succ') != ''){ ?>
					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						<p>
							<?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?>
						</p>
					</div>
				<?php } ?>
                  
                  <div class="form-row rmt-30">
                     <div class="form-group">
                        <label for="email">Email ID :</label>
                        <input type="text" name="email" id="email" autocomplete="off"/>
                        <span id="emailid" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" autocomplete="off"/>
                        <span id="passwords" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="phone">Phone :</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile"/>
                        <span id="mobile_nos" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="name">First Name :</label>
                        <input type="text" name="first_name" id="first_name" autocomplete="off"/>
                        <span id="firstnames" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group">
                        <label for="last_name">Last Name :</label>
                        <input type="text" name="last_name" id="last_name" autocomplete="off"/>
                        <span id="lastnames" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-radio form-group">
                        <label for="gender" class="radio-label">Gender :</label>
                        <div style="display:flex;width:100%">
                           <div class="form-radio-item pr-10">
                              <input type="radio" name="gender" id="male" value="male">
                              <label for="male">Male</label>
                              <span class="check"></span>
                           </div>
                           <div class="form-radio-item">
                              <input type="radio" name="gender" id="female" value="female">
                              <label for="female">Female</label>
                              <span class="check"></span>
                           </div>
                        </div>  <span id="genders" class="text-danger font-weight-bold t-40"></span>
                     </div>
                     <div class="form-group fx">
                        <label for="birth_date">DOB :</label>
                        <select name="date" id="date" class="form_dropdown search_pannel_age select2-offscreen" tabindex="-1" style="width:31%">
                           <option selected="selected">DD</option>
                           <option label="1">1</option>
                           <option label="2">2</option>
                           <option label="3">3</option>
                           <option label="4">4</option>
                           <option label="5">5</option>
                           <option label="6">6</option>
                           <option label="7">7</option>
                           <option label="8">8</option>
                           <option label="9">9</option>
                           <option label="10">10</option>
                           <option label="11">11</option>
                           <option label="12">12</option>
                           <option label="13">13</option>
                           <option label="14">14</option>
                           <option label="15">15</option>
                           <option label="16">16</option>
                           <option label="17">17</option>
                           <option label="18">18</option>
                           <option label="19">19</option>
                           <option label="20">20</option>
                           <option label="21">21</option>
                           <option label="22">22</option>
                           <option label="23">23</option>
                           <option label="24">24</option>
                           <option label="25">25</option>
                           <option label="26">26</option>
                           <option label="27">27</option>
                           <option label="28">28</option>
                           <option label="29">29</option>
                           <option label="30">30</option>
                           <option label="31">31</option>
                        </select>
                        <span id="dates" class="text-danger font-weight-bold b-22"></span>
                        <select name="month" id="month" class="form_dropdown search_pannel_age select2-offscreen" tabindex="-1" style="width:31%">
                          <option selected="selected">MM</option>
                           <option>Jan</option>
                           <option>Feb</option>
                           <option>Mar</option>
                           <option>Apr</option>
                           <option>May</option>
                           <option>Jun</option>
                           <option>Jul</option>
                           <option>Aug</option>
                           <option>Sep</option>
                           <option>Oct</option>
                           <option>Nov</option>
                           <option>Dec</option>
                        </select>
                        <span id="months" class="text-danger font-weight-bold b-22"></span>
                        <select name="year" id="year" class="form_dropdown search_pannel_age select2-offscreen" tabindex="-1" style="width:31%">
                           <option label="Year" selected="selected">Year</option>
                            <option label="2002">2002</option>
                            <option label="2001">2001</option>
                            <option label="2000">2000</option>
                            <option label="1999">1999</option>
                            <option label="1998">1998</option>
                            <option label="1997">1997</option>
                            <option label="1996">1996</option>
                            <option label="1995">1995</option>
                            <option label="1994">1994</option>
                            <option label="1993">1993</option>
                            <option label="1992">1992</option>
                            <option label="1991">1991</option>
                            <option label="1990">1990</option>
                            <option label="1989">1989</option>
                            <option label="1988">1988</option>
                            <option label="1987">1987</option>
                            <option label="1986">1986</option>
                            <option label="1985">1985</option>
                            <option label="1985">1985</option>
                            <option label="1984">1984</option>
                            <option label="1983">1983</option>
                            <option label="1982">1982</option>
                            <option label="1981">1981</option> 
                            <option label="1980">1980</option>
                            <option label="1979">1979</option>
                            <option label="1978">1978</option>
                            <option label="1977">1977</option>
                            <option label="1976">1976</option>
                            <option label="1975">1975</option>
                            <option label="1974">1974</option>
                            <option label="1973">1973</option>
                            <option label="1972">1972</option>
                            <option label="1971">1971</option>
                            <option label="1970">1970</option>
                        
                        </select>
                        <span id="years" class="text-danger font-weight-bold b-22"></span>
                     </div>
                     <div class="form-group">
                        <label for="country">Living In :</label>
                        <select id="country" name="country">
                           <option value="Select Country">Select Country</option>
                           <?php foreach($countries as $value)
                           { ?>
                           <option  value="<?php echo $value['country'];?>"><?php echo ucwords($value['country']);?></option><?php } ?>
                        </select>
                         <span id="livings" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="row">
                        <div class="checkbox ml-30 col-md-12">
                           <input id="checkbox1" type="checkbox">
                           <label for="checkbox1">
                           I agree to the <span><a href="#">Privacy Polacy</a></span>  and <span><a href="#">T&C</a></span>
                           </label>
                            <span id="privacys" class="clr-a94442 font-weight-bold"></span>
                        </div>
                     </div>
                     <div class="submit-form">
                        <input type="submit" value="Submit Form" class="submit bsbb darkbg1 white bdr" name="submit" id="submit" />
                        
                       <p> Already a Member? <a href="<?php echo site_url()."login";?>" class="ft-center" title="Let's Create Your Profile, while we find Matches for you!
                           "> Login</a></p>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
    $("#mobile").intlTelInput({
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});
</script>
<script type="text/javascript">
    function validation()
    {
       var email = document.getElementById('email').value;
       var password = document.getElementById('password').value;
       var mobile = document.getElementById('mobile').value;
       var firstname = document.getElementById('first_name').value;
       var lastname = document.getElementById('last_name').value;
       var date = document.getElementById('date').value;
       var month = document.getElementById('month').value;
       var year = document.getElementById('year').value;
       var male = document.getElementById('male').checked;
       var female = document.getElementById('female').checked;
       var privacy = document.getElementById('checkbox1').checked;
       var country = document.getElementById('country').value;
       if(email == "")
       {
           document.getElementById('emailid').innerHTML = " * please specify email id";
           document.getElementById('email').focus();
           return false;
       }else {
            document.getElementById('emailid').innerHTML = " ";
       }
        if(email.indexOf('@') <= 0)
       {
           document.getElementById('emailid').innerHTML = " * please specify email id in proper format @";
           document.getElementById('email').focus();
           return false;
       }else {
            document.getElementById('emailid').innerHTML = " ";
       }
       if((email.charAt(email.length-4)!= '.') && (email.charAt(email.length-3)!= '.'))
       {
           document.getElementById('emailid').innerHTML = " * please specify email id in proper format iclude .";
           document.getElementById('email').focus();
           return false;
       }else {
            document.getElementById('emailid').innerHTML = " ";
       }
       
      if(password == "")
       {
           document.getElementById('passwords').innerHTML = " * please enter password";
           document.getElementById('password').focus();
           return false;
       }else {
            document.getElementById('passwords').innerHTML = " ";
       }
      if((password.length < 6) || (password.length >= 15))
       {
           document.getElementById('passwords').innerHTML = " *   please enter password between 6 to 15 characters without any spaces";
           document.getElementById('password').focus();
           return false;
       }else {
            document.getElementById('passwords').innerHTML = " ";
       }
       
        if(mobile == "")
       {
           document.getElementById('mobile_nos').innerHTML = " * pleased enter mobile number to contact You";
           document.getElementById('mobile').focus();
           return false;
       }else {
            document.getElementById('mobile_nos').innerHTML = " ";
       }
        if((mobile.length!=10))
       {
           document.getElementById('mobile_nos').innerHTML = " *  mobile number should be 10 digits";
           document.getElementById('mobile').focus();
           return false;
       }else {
            document.getElementById('mobile_nos').innerHTML = " ";
       }
        if(isNaN(mobile))
       {
           document.getElementById('mobile_nos').innerHTML = " * please enter only digits";
           document.getElementById('mobile').focus();
           return false;
       }else {
            document.getElementById('mobile_nos').innerHTML = " ";
       }
       
      if(firstname == "")
       {
           document.getElementById('firstnames').innerHTML = " * please enter first name";
           document.getElementById('first_name').focus();
           return false;
       }else {
            document.getElementById('firstnames').innerHTML = " ";
       }
        if((firstname.length < 3) || (firstname.length > 75))
       {
           document.getElementById('firstnames').innerHTML = " * please fill the first name between 3 and 75 characters";
            document.getElementById('first_name').focus();
           return false;
       }else {
            document.getElementById('firstnames').innerHTML = " ";
       }
        if(!isNaN(firstname))
       {
           document.getElementById('firstnames').innerHTML = " * please enter only characters";
            document.getElementById('first_name').focus();
           return false;
       }else {
            document.getElementById('firstnames').innerHTML = " ";
       }
       if(lastname == "")
       {
           document.getElementById('lastnames').innerHTML = " *please enter last name(surname)";
            document.getElementById('last_name').focus();
           return false;
       }else {
            document.getElementById('lastnames').innerHTML = " ";
       }
       if(!isNaN(lastname))
       {
           document.getElementById('lastnames').innerHTML = " * please enter only characters";
           document.getElementById('last_name').focus();
           return false;
       }else {
            document.getElementById('lastnames').innerHTML = " ";
       }
       if(date == "DD")
       {
           document.getElementById('dates').innerHTML = " *please select date";
           document.getElementById('date').focus();
           return false;
       }else {
            document.getElementById('dates').innerHTML = " ";
       }
       if(month == "MM")
       {
           document.getElementById('months').innerHTML = " *please select month";
           document.getElementById('month').focus();
           return false;
       }else {
            document.getElementById('months').innerHTML = " ";
       }
        if(year == "Year")
       {
           document.getElementById('years').innerHTML = " *please select year";
           document.getElementById('year').focus();
           return false;
       }else {
            document.getElementById('years').innerHTML = " ";
       }
       if((male == "") && (female == ""))
       {
           document.getElementById('genders').innerHTML = " *please select gender";
           
           return false;
       }else {
            document.getElementById('genders').innerHTML = " ";
       }
        if((privacy == ""))
       {
           document.getElementById('privacys').innerHTML = " *please accept terms& conditions";
           document.getElementById('checkbox1').focus();
           return false;
       }else {
            document.getElementById('privacys').innerHTML = " ";
       }
       if(country == "Select Country")
       {
           document.getElementById('livings').innerHTML = " *please select country";
           document.getElementById('country').focus();
           return false;
       }else {
            document.getElementById('livings').innerHTML = " ";
       }
    }
</script>
