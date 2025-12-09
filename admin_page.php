<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caseysminks Admin page</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    
<div class ="box">
    <h1> Welcome to caseysminks admin page <?= $_SESSION['name']; ?> </h1>
    <button>Logout</button>

</div>
</body>
</html>