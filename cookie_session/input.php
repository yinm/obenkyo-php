<?php
if (isset($_COOKIE['my_id'])) {
    $myId = $_COOKIE['my_id'];
} else {
    $myId = '';
}

?>

<form action="cookie.php" method="post">
  <div>
    <label for="my_id">ID</label>
    <input id="my_id" type="text" name="my_id" value="<?php echo htmlspecialchars($myId, ENT_QUOTES); ?>">
  </div>
  <div>
    <label for="password">password</label>
    <input id="password" type="password" name="password">
  </div>
  <div>
    <input type="checkbox" name="save" id="save" value="on">
    <label for="save">Save ID</label>
  </div>

  <input type="submit" value="submit">
</form>
