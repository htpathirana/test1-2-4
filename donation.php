<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Acc.css">
    </head>
<body>
<form action="donate_back.php" method ="POST" style="border:1px solid #ccc">
  <div class="container">
    <center>
    <h1>Donations</h1>
    <p>Please fill out the form below if you wish to donate what you have.</p>
    <hr>
    <label for="name"></label>
    <input type="text" placeholder="Enter Name" name="name" required>
  </br>

  <label for="email"></label>
    <input type="text" placeholder="Enter Email" name="email" required>
  </br>
    

  <label for="address"></label>
    <input type="text" placeholder="Enter Address" name="address" required>
  </br>

  <label for="contactNo"></label>
    <input type="text" placeholder="Contact Number" name="contactNo" pattern="[0]{1}[7]{1}[0-9]{8}" required>
  </br>
<h2>Choose what you hope to donate.</h2>

<label class="scontainer">Books
    <input type="checkbox" name="books" value="b">
    <span class="checkmark"></span>
  </label>
  <label class="scontainer">Education Materials
    <input type="checkbox" name="education" value="e">
    <span class="checkmark"></span>
  </label>
  <label class="scontainer">Cloths
    <input type="checkbox" name="cloths" value="c">
    <span class="checkmark"></span>
  </label>
  <label class="scontainer">Used Furniture
    <input type="checkbox" name="furniture" value="f">
    <span class="checkmark"></span>
  </label>
  <label class="scontainer">Used Toys
    <input type="checkbox" name="toys" value="t">
    <span class="checkmark"></span>
  </label>
  <label class="scontainer">Usead Sport Items
    <input type="checkbox" name="sport" value="s">
    <span class="checkmark"></span>
  </label>
  <br><br>
  

  <div class="clearfix">
       
      <button type="submit" class="signupbtn">Donate</button>
    </center>
    </div>
  </div>
</form>

</body>
</html>
