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
            <form id="commentForm" method="POST" action="comments.php">
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
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") ";
                exit();
            } else {
                echo "Connection good";
            }
            // if the form is submitted, this block will run
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // name and message are sanitized to stop any hacks Professor Snyder might try to pull
                // Boooooo XSS
                $name = sanitize($_POST['name'], 50);
                $message = sanitize($_POST['message'], 255);


                // Prepare the SQL statement to prevent PRofessor Snyder from trying to do a SQL injection

                $prepareStatement = $mysqli->prepare("INSERT INTO Comments (`Name`, `Message`) VALUES (?, ?)");
                $prepareStatement->bind_param("ss", $name, $message);

                // check that the statement is ready to be executed, don't want to run if their are no requests
                if ($prepareStatement->execute()) {
                    echo "<div class='comment'>";
                    echo "<h4>" . htmlspecialchars($name) . "</h4>";
                    echo "<p>" . htmlspecialchars($message) . "</p>";
                    echo "</div>";
                } else {
                    echo "Error: " . $prepareStatement->error;
                }
                $prepareStatement->close();
                $mysqli->close();
                exit();
            } else {
                // when getting the data / comments, back from the database, this block will run
                if ($_SERVER['REQUEST_METHOD'] == "GET") {

                    // Thank you ISTE.230 for teaching me simple select statements.
                    $sql = "SELECT `Name`, `Message` FROM `Comments`";
                    if ($result = $mysqli->query($sql)) {

                        // We know this is only going to iterate once here, so we're okay with
                        // grabbing the title out and using it as the page's title.
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='comment'>";
                            echo "<h4>" . htmlspecialchars($row['Name']) . "</h4>";
                            echo "<p>" . htmlspecialchars($row['Message']) . "</p>";
                            echo "</div>";
                        }
                        $result->free_result();
                    }
                }
            }

            ?>


        </div>
    </section>



</main>
<?php
require_once('./assets/inc/footer.inc.php');
?>