<!--
Bodhi Woll
March 7th, 2025
Professor Snyder, Web and Mobile II
-->

<?php
$pageTitle = "Learn London | Homepage";
include('./assets/inc/header.inc.php');
?>


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