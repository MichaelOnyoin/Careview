<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/client_profile.css">
    <?php
   
    require('../admin_session.php');
    include('sidenav.php');
    include('topheader.php');
    ?>

</head>
<body>
    <div class="container">
        <div class="main-body">
          <h3 style="text-align:center;">My Account</h3>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                        
                        <h4>Name:<?php echo " $login_name $login_session" ?> </h4>
                        <h4>Admin_id:<?php echo " $login_id" ?> </h4>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$login_name"." "."$login_session" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$login_email" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$login_role";?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <p><h6 class="mb-0"><?php echo "$login_contact"; ?></h6></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <a class="btn btn-info " target="__blank" href="clientEdit">Edit</a>
                    </div>
                    
                  </div>
                  
        </div>
    </div>
</body>
</html>