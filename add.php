<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Entry</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f0f0f0;
        }
        h2 {
            background-color: #ddd;
            color: #333;
            padding: 10px;
            border-radius: 5px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }
        input[type="text"], input[type="submit"], .button {
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 18px);
            box-sizing: border-box;
            color: #555;
            font-size: 14px; /* Adjust font size */
            height: auto; /* Allow height to adjust based on content */
        }
        input[type="submit"], .button {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            text-align: center;
            font-size: 14px; /* Adjust font size */
            border-radius: 4px;
            line-height: 1; /* Ensure shorter line height */
            padding: 6px 12px; /* Adjust padding for shorter buttons */
        }
        input[type="submit"]:hover, .button:hover {
            background-color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ccc;
        }
        table, th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ddd;
            color: #333;
        }
        .message {
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Add Entry</h2>
    <form action="process.php" method="post">
        <label for="fName">First Name:</label>
        <input type="text" id="fName" name="fName" required><br><br>
        
        <label for="lName">Last Name:</label>
        <input type="text" id="lName" name="lName" required><br><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        
        <input type="submit" name="addEntry" value="Add Entry">
        <a href="index.php" class="button">Home</a>
    </form>
</body>
</html>
