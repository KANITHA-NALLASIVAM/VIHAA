 <html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";

$db_name = "contact_details";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn)
{
echo "Connection failed!". "<br>";
}
else
{
echo "Connection Successful". "<br>";
}
$n=$_POST["name"];
$e=$_POST["emailid"];
$p1=$_POST["contactno"];
$p2=$_POST["buildingtype"];
$p3=$_POST["estimatedbudget"];
$p4=$_POST["interiordesign"];
$p5=$_POST["location"];
$p6=$_POST["message"];
$sql = "INSERT INTO details (Name,Emailid,Contactno,Buildingtype,Estimatedbudget,Withinteriordesign,Location,Message)
VALUES ('$n','$e','$p1','$p2','$p3','$p4','$p5','$p6')";
if (mysqli_query($conn, $sql))
{

echo "New record created successfully !";

}
else
{

echo "Error: " . $sql . " " . mysqli_error($conn);

}

$conn->close();

?>

</body>
</html>