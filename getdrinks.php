<!DOCTYPE html>
<html lang="en" dir="ltr">

  <style>

    *
    {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
    }

    table

    {

      border-style:solid;
      border-width:2px;
      border-color: black;
      margin-left: auto;
      margin-right: auto;
      border-spacing: 10px;
      background-color: white;
      border-radius: 10px;

    }

    table:hover
    {
      background: linear-gradient(50deg, #353b48, #7bed9f);
    }

    th, td
    {
      border-radius: 5px;
      padding: 5px;
      background: linear-gradient(50deg, #badc58, #ffda79);
    }



  </style>

<body>
<?php

$connection=mysqli_connect('localhost','id19723194_inventory_system','mW>?9uC@5n9Y<YnL','id19723194_inventory_management_system' );

$sql="SELECT * FROM DrinkList;";

try{

$result=mysqli_query($connection,$sql);

echo "<table border='1'>
<br>
<tr>

<th> Product Name </th>



</tr>";

while($row=mysqli_fetch_assoc($result))

{

  echo "<tr>";

  echo "<td>" . $row['firstname'] . "</td>";



  echo "</tr>";

}



}
catch(mysqli_sql_exception $e){
    echo $e.mysqli_error($connection);
}


mysqli_close($connection);

?>

</body>
</html>
