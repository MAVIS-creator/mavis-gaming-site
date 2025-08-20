<?php
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

try {
    $pdo = new PDO(
        $_ENV['DB_DSN'], // e.g., mysql:host=localhost;dbname=mavis_gaming
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    error_log("[" . date('Y-m-d H:i:s') . "] DB Connection failed: " . $e->getMessage() . PHP_EOL, 3, __DIR__ . '/../logs/db-errors.log');
    die("Database connection error.");
}
