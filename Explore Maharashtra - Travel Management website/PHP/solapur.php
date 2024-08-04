<?php
if (isset($_GET['solapur1'])) {
    $searchTerm = strtolower($_GET['solapur1']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'shritu') {
        header("Location: tulja bhavani.html"); // Redirect to pune.html
        exit();
    }
    
    
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
