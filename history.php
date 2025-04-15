<!--
Bodhi Woll
March 7th, 2025
Professor Snyder, Web and Mobile II
-->

<?php
$pageTitle = "Learn London | History";
include('./assets/inc/header.inc.php');
?>


<main>

    <section id="poster">
        <!--All my main content will be within poster-->
        <h2>Let's Talk History</h2>
        <hr>
        <div id="splitContainer">
            <div id="left">
                <p>
                    The history behind the United Kingdom is long and vast, going over centuries upon centuries
                    of time. We are going to start at the peak of action in the country, at the lovely time of
                    the Great British Empire. The British Empire was the largest ever colony of countries or
                    states at the time, that were all controlled by the United Kingdom. The Empire lasted from
                    the early 1500’s all the way to 1783 which we will touch on towards the end. The Empire
                    started when Scotland attempted to expand overseas. This brought attention to the King of
                    England at the time, and with trade from other countries, the Empire gained it’s first land.
                    This being the tiny islands Gibraltar and Menorca. These were quite important though, as
                    they would grant control to the Mediterranean.

                    Meanwhile, in the East Indies, (India today), the British had gained control of the Dutch
                    East India Company, turning it to the well known British East India Company. This gained the
                    Empire an overloading amount of money, processing tea and other goods. Keeping the theme of
                    overseas, the British Empire found success colonizing Africa. The countries that were
                    colonized were present day South Africa, Nigeria, Zambia, Gambia, Sierra Leone, Sudan, The
                    Gambia, Kenya, Ghana, Egypt, Uganda, Zimbabwe, Botswana, and Somalia. This was a harsh time
                    for the natives in this country, the Empire enslaved many and made them work at rubber
                    plantations and other harsh working conditioned jobs.


                </p>

                <div id="mobileImg">
                    <img src="./assets/images/map.webp" alt="picture of london from drone view"
                        class="planeImg">
                </div>

                <p>Moving on towards the end of the British Empire, we have North America. The British were
                    putting harsh taxes on the American people, and this caused a revolution, one that the
                    British had not expected. While the British greatly outnumbered the American men, they still
                    lost the battle and surrendered, freeing America from the Empire. This would mark the
                    downfall of the Great British Empire.

                    To touch on World War One, the United Kingdom was a strong and crucial Allied power in the
                    war, who fought vigilantly against the Central Powers. The Central Powers included Germany,
                    Austria-Hungary, and The Ottoman Empire. The U.K.’s military was not very large, at least
                    compared to the others, but they were funded immensely, and handled the forefront of attacks
                    from Germany and Austria. Lastly, when it comes to World War II, the UK was once again
                    allied with the United States and many others against Germany, Japan, and others. They
                    fought expertly and ended up winning the war.

                </p>
            </div>
            <div id="right">
                <img src="./assets/images/map.webp" alt="picture of london from drone view" class="planeImg">
            </div>
        </div>
    </section>
    <section id="lower">
        <div id="wrapper">
            <div class="card">
                <h3>Learn About War on London</h3>
                <img class="imgCard" src="./assets/images/blitz.jpg"
                    alt="London during the blitz, a birds eye view of the city with a bomber plane above">
                <a class="cardLink" href="./war.php">Visit Page</a>
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