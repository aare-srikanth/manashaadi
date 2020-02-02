<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- ======================= JQuery libs =========================== -->
<script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery-1.8.2.min.js"></script>

<script src="<?php echo site_url(); ?>design/js/bootstrap.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/bootstrap-select.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/modernizr.custom.26633.js"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery.gridrotator.js"></script>


<script type="text/javascript" src="<?php echo site_url(); ?>design/js/responsiveslides.min.js"></script>


<script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery.jstyling.min.js"></script>

<script src="<?php echo site_url(); ?>design/js/jquery.fitvids.min.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/easing.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/jquery.ui.totop.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/waypoints.min.js"></script>


<script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery-func.js"></script>


<!-- pop image gallery  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider-min.js"></script>


<!-- date picker jquery start -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- date picker jquery end -->


<!-- ======================= End JQuery libs ======================= -->

<script type="text/javascript">
        $(document).ready(function() {

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


                $("#dor_from").datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        dateFormat: 'yy-mm-dd'
                });

                $("#dor_to").datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        dateFormat: 'yy-mm-dd'
                });

                $(".whatsapp_icon").on('click', function() {
                        var id =$(this).attr('id');
                        // alert(id);
                        $('.sliderPop_'+id).show();
                        $('.ct-sliderPop-container').addClass('open');
                        $('.sliderPop_'+id).addClass('flexslider');
                        $('.sliderPop_'+id+' .ct-sliderPop-container').addClass('slides');
                        $('.sliderPop_'+id).flexslider({
                                selector: '.ct-sliderPop-container > .ct-sliderPop',
                                slideshow: false,
                                controlNav: false,
                                controlsContainer: '.ct-sliderPop-container'
                        });
                });
                $('.close_info').on('click', function() {
                        var id = $(this).attr('id');
                        // alert(id);
                        //subpop_close_wicon_984
                        var fid= id.substring(10, id.length);
                        // alert(fid);
                        $('.sliderPop_'+fid).hide();
                        $('.ct-sliderPop-container').removeClass('open');
                        $('.sliderPop_'+fid).removeClass('flexslider');
                        $('.sliderPop_'+fid + ' .ct-sliderPop-container').removeClass('slides');
                });

        });
</script>





</body>

</html>