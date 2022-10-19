 <?php
session_start();
include("../conn.php");
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobileno=$_POST['phone_number'];
$address=$_POST['address'];
$client_id=$_POST['client_id'];
$gender =$_POST["gender"];
$age=$_POST["age"];

$sql_insert="INSERT INTO `clients`(`client_id`,  `first_name`, `last_name`,`email`, `password`,`gender`,`age`,`address`, `phone_number`) 
VALUES ('','$firstname','$lastname','$email','$password','$gender','$age','$address','$mobileno')";
if($con->query($sql_insert)==TRUE){
  echo "<br>";
  echo "Inserted successfully";
}else{
  echo "Error".$con->error;
}			
header("location:adduser.php"); 
mysqli_close($con);
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Users</h4>
                  <p class="card-category">Complete User profile</p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="last_name" id="last_name"  class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">phone number</label>
                          <input type="text" id="phone" name="phone_number" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Gender</label>
                          <input type="text" name="gender" id="" class="form-control" list="datalistOptions" >
                                <datalist id="datalistOptions">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </datalist>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                      </div> 
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Age</label>
                          <input type="number" id="age" name="age" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Update User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
include "footer.php";
?>