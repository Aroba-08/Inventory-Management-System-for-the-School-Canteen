<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CCTC CANTEEN</title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>

/* mao ni ang background sa register*/
*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-decoration: none;


}

.cctc input{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-decoration: none;
  font-size: 25px;


}




/* mao ni ang background sa tanan*/
.Aroba{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background-image: url('background1.jpg');
   background-repeat: no-repeat;
	 background-attachment: fixed;
	 background-size: 100% 100%;



}



/* mao ni ang background sa sulod sa form */
.Aroba form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 1 5px 10px rgba(0,0,0,.1);
   background: white;
   text-align: center;
   width: 50%;
   opacity: 0.9;


}

/* mao ni ang background sa Sales and Inventory */
.Aroba form h3{
   font-size: 25px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#333;
   background-color: white;
   border-radius: 5px;


}
hr {
  border-top: 2px solid red;
}








.Aroba form p{
   color:black;
   font-size: 18px;
}

.Aroba form p a{
   color:black;
}
blink {
  animation: 1s linear infinite condemned_blink_effect;
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}


.aroba p{
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  width: 40%;
  text-align: center;
  margin: auto;
  height: 50px;
  margin:0; padding:0;
  padding-top: 10px;
}
.aroba p:hover{
   background: #1B9CFC;
   color:white;

}

#mainmain {



}




  #mainmain a:hover{
     background: #1B9CFC;
     color:white;

  }
  #mainmain a {

  	border-radius:10px;
  	margin:10px;
  	border:1px solid #000;
  	background: #fff;
  	color: #222222;
  	font-size:20px;
  	display: inline-block;
  	width: 270px;
  	height: 85px;
  	margin-bottom: 5px;
    padding-top: 10px;
  }

  .CCTC{
      text-align: right;
  }
</style>

<body>

<div class="Aroba">

   <form action="" method="post">
    <h3>Consolatrix College of Toledo City Inc.</h3>
    <h3>Inventory Management System for the School Canteen</h3>

    <hr><br>

    <div id="mainmain">
    <a href="FoodList_User.php"><i class="foods"></i><br>Foods</a>
    <a href="DrinkList_User.php"><i class=""></i><br> Drinks</a>
    <a href="SchoolSupplies_User.php"><i class=""></i><br> School Supplies</a>
    <a href="#"><i class=""></i><br> Other Stuff</a>

    </div>

    <br>

    <div class="CCTC">
        <button style="font-size:24px"><p><a href="index.php"><blink>Log Out </blink><a href="index.php" class="fa fa-sign-out"></a></p></a></button>
    </div>
    </div>

</body>
</html>
