<?php

session_start();

?>

<p>
  <?php echo htmlspecialchars($_SESSION['my_id'], ENT_QUOTES); ?>さんの情報はまだ残っています
</p>
<p>
  <a href="./logout.php">logout</a>
</p>
