<?php include('partials/menu.php');?>

<!--<link  rel="stylesheet"  href="css/style.css">-->
<style>
*{
            margin:0;
            padding: 0;
            scroll-padding-top: 2rem;
            scroll-behavior: smooth;
            box-sizing: border-box;
            list-style:none;
            text-decoration: none;

        }



</style>
<br>


<main class="shop shop-content">

        <?php

            //Create SQL Query to display product from database
            $sql= "SELECT * FROM product WHERE active='Yes' AND featured='Yes' ";

            //Execute Query
            $res = mysqli_query($conn, $sql);

            //Count rows to check whether the product is available or not
            $count = mysqli_num_rows($res);

            if($count>0)
            {
                //product available
                while($row = mysqli_fetch_assoc($res))
                {
                    //Get the value 
                    $id = $row['product_id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $image = $row['image'];
                    ?>

                    <!--Item 1-->
                    <section class="product-box">  
                        <?php
                            //Check whether image is available or not
                            if($image =="")
                            {
                                //Display message
                                echo "Image not available";
                            }
                            else
                            {
                                //Image Available
                                ?>
                                
                                <img src="<?php echo SITEURL; ?>images/category/<?php echo $image; ?>" alt="" class="product-img" >

                                <?php
                            }
                        
                        ?>         
                        |
                        <h3 class="product-title"><?php echo $title;?></h3>
                        <p class="price">$<?php echo $price;?></p>
                        <button class="add-cart">Add to cart</button>
                    </section>


                    <?php

                }

            }
            else
            {
                //product not available
                echo "Category not Added";
            }
        
        ?>
        
    </main>

    <script src="main.js"></script>
    
</body>
</html>

