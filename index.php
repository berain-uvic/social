<?php
$conn = mysqli_connect("localhost", "root", "", "social");

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($conn, "INSERT INTO test VALUES(NULL, 'Steve')");
?>

<html>
<head>
    <title></title>
</head>
<body>
    Hello Bryan!
</body>
</html>
