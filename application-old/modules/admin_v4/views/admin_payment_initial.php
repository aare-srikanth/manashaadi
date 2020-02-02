<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<script type="text/javascript">
    
    function validation()
    {
       var agreed_amount = document.getElementById('agreed_amount').value;
            
       if(agreed_amount == "")
               {
                   document.getElementById('agreed_amounts').innerHTML = "* Please enter Agreed amount!";
                   document.getElementById('agreed_amount').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('agreed_amounts').innerHTML = " ";
               }


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


        var allowed_contacts = document.getElementById('allowed_contacts').value;
            
        if(allowed_contacts == "")
               {
                   document.getElementById('allowed_contactss').innerHTML = "Please enter Allowed contacts!";
                   document.getElementById('allowed_contacts').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('allowed_contactss').innerHTML = " ";
               }


        var expiry_date = document.getElementById('expiry_date').value;
            
        if(expiry_date == "")
               {
                   document.getElementById('expiry_dates').innerHTML = "* Please enter Expiry date!";
                   document.getElementById('expiry_date').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('expiry_dates').innerHTML = " ";
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
                          <h1 style="text-align: center;font-weight: 700px;font-size: 28px;">Payment details</h1>
                        </div> 
                            
                         

                        <div class="card-body " style="width:80%;margin:auto;padding-top:2px;"> 

                            <hr>

                            <form method="POST" action="<?php echo site_url();?>admin/admin_payment/insert_initial_payment_details" onsubmit="return validation()">
                               
                                    <div class=" form-group row">


                                    <label class="col-form-label col-md-2 offset-md-1 " >
                                    Manashaadi ID
                                    </label>                                                    

                                    <div class="col-md-3">
                                    <input type="text" readonly="readonly" name="profileid" value="<?php echo $id_rec;?>"  class="form-control">
                                    </div>                 


                                    </div>
                                    <br>
                                
                                    <div class="form-group row" >

                                    <label class="col-form-label col-md-2 offset-md-1">
                                    Agreed amount
                                    </label>                                
                        
                                    
                                    
                                    <div class="col-md-3" style="height: 40px;">
                                    <input type="text" name="agreed_amount" id="agreed_amount" class="form-control">
                                    <span id="agreed_amounts" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                    </div>
                                    

                                    <label class="col-form-label col-md-2 offset-md-1">
                                    Paid amount
                                    </label>
                                    <div class="col-md-3" style="height: 40px;">
                                    <input type="text"  name="paid_amount" id="paid_amount" class="form-control">
                                    <span id="paid_amounts" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                    </div>

                                    </div>                  

                                    <br>

                                    <div class="form-group row">
                                      <label class="col-form-label col-md-2 offset-md-1">
                                      Allowed Contacts
                                      </label>
                                      <div class="col-md-3" style="height: 40px;">
                                      <input type="text" name="allowed_contacts" id="allowed_contacts" class="form-control">
                                      <span id="allowed_contactss" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span> 
                                      </div>                                         

                                      <label class="col-form-label col-md-2 offset-md-1">
                                      Expiry Date
                                      </label>
                                      <div class="col-md-3" style="height: 40px;">
                                      <select name="expiry_date" id="expiry_date" class="form-control">
                                        <option value="" selected="selected">Select Period</option>
                                        <option value="3">3 Months</option>
                                        <option value="6">6 Months</option>
                                        <option value="9">9 Months</option>
                                        <option value="12">12 Months</option> 
                                      </select>
                                      <span id="expiry_dates" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                      </div>

                                    </div> 
                                    <br>

                                    <div class="form-group row">
                                        
                                    <label class="col-form-label col-md-2 offset-md-1">
                                    Comments
                                    </label>
                                    
                                    <div class="col-md-9" >
                            <textarea name="comments" class="form-control" id="comments" placeholder="Note comments here.."></textarea>
                            <span id="commentss" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                    </div>

                                    </div> 

                                    <br>

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

