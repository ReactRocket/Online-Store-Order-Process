<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Store: Step-3</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php

    //  DATABASE INCLUDED  
    include("dbconnect.php");

    session_start();



    if (isset($_POST['submitBTN'])) {


        $ctype = $_POST['ctype'];
        $cnumber = $_POST['cnumber'];
        $scode = $_POST['scode'];
        $ncard = $_POST['ncard'];


        $query = "INSERT INTO `user_card` (`ctype`,`cnumber`, `scode`, `ncard`) VALUES ('$ctype','$cnumber', '$scode', '$ncard');";

        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>
            alert('Thank you for believing in us.');
            window.location.href='index.php';
            </script>";
            session_destroy();
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
        <h1 class="text-center my-5">Step:3 </h1>
        <div class="container px-5 d-flex justify-content-center">
            <form class="p-5 border border-3 rounded mb-5 w-50" action="" method="post">
                <h3 class="text-center ">Card Details</h3>


                <div class="mb-3  border border-2 rounded p-2 mt-3">

                    <label class="form-check-label" for="gendqer">
                        Card Type
                    </label><span class="text-danger">*</span>
                    <div class="mb-3 d-flex mt-2">
                        <input class="form-check-input mx-2" type="radio" value="Visa" name="ctype" id="gender">
                        <span><i class="fa fa-cc-visa">Visa</span>
                        <input class="form-check-input mx-2" type="radio" value="AmEx" name="ctype" id="gender">
                        <span>AmEx</span>
                        <input class="form-check-input mx-2" checked type="radio" value="Mastercard" name="ctype"
                            id="gender">
                        <span>Mastercard</span>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="cnumber" class="form-label">Card Number</label><span class="text-danger">*</span>
                    <input type="number" class="form-control" id="cnumber" name="cnumber" required>
                </div>
                <div class="mb-3">
                    <label for="scode" class="form-label">Security Code</label><span class="text-danger">*</span>
                    <input type="number" class="form-control" id="scode" name="scode" required>
                </div>
                <div class="mb-3">
                    <label for="ncard" class="form-label">Excat name as on card</label><span
                        class="text-danger">*</span>
                    <input type="text" placeholder="Name On Card" class="form-control" id="ncard" name="ncard" required>
                </div>


                <div class="container d-flex justify-content-center">

                    <button type="submit" name="submitBTN" class="btn btn-warning">BUY IT!</button>
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