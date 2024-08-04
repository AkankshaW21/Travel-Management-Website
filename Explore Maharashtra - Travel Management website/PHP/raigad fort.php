<?php
if (isset($_GET['raigadr'])) {
    $searchTerm = strtolower($_GET['raigadr']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'hotels') {
        header("Location: raigad hotels.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'resorts') {
        header("Location: raigad resorts.html"); // Redirect to pune.html
        exit();
    }
    }

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
