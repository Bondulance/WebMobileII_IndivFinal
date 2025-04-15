<!--
Bodhi Woll
March 7th, 2025
Professor Snyder, Web and Mobile II
-->

<?php
$pageTitle = "Learn London | Nature";
include('./assets/inc/header.inc.php');
?>


<main>

    <section id="poster">
        <!--All my main content will be within poster-->
        <h2 id="alt">London Nature</h2>
        <hr>
        <div id="splitContainerAlt">
            <div id="leftAlt">
                <p>
                    While London might seem like a big bustling urban center, there is still plenty of nature
                    for you to enjoy. There are many outdoor adventures for you to take on, and beautiful parks
                    / rivers for you to explore.

                    To start, you have the famous <span>River Thames</span>. The Thames is the second largest
                    river in all of the United Kingdom, flowing underneath the beautiful Tower Bridge, which you
                    can read more about <a class="connector" href="./monuments.php">here</a>. The Thames is
                    home to rich wildlife, many native birds and fish living right there. You can get sightings
                    of the cormorant and black-headed gull, both fantastic birds. You can also go on guided boat
                    tours, tubing, canoeing, kayaking, all sorts of great activities on the river.



                </p>
                <div>
                    <img src="./assets/images/thames.jpg"
                        alt="A group of children dressed in religious garbs talking to a woman on the right."
                        class="bigben">

                </div>


                <p>Secondly, London is home to two fantastic parks, <span>Richmond Park</span> and
                    <span>Brockwell Park</span>. To start with Richmond Park, this is a Royal Park, right in
                    London, home to amazing wildlife. You can go on many hiking trails and explore the fantastic
                    nature around the land. This park to home to many species of deer, kestrels, and
                    butterflies.This is also a refuge site for many endangered species of bats, stag beetles,
                    and others. When it comes to Brockwell Park, located in Southern London, it is a home and
                    center for nature preservation. This park, while it doesn't hold many species, holds many
                    cultural festivals. Some festivals that has taken place at Brockwell Park include the
                    Lambeth Country Show, attracting on average 150,000 people, Sunfall Festival, and Found
                    Festival. It is a park with a rich history of performances and great sights for when there
                    are no concerts. Of course, there are more nature reserves / forests around London,
                    including Epping Forest, Highgate Wood, London Wetland Centre, and many more. Explore to
                    your heart's content!


                </p>
                <div>
                    <img src="./assets/images/richmond.webp"
                        alt="The BST Hyde Park festival, shooting fireworks into the air with a huge crowd and vibrant blue lights"
                        class="bigben">
                </div>

            </div>
        </div>
    </section>
    <section id="lower">
        <div id="wrapper">
            <div class="card">
                <h3>Find Activities in London</h3>
                <img class="imgCard" src="./assets/images/phantomoftheopera.jpg"
                    alt="Phantom of the opera actor">
                <a class="cardLink" href="./activities.php">Visit Page</a>
            </div>

        </div>
        <div id="mapContainer">
            <div id="inside">
                <h3>Map of London</h3>
                <p>You can come check here to see where the activity is located in London. If there is anything
                    very strictly located in London there will be a pin on the map to it's location. Otherwise
                    it will be empty.</p>
                <dl>
                    <dt id="opt1">River Thames</dt>
                    <dd> Cuts through all of London, can be seen throughout the map</dd>
                    <dt id="opt2">Richmond Park</dt>
                    <dd> Located in the Richmond borough, home to much wildlife and flora.</dd>
                    <dt id="opt3">Brockwell Park</dt>
                    <dd> Located in the Lambeth borough, closer to the heart of London.</dd>
                </dl>
            </div>
            <div id="mapImage">
                <img src="./assets/images/naturemap.jpg" alt="a green map of london" id="map">
            </div>

        </div>
    </section>

</main>
<?php
require_once("./assets/inc/footer.inc.php");
?>