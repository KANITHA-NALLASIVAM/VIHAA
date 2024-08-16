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
else{
echo "Connection Successful". "<br>";
}

$sql = "SELECT * FROM details";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
if((!strcmp($row["Name"],$_POST["name"])))
{
echo "Emailid " . $row["Emailid"] . "<br>";
echo "Contactno " . $row["Contactno"] . "<br>";
echo "Buildingtype " . $row["Buildingtype"] . "<br>";
echo "Estimatedbudget " . $row["Estimatedbudget"] . "<br>";
echo "Withinteriordesign " . $row["Withinteriordesign"] . "<br>";
echo "Location " . $row["Location"] . "<br>";
echo "Message " . $row["Message"] . "<br>";
}
}
}
else { echo "0 results";
}
$conn->close();
?>
</body>
</html>