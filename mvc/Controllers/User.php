<?php

class User extends Controller {

    public static function listUsers() {
           // print_r(self::query("SELECT * FROM Handymans_list"));
        print_r(self::query("SELECT * FROM users"));

    }

    public static function addUser($name, $password) {

        // remove echo statements
        echo "user: ". $name;
        echo "<br>";
        echo "password: ".$password;
        echo "<br>";

$sql ="INSERT INTO users (name, password) VALUES ('$name', '$password')";
        self::insert($sql);

        echo $sql;

        //$query = $db->prepare( $sql );
   // $query->execute( array( ':username'=>$name, ':password'=>$password));



    }

}

?>
