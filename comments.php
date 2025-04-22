<?php
$pageTitle = "Learn London | Reviews";
include('./assets/inc/header.inc.php');
require_once('./assets/inc/dbConn.php');
// included for the sanitize function
include('./assets/inc/tools.inc.php');
?>


<main>

    <section id="poster">
        <!--All my main content will be within poster-->
        <h2>Leave a Review!</h2>
        <hr>
        <div id="splitContainerAlt">
            <form id="commentForm">
                <label for="name">Name:</label><br>
                <p id="warning1"></p>
                <input type="text" id="name" name="name"><br><br>
                <label for="message">Message:</label><br>
                <p id="warning2"></p>
                <textarea id="message" name="message"></textarea><br><br>
                <input onclick="validateForm()" type="submit" value="Submit">
            </form>
        </div>

    </section>

    <section>
        <div id="commentsContainer">
            <h2>Comments:</h2>

            <?php
            // creates form connecion and throws error if it fails

            // if the form is submitted, this block will run



            // Thank you ISTE.230 for teaching me simple select statements.
            $sql = "SELECT `Name`, `Message` FROM `Comments`";
            if ($result = $mysqli->query($sql)) {

                // We know this is only going to iterate once here, so we're okay with
                // grabbing the title out and using it as the page's title.
                while ($row = $result->fetch_assoc()) {
                    include('./assets/inc/comment.inc.php');
                }
                $result->free_result();
            } else {
                echo "<p> There are no comments yet. Be the first! </p>";
            }



            ?>



        </div>
    </section>


    <script src="./assets/scripts/ajax.js"></script>
</main>
<?php
require_once('./assets/inc/footer.inc.php');
?>