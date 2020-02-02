
<style>
    #cust_call_log_list {  list-style-type: none;  height:95%; overflow: auto; color:black;}

    #cust_call_log_list li { margin-top:10px; width:99%; }

    .btn_save_reg { margin-left:20px;}

    #btn_view_call_history{ width:60%; height: 100%; float: left; font-size:1.2em; }

    #btn_log_call_history{  width:60%; height: 100%; float: left; font-size:1.2em;}

    .cust_call_hsitory_tab {margin-top: 20px;width: 100%;  height: 40px;    float:left;}

    .form-inline > * {     margin:5px 3px;  }

    .btn-ms-main {     background-color: #fd9f17; }
</style>


<div class="container">
    <div class="w-100 p-3" id="notification">
    </div>

    <div class="row">
        <div class="col-md-2 form-group form-inline">
                <label class="form-group">Employee:</label>
                <select class="form-group form-control" id="emp_drop_down"> </select>
        </div>
        
        <div class="col-md-2 form-group form-inline">
                <label class="form-group">DOR :From</label>
                <input type="text" class="form-group form-control" style="width:120px;" id="dor_from" /> 
        </div>

        <div class="col-md-2 form-group form-inline">
                <label class="form-group">To : </label>
                <input type="text" class="form-group form-control" style="width:120px;" id="dor_to" />
        </div>

        <div class="col-md-2 form-group form-inline">
                <label class="form-group">Application Status :</label>
                <select class="form-group form-control" id="app_status"> 
                <option value="0">Select</option><option value="1">Active</option><option value="2">Deleted</option><option value="3">Closed</option>
                </select>  
        </div>

        <div class="col-md-2 form-group form-inline">
            <button class="form-group form-control btn btn-warning" id="search_prof_emp" > Search </button>
        </div>  
    </div>
    <hr>
    <!-- profiles assigned information start -->
    <div id="info_div" class="row form-group form-inline">
        <lable> Total Profiles::  </lable>    
        <lable id="profile_count" style="font-size:1.5vw;" > </lable>
        <lable> Present Profile Loaded ::  </lable>
        <lable id="cur_profile" style="font-size:1.5vw;"> </lable>   
    </div>
    <hr>
    <!-- single profile details start -->
    <div id="user_profile_result" class="row h-100">
        <div class="col-md-3">
            <span class="btn btn-warning" style="font-size:1vw;position: absolute;top:50%;" id="prof_prev_action">Prev</span>
        </div>

        <div id="prof_display" class="col-md-10 h-100">
            <div class="row">
                <div class="col-md-3">
                    <div id="cust_profile_info" style="font-size:0.8vw;  padding-top:20px; border: 1px solid gray; padding-bottom:2vw;" >
                        <div style="display: flex; justify-content: center; ">
                            <img id="profile_img" src="<?php echo base_url(); ?>assets/img/img_avatar.png"  width=250px; height=250px;"  /> </br></br>
                        </div>
                        </br>
                        <div style="font-size:1vw; width:100%; margin-left:2%;float:left; "  >
                            <div class="form-inline form-group" >
                                <label>DOR:</label>
                                <label id="cust_dor"></label> 
                                <label> : </lable> 
                                <label id="cust_edit_profile"></lable> 
                            </div>
                            <div class="form-inline form-group">
                                <label >Name : </label>
                                <label  id="cust_name"></label>  <label id="cust_ms_profile_id"></label>
                            </div>
                            <div class="form-inline form-group">
                                <label >Mobile No: </label>
                                <label  id="cust_mobile_no"></label>
                            </div>
                            <div class="form-inline form-group">
                                <label >Father No: </label>
                                <label  id="cust_father_no"></label>
                            </div>      
                            <div class="form-inline form-group">
                                <label>Reminder Date: </label>
                                <input type="text" class="form-control" style="width:100px;" id="reminder_date">
                                <button class="btn btn-warning form-control"  id="btn_save_reminder">Reminder</button>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div col="row" id="cust_call_history" style="float:left; height:80%; border: 1px solid gray;">
                        <input type='hidden' id="cust_profile_id" >
                        
                        <div style="width:100%;float:left; height:3em; margin-top:1.5em;display: flex; align-items: right; justify-content: center;">
                            <div style="width:50%;float:left; height:3em;padding-left:2vw;"> 
                                <div class="form-inline form-group">
                                    <label class="form-group" style="font-size:1vw;">Reg Fee: </label>
                                    <input type="text" style="width:100px;" class="form-control form-group" id="reg_fee" />
                                    <input type="button" class="btn btn-warning form-control form-group" id="btn_save_reg_fee" value="Save" />
                                </div> 
                            </div>
                            <div style="width:50%;float:left; height:3em; display: flex;  align-items: right;  justify-content: center;"> 
                                <div class="form-inline form-group">
                                    <label class="form-group" style="font-size:1vw;">Sa Fee: </label>
                                    <input type="text" class="form-control form-group"  style="width:100px;"  id="sa_fee" /> 
                                    <input type="button" class="btn btn-warning form-group" id="btn_save_sa_fee" value="Save" />
                                </div> 
                            </div>
                        </div>
                        <!-- fee related stuff end -->

                        <!-- call data view edit start -->
                        <div class="cust_call_hsitory_tab" style="float:left;">
                            <div style="width:50%;float:left;display: flex;  align-items: right; justify-content: center; height:3em;"> 
                                <div id="btn_view_call_history"  class="btn"> View Call history </div>
                            </div>
                            <div style="width:50%;float:left;display: flex; align-items: center;  justify-content: center; height:3em;"> 
                                <div id="btn_log_call_history" class="btn"> Call Entry </div> 
                            </div>
                        </div>
                        <!-- call data view edit end -->
                

                        <div style="width:100%; height: 80%;float:left;">
                            
                            <!-- call data start -->
                            <div class="cust_call_hsitory_list list-group" style="width:100%; float:left; padding-left:1vw; margin-top: 1vw; ">
                                <ul id="cust_call_log_list"> </ul>
                            </div>
                            <!-- call data end -->

                            <!-- call data entry start  -->
                            <div class="cust_call_hsitory_log" style=" width: 100%;font-size:1vw; float:left; height: 88%; margin-top:20px;">
                                <div class="form-inline form-group" style=" padding-left:1.5em; float:left; width:100%;">
                                    <div style="width:25%;float:left;  ">
                                        <lable style="margin-right:3.2em;"> Call Type:</lable>
                                    </div>
                                    <div style="width:20%;float:left;">
                                        <input type="radio" class="radio-inline" checked name="call_type" value="cl_type_incoming"> Incoming Call 
                                    </div>
                                    <div style="width:20%;float:left;">
                                        <input type="radio" class="radio-inline" name="call_type" value="cl_type_outgoing"> Outgoing Call 
                                    </div>
                                    <div style="width:20%;float:left;">
                                        <input type="radio" class="radio-inline" name="call_type" value="cl_type_memo"> Memo 
                                    </div>
                                </div>
                                <div class="form-inline form-group" style="padding-left:1.5em; float:left; width:100%;">
                                    <div style="width:25%;float:left;">
                                        <lable style="margin-right:3.2em;;">Call Success:</lable> 
                                    </div>
                                    <div style="width:20%;float:left;">
                                        <input type="radio"  class="radio-inline form-group" checked name="call_success_type" value="cl_status_connected"> Connected
                                    </div>
                                    <div style="width:20%;float:left;">
                                        <input type="radio" class="radio-inline form-group" name="call_success_type" value="cl_status_not_connected"> Not Connected
                                    </div>
                                    <div style="width:20%;float:left;">
                                        <input type="radio"  class="radio-inline form-group" name="call_success_type" value="cl_status_switch_off"> Switched Off 
                                    </div>
                                    
                                </div>
                                <div class="form-inline form-group" style="padding-left:1.5em; float:left; width:100%;">
                                    <lable style="margin-right:3.2em;">Call Discussion:</lable> 
                                    <textarea rows = "10" style="width:96%;" class="form-control" id="call_descption" name = "description" > </textarea>
                                    </br>
                                    <div style="width:100%; float:left; height:50px;">
                                        <button id="btn_save_call_log" 
                                            style="width:20%; float:left; margin-left:40%; height:100%;" 
                                            class="btn btn-warning form-control"
                                        > Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- call data entry end -->
                        </div> 

                    </div>
                </div>
            </div>
        </div>
        <!-- main profile info area  stop -->

        <!-- next profile selection start -->
        <div class="col-md-2">
            <span class="btn btn-warning" style="position: absolute;top:50%;font-size:1vw;" id="prof_next_action">Next</span>
        </div>
        <!-- next profile selection end -->
    </div>
    <!-- single profile details end -->
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(document).ready(function() {  

        var g_profile_list = [];
        var g_profile_postion =1;

     

        $('#prof_prev_action').click(function(){
            var len = g_profile_list.length;
            if(len !=0)
            {
                if(g_profile_postion > 1 ){
                    g_profile_postion--;
                    $("#cur_profile").html(g_profile_postion);
                    getUserInormation(g_profile_list[g_profile_postion-1].user_id);
                    if(1 >= g_profile_postion){
                        $("#prof_prev_action").addClass('disabled');
                    }else{
                        $("#prof_prev_action").removeClass('disabled');
                        $("#prof_next_action").removeClass('disabled');
                    }
                }else{
                    $("#prof_prev_action").addClass('disabled');    
                }
            }
        });

        $('#prof_next_action').click(function(){
            var len = g_profile_list.length;
            console.log('lsdfsd');
            if(len !=0)
            {                
                if(len > g_profile_postion ){
                    g_profile_postion++;
                    $("#cur_profile").html(g_profile_postion);
                    getUserInormation(g_profile_list[g_profile_postion-1].user_id);
                    if(len < g_profile_postion){
                        $("#prof_next_action").addClass('disabled');
                    }else{
                        $("#prof_next_action").removeClass('disabled');
                        $("#prof_prev_action").removeClass('disabled');
                    }
                }
            }
        });

       

        function showSuccessAlert(message){
            var alert ='<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong> '+message+'</div>';
            $('#notification').html(alert);
                window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 3000);
        }

        function showErrorAlert(message){
            var alert ='<div class="alert alert-danger"> <strong>Error!</strong> '+message+' </div>';
            $('#notification').html(alert);
                window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 3000);
            
        }

        function loadEmployeeData(){
            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/get_employees", 
                dataType: 'json',
                success: function(result){
                    if(result.success == "1")
                    {
                        var employees = result.data.employees; 
                        var option_data ='<option value="0" >Select</option>';
                        employees.forEach(function(employee){
                            if(employee["emp_id"] == <?php echo $user_id ;?>){
                                option_data +='<option value="'+employee["emp_id"]+'" selected >'+employee["emp_name"]+'</option>';
                            }else{
                                option_data +='<option value="'+employee["emp_id"]+'" >'+employee["emp_name"]+'</option>';  
                            }
                        });
                        $('#emp_drop_down').html(option_data);
                    }else{
                        console.log("errorr");
                    }
                },
                error: function(xhr, error){
                    console.log("error");
                }
            });
        }  

        $('#cust_profile_info').hide();
        $('#cust_call_history').hide();

        $(".cust_call_hsitory_log").hide();
        $(".cust_call_hsitory_list").show();

        $("#btn_view_call_history").toggleClass('btn-warning');
        $("#btn_log_call_history").toggleClass('btn-default');


        loadEmployeeData();
        loadProfileList();
        
        $("#btn_log_call_history").click(function() {
            show_log_box();
        });		

        function show_history()
        {
            $(".cust_call_hsitory_log").hide();
            $(".cust_call_hsitory_list").show();

            $("#btn_view_call_history").addClass('btn-warning').removeClass('btn-default');
            $('#btn_log_call_history').addClass('btn-default').removeClass('btn-warning');

        }

        function show_log_box(){
            $(".cust_call_hsitory_log").show();
            
            $(".cust_call_hsitory_list").hide();
            $("#btn_view_call_history").addClass('btn-default').removeClass('btn-warning');
            $('#btn_log_call_history').addClass('btn-warning').removeClass('btn-default');

        }

        $("#btn_view_call_history").click(function() {  
            show_history();
        });	

        $('#search_prof_emp').click(function(){
            var em_selected = $('#emp_drop_down').find("option:selected").val();
            var dor_from = $('#dor_from').val().trim();
            var dor_to = $('#dor_to').val().trim();
            var app_status =   $('#app_status').find("option:selected").val().trim();

            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/get_association_search", 
                dataType: 'json',
                data:{
                    emp_id: em_selected,
                    dor_from: dor_from,
                    dor_to: dor_to,
                    app_status: app_status
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        var users = result.data.users;
                        if(users.length > 0)
                        {            
                            recordsFound();
                            parseProfileList(users);
                            
                        }else{
                            norecordsFound();
                        }
                    }else{
                        norecordsFound();
                    }
                },
                error: function(xhr, error){
                    norecordsFound();
                }
            });            
        });	

        function parseProfileList(users){
            var first_cust_id = '';
            g_profile_list = [];
            g_profile_postion =0;

            if(Array.isArray(users))
            {
                users.forEach(function(element){
                    if(first_cust_id ==''){
                        first_cust_id = element["user_id"];
                    }
                    g_profile_list.push(element);
                    g_profile_postion=1;
                });
            }else{
                g_profile_list.push(users);
                g_profile_postion=1;
            }
            $('#profile_count').html(g_profile_list.length);
            $('#cur_profile').html(g_profile_postion);

            if(first_cust_id != ''){
                $('#cust_profile_info').show();
                $('#cust_call_history').show();
                $('#cust_profile_id').val(first_cust_id);
                g_profile_postion=1;
                $("#prof_prev_action").addClass('disabled');
                getUserInormation(first_cust_id);
                
            }
            
        }
        
        function norecordsFound() {
            $('#user_profile_result').hide();
            $('#info_div').hide();
            showErrorAlert("No records found");
        }

        function recordsFound() {
            console.log("recordsFound");
            $('#user_profile_result').show();
            $('#info_div').show();
        }

        function loadProfileList(){
            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/get_emp_associated_profiles", 
                dataType: 'json',
                data:{
                    emp_id: <?php echo $user_id ?>
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        var users = result.data.users;
                        if(users.length > 0)
                        {            
                            recordsFound();
                            parseProfileList(users);
                            
                        }else{
                            norecordsFound();
                        }
                    }else{
                        console.log("errorr");
                        norecordsFound();
                    }
                },
                error: function(xhr, error){
                console.log("error");
                }
            });
        }

        function getUserInormation(userId) {
            console.log("getUserInormation" + userId);
            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/get_user_info", 
                dataType: 'json',
                data:{
                    user_id:userId
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        if(result.data.found == 1){
                            console.log(result);
                            $("#prof_display").show();
                            var profile_url ='';
                            if(result.data.user.profile_url == "img_avatar.png"){
                                profile_url = "<?php echo base_url(); ?>assets/img/"+ result.data.user.profile_url;
                            }else{
                                profile_url = result.data.user.profile_url;
                            }
                            $('#profile_img').attr({ "src": profile_url });
                            var profile_url = "<?php echo base_url(); ?>assets/img/"+ result.data.user.profile_url;
                            $('#profile_img').attr({ "src": profile_url });
                            $('#cust_profile_id').val(result.data.user.user_id);
                            $('#cust_name').html(result.data.user.user_name);
                            $('#cust_ms_profile_id').html('<a href="https://www.manashaadi.com/admin/admin_search/viewprofile/'+result.data.user.user_id+'" target="_blank" >( '+result.data.user.user_ms_id+' )</a>');
                            $('#cust_edit_profile').html('<a href="https://www.manashaadi.com/admin/edit_profile/'+result.data.user.user_id+'" target="_blank" >( Edit Profile )</a>');
                            
                            $('#cust_mobile_no').html(result.data.user.user_mobile);  
                            $('#cust_dor').html(result.data.user.user_dor );
                            $('#cust_father_no').html(result.data.user.father_mobile );
                            $('#reg_fee').val(result.data.user.reg_fee);
                            $('#sa_fee').val(result.data.user.sa_fee);
                            $('#reminder_date').val(result.data.user.rem_date);
                            get_chat_logs();
                            setDatePicker();
                        }else{
                            showErrorAlert("User infomation not correct!");
                            $("#prof_display").hide();
                        }
                    }else{
                        $("#prof_display").hide();
                        showErrorAlert("Unable to retrived user information");
                    }
                },
                error: function(xhr, error){
                    $("#prof_display").hide();
                    showErrorAlert("Unable to retrived user information");
                }
            });
        }    

        $('#btn_save_reg_fee').click(function(e){
            var reg_fee = $('#reg_fee').val();
            var cust_profile_id = $('#cust_profile_id').val();
            console.log(reg_fee);
            console.log(cust_profile_id);
            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/save_customer_reg_fee", 
                dataType: 'json',
                data:{
                    cust_profile_id:cust_profile_id,
                    cust_reg_fee:reg_fee
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        showSuccessAlert("Registration Fees saved successfully");
                    }
                },
                error: function(xhr, error){
                    showErrorAlert("Problem in saving Registration Fees");
                }
            });
        });

        $('#btn_save_sa_fee').click(function(e){
            var sa_fee = $('#sa_fee').val();
            var cust_profile_id = $('#cust_profile_id').val();
            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/save_customer_sa_fee", 
                dataType: 'json',
                data:{
                    cust_profile_id:cust_profile_id,
                    cust_sa_fee:sa_fee
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        showSuccessAlert("Registration Fees saved successfully");
                    }
                },
                error: function(xhr, error){
                    showErroAlert("Problem in saving Registration Fees");
                }
            });
        });

        function closeAndShowSucces(){
            $('#call_descption').val("");
            show_history();
            get_chat_logs();

        }

        function get_chat_logs(){
            var cust_id = $('#cust_profile_id').val();
            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/get_call_log", 
                dataType: 'json',
                data:{
                    cust_id : cust_id
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        var list = result.data.call_log;
                        var list_items ='';
                        list.forEach(function(element){
                            var ac_cl_suc = element.cl_success ;
                            var cl_su = (ac_cl_suc == 'cl_status_not_connected') ? ( "Not Connected"):( (ac_cl_suc == 'cl_status_connected') ? ("Connected"): ("Switched Off") );
                            if(element.cl_type == "cl_type_outgoing"){
                                list_items += '<li>';
                                list_items += '<div class="card list-group-item-success list-group-item ">';
                                list_items += '<div class="card-body">';
                                list_items += '<h5 class="card-title"><b>Outgoing Call </b>  |  '+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h5>';
                                // list_items += '<h6 class="card-subtitle mb-2 text-muted">'+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h6>';
                                list_items += '<h4 class="card-text" style="font-size:1vw;">'+element.cl_description+'</h4>';
                            }
                            else if(element.cl_type == "cl_type_incoming"){
                                list_items += '<li>';
                                list_items += '<div class="card list-group-item list-group-item-warning">';
                                list_items += '<div class="card-body">';
                                list_items += '<h5 class="card-title"><b>Incoming Call</b>  |  '+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h5>';
                                // list_items += '<h6 class="card-subtitle mb-2 text-muted">'+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h6>';
                                list_items += '<h4 class="card-text" style="font-size:1vw;">'+element.cl_description+'</h4>';                                
                            } else if(element.cl_type == "cl_type_memo"){
                                list_items += '<li>';
                                list_items += '<div class="card list-group-item list-group-item-info">';
                                list_items += '<div class="card-body">';
                                list_items += '<h5 class="card-title"><b>Memo</b>   |  '+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h5>';
                                // list_items += '<h6 class="card-subtitle mb-2 text-muted">'+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h6>';
                                list_items += '<h4 class="card-text" style="font-size:1vw;">'+element.cl_description+'</h4>';     
                            }
                            list_items += '</div>';
                            list_items += '</li>';
                        });
                        $('#cust_call_log_list').html(list_items);
                    }else{
                        showErrorAlert("Problem in retriving call logs");
                        $('#cust_call_log_list').html('');
                    }
                },
                error: function(xhr, error){
                    $('#cust_call_log_list').html("");
                    showErrorAlert("Problem in retriving call logs");
                }
            });
        }
        
        $('#btn_save_call_log').click(function(e){
            var cl_description = $('#call_descption').val().trim();
            var cl_success = $('input[name=call_success_type]:checked').val();
            var cl_type = $('input[name=call_type]:checked').val();
            var cust_id = $('#cust_profile_id').val();

            if(cl_description ==''){
                showErrorAlert("Please enter some information for log!");
            }else{
                $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/save_call_log", 
                dataType: 'json',
                data:{
                    cl_type: cl_type,
                    cl_success : cl_success,
                    cl_description: cl_description,
                    cust_id : cust_id,
                    cl_by: <?php echo $user_id ?>
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        closeAndShowSucces();
                        showSuccessAlert("Log saved successfully!");
                    }else{
                        showErrorAlert("Problem in saving log");

                    }
                },
                error: function(xhr, error){
                    showErrorAlert("Problem in saving log");
                }
            });
            }

            
        });

        $('#btn_save_reminder').click(function(e){
            var reminder_date = $('#reminder_date').val();
            var cust_id = $('#cust_profile_id').val();
            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>admin/ws/save_reminder", 
                dataType: 'json',
                data:{
                    cust_id : cust_id,
                    rem_date:reminder_date
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        showSuccessAlert("Reminder saved successfully!");
                    }else{
                        showErrorAlert("Problem in saving reminder!");
                    }
                },
                error: function(xhr, error){
                    showErrorAlert("Problem in saving reminder!");
                }
            });
        });

       

        function setDatePicker(){
            $( "#reminder_date").datepicker(
                {
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    dateFormat: 'yy-mm-dd'
                }
            );
        }

        $("#dor_from").datepicker(
            {
                showOtherMonths: true,
                selectOtherMonths: true,
                dateFormat: 'yy-mm-dd'
            }
        );

        $("#dor_to").datepicker(
            {
                showOtherMonths: true,
                selectOtherMonths: true,
                dateFormat: 'yy-mm-dd'
            }
        );
    } );  
</script>
