<?php
require('../../db/db_connect.php');
require('../../db/auth.php');

// Check if the agent ID is provided
if (isset($_GET['id'])) {
    $agentId = $_GET['id'];

    // Delete the agent from the database
    $deleteQuery = "DELETE FROM agent WHERE id_agent = $agentId";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // Agent deleted successfully
        header('Location: index.php'); // Redirect back to the agent directory page
        exit();
    } else {
        // Failed to delete the agent
        echo "Error deleting the agent: " . mysqli_error($conn);
    }
} else {
    // Agent ID is not provided
    echo "Invalid request. Agent ID is missing.";
}
?>
