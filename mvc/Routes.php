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
?>
