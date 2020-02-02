<footer class="row mypadding">
  <div class="col-sm-12 col-md-3">
    <h5 class="pinkcolor">About Us</h5>
    <p>We follow the Indian traditional Match Making System with the help of latest technology to help the individuals to find their soul mates</p>
  </div>
  <div class="col-sm-12 col-md-3">
    <h5 class="pinkcolor">Quick Links</h5>
    <ul>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Search</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">FAQ</a></li>
    </ul>
  </div>
  <div class="col-sm-12 col-md-3">
    <h5 class="pinkcolor">Company</h5>
    <ul>
      <li><a href="#">Terms of use</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Success Stories</a></li>
      <li><a href="#">Help</a></li>
    </ul>
  </div>
  <div class="col-sm-12 col-md-3">
    <h5 class="pinkcolor">Stay in Touch!</h5>
    <p>Follow US in our social networks!</p>
    <ul class="footer_media">
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    </ul>
  </div>
</footer>
<div class="footer_bottom">
  <p class="text-center text-white">Copyright &copy; 2019. All rights reserved.</p>
</div>
<script type="text/javascript" src="<?php echo site_url(); ?>community/js/font-awesome.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>community/bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>community/bootstrap/js/bootstrap.min.js"></script>
<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function () {
		
		$('.carousel').carousel({
            pause: "false"
      });


    /*Go to top*/
    $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
            $('#myBtn').fadeIn('slow');
        } else {
            $('#myBtn').fadeOut('slow');
        }
    });
    $('#myBtn').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });



    /*Active Nav Functionality*/
   !function () {
           var href = location.href;
          
           var pgurl = href.substr(href.lastIndexOf('/') + 1);
           if ( pgurl == '' ) {
                pgurl = 'index';
              }
           // match all the anchors on the page with the html file name
           $('a[href="' + pgurl + '"]').addClass('active');
        }();
    /*Active Nav Functionality*/


    });
</script>