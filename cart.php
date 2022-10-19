<?php 
include("conn.php");
include('header.php');
include("user_session.php");
//session_start();
if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        $session_array_id=array_column($_SESSION['cart'],'id');
        if(!in_array($_GET['id'],$session_array_id)){
            $session_array= array(
                'id'=>$_GET['id'],
                "name"=>$_POST['name'],
                
                'price'=>$_POST['price'],
                'quantity'=>$_POST['quantity']);
        $_SESSION['cart'][]=$session_array;

        }

    }else{
        $session_array= array(
            'id'=>$_GET['id'],
            'name'=>$_POST['name'],
            // 'category'=>$_POST['category'], 
            // 'subcategory'=>$_POST['subcategory'], 
            'price'=>$_POST['price'],

            'quantity'=>$_POST['quantity']);
    $_SESSION['cart'][]=$session_array;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careview Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<background>
        <style>
            body{
                background-color:coral;
            }
        </style>
    </background>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Careview Cart</h2>
                    <!-- <h5 style="text-align:right;">Enjoy your shopping at Cibus  //echo $login_session; ?></h5> -->
                    <div class="col-md-12">
                        <div class="row">

                    
                    <?php
                    $query="SELECT * FROM `producttb`";
                    $result=mysqli_query($con,$query);
                    

                    while($row=mysqli_fetch_array($result)){ ?>
                    <div class="col-md-4">
                        <style>
                            img:hover{
                                border-radius:15%;
                                transform:scale(1.05);
                            }
                        </style>
                      <form action="cart.php?id=<?=$row['id'] ?>" method="post">
                      <img src="images/<?= $row["product_image"]; ?>" class="img" style="height:250px; width:350px; padding:10px;">
                      <h5 class="text-center"><?= $row["product_name"];?> </h5>
                      <!-- <h5 class="text-center">= $row["category"];?> </h5>
                      <h5 class="text-center"> $row["subcategory"];?> </h5> -->
                      <h5 class="text-center">Ksh<?= number_format($row["product_price"],1);?> </h5>

                      <input type="hidden" name="name" id="" value=" <?= $row['product_name'] ?>">
                      <input type="hidden" name="price" id="" value=" <?= $row['product_price'] ?>">
                      <input type="number" name="quantity" id="" value="1" class="form-control">
                      <input type="submit" value="Add to Cart" name="add_to_cart" class="btn btn-warning btn-block my-2" style="">

                      </form>  
                    </div>
                    <?php } ?>
                       </div>
                    </div>
                    
                    
                </div>
                
                <div class="col-md-12">
                    <h2 class="text-center">Item Selected</h2>
                    <?php
                    $total=0;
                    $output="";
                    $output="
                    <table class='table table-bordered table-striped'>
                    <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                    </tr>
                    ";
                    //var_dump($_SESSION['cart']);
                    
                    if(!empty($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $key => $value){
                            $output .="
                            <tr>
                            <td>".$value['id']."</td>
                            <td>".$value['name']."</td>
                            <td>".$value['price']."</td>
                            <td>".$value['quantity']."</td>
                            <td>Ksh".number_format($value['price'] * $value['quantity'])."</td>
                            <td><a href='cart.php?action=remove&id=".$value['id']."'>
                             <button class='btn btn-danger btn-block'>Remove</button>
                            </a></td>
                            </tr>
                            .";
                            $total=$total+$value['quantity']*$value['price'];
                           

                        }
                        $output.="
                        <tr>
                        <td colspan='3'></td>
                        <td >Total Price</td>
                        <td>".number_format($total,1)."</td>
                        <td><a href='cart.php?action+clearall'>
                        <button class='btn btn-warning'>Clear All</button></a></td>
                        </tr>
                        <tr>
                        <td colspan='5'></td>
                        <td><a href='payment.php' ><button class='btn btn-success' type='submit'>Proceed to Payment</button></a></td>
                        </tr>
                        </table>";
                    }
                    // $sql="INSERT INTO `cart`(`user_id`, `fashion_item`, `unit_price`, `quantity`, `total_price`) VALUES ('','',[value-3],[value-4],[value-5])";
                     echo $output ;
                    ?>
                    <?php
                        if(isset($_GET['action'])){
                            if($_GET['action']=="clearall"){
                                unset($_SESSION['cart']);
                            }
                            if($_GET['action']=="remove"){
                                foreach($_SESSION['cart'] as $key=>$value){
                                    if($value['id']==$_GET['id']){
                                        unset($_SESSION['cart'][$key]);
                                    }
                                }
                            }
                        }
                        ?>

                </div>
            </div>
        </div>
        <?php
        
        ?>
    </div>
    </body>
    </html>