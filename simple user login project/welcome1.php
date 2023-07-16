<?php



class db{
    function connect(){
        $link=mysqli_connect('localhost','root','','dhana');
        if($link){
            

        }
        else{
            echo "not connected ";
        
        }
        return $link;
    }
}


class register extends db {
    function rgstr($link){
        extract($_REQUEST);
        $query="INSERT INTO register(email, password) VALUES('$uemail' , '$upass')";
        $result=mysqli_query($link,$query);
        if($result){
            echo '<h1>you are successfully signed in</h1>';
            echo '<hr>';
            
            echo '<a href="index1.php">login page</a>';

        }
        else{
            echo "not inserted";
        }
    }
}

$record=new register();
$record->connect();
$link=$record->connect();
$record->rgstr($link);

?>