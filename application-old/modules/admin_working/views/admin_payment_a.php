<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>


<script type="text/javascript">
    
    function validation()
    {
       var profileid = document.getElementById('profileid').value;
            
       if(profileid == "")
               {
                   document.getElementById('profileids').innerHTML = "* Please enter Manashaadi ID  ";
                   document.getElementById('profileid').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('profileids').innerHTML = " ";
               }

    }

</script>


        <div class="row">                    
            <div class="col-md-12">
                <div class="card" style="border-style: none;background-color: white;">

                        <div class="card-header" style="border-style: none;background-color: white">                      
                            <!-- <button class="submit" style="width:300px; margin-left: 540px;">Payment Information</button> -->
                            <h1 style="text-align: center;font-weight: 700px;font-size: 28px;">Payment Information</h1>
                        </div> 
                            
                         

                        <div class="card-body " style="width:80%;margin:auto;padding-top:2px;"> 

                            <hr>

                            <form method="POST" action="<?php echo site_url();?>admin/admin_payment/get_payment_status" onsubmit="return validation()">
                                
                               <div class=" form-group row">
                                    
                                    <div class="col-form-label col-md-2 offset-md-2" style="font-size: 18px;font-weight: 900px">
                                    <label style="padding-left: 20px" >
                                        Manashaadi ID :
                                    </label>
                                    </div>                      
                                   

                                    <div class="form-group" style="width: 250px;">                
                                    <input type="text" class="form-control" name="profileid" placeholder="Enter Profile ID" id="profileid" value="<?php echo set_value('profileid');?>">
                                    <span id="profileids" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                    </div>
                                    
                                    <div class="form-group" style="padding-left: 40px;">
                                    <input type="submit" class="submit" value="Submit" name="submit" id="submit">
                                    </div>

                                    <div class="form-group" style="padding-left: 10px;">
                                    <button  type="Reset" class="btn btn-link" id="Reset">Reset</button>
                                    </div>                   

                                </div> 
                                                                                 
                            </form> 

                            <hr> 

                             <?php if ($msg): ?>
                                    
                                <div class="form-group" style="float: left;display:flex;align-items: center;justify-content: center;background-color:white;width: 50%;color:red; padding-left: 100px;font-weight: 900;" >              
          
                               
                                <?php echo $msg; ?>
                                
                                </div> 

                                <div class="form-group" style="float: right;display:flex;align-items: center;justify-content: center;background-color:white;width: 50%;color:green; padding-left: 0px;font-weight: 900;">

                                 
                                <a href="<?php echo site_url();?>admin/Admin_payment/initial_details_form">
                                <?php echo 'Click here for Entering Payment details!';  ?></a>
                               
                                       
                                </div>
                                
                                <?php endif ?>



                                 <?php if ($ins): ?>
                                    
                                <div class="form-group" style="float: left;display:flex;align-items: center;justify-content: center;background-color:white;width: 100%;color:green; padding-left: 20px;font-weight: 700;" >              
          
                               
                                <?php echo $ins; ?>
                                
                                </div> 
                             
                                
                                <?php endif ?>

                        </div>
                </div>
            </div>
        </div>

      









































           

             
