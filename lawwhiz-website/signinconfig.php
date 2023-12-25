<?php
session_start();

$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    include 'connect.php';
     
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    
    // session_start();
    // $_SESSION['ID'] =$f_ID;
    
    $sql="SELECT * from client_t where name='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');
        }
     }
 

        else{
            $invalid=1;
        }
  }
  ?>