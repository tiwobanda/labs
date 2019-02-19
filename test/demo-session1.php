<?php
//start session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demo Session 1</title>
</head>
<body>

<?php
//set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>


<header>
    <h2>PHP Session</h2>
</header>
<main>
    <p>Nothing yet</p>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Wedding Planit</p>
</footer>
</body>
</html>