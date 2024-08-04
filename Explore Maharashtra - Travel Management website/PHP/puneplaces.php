<?php
if (isset($_GET['puneplaces'])) {
    $searchTerm = strtolower($_GET['puneplaces']); // Convert the search term to lowercase

    // Check if the search term is "pune"
    if ($searchTerm === 'shivneri') {
        header("Location: shivneri1.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'sinhgad') {
        header("Location: sinhgad1.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'lohgad') {
        header("Location: lohgad1.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'shaniwarwada') {
        header("Location: shaniwarwada.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'dagadusheth') {
        header("Location: dagadushet ganapati.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'torna') {
        header("Location: torna.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'lenyadri') {
        header("Location: lenyadri.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'bhimashankar') {
        header("Location: bhimashankar.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'imagica') {
        header("Location: imagica.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'waynjoy') {
        header("Location: WetNJoy.htm"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'sentosa') {
        header("Location: sentosa.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'krushnai') {
        header("Location: krushnai.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'tamhini') {
        header("Location: tamhini.html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'bahaja') {
        header("Location: .html"); // Redirect to pune.html
        exit();
    }
    if ($searchTerm === 'kune') {
        header("Location: kune waterfall.html"); // Redirect to pune.html
        exit();
    }
  
}

// If the search term is not "pune" or if there's no search term provided, you can redirect to a default page.
header("Location:error.html"); // Replace "default.html" with your desired default page
exit();
?>
