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
    <section class="join-form">
    	<div class="slider-container">
		    <ul class="rslides" id="slider">
			  <li><img src="<?php echo site_url();?>design/img/slider/Manashaddi.jpg"  alt="Best Matrimony Site in India"/></li>
		    </ul>
	    </div>
	    <div class="container">
	    	<div class="row-fluid">
	    		<div class="col-xs-12">
	    			<div class="form-container pull-right box animated pulse">
	    			    <form  action="<?php echo site_url();?>home/search" method="POST">
		    			<div class="search_form col-xs-12 p15px bdr br7px ffos combo_select m0a sb-effect-displayed animated zenFadeInLeft" data-sb="zenFadeInLeft" style="opacity: 1;"> 
		    			<div class="col-md-2 col-xs-12">
		    			    <label>Looking for</label>
		    			     <select  type="text" id="destination" class="xs-mr-15 form-control" name="gender">
        <option value="">Select Gender</option>
        <option  value="female" selected label="Woman">Woman</option>
        <option value="male" label="Man">Man</option>

    </select>
		    			</div>
		    				<div class="col-md-3 col-xs-12" id="age_li" style="padding: 0 5px;">
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
		    				    <div class="col-md-2 col-xs-12" id="religion_code_li" style="padding: 0 5px;">
		    				        <label>Religion</label>
		    				        <select  type="text" id="date_to" class="date_to xs-mr-15 col-xs-3" name="religion">
                     <option value="" label="Select Religion" selected="selected">Select Religion</option>
                     <?php foreach($religions as $value) { ?>
                      <option value="<?php echo $value['religion'];?>"><?php echo $value['religion'];?></option>
                     <?php } ?>
                  </select>
		    				    </div>
		    				     <div class="col-md-3 col-xs-12" id="mother_tongue_code_li" style="padding: 0 5px;">
		    				         <label>Mother Tongue</label>
		    				         <select   type="text" id="date_to" class="from-control date_to " name="mother_tounge">
                     <option value="" label="Select Mother Tongue" selected="selected">Select Mother Tongue</option>
                     <?php foreach($mother_tounges as $value) { ?>
                      <option value="<?php echo $value['mothertounge'];?>"><?php echo $value['mothertounge'];?></option>
                     <?php } ?>
                  </select>
		    				         </div>
		    				         <div class="col-xs-2" style="margin-top:25px; padding: 0 5px;">
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
		<div class="col-xs-12 advantages_title">
		<h1>Manashaadi - Best Matrimony Sites In India </h1>
		<h4>Will assign Relationship Manager understands your expectations and provides personalised assistance</h4>
		</div>
		<div class="vspace_50"></div> 
		<div class="row-fluid top">
			 <div class="col-md-3 col-xs-6 item last">
            	<span class="ico"><img src="<?php echo site_url();?>images/profile.png" alt="Free Profile Creation In Best Matrimony Site" /></span>
                <h4> Profile Creation</h4>
                <p>The Feedback from the interaction is used to enhance your manashaadi profile.</p>
            </div>
        	 <div class="col-md-3 col-xs-6 item last">
            	<span class="ico"><img src="<?php echo site_url();?>images/job.png" alt="Matrimony Search, Matrimonial Search" /></span>
                <h4>Connect</h4>
                <p>The best matches are handpicked after screening thousands of profiles and are sent to you for approval</p>
            </div>
           	 <div class="col-md-3 col-xs-6 item last">
            	<span class="ico"><img src="<?php echo site_url();?>images/phone-symbol-of-an-auricular-inside-a-circle.png" alt="assisted matrimony,Matrimonial match making" /></span>
                <h4>Intiate Communication </h4>
                <p>Your Relationship Manager contacts prospects on your behalf communication between you and your matches</p>
            </div>
           	 <div class="col-md-3 col-xs-6 item last">
            	<span class="ico"><img src="<?php echo site_url();?>images/in-love.png" alt="Telugu Marriage Bureau Success Stories" /></span>
                <h4>Arranging Mettings & Get Marriage</h4>
                <p>Your Relationship manager contacts prospects and facilitates a meeting based on mutual Interest. if both the sides like each other,they can further discuss all other formalities of marriage.</p>
            </div>
        </div>
        </div>
	</section><!-- .container -->
	<!-- end Features -->
    <!-- Why -->
	<section class="items tips why generic-section  text-center">
		<div class="container">    		
		<h2 class="left">Manashaadi Matrimony Success Stories</h2>
		
		<div class="clear"></div>
		<div class="col-xs-12 no-padding generic-section-info">
		    
		    <?php if(isset($success_stories) && count($success_stories) > 0) { foreach($success_stories as $value) { ?>
		    
        	 <div class="col-md-3 col-xs-6 item last">
            	<div class="avatar">
            		<img src="<?php echo site_url();?>images/successstories/<?php echo $value['image'];?>" alt="//" />
            		<span><em>Couple<br />1</em></span>
            	</div>                
                <?php echo stripcslashes(str_replace('\n','',$value['content']));?>
            </div>
            
            
            <?php } } else{
                echo "No Records Found!";
              }?>
            
            
       
            
            
            
        </div>
        <div class="col-xs-12" style="clear:both"></div>
        </div>
	</section><!-- .container -->
	<!-- end Why -->
	<!--Image Gallery-->
	<section class="generic-section wall text-center m-b-50 background_green">
		<div class="container">
	        <h2 class="keft">your partner search begins with a FREE REGISTRATION!</h2>
	        <a href="<?php echo site_url()."register" ?>"><button class="btn btn-info darkbg1 btn-lg">Register Now </button></a>
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
   