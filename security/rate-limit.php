<?php
function applyRateLimit($maxRequests = 60, $timeWindow = 60) {
    session_start();
    $now = time();
    $_SESSION['rate_limit'] = $_SESSION['rate_limit'] ?? [];

    // Clear old entries
    $_SESSION['rate_limit'] = array_filter($_SESSION['rate_limit'], fn($t) => $t > $now - $timeWindow);

    if (count($_SESSION['rate_limit']) >= $maxRequests) {
        http_response_code(429);
        die("Too many requests, try again later.");
    }

    $_SESSION['rate_limit'][] = $now;
}
