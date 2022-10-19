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
                <h4 class="card-title">Your Orders</h4>
                
               </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                      <tr><th>Order id</th><th>client id</th><th>payment id</th><th>payment name</th><th>amount</th><th>status</th><th>date</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($con,"select* from ordertb where client_id='$login_id' ")or die ("query 1 incorrect.....");

                        while(list($order_id,$client_id,$payment_id,$payment_name,$amount,$status,$date)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$order_id</td><td>$client_id</td><td>$payment_id</td><td>$payment_name</td><td>$amount</td><td>$status</td><td>$date</td></tr>";
                        }

                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                 <?php 
//counting paging

                $paging=mysqli_query($con,"select * from producttb");
                $count=mysqli_num_rows($paging);

                $a=$count/10;
                $a=ceil($a);
                
                for($b=1; $b<=$a;$b++)
                {
                ?> 
                <li class="page-item"><a class="page-link" href="productlist.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li>
                <?php	
}
?>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            
            <button type="submit" class="btn btn-primary btn-sm" placeholder="" style="margin-left:25px; width:100px;" onclick="print()">Print</button>


          </div>
          
          
        </div>

      </div>
      <?php
include "footer.php";
?>