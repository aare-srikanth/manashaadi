<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript" language="javascript"></script>

<script src="<?= base_url() ?>/js/jQuery.MultiFile.js"></script>


        <div class="row">                    
            <div class="col-md-12">
                <div class="card" style="border-style: none;background-color: white;">

                        <div class="card-header" style="width:100%;border-style: none;background-color: white">                      
                            <h1 style="text-align: center;font-weight: 700px;font-size: 28px;">Photos Information</h1>
                        </div> 
                            
                         

                        <div class="card-body " style="width:100%;margin:auto;padding-top:2px;"> 

                        <hr>

                           
                            <div class="limiter-photos" style="padding-left: 300px;">  
                                
                                    <div style="border:1px solid; width: 58%;padding: 10px;">
                                    <u style="padding-left: 20px; font-size: 17px;"><b>Upload Application Photo and Full Photo of </u></b>
                                    <br>
                                    <br>
                                    <b style="padding-left: 20px; font-size: 17px;"> User ID : <font color="green"><?php echo $ms_id; ?> ( <?php echo $photoname; ?> )</font></b>
                                    <br>
                                    <br>
                                    <br>


                                        <form enctype="multipart/form-data" method="post" action="<?php echo site_url();?>admin/Admin_photos/create/<?php echo $ms_id; ?>/<?php echo $photoname; ?>">
        
                                        <div class="form-group" style="padding:17px 17px 17px 17px; ">
                                        <input id="filelist" multiple="multiple" class="form-control multi with-preview" type="file" name="multiplefiles[]" maxlength="2"  />
                                        <p class="text-red"><?= form_error('files'); ?></p>
                                        </div>
                                        <br>
                                        <div class="box-footer" style="padding-left: 20px;">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Upload Photos"></input>
                                        </div>

                                        </form>
                                
                                    </div>
                           
                            </div>
                         
                        </div>
                </div>
            </div>
        </div>

      













































           

             
