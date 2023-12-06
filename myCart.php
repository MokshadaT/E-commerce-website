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

<form action="shopping-cart.php" method="POST">
    <br><br><br><br>

    <?php
        session_start();
        if(!empty($_SESSION['add'])) {
            $message = $_SESSION['add'];}
            session_destroy();

        

        if(isset($_SESSION['success'] ))
        {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        }
    ?>

    <!--Cart--> 
    <label for="myCart" class="cart-title">My Cart</label>

    <!--cart content-->


    <!--total-->
    <label for="total-title" class="total-title">Total</label>
    <label for="total-price" class="total-title">$0</label>


    <!--buy button-->
 
    <span id="pws-error"></span>
    <!--Buy Button-->
    <button type="button" class="btn-buy"> Buy Now </button>
        <!--Cart Close-->
        <i class='bx bx-x' id="close-cart"></i>
    

   
    <!--Cart Close-->
    <i class='bx bx-x' id="close-cart"></i>

  </form>

  <script>

    
  </script>




