<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Directory</title>
</head>
<body>
    <h1>People Directory</h1>

    <!-- Form to Add a New Person -->
    <form method="get" action="week5.php">
        First Name: <input type="text" name="firstname" required><br>
        Last Name: <input type="text" name="lastname" required><br>
        Telephone: <input type="text" name="telephonenumber" required><br>
        <input type="submit" value="Add Person">
    </form>

    <!-- Display People List -->
    <?php ShowPeople(); ?>
</body>
</html>
