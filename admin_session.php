<?php 
       
       include('conn.php');
       session_start();
       $admin_check = $_SESSION['login_admin'];
       echo "$admin_check";
       $ses_sql = mysqli_query($con ,"select * from admin where `email` = '$admin_check' ");
       $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
       $login_session = $row['last_name'];
       $login_name = $row['first_name'];
       $login_id = $row['admin_id'];
       $login_email = $row['email'];
       $login_contact = $row['phone_number'];
       $login_role=$row['role'];
       
   ?>