<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/DB_Connect.php';
/**
 * Créez via PhpMyAdmin une nouvelle base de données table_test_phpmyadmin
 * Toujours via PhpMyAdmin, créez dans cette base de données deux nouvelles tables   utilisateur  ET   produit
 *
 * La table "utilisateur" doit contenir les champs suivants :
 *   - id           --> non signé et auto incrémenté
 *   - nom          --> non null, taille 50
 *   - prenom       --> non null, taille 50
 *   - email        --> non null, taille 100 et unique
 *   - password     --> non null, taille 100
 *   - adresse      --> non null, taille 255 ( équivaut au maximum )
 *   - code postal  --> non null... a vous de choisir le reste.
 *   - pays         --> non null, taille selon votre choix
 *   - date_join    --> .... no comment :-) et par défaut la date du jour.
 *
 * La table "produit" doit contenir les champs suivants :
 *   - id                  --> a vous de choisir
 *   - titre               --> a vous de choisir
 *   - prix                --> ... un prix doit pouvoir contenir des centimes, p.ex: 3,45 ( dans le cadre d'un prix en base de données on se moque de la devise )
 *   - description_courte  --> ... 255 caractères maximum, trouvez le meilleur type.
 *   - description_longue  --> ... plus de 255 caractères, trouvez le bon type.
 *
 * Bien qu'un gros indice soit donné à chaque fois, utilisez le type le plus approprié selon vous !
 *
 * Envoyez moi une capture d'écran des deux tables via Discord.
 */

// FIXME => Aucun code pour cette partie de l'exo, tout se passe sur PhpMyAdmin.


/**
 * Créez via PhpMyAdmin une nouvelle base de données table_test_php
 * Créez dans cette base de données deux nouvelles tables   utilisateur  ET   produit VIA PHP, en passant par une requête.
 *
 * La table "utilisateur" doit contenir les champs suivants :
 *   - id
 *   - nom
 *   - prenom
 *   - email
 *   - password
 *   - adresse
 *   - code postal
 *   - pays
 *   - date_join
 *
 * La table "produit" doit contenir les champs suivants :
 *   - id
 *   - titre
 *   - prix
 *   - description_courte
 *   - description_longue
 *
 * Si vous estimez avoir fais le bon choix des types dans l'exo 1, alors vous pouvez les réutiliser.
 *
 * Gardez ce code en local et envoyez moi le lien de votre repo Github pour que je puisse vérifier votre requête...
 */

// TODO Votre code ici.
$sql1 = "
        CREATE TABLE utilisateur (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            family_name VARCHAR(50) NOT NULL,
            name VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            password VARCHAR(12) NOT NULL,
            adresse VARCHAR(150) NOT NULL,
            postal_code TEXT NOT NULL,
            country VARCHAR(150) NOT NULL,
            date_join DATETIME DEFAULT CURRENT_TIMESTAMP,
            UNIQUE(email)
        )
    ";

DB_Connect::dbConnect()->exec($sql1);


    $sql2 = "

            CREATE TABLE produit (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(50) NOT NULL,
                price FLOAT NOT NULL,
                description_courte TINYTEXT NOT NULL,
                description_longue MEDIUMTEXT NOT NULL

        )
    ";

DB_Connect::dbConnect()->exec($sql2);