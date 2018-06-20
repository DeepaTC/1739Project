<html>
<head> <title> Properties </title>
</head>
<body>
<?php include('nav.html'); 
      include('login.html');
?>
<h1> Welcome to properties </h1>
<?php 
include ('db.php');
$q="select * from properties where Category='house'";
$properties=$conn->query($q);
while($prop=mysqli_fetch_assoc($properties))
{
echo $prop['Title'];
echo "<br/>";
echo "£".$prop['Rent'];
echo "<br/>";
echo $prop['NumberOfRooms'];
if($prop['Parking']=='y')
echo "<img src='parking.jfif' height='20px' width='20px'/>"; 
echo "<hr/>";
}

?>
</body>
