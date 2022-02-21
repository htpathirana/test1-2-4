<?php

include 'dbconnect.php';

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contactNo = $_POST['contactNo'];
    $psw = $_POST['psw'];
    $pswrepeat = $_POST['pswrepeat'];
    $identity = $_POST['identity'];
    if (isset($_POST['Ploythene'])) {
      $ploythene = $_POST['Ploythene'];
    }
    else {
      $ploythene=" ";
    }
   
     if (isset($_POST['Glass'])) {
      $glass = $_POST['Glass'];
    }
    else {
      $glass=" ";
    }
   

 if (isset($_POST['Husked'])) {
      $husked = $_POST['Husked'];
    }
    else {
      $husked=" ";
    }
   
    if (isset($_POST['books'])) {
      $books = $_POST['books'];
    }
    else {
      $books=" ";
    }
   
    if (isset($_POST['electronic'])) {
      $electronic = $_POST['electronic'];
    }
    else {
      $electronic=" ";
    }
   
    if (isset($_POST['vehicle'])) {
      $vehicle = $_POST['vehicle'];
    }
    else {
      $vehicle=" ";
    }
   



      


    $query = "SELECT * FROM users WHERE email = '{$email}' LIMIT 1";



    $result_set = mysqli_query($con, $query);



    if ($result_set) {

      if (mysqli_num_rows($result_set) == 1) {


 $message2="User already Exists";


  echo'<script type="text/javascript">
              window.alert("'.$message2.'");

              setTimeout(setAlert, 100);
function setAlert() {
              location.href="web.php?m=1";}
              </script>';
   
    }else{
        
     $sql = "INSERT INTO users (username, email, address, password, contact, identity, ploythene, glass, husked, books, vehicle, electronic)
        VALUES ('$name','$email','$address','$psw','$contactNo','$identity','$ploythene','$glass','$husked','$books','$vehicle','$electronic')";
       
       mysqli_query($con, $sql); 


$message="Account Succesfully Created";


  echo'<script type="text/javascript">
              window.alert("'.$message.'");

              setTimeout(setAlert, 100);
function setAlert() {
              location.href="index.php?m=1";}
              </script>';
   
       
    }


}
}

?>
