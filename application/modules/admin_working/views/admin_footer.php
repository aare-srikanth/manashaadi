
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




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
        <!-- Template custom script  -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery-func.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider-min.js"></script>
	<!-- ======================= End JQuery libs ======================= -->

	<script type="text/javascript">
        $(document).ready(function() {

	//  display all images on click image 

/*$(".all-images img,.all-images .view_all_photos").on('click',function(e){

$(".modal").css("display","block");

});

$(".modal_close").on('click',function(e){

$(".modal").css("display","none");

});*/


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


});

</script>



</body>

</html>