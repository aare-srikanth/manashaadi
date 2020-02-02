<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <button href="#display_form" class="btn" data-toggle="collapse"> Profile Validation</button>
            </div>
            <div class="card-body" id="display_form bg">
                <div class="d-flex justify-content-center">
                    <form class="form-horizontal" method="POST" action="<?php echo site_url(); ?>admin/Admin_pv/pv_result">
                        <div class="row">
                            <div class="col-form-label form-inline">
                                <label> <b>Gender : </b> </label>
                                <label style="padding-left: 10px;" class="radio-inline"><input type="radio" name="gender"  value="female"> Bride</label>
                                <label style="padding-left: 25px;" class="radio-inline"><input type="radio" name="gender"  value="male"> Groom</label>
                                <label style="padding-left: 25px;" class="radio-inline"><input type="radio" name="gender" checked value=""> Both</label>
                            </div>
                            <div class="col-form-label form-inline">
                                <label style="padding-left: 40px;"><b>Payment : </b></label>
                                <label style="padding-left: 10px;" class="radio-inline"><input type="radio" name="payment"  value="paid"> Paid</label>
                                <label style="padding-left: 25px;" class="radio-inline"><input type="radio" name="payment" value="free"> Free</label>
                                <label style="padding-left: 25px;" class="radio-inline"><input type="radio" name="payment" checked value=""> Both</label>
                            </div>
                            <div class="col-form-label form-inline">
                                <label class="form-group form-inline" style="margin-left:30px;"><b>Profile ID</b></label>
                                <input type="text" style="margin-left:30px;" class="form-control" name="profileid" placeholder="Enter Profile ID" id="profileid">
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 form-group" style="padding-right: 100px;">
                                <label style="padding-bottom:14px;">
                                    <b>All Phones</b>
                                </label>
                                <input type="text" name="allphones" class="form-control" style="width:300px;">

                            </div>

                            <div class="col-md-4" style="padding-right: 100px">
                                <label style="padding-bottom:14px;">
                                    <b>All E-Mails</b>
                                </label>
                                <input type="text" name="allemails" class="form-control" style="width:300px;">

                            </div>

                            <div class="col-md-4" style="padding-right: 100px">
                                <label style="padding-bottom:14px;">
                                    <b>Application Status</b>
                                </label>
                                <select name="app_status" id="app_status" class="form-control" style="width:300px;">
                                    <option value="" selected="selected">Select All</option>
                                    <option value="1">Active</option>
                                    <option value="2">Deleted</option>
                                    <option value="3">Settled</option>
                                    <option value="4">Inactive</option>
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4" style="padding-right: 100px">
                                <label style="padding-bottom:14px;">
                                    <b>Surname</b>
                                </label>
                                <input type="text" name="surname" class="form-control">


                            </div>

                            <div class="col-md-4" style="padding-right: 100px">
                                <label style="padding-bottom:14px;">
                                    <b>Name</b>
                                </label>
                                <input type="text" name="name" class="form-control">


                            </div>

                            <div class="col-md-4" style="padding-right: 100px">
                                <label style="padding-bottom:14px;">
                                    <b>Caste</b>
                                </label>
                                <select class="form-control" name="caste" id="caste">
                                    <option value="">Select Caste</option>
                                    <?php foreach ($castes as $value) { ?>
                                        <option value="<?php echo $value['caste']; ?>"><?php echo stripcslashes($value['caste']); ?></option><?php } ?>
                                </select>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-form-label form-inline ">
                                <label> <b>DOR From : </b></label>
                                <input type="text" style="margin-left:10px; width:120px;" class="form-control" name="dor_form" id="dor_from">
                                <label style="margin-left:20px;"> <b>TO : </b></label>
                                <input type="text" style="margin-left:10px; width:120px;" class="form-control" name="dor_to" id="dor_to">

                                <label style="margin-left:30px;"> <b>Native : </b></label>
                                <input type="text" style="margin-left:10px; width:300px;" class="form-control" placeholder="Enter Area Name" name="area_name" id="area_name">
                            </div>
                            <div class="col-form-label form-inline" style="margin-left:30px;">
                                <div class="form-group form-inline">
                                    <label class="form-group"><b>Employee:</b></label>
                                    <select class="form-group form-control" style="margin-left:10px;" name="emp_drop_down" id="emp_drop_down">
                                        <option value="0" selected="selected">Select Employee</option>
                                        <?php $data = $employees["employees"];
                                        foreach ($data as $employee) {  ?>
                                            <option value="<?php echo $employee["emp_id"]; ?>"> <?php echo $employee["emp_name"]; ?> </option> <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-form-label form-inline">
                                <div class="col-form-label form-inline ">
                                    <label class="form-group"><b>Result Display Type:</b></label>
                                    <label style="padding-left: 25px;" class="radio-inline "><input type="radio" name="disp_type" checked value="grid"> Grid</label>
                                    <label style="padding-left: 10px;" class="radio-inline form  "><input type="radio" name="disp_type" value="slide"> Slider</label>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row col-md-4 offset-md-3 ">

                            <pre>           </pre>

                            <input type="submit" class="submit" value="Search" name="submit" id="submit">


                            <pre> </pre>

                            <button type="Reset" class="btn btn-link" id="Reset">Reset</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>