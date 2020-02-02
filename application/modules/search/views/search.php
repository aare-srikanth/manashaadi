<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
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
<section>
   <div class="main">
      <div class="container">
         <div class="log-form">
            <form method="POST" action="<?php echo site_url();?>search/searchprofiles" class="register-form" id="register-form">
               <h2>Search Your Partner</h2>
               <p class="col-xs-12">&nbsp;</p>
               <div class="form-row">
                  <div class="form-radio form-group form-gender">
                     <label for="gender" class="radio-label">Search For :</label>
                     <div style="display:flex;width:100%" class="form-inner">
                        <div class="form-radio-item pr-10">
                           <input type="radio" name="gender" id="bride" value="female">
                           <label for="bride">Bride</label>
                           <span class=" "></span>
                        </div>
                        <div class="form-radio-item">
                           <input type="radio" name="gender" id="groom" value="male">
                           <label for="groom">Groom</label>
                           <span class=" "></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-xs-4 fx" style="padding:0px !important;">
                      <div class="col-xs-6">
                     <label id="label_heightId" for="heightId" title="Height">Height : </label>
                     <select class="form-control" id="heightfrom" name="heightfrom" >
                        <option value="">Select Height</option>
                        <?php foreach($heights as $value) { ?>
                        <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                     </select></div>
                      <div class="col-xs-6">
                     <span class="plr-5">to</span>
                     <select class="form-control" id="heightto" name="heightto" >
                        <option value="">Select Height</option>
                        <?php foreach($heights as $value) { ?>
                        <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                     </select></div>
                  </div>
                  <div class="form-group col-xs-4 fx">
                       <div class="col-xs-6">
                      <label id="label_ageId" for="heightId" title="age">Age : </label>
                  <select name="agefrom" id="agefrom" class="form-control" tabindex="-1">
                        <option value="">Age</option>
                        <option selected value="18" label="18">18</option>
                        <option value="19" label="19">19</option>
                        <option value="20" label="20">20</option>
                        <option value="21" label="21">21</option>
                        <option value="22" label="22">22</option>
                        <option value="23" label="23">23</option>
                        <option value="24" label="24">24</option>
                        <option value="25" label="25">25</option>
                        <option value="26" label="26">26</option>
                        <option value="27" label="27">27</option>
                        <option value="28" label="28">28</option>
                        <option value="29" label="29">29</option>
                        <option value="30" label="30">30</option>
                        <option value="31" label="31">31</option>
                        <option value="32" label="32">32</option>
                        <option value="33" label="33">33</option>
                        <option value="34" label="34">34</option>
                        <option value="35" label="35">35</option>
                        <option value="36" label="36">36</option>
                        <option value="37" label="37">37</option>
                        <option value="38" label="38">38</option>
                        <option value="39" label="39">39</option>
                        <option value="40" label="40">40</option>
                        <option value="41" label="41">41</option>
                        <option value="42" label="42">42</option>
                        <option value="43" label="43">43</option>
                        <option value="44" label="44">44</option>
                        <option value="45" label="45">45</option>
                        <option value="46" label="46">46</option>
                        <option value="47" label="47">47</option>
                        <option value="48" label="48">48</option>
                        <option value="49" label="49">49</option>
                        <option value="50" label="50">50</option>
                     </select> </div><div class="col-xs-6">
                     <span class="plr-5">to</span>
                     <select name="ageto" id="ageto" class="form-control" tabindex="-1" >
                         <option value="">Age</option>
                        <option value="18" label="18">18</option>
                        <option value="19" label="19">19</option>
                        <option value="20" label="20">20</option>
                        <option value="21" label="21">21</option>
                        <option value="22" label="22">22</option>
                        <option value="23" label="23">23</option>
                        <option value="24" label="24">24</option>
                        <option value="25" label="25">25</option>
                        <option value="26" label="26">26</option>
                        <option value="27" label="27">27</option>
                        <option value="28" label="28">28</option>
                        <option value="29" label="29">29</option>
                        <option value="30" label="30">30</option>
                        <option value="31" label="31">31</option>
                        <option value="32" label="32">32</option>
                        <option value="33" label="33">33</option>
                        <option value="34" label="34">34</option>
                        <option selected value="35" label="35">35</option>
                        <option value="36" label="36">36</option>
                        <option value="37" label="37">37</option>
                        <option value="38" label="38">38</option>
                        <option value="39" label="39">39</option>
                        <option value="40" label="40">40</option>
                        <option value="41" label="41">41</option>
                        <option value="42" label="42">42</option>
                        <option value="43" label="43">43</option>
                        <option value="44" label="44">44</option>
                        <option value="45" label="45">45</option>
                        <option value="46" label="46">46</option>
                        <option value="47" label="47">47</option>
                        <option value="48" label="48">48</option>
                        <option value="49" label="49">49</option>
                        <option value="50" label="50">50</option>
                     </select></div>
                  </div>
                  <div class="form-group col-xs-4">
                     <label id="label_maritalStatusId" for="maritalStatusId">Marital Status</label>
                     <select class="form-control" id="maritalstatus" name="maritalstatus">
                      <option value="">Select Marital
                      Status</option>
                           <option value="never_married">Never Married</option>
                           <option value="divorced">Divorced</option>
                           <option value="widow-widower">Widow / Widower</option>
                           <option value="separated">Separated</option>
                           <option value="annulled">Annulled</option>
                     </select>
                  </div>
                  
                  <div class="form-group col-xs-4">
                     <label id="label_religionId" for="religionId">Religion</label>
                     <select class="form-control" id="religion" name="religion">
                       <option value="">Select Religion</option>
                        <?php foreach($religions as $value) { ?>
                        <option value="<?php echo $value['religion'];?>"><?php echo stripcslashes($value['religion']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group col-xs-4">
                     <label id="label_motherTongueId" for="motherTongueId">Mother Tongue</label>
                     <select class="form-control" id="mothertounge" name="mothertounge">
                       <option value="">Select Mother Tongue</option>
                        <?php foreach($mothertounges as $value) { ?>
                        <option value="<?php echo $value['mothertounge'];?>"><?php echo stripcslashes($value['mothertounge']);?></option><?php } ?>
                     </select>
                  </div>
                   <div class="form-group col-xs-4">
                     <label id="label_motherTongueId" for="motherTongueId">Caste</label>
                     <select class="form-control" id="caste" name="caste">
                       <option value="">Select Caste</option>
                        <?php foreach($castes as $value) { ?>
                        <option value="<?php echo $value['caste'];?>"><?php echo stripcslashes($value['caste']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group col-xs-4">
                     <label id="label_educationLevelId" for="educationLevelId">Education Level</label>
                     <select class="form-control" id="education" name="education">
                            <option value="">Select Education</option>
                           <option value="Bachelors in Engineering">Bachelors in Engineering</option>
                           <option value="Bachelors in Medicine">Bachelors in Medicine</option>
                           <option value="Bachelors in Degree">Bachelors in Degree</option>
                           <option value="Masters in Engineering">Masters in Engineering</option>
                           <option value="Masters in Medicine">Masters in Medicine</option>
                           <option value="Masters in Degree">Masters in Degree</option>
                           <option value="Finance - ICWAI/CA/CS">Finance - ICWAI/CA/CS</option>
                           <option value="Union Public Service Commision-Civil Services">Union Public Service Commision-Civil Services</option>
                           <option value="Doctorate/phd">Doctorate/phd</option>
                           <option value="Diploma / Below Graduation">Diploma / Below Graduation</option>
                           <option value="Others">Others</option>
                     </select>
                  </div>
                 <div class="form-group col-xs-4">
                     <label id="label_educationLevelId" for="educationLevelId">Select Profession</label>
                     <select class="form-control" id="profession" name="profession">
                            <option value="">Select Profession</option>
                           <?php foreach($professions as $value) { ?>
                            <option value="<?php echo $value['profession'];?>"><?php echo stripcslashes($value['profession']);?></option><?php } ?>
                     </select>
                  </div>
                  <div class="form-group col-xs-4">
                     <label id="label_countryOfBirthId" for="countryOfBirthId">Country Living In</label>
                     <select class="form-control" id="country" name="country">
                         <option value="">Select Country</option>
                      <?php foreach($countries as $value) { ?>
                        <option value="<?php echo $value['country'];?>"><?php echo stripcslashes($value['country']);?></option><?php } ?>
                     </select>
                  </div>
               </div>
              
                  <div class="col-md-12 text-right no-padding">
                     <div class="submit-form" style="padding-top:30px; padding-bottom:30px;">
                        <input type="submit" value="Search" class="submit bsbb darkbg1 white bdr" name="submit" id="submit" style="width:100px; line-height:36px; margin-right: 15px; font-size:16px; font-weight:normal;">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>