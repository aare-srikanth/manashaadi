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
<section class="about-us contact_us" style="margin-top: 60px !important; padding-top: 60px; padding-bottom: 60px;">
  
    <div class="container">
        <div class="row">
            <div class="about-heading text-center">
                <h3>Contact Us</h3>
                <img src="<?php echo site_url();?>images/title-bottom.png" class="title-btm">
            </div>
            
            <div class="contact-content">
            <div class="col-md-12 pb-40">
                <div class="row">
                    <div class="col-md-4">
                     <p><?php echo stripcslashes(str_replace('\n','',$address_info['content']));?></p>
                    </div>
                    <div class="col-md-8">
                        <form id="contact_form" name="contact_form" class="contact-form" action="<?php echo site_url();?>contactus" method="post">
                           
                            <div class="messages">
                                 <?php if($this->session->flashdata('msg_succ') != ''){ ?>
		                <div class="alert alert-block alert-success col-md-12">
		                    <button type="button" class="close" data-dismiss="alert">
		                      <i class="ace-icon fa fa-times"></i>
		                    </button>
		                    <p><b><?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?></b></p>
		                </div>
		            <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="form_name" name="name" class="form-control ulockd-form-fg required" placeholder="Your name" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="form_email" name="email" class="form-control ulockd-form-fg required email" placeholder="Your email" required="required" data-error="Email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
	                            <div class="col-md-4">
	                                <div class="form-group">
	                                    <input id="form_phone" name="mobile" class="form-control ulockd-form-fg required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
                                <div class="col-md-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="message" class="form-control ulockd-form-tb required" rows="12" placeholder="Your message" required="required" data-error="Message is required."></textarea>
		                                <div class="help-block with-errors"></div>
		                            </div>
		                            <!--<div class="form-group ulockd-contact-btn">
		                                <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
		                                <input type="submit" name="submit" value="SUBMIT" class="btn btn-default ulockd-btn-thm2" data-loading-text="Getting Few Sec...">
		                            </div>-->
		                            <div class="submit-form mb-20">
              <input type="submit" value="Submit" class="submit m-0" name="submit" id="submit"></a>
             
          </div>
                                </div> 
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
