<?php
$blockedIps = []; // Add known bad IPs

function checkIpBlock() {
    if (in_array($_SERVER['REMOTE_ADDR'], $GLOBALS['blockedIps'])) {
        http_response_code(403);
        die("Access denied.");
    }
}
