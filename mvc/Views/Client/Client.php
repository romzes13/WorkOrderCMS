<?php

/*
        echo "GetId=: ".$_GET['id']."<br>";
        $user = UserImpl::findUserById($_GET['id']);
        echo "User: ".$user->name;
        echo "User name".$user->getName();
*/

        echo "Session id: ".$_SESSION['id']."<br>";
        $manager = ManagerImpl::findManagerByUserId($_SESSION['id']);

        echo "Manager's name: ".$manager->name."<br>";

        $locations= ManagerImpl::findLocationsByUserId($_SESSION['id']);


?>
