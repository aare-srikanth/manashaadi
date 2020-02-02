<footer style="background-color:#eee">
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
			<div class="col-md-4 footer-grids">
						<h3>About</h3>
						<p>ManaShaadi.com - One of the Telugu Marriage Bureau and most successful Best Matrimony sites in India. Telugu Matrimonial sites allow to Matrimony Registration FREE. ManaShaadi Matrimony is the most trusted wedding destination to find your special one</p>
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
<!-- //footer -->	
<!-- menu js aim -->
	<script src="<?php echo site_url();?>js/bootstrap.js"></script>
	<script src="<?php echo site_url();?>js/jquery.menu-aim.js"> </script>
	<script src="<?php echo site_url();?>js/monetization.js"> </script>
	
	<!-- //menu js aim -->		
<!-- Calendar -->
	<link rel="stylesheet" href="<?php echo site_url();?>css/jquery-ui.css" />
	<script src="<?php echo site_url();?>js/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script><!-- Resource jQuery -->
	
	<script type="text/javascript">
		$(document).ready(function() {
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
$(function(){
$('.input-group.date').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
    $('.bxslider').bxSlider({
  minSlides: 1,
  maxSlides: 1,
  slideWidth: 960,
  slideMargin: 10
});

$('[data-fancybox]').fancybox({
  selector : '[data-fancybox="gallery"]',
  loop     : true
});
</script>

	<script>
	    $(document).ready(function(){

   $("input").focusout(function(){

    var nameC = $(this).attr("data-Nclass");

    if($(this).val().length > 0)
      $(nameC).addClass("stayPlaceInput");
    else
      $(nameC).removeClass("stayPlaceInput");
   });

});
	</script>

</body>
<!-- //body -->
</html>
<!-- //html -->