<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>badWords</title>
</head>

<body>
    <div class="contForm">
        <h1>Filter Your Comment Here</h1>
        <!--! ---------------------------------------------------------------------------------------- -->

        <!-- colleghiamo "action" al file .php di destinazione -->
        <!-- preleviamo i dati con il metodo GET -->

        <form action="string.php" method="GET">

            <!-- il modo per prelevare il dato in questo caso è usando l'attributo "name" negli inpunt -->

            <label for="txtArea">Insert Your Text</label>
            <textarea name="txtArea" cols="30" rows="10"></textarea>

            <label for="badWords">Insert Here The Word To Censor</label>
            <input name="badWords" type="badWords" id="badWords">

            <!-- il tipo di attributo "submit" identifica l'azione di inviare data -->

            <button type="submit">send</button>

        </form>

        <!--! ---------------------------------------------------------------------------------------- -->
    </div>
</body>

</html>

