<?php

class LoginImpl extends Controller {

    public static function login() {

       // return (self::query("SELECT * FROM users"));

        return "Login method: ";

    }

    public static function loginTest() {

    ob_start();
    session_start();

    $name = "Roman";
    $pass = "1234";

    session_register('name');
    session_register('pass');

   // $_SESSION['name'] =


    }

    //
    public function loginAuth($name, $password) {
        // authenticate the user and start a session for them.
        // check user name is not empty and password
        // check database name and pass
        // get user by name

        if (!empty($name) && !empty($password)) {


            echo "Name: ".$name. " and password: ".$password." are not empty!";

            $data = UserImpl::findUserByLogin($name, $password);



            foreach( $data as $row ) {

             echo $row['id']."--";
             echo $row['name']."  --";
             echo $row['password']."  ";
             echo $row['role']."  <br>";

             // creating new user and exiting from forloop
            $user = new User($row['name'], $row['password'], $row['role']);

                echo "Test: found user = ".$user->name;

                    return LoginImpl::loginSession($user);
            }

            echo $data;

        } else
            echo "Name or password cannot be empty!";


        //$data = (self::query("SELECT * FROM users"));

    }

    // Check if user exist in session
    public function loginSession($user) {

        echo "<br>From login session: ".$user->name;
        echo "<br>From login session: ".$user->password;
        echo "<br>From login session: ".$user->role;

         session_start();


    $_SESSION['name'] = $user->name;
    $_SESSION['pass'] = $user->password;
    $_SESSION['role'] = $user->role;

    }

    // Session logout
      public function logoutSession() {

         session_start();

          echo "Logout Successfully ";
          session_destroy();
          header("Location: login");


    }









}

?>
