<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<script type="text/javascript">
    
    function validation()
    {
     
        var paid_amount = document.getElementById('paid_amount').value;
            
        if(paid_amount == "")
               {
                   document.getElementById('paid_amounts').innerHTML = "* Please enter Paid amount!";
                   document.getElementById('paid_amount').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('paid_amounts').innerHTML = " ";
               }
      

        
        var comments = document.getElementById('comments').value;
            
        if(comments == "")
               {
                   document.getElementById('commentss').innerHTML = "* Please enter Comments!  ";
                   document.getElementById('comments').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('commentss').innerHTML = " ";
               }

    }

</script>








<div class="row">                    
            <div class="col-md-12">
                <div class="card" style="border-style: none;background-color: white;">

                        <div class="card-header" style="border-style: none;background-color: white">                      
                          <h1 style="text-align: center;font-weight: 700px;font-size: 28px;">Balance Payment details</h1>

                        </div> 
                            
                         

                        <div class="card-body " style="width:80%;margin:auto;padding-top:2px;"> 

                            <hr>

                            <form method="POST" action="<?php echo site_url();?>admin/admin_payment/insert_balance_payment_details/<?php echo $latest_rec[0]['bal_amount'];?>" onsubmit="return validation()">
                               
                                    <div class=" form-group row">


                                        <label class="col-form-label col-md-2 offset-md-1 " >
                                        Manashaadi ID
                                        </label>                                                    

                                        <div class="col-md-3">
                                        <input type="text" readonly="readonly" name="profileid" value="<?php echo $this->session->userdata('profileid');?>"  class="form-control">
                                        </div>                   
                                        
                                        <label class="col-form-label col-md-2 offset-md-1">
                                        Used Contacts
                                        </label>
                                        <div class="col-md-3">
                                        <input type="text"  readonly="readonly" name="used_contacts" value="<?php echo $contacts_rec[0]['used_contacts'];?>" class="form-control">
                                        </div>
                                  

                                    </div>
                                    
                                    <br>
                                    
                                    <div class="form-group row">

                                        <label class="col-form-label col-md-2 offset-md-1">
                                        Balance amount
                                        </label>                                
                            
                                        
                                        
                                        <div class="col-md-3">
                                        <input type="text" readonly="readonly" name="agreed_amount" value="<?php echo $latest_rec[0]['bal_amount'];?>" class="form-control">
                                        </div>
                                        

                                        <label class="col-form-label col-md-2 offset-md-1">
                                        Paid amount
                                        </label>
                                        <div class="col-md-3" style="height: 40px;">
                                        <input type="text"  name="paid_amount" id="paid_amount" class="form-control">
                                        <span id="paid_amounts" class="font-weight-bold" style="color: red;padding:0px; margin:0px;" ></span>
                                        </div>

                                    </div>                  

                                    <br>
                                    
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 offset-md-1">
                                        Allowed Contacts
                                        </label>
                                        <div class="col-md-3">
                                        <input type="text" readonly="readonly" name="allowed_contacts" value="<?php echo $contacts_rec[0]['allowed_contacts'];?>" class="form-control"> 
                                        </div>                                         

                                        <label class="col-form-label col-md-2 offset-md-1">
                                        Expiry Date
                                        </label>
                                        <div class="col-md-3">
                                        <input type="date"  readonly="readonly" name="expiry_date" value="<?php echo $contacts_rec[0]['expiry_date'];?>" class="form-control">
                                        </div>

                                    </div> 
                                    <br>


                                    <div class="form-group row">
                                        
                                        <label class="col-form-label col-md-2 offset-md-1">
                                        Comments
                                        </label>
                                        
                                        <div class="col-md-9">
                            <textarea name="comments" id="comments" class="form-control" placeholder="Note comments here.."></textarea>
                            <span id="commentss" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                        </div>

                                    </div> 

                                    <div class="row col-md-4 offset-md-4" >

                                        <pre>     </pre>

                                        <input type="submit" class="btn submit" value="Submit" name="submit" id="submit">

                                        </input>
                                        <pre>  </pre>

                                        <button  type="Reset" class="btn btn-link" name="reset" id="Reset">Reset</button>
                                    </div> 

                                                                                                     
                            </form> 
                            <hr>
                        </div>
                </div>
            </div>

</div>

