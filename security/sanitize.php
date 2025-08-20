<?php
use Respect\Validation\Validator as v;

function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function validateEmail($email) {
    return v::email()->validate($email);
}

function validateString($str, $min = 3, $max = 255) {
    return v::stringType()->length($min, $max)->validate($str);
}
