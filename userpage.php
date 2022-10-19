<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
   
   <!--     Fonts and icons     -->
  <link rel="stylesheet" href="../admin/admin/assets/css/Material+Icons.css">
  <link rel="stylesheet" href="../admin/admin/assets/css/font-awesome.min.css">    
  <!-- Material Kit CSS -->


  <link rel="stylesheet" href="../admin/admin/assets/css/black-dashboard.css">
  <link rel="stylesheet" href="../admin/admin/assets/css/material-dashboard.css">
  
    
</head>
<body class="dark-edition">
    <?php 
       
        include('conn.php');
        include('user_session.php');
        include('admin/topheader.php');
        // session_start();
        
        // $user_check = $_SESSION['login_user'];
        // echo "$user_check";
        // $ses_sql = mysqli_query($con ,"select `first_name`,`last_name` from clients where `email` = '$user_check' ");
        // $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        // $login_session = $row['last_name'];
        // $login_name=$row['first_name'];
        //   echo "<h4>Welcome $login_session $login_name </h4>";
    
    ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          <?php
          echo "<h4>Welcome $login_session $login_name </h4>";
          ?>
        </a>
      </div>
      <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="3a8db1f4-24d8-4dbf-85c9-4f5215c1b29a">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="profile.php">
              <i class="material-icons">person</i>
              <p>My Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">
              <!-- <i class="material-icons">list</i> -->
              <i class="material-icons">shopping_cart</i>
              <p>Cart</p>
            </a>
            
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="prescript.php">
              <i class="material-icons">library_books</i>
              <p>Prescriptions</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="clientorder.php" id="order">
              <i class="material-icons">list</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="edit.php">
              <i class="material-icons">edit_user</i>
              <p>Manage User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">logout</i>
              <p>Logout</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    </div>
</body>
</html>