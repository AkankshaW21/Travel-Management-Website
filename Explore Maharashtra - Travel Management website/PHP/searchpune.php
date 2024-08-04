<?php
if (isset($_GET['searchpune'])) {
    $searchTerm = strtolower($_GET['searchpune']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'shirdi') {
        header("Location: shirdi.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'raigad') {
        header("Location: raigad.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'mumbai') {
        header("Location: mumbai.html"); // Redirect to pune.html
        exit();
    }
    
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
