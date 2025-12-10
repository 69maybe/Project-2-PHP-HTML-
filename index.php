<?php
// Include configuration
require_once 'config.php';

// Include header
include 'includes/header.php';

// Connect to database (sample connection)
try {
    $conn = getDBConnection();
    $connectionStatus = "Connected successfully";
    closeDBConnection($conn);
} catch (Exception $e) {
    $connectionStatus = "Connection failed: " . $e->getMessage();
}
?>

<main class="main-content">
    <div class="container">
        <h1 class="main-title">Hello PHP + MySQL</h1>
        <p class="status-message">Database Status: <span id="db-status"><?php echo htmlspecialchars($connectionStatus); ?></span></p>
        <div class="info-box">
            <p>This is a simple web project demonstrating PHP and MySQL integration.</p>
            <p>Compatible with InfinityFree hosting.</p>
        </div>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>

