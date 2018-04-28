<?php

class UserImpl extends Controller {

    // Returns all users from database
    // TODO Error -> new TableRows
    public static function listUsers1() {
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

    ////////////////////////////////
    // Adds new user to database ///
    ////////////////////////////////
    public static function addUser($name, $password, $role) {

        // remove echo statements
        echo "user: ". $name;
        echo "<br>";
        echo "password: ".$password;
        echo "<br>";

        //TODO Add security and validate input

$sql ="INSERT INTO users (name, password, role) VALUES ('$name', '$password', '$role')";
        self::insert($sql);

        //echo $sql;

   //$query = $db->prepare( $sql );
   // $query->execute( array( ':username'=>$name, ':password'=>$password));
    }

    // Find user by name
    public static function findUser($name) {

        echo "<h4>Inside findUser() </h4>";

        print_r(self::query("SELECT * FROM users WHERE name='Roland'"));

        $data = self::query("SELECT * FROM users WHERE name='$name'");

        //return (self::query("SELECT * FROM users"));
        return $data;
    }

    // Find user by name and password
    public static function findUserByLogin($name, $password) {

        //echo "<h4>Inside findUser() </h4>";

    //print_r(self::query("SELECT * FROM users WHERE name='Roland'"));

$data = self::query("SELECT * FROM users WHERE name='$name' AND password='$password'");

        return $data;
    }

    // Returns all users
    public static function listUsers() {

        return (self::query("SELECT * FROM users"));

    }

    // Returns all users
    public static function deleteUser($id) {

        self::delete("DELETE FROM users WHERE id = '$id'");

    }

    // Find user by id
    public static function findUserById($id) {

$data = self::query("SELECT * FROM users WHERE id = '$id'");


        foreach( $data as $row ) {

            $user = new User($row['id'], $row['name'], $row['password'], $row['role']);


        return $user;
    }

}
    // Update user information
    public static function updateUserById($id, $name, $password, $role) {

   $sql = "UPDATE users SET name='$name', password='$password', role='$role' WHERE id='$id'";
        self::insert($sql);


    }
}

?>
