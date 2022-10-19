
    <?php
session_start();
include("../conn.php");

$result=mysqli_query($con,"select * from clients where client_id='$client_id'")or die ("query 1 incorrect.......");
$_GET['client_id']=$client_id;
echo "$client_id";

list($client_id,$first_name,$last_name,$email,$password,$address,$mobileno)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobileno=$_POST['phone_number'];
$address=$_POST['address'];
$client_id=$_POST['client_id'];

$update=mysqli_query($con,"update clients set first_name='$first_name',last_name='$last_name',email='$email',password='$password',phone_number='$mobileno',address='$address' where client_id='$client_id'")or die ("query 2 incorrect.....");

//mysqli_query($con,"update clients set first_name='$first_name', last_name='$last_name', email='$email', password='$password' where client_id='$client_id'")or die("Query 2 is inncorrect..........");

header("location: sidenav.php");
mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit client</h5>
              </div>
              <form action="" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                  <input type="hidden" name="client_id" id="client_id">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>First name</label>
                        <input type="text" id="first_name" name="first_name"  class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Last name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"  id="email" name="email" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Password</label>
                        <input type="text" name="password" id="password" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" id="address" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Phone Number</label>
                        <input type="tel" name="phone_number" id="phone_number" class="form-control" >
                      </div>
                    </div>
                  
              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>
      <?php
include "footer.php";
?>