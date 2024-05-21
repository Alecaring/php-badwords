<?php

$user = $_GET["txtArea"];
$bad_world = $_GET["badWords"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/string.css">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $user ?></h1>
    <h1><?php echo str_replace($bad_world, "***", $user) ?></h1>
</body>
</html>