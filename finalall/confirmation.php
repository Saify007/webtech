<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $comment = htmlspecialchars(trim($_POST["comment"]));
    
    // Check if form fields values are empty
    if(!empty($name) && !empty($comment)) {
        echo "<p>Hi, <b>$name</b>. Your problem has been received successfully.<p>";
        echo "<p>Here's the problem that you've entered: <b>$comment</b></p>";
    } else {
        echo "<p>Please fill all the fields in the form!</p>";
    }
} else {
    echo "<p>Something went wrong. Please try again.</p>";
}
?>