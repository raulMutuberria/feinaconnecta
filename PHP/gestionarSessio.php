<?php
// Start session
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Function to create session
function crearSession($texto) {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();


    }
    // Set session variable
    $_SESSION["value"] = $texto;
}

function crearSessionOferta($number) {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();

    }
    // Set session variable
    $_SESSION["oferta"] = $number;
}