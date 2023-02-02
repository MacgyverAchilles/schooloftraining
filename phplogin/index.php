<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      height: 100vh;
      background-color: #f2f2f2;
    }
    
    .sign-in-form {
      background-color: white;
      border: 1px solid lightgray;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 400px;
      margin: auto;
      text-align: center;
    }
    
    h2 {
      font-size: 28px;
      margin-bottom: 40px;
    }
    
    label {
      font-size: 16px;
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="text"], input[type="password"] {
      padding: 10px;
      width: 100%;
      font-size: 16px;
      margin-bottom: 20px;
      border: 1px solid lightgray;
      border-radius: 5px;
    }
    
    input[type="submit"] {
      background-color: #0077b5;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #005da3;
    }
  </style>
</head>
<body>
  <div class="sign-in-form">
    <h2>Sign In</h2>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" id="btn" value="login" name="submit">
    </form> 
  </div>
</body>
</html>
