<?php
//session_start();
include("conn.php");
error_reporting(0);

include "userpage.php";
//include "topheader.php";
include "user_session.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Your Prescriptions</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                      <tr><th>Prescription id</th><th>Client id</th><th>Prescription Name</th><th>Description</th><th>Prescribed By</th><th>Duration</th><th>Progress</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($con,"select* from prescriptions where client_id='$login_id' ")or die ("query 1 incorrect.....");

                        while(list($prescription_id,$client_id,$prescription_name,$description,$prescribed_by,$duration,$progression)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$prescription_id</td><td>$client_id</td><td>$prescription_name</td><td>$description</td><td>$prescribed_by</td>
                        <td>$duration</td><td>$progression %</td></tr>";
                        }
                        $progress=$row['progression'];

                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            <!-- <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                 
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
             -->
           

          </div>
         
          <!-- <h5>Progress bar for prescriptions</h5>
      <br>
    <div class="progress">
      
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <style>
                
                .progress{
                    height: 30px;
                    width:500px;
                }
            </style>
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
      aria-valuemin="0" aria-valuemax="100" style="width:50%;">
        50% Completion (success)
      </div>
    </div> -->
    
          <h5><a href="prescriptionform.php">Add a prescription</a></h5>
        </div>

      </div>
      <?php
include "footer.php";
?>