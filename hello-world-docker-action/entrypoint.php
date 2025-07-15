<?php
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head><title>Super‑Insecure PHP Demo</title></head>
<body>
  <h1>Super‑Insecure PHP Demo</h1>
  <form method="GET">
    <label>Your name: <input name="name"></label>
    <button>Say hi</button>
  </form>
  <p><?= $greeting ?></p>
</body>
</html>
