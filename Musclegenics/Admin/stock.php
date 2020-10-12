<?php
$con = mysqli_connect('127.0.0.1','root','','musclegenics');
$query = "SELECT stockID,stockName,stockPrice,stockQuantity FROM stock";
$result1 = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Logo/logo1.css">
    <meta charset="utf-8">
    <title>Stock Page</title>
    <style>
      table,th,td {
        border: 1px solid black;
        border-spacing: 0px;
      }
      th,td {
        font-family: calibri;
        font-size: 25px;
      }
      button {
        width: 15%;
        color:black;
        background-color: green;
        height: 40px;
        font-size: 20px;
      }

    </style>
  </head>
  <body bgcolor="#e0e0e0">
    <div>
      <center>
        <a href="Homepage.php" alt="Return to homepage"><img class="logo" src="Logo/logo1.jpg"></a></center>
    </div>
   </br>
   <h1 align="center" style="font-size: 80px;">Welcome to the Stock Page</h1>
   <h3 align="center" style="font-size: 40px;">This is for viewing and updating stock</br>
     Just click on update to update the sdesired stock's</br>
     price and quantity.
   </br></br>To go back to the homepage just click on the logo on top
   </h3>
   <div align="center">
      <a href="stockUpdate.php" target="_blank"><button>Update</button></a>
   </div>
 </br></br>
 </br>
 </div>
    <table width="90%" align="center">
      <tr>
        <th align="center">Stock ID</th>
        <th align="center">Stock Name</th>
        <th align="center">Stock Price</th>
        <th align="center">Stock Quantity</th>
      </tr>
      <?php while($row = mysqli_fetch_array($result1)):;?>
        <td align="center" bgcolor="white"><?php echo $row['stockID'];?></td>
        <td align="center" bgcolor="white"><?php echo $row['stockName'];?></td>
        <td align="center" bgcolor="white"><?php echo $row['stockPrice'];?></td>
        <td align="center" bgcolor="white"><?php echo $row['stockQuantity'];?></td>
    </tr>
  <?php endwhile;?>
    </table>
  </br></br></br></br>
  </body>
</html>
