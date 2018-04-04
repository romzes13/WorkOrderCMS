<?php

Route::set('index.php', function() {
    Index::CreateView('Index');
});

Route::set('about-us', function() {
    AboutUs::CreateView('AboutUs');
   // AboutUs::test();
    AboutUs::printUsers();
});

Route::set('contact-us', function() {
    ContactUs::CreateView('ContactUs');
});

Route::set('test', function() {
    echo "test";
});

// Adding new user
Route::set('user', function() {
    UserImpl::listUsers();
    //User::addUser();
});

Route::set('addUser', function() {
    //User::listUsers();
    UserImpl::CreateView('AddUser');
    //User::addUser();
});

Route::set('newUser', function() {
    //User::listUsers();
    //$_POST["userName"];

    //User::CreateView('AddUser');
    UserImpl::addUser($_POST["userName"], $_POST["password"]);
});

// Adding new work order

Route::set('addWorkorder', function() {

    Workorder::CreateView('AddWorkorder');

});
Route::set('newWorkorder', function() {

    Workorder::addWorkorder($_POST["description"], $_POST["estimate"], $_POST["location"], $_POST["received"], $_POST["scheduled"], $_POST["compleated"], $_POST["location_id"]);
});

?>
