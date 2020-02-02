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
label {
    cursor: pointer;
    color: #fff;
}
</style>
    <!-- Slider -->
    <section class="join-form slider_main">
    	<div class="slider-container">
		    <ul class="rslides" id="slider">
			  <li><img src="<?php echo site_url();?>design/img/slider/Manashaddi.jpg"  alt="//"/></li>
			   <li><img src="<?php echo site_url();?>design/img/slider/img-2.jpg"  alt="//"/></li>
			    <li><img src="<?php echo site_url();?>design/img/slider/img-3.jpg"  alt="//"/></li>
			     <li><img src="<?php echo site_url();?>design/img/slider/img-4.jpg"  alt="//"/></li>

			
		    </ul>
	    </div>
	    <div class="container">
	    	<div class="row-fluid">
	    		<div class="col-xs-6 pull-right search_form_main">
	    			<div class="form-container pull-right box animated pulse">
	    			    <form  action="<?php echo site_url();?>home/search" method="POST">
		    			<div class="search_form col-xs-12 p15px bdr br7px ffos combo_select m0a sb-effect-displayed animated zenFadeInLeft" data-sb="zenFadeInLeft" style="opacity: 1;"> 
		    			<div class="col-md-6">
		    			    <label>Looking for</label>
		    			     <select  type="text" id="destination" class="xs-mr-15 form-control" name="gender">
        <option value="" selected="selected">Select Gender</option>
        <option  value="female" label="Woman">Woman</option>
        <option value="male" label="Man">Man</option>

    </select>
		    			</div>
		    				<div class="col-md-6" id="age_li">
		    				    <div class="col-xs-6">
		    				    <label>Age</label>
		    				     <select  name="agefrom" id="agefrom" class="form_dropdown form-control search_pannel_age select2-offscreen" tabindex="-1">
                        <option value="">Age</option>
                        <option selected value="18" label="18">18</option>
                        <option value="19" label="19">19</option>
                        <option value="20" label="20">20</option>
                        <option value="21" label="21">21</option>
                        <option value="22" label="22">22</option>
                        <option value="23" label="23">23</option>
                        <option value="24" label="24">24</option>
                        <option value="25" label="25">25</option>
                        <option value="26" label="26">26</option>
                        <option value="27" label="27">27</option>
                        <option value="28" label="28">28</option>
                        <option value="29" label="29">29</option>
                        <option value="30" label="30">30</option>
                        <option value="31" label="31">31</option>
                        <option value="32" label="32">32</option>
                        <option value="33" label="33">33</option>
                        <option value="34" label="34">34</option>
                        <option value="35" label="35">35</option>
                        <option value="36" label="36">36</option>
                        <option value="37" label="37">37</option>
                        <option value="38" label="38">38</option>
                        <option value="39" label="39">39</option>
                        <option value="40" label="40">40</option>
                        <option value="41" label="41">41</option>
                        <option value="42" label="42">42</option>
                        <option value="43" label="43">43</option>
                        <option value="44" label="44">44</option>
                        <option value="45" label="45">45</option>
                        <option value="46" label="46">46</option>
                        <option value="47" label="47">47</option>
                        <option value="48" label="48">48</option>
                        <option value="49" label="49">49</option>
                        <option value="50" label="50">50</option>
                     </select></div>
		    				      <div class="col-xs-6">
		    				    <label>to</label>
		    				      <select name="ageto"  id="ageto" class="form_dropdown form-control search_pannel_age select2-offscreen" tabindex="-1">
                         <option value="">Age</option>
                        <option value="18" label="18">18</option>
                        <option value="19" label="19">19</option>
                        <option value="20" label="20">20</option>
                        <option value="21" label="21">21</option>
                        <option value="22" label="22">22</option>
                        <option value="23" label="23">23</option>
                        <option value="24" label="24">24</option>
                        <option value="25" label="25">25</option>
                        <option value="26" label="26">26</option>
                        <option value="27" label="27">27</option>
                        <option value="28" label="28">28</option>
                        <option value="29" label="29">29</option>
                        <option value="30" label="30">30</option>
                        <option value="31" label="31">31</option>
                        <option value="32" label="32">32</option>
                        <option value="33" label="33">33</option>
                        <option value="34" label="34">34</option>
                        <option selected value="35" label="35">35</option>
                        <option value="36" label="36">36</option>
                        <option value="37" label="37">37</option>
                        <option value="38" label="38">38</option>
                        <option value="39" label="39">39</option>
                        <option value="40" label="40">40</option>
                        <option value="41" label="41">41</option>
                        <option value="42" label="42">42</option>
                        <option value="43" label="43">43</option>
                        <option value="44" label="44">44</option>
                        <option value="45" label="45">45</option>
                        <option value="46" label="46">46</option>
                        <option value="47" label="47">47</option>
                        <option value="48" label="48">48</option>
                        <option value="49" label="49">49</option>
                        <option value="50" label="50">50</option>
                     </select></div>
		    				    </div>
		    				    <div class="col-md-6" id="religion_code_li">
		    				        <label>Religion</label>
		    				        <select  type="text" id="date_to" class="date_to xs-mr-15 col-xs-3" name="religion">
                     <option value="" label="Select Religion" selected="selected">Select Religion</option>
                     <?php foreach($religions as $value) { ?>
                      <option value="<?php echo $value['religion'];?>"><?php echo $value['religion'];?></option>
                     <?php } ?>
                  </select>
		    				    </div>
		    				     <div class="col-md-6" id="mother_tongue_code_li">
		    				         <label>Mother Tongue</label>
		    				         <select   type="text" id="date_to" class="from-control date_to " name="mother_tounge">
                     <option value="" label="Select Mother Tongue" selected="selected">Select Mother Tongue</option>
                     <?php foreach($mother_tounges as $value) { ?>
                      <option value="<?php echo $value['mothertounge'];?>"><?php echo $value['mothertounge'];?></option>
                     <?php } ?>
                  </select>
		    				         </div>
		    				         <div class="col-xs-12 text-right" style="margin-top:25px;">
		    				             <input type="submit" id="search" class="bsbb darkbg1 white xlarge ts0 dib p10px20px bdr" value="Search Partner">
		    				         </div>

</div>

</div>

</form>


	    		</div>
	    	</div>
	    </div>
    </section>
    <!-- End Slider -->
    <!-- Features -->
	<section class="items tips first generic-section  text-center">
		<div class="container">    		
		<h2 class="left"></h2>
		<legend class="intro-text right"><h2>Your story is waiting to happen! </h2></legend>
		<div class="clear"></div>
		<div class="row-fluid bottom">
			 <div class="col-md-3 col-xs-6 item last">
            	<span class="ico"><img src="<?php echo site_url();?>images/profile.png" alt="icon" /></span>
                <h4> Profile Creation</h4>
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consecteturo eiusmod tempor.</p>
            </div>
        	 <div class="col-md-3 col-xs-6 item last">
            	<span class="ico"><img src="<?php echo site_url();?>images/job.png" alt="icon" /></span>
                <h4>Connect</h4>
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consecteturo eiusmod tempor.</p>
            </div>
           	 <div class="col-md-3 col-xs-6 item last">
            	<span class="ico"><img src="<?php echo site_url();?>images/phone-symbol-of-an-auricular-inside-a-circle.png" alt="icon" /></span>
                <h4>Intiate Communication </h4>
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consecteturo eiusmod tempor.</p>
            </div>
           	 <div class="col-md-3 col-xs-6 item last">
            	<span class="ico"><img src="<?php echo site_url();?>images/in-love.png" alt="icon" /></span>
                <h4>Arranging Mettings & Get Marriage</h4>
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consecteturo eiusmod tempor.</p>
            </div>
        </div>
        </div>
	</section><!-- .container -->
	<!-- end Features -->
    <!-- Why -->
	<section class="items tips why generic-section text-center over6_images">
		<div class="container">    		
		<h2 class="left">Over 6 Million Happy Stories</h2>
		
		<div class="clear"></div>
		<div class="row-fluid bottom">
        	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            		<img src="<?php echo site_url();?>design/img/testimonials/couple1.jpg" alt="//" />
            		<span><em>Couple<br />1</em></span>
            	</div>                
                <p>First of all I would like to Thank you ManaShaadi.com for giving us a wonderful platform to search our better half</p>
            </div>
           	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            	<img src="<?php echo site_url();?>design/img/testimonials/couple2.jpg" alt="//" />
            		<span><em>Couple<br />2</em></span>
            	</div>                
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consectetur adipisici do eiusmod tempor.</p>
            </div>
          	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            		<img src="<?php echo site_url();?>design/img/testimonials/couple3.jpg" alt="//" />
            		<span><em>Couple<br />3</em></span>
            	</div>                
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consecteturo eiusmod tempor.</p>
            </div>
          	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            		<img src="<?php echo site_url();?>design/img/testimonials/couple4.jpg" alt="//" />
            		<span><em>Couple<br />4</em></span>
            	</div>                
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consecteturo eiusmod tempor.</p>
            </div>
          	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            		<img src="<?php echo site_url();?>design/img/testimonials/couple1.jpg" alt="//" />
            		<span><em></em></span>
            	</div>                
                <p>First of all I would like to Thank you ManaShaadi.com for giving us a wonderful platform to search our better half</p>
            </div>
          	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            	<img src="<?php echo site_url();?>design/img/testimonials/couple2.jpg" alt="//" />
            		<span><em>Couple<br />2</em></span>
            	</div>                
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consectetur adipisici do eiusmod tempor.</p>
            </div>
          	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            		<img src="<?php echo site_url();?>design/img/testimonials/couple3.jpg" alt="//" />
            		<span><em>Couple<br />3</em></span>
            	</div>                
                <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consecteturo eiusmod tempor.</p>
            </div>
           	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            		<img src="<?php echo site_url();?>design/img/testimonials/couple4.jpg" alt="//" />
            		<span><em>Couple<br />4</em></span>
            	</div>                
                <p>You can register and create your profile for FREE!</p>
            </div>
        </div>
        </div>
	</section><!-- .container -->
	<!-- end Why -->
	<!--Image Gallery-->
	<section class="generic-section wall text-center m-b-50">
		<div class="container">
	        <h2 class="keft">ManaShaadi.com welcomes you to register free and search partner.<br/> with your ideal requirements</h2>
	        <p class="intro-text right">REGISTER NOW TO FIND YOUR MANAMATRIMONY!</p>
		</div>		
	</section>
	<!-- End Image Gallery-->
    <div class="dwdAppWrapper "><div class="container"><div class="row"><div class="span6 "><h3 class="dwdAppHeading">Download the App</h3></div><div class="span6 m-t-30 appLinkWraper"><a href="#" target="_blank" rel="noopener noreferrer" class="playStore p-t-30 " title="India Matrimonial"><img src="<?php echo site_url();?>design/img/playstore-v2.png" width="104" height="31" alt="India Matchmaking" title="India Matrimony"></a>
    	<a href="#" target="_blank" rel="noopener noreferrer" class="ituneStore p-t-30" title="India Matrimonial"><img src="<?php echo site_url();?>design/img/appstore-v2.png" width="104" height="31" alt="India Matchmaking" title="India Matrimony"></a></div></div></div></div>
    <!--Newsletter-->
     <section class="newsletter">
     	<div class="container">
            <div class="row-fluid">
            	<div class="span12">
            		<form id="newsletter" class="formNewsletter nm" action="index_submit" method="post" accept-charset="utf-8">
						<div id="loadingNews" style="display: none" class='alert'>
			  				<a class='close' data-dismiss='alert'>×</a>Loading
						</div>	
		            	<div id="responseNews"></div>
						<div class="row-fluid">
							<div class="span12 fields">
								<label class="left">Stay in touch by email for updates and offers</label>
								<div class="right">
									<input type="text" class="large" placeholder="Your email here..." name="Email" value="" />	
									<input class="btn btn-large btn-primary" type="submit" name="submit" value="SUSCRIBE NOW" id="submit"/>
								</div>
							</div>	
						</div>
					</form>
            	</div>
            </div>
        </div>
     </section>
     <!--End Newsletter-->
   