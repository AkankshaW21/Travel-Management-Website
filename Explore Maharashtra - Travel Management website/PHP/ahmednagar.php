<?php
if (isset($_GET['ahmednagar1'])) {
    $searchTerm = strtolower($_GET['ahmednagar1']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'shirdi') {
        header("Location: shirdi.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'harishchandra') {
        header("Location: harishchandragad fort.html"); // Redirect to pune.html
        exit();
    }
    
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
