<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

</head>
<body>
<a href="Inventory.php"><button>Return to Inventory</button></a></br>
<center><h1> STOCK INVENTORY: REMOVE </h1></br>

<form action="Remove.php" method="post">
      <label> What ID must be selected to remove row </label></br>
      <input type="text" name="IDnumber">   </br>

      <input type="submit" value="Confirm">
      
      </form>
</center>
</body>
</html>

<?php error_reporting(0);
$server="localhost"; 
$user="root"; 
$password="";
$ourdb= "SAMPLEONE";

$removeRow=$_POST["IDnumber"];

$tulay = mysqli_connect($server, $user, $password, $ourdb);
$showsql="DELETE FROM Store WHERE ID=$removeRow";
$transport= mysqli_query($tulay, $showsql);


?>