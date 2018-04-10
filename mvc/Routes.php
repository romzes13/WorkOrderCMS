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

// Display all users
Route::set('listUsers', function() {
    UserImpl::CreateView('ListUsers');
    //User::addUser();
});

// Delete user
Route::set('deleteUser', function() {
    UserImpl::deleteUser($_GET['id']);
    UserImpl::CreateView('ListUsers');

});

// Update user information first page
Route::set('updateUser', function() {
    //UserImpl::findUser($_GET['id']);
    UserImpl::CreateView('UpdateUser');
    //User::addUser();
});

// Update user information second page (confirmation)
Route::set('updateUserInfo', function() {
    UserImpl::updateUserById($_POST["id"], $_POST["userName"], $_POST["password"], $_POST["role"] );
    UserImpl::CreateView('UpdateUserInfo');
    //User::addUser();
});

// Adding new user
Route::set('addUser', function() {
    //User::listUsers();
    UserImpl::CreateView('AddUser');
    //User::addUser();
});

Route::set('newUser', function() {
    //User::listUsers();
    //$_POST["userName"];

    //This method prints extra confirmation
UserImpl::addUser($_POST["userName"], $_POST["password"], $_POST["role"]);
    UserImpl::CreateView('newUser');
});

// Adding new work order

Route::set('addWorkorder', function() {

    WorkorderImpl::CreateView('AddWorkorder');

});
Route::set('newWorkorder', function() {

    WorkorderImpl::addWorkorder($_POST["description"], $_POST["estimate"], $_POST["location"], $_POST["received"], $_POST["scheduled"], $_POST["compleated"], $_POST["location_id"]);

    WorkorderImpl::CreateView('newWorkorder');
});

// Display all work orders

Route::set('listWorkorders', function() {

    WorkorderImpl::CreateView('ShowWorkorders');

});

// Basic authentication
Route::set('login', function() {

    LoginImpl::CreateView('LoginView');

});

// Authorization
Route::set('loginAuth', function() {

    LoginImpl::loginAuth($_POST["userName"], $_POST["password"]);
    header("Location: dashboard");
    //LoginImpl::CreateView('Dashboard');

});

// Log out
Route::set('logout', function() {

    LoginImpl::logoutSession();

});

// Test authentication
Route::set('loginTest', function() {

    //LoginImpl::loginTest();
    LoginImpl::CreateView('session_test');


});

// Dashboard
Route::set('dashboard', function() {

    LoginImpl::CreateView('Dashboard');

});














?>
