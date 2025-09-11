<?php
// Site timezone
$conf['site_timezone'] = 'Africa/Nairobi';

// Site information
$conf['site_name'] = 'ICS B Academy';
$conf['site_url'] = 'http://localhost/tol';
$conf['admin_email'] = 'admin@icsbacademy.com';

// Site language
$conf['site_lang'] = 'en';

// Email configuration
$conf['mail_type'] = 'smtp'; // Options: 'smtp' or 'mail'
$conf['smtp_host'] = 'smtp.gmail.com';
$conf['smtp_user'] = 'bbitalex@gmail.com';
$conf['smtp_pass'] = '';
$conf['smtp_port'] = 465;
$conf['smtp_secure'] = 'ssl';


// Database connection
$servername = "localhost";
$username   = "root";      
$password   = "";          
$dbname     = "Iap-2025"; 

$conn = new mysqli("localhost", "root", "password1", "urban");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch users ordered by name (ascending)
$sql = "SELECT id, name, email FROM users ORDER BY name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>List of Signed-up Users:</h3>";
    echo "<ol>"; 
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row["name"]) . " (" . htmlspecialchars($row["email"]) . ")</li>";
    }
    echo "</ol>";
} else {
    echo "No users found.";
}

$conn->close();

