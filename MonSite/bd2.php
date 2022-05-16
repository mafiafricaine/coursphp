<?php
/*
    //La connexion à la base de données coursmysql
    $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root","");
//On utilise une méthode de la classe PDO qui permet de faire une
//requête et qui reçoit donc une requête en paramètre. Cette méthode
//retourne un objet de type PDOStatement qu'on mettra dans
//une variable $resultat
    $resultat = $pdo->query('SELECT * from users' );
//On va ensuite utiliser une méthode de classe de PDOStatement
//qui permet de récupérer le résultat sous forme de tableau.
//On fait un vardump pour voir ce qu'il contient.
    //var_dump($resultat->fetchAll());
    var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
    */
try {
    $pdo = new PDO('mysql:dbname=dbdump;host=localhost', "root", "");
    //On définit le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

/*
$titre = "Ajoutez un article en BD via PHP";
$description = "Blablablabla";
$datetime = new DateTime();
$date = $datetime->format('Y-m-d H:i:s');
$id = "1";
$pdo->exec('INSERT into articles2 VALUES (NULL,"' . $titre .
    '","' . $description . '","' . $date . '","' . $date . '" ,"' . $id . '" )');
*/
/*
$titre= "Ajouter un article en BD via PHP avec prepare et execute";
$description = "Blablablabla";
$datetime = new DateTime();
$date = $datetime->format('Y-m-d H:i:s');
$id = 3;
$req = $pdo->prepare('INSERT INTO articles2 VALUES(:id_article,
:article_name, :description, :createdAt, :updatedAt, :id_user_article)');
$req->execute(array(
'id_article' => NULL,
'article_name' => $titre,
'description' => $description,
'createdAt' => $date,
'updatedAt' => $date,
'id_user_article' => $id
));
*/
/*
$titre= "Ajouter Try/Catch un article avec prepare et execute";
$description = "Blablablabla";
$datetime = new DateTime();
$date = $datetime->format('Y-m-d H:i:s');
$id = 3;
try{
    $req = $pdo->prepare('INSERT INTO articles2 VALUES(:id_article,
:article_name, :description, :createdAt, :updatedAt, :id_user_article)');
    $req->execute(array(
        'id_article' => NULL,
        'article_name' => $titre,
        'description' => $description,
        'createdAt' => $date,
        'updatedAt' => $date,
        'id_user_article' => $id
        ));
    echo "Un nouvel article a été ajouté";
}catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
*/
