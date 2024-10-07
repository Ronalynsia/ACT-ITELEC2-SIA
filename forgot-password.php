<?php
    include_once 'config/settings-configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="src/css/styles.css">
</head>
<body>
    <h1>Forgot Password</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required><br>
        <button type="submit" name="btn-forgot-password">SEND RESET LINK</button>
    </form>
</body>
</html>

