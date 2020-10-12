<?php
  session_start();

  if(isset($_POST['submit1'])){
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');

    $sql = "INSERT INTO sesorder (orderItemID,orderItem,orderPriceItem)
    VALUES ('1','Trojan power gym','2500');";

    mysqli_query($con,$sql);
    mysqli_close($con);
  }
  if(isset($_POST['submit2'])){
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');

    $sql = "INSERT INTO sesorder (orderItemID,orderItem,orderPriceItem)
    VALUES ('2','Trojan power tower','1500');";

    mysqli_query($con,$sql);
    mysqli_close($con);

  }
  if(isset($_POST['submit3'])){
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');

    $sql = "INSERT INTO sesorder (orderItemID,orderItem,orderPriceItem)
    VALUES ('3','Trojan weight rack','1200');";

    mysqli_query($con,$sql);
    mysqli_close($con);

  }
  if(isset($_POST['submit4'])){
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');

    $sql = "INSERT INTO sesorder (orderItemID,orderItem,orderPriceItem)
    VALUES ('4','Trojan solid bench','1500');";

    mysqli_query($con,$sql);
    mysqli_close($con);

  }
  if(isset($_POST['submit5'])){
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');

    $sql = "INSERT INTO sesorder (orderItemID,orderItem,orderPriceItem)
    VALUES ('5','Trojan tredmill','3500');";

    mysqli_query($con,$sql);
    mysqli_close($con);

  }
  if(isset($_POST['submit6'])){
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');

    $sql = "INSERT INTO sesorder (orderItemID,orderItem,orderPriceItem)
    VALUES ('6','Trojan exercise bike','2199');";

    mysqli_query($con,$sql);
    mysqli_close($con);

  }
  if(isset($_POST['submit7'])){
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');

    $sql = "INSERT INTO sesorder (orderItemID,orderItem,orderPriceItem)
    VALUES ('7','Trojan rower','2200');";

    mysqli_query($con,$sql);
    mysqli_close($con);

  }
  if(isset($_POST['submit8'])){
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');

    $sql = "INSERT INTO sesorder (orderItemID,orderItem,orderPriceItem)
    VALUES ('8','Trojan combo bench','1850');";

    mysqli_query($con,$sql);
    mysqli_close($con);

  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="CSS_all_forms/all.css">
    <link rel="stylesheet" href="gymMerc/merc.css">
    <meta charset="utf-8">
    <title>Gym Mercendise</title>
    <style media="screen">
      .btn {
        width: 35%;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        background-color: #40E0D0;
        type:submit;
      }
    </style>
    <script type="text/javascript">
      function addOrder() {
        alert("Added to cart!");
      }
    </script>
  </head>
  <body>
    <form action="" method="post">
      <ul class="navBar">
        <li><a href="index.html">Home</a></li>
        <div class="dropMen">
          <button class="dropBut">Gym Equipment</button>
          <div class="dropMen-content">
            <a href="gymMerchendise.php">Mercendise</a>
            <a href="gymAcc.php">Accessories</a>
          </div>
        </div>
        <div class="dropMen">
          <button class="dropBut">Martial Arts Equipment</button>
          <div class="dropMen-content">
            <a href="gi.php">Gi's</a>
            <a href="maGloves.php">Gloves</a>
            <a href="bags.php">Bags</a>
            <a href="maAcc.php">Accessories</a>
          </div>
        </div>
        <li><a href=Nutrition.php>Nutrition</a></li>
        <li><a href=about.html>About us</a></li>
        <li><a href="chartPurchase.php">Contact us</a></li>
        <li><a href="orderForm.php" target="_blank">View Order</a></li>
      </ul>
      <h1 align="center" style="font-size: 80px;">All the gym equipment needed for home</h1>
      <div class="flexBox">
        <div class="row1">
          <div class="col1">
            <label>Trojan power gym R2500.00</label></br></br>
            <img src="gymMerc/powerGym.jpg">
            </br></br></br></br></br></br>
            <button class="btn" style="font-size: 20px;" type="submit" onclick="addOrder()" name="submit1"><b>Add to cart</b></button>
          </div>
          <div class="col1">
            <label>Trojan power Tower R1500.00</label></br></br>
            <img src="gymMerc/powerTower.jpg">
            </br></br></br>
            <button class="btn" style="font-size: 20px;" onclick="addOrder()" name="submit2"><b>Add to cart</b></button>
          </div>
          <div class="col1">
            <label>Trojan weight rack R1200.00</label></br></br>
            <img src="gymMerc/weightRack.jpg">
            </br></br></br></br></br></br></br></br></br>
            <button class="btn" style="font-size: 20px;" onclick="addOrder()" name="submit3"><b>Add to cart</b></button>
          </div>
        </div>
      </br></br></br></br>
        <div class="row2">
          <div class="col1">
            <label>Trojan Solid Bench R1500.00</label></br></br>
            <img src="gymMerc/solidBench.jpg">
          </br></br></br>
          <button class="btn" style="font-size: 20px;" onclick="addOrder()" name="submit4"><b>Add to cart</b></button>
          </div>
          <div class="col1">
            <label>Trojan Tredmill R3500.00</label></br></br>
            <img src="gymMerc/tredmill.png">
          </br></br></br>
          <button class="btn" style="font-size: 20px;" onclick="addOrder()" name="submit5"><b>Add to cart</b></button>
          </div>
          <div class="col1">
            <label>Trojan exercise bike R2199.00</label></br></br>
            <img src="gymMerc/exercise bike.jpg">
          </br></br></br>
          <button class="btn" style="font-size: 20px;" onclick="addOrder()" name="submit6"><b>Add to cart</b></button>
          </div>
        </div>
        </br></br></br></br>
        <div class="row3">
          <div class="col1">
            <label>Trojan rower R2200.00</label></br></br>
            <img src="gymMerc/rower.png">
          </br></br></br>
          <button class="btn" style="font-size: 20px;" onclick="addOrder()" name="submit7"><b>Add to cart</b></button>
          </div>
          <div class="col1">
            <label>Trojan Combo Bench R1850.00</label></br></br>
            <img src="gymMerc/ComboBench.jpg">
          </br></br></br></br></br>
          <button class="btn" style="font-size: 20px;" onclick="addOrder()" name="submit8"><b>Add to cart</b></button>
          </div>
        </div>
      </br></br></br></br></br></br></br>
      </div>
      <div class="footer">
      <p>Copyright @ 2020 Musclegenics.com</p>
    </div>
    </form>
  </body>
</html>
