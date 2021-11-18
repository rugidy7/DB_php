<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "gkn";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if (!$conn) {
    echo "connection failed: " . mysqli_connect_error();
}

$sql = "INSERT INTO contacts(id, full_names, gender, contact_no, email, city, country)
    VALUES (4, 'kay', 'Female', '5641', 'kaybae@gmail.com', 'Chelsea', 'London')";

if (mysqli_query($conn, $sql)) {
    echo "records successfully added";
} else {
    echo "records not added: " . mysqli_error($conn);
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