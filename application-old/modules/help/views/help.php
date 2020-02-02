<section class="about-us">
    <img src="<?php echo site_url();?>images/terms.jpg" clss="image-responsive">
    <div class="container">
        <div class="row">
            <div class="about-heading text-center">
                <h3>Help</h3>
                <img src="<?php echo site_url();?>images/title-bottom.png" class="title-btm">
            </div>
            <div class="about-content">
            <div class="col-md-12 pb-40">
                <div class="row">
                    <div class="col-md-12">
                      <p><?php echo stripcslashes(str_replace('\n','',$help_info['content']));?></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>