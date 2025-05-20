<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda | Booking Lapangan</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Selamat Datang di Aplikasi Booking Lapangan</h1>
    <nav>
      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="booking.php">Booking</a></li>
        <?php if (isset($_SESSION['username'])): ?>
          <li><a href="logout.php">Logout (<?= htmlspecialchars($_SESSION['username']) ?>)</a></li>
        <?php else: ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Daftar</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main>
    <h2>Booking Mudah, Cepat, dan Online</h2>
    <p>Gunakan aplikasi ini untuk memesan lapangan futsal, badminton, dan lainnya secara real-time.</p>
    <a href="booking.php" class="btn">Booking Sekarang</a>
  </main>

  <footer>
    <p>&copy; <?= date('Y') ?> Sistem Booking Lapangan | Tugas Besar Implementasi Web</p>
  </footer>
</body>
</html>
