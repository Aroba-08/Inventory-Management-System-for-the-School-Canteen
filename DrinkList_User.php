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
   width: 40%;
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




.CCTC{
      text-align: right;
  }
.CCTC leftaroba{
  text-align: left;
}

table, th, td {
  border: 1px solid black;
  padding:20px;
  background-color: white;
  width:auto;

}
th{
width: 400px;

}

td{
text-align: left;
padding:5px;
-webkit-transition: 0.5s;
}

td:hover {
  border: 1px solid red;
}

.jonel{
text-align: center;

}

.nel{
  display: flex;
  justify-content: center;
}

.search{
  border: 1px solid;
  padding:5px;
  overflow: hidden;

  width:200px;
}

.search input{
  float: left;
  padding:20px;
  font-size: 20px;


}

.Arobajonel {
  overflow: hidden;

}

.Arobajonel a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 18px 5px;
  text-decoration: none;
  font-size: 20px;

}

.Arobajonel a:hover {
  background-color: #ddd;
  color: black;
}



.Arobajonel input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 13px;
  margin-right: 16px;
  border: none;
  font-size: 15px;


}

  .Arobajonel input[type=text] {
    border: 1px solid;
  }
  input[type=text]:focus {
    border: 1px solid red;
  }



input[type=text], button {
  border: 1px solid;
  font-size: 15px;
  text-align:center;
  font-family: 'Poppins', sans-serif;
}




</style>

<body>

<div class="Aroba">

<form action="">
    <table class="nel">
      <div class="Aroba1">
      <div class="Aroba2"><h3>Drink List</h3></div><hr><br>

     
<tr><th>
    !!! Only Administrator Can Add Product !!!
    
    <br>
    
    --- All Users Are In Viewer Mode ---
    <br>
   
          <?php include 'getdrinks.php'; ?>
      </div>
</th></tr>
     

      
    </table></form><br>
<div class="CCTC">

        <button class="leftaroba" style="font-size:24px"><p><a href="user_page.php"> Back </a><a href="user_page.php" class="fa fa-sign-out"></a></p></a></button>

        <button style="font-size:24px;"><p><a href="index.php"><blink>Log Out </blink><a href="index.php" class="fa fa-sign-out"></a></p></a></button>
    </div>
</div>

</body>
</html>
