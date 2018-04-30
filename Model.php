<?php

class Database {
    public static $db;
    public static function connect () {
        $host = '127.0.0.1';
        $dbname = 'Bonnes-pratiques';
        $username = 'root';
        $password = 'rajvena';
        $charset = 'utf8';
        $collate = 'utf8_unicode_ci';
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => false,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
        ];

        try {
            self::$db = new PDO($dsn, $username, $password, $options);    
        } catch (Exception $e) {
            error_log($e->getMessage()); //In production
            exit('Problème de connexion avec la base de données'); 
        }
    }
}

class User extends Database {
    private $ID;
    private $first_name;
    private $last_name;
    private $birth_year;
    private $comments;

    public function __construct($first_name, $last_name, $birth_year, $comments) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birth_year = $birth_year;
        $this->comments = $comments;
    }

    public function __get($property) {
        switch($property) {
            case 'first_name' :
            return $this->first_name;
            break;
            case 'last_name' :
            return $this->last_name;
            break;
            case 'birth_year' :
            return $this->birth_year;
            break;
            case 'comments' :
            return $this->comments;
            break;
        }
    }
    public function create() {
        $row = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'birth_year' => $this->birth_year,
            'comments' => $this->comments
        ];
        $sql = 
            "INSERT INTO users SET 
            first_name=:first_name, 
            last_name=:last_name,
            birth_year=:birth_year, 
            comments=:comments;";

        $status = parent::$db->prepare($sql)->execute($row);
        if ($status) {
            $lastId = parent::$db->lastInsertId();
            $this->ID = $lastId;
        }
    }

    public function read($id, $arraycolumns) {
        // @TODO : extraire colonnes du tableau en entrée
        return parent::$db->query("SELECT $column FROM $table WHERE id = '$id'")->fetch();
    }
    public function update($id, $arraycolumns) {
        // @TODO : extraire colonnes du tableau en entréé
    }
    public function delete($id) {
        // @TODO : extraire colonnes du tableau en entréé
    }
}
