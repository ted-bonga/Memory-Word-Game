<?php
// Start the session
session_start();

if (isset($_POST['start'])) {
    $_SESSION['fruit'] = array("Pineapple", "Apple", "Banana", "Peach", "Plum", "Avocado");
    var_dump($_SESSION['fruit']);
    $_SESSION['count'] = 0;
    $_SESSION['seen']=[];
    echo "You start the session";
}


// Initialize the count if it doesn't exist in the session
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

// Check if the button has been clicked
else if (isset($_POST['increment'])) {
    // If clicked, increment the count
    array_push($_SESSION['fruit'],"Avocado");
    echo "You clicked increment<br>";
    var_dump($_SESSION['fruit']);
    $_SESSION['count']++;
}

if (isset($_POST['finish'])) {
    // If clicked, increment the count
    echo "You stop the session";
    session_destroy();
    $_SESSION['count'] = 0;
    $_SESSION['seen']=[];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Button Increment</title>
</head>
<body>
<h2>Count: <?php echo $_SESSION['count']; ?></h2>
<form method="post">
    <!-- Button to increment count -->
    <button type="submit" name="seen">Seen</button>
    <button type="submit" name="unseen">Unseen</button>
    <button type="submit" name="increment">Increment</button>
    <button type="submit" name="start">Start</button>
    <button type="submit" name="finish">Finish</button>
</form>
</body>
</html>
