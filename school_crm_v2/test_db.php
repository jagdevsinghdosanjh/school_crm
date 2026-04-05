<?php
$conn = new mysqli("localhost", "jagdevsinghdosanjh", "Kawaljit@1973", "school_crm_v2");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connection successful!";
?>
