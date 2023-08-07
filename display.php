<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, "shopping");

$str = "select * from stationary";

$result = mysqli_query($con, $str);

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    echo "<table border='1'>

<tr>

<th>ItemID</th>

<th>Item Name</th>

<th>Item Quantity</th>

</tr>";
foreach ($result as $row ) {
      echo "<tr>";
      echo "<td>" . $row["itemid"] . "</td>";
      echo "<td>" . $row["itemname"] . "</td>";
      echo "<td>" . $row["itemquantity"] . "</td>";
}
  
}
else
{
    echo "Results not found";
}
?>