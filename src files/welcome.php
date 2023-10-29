<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="?command=login">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>

        <input type="submit" value="Login">
    </form>
</body>
</html>