<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode(["status" => "flipped",
    "redirectUrl" => "hero.php"

]);
}
