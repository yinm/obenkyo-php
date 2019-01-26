<?php

session_start();

if (isset($_POST['my_id'])) {
    $_SESSION['my_id'] = $_POST['my_id'];
}

?>

<p>
  ようこそ<?php echo htmlspecialchars($_SESSION['my_id'],ENT_QUOTES); ?>さん
</p>
<p>
  <a href="./second.php">next page</a>
</p>
