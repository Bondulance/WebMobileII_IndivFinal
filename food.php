<!--
Bodhi Woll
March 7th, 2025
Professor Snyder, Web and Mobile II
-->

<?php
$pageTitle = "Learn London | Food";
include('./assets/inc/header.inc.php');
?>


<main>

    <section id="poster">
        <!--All my main content will be within poster-->
        <h2 id="alt">Good Eats in London!</h2>
        <hr>
        <div id="splitContainerAlt">
            <div id="leftAlt">
                <p>While contrary to popular belief, you are going to need food to survive your trip to London.
                    Lucky for you, London and the entirety of the United Kingdom, have many iconic and delicious
                    meals for you to try. The first and most iconic meal, <span>Fish and chips</span>, has been
                    a staple in the English cuisine for nearly 200 years. The origin of the meal actually took
                    inspiration from outside of the United Kingdom, and from the Jewish religion. As Jews cannot
                    cook on the Sabbath or Friday night, they would prepare meals in the afternoon and fry white
                    fish in matzo meal which was the origin of the fried fish. The English took inspiration from
                    this and added some chips, or of course as we know them, french fries.

                </p>
                <div>
                    <img src="./assets/images/fishnchips.jpg" alt="Fish and Chips" class="bigben">

                </div>


                <p>But wait, that is a lunch or dinner meal, we can’t have that for breakfast! You caught me, I
                    guess we can’t have any breakfast… BOOM a full <span>english breakfast</span> right in front
                    of your face. This tasty and personal favorite behemoth of a meal consists of strips of
                    bacon or sausages, eggs, a cup of baked beans, mushrooms, grilled tomatoes, and toast. This
                    meal is guaranteed to give you all the necessary nutrients you could need to start the day,
                    and personally I find this meal to be much better than the American breakfast. Hot take,
                    talk to a wall, embrace it and put some beans on toast.


                    <br><br>
                    Another lovely meal for you to indulge in is the <span>Sunday roast</span>. This is a
                    traditional dish for London and all of the United Kingdom, consisting of a roasted meat,
                    roasted potatoes, and other side dishes like a Yorkshire pudding, gravy, stuffing, and
                    usually some sort of condiments like Horseradish sauce or mustard. This classic meal came
                    from the British Isles, and it would be eaten after church on Sunday afternoon or evening.
                    Surprisingly, this meal was only done by the Isles for a good amount of time since its
                    creation, only finally spreading to mainland United Kingdom nearly 50 years after its
                    documented creation.

                </p>
                <div>
                    <img src="./assets/images/sundayroast.jpg"
                        alt="A sunday roast, consisting of beef, gravy, carrots, potatoes, and broccolini"
                        class="bigben">
                </div>
                <p>
                    Lastly, we have discussed a hearty breakfast, a delicious lunch with fish and chips, and a
                    lovely dinner with our Sunday roast. Let’s talk about London’s most infamous dessert, the
                    <span>Sticky toffee pudding</span>. Sticky toffee pudding is an extremely iconic meal in
                    London, made out of a moist sponge cake, toffee sauce, and usually has some sort of custard
                    or ice cream over top of the cake. Now the origins of this dessert are quite split. There
                    are many people that claim to have invented it, some being owners of pubs in 1907! Overall,
                    London has many fantastic and iconic meals for you to try out on your visit. Many of my
                    favorites were mentioned, and I highly recommend all of these. Quickly, when it comes to
                    restaurants, London is kind of like New York City, where it is a big melting pot of
                    cultures, so there are many other foods from different cultures, and a lot of them are
                    fantastic. Definitely give all of them a chance, the city has amazing options.

                </p>
            </div>
        </div>
    </section>
    <section id="lower">
        <div id="wrapper">

            <div class="card">
                <h3>Learn About London Culture</h3>
                <img class="imgCard" src="./assets/images/festival.jpg"
                    alt="BSTE Hyde Park Festival in London, United Kingdom">
                <a class="cardLink" href="./culture.php">Visit Page</a>
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