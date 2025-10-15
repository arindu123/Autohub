<?php

$con=new mysqli("localhost","root","","autohub");

if($con->connect_error)
{
   die("conection faild".$con->connect_error);
}
else{
    echo"fuck you now";
}

$userid=$_POST["uid"];
$usserp=$_POST["upassword"];

$sql="SELECT name,email,password FROM signup_details";

$result=$con->query($sql);

if($result->num_rows>0)
{
   while($row=$result->fetch_assoc())
   {
      echo $row["name"]." ".$row["email"]." ".$row["password"]."<br>";
   }
}
else
{
    echo " No results";

}
?>