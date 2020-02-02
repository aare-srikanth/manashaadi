<div class="w3layouts-banner" id="home">
   <div class="container">
      <div class="clearfix"></div>
      <div class="container">
         <form id="booking-form" action="<?php echo site_url();?>home/search" class="booking-form" method="POST">
            <div class="form-group">
               <div class="form-destination">
                  <label for="destination">I'm looking for a</label>
                  <select type="text" id="destination" class="xs-mr-15" name="gender">
                      <option value="" selected="selected">Select Gender</option>
                     <option  value="female" label="Woman">Woman</option>
                     <option value="male" label="Man">Man</option>
                  </select>
               </div>
               <div class="form-quantity">
                  <label for="quantity">Age</label>
                  <span class="fx">
                     <select name="agefrom" id="agefrom" class="form_dropdown search_pannel_age select2-offscreen" tabindex="-1">
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
                     </select>
                     <span class="plr-5" style="color:#fff;padding-top:8px">to</span>
                     <select name="ageto" id="ageto" class="form_dropdown search_pannel_age select2-offscreen" tabindex="-1">
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
                     </select>
                  </span>
               </div>
               <div class="form-date-to form-icon">
                  <label for="date_to">Religion</label>
                  <select type="text" id="date_to" class="date_to xs-mr-15" name="religion">
                     <option value="" label="Select Religion" selected="selected">Select Religion</option>
                     <?php foreach($religions as $value) { ?>
                      <option value="<?php echo $value['religion'];?>"><?php echo $value['religion'];?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="form-date-to form-icon">
                  <label for="date_to">Mother Tongue</label>
                  <select type="text" id="date_to" class="date_to xs-mr-15" name="mother_tounge">
                     <option value="" label="Select Mother Tongue" selected="selected">Select Mother Tongue</option>
                     <?php foreach($mother_tounges as $value) { ?>
                      <option value="<?php echo $value['mothertounge'];?>"><?php echo $value['mothertounge'];?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="form-submit home-form">
                  <input type="submit" id="submit" name="submit" class="submit" value="Let's Begin" />
               </div>
            </div>
         </form>
      </div>
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
                  <h4 class="modal-title">Login to Continue</h4>
               </div>
               <div class="modal-body">
                  <div class="login-w3ls">
                     <form id="signin" action="#" method="post">
                        <label>User Name </label>
                        <input type="text" name="User Name" placeholder="Username" required="">
                        <label>Password</label>
                        <input type="password" name="Password" placeholder="Password" required="">	
                        <div class="w3ls-loginr"> 
                           <input type="checkbox" id="brand" name="checkbox" value="">
                           <span> Remember me ?</span> 
                           <a href="#">Forgot password ?</a>
                        </div>
                        <div class="clearfix"> </div>
                        <input type="submit" name="submit" value="Login">
                        <div class="clearfix"> </div>
                        <div class="social-icons">
                           <ul>
                              <li><a href="#"><span class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="text">Facebook</span></a></li>
                              <li class="twt"><a href="#"><span class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="text">Twitter</span></a></li>
                           </ul>
                           <div class="clearfix"> </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="w3l_find-soulmate text-center">
   <h3>REGISTER NOW TO FIND YOUR MANAMATRIMONY!</h3>
   <img src="images/title-bottom.png" class="title-btm">
   <div class="container">
      <div class="col-md-"></div>
      <a class="scroll" href="<?php echo site_url();?>search">
         <div class="col-md-3 w3_soulgrid">
            <i class="fa fa-search" aria-hidden="true"></i>
            <h3>Search</h3>
            <p>Search for your right partner</p>
         </div>
      </a>
      <div class="col-md-1"></div>
      <a class="scroll" href="<?php echo site_url();?>register">
         <div class="col-md-3 w3_soulgrid">
            <i class="fa fa-users" aria-hidden="true"></i>
            <h3>Connect</h3>
            <p>Connect your perfect Match</p>
         </div>
      </a>
      <div class="col-md-1"></div>
      <a class="scroll" href="<?php echo site_url();?>login">
         <div class="col-md-3 w3_soulgrid">
            <i class="fa fa-comments-o" aria-hidden="true"></i>
            <h3>Interact</h3>
            <p>Become a member and start Conversation</p>
         </div>
      </a>
      <div class="clearfix"> </div>
   </div>
</div>
<div class="w3layouts_featured-profiles">
   <div class="container">
      <div class="agile_featured-profiles">
         <h2>Success Stories</h2>
         <img src="images/title-bottom.png" class="title-btm">
         <ul id="flexiselDemo3">
            <li>
                <?php if(isset($success_stories) && count($success_stories) > 0) { foreach($success_stories as $value) { ?>
               <div class="col-md-3 biseller-column">
                  <a href="<?php echo site_url();?>feedback">
                     <div class="profile-image">
                        <img src="<?php echo site_url();?>images/successstories/<?php echo $value['image'];?>" class="img-responsive" alt="profile image">
                        <div class="agile-overlay">
                           <h4><?php echo ucwords($value['title']);?></h4>
                           <p><?php echo stripcslashes(str_replace('\n','',$value['content']));?></p>
                        </div>
                     </div>
                  </a>
               </div>
              <?php } } else{
                echo "No Records Found!";
              }?>
            </li>
         </ul>
      </div>
   </div>
</div>
<script type="text/javascript" src="js/jquery.flexisel.js"></script><!-- flexisel-js -->	
<script type="text/javascript">
   $(window).load(function() {
   $("#flexiselDemo3").flexisel({
   	visibleItems:1,
   	animationSpeed: 1000,
   	autoPlay: false,
   	autoPlaySpeed: 5000,    		
   	pauseOnHover: true,
   	enableResponsiveBreakpoints: true,
   	responsiveBreakpoints: { 
   		portrait: { 
   			changePoint:480,
   			visibleItems:1
   		}, 
   		landscape: { 
   			changePoint:640,
   			visibleItems:1
   		},
   		tablet: { 
   			changePoint:768,
   			visibleItems:1
   		}
   	}
   });
   
   });
    
</script>
<div class="w3layous-story text-center">
   <div class="container">
      <h3>ManaShaadi.com welcomes you to register free and search partner. with your ideal requirements </h3>
      <img src="images/title-bottom.png" class="title-btm">
      <h4>REGISTER NOW TO FIND YOUR MANAMATRIMONY! </h4>
      <h4><a href="<?php echo site_url();?>register">Register</a></h4>
   </div>
</div>