<div class="row">
        <div class="col-md-12">
            <div class="card" style="border-style: none;background-color: white">
                <div class="card-header" style="border-style: none;background-color: white">
                 
                    <button href="#display_form" class="btn" data-toggle="collapse"> Profile Validation <i class="down"></i> </button>
                    
                </div>   

                <div class="card-body collapse  offset-md-1" id="display_form" > 

                <!-- <form class="form-horizontal" method="POST" action="<?php echo site_url();?>admin/Admin_pv/pv_result"> -->
                <form class="form-horizontal" method="POST" action="<?php echo site_url();?>admin/validation_result">
                
                    
                 <div class="form-group row"> 

                        <div class="col-form-label">
                        <label for="Gender"> <b>Gender</h5></b>     
                        <label style="padding-left: 30px;" class="radio-inline "><input  type="radio"  name="gender" value="female">     Bride</label>
                        <label style="padding-left: 30px;" class="radio-inline "><input type="radio"  name="gender" value="male">     Groom</label>
                        <label style="padding-left: 30px;" class="radio-inline "><input type="radio" checked="checked"  name="gender" value="" >     Both</label>
                        <label style="padding-left: 88px;" ><b>Profile ID</b></label> 
                         
                        </div>
                        
                        <div class="form-group" style="padding-left: 30px;width: 250px;"> 
                                     
                        <input type="text" class="form-control" name="profileid" placeholder="Enter Profile ID" id="profileid">
                        </div>

                </div>

                
                <hr>

                <div class="row">
                    <div class="col-md-4 form-group" style="padding-right: 100px">
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
        
        <div style="width: 87%;float: left;">
        <h5 style="text-align: center;font-size:22px;text-decoration: underline;" ><?php echo $tot_rec;?> profiles found</h5>
        </div>
        <div >
        <a href="<?php echo site_url();?>admin/Admin_pv"><button class="submit"> Back to Search</button></a>   
        </div>
                
    <div class="limiter">     

        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    
                <?php echo $this->pagination->create_links();?>
                    
                    <table>
                        <div class="table100-head">
                            <thead style="text-align: left;">
                                <tr>
                                    <th class="cell5">S No.</th>
                                    <th colspan='2' class="cell8">Action</th>
                                    <th class="cell12">Manshaadi ID</th>
                                    <th class="cell10">Surname</th>
                                    <th class="cell20">Name</th>
                                    <th class="cell8">Caste</th>
                                    <th class="cell5">Height</th>
                                    <th class="cell5">Age</th>
                                    <th class="cell5">Gender</th>
                                    <th class="cell5">Education</th>
                                    <th class="cell17">Profession</th>
                                </tr>
                            </thead>
                        </div>

                        <div class="table100-body" >
                            <tbody style="text-align: left;">
                             <?php $slno=$this->uri->segment(4,0);
                                 foreach($sub_rec as $value){ ?>
                                <tr>
                                <td style="text-align: center;" class="cell5"><?php echo ++$slno ?></td>       
                                <td class="cell4"><button>Edit</button></td> 
                                <td class="cell4">
                <a target="_blank" href="<?php echo site_url();?>admin/admin_edit_profiles"><button>Del</button></a></td>       
                                <td class="cell12">
                <a target="_blank" href="<?php echo site_url();?>admin/admin_search/viewprofile/<?php echo $value['id'];?>"><?php echo stripcslashes($value['profile_id']);?></a></td>
                                <td class="cell10">
                                <?php echo stripcslashes($value['last_name']);?></td>
                                <td class="cell20">
                                <?php echo stripcslashes($value['first_name']);?></td>
                                <td class="cell8">
                                <?php echo stripcslashes($value['caste']);?></td>
                                <td class="cell5">
                                <?php echo stripcslashes($value['height']);?></td>
                                <td class="cell5">
                                <?php echo stripcslashes($value['age']);?></td>
                                <td class="cell5">
                                <?php echo stripcslashes($value['gender']);?></td>
                                <td class="cell5">
                                <?php echo stripcslashes($value['education_degree']);?></td>
                                <td class="cell17">
                                <?php echo stripcslashes($value['occupation']);?></td>
                                
                                </tr>
                            <?php } ?>

                            </tbody>
                            
                        </div>
                         
                    </table>
                    
                </div>