<?php
class Admin {

    var $id, $email, $pwhash, $pwnonce, $name, $permissions;

    function auth() {
        // checks the session and attempts to authenticate the user
    }

    function login($email,$pw) {
        // authenticate the user and start a session for them.
    }
}

?>
