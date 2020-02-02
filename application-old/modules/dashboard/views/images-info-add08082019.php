<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.profile_img > img {
    width: 150px;
}

.change_btn_ms{
    font-size:14px;
    line-height:26px;
    color:#000;
    background:#e6e6e6;
}

.change_btn_ms svg{
    width: 20px;
    padding-top: 6px;
    fill: #a92525;
    margin-left: 10px;
    vertical-align: text-bottom;
}

.bg-white{
        background: #ffffff;
    padding-top: 30px;
    padding-bottom: 30px;
}

.margin-top_20ms{
    margin-top:36px;
}

.btns-ms button{
    width:200px;
}

.btns-ms svg{
    vertical-align: text-top;
    fill: #FFF;
    width: 20px;
    margin-right: 10px;
}

.btns_blue-ms button{
    background:#006a97;
    width:200px;
}

.btns_blue-ms input{
    background:#006a97;
    width: 120px;
    height: 34px;
}

.btns_blue-ms svg{
    vertical-align: text-top;
    fill: #FFF;
    width: 20px;
    margin-right: 10px;
}

.small_txt_ms{
    font-size:11px;
    margin-top:10px;
}

.border-top-ms{
    border-top: solid 1px #efefef;
    margin-top: 20px;
    padding-top: 10px;

}

.title-privacy_ms{
    font-size: 13px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #006a97;
}

.no-margin{
    margin:0px !important;
}

.border-bottom-ms{
    border-bottom: solid 1px #efefef;
    margin-bottom: 20px;
    padding-bottom: 10px;
}

.box-upload_ms{
    border: dotted 1px #ccc;
    text-align: center;
    padding: 42px 0px 42px 0px;
    cursor: pointer;
    height:150px;
}

.box-upload_ms:hover{
    border:solid 1px #ff5a60;
}

.having_troble_ms{
    margin-top: 35px;
    /* height: 100px; */
    text-align: center;
    font-size: 14px;
    font-weight: bold;
}

.footer{
    margin-top:30px;
}


.img-profile-edit img {
    border:solid 3px #e6e6e6;
    padding:10px;
    
}

@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
.person-details {
    margin: 30px 0;
    border: 2px solid #f5f5f5;
    padding: 20px 10px;
    display: flex;
}
</style>
<div id="page-wrapper" class="main container-fluid">
<div id="page-inner" class="col-xs-12 no-padding col-offset-xs-4">
<div class="container">
   <div class="col-md-12" style="display:none;">
      <h1 class="page-header">
         <i class="fa fa-book" aria-hidden="true"></i> Images Details</small>
      </h1>
   </div>
   <div class="col-xs-12 no-padding text-center" style="margin-bottom:30px">
    
    75% of our users feel they need at least 3 photos to send an expression of interest.. <u>Upload More</u>
</div>

<?php if ($this->session->flashdata('msg_succ') != '') { ?>
    <div class="alert alert-block alert-success" style="clear:both">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <p>
    <?php echo $this->session->flashdata('msg_succ') ? $this->session->flashdata('msg_succ') : ''; ?>
        </p>
    </div>
<?php } ?>


<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-block alert-danger" style="clear:both">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <p>
    <?php echo $this->session->flashdata('msg') ? $this->session->flashdata('msg') : ''; ?>
        </p>
    </div>
<?php } ?>


<div class="col-xs-12 bg-white">
    
      <form method="POST" action="<?php echo site_url();?>dashboard/imagesadd" enctype="multipart/form-data" class="register-form" id="register-form">
             <input type="hidden" value="<?php echo $this->session->userdata('user_id');?>" name="user_id"/>
             
        <?php 
        $user_id=$this->session->userdata('user_id');
        $i=0;foreach($images_info as $value) { if($i==0){  ?>     
             
    <div class="col-xs-2">
        <div class="col-xs-12 no-padding img-profile-edit">
            <img style="width:154px;height:150px;" src="<?php echo site_url();?>images/profilepics/<?php echo $user_id."/".$value['photoname'];?>">
        </div>
        
         
        
        <div class="col-xs-12 no-padding change_btn_ms">
            <a href="<?php echo site_url();?>dashboard/imagesedit/<?php echo $value['photos_id'];?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3.2"/><path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
            <span>Change Photo</span>
            </a>
       </div>
    
    <?php }  $i++; }  ?>
        
        
    </div>
    <div class="col-xs-10">
        <div class="col-xs-12">
            Upload photos from
        </div>
        <div class="col-xs-12 margin-top_20ms"></div>
        
        <div class="col-xs-12">
            
            <!--<div class="col-xs-3 no-padding btns-ms">
                <button class="submit bsbb darkbg1 white bdr"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 3H3c-1.11 0-2 .89-2 2v12c0 1.1.89 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.11-.9-2-2-2zm0 14H3V5h18v12z"/><path fill="none" d="M0 0h24v24H0z"/></svg> Browse Photo</button>
            </div>-->
            
            
            <div class="col-xs-3 no-padding btns-ms">
                 <input type="file" name="image" class="form-control"/>
            </div>
            <div class="col-xs-3 no-padding btns_blue-ms">
            <input class="submit bsbb darkbg1 white bdr" type="submit" value="SUBMIT" name="submit" id="submit"></input>                
            </div> 
            
        </div>
        
        <div class="col-xs-12 small_txt_ms">
            Strong Photo Privacy options | No downloads allowed | Photos are Watermarked ( Jpeg, Jpg, PNG | Upto 10MB | 20 Photos only )

        </div>
        
    </div>
    
    <div class="col-xs-10 pull-right border-top-ms border-bottom-ms" style="display:none;">
        <div class="col-xs-12 title-privacy_ms">
            Photo Privacy
        </div>
        <div class="col-xs-12 no-padding">
            <div class="col-xs-3 ">
                Photo Visible to 
            </div>
            <div class="col-xs-9">
<div class="form-group">
  <select class="form-control" id="sel1">
    <option>Visible to All ( Recommended )</option>
    <option>Visible to Me</option>
    <option>Visible</option>
  </select>
</div>
            </div>
            
        </div>
        
        <div class="col-xs-12 small_txt_ms">
            Your profile pic has been set successfully
        </div>
        <div class="col-xs-6 small_txt_ms no-margin">
            75% of our users feel they need at least 3 photos to send an expression of interest
        </div>
        <div class="col-xs-6">
            <!--<div class="col-xs-6"><button class="submit bsbb darkbg1 white bdr">Upload</button></div>-->
            <div class="col-xs-6"><input type="submit" value="Upload" name="submit" id="submit" class="submit bsbb darkbg1 white bdr"></div>
            <div class="col-xs-6 small_txt_ms no-margin" style="line-height:36px"><u>Skip & Continue</u></div>
        </div>


        
    </div>
    
    <div class="col-xs-12" style="border-top: solid 1px #ccc; margin-top: 20px; padding-top: 20px;">
        <div class="col-xs-2 box-upload_ms">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
            
            
            
        </div>
        
        
       <!-- <div class="col-xs-2 photo1_upload_ms">
            <img src="http://webhostingindia.xyz/manashaadi/images/profilepics/1484925124girl_reading_books3.jpg" style="width:100%">
        </div>-->
        
        <?php $i=0;foreach($images_info as $value) { $i++;?>
        <div class="col-xs-2 photo1_upload_ms  img-profile-edit">
        <img style="width:154px;height:150px;" src="<?php echo site_url();?>images/profilepics/<?php echo $user_id."/".$value['photoname'];?>">
        </div>
        <?php } ?>
        
        <div class="col-xs-2 photo2_upload_ms">
           
        </div>
        <div class="col-xs-2 photo3_upload_ms">
           
        </div>
        
        
        
        
        
        
    </div>
    
    <div class="col-xs-12 having_troble_ms text-center">
        Having trouble uploading?
    </div>
    <div class="col-xs-12 text-center small_txt_ms no-margin">
       You can email your photos with your profile id to <a href="mailto:photos@manashaadi.com?subject = Feedback&body = Message">photos@manashaadi.com</a>
    </div>
    </form>
    
</div>

</div>




<div class="col-md-12" style="border:solid 1px #000; display:none">
   <div class="col-xs-12">
      <div class="log-form">
         <h4></h4>
         <form method="POST" action="<?php echo site_url();?>dashboard/imagesadd" enctype="multipart/form-data" class="register-form" id="register-form">
             <input type="hidden" value="<?php echo $this->session->userdata('user_id');?>" name="user_id"/>
            <div class="form-row">
               <div class="form-group">
                  <label id="label_starId" for="starId">Upload Image</label>
                  <input type="file" name="image" class="form-control"/>
               </div>
            </div>
            <div class="submit-form text-right">
              <input type="submit" value="SUBMIT" name="submit" id="submit" class="btn btn-primary btn-xs">
            </div>
         </form>
      </div>
   </div>
</div>