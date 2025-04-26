<!--
Bodhi Woll
March 7th, 2025
Professor Snyder, Web and Mobile II
-->

<?php
$pageTitle = "Learn London | Grading";
include('./assets/inc/header.inc.php');
?>


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
                    <li>
                        <h4>Originial JavaScript component</h4>
                        <p>The Image carousel which can be seen on the Activities and Architecture pages.
                        </p>
                    </li>
                    <li>
                        <h4>DHTML component</h4>
                        <p>I made my comment form / review area fully AJAX, creating dynamic comment blocks.
                        </p>
                    </li>
                    <li>
                        <h4>Extras</h4>
                        <p>Fully AJAX comment form.
                        </p>
                    </li>
                    <li>
                        <h4>Fixes:</h4>
                        <p>Fixed all center aligned text issues and mobile responsiveness errors. (Mostly setting min-width's on images).
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