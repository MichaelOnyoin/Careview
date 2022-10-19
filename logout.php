<?php
   //session_start();
   include('admin_session.php');
   include('client_session.php');
   if(session_destroy()) {
      header("Location: http://localhost/Careview/home.html ");
      
   }
   else{
      echo "Nah";
   }
?>