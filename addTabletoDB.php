<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gkn";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id int(11) NOT NULL AUTO_INCREMENT,

    full_names varchar(255) NOT NULL,

    gender varchar(6) NOT NULL,

    contact_no varchar(75) NOT NULL,
    
    email varchar(255) NOT NULL,
    
    city varchar(255) NOT NULL,
    
    country varchar(255) NOT NULL,
    
    PRIMARY KEY (id)

    ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5";

if (mysqli_query($conn, $sql)) {
    echo "Table created";
    echo "<br>";

    $sql = "INSERT INTO contacts(id, full_names, gender, contact_no, email, city, country)
    VALUES (1, 'Rugidy', 'Male', '111', 'prune@gmail.com', 'Portmore', 'Jamaica'),
    (2, 'Blaxx', 'Male', '123', 'blax@gmail.com', 'Miami', 'USA'),
    (3, 'Peanut', 'Male', '783', 'peanut@homail.com', 'Hartford', 'USA'),
    (4, 'Kay', 'Female', '987', 'kaybae@gmail.com', 'Seaview', 'Jamaica'),
    (5, 'Urkel','Male', '256', 'urkel@yahoo.com', 'Portmore', 'Jamaica')";

    if (mysqli_query($conn, $sql)) {
        echo "records added successfully";
    } else {

        echo "error inserting records " . mysqli_error($conn);
    }
} else {
    echo "error inserting records and creating table: " . mysqli_error($conn);
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