<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    echo "<p>Thank you, $name. We will contact you at $email.</p>";
}
?>
