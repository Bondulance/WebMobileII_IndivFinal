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
    <title>Learn London | Grading Page</title>
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
            <!--This is my hamburger menu-->
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
                <!---Close button, can see in my js file-->
                X
            </button>
        </div>


        <main>

            <section id="poster">
                <!--All my main content will be within poster-->
                <h2>Grading Page</h2>
                <hr>
                <div id="splitContainer">
                    <div id="left">
                        <ol>
                            <li>
                                <h4>Good Design Techniques - CRAP </h4>
                                <p>I used good CRAP Design Techniques, utilizing all four principles, by carefully
                                    and meticulously designing all pages with mind for all. When it comes to <span>Contrast</span>,
                                    I wanted a page that would have both lights and darks for the color scheme, but also
                                    different layouts to not bore the user. <span>Alignment</span>, had to do with my different layouts
                                    and padding choices. <span>Repetition</span> and <span>Proximity</span> were both used in hand with repeating designs as well
                                    padding to get the appropriate distances from element to element.
                                </p>
                            </li>
                            <li>
                                <h4>Organization of Information </h4>
                                <p>As someone that truly loves London, I wanted to give all the major points and matching images
                                    to add context to the content I provided. I also wanted to add maps, which when there were appropriate
                                    landmarks to put, I Photoshopped over a template to give the location pin for the user.
                                </p>
                            </li>
                            <li>
                                <h4>Content / Quality of Content</h4>
                                <p>I averaged around 500 words per page to give the user plenty of information. Of course,
                                    I still prioritized quality over quantity, so one or two pages fell slightly short at around 400.
                                    As stated above, I did a lot of research to get the best quality content to the user to make for
                                    interesting reads.
                                </p>
                            </li>
                            <li>
                                <h4>Code Desing Requirements</h4>
                                <p>I do have a global css file, as well as JS file, which holds the code to my image carousel and
                                    hamburger menu for mobile and tablet users. Without the help of my usual Add-on in VS Code, Prettier,
                                    I did all that I could to indent all my code to make it as easy as possible for the professor and TA.
                                    All pages of code have comments going over less straightforward code. Semantics were used to provide
                                    simple and straightforward HTML structure.
                                </p>
                            </li>
                            <li>
                                <h4>Interaction Design & Navigation</h4>
                                <p>Using JavaScript, I feel I made quite a bit of interaction with the image carousels, as well as
                                    the many hover effects and hamburger menu. Navigation is layered, and has cards on each page
                                    to help the user get to all pages in that certain category.
                                </p>
                            </li>
                            <li>
                                <h4>Works Cited Page (References)</h4>
                                <p>Works Cited Page contains all the hyperlinks to the Images that are used on Learn London.
                                    Visit the page <a href="./workcited.php" class="connector">here</a>.
                                </p>
                            </li>
                            <li>
                                <h4>Grading Page</h4>
                                <p>Grading Page going over everything done during the project. You're currently looking at it.</p>
                            </li>
                            <li>
                                <h4>Responsiveness</h4>
                                <p>Many media queries were used as well as other CSS properties. Those include: flex, flex-wrap,
                                    display: hidden, etc. That as well as the mobile navigation being a hamburger menu and many image
                                    resizes to make Learn London fully responsive for users.
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>

        </main>
        <?php
        require_once("./assets/inc/footer.inc.php");
        ?>