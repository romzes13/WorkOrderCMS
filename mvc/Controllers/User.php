<?php

class User extends Controller {

    public static function listUsers() {
           // print_r(self::query("SELECT * FROM Handymans_list"));
        echo "<h4>Inside listUsers() </h4>";
        print_r(self::query("SELECT * FROM users"));

        $data = self::query("SELECT * FROM users");

    // set the resulting array to associative

    //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($data->fetchAll())) as $k=>$v) {
        echo $v;
    }

    }

    public static function addUser($name, $password) {

        // remove echo statements
        echo "user: ". $name;
        echo "<br>";
        echo "password: ".$password;
        echo "<br>";

        //TODO Add security and validate input

$sql ="INSERT INTO users (name, password) VALUES ('$name', '$password')";
        self::insert($sql);

        //echo $sql;

   //$query = $db->prepare( $sql );
   // $query->execute( array( ':username'=>$name, ':password'=>$password));



    }

}

?>
