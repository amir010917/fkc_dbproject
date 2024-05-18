<?php
require('../../db/db_connect.php');
require('../../db/auth.php');

// Check if the product ID is provided
if (isset($_GET['id'])) {
    $ProductId = $_GET['id'];

    // Delete the product from the database
    $deleteQuery = "DELETE FROM product WHERE id_product = $ProductId";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // product deleted successfully
        header('Location: index.php'); // Redirect back to the product directory page
        exit();
    } else {
        // Failed to delete the product
        echo "Error deleting the product: " . mysqli_error($conn);
    }
} else {
    // product ID is not provided
    echo "Invalid request. product ID is missing.";
}
?>
