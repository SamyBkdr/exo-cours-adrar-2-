<?php
    echo "Hello world";
    ?>

    <?php
        $valeur = 30;
        $total = $valeur + 20;
        echo $total;
        ?>

///EXERCICE 1///

    <?php
        $int = 5;
        echo $int;
        echo gettype($int);
        $string = "samy";
        echo $string;
        $boolean = false;
        echo gettype($boolean);
        ?>

///EXERCICE 2///

<?php
    $a = 12;
    $b = 10;
    $total = $a + $b;
    echo $total;
    ?>

    <?php
        $a = 5;
        $b = 3;
        $c = $a + $b;
        echo $a;
        echo $b;
        echo $c;
        $a = 2;
        echo $a;
        $c = $b-$a;
        echo $a;
        echo $b;       
        echo $c;
        ?>

///EXERCICE 3///

    <?php
        $a = 15;
        $b = 23;
        echo $a;
        echo $b;
        $a = 23;
        $b = 15;
        echo $a;
        echo $b;
        ?>


///EXERCICE 4///

<?php
   // var_dump($argv);

    //$prix = $argv[1];
    //$article = $argv[2];
    //$tva = $argv[3]/100;
    //$result = $prix*$article*$tva;
    //print_r($result);
    ?>


///CONTENATION///

<?php
echo"<br>"
?>

//1//
<?php
$a = "Bonjour";
echo "\$a " . $a;
?>

<?php
echo"<br>"
?>

//2//
<?php
$a = "Bon";
$b = "jour";
$c = 10;
echo $a . $b . $c+1;
?>

<?php
echo"<br>"
?>

//3//
<?php
$a = "Bonjour";
echo "<p>" . $a . " l'adrar</p>";
?>



///FONCTIONS///

<?php
echo"<br>"
?>

//1//
<?php
function soustraction($a, $b) {
    return $a - $b;
}
echo soustraction(5, 2);
?>

<?php
echo"<br>"
?>

//2//
<?php
function arrondi($float) {
    return round($float);
}
echo arrondi(5.2);
?>

<?php
echo"<br>"
?>

//3//
<?php
function moy($a, $b, $c) {
    return($a + $b + $c)/3;
}
echo moy(5, 3, 10);
?>

<?php
echo"<br>"
?>

///CONDITION///

<?php
echo"<br>"
?>

//1//
<?php
    function test($int) {
        if($int > 0) {
            return "positif";
        } elseif($int < 0) {
            return "négatif";
        } else {
            return "vaut 0";
        }
    }
    echo "-1: " . test(-1);
    echo "1: " . test(1);
?>

<?php
echo"<br>"
?>

//2//
<?php
    function max_num($a, $b, $c) {
        return max($a, $b, $c);
    }
    echo max_num(5, 50, -2);
?>

<?php
echo"<br>"
?>

//3//
<?php
    function min_num($a, $b, $c) {
        return min($a, $b, $c);
    }
    echo min_num(5, 50, -2);
?>

<?php
echo"<br>"
?>


///TABLEAU///

<?php
echo"<br>"
?>

//1//
<?php
    function max_tableau($arr) {
        return max($arr);
    }
    echo max_tableau(array(2, -30, 54));
?>


<?php
echo"<br>"
?>

//2//
<?php
    function moyenne_tableau($arr) {
        return array_sum($arr)/count($arr);
    }
    echo moyenne_tableau(array(2, -30, 54));
?>


<?php
echo"<br>"
?>

//3//
<?php
    function min_tableau($arr) {
        return min($arr);
    }
    echo min_tableau(array(2, -30, 54));
?>


///SUPER GLOBALES///

//1//

<form action="index.php" method="post">
<p>Le nombre a :</p>
      <input type="number" name="a">
      <p>Le nombre b :</p>
      <input type="number" name="b">
      <br>
      <br>
      <input type="submit" value="Envoyer">
</form>


<?php
    if(isset($_POST['a']) && isset($_POST['b'])){
        echo "La somme est égale à : ".$_POST['a']+$_POST['b'];
    }
?>



//2//



<form action="index.php" method="get">
<p>Le prix HT :</p>
      <input type="number" name="prix_ht">
      <p>Le nombre d'articles :</p>
      <input type="number" name="qte">
      <br>
	<p>Le taux de TVA:</p>
      <input type="number" name="tva">
      <br>
      <br>
      <input type="submit" value="Envoyer">
</form>


<?php
    if(isset($_GET['prix_ht']) && isset($_GET['qte']) && isset($_GET['tva'])){
        echo "La prix TTC est égal à : " . $_GET['prix_ht']*$_GET['qte']+($_GET['tva']*$_GET['qte'])
 . " €.";
    }
?>

<?php
echo"<br>"
?>
<?php
echo"<br>"
?>




///IMPORTATION DE FICHIER///

<?php
echo"<br>"
?>
<?php
echo"<br>"
?>

///EXERCICE 1///

<?php
echo"<br>"
?>
<?php
echo"<br>"
?>

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
            <input type="file" name="file">
            <br>
            <button type="submit">importer</button>
        </form>
    </body>
</html>



<?php
if (isset($_FILES['file'])) {
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $fichier = move_uploaded_file($tmpName, "./imgs/$name");
}
?>


                     ///EXERCICE 2///


<?php                     
echo"<br>"
?>
<?php
echo"<br>"
?>

<!DOCTYPE html>
<html lang="fr">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Importer</title>
      </head>
      <body>
            <form action="index.php" method="post" enctype="multipart/form-data">
            Envoyez plusieurs fichiers : <br />
            <input name="userfile[]" type="file" multiple/><br />
            <input type="submit" value="Envoyer les fichiers" />
            </form>
      </body>
</html>

<?php
    if (isset($_FILES['userfile'])) {
        $extensions_ok = array('png','jpg');   
        for($i = 0 ; $i < sizeof($_FILES['userfile']['name']) ; $i++) {
             //Cette ligne vient récupérer le nom originel du fichier
            $file_name = basename($_FILES['userfile']['name'][$i]);
            // replace les caractères accentués
            $accents = '/&([A-Za-z]{1,2})(grave|acute|circ|cedil|uml|lig);/';
            $string_encoded = htmlentities($file_name, ENT_NOQUOTES, 'UTF-8');
            $file_name = preg_replace($accents,'$1',$string_encoded);
            
            if (!in_array(substr(strrchr($_FILES['userfile']['name'][$i], '.'), 1), $extensions_ok)) {
                    echo '<span style="color: red;">Extension non autorisée</span>';
            } elseif (filesize($_FILES['userfile']['tmp_name'][$i]) > 3145728) {
                echo '<span style="color: red;">La taille du fichier dépasse les 3Mo</span>';
            } else {
                    move_uploaded_file($_FILES['userfile']['tmp_name'][$i], "./imgs/" . $_FILES['userfile']['name'][$i]);
            }
        }
    }
?>


<?php                     
echo"<br>"
?>
<?php
echo"<br>"
?>

///BASE DE DONNEES///

<?php                     
echo"<br>"
?>
<?php
echo"<br>"
?>


<?php
    $DB_NAME = "nom_bdd";
    $DB_USER = "root";
    $DB_PASS = "";

    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


       // Exécution de la requête SQL avec un try catch pour la gestion des exceptions (messages d’erreurs)
        try {
            // Requête pour stocker le contenu de toute la table le contenu est stocké dans le tableau $reponse
            $reponse = $bdd->query('SELECT * FROM table_test');
            // Boucle pour parcourir et afficher le contenu de chaque ligne de la table
            while ($donnees = $reponse->fetch()) {
                // Affichage des données par les colonnes de la bdd par leurs noms d’attributs respectifs
                echo '<p>' . $donnees['nom_attribut'] . ": ". $donnees['valeur_attribut'] . '</p>';
            }
        } catch(Exception $e) {
            // Affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    
?>

