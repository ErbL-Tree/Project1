<!DOCTYPE html>
<html>
    <head>
<style>
body{
    font-family: Arial;
}
div.banner{
    background: url('shop.jpg') no-repeat center center fixed;
    background-size: cover;
    padding-top: 10%;
    padding-bottom: 10%;
}

div.homepagecontainer{
    width: 100%;
    max-width: 900px;
    height: 70vh;
    margin: 0 auto;
    
}
div.text h1{
font-size: 100px;
color: Black;
text-shadow: 2px 2px mintcream;


}
div.text p{
    font-size: 30px;
    color: mintcream;
    text-transform: uppercase;
    line-height: 100%;
    text-shadow: 2px 2px black;
}
p.texttagline{
    font-size: 30px;
    color: mintcream;
    text-shadow: 2px 2px black;

}
div.icon{
    margin-top:60px;
}
div.icon a{
    font-size: 40px;
    margin-left: 40px;
    padding: 7px 15px;
    background: rgba(0,0,0,0.5);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    color: grey;
    

}
div.icon a:first-child{
    margin-left: 0px;
}
div.icon a:hover{
    color: #fff;
    font-size: 45px;
    background: red;
    transition: .5s all;
}
h3.socialheader{
    font-size: 30px;
}
div.socials{
    text-align: center;
    padding: 60px 0 30px 0px;
    color: white;
}
div.socialicon a{
    font-size: 30px;
    height: 45px;
    width: 45px;
    display: inline-block;
    background: black   ;
    padding-top: 7px;
    border-radius: 50%;
    color: #fff;
    margin-left: 20px;
}
div.socialicon a:hover{
    background: red ;
    transition: 0.5s all;
}
div.button{
    width: 100%;
    padding: 20px 0px;
    text-align: right;
}

div.button a{

    font-size: 30px;
    color: black;
    border: 2px solid black;
    background-color: grey;
}

</style>

        <title>Store Management System</title>
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
        <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    </head>


    <body>
        <div class="banner">
            
        <div class= "homepagecontainer">
            <div class="text">  
                <h1>Store</h1>
                <p>Inventory Management System</p>
            </div>
            
                <p class="texttagline">
                    Know your Stocks, Manage your Inventory
                </p>
                <div class="icon">
                    <a href=""><i class="fa fa-apple"></i></a>
                    <a href=""><i class="fa fa-android"></i></a>
                    <a href=""><i class="fa fa-windows"></i></a>
            </div>
        </div>
        <div class="socials">
            <div class="homepagecontainer">
                <h3 class="socialheader">Say Hi And get in touch</h3>
                <div class="socialicon">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                </div>
                <div class="button">
                    <a href="LOGIN.php">Login</a>
                </div>
            </div>
        </div>
    </body>
</html>