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
			<a href="<?php echo PRADEEP_ADMIN;?>Database">Database</a>
		</li>
		<li class="active">View</li>
	</ul>
  </div>
  <div class="page-content">
	<h3 class="header smaller lighter blue">
Database View	</h3>
	<div class="row">
	  <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
	    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
		  <div class="formbg">
			<div class="group">
			  <div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Name : </label>
				<div class="col-sm-10 margin-top add-view">
				 <?php echo $record['first_name'] . ' ' . $record['last_name']; ?>
				</div>
			  </div>
			  
			  <div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Email : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['email']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Mobile : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['mobile']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Mobile1 : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['mobile1']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Mobile2 : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['mobile2']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Landline : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['landline']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group add-view ">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Landline1 : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['landline1']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Landline2 : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['landline2']))); ?>
				  </div>
				</div>
			  
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Website Details : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['web_url']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> City : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['city']))); ?>
				  </div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Area : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['area']))); ?>
				  </div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> State : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['state']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Category : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['category']))); ?>
				  </div>
				</div>
				
				<div class="space-4"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Specilization : </label>
				  <div class="col-sm-10 add-view">
					<?php echo (stripslashes(str_replace('\r\n','',$record['specilization']))); ?>
				  </div>
				</div>
				
		    </div>
		  </div>
		</div>
	    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		 
		   
		  <div class="space-4"></div>
		  <?php /*<div class="formfooter">
			<div class="pull-left">
			  <a href="<?php echo PRADEEP_ADMIN;?>Database/edit" class="btn btn-sm btn-primary">Edit</a>
			  <a href="<?php echo PRADEEP_ADMIN;?>Database" class="btn btn-sm btn-danger">Cancel</a>
			</div>
		  </div>*/?>
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
