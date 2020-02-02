
<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<script type="text/javascript">
    
    function validation_outside()
    {
       var ms_id = document.getElementById('ms_id').value;
            
       if(ms_id == "")
               {
                   document.getElementById('ms_ids').innerHTML = "* Please enter Manashaadi ID!";
                   document.getElementById('ms_id').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('ms_ids').innerHTML = " ";
               }

        var comments_1 = document.getElementById('comments_1').value;
            
        if(comments_1 == "")
               {
                   document.getElementById('commentss_1').innerHTML = "* Please enter Comments!  ";
                   document.getElementById('comments_1').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('commentss_1').innerHTML = " ";
               }


        // var marriage_date = document.getElementById('marriage_date').value;
            
        // if(marriage_date == "")
        //        {
        //            document.getElementById('marriage_dates').innerHTML = "* Please enter Date!";
        //            document.getElementById('marriage_date').focus();
        //            return false;    
        //        }
        // else   
        //        {
        //             document.getElementById('marriage_dates').innerHTML = " ";
        //        }


        // var surname = document.getElementById('surname').value;
            
        // if(surname == "")
        //        {
        //            document.getElementById('surnames').innerHTML = "Please enter Surname!";
        //            document.getElementById('surname').focus();
        //            return false;    
        //        }
        // else   
        //        {
        //             document.getElementById('surnames').innerHTML = " ";
        //        }


        // var name = document.getElementById('name').value;
            
        // if(name == "")
        //        {
        //            document.getElementById('names').innerHTML = "* Please enter Name!";
        //            document.getElementById('name').focus();
        //            return false;    
        //        }
        // else   
        //        {
        //             document.getElementById('names').innerHTML = " ";
        //        }

        }

        function validation_inside()
        {


        var bms_id = document.getElementById('bms_id').value;
            
        if(bms_id == "")
               {
                   document.getElementById('bms_ids').innerHTML = "* Please enter Bride ID!";
                   document.getElementById('bms_id').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('bms_ids').innerHTML = " ";
               }


        var gms_id = document.getElementById('gms_id').value;
            
        if(gms_id == "")
               {
                   document.getElementById('gms_ids').innerHTML = "* Please enter Groom ID!";
                   document.getElementById('gms_id').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('gms_ids').innerHTML = " ";
               }


        // var e_date = document.getElementById('e_date').value;
            
        // if(e_date == "")
        //        {
        //            document.getElementById('e_dates').innerHTML = "* Please enter Date!";
        //            document.getElementById('e_date').focus();
        //            return false;    
        //        }
        // else   
        //        {
        //             document.getElementById('e_dates').innerHTML = " ";
        //        }

        // var marriage_date_2 = document.getElementById('marriage_date_2').value;
            
        // if(marriage_date_2 == "")
        //        {
        //            document.getElementById('marriage_dates_2').innerHTML = "* Please enter Date!";
        //            document.getElementById('marriage_date_2').focus();
        //            return false;    
        //        }
        // else   
        //        {
        //             document.getElementById('marriage_dates_2').innerHTML = " ";
        //        }


        var comments_2 = document.getElementById('comments_2').value;
            
        if(comments_2 == "")
               {
                   document.getElementById('commentss_2').innerHTML = "* Please enter Comments!  ";
                   document.getElementById('comments_2').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('commentss_2').innerHTML = " ";
               }

    }

</script>




<div class="row">                    
            <div class="col-md-12">
                <div class="card" style="border-style: none;background-color: white;">

                        <div class="card-header" style="border-style: none;background-color: white">                      
                         
                          <h1 style="text-align: center;font-weight: 700px;font-size: 28px;">Delete / Settle Profiles</h1>

                        </div> 

                        <div class="card-body" style="width:80%;margin:auto;padding-top:2px;"> 

                                <hr>

                                <form >
                                        <div class=" form-group row">                                                    
                                                            <label class="col-form-label col-md-2 offset-md-4"><input checked="checked" type="radio" name="channel" value="thru_outside" id="thru_outside" onclick="showform()">
                                                            Outside
                                                            </label>

                                                            <label class="col-form-label col-md-4 "><input  type="radio" name="channel" value="thru_manashaadi" id="thru_manashaadi" onclick="showform()">
                                                            Through Manashaadi
                                                            </label>
                                        </div>
                                       
                                </form>
                                <hr>
                                <div id="outside">

                                        <form method="POST" action="<?php echo site_url();?>admin/admin_del_profiles/insert_del_rec/outside" onsubmit="return validation_outside()">

                                               

                                                <div class="form-group row">
                                                   
                                                        <label class="col-form-label col-md-2 offset-md-1">
                                                            Delete MS ID
                                                        </label>
                                                        <div class="col-md-3" style="height: 40px;">
                                                        <input type="text" name="ms_id" id="ms_id" class="form-control">
                                                         <span id="ms_ids" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                        </div>
                                                    
                                                        <label class="col-form-label col-md-2">
                                                            Marriage Date
                                                        </label>    
                                                        <div class="col-md-3" style="height: 40px;">
                                                        <input type="date"  name="marriage_date" id="marriage_date" class="form-control">
                                                         <span id="marriage_dates" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                        </div>
                                                    
                                                </div>                  
                                                
                                                <br>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-2 offset-md-1">
                                                        Surname
                                                    </label>
                                                    <div class="col-md-3" style="height: 40px;">
                                                    <input type="text" name="surname" id="surname" class="form-control">
                                                     <span id="surnames" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                    </div>                                         
                                               
                                                    <label class="col-form-label col-md-2">
                                                        Name
                                                    </label>
                                                    <div class="col-md-3" style="height: 40px;">
                                                    <input type="text" name="name" id="name" class="form-control">
                                                     <span id="names" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                    </div>

                                                </div>                    
                                                
                                                 <br>

                                                <div class="form-group row">            

                                                    <label class="col-form-label col-md-2 offset-md-1">
                                                    <h5>Narration</h5>
                                                    </label>

                                                    <div class="col-md-8" style="height: 70px;">
                                                    <textarea name="comments" id="comments_1" class="form-control" placeholder="Note comments here.."></textarea>
                                                    <span id="commentss_1" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                    </div>
                                                </div>
                                               
                                                <!-- <div class="form-group row">
                                                    <label class="col-form-label col-md-2 offset-md-1">
                                                        <h5>Reason for Deletion</h5>
                                                    </label>
                                                    <div class="col-md-3 form-control" style="border:none">
                                                    <label class="radio-inline"><input checked="checked" type="radio" name="reason" value="married" >Married</label>
                                                    <label class="radio-inline "><input type="radio" name="reason" value="marriagefixed" >Marriage Fixed</label>
                                                    <label class="radio-inline "><input type="radio" name="reason" value="other" >Other Reasons</label>
                                                    </div>
                                                    

                                               
                                                    <label class="col-form-label col-md-2">
                                                       <h5>Deleted by Relation</h5>
                                                    </label>
                                                    <div class="col-md-3" > 
                                                    <select class="form-control" >
                                                        <option selected="selected">-Select-</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>                          
                                                    </select>
                                                    </div>
                                                </div>
                                               -->
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
                                            <br>  

                            
                                </div>



                                <div id="manashaadi" style="display: none">


                                        <form method="POST" action="<?php echo site_url();?>admin/admin_del_profiles/insert_del_rec/inside" onsubmit="return validation_inside()">

                                                    


                                                <div class="form-group row">
                                                    
                                                    <label class="col-form-label col-md-2 offset-md-1">
                                                        Bride MS ID
                                                    </label>
                                                    <div class="col-md-3" style="height: 40px;">
                                                    <input type="text" name="bms_id" id="bms_id" class="form-control">
                                                    <span id="bms_ids" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                    </div>
                                                
                                                    <label class="col-form-label col-md-2">
                                                       Groom MS ID
                                                    </label>
                                                    <div class="col-md-3" style="height: 40px;">
                                                    <input type="text"  name="gms_id" id="gms_id" class="form-control">
                                                     <span id="gms_ids" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                    </div>
                                                    
                                                </div>                  
                                                
                                                <br>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-2 offset-md-1">
                                                        Engagement Date
                                                    </label>

                                                    <div class="col-md-3" style="height: 40px;">
                                                    <input type="date" name="e_date" id="e_date" class="form-control">
                                                     <span id="e_dates" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                    </div>                                         
                                               
                                                    <label class="col-form-label col-md-2">
                                                        Marriage Date
                                                    </label>
                                                    <div class="col-md-3" style="height: 40px;">
                                                    <input type="date" name="marriage_date" id="marriage_date_2" class="form-control">
                                                     <span id="marriage_dates_2" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                                    </div>

                                                </div>                    
                                                
                                                <br>
                                               
                                                <div class="form-group row">            

                                                        <label class="col-form-label col-md-2 offset-md-1">
                                                           <h5>Narration</h5>
                                                        </label>
                                                       
                                                        <div class="col-md-8" style="height: 70px;">
                                                                    <textarea name="comments" id="comments_2" class="form-control" placeholder="Note comments here.."></textarea>
                                                                    <span id="commentss_2" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
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
                                            <br>

            
                                </div>
                                
                                        <?php if ($confirm): ?>

                                        <div class="form-group" style="float: left;display:flex;align-items: center;justify-content: center;background-color:white;width: 100%;color:green; padding-left: 20px;font-weight: 700;" >              
                                        <?php echo $confirm; ?>

                                        </div> 

                                        <?php endif ?>



                                        <?php if ($no_id): ?>

                                        <div class="form-group" style="float: left;display:flex;align-items: center;justify-content: center;background-color:white;width: 100%;color:red; padding-left: 20px;font-weight: 700;" >              
                                        <?php echo $no_id; ?>

                                        </div> 

                                        <?php endif ?>



                                        <?php if ($exists): ?>

                                        <div class="form-group" style="float: left;display:flex;align-items: center;justify-content: center;background-color:white;width: 100%;color:red; padding-left: 20px;font-weight: 700;" >              
                                        <?php echo $exists; ?>

                                        </div> 

                                        <?php endif ?>  

                                         <?php if ($mismatched): ?>

                                        <div class="form-group" style="float: left;display:flex;align-items: center;justify-content: center;background-color:white;width: 100%;color:red; padding-left: 20px;font-weight: 700;" >              
                                        <?php echo $mismatched; ?>

                                        </div> 

                                        <?php endif ?> 



                        </div>
                </div>
            </div>
</div>
 