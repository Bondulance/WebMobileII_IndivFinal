<!--
Bodhi Woll
March 7th, 2025
Professor Snyder, Web and Mobile II
-->

<?php
$pageTitle = "Learn London | Architecture";
include('./assets/inc/header.inc.php');

?>


<main>

    <section id="poster">
        <!--All my main content will be within poster-->
        <h2>London's Beautiful Architecture</h2>
        <hr>
        <div id="splitContainer">
            <div id="left">
                <p>If you are a fan of stunning architecture, London is the city for you. From some of the
                    tallest skyscrapers in the whole world, to old vintage styles, you can’t not find a new
                    favorite building on every street you step on.

                    To start with my personal favorite, we have the breathtaking skyscraper, <span>The
                        Shard</span>. This masterpiece was designed by Renzo Piano, an Italian architect. This
                    tower is the tallest building in all of the United Kingdom. As you can see in the picture,
                    it is really really tall, and looks exactly like a shard of glass, hence its name. The
                    building shockingly only took 3 years to build, with its start being in 2009 and finishing
                    early into 2012. The tower is mainly used for workspaces, though it has fine dining
                    restaurants, and other accommodations. The Shard is an extremely impressive feat of
                    architecture, and is absolutely stunning when you see it in person.

                </p>

                <div id="mobileImg">
                    <img src="./assets/images/shard.jpg"
                        alt="The Shard, a massive skyscraper right in the east sector of London."
                        class="planeImg">
                </div>

                <p>Second, we have the beautiful <span> St Paul's Cathedral</span>. This fantastic building
                    works as the mother church to many other daughter churches around London and the UK. The
                    cathedral features an iconic dome, many spires, and was the tallest building in London up
                    until 1963. It actually holds one of the highest domes of all time still, just second in the
                    UK to the Liverpool Cathedral. Interestingly enough, St Paul's Cathedral is not the same
                    cathedral that has always been around. If you have not read the <a class="connector"
                        href="./war.php">War</a> page yet, the cathedral has been hit and burned many times,
                    causing many redesigns and rebuilds. In the 20th century, London has a Great Restoration,
                    which helped get the beautiful Cathedral backup to its once upheld status.
                    <br><br>
                    Lastly, another favorite for both the name and the look, <span>The Gherkin</span>. This
                    design was made by Foster + Associates which was meant to try and make a futuristic / modern
                    look to a skyscraper. While the Gherkin is not typically open to the public, it also has
                    some public restaurants for visitors, similar to the shard. What is so cool about The
                    Gherkin is the power technology it uses. The Gherkin is using energy consumption techniques
                    that allows it to only use half the power that a building of that size would normally have
                    to use.


                </p>
            </div>
            <div id="right">
                <img src="./assets/images/shard.jpg"
                    alt="carousel image" class="planeImg"
                    id="carouselImg">
                <div>
                    <button data-img="./assets/images/shard.jpg" class="carousel" id="shard"></button>
                    <button data-img="./assets/images/saintpauls.webp" class="carousel" id="pauls"></button>
                    <button data-img="./assets/images/gherkin.jpg" class="carousel" id="gherkin"></button>
                </div>
            </div>

        </div>
    </section>
    <section id="lower">
        <div id="wrapper">
            <div class="card">
                <h3>Learn About London's History</h3>
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
                <dl>
                    <dt id="opt1">The Shard</dt>
                    <dd> In the Southwark Region, located right below the River Thames</dd>
                    <dt id="opt2">St Pauls Cathedral</dt>
                    <dd> The cathedral is in the City of London, in it's own area St Paul.</dd>
                    <dt id="opt3">The Gherkin</dt>
                    <dd> Also in the City of London center, not too far from the Shard.</dd>

                </dl>
            </div>
            <div id="mapImage">
                <img src="./assets/images/archictecturemap.jpg" alt="a green map of london" id="map">
            </div>

        </div>
    </section>

</main>
<?php
require_once("./assets/inc/footer.inc.php");
?>