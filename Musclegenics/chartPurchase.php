<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="CSS_all_forms/all.css">
    <link rel="stylesheet" href="chart/chart.css">
    <meta charset="utf-8">
    <title>Purchase form</title>
  </head>
  <body style="background-image: url('background/cart1.jpg');
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size:cover;">
  <form action="chartPurchase.php" method="POST">
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
    <h1 align="center" style="font-size: 80px;">Please Contact us for any purchases</h1>
    <h3 align="center" style="font-size: 40px;">We strictly only accept cash and EFT</br>
      once you contact us a sales person will be in touch to
      process your purchase,
      </br>if you want to contact us alternatively
      our email is musclegenics1@gmail.com or our</br>
      telephone number is 0824505996.
    </h3>
    <div style="font-size:30px;"  align="center">

        <label for="fullname">Full Name</label></br>
        <input class="inputText" id="name"
        name="cname"></input></br>

        <label for="email">Email Address</label></br>
        <input class="inputText" id="email"
        name="cemail"></input></br>

        <label for="mobile">Mobile Number</label></br>
        <input class="inputText" id="phone"
        name="cphone"></input></br>

        <label for="address">Address</label></br>
        <input class="inputText" id="address"
        name="caddress"></input></br>

        <label for="province">Province</label></br>
        <select class="inputText "id="province" name="cprovince">
          <option value="No Value">Select</option>
          <option value="Gauteng">Gauteng</option>
          <option value="North West">North West</option>
          <option value="Limpopo">Limpopo</option>
          <option value="North Cape">North Cape</option>
          <option value="Western Cape">Western Cape</option>
          <option value="Eastern Cape">Eastern Cape</option>
          <option value="Kwa-Zulu Natal">Kwa-Zulu Natal</option>
          <option value="Mpumalanga">Mpumalanga</option>
          <option value="Free State">Free State</option>
        </select></br>
        <!--Mesage-->
        <label for="message">Message</label></br>
        <textarea class="msg" id="message" name="cmessage"></textarea></br>
        <!--Button-->
        <button type="submit" class="submit" onclick="verification()" name="submit">Submit</button>

      </br></br></br></br>
    </div>
  </br></br></br></br>
    <div class="footer">
    <p>Copyright @ 2020 Musclegenics.com</p>
  </div>
  <script type="text/javascript">
    function verification() {
      alert("Message send to Musclegenics");
    }
  </script>
  <?php
    if(isset($_POST['submit'])) {
      $con = mysqli_connect('127.0.0.1','root','','musclegenics');

      $cname = $_POST['cname'];
      $cemail = $_POST['cemail'];
      $cphone = $_POST['cphone'];
      $caddress = $_POST['caddress'];
      $cprovince = $_POST['cprovince'];
      $cmessage = $_POST['cmessage'];

      $sql = "INSERT INTO customermsg (cName,cEmail,cPhone,cAddress,cProvince,cMessage)
      VALUES ('$cname','$cemail','$cphone','$caddress','$cprovince','$cmessage');";

      mysqli_query($con,$sql);
      mysqli_close($con);
      //code below refreshes the page
      //header("refresh:6; url=chartPurchase.php");
    }
  ?>
    </form>
  </body>
</html>
