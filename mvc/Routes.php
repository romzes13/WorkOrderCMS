<?php

Route::set('index.php', function() {
    Index::CreateView('Index');
});

Route::set('about-us', function() {
    AboutUs::CreateView('AboutUs');
    AboutUs::test();
});

Route::set('contact-us', function() {
    ContactUs::CreateView('ContactUs');
});

Route::set('test', function() {
    echo "test";
});

// Adding new user
Route::set('user', function() {
    User::listUsers();
    //User::addUser();
});

Route::set('addUser', function() {
    //User::listUsers();
    User::CreateView('AddUser');
    //User::addUser();
});

Route::set('newUser', function() {
    //User::listUsers();
    //$_POST["userName"];

    //User::CreateView('AddUser');
    User::addUser($_POST["userName"], $_POST["password"]);
});


?>
