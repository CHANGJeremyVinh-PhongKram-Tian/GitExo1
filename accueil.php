<head>
    <meta charset="UTF-8" />
</head>
<body>
<p style="text-align: center" >
    <?php
    if((isset($_POST["nom"]) && !empty($_POST["nom"])) or (isset($_POST["prenom"]) && !empty($_POST["prenom"]))) {

// récupération des zones de saisie dans des variables locales
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];


        echo 'Bienvenu ' . $_POST["nom"] .' '. $_POST["prenom"];

    }
    ?>
</p>
</body>