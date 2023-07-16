<?php
session_start();
try{
$link=mysqli_connect('localhost','root','', 'dhana');
}
catch(exception $ex){
    echo 'db error'. my_sqli_connect_error();
    
}
extract($_REQUEST);

if(isset($login_check)){
 $query="SELECT email,password FROM register where email='$email' and password='$upassword'";
$result=mysqli_query($link,$query);

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_assoc($result);
$_SESSION['user_email'] = $row['email'];
$_SESSION['user_name'] = $row['name'];





   echo json_encode(array('status'=>'success','message'=>'logged in'));
}
else{
  echo json_encode(array('status'=>'faild','message'=>'username or password wrong'));
}
}




?>