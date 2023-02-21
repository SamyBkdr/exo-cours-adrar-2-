<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exo Php</title>
    </head>
    <body>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <h2>importer une image</h2>
            <input type="file" name="nom_article">
            <br>
            <input type="file" name="contenu_article">
            <br>
            <input type="submit" value="Ajouter">
        </form>
    </body>
</html>


<?php
    if(isset($_POST['nom_article']) && isset($_POST['contenu_article']))
?>


<?php
    $DB_NAME = "articles";
    $DB_USER = "root";
    $DB_PASS = "";
?>