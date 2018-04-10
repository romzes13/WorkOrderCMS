<?php
/**
*   User class
*/
class User {

    var $id, $name, $password, $role;

    public function auth() {
        // checks the session and attempts to authenticate the user
    }

    public function loginAuth($name, $password) {
        // authenticate the user and start a session for them.
        //
    }

    // Constructor
    function __construct($id, $name, $password, $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->role = $role;

    }

    function getUser(){
         echo $this->name ."<br/>";
      }

    function getName(){
         echo $this->name;
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
