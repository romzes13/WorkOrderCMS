<?php
$auth_ok = 0;

$name = $_SERVER['SERVER_NAME'];
echo "Server name: ".$name;

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
if (isset($user) && isset($pass) && $pass === "test") {
    $auth_ok = 1;
}
if (!$auth_ok) {
    header('WWW-Authenticate:');
    header('HTTP/1.0 401 Unauthorized');

    exit;
}
?>
<h1>Authenticated!</h1>
