<?php include('partials/menu.php');?>


<style>
  *{
      margin:0;
      padding:0;
      box-sizing:border;
  }
  body{
    height:100vh;
    display:flex;
    align-items:center;
    justify-content: center;
    background: #fff;
  }
  #er{
    color:red;
  }
  legend{   
    text-align:center;

    }

</style>


  <form action="process.php" method="POST">

  <br><br>

    <legend  padding-bottom: 10%;><h2>Login</h2></legend>
    <br><br>
    <?php
    session_start();
      if(isset($_SESSION['error'] ))
      {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
      }

    ?>
      <label for="uname"></label>
      <input type="text" id="usrname" name="username" placeholder="Enter username" required>

      <label for="pwd"></label>
      <input type="password"  spellcheck="false" id="pws-field" name="pwd" placeholder="Enter password"  onkeyup="validatePassword()" required><!--"-->

      <span id="pws-error"></span>
      <input type="submit" value="Login" id="submit">
      <legend><a href="registration.php" >Create Account</a></legend>
    
  </form>

<script>

  var pwsField = document.getElementById("pws-field");
  var pwsError = document.getElementById("pws-error");

  function validatePassword(){
    /*The password should be between 7 to 12 characters and should contain at least one
      lowercase letter, two uppercase letters, one numeric digit, and one special character. In
      case a password does not match the required format, a message should be displayed next
      to the password box to indicate the format required for the password. The password
      should be set in focus with red outline when the password entered is not conforming with
      your website requirements.*/
    if (!pwsField.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{7,12}$/)){
      pwsError.innerHTML = "The password should be between 7 to 12 characters and should contain at least one lowercase letter, two uppercase letters, one numeric digit, and one special character.";
      pwsField.style.borderColor ="red";
      pwsError.style.top ="";
      return false;
    }
    else
    {
      pwsError.innerHTML="";
      pwsField.style.borderColor="green";
      return true;
    }
    
    
  }

</script>


</body>
</html>

