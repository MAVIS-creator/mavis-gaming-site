<?php
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\CsrfToken;

require_once __DIR__ . '/../vendor/autoload.php';

$csrfManager = new CsrfTokenManager();

function generateCsrfToken($id = '_token') {
    global $csrfManager;
    return $csrfManager->getToken($id)->getValue();
}

function verifyCsrfToken($token, $id = '_token') {
    global $csrfManager;
    return $csrfManager->isTokenValid(new CsrfToken($id, $token));
}
