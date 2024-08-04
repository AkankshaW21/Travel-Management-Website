<?php
if (isset($_GET['kolhapur'])) {
    $searchTerm = strtolower($_GET['kolhapur']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'shri') {
        header("Location: mahalaxmi.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'fun') {
        header("Location: DreamworldFun.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'site') {
        header("Location: chandoli.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'adv') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'bea') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'sea') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'water') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'road') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
   
   
  
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
