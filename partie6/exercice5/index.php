<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 5 Partie 6</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie6/exercice1/?nom=Nemare&prenom=Jean'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie6/exercice2/?nom=Nemare&prenom=Jean'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie6/exercice3/?dateDebut=2/05/2016&dateFin=27/11/2016'" />
            <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie6/exercice4/?langage=PHP&serveur=LAMP'" />
            <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie6/exercice5/?semaine=12'" />
            <input type="button" value="Exercice 6" onClick="javascript:document.location.href = 'http://partie6/exercice6/?batiment=12&salle=101'" />
            <h1>Exercice 5  Partie 6</h1>
            <h2> Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12
            </h2>
            <p>
                <?php
                echo $_GET['semaine'];
                ?>
            </p>
    </body>
</html>
