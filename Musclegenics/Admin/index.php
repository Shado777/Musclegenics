<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Login/login.css">
    <link rel="stylesheet" href="Logo/logo1.css">
    <meta charset="utf-8">
    <title>Login Page</title>

  </head>
  <body bgcolor="#e0e0e0">
    <form action="index.php" method="post">

    <div>
      <center><img class="logo" src="Logo/logo1.jpg"></center>
    </div>
   </br>
   <h1 align="center">Please Log in with your credentials</h1>
    <center><div class="inputBox">
        </br></br>
        <label for="username" style="font-size: 35px;">Username: </label>
        <input class="inputText" type="text" name="username" id="username" value="">
        </br>
        <label for="password" style="font-size: 35px;">Password: </label>
        &nbsp;<input class="inputText" type="text" name="password" id="password" value="">
      </br></br>
      <button class="submit" type="button" name="submit" style="font-size: 21px;" onclick="myFunc()" >Login</button>
      <script type="text/javascript">
        function myFunc() {
          var user = document.getElementById('username').value;
          var pass = document.getElementById('password').value;
          if(user == "rohan123" && pass == "RohaN@1945!"){
            window.location = "Homepage.php";
          }
          else{
            alert("Wrong Credentials please try again!");
          }
        }
      </script>
    </div></center>
    </form>
  </body>
</html>
<a href="Homepage.php">
