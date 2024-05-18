<?php
require('../../db/db_connect.php');
require('../../db/auth.php');

// Check if the vendor ID is provided
if (isset($_GET['id'])) {
    $VendorId = $_GET['id'];

    // Delete the vendor from the database
    $deleteQuery = "DELETE FROM vendor WHERE id_vendor = $VendorId";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // vendor deleted successfully
        header('Location: index.php'); // Redirect back to the vendor directory page
        exit();
    } else {
        // Failed to delete the vendor
        echo "Error deleting the vendor: " . mysqli_error($conn);
    }
} else {
    // vendor ID is not provided
    echo "Invalid request. vendor ID is missing.";
}
?>
