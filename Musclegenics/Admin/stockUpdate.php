<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Stock</title>
    <style media="screen">
      .inputText{
        width: 25%;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        type:text;
      }
      .submit {
        width: 10%;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        background-color: green;
        type:submit;
      }
      .exit {
        width: 10%;
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
    </style>
  </head>
  <body bgcolor="#e0e0e0">
    <form action="stockUpdate.php" method="post">

    <div>
      <center>
        <img class="logo" src="Logo/logo1.jpg">
      </center>
    </div>
    <h1 align="center">Update the price and the Quantity of the item here</br>
    Just add the stock id to confirm which stock needs to be updated</h1>
  </br>
    <div style="font-size:30px;"  align="center">
      <label for="id"><b>Item ID:</b></label>&nbsp;&nbsp;&nbsp;
      <input class="inputText" type="text" name="stockID"></input>
    </br></br>
      <label for="price">Stock Price: </label>
      <input class="inputText" id="price"
      name="price"></input></br>

      <label for="quan">Quantity: </label>
      &nbsp;&nbsp;&nbsp;
      <input class="inputText" id="quan"
      name="quan" value=""></input></br></br>

      <button class="submit" style="font-size: 20px;" onclick="myFunc()" name="update">Update</button>
      </div>

      <script type="text/javascript">
        function myFunc(){
          alert("Stock is updated");
        }
      </script>
      <?php
      if(isset($_POST['update'])) {
        $con = mysqli_connect('127.0.0.1','root','','musclegenics');

        $stID = $_POST['stockID'];
        $price = $_POST['price'];
        $quantity = $_POST['quan'];

        $sql = "UPDATE stock SET stockPrice='$price', stockQuantity='$quantity'
        WHERE stockID='$stID'";

        mysqli_query($con,$sql);
        mysqli_close($con);

        //code below refreshes the page
        //header("refresh:6; url=chartPurchase.php");
      }
      ?>
    </form>
  </body>
</html>
