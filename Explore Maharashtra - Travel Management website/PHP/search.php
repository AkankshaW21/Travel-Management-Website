<?php
if (isset($_GET['search'])) {
    $searchTerm = strtolower($_GET['search']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'pune') {
        header("Location: pune.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'satara') {
        header("Location: satara.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'mumbai') {
        header("Location: mumbai.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'chandrapur') {
        header("Location: chandrapur.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'kolhapur') {
        header("Location: kolhapur.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'raigad') {
        header("Location: raigad city.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'solapur') {
        header("Location: solapur.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'ahmednagar') {
        header("Location: ahmednagar1.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'nashik') {
        header("Location: nashik.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'sindhudurg') {
        header("Location: sindhudurg city.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'aurangabad') {
        header("Location: aurangabad.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'nagpur') {
        header("Location: nagpur.html"); // Redirect to pune.html
        exit();
    }
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
