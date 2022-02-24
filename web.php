
<html>
<head>
  <script>
    function validateForm() {
      let x = document.forms["myform"]["name"].value;
      if (x == "") {
        alert("Please Enter your Name");
        
        return false;
      }

      let y = document.forms["myform"]["email"].value;
      if (y == "") {
        alert("Please Enter your Email Address");
        
        return false;
      }

      let z = document.forms["myform"]["address"].value;
      if (z == "") {
        alert("Please Enter your Address");
        return false;
      }

      let p = document.forms["myform"]["contactNo"].value;
      if (p == "") {
        alert("Please Enter your Contact Number");
        return false;
        
      }
   


      let q = document.getElementById("psw").value;
      if (q == "") {
        alert("Please Enter the Password");
        return false;
      }
      
      if (q.length !=0 && q.length < 5){
        alert("password length must be greater than 5 characters");
        return false;
      }

      
      if (q.length > 25){
        alert("password length must be smaller than 25 characters");
        return false;
      }

      let r = document.forms["myform"]["pswrepeat"].value;
      if (r == "") {
        alert("Please Re Enter the Password");
        return false;
      }

      if(q != r)
      {
        alert("Password don't match");
        return false;
      }

      let s = document.forms["myform"]["identity"];
      if (((s[0].checked == false) && (s[1].checked == false))) {
        alert("Please Select whether you want to be a seller or a buyer");
        return false;
      }



    }
    </script>
    <link rel="stylesheet" type="text/css" href="Acc.css">
   
</head>
<body>
  

<form name="myform" onsubmit="return validateForm()" action="signup.php" method ="POST" style="border:1px solid #ccc">
  <div class="container">
    <center>
    <h1>Sign Up</h1>
    <p>You already have an account Please <a href="log_in.php" style="color:rgb(1, 175, 166)">log in</a> here</p>
    <hr>
    <label for="name"></label>
    <input type="text" placeholder="Enter Name" name="name" >
  </br>

  <label for="email"></label>
    <input type="text" placeholder="Enter Email" name="email" >
  </br>
    

  <label for="address"></label>
    <input type="text" placeholder="Enter Address" name="address" >
  </br>

  <label for="contactNo"></label>
    <input type="text" placeholder="Contact Number" name="contactNo" pattern="[0]{1}[7]{1}[0-9]{8}" >
  </br>

  <label for="psw"></label>
    <input type="password" id="psw" placeholder="Enter Password" name="psw" >
  </br>

  <label for="pswrepeat"></label>
    <input type="password" id="pswrepeat" placeholder="Repeat Password" name="pswrepeat">
  </br>
    
    <label><b>Seller Or Buyer  :</b></label>

Seller  
    <input type="radio" name="identity" value="1" >
    Buyer 
    <input type="radio" name="identity" value="2" >
</br>
    
<h2>Choose what you hope to Sell or buy.</h2>

<label class="scontainer">Ploythene
  <input type="checkbox" name="Ploythene" value="p">
  <span class="checkmark"></span>
</label>
<label class="scontainer">Glass
  <input type="checkbox" name="Glass" value="g">
  <span class="checkmark"></span>
</label>
<label class="scontainer">Coconut Huskd
  <input type="checkbox" name="Husked" value="h">
  <span class="checkmark"></span>
</label>

<label class="scontainer">Usead book and Papers
  <input type="checkbox" name="books" value="b">
  <span class="checkmark"></span>
</label>
<label class="scontainer">Usead vehicle parts
  <input type="checkbox" name="vehicle" value="v">
  <span class="checkmark"></span>
</label>
<label class="scontainer">Usead electronic divices
  <input type="checkbox" name="electronic" value="e">
  <span class="checkmark"></span>
</label>
  



    
    <p>By creating an account you agree to our Terms & Privacy</a>.</p>
    

    <div class="clearfix">
      
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </center>
    </div>
  </div>
</form>

</body>
</html>
