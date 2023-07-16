<?php

class db{
    function connect(){
        $link=mysqli_connect('localhost','root','','dhana');
        if($link){

        }
        else{
            echo 'not connected';
        }
        return $link;

    }

    
}

class mainfunction extends db{
   function  isrt($link){
        extract($_REQUEST);
        $query="INSERT INTO `bloodbank`(`name`, `age`, `bloodgroup`, `phno`, `district`) VALUES ('$uname' , $uage , '$ubgroup' , '$unumber' , '$udist')";

        $result=mysqli_query($link,$query);
        if($result){
            echo "inserted successfully";
        }
        else{
            echo 'not inserted ';
        }

    }

    function rtrv($link,$table){
        $query="SELECT * FROM $table";
       $result=mysqli_query($link,$query);
       $res=[];
       if(mysqli_num_rows($result)>0){
       $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
       }
       return $res;
    }
    function particulardata($link,$table, $uid){
        extract($_REQUEST);
        $query="SELECT * FROM $table WHERE id=$uid";
        $result=mysqli_query($link,$query);
        $res=[];
        if(mysqli_num_rows($result)>0){
            $res=mysqli_fetch_all($result,MYSQLI_ASSOC);

        }
        return $res;
    }

    function updte($link){
        extract($_REQUEST);
        $query="UPDATE bloodbank SET name='$uname', age=$uage,  bloodgroup='$ubgroup',  phno='$unumber',  district='$udist' WHERE id=$uid ";
        $result=mysqli_query($link,$query);
        if($result) {
            header('location:beneficiary.php');

        }
        else{
            echo 'value was not updated';
        }
    }

    function srch($link,$table){
        extract($_REQUEST);
        $query="SELECT * FROM $table where bloodgroup='$usblood' and district='$ucity'";
        $result=mysqli_query($link,$query);
        $res=[];
        if(mysqli_num_rows($result)>0){
            $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        return $res;
    }

    
}
extract($_REQUEST);

$mf=new mainfunction();
$link=$mf->connect();

if(isset($sbmt)&& $sbmt =='create'){
    $mf->isrt($link);

}
else if(isset($sbmt)&&  $sbmt == 'update'){
    $mf->updte($link);
}





?>