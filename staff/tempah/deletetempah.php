<?php
require('../../db/db_connect.php');
require('../../db/auth.php');

// Check if the staff ID is provided
if (isset($_GET['id'])) {
    $id_tempah = $_GET['id'];

    // Delete the staff from the database
    $deleteQuery = "DELETE FROM tempah_db WHERE $id_tempah = $id_tempah";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // staff deleted successfully
        header('Location: index.php'); // Redirect back to the staff directory page
        exit();
    } else {
        // Failed to delete the staff
        echo "Error deleting the staff: " . mysqli_error($conn);
    }
} else {
    // staff ID is not provided
    echo "Invalid request. staff ID is missing.";
}
?>
