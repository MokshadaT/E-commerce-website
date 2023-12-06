<?php include('partials/menu.php');?>
<style>
  body {
  background-color: antiquewhite;
  height: 125vh;
  background-image:url('images/coco.jpg');
  background-size: cover;
  font-family: sans-serif;
  margin-top: 80px;
  padding: 30px;
  }
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 65%;
  }

  td, th,table {
  border: 30px solid #9f8686;
  text-align: left;
  padding: 10px;
  }

  tr,td,th:nth-child(even) {
  background-color: #9b8181;
}
</style>
    <div id="slideshow-container" >
       
        <img class="slides" src="images/kitkat_vegan.jpg" width="500px" height="505px" class="center">
        <img class="slides" src="images/mini.jpeg" width="500px" height="505px" class="center">
         <img class="slides" src="images/lindtbox.jpg" width="500px" height="505px" class="center">
         <img class="slides" src="images/cocoa.jpeg" width="500px" height="505px" class="center">
         <img class="slides" src="images/lindt1.jpg" width="500px" height="505px" class="center">
    </div>
    
    <table align="right" class="table1">
        <tr>
          <th><font color="black">Chocolate Name</font></th>
          <th><font color="black">Nutritional Value/calories</font></th>
          <th><font color="black">Made in</font></th>
        </tr>
        <tr>
          <td>Nestle</td>
          <td>516</td>
          <td>Switzerland</td>
        </tr>
        <tr>
          <td><font color="black">Kitkat Vegan</font></td>
          <td><font color="black">214</font></td>
          <td><font color="black">United Kingdom</font></td>
        </tr>
        <tr>
          <td>Mini</td>
          <td>125</td>
          <td>Austria</td>
        </tr>
        <tr>
          <td><font color="black">M&Ms</font></td>
          <td><font color="black">600</font></td>
          <td><font color="black">Switzerland</font></td>
        </tr>
        <tr>
          <td>Beli Cocoa</td>
          <td>212</td>
          <td>El Savador</td>
        </tr>
        <tr>
          <td><font color="black">Blue Lindt</font></td>
          <td><font color="black">302</font></td>
          <td><font color="black">Switzerland</font></td>
        </tr>
      </table>
      <br>
      <br>
      <div class="card">
        <p><a href="<?php echo SITEURL; ?>product.php"></a><button>SHOP</p>
      </div>
      
    <script>
        var imgDuration = 2000;
        var fadeSpeed = 2000;
        var container = $('#slideshow-container');
        var curIndex = -1;

        function slideShow() {
             container + $('img.slides').eq(curIndex).fadeOut(fadeSpeed);
             container + $('img.slides').eq(curIndex  = curIndex < container.children().length - 1 ? curIndex + 1 : 0).fadeIn(fadeSpeed);
             setTimeout("slideShow()", imgDuration);
        }

        slideShow();
    </script>
</body>
</html>