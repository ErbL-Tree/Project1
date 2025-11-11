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

<center><h1> STOCK INVENTORY:SEARCH </h1></br>
    <form action="SearchView.php" method="post">
        <label> INPUT ITEM NAME TO SEARCH </label></br>
        <input type="text" name="searchh"></br>

        <input type="submit" value="CONFIRM">
    </form>
    </center>
</body>
</html>

<?php error_reporting(0);
$server="localhost"; 
$user="root"; 
$password="";
$ourdb= "SAMPLEONE";

$searchRow=$_POST["searchh"];

$tulay = mysqli_connect($server, $user, $password, $ourdb);
$showsql="SELECT * FROM Store WHERE ITEM in ('$searchRow')";
$transport= mysqli_query($tulay, $showsql);

echo "<center><table border='2'>";
echo "<tr style= 'background: linear-gradient(skyblue, lightgreen); background-repeat: no-repeat;background-attachment: fixed;'>
<td> ID </td>
<td> ITEM </td>
<td> PRICE IN PESO</td>
<td> SERIAL NUMBER</td>
<td> DESCRIPTION</td>
<td> ITEM TIME</td>
<td> STOCK QUANTITY</td>

</tr>";

while($nilagay= mysqli_fetch_assoc($transport)){ 
    echo "<tr style='background: linear-gradient(yellow, mintcream); background-repeat: no-repeat;background-attachment: fixed;'>";
    echo "<td>{$nilagay["ID"]} </td>";
    echo "<td>{$nilagay["ITEM"]} </td>";
    echo "<td>{$nilagay["PRICE_IN_PESO"]} </td>";
    echo "<td><center>{$nilagay["SERIAL_NUMBER"]} </center> </td>";
    echo "<td>{$nilagay["DESCRIPTION"]} </td>";
    echo "<td>{$nilagay["ITEM_TIME"]} </td>";
    echo "<td>{$nilagay["STOCK_QUANTITY"]} </td>";
    echo "</tr>";
}
echo "</table></center>"; 
?>