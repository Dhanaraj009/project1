<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form  action="board1.php" onsubmit=" return checkUserExist();">
        <div class='container'>
            <center><div><h1 style ="color:brown">LOGIN</h1></div></center>
            <div class='child'>
            
            <div> <h2>useremail </h2> <input type="text" id="useremail" name="username"></div>
<br>
           <div><h2> password</h2>  <input type="text" id="userpassword" name="password"></div>

            <br>

           <div> <button type="submit" class="sub">register</button></div>
<br>

           <div><p id="para" style='color:red'></p></div>
           </div>
           <h2 style="color:white;">new user? <a href="sign in1.php" style=""class="hvr">sign in</a></h2>

        </div>
        <
  
    </form>
    
    <style>
.sub{
    
}
.container{
    display:flex;
    flex-direction:column;
    width:100%;
    height:100vh;
    justify-content:center;
    align-items:center;
    border:2px solid black;
    

}
body{
    background-image:linear-gradient(pink,blue);
}
.child div  input{
    border-radius:50px;
    padding:6px;
    border:none;
    width:100%;
}
.container button{
    margin-top:20%;
    border-radius:10px;
    width:100%;
    padding:10px;
}
.container button:hover{
    background-color:green;
}
.child{
    
    width:40%;
    padding:15px;
    background-image:linear-gradient(aqua,blue);
    border-radius:10px;
    
    

}
#para{
    font-size:30px;
}
.hvr{
    color:white;
}

.hvr:hover{
    color:yellow;
}

        </style>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous">

    </script>
    <script>
        function checkUserExist(){
        
            var useremail=$('#useremail').val();
            var userpassword=$('#userpassword').val();
            var error=0;

            $.ajax({
                type: 'post',
                url: 'manage1.php',
                data:{
                    email: useremail,
                    upassword: userpassword,
                    login_check:true
                },
                async:false,
                success:function(response){
                  var info=$.parseJSON(response);
                  if(info.status=='success'){
                    
                  }else{
                    error=1;
                  }
                  
                }


            });
            if(error == 1){
                $('#para').text('password or email are not matched');
                return false;
                
                



            }
            else{
                return true;
            }

            
        }
    </script>
    

    


            
            
            
            

            
    
</body>
</html>
