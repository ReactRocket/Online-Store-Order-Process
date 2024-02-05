<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Store: Step-2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php

    //  DATABASE INCLUDED  
    include("dbconnect.php");

    session_start();


    if (isset($_POST['submitBTN'])) {

        $address = $_POST['address'];
        $pcode = $_POST['pcode'];
        $country = $_POST['country'];

        $query = "INSERT INTO `user_address` (`address`, `pcode`, `country`) VALUES ('$address', '$pcode', '$country');";

        $result = mysqli_query($con, $query);

        if ($result) {

            header("location:card_details.php");
        } else {
            echo '
                <script>
                alert("Alert! Something went Wrong... ");
                </script>
                ';
        }
    }


    ?>
    <div class="container-fluid">
        <h1 class="text-center my-5">Step:2 </h1>
        <div class="container px-5 d-flex justify-content-center">
            <form class="p-5 border border-3 rounded mb-5 w-50" action="" method="post">
                <h3 class="text-center ">Delevery Addresss</h3>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label><span class="text-danger">*</span>
                    <textarea class="form-control" id="address" rows="3" name="address" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="pcode" class="form-label">Post Code</label><span class="text-danger">*</span>
                    <input type="number" class="form-control" id="pcode" name="pcode" required>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label><span class="text-danger">*</span>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>


                <div class="container d-flex justify-content-center">
                    <button type="submit" name="submitBTN" class="btn btn-success mx-3">Save</button>
                    <a href="index.php" name="submitBTN" onclick="<?php session_destroy(); ?>"
                        class="btn btn-danger mx-3">Cancle</a>
                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>