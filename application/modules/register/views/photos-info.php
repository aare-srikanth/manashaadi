<!DOCTYPE html>
<!-- html -->
<html>
   <!-- head -->
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>Welcome to Manashaadi</title>
      <link href="<?php echo site_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <!-- bootstrap-CSS -->
      <link href="<?php echo site_url();?>css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Fontawesome-CSS -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script type='text/javascript' src='<?php echo site_url();?>js/jquery-2.2.3.min.js'></script>
      <!-- Custom Theme files -->
      <link href="<?php echo site_url();?>css/menu.css" rel="stylesheet" type="text/css" media="all" />
      <!-- menu style --> 
      <!--theme-style-->
      <link href="<?php echo site_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
      <!--//theme-style-->
      <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>css/easy-responsive-tabs.css" />
      <!--meta data-->
      <script type="application/x-javascript"> 
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
          function hideURLbar(){ window.scrollTo(0,1); } 
      </script>
      <!--//meta data-->
      <!-- online fonts -->
      <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
      <!-- /online fonts -->
      <!-- nav smooth scroll -->
      <style>
         :focus{
         outline: none;
         }
         #formdiv {
         text-align: center;
         }
         #file {
         color: green;
         padding: 5px;
         border: 1px dashed #123456;
         background-color: #f9ffe5;
         }
         #img {
         width: 17px;
         border: none;
         height: 17px;
         margin-left: -20px;
         margin-bottom: 191px;
         }
         .upload {
         width: 100%;
         height: 30px;
         }
         .upload-image{
         width:60%;
         margin:40px auto;
         }
         .upload-image h2{
         text-align:center;
         padding:20px;
         }
         .upload-input{
         height: 50px;
         background: #950c5e;
         color: #fff;
         padding: 7px;
         font-size:25px;
         font-weight:500;
         margin:25px 0px;
         }
         .previewBox {
         text-align: center;
         position: relative;
         width: 150px;
         height: 150px;
         margin-right: 10px;
         margin-bottom: 20px;
         float: left;
         }
         .previewBox img {
         height: 150px;
         width: 150px;
         padding: 5px;
         border: 1px solid rgb(232, 222, 189);
         }
         .delete {
         color: red;
         font-weight: bold;
         position: absolute;
         top: 0;
         cursor: pointer;
         width: 20px;
         height:  20px;
         border-radius: 50%;
         background: #ccc;
         }
      </style>
      <script>
         $(document).ready(function(){
             $(".dropdown").hover(            
                 function() {
                     $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                     $(this).toggleClass('open');        
                 },
                 function() {
                     $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                     $(this).toggleClass('open');       
                 }
             );
         });
      </script>	
      <!-- //nav smooth scroll -->			
      <link rel="stylesheet" href="<?php echo site_url();?>css/intlTelInput.css">
      <script src='<?php echo site_url();?>js/jquery.min.js'></script>
      <script src="<?php echo site_url();?>js/monetization.js" type="text/javascript"></script>
      
      <style>
section.about-us {
    margin-top: 0px;
}
</style>
   </head>
   
   
   <!-- //head -->
   <!-- body -->
   <body class="upload_details">
      <!-- header -->
      <header>
         <div class="navbar navbar-inverse-blue navbar">
            <div class="navbar-inner">
               <div class="container">
                  <div class="col-md-6">
                     <div class="row">
                        <div class="menu">
                           <div class="logo">
                              <a class="cd-logo link link--takiri" href="<?php echo site_url();?>home"><img src="<?php echo site_url();?>images/logo1.jpg"></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 text-right">
                     <div class="row">
                        <p class="fx">Support: 
                           <a href="tel:+91 9100965545">91 - 9100965545 </a>
                          </p>
                     </div>
                  </div>
                  <!-- end pull-right -->
                  <div class="clearfix"> </div>
               </div>
               <!-- end container -->
            </div>
         </div>
      </header>
      <section class="about-us">
         <div class="container">
            <div class="col-md-12">
               <div class="row">
                   <a href="<?php echo site_url();?>login" class="upload-later">Will Do this Later</a>
                  <div class="upload-image">
                     <h2>Manage Photos</h2>
                     <?php if ($this->session->flashdata('msg_succ') != '') { ?>
                            <div class="alert alert-block alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                <p>
                            <?php echo $this->session->flashdata('msg_succ') ? $this->session->flashdata('msg_succ') : ''; ?>
                                </p>
                            </div>
                    <?php } ?>
                     <form method="post" action="<?php echo site_url();?>register/upload/<?php echo $this->uri->segment(3);?>" enctype="multipart/form-data">
                        <div class="col-md-12">
                           <p>75% of our users feel they need atleast 3 photos to send an expression of intrest.</p>
                           <input type="file" class="form-control upload-input" id="images" name="images[]" onchange="preview_images();" multiple/>
                        </div>
                        <div class="row ptb-20 ht-140" id="image_preview"></div>
                        <div class="col-md-12">
                           <p>Strong Photo Privacy Options | No downloads allowed | Photos are Watermarked Jpeg, Jpg, PNG | Upto 10MB | 3 photos only</p>
                        </div>
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary" name='submit_image' value="Upload Images"/>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- footer -->
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
                           <li><a href="about.html"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:16px;"></i>About Us</a></li>
                           <li><a href="search.html"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Search</a></li>
                           <li><a href="contact.html"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Contact Us</a></li>
                           <li><a href="faq.html"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>FAQ</a></li>
                        </ul>
                     </div>
                     <div class="col-md-4 footer-grids">
                        <h3>Company</h3>
                        <ul>
                           <li><a href="terms-conditions.html"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Terms of use</a></li>
                           <li><a href="privacy-policy.html"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Privacy Policy</a></li>
                           <li><a href="feedback.html"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Success Stories</a></li>
                           <li><a href="help.html"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:14px;"></i>Help</a></li>
                        </ul>
                     </div>
                     <div class="col-md-4 footer-grids">
                        <h3>Get in Touch</h3>
                        <ul>
                           <li><i class="fa fa-map-marker"></i> Hyderabad.</li>
                           <li><i class="fa fa-mobile"></i> +91 00000 00000 </li>
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
               <p>© 2018 Manamatrimony. All rights reserved | Design by <a href="https://www.royalitpark.com/"> Royal IT Park.</a></p>
            </div>
         </div>
      </footer>
      <script src="<?php echo site_url();?>js/jquery.menu-aim.js"> </script>
      <script src="<?php echo site_url();?>js/main.js"></script> <!-- Resource jQuery -->
      <link rel="stylesheet" href="<?php echo site_url();?>css/jquery-ui.css" />
      <script src="<?php echo site_url();?>js/jquery-ui.js"></script>
      <script>
         $(function() {
         $( "#datepicker" ).datepicker();
         });
      </script>
      <script src="js/bootstrap.js"></script>
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
      <script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
      <script>
         function preview_images() 
         {
          var total_file=document.getElementById("images").files.length;
          for(var i=0;i<total_file;i++)
          {
           $('#image_preview').append("<div class='col-md-4'><img class='img-responsive ht-140 mb-20' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
          }
         }
      </script>
      <script>
         $('#add_more').click(function() {
              "use strict";
              $(this).before($("<div/>", {
                id: 'filediv'
              }).fadeIn('slow').append(
                $("<input/>", {
                  name: 'file[]',
                  type: 'file',
                  id: 'file',
                  multiple: 'multiple',
                  accept: 'image/*'
                })
              ));
            });
         
            $('#upload').click(function(e) {
              "use strict";
              e.preventDefault();
         
              if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
                alert("No files are selected.");
                return false;
              }
         
            });
         
            deletePreview = function (ele, i) {
              "use strict";
              try {
                $(ele).parent().remove();
                window.filesToUpload.splice(i, 1);
              } catch (e) {
                console.log(e.message);
              }
            }
         
            $("#file").on('change', function() {
              "use strict";
         
              // create an empty array for the files to reside.
              window.filesToUpload = [];
         
              if (this.files.length >= 1) {
                $("[id^=previewImg]").remove();
                $.each(this.files, function(i, img) {
                  var reader = new FileReader(),
                    newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                    deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>").prependTo(newElement),
                    preview = newElement.find("img");
         
                  reader.onloadend = function() {
                    preview.attr("src", reader.result);
                    preview.attr("alt", img.name);
                  };
         
                  try {
                    window.filesToUpload.push(document.getElementById("file").files[i]);
                  } catch (e) {
                    console.log(e.message);
                  }
         
                  if (img) {
                    reader.readAsDataURL(img);
                  } else {
                    preview.src = "";
                  }
         
                  newElement.appendTo("#filediv");
                });
              }
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