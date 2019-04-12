<?php
/**
 * another test project
 * Created by PhpStorm.
 * User: Samantha DeSmul
 * Date: 4/10/2019
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
$f3->route('GET /', function(){
    //display a view
    $view = new Template();
    echo $view->render('views/home.html');
});

//run Fat-free
$f3->run();
