<?php



function  AddNewUser($name,$email,$password){

    // first connect

    $connect = mysqli_connect("localhost","root","","proone");


    // second query

    $sql = "INSERT INTO  `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";

    mysqli_query($connect,$sql);
    
    $res = mysqli_affected_rows($connect);
    if ($res == 1) {
        
        return true;
    }else{
         return false;
    }
}


function login($email,$password){

    // first connect
    $con = mysqli_connect("localhost","root","","proone");


    // second query

    $mysql = " SELECT * FROM  `user` WHERE  `email` = '$email' && `password` = '$password' ";


   $query = mysqli_query($con,$mysql);

    $res = mysqli_fetch_assoc($query);

    return $res;
}
