
      <section class="about-us">
         <div class="container  person-details" style="margin-top: 50px;">
             <div class="col-md-12 text-right" style="padding:10px;">
                  <a href="<?php echo site_url();?>login" class="upload-later">Will Do this Later</a>
             </div>
            <div class="col-md-12">
              
                  
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
                        <div class="col-md-12 ptb-20 ht-140" style="padding:10px;" id="image_preview"></div>
                        
                           <p>Strong Photo Privacy Options | No downloads allowed | Photos are Watermarked Jpeg, Jpg, PNG | Upto 10MB | 3 photos only</p>
                      
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary" name='submit_image' value="Upload Images"/>
                        </div>
                     </form>
                  </div>
              
            </div>
         </div>
      </section>
     
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