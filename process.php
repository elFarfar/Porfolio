<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: home.php");
    exit;
}
