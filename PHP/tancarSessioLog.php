<?php

session_start();

if (isset($_SESSION['value'])) {
    session_destroy();
    echo "sessio borrada";
}

