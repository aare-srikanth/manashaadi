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
                                    <input type="text" class="form-control" name="profileid" value="<?php echo set_value('profileid')?>" id="profileid">
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


                                <div class="form-group" style="float: right;display:flex;align-items: center;justify-content: center;width: 70%;color:green; padding-left: 200px;font-weight: 900;">

                                 
                                <!--  -->
                                
                                <?php   

                                        foreach($payment_rec as $value)
                                        {

                                        $total_paid_amount=$total_paid_amount+$value['paid_amount'];
                                        $agreed_amount=$agreed_amount+$value['agreed_amount'];
                                            
                                        } 
                                        
                                        if ($agreed_amount<=$total_paid_amount)
                                        {
                                        ?> 
                                        <a href="<?php echo site_url();?>admin/Admin_payment/renewal_details_form">    
                                        <?php
                                        echo 'Click here for Renewal payment!'; 
                                        ?></a><?php
                                        }
                                        else
                                        {
                                        ?> 
                                        <a href="<?php echo site_url();?>admin/Admin_payment/balance_details_form">    
                                        <?php
                                        echo 'Click here for Balance payment!';
                                        ?></a><?php
                                        }

                                ?>                                                           
                                       
                                </div>                            
                        </div>
                </div>
            </div>
        </div>

<div class="limiter">     
    <div class="container-table100">     
        <div class="table100">


        <table>
                <div class="table100-head">
                    <thead style="text-align: center;">
                        <tr>                        
                            <th class="cell11">Manshaadi ID</th>
                            <th class="cell10">Payment type</th>
                            <th class="cell8">Agreed amount</th>
                            <th class="cell8">Paid amount</th>
                            <th class="cell8">Balance</th>
                            <th class="cell5">Allowed contacts</th>
                            <th class="cell5">Used contacts</th>
                            <th class="cell10">Paid date</th>
                            <th class="cell10">Expiry date</th> 
                            <th class="cell7">Entered by</th>
                            <th class="cell18">Comments</th>

                        </tr>
                    </thead>
                </div>

                <div class="table100-body" >
                    <tbody style="text-align: center;">
                        <?php 
                            foreach($payment_rec as $value){ ?>
                            <tr>
                                <td class="cell11">
                            <a target="_blank" href="<?php echo site_url();?>admin/admin_search/profile/<?php echo $this->session->userdata('profileid');?>">
                                <?php echo stripcslashes($this->session->userdata('profileid'));?></a></td>
                                <td class="cell10">
                                  <?php echo stripcslashes($value['payment_type']);?></td>
                                <td class="cell8">
                                <?php echo stripcslashes($value['agreed_amount']);?></td>
                                <td class="cell8">
                                <?php echo stripcslashes($value['paid_amount']);?></td>
                                <td class="cell8">
                                <?php echo stripcslashes($value['bal_amount']);?></td>
                                <td class="cell5">
                                <?php
                                if ($value['payment_type']== 'Renewal' OR $value['payment_type']== 'Registration'){ 
                                    echo stripcslashes($value['allowed_contacts']);}?></td>
                                <td class="cell5">
                                <?php 
                                if ($value['payment_type']== 'Renewal' OR $value['payment_type']== 'Registration' ) {
                                   echo stripcslashes($value['used_contacts']);}?></td>
                                <td class="cell10">
                                <?php echo stripcslashes(date('d-m-Y',strtotime($value['paid_date'])));?></td> 
                                <td class="cell10">
                                <?php 
                                if ($value['payment_type']== 'Renewal' OR $value['payment_type']== 'Registration'){
                                echo stripcslashes(date('d-m-Y',strtotime($value['expiry_date'])));}?></td>
                                <td class="cell7">
                                <?php echo stripcslashes($value['entered_by']);?></td>
                                <td class="cell18">
                                <?php echo stripcslashes($value['comments']);?></td>
                            </tr>
                                        <?php  $i=1;} ?>

                    </tbody>    
                </div>
                         
        </table>
        
        </div>
    </div>
</div>


      









































           

             
