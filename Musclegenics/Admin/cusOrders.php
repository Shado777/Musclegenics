<?php
$con = mysqli_connect('127.0.0.1','root','','musclegenics');
$query = "SELECT orderID,orderDate,cName,cPhone,cEmail,cAddress FROM orders";
$result1 = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Orders</title>
    <style>
      table,th,td {
        border: 1px solid black;
        border-spacing: 0px;
      }
      th,td {
        font-family: calibri;
        font-size: 25px;
      }
      .btn {
        width: 20%;
        color:black;
        background-color: cyan;
        height: 40px;
        font-size: 20px;
      }

    </style>
  </head>
  <body bgcolor="#e0e0e0">
    <center>
      <div>
      <a href="Homepage.php" alt="Return to homepage"><img class="logo" src="Logo/logo1.jpg"></a></center>
    </div>
    <h1 align="center" style="font-size: 80px;">Welcome to the Customer Order page</h1>
    <h3 align="center" style="font-size: 40px;">This is for viewing orders placed by customers</br>
      Just click on view next to the name</br> of the desired customer to view their orders</br>
    </br>To go back to the homepage just click on the logo on top
    </h3>
    <div align="center">
       <a href="orderView.php" target="_blank"><button class="btn" type="submit" name="submit">View</button></a>
    </div>
    <div>
      <table width="90%" align="center">>
        <tr>
          <th>Order number</th>
          <th>Date ordered</th>
          <th>Name</th>
          <th>Number</th>
          <th>Email</th>
          <th>Address</th>
        </tr>
        <?php while($row = mysqli_fetch_array($result1)):;?>
          <td align="center" bgcolor="white"><?php echo $row['orderID'];?></td>
          <td align="center" bgcolor="white"><?php echo $row['orderDate'];?></td>
          <td align="center" bgcolor="white"><?php echo $row['cName'];?></td>
          <td align="center" bgcolor="white"><?php echo $row['cPhone'];?></td>
          <td align="center" bgcolor="white"><?php echo $row['cEmail'];?></td>
          <td align="center" bgcolor="white"><?php echo $row['cAddress'];?></td>

    <?php endwhile;?>
      </table>
    </div>
  </body>
</html>
