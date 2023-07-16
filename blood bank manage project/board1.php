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
                        <h4><a href="">Home</a></h4>
                    </div>
                    <div class="col-sm-4">
                        <h4><a href="">Contact us</a></h4>
                    </div>
                    <div class="col-sm-4">
                        <h4><a href="">About</a></h4>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5 ">
            <div class="col-sm-3 bg ">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Users Panel</h2>
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
                        <h3><a href="search.php">SEARCH BLOOD GROUP</a></h3>
                    </div>

                </div>

            </div>
            <div class="col-sm-9 text-center ">

                <h3><q>A small step towards blood donation can give life to someone’s special.</q></h3>
                Donate blood, donate smile!
                <br>


                A small step towards blood donation can give life to someone’s special.
                
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
            height:700PX;
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
        .df div h3 a{
            color: aqua;
        }
        .df div h3 a:hover{
            color: yellow;
        }
    </style>





</body>

</html>