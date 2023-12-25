<?php 
  include 'connect.php'; 
  session_start(); 

  
  
?>

<?php 
   

    if (isset($_POST['submit'])) {
        // Retrieve the form data
        $name= $_POST['name'];
        $email = $_POST['email'];
        $phone_num = $_POST['phone_num'];
        $password = $_POST['password'];
      
        

    

        $sql="SELECT*from client_t where name='$name'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                $user=1;
            }
            else{
                $sql="INSERT INTO  client_t (name,email,phone_num,password)
                 values('$name','$email','$phone_num','$password')";
                $result=mysqli_query($con,$sql);
                if($result){
                    $success=1;
                }
                else{
                    die(mysqli_error($con));
                }
            }
        }
        
        

       
        

    }
?>
