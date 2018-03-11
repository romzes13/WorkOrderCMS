<?php
//echo $_GET['url'];

require_once( 'Routes.php' );

function __autoload($class_name) {
    if (file_exists('./classes/'.$class_name.'.php')) {
            require_once './classes/'.$class_name.'.php';

    }   else
            if (file_exists('./Controllers/'.$class_name.'.php')) {
                    require_once './Controllers/'.$class_name.'.php';

            }
}


?>
