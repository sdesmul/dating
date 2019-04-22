<?php
/**
 * index page for my dating website
 * User: Samantha DeSmul
 * Date: 4/10/2019
 * Filename: index.php
 *
 */

//Start a session
session_start();

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


$f3->route('POST /interests', function ($f3) {

    $indoorActivities[] = array();
    $_SESSION['indoorActivities[]'] = $_POST['indoorActivities[]'];

    $outdoorActivities[] = array();
    $_SESSION['outdoorActivities[]'] = $_POST['outdoorActivities[]'];

    //display a view
    echo \Template::instance()->render('views/interests.html');
});

$f3->route('GET /personal-info', function ($f3) {
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['first_name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['phone'] = $_POST['phone'];

    //display a view
    echo \Template::instance()->render('views/personal_info.html');
});

$f3->route('POST /profile', function ($f3) {

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['first_name'] = $_POST['first_name'];

    //display a view
    echo \Template::instance()->render('views/profile.html');
});

$f3->route('POST /profile-summary', function ($f3) {
    //display a view
    echo \Template::instance()->render('views/profile_summary.html');
});




//run Fat-free
$f3->run();
