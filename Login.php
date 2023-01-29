<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }

   }else{
      $error[] = 'Incorrect Email or Password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CCTC LOGIN</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="Aroba_index.css">


</head>



<body>

<div class="Aroba">

   <form action="" method="post">
    <h3>Consolatrix College of Toledo City Inc.</h3>
    <h3>Inventory Management System for the School Canteen</h3>
    <hr><br>


      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <div class="input-box">

        <input type="email" name="email" value=""  placeholder="Email">


      </div>


<div class="input-box">

        <input type="password" name="password" value="" placeholder="Password">

      </div>




      <select name="user_type">

         <option value="user">User</option>
         <option value="admin">Admin</option>

      </select>

      <input type="submit" name="submit" value="login now" class="form-btn">

      <p>Don't have an account? <a href="register_form.php"><blink>Register Now</blink></a></p>
   </form>

</div>

</body>
</html>
