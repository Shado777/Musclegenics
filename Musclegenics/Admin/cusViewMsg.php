<?php
    $con = mysqli_connect('127.0.0.1','root','','musclegenics');
    $query = "SELECT messageID,cMessage FROM customermsg";
    $result1 = mysqli_query($con,$query);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Message view</title>
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
      .msg {
        width: 50%;
        height: auto;
        padding: 12px 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: white;
        resize: none;
    }
      .btn {
        width: 20%;
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
    <form action="" method="post">
      <div>
        <center>
          <img class="logo" src="Logo/logo1.jpg">
        </center>
      </div>
        <h1 align="center">View the message of the customer here by Message ID
        </h1>
        </br>
        <div style="font-size:30px;" align="center">
        <label><b>Message</b></label>
        <div class="msg" >
          <table border="black" width="100%">
            <tr>
              <th>Message ID</th>
              <th>Message</th>
            </tr>
            <?php while($row = mysqli_fetch_row($result1)):; ?>
            <tr align="center">
              <td><?php echo $row[0];  ?></td>
              <td><?php echo $row[1];  ?></td>
            </tr>
            <?php endwhile; ?>
          </table>
        </div>
      </div>
    </form>
  </body>
</html>
