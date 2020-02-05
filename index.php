<?php
/**
 * @author Shayna Jamieson
 * @version 1.0
 * URL: http://sjamieson.greenriverdev.com/328/pets-oop/index.php
 * Date: February 05, 2020
 * Description: This file serves to define a default route. When a user navigates to
 * the route of our directory they will be taken to the view that we have defined as views/home.html
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");
require_once("classes/pets.php");

// IF YOU START A SESSION DO IT AFTER THE AUTOLOAD

// instantiate F3
$f3 = Base::instance(); // invoke static

// define a default route
// when the user navigates to the route directory of the project
// this is what they should see
$f3->route('GET /', function() {

    // call the eat method
    $pet1 = new Pet();
    $pet1->eat();

    // call the talk method
    $pet1->talk();

//    // create a new view object by instantiating the fat-free templating class
//    $view = new Template();
//
//    // on the object template we render the home page through this route
//    echo $view->render('views/home.html');
});

// fun Fat-Free
$f3->run();