<?php
 require_once('../_inc/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 'Arsenal Football Club | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
    <?php
       //add_stylesheet();
      $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
      $page_object = new Page($page_name);
      $page_object->add_stylesheet();
    ?>

</head>
<body>
    <header class="container main-header">
        <div>
          <a href="home.php">
            <img src="../assets/img/logo.png" height="40" alt="Arsenal FC">
          </a>
        </div>
        <nav class="main-nav">
          <ul class="main-menu" id="main-menu">
          <?php
            $pages = array('Home'=>'home.php',
            'About us'=>'about.php',
            'Contact '=>'kontakt.php',
            'Question'=>'question.php'  
                );
            //echo(generate_menu($pages));
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                $pages['Log out'] = 'logout.php';
            }
            $menu_object = new Menu($pages);
            echo($menu_object->generate_menu());
            ?>
          </ul>
          <a class="hamburger" id="hamburger">
              <i class="fa fa-bars"></i>
          </a>
        </nav>
    </header>