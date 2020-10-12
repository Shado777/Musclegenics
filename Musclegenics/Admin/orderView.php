<?php
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');
    $query = "SELECT orderID,itemName,itemPrice FROM orders";
    $result1 = mysqli_query($con,$query);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order View</title>
    <style media="screen">
    .inputText{
      width: 15%;
      padding: 10px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      type:text;
    }
    .btn {
      width: 10%;
      color: black;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-align: center;
      background-color: cyan;
      type:submit;
    }
    </style>
  </head>
  <body bgcolor="#e0e0e0">
    <div>
      <center>
        <img class="logo" src="Logo/logo1.jpg">
      </center>
    </div>
    <h1 align="center">View the order of the customer here</h1>
  </br>
    <div style="font-size:30px;"  align="center">
      <button class="btn" type="button" name="view" style="font-size:20px;" onclick="toggle()">View</button>
    </br>
    <hr width="100%">
      <label><b>Order</b></label>
    </br></br></br>
      <table style="visibility: hidden" width="50%" style="" id= "para">
        <tr>
          <th>Order number:</th>
          <th>Item name:</th>
          <th>Item price:</th>
        </tr>
        <?php while($row = mysqli_fetch_row($result1)):; ?>
        <tr bgcolor="white">
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
        </tr>
      <?php endwhile; ?>
      </table>
      <script type="text/javascript">
      function toggle() {
        if (document.getElementById("para").style.visibility === "hidden") {
          document.getElementById("para").style.visibility = "visible";
        }
        document.getElementById('view').addEventListener('click', toggle);
      }
      </script>
    </div>
  </body>
</html>
