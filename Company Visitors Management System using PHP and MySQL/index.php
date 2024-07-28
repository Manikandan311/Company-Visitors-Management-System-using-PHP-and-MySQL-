<!DOCTYPE html>
<html>
<head>
    <title>Visitor Management System</title>
</head>
<body>
    <h2>Visitor Registration</h2>
    <form action="submit_visitor.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br>
        <label for="visit_date">Date of Visit:</label><br>
        <input type="date" id="visit_date" name="visit_date" required><br>
        <label for="visit_time">Time of Visit:</label><br>
        <input type="time" id="visit_time" name="visit_time" required><br>
        <label for="purpose">Purpose of Visit:</label><br>
        <textarea id="purpose" name="purpose" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
