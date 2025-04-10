<!--
Bodhi Woll
March 7th, 2025
Professor Snyder, Web and Mobile II
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn London | Homepage</title>
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <script src="./assets/scripts/script.js" defer></script>
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


        <main>

            <section id="poster">
                <!--All my main content will be within poster-->
                <h2>Welcome to London!</h2>
                <hr>
                <div id="splitContainer">
                    <div id="left">
                        <p>
                            Welcome to the wonderful city of London! Deep in the heart of the United Kingdom, lies the
                            fantastic
                            capital city. London is home to so many fantastic sights, deep and rich history, and a
                            strong
                            connected culture. There is so much to see here, and so much to do. Hopefully you can find
                            some
                            help with planning and packing on the Traveling and Activities page. While we go more in
                            depth
                            on nearly everything London, throughout the site, here are a few facts. The United Kingdom
                            is
                            one of the only countries to this day that still holds a monarchy. While the monarchy no
                            longer
                            holds power in the government or everyday lives of the UK citizens, they do make for popular
                            figures in pop culture and role models for many.</p>

                        <div id="mobileImg">
                            <img src="./assets/images/london.webp" alt="picture of london from drone view"
                                class="londonPhoto">
                        </div>

                        <p>The city of London is split between the
                            counties of Middlesex, Surrey, Kent, Essex, and Hertfordshire. The city has a very diverse
                            setting,
                            having nearly 300 cultures and languages within the population. London is home to many
                            fantastic
                            buildings and monuments. Not to spoil too much (read more <a class="connector"
                                href="./monuments.php">here</a>), but the Tower of London, Palace
                            of Westminster, St Paul’s Cathedral, all are absolutely stunning. Many events have happened
                            in the
                            city, including the Summer Olympics in 2012, Buckingham Palace Openings, and many fantastic
                            tours
                            and guides. This city is very vast and there is a lot to learn for your first visit, or even
                            tenth.
                            I hope you find tons of helpful information to plan your trip or to learn more. Enjoy.
                        </p>
                    </div>
                    <div id="right">
                        <img src="./assets/images/london.webp" alt="picture of london from drone view" class="planeImg">
                    </div>
                </div>
            </section>

        </main>

        <?php
        require_once("./assets/inc/footer.inc.php");
        ?>