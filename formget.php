<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Your Details</title>
</head>

<body>
    <span></span>
    <?php
    $name = $_GET["name"];
    $email = $_GET["email"];

    echo "<p>Hey  <span>$name</span> 👋🏾</p> ";
    echo "<p>Your email address is <span>$email</span> I'll be contacting you in a few</p>";
    echo "<p class='signup'>Thanks for signing up</p>"
    ?>
</body>

</html>