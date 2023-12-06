|
<?php include('config/constant.php');?>

<?php

session_start();

$uname =$_POST['username'];
$pwd =$_POST['pwd'];

$_SESSION['user'] = $uname;


$sql2 = "SELECT username, password FROM customer"; //table called customer
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
    // read data of each row
    while($row = mysqli_fetch_array($result)) {
  
      if ($row["username"]==$uname && $row["password"]==$pwd){ 
        $unameCheck="true";
      }
  
    }
  } else {
    
    $unameCheck="false";
  }
  
  mysqli_close($conn);
  
  
  
  if (isset($uname))
  {
  
  
    if($unameCheck=="true")
    {
      $_SESSION['success'] = "<p style=color:limegreen>Successfully login!</p>";

      //redirect to login page with error message;
      header("Location:".SITEURL.'myCart.php'); 
    }
    else
    {
      $_SESSION['error'] = "<p style=color:red>Login error, please try again</p>";

      //redirect to login page with error message;
      header("Location:".SITEURL.'login.php');
    }

  }

?>


</body>
</html>



