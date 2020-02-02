<!doctype html>
<html lang="en">

<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--- Style links brought from Customer side
    
    <link rel="stylesheet" href="css/custom.css"> -->
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/custom101.css" />
    
    <script type="text/javascript">
    function validation()
    {
       var username = document.getElementById('username').value;
       var password = document.getElementById('password').value;
       

       if(username == "")
               {
                   document.getElementById('usernames').innerHTML = "* Please enter username";
                   document.getElementById('username').focus();
                   return false;
               }
        else   
               {
                    document.getElementById('usernames').innerHTML = " ";
               }



       if(password == "")
               {
                   document.getElementById('passwords').innerHTML = "* Please enter password";
                   document.getElementById('password').focus();
                   return false;
               }
        else   
               {
                    document.getElementById('passwords').innerHTML = " ";
               }

    }

</script>

    <title>Admin Login</title>

</head>

<body>

<div class="container" style="margin-top: 80px;min-height: 385px;background-color:#f0f0f0;border-radius: 5px;" >
    <div class="row main-login-title">
        <h1 class="mx-auto" style="font-size: 30px;color:white"><b>Welcome to Manashaadi</b></h1>
    </div>      
    <div class="login-page col-4" style="margin-top:30px; margin-left: auto;margin-right: auto;margin-bottom:30px;padding-bottom: auto;" >
        <h1 class="login-title" style="font-size: 30px" >Login</h1>
        
        <form method="POST" action="<?php echo site_url();?>admin" onsubmit="return validation()">

            <div class="form-group" style="padding-left: 50px; padding-right: 50px">
                
                <input type="username" name="username" class="form-control"  placeholder="Enter Username" id="username" autocomplete="off" style="margin-bottom: 4px">
                <span id="usernames" class="text-danger font-weight-bold" style="vertical-align: middle;" ></span>
            </div>

            <div class="form-group" style="padding-left: 50px; padding-right: 50px">
                
                <input type="password" name="password" class="form-control" placeholder="Enter Password" id="password" autocomplete="off" style="margin-bottom: 4px">
                <span id="passwords" class="text-danger font-weight-bold" style="vertical-align: middle;" ></span>
            </div>

            <div class="form-group" style="padding-left: 50px; padding-right: 50px">
                    <button type="submit" name="submit" value="submit" class="form-control btn-primary" ><strong>Login</strong></button>
            </div> 

            <div class="form-group" style="padding-left: 50px; padding-right: 50px">              
          
            <span id="credentials"  class="text-danger font-weight-bold"> 
            <?php echo $msg; ?>
            </span> 
                   
            </div>


        </form>
        
        <!--- Error handling code 

            <?php
                        if (!isset($_GET['login'])) {
                        exit();
                        } 
                        else 
                        {

                            $logincheck=$_GET['login'];

                            if ($logincheck=="empty") {

                                echo "<p style='color:red;text-align:center;'>**You have not filled in all fields!</p>";
                                exit();
                            } 
                            else 
                            {

                                if ($logincheck=="null"){

                                 echo "<p style='color:red;text-align:center;'>**Username does not exists!</p>";    
                                 exit();
                                }
                                else
                                {

                                    if ($logincheck=="wrong"){

                                    echo "<p style='color:red;text-align:center;'>**You have entered wrong password!</p>";
                                    exit();
                                    }

                                }
                            }       

                        }

            ?> --->

    </div>

</div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
</body>

</html>