<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Book</title>
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
    <h2>Guest Book Entries</h2>
    <?php
   
    if (isset($_GET['message'])) {
        echo '<div class="message">' . htmlspecialchars($_GET['message']) . '</div>';
    }

    
    $servername = "localhost";
    $username = "root"; 
    $password = ""; /
    $dbname = "guest_book"; 

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT id, FName, LName, Address FROM guest_book";
    $result = $conn->query($sql);

    
    echo '<table>';
    echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Actions</th></tr>';

    
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['FName']) . '</td>';
        echo '<td>' . htmlspecialchars($row['LName']) . '</td>';
        echo '<td>' . htmlspecialchars($row['Address']) . '</td>';
        echo '<td><a href="update.php?id=' . $row['id'] . '" class="button">Update</a></td>';
        echo '</tr>';
    }

    echo '</table>';

    
    $conn->close();
    ?>

    <a href="add.php" class="button">Add Entry</a>
</body>
</html>
