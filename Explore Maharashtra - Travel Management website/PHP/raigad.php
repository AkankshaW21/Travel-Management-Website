<?php
if (isset($_GET['raigad'])) {
    $searchTerm = strtolower($_GET['raigad']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'janjira') {
        header("Location: janjira.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'alibag') {
        header("Location: alibag beach.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'konadana') {
        header("Location: kondana.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'raigad') {
        header("Location: Raigad.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'devkund') {
        header("Location: devkund.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'pata ') {
        header("Location: .patahtml"); // Redirect to pune.html
        exit();
    }
   

     
  
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
