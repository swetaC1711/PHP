<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, "shopping");

$str = "create table stationary (itemid int, itemname varchar(50), itemquantity int)";

if(mysqli_query($con, $str))
{
    echo "Database created";
}
else
{
    echo "Database not created".mysqli_error($con);
}


?>
