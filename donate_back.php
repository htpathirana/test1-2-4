<?php

include 'dbconnect.php';

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contactNo = $_POST['contactNo'];
    


if (isset($_POST['books'])) {
      $books = $_POST['books'];
    }
    else {
      $books=" ";
    }
   
    
    if (isset($_POST['education'])) {
      $education = $_POST['education'];
    }
    else {
      $education=" ";
    }
      
 if (isset($_POST['furniture'])) {
      $furniture = $_POST['furniture'];
    }
    else {
      $furniture=" ";
    }

   if (isset($_POST['toys'])) {
      $toys = $_POST['toys'];
    }
    else {
      $toys=" ";
    }

     if (isset($_POST['cloths'])) {
      $cloths = $_POST['cloths'];
    }
    else {
      $cloths=" ";
    }

     if (isset($_POST['sport'])) {
      $sport = $_POST['sport'];
    }
    else {
      $sport=" ";
    }


         $sql = "INSERT INTO donation (username, email, address, books, education, furniture, toys, cloths, sport,contactNo)
        VALUES ('$name','$email','$address','$books','$education','$furniture','$toys','$cloths','$sport','$contactNo')";
        mysqli_query($con, $sql); 


$message=" Succesfully Donated; We will contact you soon";

   
       echo'<script type="text/javascript">
              window.alert("'.$message.'");

              setTimeout(setAlert, 400);
function setAlert() {
              location.href="index.php?m=1";}
              </script>';
   
    }




?>
