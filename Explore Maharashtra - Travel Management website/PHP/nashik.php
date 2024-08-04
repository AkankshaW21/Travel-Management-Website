<?php
if (isset($_GET['nashik1'])) {
    $searchTerm = strtolower($_GET['nashik1']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'pan') {
        header("Location: pandavleni.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'kal') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'tri') {
        header("Location: trambakeshvar.html"); // Redirect to pune.html
        exit();
    }
    
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
