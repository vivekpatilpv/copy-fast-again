<?php
$connection=mysqli_connect("localhost","root","");
if($connection)
{
    echo "connect";
} 
else {
    echo "could not connect";
}

mysqli_select_db($connection,"database1");
$fetch="select * from Table1";
$result1=mysqli_query($connection,$fetch);
$array=mysqli_fetch_assoc($result1);
echo json_encode($array);
?>
