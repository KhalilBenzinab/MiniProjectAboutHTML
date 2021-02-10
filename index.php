<!--<?php
//Connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=balises','root','');
        $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (Exception $e) {
        die("Une érreur a été trouvé : " . $e->getMessage());
    }
    $bdd->query("SET NAMES UTF8");
        
    $balise = $_GET["balise"];
    $balise = trim($balise); //pour supprimer les espaces dans la requête de l'internaute
    if (isset($balise))
    {
        $balise = strtolower($balise);
        $select_balise = $bdd->prepare("SELECT balise, description FROM balises WHERE balise like ? ");
        $select_balise->execute(array($balise));
    }
    else
    {
        $message = "Vous devez entrer votre balise dans la barre de recherche";
    }
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="headerHTML">HTML</div>
    <div class="container">
        <form action="index.php" method="get">   
            <input type="text" placeholder="Veuillez entrer la balise..." id="balise" name="balise">
            <input type="submit" value="Rechercher" id="btn">
            <?php
                while($terme_trouve = $select_balise->fetch())
                {
                    echo "
                        <div class='baliseNom'>
                            <h5>".$terme_trouve["balise"]."</h5>
                        </div> 
                        <div class='baliseDescr'>
                            <p> ".$terme_trouve["description"]."</p>
                        </div>
                        ";
                }
                $select_balise->closeCursor();
            ?>
        </form>
        <div class="ListeBalises">
            <h4>Balises de premier niveau</h4>
            <span>--html--</span>
            <span>--head--</span>
            <span>--body--</span>
            <h4>Balises d'en-tête</h4>
            <span>--link--</span>
            <span>--meta--</span>
            <span>--script--</span>
            <span>--style--</span>
            <span>--title--</span>
            <h4>Balises de structuration du texte</h4>
            <span>--abbr--</span>
            <span>--blockquote--</span>
            <span>--q--</span>
            <span>--cite--</span>
            <span>--sub--</span>
            <span>--sup--</span>
            <span>--h(1-6)--</span>
            <span>--img--</span>
            <span>--mark--</span>
            <span>--strong--</span>
            <span>--em--</span>
            <span>--figure--</span>
            <span>--audio--</span>
            <span>--video--</span>
            <span>--a--</span>
            <span>--br--</span>
            <span>--p--</span>
            <span>--hr--</span>
            <span>--address--</span>
            <span>--del--</span>
            <span>--dfn--</span>
            <span>--kbd--</span>
            <span>--progress--</span>
            <span>--time--</span>
            <span>--pre--</span>
            <h4>Balises de listes</h4>
            <span>--ul--</span>
            <span>--ol--</span>
            <span>--li--</span>
            <span>--dl--</span>
            <span>--dt--</span>
            <h4>Balises de tableau</h4>
            <span>--table--</span>
            <span>--caption--</span>
            <span>--tr--</span>
            <span>--th--</span>
            <span>--td--</span>
            <span>--thead--</span>
            <span>--tbody--</span>
            <span>--tfoot--</span>
            <h4>Balises de sectionnantes</h4>
            <span>--header--</span>
            <span>--nav--</span>
            <span>--footer--</span>
            <span>--section--</span>
            <span>--article--</span>
            <span>--aside--</span>
            <h4>Balises génériques</h4>
            <span>--span--</span>
            <span>--div--</span>
            <h4>Attributs des balises génériques</h4>
            <span>--class--</span>
            <span>--id--</span>
            <span>--style--</span>
        </div>    
    </div>
    


</body>
</html>