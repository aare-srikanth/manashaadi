<div class="row">
    <div class="col-md-12">
        <div class="card" style="border-style: none;background-color: white">
            <div class="card-header" style="border-style: none;background-color: white">
                <button href="#display_form" class="btn" data-toggle="collapse"> Profile Validation <i class="down"></i> </button>
            </div>   
            <div class="card-body   offset-md-1" id="display_form" > 
            <form class="form-horizontal" method="POST" action="<?php echo site_url();?>admin/Admin_pv/pv_result">
                <div class="row"> 
                    <div class="col-form-label">
                        <label for="Gender"> <b>Gender : </h5></b>     
                        <label style="padding-left: 10px;" class="radio-inline "><input  type="radio"  name="gender" value="female">     Bride</label>
                        <label style="padding-left: 25px;" class="radio-inline "><input type="radio"  name="gender" value="male">     Groom</label>
                        <label style="padding-left: 25px;" class="radio-inline "><input type="radio" checked="checked"  name="gender" value="" >     Both</label>
                        <label style="padding-left: 40px;" ><b>Payment : </b></label>  
                        <label style="padding-left: 10px;" class="radio-inline "><input  type="radio"  name="Payment" value="female">     Paid</label>
                        <label style="padding-left: 25px;" class="radio-inline "><input type="radio"  name="Payment" value="male">     Free</label>
                        <label style="padding-left: 25px;" class="radio-inline "><input type="radio" checked="checked"  name="Payment" value="" >     Both</label>
                        <label style="padding-left: 88px;" ><b>Profile ID</b></label>                      
                    </div>
                    <div class="form-group" style="padding-left: 30px;width: 250px;">                                      
                        <input type="text" class="form-control" name="profileid" placeholder="Enter Profile ID" id="profileid">
                    </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 form-group" style="padding-right: 100px;">
                    <label style="padding-bottom:14px;">
                        <b>All Phones</b>
                    </label>
                    <input type="text" name="allphones" class="form-control" >
                    
                
                </div>

                <div class="col-md-4" style="padding-right: 100px">
                    <label style="padding-bottom:14px;">
                        <b>All E-Mails</b>
                    </label>
                    <input type="text" name="allemails" class="form-control">

                </div>

                <div class="col-md-4" style="padding-right: 100px">
                    <label style="padding-bottom:14px;">
                        <b>Application Status</b>
                    </label>
                    <select name="status" id="status" class="form-control">
                        <option value="" selected="selected">Select All</option>
                        <option value="1">Active</option>
                        <option value="2">Deleted</option>
                        <option value="3">Settled</option>
                        <option value="4">Inactive</option> 
                    </select>                     
                </div>
            </div>


            <div class="row">
                <div class="col-md-4" style="padding-right: 100px">
                    <label style="padding-bottom:14px;">
                        <b>Surname</b>
                    </label>
                    <input type="text" name="surname" class="form-control">
                    

                </div>

                <div class="col-md-4" style="padding-right: 100px">
                    <label style="padding-bottom:14px;">
                        <b>Name</b>
                    </label>
                    <input type="text" name="name" class="form-control">


                </div>

                <div class="col-md-4" style="padding-right: 100px">
                    <label style="padding-bottom:14px;">
                        <b>Caste</b>
                        </label>
                    <select class="form-control" name="caste" id="caste">
                    <option value="">Select Caste</option>
                    <?php foreach($castes as $value) { ?>
                    <option value="<?php echo $value['caste'];?>"><?php echo stripcslashes($value['caste']);?></option><?php } ?>                      
                    </select>
                </div>
            </div>

            <br>
            <hr>


            <div class="row col-md-4 offset-md-3 "  >

                <pre>           </pre>
                    
                <input type="submit" class="submit" value="Search" name="submit" id="submit">
                    
                
                <pre> </pre>

                <button  type="Reset" class="btn btn-link" id="Reset">Reset</button>
            </div>
            
            </form>           

            </div>

        </div>
    </div> 
</div>   
