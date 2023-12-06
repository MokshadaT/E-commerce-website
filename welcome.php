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
</style>
<?php
session_start();

echo "<h3>Welcome back ".$_SESSION['user']." !</h3>";
?>