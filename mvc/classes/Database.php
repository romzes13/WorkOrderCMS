<?php

class Database {

    public static $host = "127.0.0.1";
    //public static $dbName = "handyman";
    public static $dbName = "workorder";
    public static $userName = "root";
    public static $password = "1982";

  private static function con() {

    $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$userName, self::$password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }

  public static function query($query, $params = array()) {

    $stmt = self::con()->prepare($query);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    return $data;
  }

    public static function insert($ins, $params = array()) {
        echo $ins;
        //echo $params;
        echo " Testing output:<br>";

        $username = "Romeo";
        $password = "test";

         $sql = "INSERT INTO users (name, password, role)
    VALUES (`John`, `Doe`, `john@example.com`)";

        $stmt = self::con()->prepare($ins);
        //$stmt->execute($params);
        //$stmt->execute($sql);
        $stmt->execute( array( ':username'=>$name, ':password'=>$password));

        $data = $stmt->fetchAll();
    return $data;


    }
}

?>
