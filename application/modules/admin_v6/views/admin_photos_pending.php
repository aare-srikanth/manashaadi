<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>


        <div class="row">                    
            <div class="col-md-12">
                <div class="card" style="border-style: none;background-color: white;">

                        <div class="card-header" style="width:100%;border-style: none;background-color: white">                      
                            <h1 style="text-align: center;font-weight: 700px;font-size: 28px;">Photos Information</h1>
                        </div> 
                            
                         

                        <div class="card-body " style="width:100%;margin:auto;padding-top:2px;"> 

                        <hr>


                            <div class="limiter-photos">  
                                <div class="container-table100">
                                    <div class="wrap-table100-photos">
                                        <div class="table100">                
                                                               
                                                <table>
                                                    
                                                        <thead >
                                                            <tr>
                                                                <th class="cell15">Manshaadi ID</th>                               
                                                                <th class="cell25">Customer Name</th>
                                                                <th class="cell20">Photo Name</th>
                                                                <th class="cell20">Download</th>
                                                                <th class="cell20">Upload</th>
                                                            </tr>
                                                        </thead>
                                                    

                                                    
                                                        <tbody style="text-align: left;">
                                                        <?php 

                                                            foreach($id_pendings as $value){ ?>
                                                            <tr>
                                                            <td class="cell10">
                                                            <?php echo stripcslashes($value['ms_id']);?></td>

                                                            <td class="cell30">
                                                            <?php echo stripcslashes($value['first_name']);
                                                            echo "  ";

                                                            echo stripcslashes($value['last_name']);?> 
                                                            </td>

                                                            <td class="cell20">
                                                            <?php echo stripcslashes($value['photoname']);?></td>

                                                            <td class="cell20"><a href="<?php echo site_url();?>admin/Admin_photos/photo_download/<?php echo stripcslashes($value['ms_id']);?>/<?php echo stripcslashes($value['photoname']);?>"><button>Download</button></a></td> 
                                                            <td class="cell20"><a href="<?php echo site_url();?>admin/Admin_photos/photo_upload_page/<?php echo stripcslashes($value['ms_id']);?>/<?php echo stripcslashes($value['photoname']);?>"><button>Upload</button></a></td>                       
                                                            </tr> 
                                                        <?php } ?>

                                                        </tbody>
                                                        
                                                    
                                                     
                                                </table>
                                                
                                        </div>
                                        <br>
                                        <hr> 

                                    <?php if ($err): ?>

                                    <div class="form-group" style="float: left;display:flex;align-items: center;justify-content: center;background-color:white;width: 100%;color:red; padding-left: 20px;font-weight: 900;" >      

                                    <?php echo $err; ?>

                                    </div> 


                                    <?php endif ?>


                                    <?php if ($suc): ?>

                                    <div class="form-group" style="float: left;display:flex;align-items: center;justify-content: center;background-color:white;width: 100%;color:green; padding-left: 20px;font-weight: 900;" >       

                                    <?php echo $suc; ?>

                                    </div> 


                                    <?php endif ?>



                                    </div>
                                </div>
                            </div>




                         
                        </div>
                </div>
            </div>
        </div>

      











































           

             
