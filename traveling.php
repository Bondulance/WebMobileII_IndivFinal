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
    <title>Learn London | Traveling</title>
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
                <h2>The Journey Begins!</h2>
                <hr>
                <div id="splitContainer">
                    <div id="left">
                        <p>
                            So you are embarking on your journey to the fantastic city of London, in the vast United
                            Kingdom. To start, let’s go over the packing list. If you are planning on going in the
                            <span>Spring</span>, then packing long sleeves, rainwear, and some lighter clothes will do
                            the job.
                            During the season, London gets weather at around the 50’s and 60’s degrees Fahrenheit. This
                            is a rainy time in London, yet also a very aesthetically pleasing time to be in the city.
                            Trees and flowers are blossoming and nature is very vibrant. If you are making a trip during
                            the <span>Summer</span>, this is a great time to pack some light clothes, shorts, T-shirts,
                            etc. This is
                            the warmest that you will get out of the United Kingdom, with temperatures coming in at high
                            70’s and low 80’s. You can still expect some rainfall, as you will find out that it rains
                            quite a bit in London, but only a select few dates. When it comes to Fall, the lovely hot
                            weather is sadly cooling down, but still not blisteringly cold. You will still get around
                            50’s and 60’s. <span>Fall</span> in London, comes with plenty of rain and aggressive winds,
                            be sure to
                            pack a windbreaker or two. Lastly, if you are making this trip in Winter, you should bring
                            coats, gloves, and all your winter gear. While the <span>Winter</span> in London is not
                            nearly as
                            aggressive as a Rochester Winter, the highs are still only in the 40’s, and have very cold
                            rains. Snow is not extremely common in London, but it is still safe to pack for it.

                        </p>

                        <div id="mobileImg">
                            <img src="./assets/images/plane.jpg"
                                alt="a view of a bright blue sky looking out of an airplane window." class="planeImg">
                        </div>

                        <p>Moving onto the flight, nearly all International Airports in the United States fly directly,
                            if not some sort of connecting flight, to one of many airports located in London. The most
                            popular is the Heathrow Airport, that being the largest and primary airport. An average
                            flight to London takes around 8 to 9 hours, from Buffalo that is. Buffalo Niagara
                            International Airport offers many
                            Air services that fly to London, including but not limited to JetBlue, American, British
                            Airways, and Delta. Of course, flying internationally is not the healthiest to the wallet.
                            The cheapest options range from $960 round trip up to around $1700. Of course, this is not
                            taking in first class or any other independent upgrades added to your flight.
                            <br><br>
                            Once you arrive in London, it is time for you to get around. It is very possible for you to
                            rent a car, as long as you have a valid driver's license, but you must know a very
                            imperative law in London. The United Kingdom drives on the left! Not the right. Other
                            methods of transport in London are taxis, which are very easy to come by, Uber, electric
                            bikes, and famously, the double decker bus. London is also very famous for the Tube, which
                            is an underground train hitting 272 stations and transporting nearly 5 million passengers a
                            day! The Tube, in many cases, is the cheapest method of transport too, and being someone
                            that has taken a ride in the Tube, I recommend it. Now that we have gone over many traveling
                            importances, have fun and explore, there are many hidden gems in London!

                        </p>
                    </div>
                    <div id="right">
                        <img src="./assets/images/plane.jpg"
                            alt="a view of a bright blue sky looking out of an airplane window." class="planeImg">
                    </div>
                </div>
            </section>

        </main>
        <?php
        require_once("./assets/inc/footer.inc.php");
        ?>