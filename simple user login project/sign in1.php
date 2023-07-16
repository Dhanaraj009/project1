<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card ">
                    <div class="card-header text-center">
                        <h1>SIGN IN</h1>
                    </div>
                    <div class="card-body ">
                        <form action="welcome1.php" method="post" id="frm">
                            <div class="form-group mb-5">
                                <label for="uemail">user email</label>
                                <input type="text" name="uemail" id="uemail" class="form-control">
                                <div id="para1" style='color:red'></div>
                            </div>
                            <div class="form-group mb-5">
                                <label for="upass">user password</label>
                                <input type="text" class="form-control" id="upass" name="upass">
                                <div id="para2" style='color:red'></div>

                            </div>
                            <div class="form-group mb-5">
                                <button type="submit" class="btn btn-primary form-control" name="usubmit"
                                    id="sub">register</button>
                            </div>
                            <footer>
                                <h4> already signed in?    <a href="index1.php">log in</a> </h4>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <style>
        body {
            background-image: linear-gradient(to right, pink, green);


        }

        .card {
            box-shadow: 3px 3px 2px lightblue;
            border: 2px solid rgb(142, 33, 51);
        }

        label {
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <script>
        $(function () {
            let $rgstrfrm = $('#frm');
            if ($rgstrfrm.length) {
                $rgstrfrm.validate({
                    rules: {
                        uemail: {
                            required: true,
                            email: true
                        },
                        upass: {
                            required: true,
                            minlength: 5
                        }
                    },
                    messages: {
                        uemail: {
                            required: 'please enter the user email',
                            email: 'please enter the valid email'
                        },
                        upass: {
                            required: 'please enter the password',
                            minlength: 'password should be atleast 5 character'
                        }
                    }
                })
            }
        })













    </script>
</body>

</html>