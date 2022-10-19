<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Client</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="care.css">

</head>
<body class="dark-edition">
    <?php
    include('userpage.php');
    include('user_session.php');

    ?>
    <div class="mb-3 form-control">
        <form action="prescriptioninsert.php" method="post" class="form " id="">
            <style>
                .form {
                    width: 50%;
                    margin: 0 auto;
                    padding: 20px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    background: #f2f2f2;
                    background-color: #292c2d;
                }
            </style>
            <h3 style="text-align: center;">Add Client Prescription</h3>
            <label for="" class="form-label">Client_id</label>
            <input type="number" name="client_id" id="" min="1" style="color:red;" class="form-control form-control-sm" value="<?= $login_id?>" readonly><br>
            <label for="" class="form-label">Prescription Name</label>
            <input type="text" name="prescription_name" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Description</label>
            <input type="text" name="description" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Duration</label>
            <input type="text" name="duration" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Progression</label>
            <input type="number" name="progression" id="" class="form-control"><br>
            <label for="" class="form-label">Prescribed By</label>
            <input type="number" name="prescribed_by" id="" class="form-control" list="datalistOptions" >
            <datalist id="datalistOptions">
                <option value="2">2</option>
                <option value="5">5</option>
            </datalist><br>
            <input type="submit" value="Insert" class="btn btn-success btn-block btn-sm">



        </form>
        <br>
        <hr>
       
        
    </div>
</body>
</html>