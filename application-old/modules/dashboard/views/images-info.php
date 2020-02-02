<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.log-form {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}
.page-header {
    padding-bottom: 9px;
     margin: 40px 0 20px ; 
    border-bottom: 1px solid #eee;
}
.view-profile{
background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<div> 
   <div id="page-inner" style="margin-top:60px; background:#F2f2f2;">
       
        <div class="container">
           <div class="col-xs-12">
               
               <div class="col-xs-3 no-padding">
                                  <div class="sidebar" style="margin-top:98px">
                    <div class="dropdown-content">
                    <a class="<?php if($this->uri->segment(1)=="dashboard" && $this->uri->segment(2)=="") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard">Basic Details</a>
                    <a class="<?php if($this->uri->segment(2)=="religion") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/religion">Religion Details</a>
                    <a class="<?php if($this->uri->segment(2)=="professionalinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/professionalinfo">Education & Profession Details</a>
                    <a class="<?php if($this->uri->segment(2)=="parentsinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/parentsinfo">Parents Details</a>
                    <a class="<?php if($this->uri->segment(2)=="siblingsinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/siblingsinfo">Sibling Details</a>
                    <a class="<?php if($this->uri->segment(2)=="imagesinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/imagesinfo">Update Images</a>
                    
                    </div>
                </div>
                   
               </div>
               
               <div class="col-xs-9">
                   <div class="col-xs-12 no-padding">
         <div class="col-xs-12 no-padding">
      <h1 class="page-header">
         <i class="fa fa-picture-o" aria-hidden="true"></i> Update Images</small>
      </h1>
   </div>
</div>
<?php if ($this->session->flashdata('msg_succ') != '') { ?>
    <div class="alert alert-block alert-success" style="clear:both">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <p>
    <?php echo $this->session->flashdata('msg_succ') ? $this->session->flashdata('msg_succ') : ''; ?>
        </p>
    </div>
<?php } ?>
 <div class="pull-right"style="margin-bottom:10px;">
     <?php if($imagescount <= 2) { ?>
    <a  href="<?php echo site_url(); ?>dashboard/imagesadd"  class="btn btn-primary">
         Add More Images
    </a><?php } ?>
</div>

<div class="col-xs-12 col-md-12 view-profile" >
  
      <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" aria-describedby="dynamic-table_info" style="margin-top:20px">
         <thead>
            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="S.No: activate to sort column ascending">S.No</th>
            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending">Image</th>
            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th>
            </tr>
         </thead>
         <tbody>
             <?php $i=0;foreach($images_info as $value) { $i++;?>
            <tr class="odd">
               <td class=" "><?php echo $i;?></td>
               <td class=" "><img style="width:200px;height:150px;" src="<?php echo site_url();?>images/profilepics/<?php echo $value['image'];?>"></td>
               <td class=" "><span <?php if($value['status']== 1){ echo " class='label label-success arrowed-in arrowed-in-right'"; } elseif($value['status']== 0){ echo "class='label label-danger arrowed'"; } ?>><a href="JavaScript:if(confirm('Are you sure want to Chanage the Status?')==true){window.location='<?php echo site_url();?>dashboard/imagestatus/<?php echo $value['id']?>/<?php echo $value['status'];?>';}" style="color:#FFF; text-decoration:none;"><?php if($value['status']== 1){ echo "Active"; } elseif($value['status']== 0){ echo "De-Active"; } ?></a></span></span></td>
               <td class=" ">
                  <div class="hidden-sm hidden-xs action-buttons">
                     <a class="btn btn-warning" href="<?php echo site_url();?>dashboard/imagesedit/<?php echo $value['id'];?>">
                     <!--<i class="ace-icon fa fa-pencil bigger-130"></i>-->Edit
                     </a>
                     <a class="btn btn-danger" href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo site_url();?>dashboard/delete/<?php echo $value['id'];?>';}">
                     <!--<i class="ace-icon fa fa-trash-o bigger-130"></i>-->
                     Delete
                     </a>
                  </div>
                  <div class="hidden-md hidden-lg">
                     <div class="inline pos-rel">
                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                           <li>
                              <a href="http://motherlapfoundation.org/beta/admin/successstories/edit/2" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
                              <span class="green">
                              <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                              </span>
                              </a>
                           </li>
                           <li>
                              <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='http://motherlapfoundation.org/beta/admin/successstories/delete/2';}" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
                              <span class="red">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                              </span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
  
</div>
</div> 
               </div>
               

       
     
</div>