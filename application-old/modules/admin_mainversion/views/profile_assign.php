<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />  
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>  

<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>   
<div class="follow_up_header gen_container" id="notification">
</div>
<div class="em_prof_search" >
    <div class="form-inline ">    
        <div class="form-group">    
            <lable > Profile ID:<lable>
            <input type="text" class="form-control" id="profile_id" />  
            <button type="button" class="form-control btn btn-warning" id="btn_search_profile" > Search </button>
        </div>
    </div>
</div>

<hr>

<div id="profile_inforamtion_list" >

</div>

<script>
    $(document).ready(function() {  

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

        $.ajax({
            type: "POST",	
            url: "<?php echo base_url(); ?>index.php/ws/get_customers", 
            dataType: 'json',
            success: function(result){
                if(result.success == "1")
                {
                    var users = [];
                    users = result.data.users;
                    var employees = result.data.employees;
                    if(users.lenght>0){
                        console.log("error get_customers");    
                    }else{
                        parseList(users,employees);
                    }
                }else{
                    console.log("error get_customers");
                }
            },
            error: function(xhr, error){
                console.log("error get_customers");
            }
        });

        function parseList(users,employees){


            console.log("success get_customers");
            var table_data='<table id="MyTable" class="display" cellspacing="0"  width="100%">';
            table_data += ' <thead  style="background-color:#fd9f17; color:white;"><tr><th>MS ID</th><th>Name</th><th>Caste</th><th>Profile Owner</th><th></th></tr></thead><tbody>';
            users.forEach(function(element){
                table_data += '<tr>';
                table_data += '<td>'+element["user_ms_id"] +'</td>';
                table_data +='<td>'+element["user_name"] +'</td>';
                table_data += '<td>'+element["user_cast"] + '</td>';
                
                var option_data ='<option value="0" >Select</option>';
                employees.forEach(function(employee){
                    if(employee["emp_id"] == element["prof_owner"]){
                        option_data +='<option value="'+employee["emp_id"]+'" selected >'+employee["emp_name"]+'</option>';
                    }else{
                        option_data +='<option value="'+employee["emp_id"]+'" >'+employee["emp_name"]+'</option>';
                    }
                });
                table_data += '<td><select class="form-control">'+option_data + '</select></td>';
                table_data += '<td><button class="btn_assign btn btn-warning form-control" value="'+element["user_id"]+'" >Assign </button></td>';
                table_data += '</tr>';
            });
            table_data += ' </tbody></table>';
            $('#profile_inforamtion_list').html(table_data);
            set_table();
        }

        $('#btn_search_profile').click(function(e){
            console.log($('#profile_id').val());
            var membership_id = $('#profile_id').val().trim();
            $.ajax({
                type: "POST",	
                url: "<?php echo base_url(); ?>index.php/ws/get_customers", 
                dataType: 'json',
                data:{
                    customer_id: membership_id
                },
                success: function(result){
                    if(result.success == "1")
                    {
                        var users = [];
                        users = result.data.users;
                        var employees = result.data.employees;
                        if(users.lenght>0){
                            console.log("error get_customers");    
                        }else{
                            parseList(users,employees);
                        }
                    }else{
                        console.log("error get_customers");
                    }
                },
                error: function(xhr, error){
                    console.log("error get_customers");
                }
            });

        });

        function set_table(){
            $('#MyTable').DataTable( {  
                initComplete: function () {  
                this.api().columns().every( function () {  
                    var column = this;  
                    var select = $('<select><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )  
                        .on('change', function () {  
                            var val = $.fn.dataTable.util.escapeRegex(  
                                $(this).val()  
                            );  
                            column.search( val ? '^'+val+'$' : '', true, false ).draw();  
                        } );  
                        column.data().unique().sort().each( function ( d, j ) {  
                            select.append( '<option value="'+d+'">'+d+'</option>' )  
                        } );  
                    } );  
                }  
                } );  

            //    $('[name="MyTable_length"]').addClass('form-control form-inline');   


                $('.btn_assign').click(function(event){
                        var user_profile_id = $(this).val();
                        var employee_id = $(this).parent().parent().find("option:selected").val();
                        console.log(user_profile_id);
                        $.ajax({
                            type: "POST",	
                            url: "<?php echo base_url(); ?>index.php/ws/update_profile_owner", 
                            dataType: 'json',
                            data:{
                                cust_id:user_profile_id,
                                emp_id: employee_id
                            },
                            success: function(result){
                                if(result.success == "1")
                                {
                                    showSuccessAlert("Profile assigned successfully");
                                    console.log("success update profile owner");
                                }else{
                                    console.log("error update profile owner");
                                    showErrorAlert("Problem in profile assigning");
                                }
                            },
                            error: function(xhr, error){
                                console.log("error update profile owner");
                                showErrorAlert("Problem in profile assigning");
                            }
                        });

                    });
                    $('#MyTable_filter').hide();
        }
      
    } );  
  </script>

