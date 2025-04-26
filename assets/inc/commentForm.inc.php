<main>

    <section id="poster">
        <!--All my main content will be within poster-->
        <h2>Leave a Review!</h2>
        <hr>
        <div id="splitContainerAlt">
            <form id="commentForm" name="commentForm" onsubmit="sendComments(event);">
                <label for="name">Name:</label><br>
                <p id="warning1"></p>
                <input type="text" id="Name" name="Name" placeholder="John Doe"><br><br>
                <label for="message">Message:</label><br>
                <p id="warning2"></p>
                <textarea id="Message" name="Message" placeholder="message..."></textarea><br><br>
                <input type="submit" value="Submit" id="submit">
            </form>
        </div>

    </section>

    <section>
        <div id="commentsContainer">
            <h2>Comments:</h2>
            <div id="commentList">



                <?php
                // creates form connecion and throws error if it fails

                // if the form is submitted, this block will run



                // Thank you ISTE.230 for teaching me simple select statements.
                $sql = "SELECT `Name`, `Message` FROM `Comments`";
                if ($result = $mysqli->query($sql)) {

                    // We know this is only going to iterate once here, so we're okay with
                    // grabbing the title out and using it as the page's title.
                    while ($row = $result->fetch_assoc()) {
                        include("assets/inc/Comment.inc.php");
                    }
                    $result->free_result();
                } else {
                    echo "<p> There are no comments yet. Be the first! </p>";
                }



                ?>


            </div>
        </div>
    </section>


    <?php
    require_once('./assets/inc/footer.inc.php');
    ?>