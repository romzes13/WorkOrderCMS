<?php

class AboutUs extends Controller {

    public static function test() {
           // print_r(self::query("SELECT * FROM Handymans_list"));
        print_r(self::query("SELECT * FROM users"));

    }

    public static function printUsers() {
           // print_r(self::query("SELECT * FROM Handymans_list"));
        return (self::query("SELECT * FROM users"));

    }

}

?>
