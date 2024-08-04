<?php
if (isset($_GET['satara'])) {
    $searchTerm = strtolower($_GET['satara']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'pratapgad') {
        header("Location: pratapgad.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'ashoka') {
        header("Location: ashoka waterfall.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'vajrai') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'thoseghar') {
        header("Location: thoseghar waterfall.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'temples') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'park') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'adventure') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'beaches') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
     
  
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
