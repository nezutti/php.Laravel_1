<?php
session_start(
);?>

<html>
<body>
  <p>セッション開始</p>
  <p>受け取ったセッションの値は<?php print $_SESSION["language"]?>です </p>
  <p><a href="course3.php">セッションを破棄</a>する</p>
</body>


</html>

