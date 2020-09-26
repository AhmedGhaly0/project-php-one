<?php

class portfolio {


function connect(){
  return  mysqli_connect("localhost","root","","proone");
}
// functions in portfolio

function AddNewPro($img,$desc,$user_id){

  // connect 

 


    // second query

    $sql = "INSERT INTO  `protofolio` (`img`,`description`,`user_id`) VALUES ('$img','$desc','$user_id')";

    mysqli_query($this->connect(),$sql);
    
    $res = mysqli_affected_rows($this->connect());
    if ($res == 1) {
        
        return true;
    }else{
         return false;
    }
}


function GitPortfolios(){

 



  $sql = " SELECT * FROM `user_portfolio` ";

 $q =  mysqli_query($this->connect(),$sql);

   $projects = [];

   while($res = mysqli_fetch_assoc($q)){

          $projects[] = $res;

   }

   return $projects;


}


function DeletePro($id){

 

  $sql = "DELETE from `protofolio` where `id` = $id";


  $q =  mysqli_query($this->connect(),$sql);

   $projects = [];

   while($res = mysqli_fetch_assoc($q)){

          $projects[] = $res;

   }

   return $projects;


}
function MessageNewGest($name,$email,$phone,$messge){

  // connect 

 


    // second query

    $sql = "INSERT INTO  `contact` (`name`,`email`,`phone`,`message`) VALUES ('$name','$email','$phone','$messge')";

    mysqli_query($this->connect(),$sql);
    
    $res = mysqli_affected_rows($this->connect());
    if ($res == 1) {
        
        return true;
    }else{
         return false;
    }
}


function GitPortfolioById($id){

 



  $sql = " SELECT * FROM `user_portfolio` WHERE `id` = $id ";

 $q =  mysqli_query($this->connect(),$sql);

   
   $res = mysqli_fetch_assoc($q);

   return $res;


}


function UpdatePro($id,$img,$desc){

  // connect 

  


    // second query

    $sql = "UPDATE `protofolio` SET `description` = '$desc' ";
    if (!empty($img)) {
      $sql .= " , `img` = '$img' ";
        }
    $sql .= " WHERE `id` = $id ";


    mysqli_query($this->connect(),$sql);
    
    $res = mysqli_affected_rows($this->connect());
    if ($res == 1) {
        
        return true;
    }else{
         return false;
    }
}

function GitMessage(){

  



  $sql = " SELECT * FROM `contact` ";

 $q =  mysqli_query($this->connect(),$sql);

   $projects = [];

   while($res = mysqli_fetch_assoc($q)){

          $projects[] = $res;

   }

   return $projects;


}

}