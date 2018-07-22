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

      // remove these statements
    //  echo $query;
    //  echo "<br>";
    //  echo $params;

    $stmt = self::con()->prepare($query);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    return $data;
  }

    public static function insert($ins, $params = array()) {
       // echo $ins;
       // echo $params;
        $arrlength = count($params);
      //  echo $arrlength;
      //  echo " Testing output:<br>";


        $stmt = self::con()->prepare($ins);
        $stmt->execute($params);

        // Confirmation about added record

      //  echo "<h4>New record has been added: ".$ins."</h4>";


    }


    // Insert and return last inserted id
    public static function insertGetLastId($ins, $params = array()) {

        $arrlength = count($params);

        $stmt = self::con()->prepare($ins);
        $stmt->execute($params);

        // Confirmation about added record

        echo "<h4>New record has been added: ".$ins."</h4>";

        $last_id = $stmt->lastInsertId();
        echo "last id = ".$last_id;

    }

        public static function delete($ins, $params = array()) {

        $arrlength = count($params);
        $stmt = self::con()->prepare($ins);
        $stmt->execute($params);

        // Confirmation about deleted record

      //  echo "<h4>Record has been deleted: ".$ins."</h4>";




    }
}

?>
