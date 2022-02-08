<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Form</title>
</head>

<body>
    <form action="formget.php" method="get">
        <h3>Sign up</h3>
        <label for="for">Name</label>
        <input type="text" name="name"><br>
        <label for="for">Email</label>
        <input type="text" name="email"><br>
        <label for="for">Password</label>
        <input type="password" name="password"><br>
        <button type="submit" value="sign up">Sign up</button>
    </form>
</body>

</html>