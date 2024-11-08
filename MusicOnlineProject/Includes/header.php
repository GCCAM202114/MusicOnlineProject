<?php
// display php errors

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

// Update this with the new link each time you make a new folder
define("ROOT_DIR", '/MusicOnlineProject/');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Online</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Reem+Kufi+Ink&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT_DIR ?>Assets/Css/styles.css"> 
</head>
<body>
<?php include 'navigation.php'; ?>  
