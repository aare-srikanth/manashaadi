<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<section class="about-us feedback_page"  style="margin-top: 120px !important;">
    <div class="container"> 
            <div class="about-heading text-center">
                <h3>Success Stories</h3>
                <img src="<?php echo site_url();?>images/title-bottom.png" class="title-btm">
            </div>
            <div class="about-content">
            <div class="col-md-12 pb-40">
                <div class="row">
                    <div class="col-md-12" >
                      <h3 class="text-center" style="padding:20px !important;">Success Stories Of <span class="orange">MANASHAADI</span></h3>  
                      <div class="btm-line"></div>
                      <?php if(isset($successstories) && count($successstories) > 0) { 
                      foreach($successstories as $value) { ?>
                      <div class="feedback col-md-12">
                      <div class="col-md-2 well">
                        <img src="<?php echo site_url();?>images/successstories/<?php echo $value['image'];?>" style=" width:150px;
    height:150px;" class="feed-img">  
                      </div>
                       <div class="col-md-8" style="padding:10px;">
                      <h3 style="font-size:18px" ><strong><?php echo ucwords($value['title'])?></strong></h3>
                      <p><?php echo stripcslashes(str_replace('\n','',$value['content']));?></p>
                      </div>
                      </div>
                     <?php } } else{
                        echo "No Records Found Yet!";
                     }?>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>