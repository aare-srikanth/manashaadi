<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
	<script type="text/javascript">
	  try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
	</script>
	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="<?php echo PRADEEP_ADMIN;?>">Home</a>
		</li>
		<li>
			<a href="<?php echo PRADEEP_ADMIN;?>registeredusers">Users</a>
		</li>
		<li class="active">View</li>
	</ul><!-- .breadcrumb -->
  </div>
  <div class="page-content">
	<h3 class="header smaller lighter blue">
Users View	</h3>
	<div class="row">
	  <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
	    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
		  <div class="view-content">
		      
		      <h3>BASIC DETAILS</h3>
		      <div class="row">
		          <div class="col-md-6">
		              <p>Name : <span><?php echo ucwords($record['first_name'] . ' ' . $record['last_name']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Profile Id : <span><?php echo $record['profile_id'];?></span></p>
		          </div>
		           <div class="col-md-6">
		              <p>Mobile : <span><?php echo $record['mobile'];?></span></p>
		          </div>
		           <div class="col-md-6">
		              <p>Gender : <span><?php echo ucwords($record['gender']);?></span></p>
		          </div>
		           <div class="col-md-6">
		              <p>Date of birth : <span><?php echo $record['date'];?>- <?php echo $record['month'];?> - <?php echo $record['year'];?></span></p>
		          </div>
		           <div class="col-md-6">
		              <p>Age : <span><?php echo $record['age'];?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Registred On : <span><?php echo $record['registered_on'];?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Living In : <span><?php echo ucwords($record['living_in']);?></span></p>
		          </div>
		      </div>
		      <h3>RELIGION DETAILS</h3>
		      <div class="row">
		          <div class="col-md-6">
		              <p>Marital Status : <span><?php echo ucwords($record['living_in']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Mother Tounge : <span></span><?php echo ucwords($record['mother_tounge']);?></p>
		          </div>
		           <div class="col-md-6">
		              <p>Height : <span><?php echo ucwords($record['height']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Religion : <span><?php echo ucwords($record['religion']);?></span></p>
		          </div>
		           <div class="col-md-6">
		              <p>Caste : <span><?php echo ucwords($record['caste']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Subcaste : <span><?php echo ucwords($record['sub_caste']);?></span></p>
		          </div>
		           <div class="col-md-6">
		              <p>Gothram : <span><?php echo ucwords($record['gothram']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Place Of Birth : <span><?php echo ucwords($record['place_of_birth']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Time Of Birth : <span><?php echo ucwords($record['time_of_birth']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Star : <span><?php echo ucwords($record['star']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Raasi : <span><?php echo ucwords($record['raasi']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Dosham : <span><?php echo ucwords($record['dosham']);?></span></p>
		          </div>
		      </div>
		      <h3>EDUCATION DETAILS</h3>
		      <div class="row">
		          <div class="col-md-6">
		              <p>Highest Education : <span><?php echo ucwords($record['heighst_education']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Education Degree : <span><?php echo ucwords($record['education_degree']);?></span></p>
		          </div>
		      </div>
		      <h3>PROFESSIONAL DETAILS</h3>
		      <div class="row">
		          <div class="col-md-6">
		              <p>Employee In : <span><?php echo ucwords($record['employee_in']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Profession : <span><?php echo ucwords($record['occupation']);?></span></p>
		          </div>
		      </div>
		      <h3>GROOM'S CURRENT LOCATION</h3>
		      <div class="row">
		          <div class="col-md-6">
		              <p>State : <span><?php echo $record['state'];?></span></p>
		          </div>
		           <div class="col-md-6">
		              <p>City : <span><?php echo $record['city'];?></span></p>
		          </div>
		           <div class="col-md-6">
		              <p>Monthly Income : <span><?php echo ucwords($record['annual_income']);?></span></p>
		          </div>
		      </div>
		      <?php if($record['about_profession']!="") { ?>
		       <h3>About Profession</h3>
		      <div class="row">
		          <div class="col-md-12">
		              <p><?php echo stripcslashes($record['about_profession']);?></p>
		          </div>
		          
		      </div>
		      <?php } ?>
		        <?php if($record['about_me']!="") { ?>
		      <h3>ABOUT ME</h3>
		      <div class="row">
		          <div class="col-md-12">
		              <p><?php echo stripcslashes($record['about_me']);?></p>
		          </div>
		          
		      </div> <?php } ?>
		      <h3>PARENTS DETAILS</h3>
		      <div class="row">
		          <div class="col-md-6">
		              <p>Father Name : <span><?php echo ucwords($record['father_name']);?></span></p>
		          </div>
		            <div class="col-md-6">
		              <p>Father Mobile : <span><?php echo $record['father_mobile'];?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Father Occupation : <span><?php echo ucwords($record['father_profession']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Mother Name : <span><?php echo ucwords($record['mother_name']);?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Mother Occupation : <span><?php echo ucwords($record['mother_profession']);?></span></p>
		          </div>
		      </div>
		      <h3>SIBLINGS DETAILS</h3>
		      <div class="row">
		          <div class="col-md-6">
		              <p>Number Of Brothers : <span><?php echo $record['no_of_brothers'];?></span></p>
		          </div>
		          <div class="col-md-6">
		              <p>Number Of Sisters : <span><?php echo $record['no_of_sisters'];?></span></p>
		          </div>
		      </div>
		      <h3>Images</h3>
		      <div class="row">
		          <?php $images = $this->my_model->get_images($record['user_id']);
		          foreach($images as $value) { ?>
		          <div class="col-md-3">
		             <img src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>" style="width:200px">
		          </div>
		         <?php } ?>
		      </div>
		  </div>
		</div>
	    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		 
		   
		  <div class="space-4"></div>
	    </div>
	  </form>
	</div>
  </div>
</div>
</div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
</div>
<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo site_url();?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>
<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='<?php echo site_url();?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo site_url();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo site_url();?>/assets/js/typeahead-bs2.min.js"></script>
<!-- ace scripts -->
<script src="<?php echo site_url();?>/assets/js/ace-elements.min.js"></script>
<script src="<?php echo site_url();?>/assets/js/ace.min.js"></script>

<link rel="stylesheet" href="<?php echo site_url();?>/assets/css/jquery-ui-1.10.3.full.min.css" />       
<script src="<?php echo site_url();?>/assets/js/jquery-ui-1.10.3.full.min.js"></script>

		
<script type="text/javascript">
jQuery(function($) {
	$( "#accordion" ).accordion({
		collapsible: true ,
		heightStyle: "content",
		animate: 250,
		header: ".accordion-header"
	}).sortable({
		axis: "y",
		handle: ".accordion-header",
		stop: function( event, ui ) {
			ui.item.children( ".accordion-header" ).triggerHandler( "focusout" );
		}
	});
});
</script>

</body>
</html>
