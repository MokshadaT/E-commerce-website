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
      padding-top:100%;
      padding-bottom:1%;

      
     
    }
    label{
        text-align:center;
    }
    #customer_details{
        margin: 10px 0;
        width: 100%;
        padding: 10px;
        border: 2px solid #555;
        border-radius: 6px;
        outline: none;
        font-size:12px;
       /* display:block;
        position:relative;
        /*z-index:10;     */
    }
    #pwd{
          position: absolute;
          top:100%;
          left:2px;
          font-size: 10px;
          font-weight:400;
          color:red;

        }

    #submit{
      background-color: black;
      color:white;
      width:109%;
      height:55px;
      border-radius: 6px;
      position:absolute;
      top:110%;
      
    }
    .error{
      color:red;
      text-align:center;

    }
</style>

  <form action="" method="POST">

    <legend  padding-bottom: 5%;><h2>Create Account</h2></legend>
    <?php
      session_start();
      if(isset($_SESSION['error_email'] ))
      {
        echo $_SESSION['error_email'];
        unset($_SESSION['error_email']);
      }
      if(isset($_SESSION['error_username'] ))
      {
        echo $_SESSION['error_username'];
        unset($_SESSION['error_username']);
      }
      if(isset($_SESSION['login_successful'] ))
      {
        echo $_SESSION['login_successful'];
        unset($_SESSION['login_successful']);
      }
    ?>
 
      <br><br>
        <label for="uname">Full Name :</label>
        <input type="text" id="customer_details" name="full_name" placeholder="Enter full name" required>
        <br><br>
        <label for="uname">Username :</label>
        <input type="text" id="customer_details" name="username" placeholder="Enter username" required>
        <br><br>  
        <label for="uname">Phone Number:</label>
        <input type="text" id="customer_details" name="phone_number" placeholder="Enter phone number" required>
        <br><br>
        <label for="uname">Email :</label>
        <input type="text" id="customer_details" name="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        <br><br>
        <label for="uname">Address :</label>
        <input type="text" id="customer_details" name="address" placeholder="Enter address" required>
        <br><br>
        <label for="pws-field">Password:</label>
        <input type="password"  id="pws-field" spellcheck="false" id="pwd" name="password" placeholder="Enter password"  onkeyup="validatePassword()" required><!--"-->
        <br><br>
        <span id="pws-error"></span>
        
        <input type="submit" name="submit" value="Create" id="submit"> 
    
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

<?php
  
  //Process the value from form and save it in data

  //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Get the data from form.

        $full_name =$_POST['full_name'];
        $username =$_POST['username'];
        $phone_number =$_POST['phone_number'];
        $email =$_POST['email'];
        $password = $_POST['password'];
        $address =$_POST['address'];

        //Sql Query to save the data into database

        $sql1 = "INSERT INTO customer SET 
            full_name='$full_name',
            username='$username', 
            phone_number='$phone_number', 
            email='$email', 
            password='$password', 
            address='$address'
            ";

        //Execute Query and save data in database

      
        $sql="SELECT * FROM customer WHERE (username='$username' or email='$email');";

        $res=mysqli_query($conn,$sql);
      

        if (mysqli_num_rows($res) > 0) {
          
          $row = mysqli_fetch_assoc($res);

          
          if($email==isset($row['email']))
          {
    
            $_SESSION['error_email'] = "<p class='error'>Email already exists. </p>";
        
          }
          if($username==isset($row['username']))
          {

            $_SESSION['error_username'] = "<p class='error'>Username already exists. </p>";
        
          }
        }
        else{

          $_SESSION['login_successful'] = "<p style=color:limegreen; text-align:center>Successfully Recorded! </p>";

          

          //Insert record in db
          $query_run=  mysqli_query($conn, $sql1);
         
        
        }



    }

  



?>
</body>
</html>