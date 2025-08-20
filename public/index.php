<?php
// public/index.php
require_once __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_ENV['APP_NAME'] ?? 'Mavis Gaming Site' ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/themes.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">MavisGaming</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="game.php">Game</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Level Up Your Web Experience</h2>
            <p>Gaming meets development with style. Explore blogs, portfolio, and cool projects!</p>
            <a href="blog.php" class="btn-primary">Read Blog</a>
        </div>
    </section>

    <footer>
        <p>&copy; <?= date('Y') ?> MavisGaming. All rights reserved.</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
