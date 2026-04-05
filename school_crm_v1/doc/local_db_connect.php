<?php
$servername = "localhost";
$username   = "jagdevsinghdosanjh";
$password   = "Kawaljit@1973";
$dbname     = "school_crm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$servername = "localhost";
$username   = getenv("CRM_DB_USER");
$password   = getenv("CRM_DB_PASS");
$dbname     = getenv("CRM_DB_NAME");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed");
}
?>
