<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST["name"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to = "yousef7abib2008@gamil.com";
    $subject = "New Message from $name";
    $body = "Name: $name\n\nMessage:\n$message";



    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thanks $name، your message sent!</h2>";
    } else {
        echo "<h2> There is issue !, Try again</h2>";
    }
} else {
    echo "<h2>A way of sending not correct</h2>";
}
?>