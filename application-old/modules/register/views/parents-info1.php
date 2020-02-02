
<section class="about-us">
   <div class="container person-details" style="margin-top:50px !important; ">
    
            <div class="log-form">
               
               <h3 style="padding: 10px;font-size: 19px; margin: 10px;"><i class="fa fa-users" aria-hidden="true"></i>Parents Details</h3>
                   <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/parents/<?php echo $this->uri->segment(3);?>" onsubmit="return validation()">
                  <div class="form-row">
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name"><span style="color:red">*</span> Father Name :</label>
                        <input class="form-control" type="text" name="father-name" id="father-name"/>
                         <span id="father-names" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name"><span style="color:red;">*</span> Father Education :</label>
                        <input class="form-control" type="text" name="father-education" id="father-education"/>
                        <span id="father-educations" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name"><span style="color:red;">*</span> Father Profession :</label>
                        <input class="form-control" type="text" name="father-profession" id="father-profession"/>
                         <span id="father-professions" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Father Email :</label>
                        <input class="form-control" type="email" name="father-email" id="father-email"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Father Mobile :</label>
                        <input class="form-control" type="phone" name="father-mobile" id="father-mobile"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Father Father Name :</label>
                        <input class="form-control" type="text" name="fathers-father-name" id="fathers-father-name"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="country">Father Father State :</label>
                        <select class="form-control" id="fathers-father-state" onchange="getfatherdistricts(this.value)" name="fathers-father-state">
                            <option value="">Select State</option>
                           <?php foreach($states as $value) { ?>
                           <option value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="country">Father Father District :</label>
                        <select class="form-control" id="fathers-father-district" name="fathers-father-district">
                           <option value="">Select State First</option>
                        </select>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Father's Father Native Place :</label>
                        <input class="form-control" type="text" name="fathers-father-native-place" id="fathers-father-native-place"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name"><span style="color:red;">*</span> Mother Name :</label>
                        <input class="form-control" type="text" name="mother-name" id="mother-name" />
                         <span id="mother-names" class="text-danger font-weight-bold"></span>
                     </div>
                     
                     <span id="groom_countrys" class="text-danger font-weight-bold"></span>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Mother Education :</label>
                        <input class="form-control" type="text" name="mother-education" id="mother-education"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Mother Profession :</label>
                        <input class="form-control" type="text" name="mother-profession" id="mother-profession"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Mother Email :</label>
                        <input class="form-control" type="email" name="mother-email" id="mother-email"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Mother Mobile :</label>
                        <input class="form-control" type="phone" name="mother-mobile" id="mother-mobile"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Mother's Father Name :</label>
                        <input class="form-control" type="text" name="mothers-father-name" id="mothers-father-name"/>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="country">Mother's Father State :</label>
                        <select class="form-control" id="mothers-father-state" onchange="getdistricts(this.value)" name="mothers-father-state">
                           <option value="">Select State</option>
                           <?php foreach($states as $value) { ?>
                           <option value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="country">Mother's Father District :</label>
                        <select class="form-control" id="mothers-father-district" name="mothers-father-district">
                           <option value="">Select State</option>
                        </select>
                     </div>
                     <div class="form-group col-md-6 col-xs-12">
                        <label for="name">Mother Father Native Place :</label>
                        <input class="form-control" type="text" name="mothers-father-native-place" id="mothers-father-native-place"/>
                     </div>
                  </div>
                  
                     <div class="col-xs-12 col-md-12 text-center">
                        <input  type="submit" value="Submit Parents Details" class="submit btn btn-primary m-0" name="submit" id="submit">
                    
                  </div>
               </form>
            </div>
        
   </div>
</section>
<script type="text/javascript">
    function validation()
    {
       var fathername = document.getElementById('father-name').value;
       var fatherprofession = document.getElementById('father-profession').value;
       var fathereducation = document.getElementById('father-education').value;
       var mothername = document.getElementById('mother-name').value;
       
           
           if(fathername == "")
           {
               document.getElementById('father-names').innerHTML = " *please enter fathername";
                document.getElementById('father-name').focus();  
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
            if(!isNaN(fathername))
           {
               document.getElementById('father-names').innerHTML = " * please enter only characters";
               document.getElementById('father-name').focus();
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
            if(fathername.length < 3)
           {
               document.getElementById('father-names').innerHTML = " name should be grater than 2 characters";
               document.getElementById('father-name').focus();
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
           if(fathereducation == "")
           {
               document.getElementById('father-educations').innerHTML = " *please enter fathereducation";
               document.getElementById('father-education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
            if(!isNaN(fathereducation))
           {
               document.getElementById('father-educations').innerHTML = " * please enter only characters";
                document.getElementById('father-education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
            if(fathereducation.length < 3)
           {
               document.getElementById('father-educations').innerHTML = " profession should be grater than 2 characters";
                document.getElementById('father-education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
           if(fatherprofession == "")
           {
               document.getElementById('father-professions').innerHTML = " *please enter fatherprofession";
               document.getElementById('father-profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }
            if(!isNaN(fatherprofession))
           {
               document.getElementById('father-professions').innerHTML = " * please enter only characters";
               document.getElementById('father-profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }
            if(fatherprofession.length < 3)
           {
               document.getElementById('father-professions').innerHTML = " profession should be grater than 2 characters";
               document.getElementById('father-profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }
           
           
           
           if(mothername == "")
           {
               document.getElementById('mother-names').innerHTML = " *please enter fatherprofession";
               document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
            if(!isNaN(mothername))
           {
               document.getElementById('mother-names').innerHTML = " * please enter only characters";
                document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
            if(mothername.length < 3)
           {
               document.getElementById('mother-names').innerHTML = " profession should be grater than 2 characters";
                document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
    }
</script>
<script>
    function getdistricts(value){
        $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getdistricts',
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
			   url: '<?php echo site_url();?>register/getdistricts',
			   data: "value="+value,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#fathers-father-district").html(op);
			   }
		   });
        
    }
</script>