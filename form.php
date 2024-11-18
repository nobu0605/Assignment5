<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to Process Data</title>
</head>
<body>
    <h1>Enter Five Values</h1>
    <form action="process.php" method="get">
        <label for="a">Value A:</label>
        <input type="text" id="a" name="a" required><br><br>

        <label for="b">Value B:</label>
        <input type="text" id="b" name="b" required><br><br>

        <label for="c">Value C:</label>
        <input type="text" id="c" name="c" required><br><br>

        <label for="d">Value D:</label>
        <input type="text" id="d" name="d" required><br><br>

        <label for="e">Value E:</label>
        <input type="text" id="e" name="e" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
