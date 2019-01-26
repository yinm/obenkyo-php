<?php

$myId = $_POST['my_id'];
$password = $_POST['password'];
$save = $_POST['save'];

if ($save === 'on') {
    setcookie('my_id', $myId, time() + 60 * 60 * 24 * 14);
    $message = 'login information is saved.';
} else {
    setcookie('my_id', '');
    $message = 'not saved';
}

?>

<p><?php echo htmlspecialchars($message, ENT_QUOTES) ?></p>
<p><a href="./input.php">back</a></p>
