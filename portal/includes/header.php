<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <title><?=$title?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

  <script src="https://use.fontawesome.com/6a71565c22.js"></script>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
     <header>
        <!-- <img src="images/bannername.png" alt="bannername" id="banner"> -->
     <h1><i class="logo fa <?=$logo?>"></i>Andrea Enriquez - Web Design</h1>
        <nav class="topnav" id="myTopnav">
            <a href="index.php" class="active">Home</a>
           
            
            <!-- <a href="#" target="_blank">Name of project goes here</a> -->
            <!-- <a href="#" target="_blank">Name of project goes here</a> -->
            <a href="https://github.com/andreamartinez13/it162" target="_blank">GitHub</a>
            <a href="https://linkedin.com/in/andrea-enriquez-martinez" target="_blank">LinkedIn</a>
            <a href="contact.php" target="_blank">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>
     
   <main class="wrapper">
   
        <picture class="profile">
            <source media="(min-width: 1200px)" srcset="images/andreapicture.JPG">
            <source media="(min-width: 501px)" srcset="images/andreapicture.JPG">
            <img src="images/andreapicture.JPG" alt="That's me!">
        </picture>
        
        <h2 class="subheader"><?=$PageID?></h2>

        <!-- Header Ends Here -->