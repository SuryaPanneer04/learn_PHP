<?php 
include('db.php');

if (isset($_GET['id'])) {
    // Get the ID of the record to delete
    $idToDelete = $_GET['id'];
     
    // Delete the record from the database
    $sql = "DELETE FROM register WHERE  id = $idToDelete";    
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the page where the delete button was clicked
        header('location:data.php?message= delete successfully!');
        exit();
    } else {
        // Handle the error
        echo "Error deleting record: " . $conn->error;
    }
}
?>
