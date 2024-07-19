<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "guest_book"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['addEntry'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $address = $_POST['address'];
    
    
    if (empty($fName) || empty($lName) || empty($address)) {
        die("All fields are required.");
    }
    
    
    $sql = "INSERT INTO guest_book (FName, LName, Address) VALUES ('$fName', '$lName', '$address')";
    
    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: index.php?message=New record created successfully");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if (isset($_POST['updateLocation'])) {
    $id = $_POST['id'];
    $newAddress = $_POST['newAddress'];
    
    
    if (empty($id) || empty($newAddress)) {
        die("Entry ID and New Address are required for update.");
    }
    
    
    $sql = "UPDATE guest_book SET Address='$newAddress' WHERE id='$id'";
    
    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: index.php?message=Location updated successfully");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>
