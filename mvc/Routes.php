<?php

Route::set('index.php', function() {
    Index::CreateView('Index');
});

Route::set('about-us', function() {
    AboutUs::CreateView('AboutUs');
   // AboutUs::test();
   // AboutUs::printUsers();
});

Route::set('about', function() {

    AboutUs::CreateView('About');

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

// Display all users
Route::set('listUsers1', function() {

    UserImpl::CreateView('ListUsers1');

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

// Adding new work order Client Version
Route::set('addWorkorder1', function() {

    WorkorderImpl::CreateView('AddWorkorder1');

});

// Delete workorder
Route::set('deleteWorkorder', function() {
    WorkorderImpl::deleteWorkorder($_GET['id']);
    WorkorderImpl::CreateView('ShowWorkorders1');

});

// Update workorder information first page
Route::set('updateWorkorder', function() {

    WorkorderImpl::CreateView('UpdateWorkorder');

});

// Update workorder for contractor
Route::set('updateWorkContractor', function() {

    WorkorderImpl::CreateView('UpdateWorkContractor');

});

// Update workorder information Contractor (confirmation)
Route::set('updateWorkContrInfo', function() {

    WorkorderImpl::updateWorkContrById($_POST["id"], $_POST["description"], $_POST["estimate"], $_POST["scheduled"], $_POST["compleated"]);

    WorkorderImpl::CreateView('UpdatedWorkContrInfo');

});

// Update workorder information Client (confirmation)
Route::set('updateWorkorderInfo', function() {

    WorkorderImpl::updateWorkorderById($_POST["id"], $_POST["description"], $_POST["location"], $_POST["received"] );

    WorkorderImpl::CreateView('UpdateWorkorderInfo');

});


// Accept workorder
Route::set('acceptWorkorder', function() {
    // accept workorder
    session_start();
    WorkorderImpl::acceptWorkorderById($_SESSION['contractor_id'], $_GET['id']);
    // display accepted wo
    //WorkorderImpl::CreateView('Contractor/AcceptedWorkorders');
    WorkorderImpl::CreateView('Dashboard');

});

// Cancel accepted workorder by contractor
Route::set('cancelWorkorder', function() {
    WorkorderImpl::cancelWorkorderById($_GET['id']);
    WorkorderImpl::CreateView('Dashboard');

});


// Only for client adding new work order
Route::set('newWorkorder1', function() {

    // Validate input
   $noError = WorkorderImpl::validate($_POST["description"], $_POST["location"], $_POST["received"]);

    if ($noError == true) {

    WorkorderImpl::addWorkorder1($_POST["description"], $_POST["location"], $_POST["received"] );

    WorkorderImpl::CreateView('newWorkorder1');

    }

});

Route::set('newWorkorder', function() {

    // Validate input
    WorkorderImpl::validate($_POST["description"], $_POST["estimate"], $_POST["location"], $_POST["received"], $_POST["scheduled"], $_POST["compleated"], $_POST["location_id"]);


   /* WorkorderImpl::addWorkorder($_POST["description"], $_POST["estimate"], $_POST["location"], $_POST["received"], $_POST["scheduled"], $_POST["compleated"], $_POST["location_id"]);

    WorkorderImpl::CreateView('newWorkorder');

    */
});

// Display all work orders

Route::set('listWorkorders', function() {

    WorkorderImpl::CreateView('ShowWorkorders');

});

// Display all work orders
Route::set('listWorkorders1', function() {

    WorkorderImpl::CreateView('ShowWorkorders1');

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

// Display session variables
Route::set('sessionTest', function() {

    LoginImpl::CreateView('SessionTest');

});


// Dashboard
Route::set('dashboard', function() {

    LoginImpl::CreateView('Dashboard');

});

// Display all contractors
Route::set('listContractors', function() {

    ContractorImpl::CreateView('Contractor/ListContractors');

});

//////// JSON //////////////////////

// Display all contractors
Route::set('contractors', function() {

    ContractorImpl::CreateView('api/read/contractors');

});



//////// Observer //////////////////////

// Notify client and dispatcher if contractor accepted a workorder
//  or scheduled a visit date.

Route::set('test22', function() {

    ContractorImpl::CreateView('Contractor/ObserverWorkorders');

});

///////////////////////////////////////////////////

//////// Calendar/Scheduling //////////////////////

Route::set('calendar', function() {

    ContractorImpl::CreateView('Calendar/calendar');

});

// Test calendar generator
Route::set('test-calendar', function() {

    ContractorImpl::CreateView('Calendar/TestCalendar');

});

// Test calendar generator
Route::set('schedule', function() {

    ContractorImpl::CreateView('Calendar/schedule');

});

// Test calendar generator
Route::set('test-schedule', function() {

    ContractorImpl::CreateView('Calendar/testSchedule');

});

// Calendar with prev and next month

Route::set('schedule1', function() {

    //session_start();
    ContractorImpl::CreateView('Calendar/schedule');
    //WorkorderImpl::acceptWorkorderById($_SESSION['contractor_id'], $_GET['id']);

});

///////////////////////////////////////////////////////


////////   Maps   /////////////////////////////////////

Route::set('map', function() {

    ContractorImpl::CreateView('Map/test');

});

Route::set('map1', function() {

    ContractorImpl::CreateView('Map/test1');

});

//////////////////////////////////////////////////////////////////

?>
