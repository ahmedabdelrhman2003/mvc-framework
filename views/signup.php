<?php
?>

<form  method="POST">
<html>
    <head>

    <link rel="stylesheet" href="style.css">
 <style>body {
    background-color :rgb(217, 228, 228);
  }
form{
    padding:20px;
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    width: 350px;
    height: 450px;
    background-color:rgb(255, 255, 255);
    box-sizing: border-box;
    
    border-color: rgb(6, 8, 8);
}
h2{
color: rgb(17, 12, 12);
text-align: center;
margin-top: 20px;
}
.name{
   /* border-bottom: 3px solid;*/
   width: 80%;
   height: 40px;
   margin: 5px;
   border: 1px solid rgb(88, 153, 196);;
 /*  border-radius: 25px;*/
   background-color: rgb(248, 248, 248);
   color: rgb(139, 139, 139);
   /*text-transform: uppercase;*/
   font-weight: 500;
   font-size: 15px;
   /* box-shadow:-5px -5px 5px rgba(255, 255, 255, 0.3),
    5px 5px 5px rgba(0, 0, 0, 0.1); */
}
.h4{
  margin-left:10px;
    padding-left: 10px;
    left: 10%;
}
.login{

    width: 80%;
    height: 40px;
    margin: 5px;
    border: 1px solid rgb(88, 153, 196);;
    color: rgb(52, 129, 165);
    
}</style>   
</head>
    <body>
           
       <div>
        <form >
            <h2>login form</h2>
            <h4>username</h4>
       <br> <input class="name" type="text" name="Name" placeholder="name"></br>
       <h4>password</h4>
       <br> <input class="name" type="password" name="password1" placeholder="password"></br>
       <br> <input class="login" type="submit" value="sign up" name="signup"></br>
        <input class="login" type="submit" value="login" name="login">
        
        </form>
       </div>
    </body>
    </html>
</form>