<?php
// Database connection parameters
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'travelmanagment';

// Establish database connection
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Connection failed: " . mysqli_connect_error());


// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if page parameter is set
if(isset($_POST['krushnai'])) {
    // Insert record into database
    $pageName = "KrushnaiPark";
    $sql = "INSERT INTO PlacesInformation (pageName) VALUES ('$pageName')";
    if (mysqli_query($db, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}

// Close database connection
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Krushnai Water Park</title>
</head>
<body>
    <style>
      /* Reset some default styles */
body, h1, h2, p {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

header {
    background-color: #0091ff;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

.park-info {
    background-color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    max-width: 1000px; /* Increase the max-width as needed */
    width: 100%; /* Ensures it takes full width on smaller screens */
    box-sizing: border-box; /* Ensure padding is included in width */
}

.park-info img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 10px;
}

h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

p {
    font-size: 1rem;
}

/* ... (previous CSS code) ... */

/* Style for the Explore Container */
.explore-container {
    display: flex;
    justify-content: space-between; /* Distribute containers evenly */
    flex-wrap: wrap; /* Allow containers to wrap to the next row */
    max-width: 1000px; /* Adjust the maximum width as needed */
    margin: 0 auto; /* Center the container horizontally */
}

/* Style for Each Explore Item (Container) */
.explore-item {
    background-color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    width: calc(25% - 20px); /* Distribute the containers evenly with 20px spacing */
    margin: 10px 0; /* Add vertical spacing between containers */
    box-sizing: border-box; /* Ensure padding is included in width */
}


#navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 60px;
      background-color:rgb(1, 1, 22);
      color: #dfd3d3;
     
      margin-left: 0px;
    }
    
    #logo {
      text-decoration: none;
      font-size: 24px;
      color: #dfd3d3;
    }
    
    #navbar a {
      text-decoration: none;
      color: #dfd3d3;
      margin: 0 10px;
      font-size: 18px;
    }
    
    .footer {
    margin-top:15px;
    

}

.foot-panel1 {
    background-color: #37475a;
    color: white;
   
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    font-size: 0.85rem;
}
 .foot-panel2  {
    background-color: #222f3d;
    color: white;
    height: 350px;
    display: flex;
    justify-content: space-evenly;
 } 
 ul {
     margin-top: 20px ;
 }
 
 
 ul a {
     display:block;
     font-size:18px;
     margin-top: 10px;
     color:#dddddd:
  }
 
  .foot-panel3 {
         background-color: #222f3d;
         color: white;
         border-top:0.5px solid white;
         height:70px;
         display: flex;
         justify-content: center;
         align-items: center;
         
  }

  .separate-container {
            background-color: #607389;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .separate-container h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        /* Style for social media icons within separate container */
        /* Style for the social media icons within separate container */
/* Style for the social media icons within separate container */
/* Style for the social media icons within separate container */
.social-icons-container .social-icon-link {
    font-size: 24px; /* Adjust the font size as needed */
    margin-right: 10px; /* Add margin between the icons */
    text-decoration: none; /* Remove underlines from the links */
    color: #3b5998; /* Facebook blue color */
}

.social-icons-container .social-icon-link.facebook:hover {
    color: #4267B2; /* Facebook hover color */
}

.social-icons-container .social-icon-link.twitter {
    color: #1DA1F2; /* Twitter blue color */
}

.social-icons-container .social-icon-link.twitter:hover {
    color: #2795D9; /* Twitter hover color */
}

.social-icons-container .social-icon-link.instagram {
    color: #E4405F; /* Instagram pink/red color */
}

.social-icons-container .social-icon-link.instagram:hover {
    color: #C13584; /* Instagram hover color */
}

.social-icons-container .social-icon-link.linkedin {
    color: #0A66C2; /* LinkedIn blue color */
}

.social-icons-container .social-icon-link.linkedin:hover {
    color: #0073B2; /* LinkedIn hover color */
}

.social-icons-container .social-icon-link.youtube {
    color: #FF0000; /* YouTube red color */
}

.social-icons-container .social-icon-link.youtube:hover {
    color: #FF3333; /* YouTube hover color */
}
/* Style for individual containers */

    </style>
</body>
<body>
    
    <div id="navbar">
        <a href="travel home page.html">Home</a>
        <a href="about us.html">About Us</a>
        <a href="cities.html">Cities</a>
        <a href="reviews/index.php">Reviews</a>
        <a href="features4.html">Features</a>
        <a href="travel contact us.html">Contact Us</a>
    </div>

    <header>
        <h1>Krushnai Water Park</h1>
    </header>
    <div class="container">
        <div class="park-info">
            <img src="https://www.cgnewz.com/wp-content/uploads/2023/05/Krushnai-Water-Park-Pune-Ticket-Price-2022-Timing-Rides.jpg" alt=" Water Park">
            <h2>Krushnai Water Park</h2>
            <p>
                Krushnai Water Park is an ideal picnic spot as it is surrounded by beautiful green hills, close to Singhagad Fort, Kadakwasala Dam and Panshet Dam.
            </p>
            <br>
            <p>
                Enjoy this paradise with a variety of sliders for all ages with family and friends. Aqua Trail, Rain Dance, Turnpike, Crazy Cruise, Magic Sway, Twister, Black Hole, Tunnel Funnel are just a few of the things you can experience.   
            </p>
            <br>

            <img src="https://ticketnews.in/wp-content/uploads/2023/06/krushnai-water-park-tickets.webp"alt="water park">
            <br>
            <br><br><br><b>Location:</b>Adults - Rs.500 onwards, Kids - Rs.400 onwards
                <br><br><br><b>Timings:</b> 10:00 am - 6:00 pm 
                <br><br><br><b>Entry fee:</b> Base, Gat No. 186, Donje Gaon-Sinhagad Road, Sinhgad Rd, Donje Gaon, Maharashtra
                <br>
            <p>
            
                The park also has a variety of kid-friendly attractions such as Pirate Island, Little Champs, Family Slides, Mushrooms and Wave Pool. The place is about 25 km away from Pune and is easily accessible by private/public transport.
            </p>
        
        <br>
        
        <h2>Rides</h2>
        <!-- ... (previous HTML code) ... -->

<div class="explore-container">
    <!-- Container 1 -->
    <div class="explore-item">
        <!-- Content for the first container -->
        <img src="https://krushnaiwaterpark.in/img/rides/1.jpg">
        <h4>Magic Sway</h4>
    </div>

    <!-- Container 2 -->
    <div class="explore-item">
        <!-- Content for the second container -->
        <img src="https://krushnaiwaterpark.in/img/rides/8.jpg">
        <h4>Black Hole</h4>
    </div>

    <!-- Container 3 -->
    <div class="explore-item">
        <!-- Content for the third container -->
        <img src="https://krushnaiwaterpark.in/img/rides/3.jpg">
        <h4>Tipping Bucket / Pirate Island</h4>
    </div>

     <!-- Container 4 -->
     <div class="explore-item">
        <!-- Content for the four container -->
        <img src="https://krushnaiwaterpark.in/img/rides/6.jpg">
        <h4>River cruise</h4>
    </div>

    
    </div>

    


</div>

<!-- ... (rest of HTML code) ... -->


        

        </div>
    </div>

    
<footer> 
    <div class="foot-panel">
       
    </div>
    <div class="foot-panel2">
        <ul>
            <a>Get to know Us</a>
             <a>Vue Directives</a>
            <a>Blog</a>
            <a>Best Practices</a>
            <a>Vue.js Plugins</a>
            <a>Applicaions</a>
            <a>Web Accessibility</a>
        </ul>
        <ul>

             <a>Libraries</a>
            <a>Deployment Straregies</a>
            <a>Single sign -on</a>
            <a>Webpack</a>
            <a>Nuxt.js</a>
            <a>Storybook</a>
            <a>Handling And Logging</a>
        </ul>
        <ul>

            <a>Data Visuallizaton</a>
            <a>design Patterns</a>
            <a>GraphQL Clients</a>
            <a>payment Gateways</a>
            <a>Iot Applications</a>
            <a>Authentication Flows</a>
            <a>Web security</a>
        </ul>
        <ul>
            <a>Web Workers</a>
            
            <a>CI/CD</a>
            <a>machine learning Integration</a>
            <a>AR</a>
            <a>VR</a>
            <a>IOT Dashboard</a>
            <a>Blockchain Integration</a>

        </ul>
    </div>
    
   
    </footer>
    <div class="separate-container">
        <h3>Follow Us on Social Media</h3>

        <!-- Social media icons within separate container -->
        <div class="social-icons-container">
            <a class="social-icon-link facebook" href="https://www.facebook.com/ExploreMaharashtraWebsite?mibextid=ZbWKwL " target="_blank"><i
                    class="fab fa-facebook-f"></i></a>
            <a class="social-icon-link twitter" href="https://x.com/TravelWebsiteC9?t=ZuYtRs3O_kKxjQBTyl9qfQ&s=08 " target="_blank"><i
                    class="fab fa-twitter"></i></a>
            <a class="social-icon-link instagram" href="https://x.com/TravelWebsiteC9?t=ZuYtRs3O_kKxjQBTyl9qfQ&s=08" target="_blank"><i
                    class="fab fa-instagram"></i></a>
            <a class="social-icon-link linkedin" href="https://www.linkedin.com/in/explore-maharashtra-c9-aa2729294/" target="_blank"><i
                    class="fab fa-linkedin"></i></a>
            <a class="social-icon-link youtube" href="https://www.youtube.com" target="_blank"><i
                    class="fab fa-youtube"></i></a>
        </div>
        <!-- End of social media icons within a separate container -->

        <!-- Rest of your content goes here -->

        <p>Stay connected with us on social media for updates and more!</p>

        <!-- Phone number and address -->
        <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> Address: VIT Pune, IT Department, SY-C-Group No.15, Pune, India</p>
        </div>
        <!-- End of phone number and address -->
    </div>
   

</body>

</html>