<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <h2>User Registration</h2>
    <form action="register_process.php" method="post">
        <label>Matric:</label><br>
        <input type="text" name="matric" required><br><br>

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Role:</label><br>
        <select name="role" required>
            <option value="student">Student</option>
            <option value="lecturer">Lecturer</option>
        </select><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
