<!--
Bodhi Woll
March 7th, 2025
Professor Snyder, Web and Mobile II
-->

<?php
$pageTitle = "Learn London | Activities";
include('./assets/inc/header.inc.php');
?>

<main>

    <section id="poster">
        <!--All my main content will be within poster-->
        <h2>There is Never a Dull Moment in London!</h2>
        <hr>
        <div id="splitContainer">
            <div id="left">
                <p>
                    There are many activities to come by in London. Whether it is theatrical, leisurely, in
                    nature, or sports, there are an abundance of options for you. To start with
                    <span>theatre</span>, London has many fantastic theatre programs. The most famous being the
                    <span>London National Theatre</span>, seen as the epicentre of London’s theatre scene. Other
                    theatres include the Royal Ballet and Opera, Shakespeare Globe, which allows you to go back
                    in time and see where the first ever Shakespeare plays were performed, and London Coliseum.
                    Many iconic plays take place in these, such as Les Miserables and The Phantom of the Opera.
                    Lastly, there are also more modern plays and shows like Harry Potter and the Cursed Child
                    and Frozen which I was able to see, and it was fantastic.

                    Going into more leisurely activities in London, there are many areas you can go to. If you
                    would like to <span>learn about the history</span> behind the United Kingdom, take a visit
                    to The British Museum or the Natural History Museum. I cannot recommend both of these
                    locations more, amazing art and even knight armor / crown jewels on display! If you want a
                    more unique experience, check out The Crystal Maze Experience. This awesome maze exists
                    based off of a 90’s TV show, where teams must solve challenges and compete against others.
                    Similar to that, there are many interactive and brain-challenging escape rooms like
                    Mission:Breakout, which was an absolute blast during my visit.


                </p>

                <div id="mobileImg">
                    <img src="./assets/images/phantomoftheopera.jpg"
                        alt="A picture of an actor playing in the Phantom of the Opera" class="planeImg">
                </div>

                <p>Quickly touching on nature activities, you can find more on the <a class="connector"
                        href="./nature.php">Nature page here</a>, many recommendations go out to London’s Royal
                    Parks. Many locations like <span>Green Park</span> and Hyde Park show beautiful landscapes
                    and hiking trails, and even contain memorials. You can also go on a lovely canal ride on
                    Regent’s Canal, which passes the <span>London Zoo</span> and Camden Lock.
                    <br><br>
                    Lastly, London has an extremely busy and <span>competitive sports scene</span>. To quickly
                    remark some, London has cricket, rugby, and tennis all having decent sized leagues and big
                    fanbases. Yet, most popular, football / soccer is what rules the sport scene in London and
                    even the whole United Kingdom. The United Kingdom is home to an overwhelming number of
                    clubs, including Manchester City, Manchester United, Chelsea, Arsenal, Tottenham, and many
                    many more. London is home to Arsenal, Millwall, West Ham, Chelsea, and a few more. Of course
                    this means there are many stadiums to travel to, and many games to watch. Football clubs are
                    a big part of the United Kingdom’s culture, which you can see more in depth on here.
                    Forewarning, different fan bases are very loyal to their teams, expect an earful if you are
                    wearing the wrong jersey or colors. The sports scene in London is vivid and full of exciting
                    games and fan bases. Overall, activities are all around you in this great city, it’s just up
                    to you to find what you like and do it. With all that there is to do in London, there is
                    truly never a dull moment.


                </p>
            </div>
            <div id="right">
                <img src="./assets/images/phantomoftheopera.jpg"
                    alt="A picture of an actor playing in the Phantom of the Opera" class="planeImg"
                    id="carouselImg">
                <div>
                    <button data-img="./assets/images/phantomoftheopera.jpg" class="carousel"
                        id="shard"></button>
                    <button data-img="./assets/images/britishmuesuem.jpg" class="carousel" id="pauls"></button>
                    <button data-img="./assets/images/soccer.webp" class="carousel" id="gherkin"></button>
                </div>
            </div>

        </div>
    </section>
    <section id="lower">
        <div id="wrapper">

            <div class="card">
                <h3>Learn About London Nature</h3>
                <img class="imgCard" src="./assets/images/richmond.webp"
                    alt="A picture of a deer walking through a forest with a kid on a bike in the background">
                <a class="cardLink" href="./nature.php">Visit Page</a>
            </div>
        </div>
        <div id="mapContainer">
            <div id="inside">
                <h3>Map of London</h3>
                <p>You can come check here to see where the activity is located in London. If there is anything
                    very strictly located in London there will be a pin on the map to it's location. Otherwise
                    it will be empty.</p>
                <dl>
                    <dt id="opt1">London National Theatre</dt>
                    <dd> Located right off of the Thames, in the center of London</dd>
                    <dt id="opt2">Green Park</dt>
                    <dd> Located in the City of Westminster, taking over a grand amount of land all for nature
                    </dd>
                    <dt id="opt3">London Zoo</dt>
                    <dd> Located in the boroughs of Westminster and Camden</dd>

                </dl>
            </div>
            <div id="mapImage">
                <img src="./assets/images/activitiesmap.jpg" alt="a green map of london" id="map">
            </div>

        </div>
    </section>

</main>
<?php
require_once("./assets/inc/footer.inc.php");
?>