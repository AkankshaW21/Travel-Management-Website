<?php
if (isset($_GET['mumbaiplace'])) {
    $searchTerm = strtolower($_GET['mumbaiplace']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'gateway') {
        header("Location: Gate way of india.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'chatrapati') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'kanheri') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'haji') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'mount') {
        header("Location: mount marry charch.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'water') {
        header("Location: waterKingdom.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'tiku') {
        header("Location: TikujiNiWadi.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'suraj') {
        header("Location: suraj.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'shangrila') {
        header("Location: shangrila2.htm"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'pandavkada') {
        header("Location: pandavkada.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'juhu') {
        header("Location: jihu beach.html"); // Redirect to pune.html
        exit();
    }
  
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
