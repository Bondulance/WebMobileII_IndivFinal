<?php

require_once("dbConn.php");
require_once("assets/inc/tools.inc.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            echo $pageTitle;
            ?></title>
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <script src="./assets/scripts/script.js" defer></script>
    <script src="./assets/scripts/ajax.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Raleway font, imported from google-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="container">
        <header>
            <div id="headerLeft">
                <img src="./assets/images/unionjack.webp" alt="flag of the United Kingdom" id="unionJack">
                <a href="./index.php" class="titleLink">
                    <h1 id="title">Learn London</h1>
                </a>
            </div>
            <nav>
                <div id="links">
                    <ul>
                        <li>
                            <a href="./index.php" class="navLink">
                                Homepage
                            </a>
                        </li>
                        <li>
                            <a href="./history.php" class="navLink">
                                History
                            </a>
                        </li>

                        <li>
                            <a href="./culture.php" class="navLink">
                                Culture
                            </a>
                        </li>
                        <li>
                            <a href="./activities.php" class="navLink">
                                Activities
                            </a>
                        </li>
                        <li>
                            <a href="./traveling.php" class="navLink">
                                Traveling
                            </a>
                        </li>
                        <li>
                            <a class="navLink" href="./war.php">
                                War on London
                            </a>
                        </li>
                        <li>
                            <a class="navLink" href="./monuments.php">
                                Monuments
                            </a>
                        </li>
                        <li>
                            <a class="navLink" href="./food.php">
                                Food
                            </a>
                        </li>
                        <li>
                            <a class="navLink" href="./architecture.php">
                                Architecture
                            </a>
                        </li>
                        <li>
                            <a class="navLink" href="./nature.php">
                                Nature
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="mobile">
                    <button type="button" id="mobileButton">
                        <img src="./assets/images/hamburger.png" alt="hamburger menu for Mobile screens" id="hamburger">
                    </button>
                </div>
            </nav>

        </header>


        <div id="hamburgerMenu">
            <ul>
                <li>
                    <a href="./index.php" class="navLink">
                        Homepage
                    </a>
                </li>
                <li>
                    <a href="./history.php" class="topLevel">
                        History
                    </a>
                </li>
                <li>
                    <a class="navLink" href="./war.php">
                        War on London
                    </a>
                </li>
                <li>
                    <a class="navLink" href="./monuments.php">
                        Monuments
                    </a>
                </li>
                <li>
                    <a href="./culture.php" class="topLevel">
                        Culture
                    </a>
                </li>
                <li>
                    <a class="navLink" href="./food.php">
                        Food
                    </a>
                </li>
                <li>
                    <a href="./activities.php" class="topLevel">
                        Activities
                    </a>
                </li>
                <li>
                    <a href="./traveling.php" class="topLevel">
                        Traveling
                    </a>
                </li>

                <li>
                    <a href="./architecture.php" class="topLevel">
                        Architecture
                    </a>
                </li>
                <li>
                    <a class="navLink" href="./nature.php">
                        Nature
                    </a>
                </li>
                <li>
                    <a href="./grading.php" class="navLink">
                        Grading Page
                    </a>
                </li>
            </ul>
            <button type="button" id="close">
                X
            </button>
        </div>