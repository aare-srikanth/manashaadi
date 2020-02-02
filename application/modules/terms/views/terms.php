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
<section class="about-us terms_page" style="margin-top: 120px !important; " >
    <div class="container">
        <div class="row">
            <div class="about-heading text-center">
                <h3>Terms & Conditions</h3>
                <img src="<?php echo site_url();?>images/title-bottom.png" class="title-btm">
            </div>
            <div class="about-content">
            <div class="col-md-12 pb-40">
                <div class="row">
                    <div class="col-md-12">
                      <p><?php echo stripcslashes(str_replace('\n','',$terms_info['content']));?></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>