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
    <div class="main container" style="margin-top:100px">
        <div class="col-xs-12">
            <div class="about-heading text-center">
                <h3>About Us</h3>
                <img src="images/title-bottom.png" class="title-btm">
            </div>
            <div class="about-content">
            <div class="col-md-12 pb-40" style="padding:40px;">
               
                  
                     
                      <p><?php echo stripcslashes(str_replace('\n','',$about_info['content']));?></p>
                  
                </div>
            </div>
        </div>
    </div>
