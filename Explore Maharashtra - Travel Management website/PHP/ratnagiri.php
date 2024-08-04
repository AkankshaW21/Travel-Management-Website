<?php
if (isset($_GET['ratnagiri'])) {
    $searchTerm = strtolower($_GET['ratnagiri']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'ganapati') {
        header("Location: tadoba.html"); // Redirect to pune.html
        exit();
    }
    
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
