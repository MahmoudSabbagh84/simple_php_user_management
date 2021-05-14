<?php
    session_start();
    $_SESSION;
    
    include('connection.php');
    include('functions.php');
    $user_date = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>This is Index Page</h1>

    <br>

    Hello , <?php echo $user_date['user_name'] ?>
</body>
</html>