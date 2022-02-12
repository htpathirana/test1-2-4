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
   


      let q = document.forms["myform"]["psw"].value;
      if (q == "") {
        alert("Please Enter the Password");
        return false;
      }

      let r = document.forms["myform"]["pswrepeat"].value;
      if (r == "") {
        alert("Please Re Enter the Password");
        return false;
      }

      let s = document.forms["myform"]["Seller/Buyer"];
      if (((s[0].checked == false) && (s[1].checked == false))) {
        alert("Please Select whether you want to be a seller or a buyer");
        return false;
      }

