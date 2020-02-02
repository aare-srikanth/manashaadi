 <!--Footer-->
	 <div class="footer">
		 <section class="container generic-section">
			<div class="row-fluid">	
            	<div class="col-md-3 col-xs-6 item right">
	    			<h3>About Us</h3>
	    			<p>ManaShaadi.com - One of the <b>Telugu Marriage Bureau</b> and most successful <b>Best Matrimony sites in India</b>. Telugu Matrimonial sites allow to FREE Registration. ManaShaadi Matrimony is the most trusted wedding destination to find your special one</p>
	    			
	    		</div>  
	    		<div class="col-md-3 col-xs-6 item right">
	    			<h3>QUICK LINKS</h3>
					<p><a href="<?php echo site_url();?>aboutus">About Us</a></p>
					<p><a href="<?php echo site_url();?>search">Search</a></p>
					<p><a href="<?php echo site_url();?>contactus">Contact Us</a></p>
					<p><a href="<?php echo site_url();?>faqs">FAQ</a></p>
						
	    		</div>  
	    		<div class="col-md-3 col-xs-6 item right">
	    			<h3>COMPANY</h3>
					<p><a href="<?php echo site_url();?>terms">Terms of use</a></p>
					<p><a href="<?php echo site_url();?>privacypolicy">Privacy Policy</a></p>
					<p><a href="<?php echo site_url();?>feedback">Success Stories</a></p>
					<p><a href="<?php echo site_url();?>contactus">Help</a></p>
						
	    		</div>  
              
	    		<div class="col-md-3 col-xs-6 item right">
	    			<h3>Stay in Touch!</h3>
	    			<p>Follow US in our social networks!<br /></p>
					<ul class="social">
						<li class="tooltip_hover" title="" data-original-title="Linkedin"><a href="#" class="in">Linked In</a></li>
						<li class="tooltip_hover" title="" data-original-title="Youtube"><a href="#" class="youtube">Linked In</a></li>
						<li class="tooltip_hover" title="" data-original-title="Facebook"><a href="#" class="facebook">Linked In</a></li>
						<li class="tooltip_hover" title="" data-original-title="Twitter"><a href="#" class="twitter">Linked In</a></li>
					</ul>
	    		</div>  		
			</div>
		</section>
	</div>
	<!-- End Footer -->  
    <!--Copyright-->
	 <div class="copy">
     	<section class="container">
			<p>© Copyright © 2019 </p>
		</section>
	</div>
    <!--End Copyright-->
	<!-- ======================= JQuery libs =========================== -->
		<script type="text/javascript" src="<?php echo site_url();?>design/js/jquery-1.8.2.min.js"></script>        
        <!-- Bootstrap.js-->
        <script src="<?php echo site_url();?>design/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo site_url();?>design/js/bootstrap-select.min.js" type="text/javascript"></script>        
        <!-- Gallery -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/modernizr.custom.26633.js"></script>
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery.gridrotator.js"></script>        
        <!-- Slider -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/responsiveslides.min.js"></script>        
        <!-- Controls styles -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery.jstyling.min.js"></script>        
        <!-- Video Responsive-->
        <script src="<?php echo site_url();?>design/js/jquery.fitvids.min.js" type="text/javascript"></script>        
        <!-- Easing plugin ( optional ) -->
        <script src="<?php echo site_url();?>design/js/easing.js" type="text/javascript"></script>        
        <!-- UItoTop plugin -->
        <script src="<?php echo site_url();?>design/js/jquery.ui.totop.min.js" type="text/javascript"></script>        
        <!--  Waypoints -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/waypoints.min.js"></script>      

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider-min.js"></script>  
        <!-- Template custom script  -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery-func.js"></script>
	<!-- ======================= End JQuery libs ======================= -->
	
		<script type="text/javascript">
        $(document).ready(function() {
          $("#myNavbar2").hide();
          $(".navbar-toggle").on('click', function(){
            $("#myNavbar2").slideToggle();
          });
            
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
                        url: "<?php echo site_url(); ?>dashboard/my_account/view_profile_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                           
                          if(data==0){
                          $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          }
                          
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
                 
                    $(this).addClass("view_active_background");
                    
                         
                          $(".view_update").find("i").removeClass("view_active");
                          $(".shortlist_update").find("i").removeClass("view_active");
                          $(".ignore_update").find("i").removeClass("view_active");
                    
                    
                    $(this).parent().parent().prev().find("i").removeClass("view_active");
                   
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/contact_update",
                        data: {'to_user_id':to_user_id},
                        success:
                        function(data){
                             alert("You Contacted This Profile");
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
             
$('.dropdown-menu li a').click(function(e){
    e.stopPropagation()
});
             
             
             // payment upgrade
             
             
          $(".plan-one").on('click',function(e){
                 e.preventDefault();
                 
                 alert("Please Contact Our Relationship Manager  +91 - 91009 65545");
               
                
             });    


$('.all-images img').on('click', function() {
          $('.sliderPop').show();
          $('.ct-sliderPop-container').addClass('open');
          $('.sliderPop').addClass('flexslider');
          $('.sliderPop .ct-sliderPop-container').addClass('slides');

          $('.sliderPop').flexslider({
                selector: '.ct-sliderPop-container > .ct-sliderPop',
                slideshow: false,
                controlNav: false,
                controlsContainer: '.ct-sliderPop-container'
          });
        });

        $('.ct-sliderPop-close').on('click', function() {
          $('.sliderPop').hide();
          $('.ct-sliderPop-container').removeClass('open');
          $('.sliderPop').removeClass('flexslider');
          $('.sliderPop .ct-sliderPop-container').removeClass('slides');
        });


var width = $(window).width();

if(width<1000){
  $(".header_login .btn-login").removeClass('show');
}
            
            $('.delete_image').on('click', function() {
                
                var rec_id=$(this).attr("data-id");
                
                
                var confirm_status = confirm("Are you sure?");
                
                if(confirm_status){
               
            $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/delete_image",
                        data: {'rec_id':rec_id},
                        dataType:"text",
                        success:
                        function(data){
                            
                            
                             alert("Photo deleted successfully");
                         
                             window.location.reload();
                          
                        }
                        
                        });
                 }
                
            });
                
           
            
            $('.set_profile').on('click', function() {
                
                var rec_id=$(this).attr("data-id");
                
                
               
                $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/set_profile_pic",
                        data: {'rec_id':rec_id},
                        success:
                        function(data){
                            
                             alert("Profile Pic Updated Successfully");
                         
                             window.location.reload();
                          
                        }
                        
                        });
                
            });


            
        });
        
        </script>

       

	
	
</body>
</html>