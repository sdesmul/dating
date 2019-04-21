<?php
/**
 * index page for my dating website
 * User: Samantha DeSmul
 * Date: 4/10/2019
 * Filename: index.php
 *
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class/ fat free object
//instantiate fat free
$f3 = Base::instance();

//turn on fatfree error reporting
//debugging in fat free is difficult
$f3->set('DEBUG', 3);

//Define a default root, there can be multiple routes
$f3->route('GET /', function () {
    //display a view;
    echo \Template::instance()->render('views/home.html');
});


$f3->route('GET /interests', function ($f3) {
    //display a view
    echo \Template::instance()->render('views/interests.html');
});

$f3->route('GET /personal-info', function ($f3) {
    //display a view
    echo \Template::instance()->render('views/personal_info.html');
});

$f3->route('GET /profile', function ($f3) {
    //display a view
    echo \Template::instance()->render('views/profile.html');
});

$f3->route('GET /profile-summary', function ($f3) {
    //display a view
    echo \Template::instance()->render('views/profile_summary.html');
});




//run Fat-free
$f3->run();
