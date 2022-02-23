<!DOCTYPE html>
    <?php
include 'dbconnect.php';
            if(isset($_POST['submit']))
                   {
          $errors = array();

                            if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1)
                            {

                              $errors[]='Username is Missing/ Invalid';

                             }

                          if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1)

                            {

                               $errors[]='Password is Missing/ Invalid';


                             }



                                if (empty($errors)) 
                                  {
                                      $email = mysqli_real_escape_string($con,$_POST['email']);

                                      $password = mysqli_real_escape_string($con,$_POST['password']);

                                  
                                     $sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' LIMIT 1";

                                      $result = mysqli_query($con,$sql);

                                        if ($result)

                                           {

                                             if(mysqli_num_rows($result)==1)



                                               {                                

$message="Logging Succesfull";


  echo'<script type="text/javascript">
              window.alert("'.$message.'");

              setTimeout(setAlert, 800);
function setAlert() {
              location.href="index.php";}
              </script>';
                                                      }

                                               else {

                                            
                                                       $errors[]='Invalid Username/Password';

                                                      }


                                            }  else{

                                                  $errors[]='DataBase query Failed';}


                                   }

                      }


?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Acc.css">
</head>
<body>
  

<form name="myform"   action="log_in.php"  method ="POST" style="border:1px solid #ccc">
  <div class="container">
    <center>
        
        <h1>Log In</h1>
            <!--Errors massage for login-->



    <?php if(isset($_POST['submit'])){if (isset($errors) && !empty($errors)){



         echo '<p class="error1">Invalid Username/Password</p>';}}?>



     <!--Errors massage for logout-->




        <p>If you have an account, Please log in here</p>
        <hr>
        <label for="email"></label>
        <input type="text" placeholder="Enter Email" name="email">
      </br>
      <label for="psw"></label>
    <input type="password" id="psw" placeholder="Enter Password" name="password" >
  </br>
  <div class="clearfix"></div>
        <button type="submit" name="submit" class="loginbtn">login</button>
        </center>
  </div>
  </div>
  </form>
</body>
</html>


