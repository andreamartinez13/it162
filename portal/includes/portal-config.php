<?php
/*
   portal-config.php


   Used to store all PHP configuration information
*/


//prevents data from being sent early
ob_start();


//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//creates a constant that stores the file name of the current page - cannot be changed
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//$title is a default variable we can change based on circumstances
$title = THIS_PAGE;

switch(THIS_PAGE){


   case 'index.php':
       $title = 'My Portal';
       $logo = 'fa-home';
       $PageID = 'Welcome';
   break;
  
   case 'contact.php':
       $title = 'Contact Me';
       $logo = 'fa-paper-plane-o';
       $PageID = 'Contact Me';
   break;


   case 'template.php':
       $title = 'Template';
       $logo = 'fa-pencil-square-o';
       $PageID = 'Copy me to make more pages';
   break;


   default:
       $title = THIS_PAGE;
       $logo = 'fa-home';
       $PageID = 'No PageID created';
  }

?>
