<?php
class DB_Connect
{
    private static string $dsn = "mysql:host=%s;dbname=%s;charset=%s";
    private static ?PDO $pdo = null;

    public static function dbConnect(): PDO {
        if (self::$pdo === null) {
            try {
                $dsn = sprintf(self::$dsn, Config::DB_HOST, Config::DB_NAME, Config::DB_CHARSET );
                self::$pdo = new PDO($dsn, Config::DB_USER_NAME, Config::DB_PASSWORD);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connexion à la base de donnée ok <br>";
            }
            catch (PDOException $e) {
                die();
            }
        }
        return self::$pdo;
    }
}