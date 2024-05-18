<?php
require('../../db/db_connect.php');
require('../../db/auth.php');

// Check if the Raw material ID is provided
if (isset($_GET['id'])) {
    $RawId = $_GET['id'];

    // Delete the Raw material from the database
    $deleteQuery = "DELETE FROM raw_material WHERE id_rawproduct = $RawId";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // Raw material deleted successfully
        header('Location: index.php'); // Redirect back to the Raw material directory page
        exit();
    } else {
        // Failed to delete the Raw material
        echo "Error deleting the Raw material: " . mysqli_error($conn);
    }
} else {
    // Raw material ID is not provided
    echo "Invalid request. Raw material ID is missing.";
}
?>
