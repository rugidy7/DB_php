<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gkn";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "database failed: " . mysqli_connect_error();
}

$sql = "DELETE FROM contacts where id = 4";

if (mysqli_query($conn, $sql)) {
    echo "records deleted succesfully";
} else {
    echo "records not deleted";
}
mysqli_close($conn)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>