<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <form action="calc.php" method="POST">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <select name="cal">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <button type="submit">Calculate</button>
        </select>
    </form>
</body>
</html>