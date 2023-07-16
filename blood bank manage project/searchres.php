
<?php
include 'insrt.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blood donor management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        
</head>

<body>
    <div class="container mt-3">
        <div class="row ">
            <div class="col-sm-6">
                <h2 class="txt">BLOOD DONORS MANAGEMENT SYSTEM</h2>

            </div>
            <div class="col-sm-6">
                <div class="row" style="">
                    <div class="col-sm-4">
                        <h4><a href="board1.php">home</a></h4>
                    </div>
                    <div class="col-sm-4">
                        <h4><a href=""><i class="fa-regular fa-address-book"></i>contact us</a></h4>
                    </div>
                    <div class="col-sm-4">
                        <h4><a href="">about</a></h4>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5 ">
            <div class="col-sm-3 bg ">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>users panel</h2>
                    </div>
                </div>
                <div class="df mt-5 text-center">

                    <div>
                        <h3><a href="donor reg.php" class="">DONOR REG FORM</a></h3>
                    </div>
                    <div>
                        <h3><a href="beneficiary.php">BENEFICIARY</a></h3>
                    </div>
                    <div>
                        <h3><a href="">ADMIN</a></h3>
                    </div>
                    <div>
                        <h3><a href="edit.php">USER PROFILE EDIT</a></h3>
                    </div>

                </div>

            </div>
            <div class="col-sm-9  text-center ">
                <div class="card">
                    <div class="card-header">
                        <h2>Donors list</h2>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark bg-primary">
                                    <tr>
                                        <th>SI.NO</th>
                                        <th>NAME</th>
                                        <th>AGE</th>
                                        <th>BLOOD GROUP</th>
                                        <th>PHONE NUMBER</th>
                                        <th>DISTRICT</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $rows=$mf->srch($link,'bloodbank');
                                    if(!empty($rows)){
                                        foreach($rows as $row){
                                            ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['name'] ?></td>
                                            <td><?= $row['age'] ?></td>
                                            <td><?= $row['bloodgroup'] ?></td>
                                            <td><?= $row['phno'] ?></td>
                                            <td><?= $row['district'] ?></td>

                                        </tr>
                                        <?php    
                                        }
                                    }

                                    ?>
                                </tbody>

                            </table>
                        </div>
                        
                    </div>
                </div>

                
                
            </div>
        </div>

    </div>







    </div>




    <style>
        *{
            
            font-family: sans-serif;
        }
        .container {
            background-image: url('./blood images/blood bank.jpg');
            height: 100%;
            width: 100%;

            background-position: center;
            background-repeat: no-repeat;
        }

        .txt {
            text-shadow: rgb(107, 13, 196);
            color: rgb(147, 204, 15);


        }

        h4 a {
            color: rgb(147, 204, 15);




        }

        h4 a:hover {
            color: blue;

        }

        .bg {
            background-image: linear-gradient(skyblue, red);
            height: 100%;
            box-shadow: cadetblue;
            border-radius: 5px;
        }
        .bg2{
            height: 550px;
        }

        .df {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .df div h3 {
            margin-bottom: 12vh;
            
        }
        .df div h3 a{
            color: aqua;
        }
        .df div h3 a:hover{
            color: yellow;
        }
        
    </style>





</body>

</html>