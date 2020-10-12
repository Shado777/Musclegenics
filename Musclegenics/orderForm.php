<?php
  $itemArray = array();
  $priceArray = array();
  $con = mysqli_connect('127.0.0.1','root','','musclegenics');

  if(isset($_POST['placeOrder'])){
    $con2 = mysqli_connect('127.0.0.1','root','','musclegenics');
    /*
    $nameTxt = $_POST['cname'];
    $numberTxt = $_POST['phone'];
    $emailTxt = $_POST['cemail'];
    $addressTxt = $_POST['caddress'];
    $itemTxt = implode("','",$itemArray);
    $priceTxt = implode("','",$priceArray);

    $query = "INSERT INTO orders(orderDate,cName,cPhone,cEmail,cAddress,itemName,itemPrice)
    VALUES (now(),'$nameTxt','$numberTxt','$emailTxt','$addressTxt','$itemTxt','$priceTxt')";
    mysqli_query($con,$query);
    mysqli_close($con);

    */
    $query3 = "DELETE FROM sesorder";
    mysqli_query($con2,$query3);
  }

  $query = "SELECT orderItem,orderPriceItem FROM sesorder";
  $result1 = mysqli_query($con,$query);

  $query2 = "SELECT SUM(orderPriceItem) as count FROM sesorder";
  $result2 = mysqli_query($con,$query2);

  if(isset($_POST['placeOrder'])){
    /*
    $nameTxt = $_POST['cname'];
    $numberTxt = $_POST['phone'];
    $emailTxt = $_POST['cemail'];
    $addressTxt = $_POST['caddress'];
    $itemTxt = implode("','",$itemArray);
    $priceTxt = implode("','",$priceArray);

    $query = "INSERT INTO orders(orderDate,cName,cPhone,cEmail,cAddress,itemName,itemPrice)
    VALUES (now(),'$nameTxt','$numberTxt','$emailTxt','$addressTxt','$itemTxt','$priceTxt')";
    mysqli_query($con,$query);
    mysqli_close($con);

    */
    $query3 = "DELETE FROM sesorder";
    mysqli_query($con,$query3);
  }
/*
  if(isset($_POST['placeOrder'])) {
    $cName = $_POST['cname'];
    $cPhone = $_POST['cphone'];
    $cEmail = $_POST['cemail'];
    $cAddress = $_POST['caddress'];
    $
    /*
    $dataArray = getdate();
    $year = $dataArray['year'];
    $mon = $dataArray['mon'];
    $day = $dataArray['mDay'];

    $queryIns = "INSERT INTO orders VALUES(orderDate,cName,cPhone,cEmail,cAddress,itemID,itemPrice)
    VALUES (now(),$cName,$cPhone,$cEmail,$cAddress,)";
  }
  */
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
    <style media="screen">
      .place {
        width: 20%;
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
      .remove {
        width: 40%;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        background-color: red;
        type:submit;
      }
      .inputText{
        width: 100%;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 3px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        type:text;
      }
      .footer{
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        overflow: hidden;
        margin: 0;
        background-color: #1b1b1b;
        color: white;
        text-align: center;
        padding: 1px;
      }
    </style>
  </head>
  <body>
    <form class="" action="orderForm.html" method="post">

    <div>
      <center>
        <img class="logo" src="Logo/PROG1.png">
    </div>
    <h1 align="center" style="font-size: 80px;">Orders ready to be processed</h1>
    </br>
    <div>
      <table width="50%" style="font-size: 30px;" align="center">
        <tr>
          <td><b>Full Name and Surname:</b></td>
          <td width="40%"><input class="inputText" type="text" name="cname"></td>
        </tr>
        <tr>
          <td><b>Phone Number:</b></td>
          <td width="40%"><input class="inputText" type="text" name="phone"></td>
        </tr>
        <tr>
          <td><b>Email:</b></td>
          <td width="40%"><input class="inputText" type="text" name="cemail"></td>
        </tr>
        <tr>
          <td><b>Address:</b></td>
          <td width="40%"><input class="inputText" type="text" name="caddress"></td>
        </tr>
      </table>
    </div>
    </br></br></br></br></br></br></br></br>
    <div>
      <table width="80%" style="font-size: 40px;">
        <tr align="left">
          <th>Item</th>
          <th>Price</th>
        </tr>
      <?php while($row1 = mysqli_fetch_array($result1)):;?>
        <tr align="left">
          <td><?php echo $row1['orderItem']; array_push($itemArray,$row1['orderItem']);?></td>
          <td><?php echo $row1['orderPriceItem']; array_push($priceArray,$row1['orderPriceItem']);?></td>
        </tr>
        <?php endwhile;?>
        <tr>
          <td><hr></td>
          <td><hr></td>
        </tr>
      </table>
    </br>
        <table width="80%" style="font-size: 40px;" align="left">
          <tr>
            <th align="left">Total: </th>
            <th></th>
            <?php $sum =0;
            $row2 = mysqli_fetch_assoc($result2);
            $sum = $row2['count'];
            ?>
            <th align="left">R <?php echo $sum;?></th>
          </tr>
        </table>
      </div>
      </br></br></br></br>
      <div align="center">
        <button class="place" type="button" style="font-size: 25px;" onclick="myFunc()" name="placeOrder"><b>Place Order</b></button>
      </div>
      </br></br></br></br></br></br>
      <div class="footer">
        <p>Copyright @ 2020 Musclegenics.com</p>
      </div>
      <script>
        function myFunc() {
          alert("Order has been placed");
        }
      </script>
    </form>
  </body>
</html>
