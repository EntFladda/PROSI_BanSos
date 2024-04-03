<!DOCTYPE html>
<html>
<head>
    <title>SOSIOLINK</title>
	<link rel="stylesheet" href="">
	<link rel="Logo" href="">
</head>
<body>
    <h1>Log In</h1>

    <form method="POST" action="/login">
        @csrf

        <label for="user_id">Username:</label>
        <input type="text" id="user_id" name="user_id">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <label for="remember">
            <input type="checkbox" id="remember" name="remember">
            Remember me
        </label>

        <button type="submit">Log In</button>
    </form>
</body>
</html>