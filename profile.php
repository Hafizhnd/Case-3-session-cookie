<?php
session_start();

if (!isset($_SESSION['email'])) {
  header("Location: form.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="profile.css">
<title>Profile Page</title>
</head>
<body>

    <header>
      <?php include 'header.php'; ?>
    </header>

    <div class="card">
      <div class="card-border-top"></div>
      <div class="img"></div>
      <span> Email: <?php echo $_SESSION['email']; ?></span>
      <form action="logout.php" method="post">
        <button> Logout</button>
      </form>
    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</body>
</html>
