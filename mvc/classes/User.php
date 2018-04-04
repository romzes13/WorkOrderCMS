<?php
/**
*   User class
*/
class User {

    var $id, $name, $password, $role;

    public function auth() {
        // checks the session and attempts to authenticate the user
    }

    public function login($name, $password) {
        // authenticate the user and start a session for them.
    }

    // Constructor
    function __construct($name, $password, $role)
    {
        $this->name = $name;
        $this->password = $password;
        $this->role = $role;

    }

    function getUser(){
         echo $this->name ."<br/>";
      }




/** Commented

    // Magic setter
    public function __set($name, $password, $role)
    {
        $this->$name = $name;
        $this->$password = $password;
        $this->$role = $role;

    }

    // Magic getter
    public function __get($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }
 */

}

?>
