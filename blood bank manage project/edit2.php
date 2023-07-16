<?php

include 'insrt.php';
extract($_REQUEST);
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
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

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
        <div class="row mt-5 justify-content-between">
            <div class="col-sm-3 bg ">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>users panel</h2>
                    </div>
                </div>
                <div class="df mt-5">

                    <div>
                        <h3><a href="donor reg.php">DONOR REG FORM</a></h3>
                    </div>
                    <div>
                        <h3><a href="beneficiary.php">BENEFICIARY</a></h3>
                    </div>
                    <div>
                        <h3><a href="">ADMIN</a></h3>
                    </div>
                    <div>
                        <h3><a href="">donors reg form</a></h3>
                    </div>

                </div>
                


            </div>
            <?php
                $rows=$mf->particulardata($link,'bloodbank',$uid);
                if(!empty($rows)){
                    foreach($rows as $row){
                        ?>
                
            <div class="col-sm-6 text-center ">


                <div class="card">
                    <div class="card-header">
                        <h2>Donor Reg Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="insrt.php" id="frm" method="post">
                            <div class="form-group">
                                <label for="uid">ID</label>
                                <input type="text" name="uid" id="uid" value="<?= $row['id']?>" readonly="">
                            </div>
                            
                            <div class="form-group">
                                <label for="">name</label>
                                <input type="text" class="form-control" name="uname" value="<?= $row['name']?>">
                            </div>
                            

                            <div class="form-group">
                                <label for="uage">age</label>
                                <input type="text" name="uage" id="uage" class="form-control" value="<?= $row['age']?>">
                            </div>
                            

                            <div class="form-group">
                                <label for="ub-group">blood group</label>
                                <select name="ubgroup" id="ub-group" class="form-control">
                                    <option value="B POSITIVE">B POSITIVE</option>
                                    <option value="O NEGATIVE">O NEGATIVE</option>
                                    <option value="O POSITIVE">O POSITIVE</option>
                                    <option value="AB POSITIVE">AB POSITIVE</option>
                                    <option value="AB NEGATIVE">AB NEGATIVE</option>
                                    <option value="B NEGATIVE">B NEGATIVE</option>
                                    <option value="A POSITIVE">A POSITIVE</option>
                                    <option value="A NEGATIVE">A NEGATIVE</option>

                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="unumber">phone number</label>
                                <input type="tel" class="form-control" name="unumber" id="unumber" value="<?= $row['phno']?>">
                            </div>
                            <div class="form-group">
                                <label for="udist">district</label>
                                <input type="text" id="udist" class="form-control" name="udist" value="<?= $row['district']?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="sbmt" value="update">update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <?php
        }
                }



                ?>







        </div>
    </div>

    </div>







    </div>




    <style>
        .container {
            background-image: url('./blood images/blood bank.jpg');
            height: 700px;
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
            height: 550px;
            box-shadow: cadetblue;
            border-radius: 5px;
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

        .df div h3 a {
            color: aqua;

        }

        .df div h3 a:hover {
            color: yellow;

        }
        .error{
            color: red;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        $(function () {
            let $rgstrform = $('#frm');
            if ($rgstrform.length) {
                $rgstrform.validate({
                    rules: {
                        uname: {
                            required: true
                        },
                        uage:{
                            required:true
                        },
                        
                        unumber:{
                            required:true,
                            minlength:10
                        },
                        udist:{
                            required:true
                        }
                    },
                    messages:{
                        uname:{
                            required:'please enter your name'
                        },
                        uage:{
                            required:'please enter your age'
                        },
                        unumber:{
                            required:'please enter your mobile number',
                            minlength:'phone number must be 10 number'
                        },
                        udist:{
                            required:'please enter your district'
                        }

                    }



                })


            }

        })

    </script>





</body>

</html>