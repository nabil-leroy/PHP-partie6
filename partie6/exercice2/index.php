<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 2 Partie 6</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie6/exercice1/?nom=Nemare&prenom=Jean'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie6/exercice2/nom=Nemare&prenom=Jean'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie6/exercice3/?dateDebut=2/05/2016&dateFin=27/11/2016'" />
            <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie6/exercice4/?langage=PHP&serveur=LAMP'" />
            <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie6/exercice5/?semaine=12'" />
            <input type="button" value="Exercice 6" onClick="javascript:document.location.href = 'http://partie6/exercice6/?batiment=12&salle=101'" />
            <h1>Exercice 2  Partie 6</h1>
            <h2> Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean
            </h2>
            <p>
                <a href = "index.php?nom=Nemare&prenom=Jean"></a>
                <?php
                if (isset($_GET['age'])) { // On a l'age
                    echo 'Son age est de  ' . $_GET['age'];
                } else { // Il manque des paramètres, on avertit le visiteur
                    echo 'Il faut renseigner un age!';
                }
                ?>
            </p>
    </body>
</html>
