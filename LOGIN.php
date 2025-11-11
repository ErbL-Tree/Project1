<!DOCTYPE html>
<html>
    <head>
        <title>Store Management System</title>

       <style>
body{
    background: url('shop.jpg') no-repeat center center fixed;
    background-size: cover;
}
div.loginHeader{
    margin-bottom: 60px;
}
div.loginHeader{
text-align: center;
}
div.loginHeader h3{
    font-size: 45px;
    color: mintcream;
    text-transform: uppercase;
    display: inline-block;
    
}
div.loginHeader h3:after{
    content: '';
    display: block;
    height: 5px;
    background: mintcream;
    margin: 0 auto;
}

div.loginbody form{
    margin: 0px auto;
    width: 450px;
    background: rgba(0,0,0,.5);
    padding: 50px;
    border: 3px solid white;
    border-radius: 8px;
}
div.logininputcontainer{
   margin-top: 20px;
}

div.logininputcontainer label{
    display: block;
    text-transform: uppercase;
    font-size: 20px;
    font-weight: bold;
    color: white;
}

div.logininputcontainer input{
    height: 30px;
    width: 100%;
    border: 2px solid red;
    font-size: 20px;
    padding: 5px;
    text-align: center;
}

div.loginbuttoncontainer{
    margin-top: 40px;
    text-align: center;
}
div.loginbuttoncontainer button{
    font-size: 20px;
    padding: 10px 20px;
    background:mintcream;
    border: none;   
    color: black;
}

a button{
    font-size: 20px;
    padding: 10px 20px;
    background:mintcream;
    border: none;   
    color: black;
}
        </style>
    </head>
    <body>
    <a href='homePage.php' align="left"><button style="border: ridge"> Home Page</button></a> 
        <div class="container">
            <div class="loginHeader">
                <h3>Inventory Management System</h3>
            </div>
            <div class="loginbody">
                <form action="LOGIN.php" method="post">
                    <div class="logininputcontainer">
                        <label for="">Username</label>
                        <input placeholder= "username" type="text" name= "uname"/>
                    </div>
                    <div class="logininputcontainer">
                        <label for="">Password</label>
                        <input placeholder= "password" type="password" name="myPass" />
                    </div>
                    <div class="loginbuttoncontainer">
                    <button type="submit">login</button>
                       
                    </div>

                    <?php error_reporting(0);

$server="localhost"; 
$user="root"; 
$password="";
$ourdb= "SAMPLEONE";

$tulay = mysqli_connect($server, $user, $password, $ourdb);



$inputword=$_POST["uname"]; 
$large= strtoupper($inputword); 
$inputpass=$_POST["myPass"];


$ourCode ="SELECT * FROM try"; 
$size= mysqli_query($tulay, $ourCode);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!empty($inputword)){
        if(!empty($inputpass)){

if(mysqli_num_rows($size)>0){ 

    while($nilagay= mysqli_fetch_assoc($size)){ 
        $runn= $nilagay["NAME"];
        $passs= $nilagay["PASW"];
   
        if($inputword == $runn ){ 
          if($inputpass == $passs){  
            header('Location: Inventory.php');
               break;
           }else{
            echo "<h1 align='center' style='color:red'>invalid</h1>";
            break; 
        }
           
        }
        
        
    }
}
}}}
mysqli_close($tulay);
?>
                </form>


            </div>
        </div>
    
    </body>
</html>



