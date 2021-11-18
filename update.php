<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello world </h1>

</body>

</html>
<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "gkn";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if (!$conn) {
    die("connection failer: " . mysqli_connect_error());
}

$sql = "update contacts set full_names = 'Kay', gender = 'Female',
contact_no='987', email ='Kaybae@gmail.com', city = 'Cherry Gardens', country ='Jamaica' where id = 4";

if (mysqli_query($conn, $sql)) {
    echo "records successfully updated";
} else {
    echo "records not updated: " . mysqli_error($conn);
}
mysqli_close($conn)

?>