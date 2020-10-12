<?php
$con = mysqli_connect('127.0.0.1','root','','musclegenics');
$query = "SELECT messageID,cName,cEmail,cPhone,cAddress,cProvince FROM customermsg";
$result1 = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Messages</title>
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
        width: 15%;
        color:black;
        background-color: cyan;
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
    <h1 align="center" style="font-size: 80px;">Welcome to the Customer Message Page</h1>
    <h3 align="center" style="font-size: 40px;">This is for viewing Customer Messages sent by the contact page</br>
      Just click on view to see the message of the desired customer</br>
    </br>To go back to the homepage just click on the logo on top
    </h3>
    <div align="center">
       <a href="cusViewMsg.php" target="_blank"><button class="btn">View</button></a>
    </div>
  </br></br></br>
    </div>
        <table width="90%" align="center">
          <tr>
            <th align="center">Message ID</th>
            <th align="center">Customer Name</th>
            <th align="center">Customer Email</th>
            <th align="center">Customer phone number</th>
            <th align="center">Customer address</th>
            <th align="center">Customer Province</th>
          </tr>
          <tr>
            <?php while($row = mysqli_fetch_array($result1)):;?>
              <td align="center" bgcolor="white"><?php echo $row['messageID'];?></td>
              <td align="center" bgcolor="white"><?php echo $row['cName'];?></td>
              <td align="center" bgcolor="white"><?php echo $row['cEmail'];?></td>
              <td align="center" bgcolor="white"><?php echo $row['cPhone'];?></td>
              <td align="center" bgcolor="white"><?php echo $row['cAddress'];?></td>
              <td align="center" bgcolor="white"><?php echo $row['cProvince'];?></td>
          </tr>
        <?php endwhile;?>
      </table>
        <!---
        if(isset($_POST['submit'])){
          $id = $_POST['view'];
        }
        --->
    </div>
  </body>
</html>
