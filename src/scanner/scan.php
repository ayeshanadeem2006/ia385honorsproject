 <?php
session_start();
include 'db.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: unauthorized.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ip_range = escapeshellcmd($_POST['ip_range']);
    $scan_result = shell_exec("nmap -sV $ip_range");

    $stmt = $conn->prepare("INSERT INTO scan_results (user_id, ip_range, result) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $_SESSION['user_id'], $ip_range, $scan_result);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO audit_logs (user_id, action) VALUES (?, ?)");
    $action = "Ran vulnerability scan on $ip_range";
    $stmt->bind_param("is", $_SESSION['user_id'], $action);
    $stmt->execute();
}
?>
