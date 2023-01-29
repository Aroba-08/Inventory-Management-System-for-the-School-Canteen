<?php

$fn=$_GET['fname'];


$connection=mysqli_connect('localhost','id19723194_inventory_system','mW>?9uC@5n9Y<YnL','id19723194_inventory_management_system' );

$sql="insert into FoodList values(0,'".$fn."');";

mysqli_query($connection,$sql);

mysqli_close($connection);

header("location:FoodList_Admin.php");
?>
