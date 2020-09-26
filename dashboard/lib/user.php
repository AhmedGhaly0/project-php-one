<?php





class user{


    function connect(){
        return  mysqli_connect("localhost","root","","proone");
      }

    function  AddNewUser($name,$email,$password){

        // first connect
    
        
    
    
        // second query
    
        $sql = "INSERT INTO  `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
    
        mysqli_query($this->connect(),$sql);
        
        $res = mysqli_affected_rows($this->connect());
        if ($res == 1) {
            
            return true;
        }else{
             return false;
        }
    }
    
    
    function login($email,$password){
    
        // first connect
        
    
    
        // second query
    
        $mysql = " SELECT * FROM  `user` WHERE  `email` = '$email' && `password` = '$password' ";
    
    
       $query = mysqli_query($this->connect(),$mysql);
    
        $res = mysqli_fetch_assoc($query);
    
        return $res;
    }
    

}
