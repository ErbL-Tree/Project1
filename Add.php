<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         body{
        background: url('shop.jpg') no-repeat center center fixed;
    background-size: cover;
     }
   form{
    

    margin: 0px auto;
    width: 300px;
    background: rgba(0,0,0,.5);
    padding: 50px;
    
   }
   form input{
    display: block;
    text-transform: uppercase;
    font-size: 20px;
    color: black;
    border: 2px solid red;
   }
    form label{
        
        color: white;
        text-transform: uppercase;
    }
    
   
   h1{
        font-size: 45px;
    color: mintcream;
    text-transform: uppercase;
    display: inline-block;
     }

    </style>
    
    <title>Document</title>
</head>
<body>
<a href="Inventory.php"><button>Return to Inventory</button></a></br>
<center>  <h1> STOCK INVENTORY:ADD </h1></br>

<form action="Add.php" method="post">
    <h3>  <label> Input item </label></br>
      <input type="text" name="itemm"></br>    

      <label> Input Price in peso </label></br>
      <input type="text" name="pricee"></br>

      <label> Input Serial Number </label></br>
      <input type="text" name="seriall"> </br>
      
      <label> Input Description </label></br>
      <input type="text" name="descriptionn"></br> 

      <label> Input Stock quantity</label></br>
      <input type="text" name="stockk"> </br> </h3>

      <input type="submit" value="Confirm">     
        </form> </center>

</body>
</html>




<?php error_reporting(0);
$server="localhost"; 
$user="root"; 
$password="";
$ourdb= "SAMPLEONE";

$codeitem=$_POST["itemm"];
$codeprice=$_POST["pricee"];
$codeserial=$_POST["seriall"];
$codedescription=$_POST["descriptionn"];
$codestock=$_POST["stockk"];

$tulay = mysqli_connect($server, $user, $password, $ourdb);
$showsql="INSERT INTO Store(ITEM, PRICE_IN_PESO, SERIAL_NUMBER, DESCRIPTION, STOCK_QUANTITY) VALUES ('$codeitem', $codeprice, $codeserial, '$codedescription', $codestock)";
$transport= mysqli_query($tulay, $showsql);
?>