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
    <title>Learn London | War</title>
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
                <h2>War on London</h2>
                <hr>
                <div id="splitContainer">
                    <div id="left">
                        <p>War in the United Kingdom has been documented throughout many centuries. While I could tell
                            you about nearly all the battles that involved the United Kingdom, I would prefer to talk
                            strictly about London here. More history about the grand U.K. can be found <a href="./grading.php" class="connector">here</a>.

                            The first attack on London was throughout the first World War. The attacks were carried out
                            by German air campaigns, using airships to launch bombs from above at the English soil
                            below. Of course technology was not very good back then, and pilots were not as trained.
                            Many bombs that the German pilots threw landed miles off target. They did get better as the
                            war went on however. At one point in 1915, the Germans hit St Paul’s Cathedral, which caused
                            a massive fire and greatly damaged the beloved monument. Throughout World War One, the
                            Germans moved to using Zeppelins as their method of bombing, which we can see through
                            British propaganda.


                        </p>

                        <div id="mobileImg">
                            <img src="./assets/images/destruction.webp" alt="picture of london from drone view"
                                class="planeImg">
                        </div>

                        <p>Moving onto the biggest attack ever to London, which occurred during World War Two, The
                            London Blitz. These were horrific bombings, happening for 8 whole months against the United
                            Kingdom. The Germans systematically bombed London to spread panic and hysteria to the strong
                            country. At one point, Germany bombed London every night for 56 nights to make the country
                            go into a widespread panic. This also caused what is now known as the Second Great Fire of
                            London, a massive firestorm. This is because Germany had stocked their pilots with
                            incendiary bombs rather than the explosives. The incendiary bombs ended up hitting a lumber
                            mill, causing a massive fire which was unable to be put out due to a water shortage by
                            London firefighters.This killed nearly 250 civilians, 12 being the firefighters. Overall,
                            the blitz killed around 30,000 civilians and left the city in mass destruction. London did
                            hold strong however, and with planned attacks and defenses, making Germany abandon these
                            tactics for good.
                        </p>
                    </div>
                    <div id="right">
                        <img src="./assets/images/destruction.webp" alt="picture of london from drone view"
                            class="planeImg">
                    </div>
                </div>
            </section>
            <section id="lower">
                <div id="wrapper">
                    <div class="card">
                        <h3>Learn About London History</h3>
                        <img class="imgCard" src="./assets/images/map.webp"
                            alt="London during the blitz, a birds eye view of the city with a bomber plane above">
                        <a class="cardLink" href="./history.php">Visit Page</a>
                    </div>
                    <div class="card">
                        <h3>Learn About London Monuments</h3>
                        <img class="imgCard" src="./assets/images/bigben.jpg"
                            alt="London during the blitz, a birds eye view of the city with a bomber plane above">
                        <a class="cardLink" href="./monuments.php">Visit Page</a>
                    </div>
                </div>
                <div id="mapContainer">
                    <div id="inside">
                        <h3>Map of London</h3>
                        <p>You can come check here to see where the activity is located in London. If there is anything
                            very strictly located in London there will be a pin on the map to it's location. Otherwise
                            it will be empty.</p>
                    </div>
                    <div id="mapImage">
                        <img src="./assets/images/mao.jpg" alt="a green map of london">
                    </div>

                </div>
            </section>

        </main>
        <?php
        require_once("./assets/inc/footer.inc.php");
        ?>