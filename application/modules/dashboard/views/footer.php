
 </div>
            <!-- /. PAGE INNER  -->
            
            </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<footer style="background-color:#eee">
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
			<div class="col-md-4 footer-grids">
						<h3>About</h3>
						<p>We follow the Indian traditional Match Making System with the help of latest technology to help the individuals to find their soul mates</p>
					</div>
					<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Quick links</h3>
						<ul>
						<li><a href="<?php echo site_url();?>aboutus"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:16px;"></i>About Us</a></li>
							<li><a href="<?php echo site_url();?>search"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Search</a></li>
							<li><a href="<?php echo site_url();?>contactus"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Contact Us</a></li>
							<li><a href="<?php echo site_url();?>faqs"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>FAQ</a></li>
						
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="<?php echo site_url();?>terms"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Terms of use</a></li>
							<li><a href="<?php echo site_url();?>privacypolicy"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Privacy Policy</a></li>
							<li><a href="<?php echo site_url();?>feedback"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Success Stories</a></li>  
							<li><a href="<?php echo site_url();?>contactus"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Help</a></li>  
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li><i class="fa fa-map-marker"></i> Hyderabad.</li>
						<li><i class="fa fa-mobile"></i> 91-8500077377 </li>
						<li><i class="fa fa-envelope-o"></i> <a href=""> info@manashaadi.com</a></li>
						</ul> 
						<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>	
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						</section>
					</div>
				</div>
					
					<div class="clearfix"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<div class="copy-right"> 
		<div class="container">
			<p>© 2019 ManaShaadi.com All rights reserved</p>
		</div>
	</div> 
</footer>


           
        
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo site_url();?>dashboard-assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo site_url();?>dashboard-assets/js/bootstrap.min.js"></script>
    
    
     <script type="text/javascript">
        $(document).ready(function() {
            
             $(".user-info").on('click',function(){
               $(".user-details").toggle();
            });
          
            $(".profile-view-close .close-btn").on('click',function(){
               window.close();
            });
            
            
            
             $(".view_update").on('click',function(){
                 
                 var to_user_id=$(this).attr("data-id");
                   
                    $(this).next().find('i').removeClass("view_active");
                    $(this).next().next().find('i').removeClass("view_active");
                 
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/view_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                           console.log(data);
                        if(data==0){
                              
                              $(this).find("i").addClass("view_active");
                              alert("You have viewed this profile");
                          }
                          
                           $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          
                        }
                        });
                 
             });
             
             
              $(".details").on('click',function(){
                 
                 var to_user_id=$(this).attr("data-id");
                   
                    
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/view_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                           
                          
                           $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          
                        }
                        });
                 
             });
             
             
             
             
             
             $(".shortlist_update").on('click',function(){
                 
                 var to_user_id=$(this).attr("data-id");
                     
                    $(this).next().find('i').removeClass("view_active");
                    $(this).prev().find('i').removeClass("view_active");
            
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/shortlist_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                          if(data==0){
                              alert("You shortlisted this profile");
                              $(this).find("i").addClass("view_active");
                          }
                           $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          
                        }
                        });
                 
             });
             
             
             $(".ignore_update").on('click',function(){
                 
                 var to_user_id=$(this).attr("data-id");
                 
                    
                     
                    $(this).prev().find('i').removeClass("view_active");
                    $(this).prev().prev().find('i').removeClass("view_active");
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/ignore_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                            
                          if(data==0){
                              alert("You ignored this profile");
                              $(this).find("i").addClass("view_active");
                          }
                          
                          $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          
                        }
                        });
                 
             });
             
             $(".contact_now").on('click',function(){
                 
                 
               
                        
                 
                 
                 var to_user_id=$(this).attr("data-id");
                 
                    $(this).parent().prev().find("i").addClass("view_active");
                    $(this).parent().parent().prev().find("i").removeClass("view_active");
                   
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/contact_update",
                        data: {'to_user_id':to_user_id},
                        success:
                        function(data){
                          
                          $("#contact_list").load(location.href + " #contact_list");
                          $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          
                        }
                        
                        });
                        
                        
                 
             });
             
             
             $(".update-contact-now").on('click',function(){
                 
                 alert("Please Upgrade Your Account");
                 
                 window.location.href="<?php echo site_url()."dashboard/payment"  ?>";
             });
             
             
             
            
        });
        
        </script>
	 
    <!-- Metis Menu Js -->
    <script src="<?php echo site_url();?>dashboard-assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?php echo site_url();?>dashboard-assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo site_url();?>dashboard-assets/js/morris/morris.js"></script>
	
	
	<script src="<?php echo site_url();?>dashboard-assets/js/easypiechart.js"></script>
	<script src="<?php echo site_url();?>dashboard-assets/js/easypiechart-data.js"></script>
    <script src="<?php echo site_url();?>dashboard-assets/js/custom-scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="<?php echo site_url();?>css/jquery-ui.css" />
    <script src="<?php echo site_url();?>js/jquery-ui.js"></script>
    
        <script>
          $(function() {
            $( "#datepicker" ).datepicker();
         });
        </script>
        <script src="<?php echo site_url();?>js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<!-- //for bootstrap working -->
    <script type="text/javascript">
        $(document).ready(function() {
            
           
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            $().UItoTop({ easingType: 'easeOutQuart' });
                            
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- for smooth scrolling -->
    <script type="text/javascript" src="<?php echo site_url();?>js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo site_url();?>js/easing.js"></script>
    <script type="text/javascript">
    
  
    jQuery(document).ready(function($) {
        
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
    </script>
    <script>
    $('.bxslider').bxSlider({
  minSlides: 3,
  maxSlides: 3,
  slideWidth: 960,
  slideMargin: 10
});

$('[data-fancybox]').fancybox({
  selector : '[data-fancybox="gallery"]',
  loop     : true
});
</script>
    <script>if (/Mobi/.test(navigator.userAgent)) {
  // if mobile device, use native pickers
  $(".date-time input").attr("type", "datetime-local");
  $(".date input").attr("type", "date");
  $(".time input").attr("type", "time");
} else {
  // if desktop device, use DateTimePicker
  $("#datetimepicker").datetimepicker({
    icons: {
      time: "fa fa-clock-o",
      date: "fa fa-calendar",
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down",
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left"
    }
  });
  $("#datepicker").datetimepicker({
    useCurrent: false,
    format: "L",
    icons: {
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left"
    }
  });
  $("#timepicker").datetimepicker({
    format: "LT",
    icons: {
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down"
    }
  });
}
</script>

</body>

</html>