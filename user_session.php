<?php 
       
       include('conn.php');
       session_start();
       $user_check = $_SESSION['login_user'];
       echo "$user_check";
       $ses_sql = mysqli_query($con ,"select * from clients where `email` = '$user_check' ");
       $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
       $login_session = $row['last_name'];
       $login_name = $row['first_name'];
       $login_id = $row['client_id'];
       $login_email = $row['email'];
       $login_contact = $row['phone_number'];
       $login_gender=$row['gender'];
       $login_age=$row['age'];
       $login_address=$row['address'];

        //  echo "<h4>Welcome $login_session</h4>";
   
   ?>