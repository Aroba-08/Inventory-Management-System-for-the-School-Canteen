<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Canteen Registration</title>


</head>
<style>


*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   border-radius:10px;
}

/* mao ni ang background sa tanan*/
.Aroba {
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
   width: 500px;
   opacity: 0.9;
}

hr {
  border-top: 2px solid red;
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

.Aroba form input,
.Aroba form select{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}


/* mao ni ang background hover sa input*/
.Aroba form input:hover{
   background: #1B9CFC;
}
::placeholder{
  color: #333;
}

.Aroba form select option{
   background: #fff;
}

/* mao ni ang background sa register */
.Aroba form .form-btn{
   background: #f1c40f;
   color:black;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

/* mao ni ang background hover sa login */
.Aroba form .form-btn:hover{
   background: #1B9CFC;
   color:black;
}

.Aroba form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;

   border-radius: 5px;
}

.Aroba form p a{
   color:blue;

   border-radius: 5px;
}


.Aroba form p a blink{
   color:blue;

   border-radius: 5px;
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



.Aroba form .error-msg{
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
</style>
<body>

<div class="Aroba">

   <form action="" method="post">
     
      <h3>School Canteen</h3>
      <h3>Registration</h3>
      <hr><br>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="name" required placeholder="Enter your Full Name">
      <input type="email" name="email" required placeholder="Enter your Email">
      <input type="password" name="password" required placeholder="Enter your Password">
      <input type="password" name="cpassword" required placeholder="Confirm your Password">

      <select name="user_type">
      <option value="user">User</option>
      <option value="admin">Admin</option>
   </select>


      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="Login.php"><blink>Login</blink></a></p>
   </form>

</div>

</body>
</html>
