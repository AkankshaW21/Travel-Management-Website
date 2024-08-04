<?php
if (isset($_GET['sinhgad'])) {
    $searchTerm = strtolower($_GET['sinhgad']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'hotels') {
        header("Location: sinhgad fort hotels.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'resorts') {
        header("Location: sinhgad fort resort.html"); // Redirect to pune.html
        exit();
    }
    }

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
