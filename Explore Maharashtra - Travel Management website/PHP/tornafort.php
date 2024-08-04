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
if(isset($_POST['torna'])) {
    // Insert record into database
    $pageName = "Torna";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Torna Fort</title>
</head>
<body>
    <style>

        /* Style for the navigation bar */
nav {
    background-color: #0c0505; /* Background color of the navigation bar */
    color: white; /* Text color */
    padding: 10px 0; /* Add padding to space out the links */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
}

.navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center; /* Center-align the links horizontally */
}

.navbar li {
    display: inline; /* Display list items horizontally */
    margin-right: 20px; /* Add spacing between the links */
}

.navbar a {
    text-decoration: none; /* Remove underlines from links */
    color: rgb(231, 231, 231); /* Text color for links */
    font-weight: bold; /* Bold text for links */
    font-size: 19.4px;
    font-weight: lighter;    transition: color 0.3s; /* Smooth color transition on hover */
}

/* Change link color on hover */
.navbar a:hover {
    color: #ff6600; /* Change the color to your desired hover color */
}

           h2 {
        margin-left: 50px;
           }

p {
   margin-left: 100px;
   margin-right: 100px;
}






        /* Reset default margin and padding */
        * {
            margin: 0px;
            padding: 0px;
        }

        /* Set background image and apply blur effect */
        .container {
            position: relative;
            width: 100%;
            height: 550px; /* Set the desired height for the blurred background */
            overflow: hidden;
        }

        .blur-background {
            background-image: url('.vscode/Nagarkhana,_Raigad_Fort,_India (1).jpg');
            height: 1200px;
            width: 1500px;
            filter: blur(50px); /* Adjust the blur intensity as needed */
            position: absolute;
            z-index: -1;
        }

        /* Style the overlay image */
        .overlay-image {
            position: absolute;
            top: 50%;
            left: 38%; /* Adjust the left position to your desired spacing */
            transform: translate(-50%, -50%);
            width: 800px; /* Set the desired width for the overlay image */
            height: 510px; /* Set the desired height for the overlay image */
           
        }

        /* Create a new container on the right side */
        .right-container {
            position: absolute;
            top: 0;
            right: 0;
            width: 300px; /* Adjust the width of the right container as needed */
            height:510px;
            background-color: rgba(46, 45, 45, 0.7);
             /* Background color for the right container */
             margin-right: 200px;
             border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
             margin-top: 16px;
        }

        .fort-text {
            font-size: 36px;
            font-weight: bold;
           margin-top: 170px;
           margin-left: 50px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Style for the location symbol */
        .location-symbol {
            font-size: 24px;
            color: white;
            margin-bottom: 8px;
            margin-top: 10px;
            margin-left: 130px;
        }

        /* Style for the location text */
        .location-text {
            font-size: 18px;
            font-weight: bold;
            color: white;
            margin-top: 10px;
            margin-left: 90px;
        }
        /* Style for the weather/climate container */
/* Style for the blurred background container */
.container {
    position: relative;
    width: 100%;
    height: 550px; /* Set the desired height for the blurred background */
    overflow: hidden;
}

.blur-background1 {
    background-image: url('.vscode/depositphotos_471952152-stock-photo-abstract-painterly-dramatic-scenery-clouds.jpg');
    height: 1200px;
    width: 1500px;
    filter: blur(15px); /* Adjust the blur intensity as needed */
    position: absolute;
    z-index: -1;
}

/* Style for the weather/climate container */
.weather-container {
    background-image: url('.vscode/depositphotos_471952152-stock-photo-abstract-painterly-dramatic-scenery-clouds.jpg'); /* Use the same background image */
    background-size: cover;
    background-position: center;
    padding: 20px;
    margin: 80px;
    border-radius: 35px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: left; /* Align text to the left */
    font-family: Arial, sans-serif; /* Specify font family */
}

/* Style for the weather/climate headings */
.weather-heading {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 16px;
    color: #090707; /* Change text color to your preference */
     /* Convert text to uppercase */
}

/* Style for the weather/climate content */
.weather-content {
    font-size: 16px;
    line-height: 1.5;
    color: #000000; /* Change text color to your preference */
}

/* Style for h3 headings within the weather content */
.weather-container h3 {
    font-size: 20px;
    font-weight: bold;
    color: #0c0101; /* Change text color to your preference */
}

/* Style for paragraph text within the weather content */
.weather-container p {
    margin-bottom: 10px;
}

/* Style for the overall page background (optional) */
body {
    background-color: #f0f0f0; /* Change background color to your preference */
    font-family: Arial, sans-serif; /* Specify font family */
}





.location-container {
    background-color: white;
    background-position: center;
    padding: 20px;
    height: 400px;
    margin-top: 20px; /* Adjust margin-top for desired spacing */
    margin-left: 150px;
    margin-right: 600px; /* Adjust margin-right for desired spacing */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: left;
    font-family: Arial, sans-serif;
}


.location-heading {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 16px;
    color: #090707; /* Change text color to your preference */
    text-transform: uppercase; /* Convert text to uppercase */
}

.location-content {
    font-size: 16px;
    line-height: 1.5;
    color: #000000; /* Change text color to your preference */
}

/* Style for h3 headings within the location content */
.location-container h3 {
    font-size: 20px;
    font-weight: bold;
    color: #0c0101; /* Change text color to your preference */
}

/* Style for paragraph text within the location content */
.location-container p {
    margin-bottom: 10px;
}














.horizontal-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            margin-left: 130px;
            margin-right: 80px;
            height: 300px;
            width: 1200px; /* Adjust the width to cover the page minus margins */
            margin-bottom: 20px; /* Add margin to create space between this container and other content */
        }

        /* Style for individual containers */
        .container-item {
            flex: 0 0 calc(33.3333% - 40px); /* Set the width for each container with margin */
            background-color: rgba(255, 255, 255, 0.8); /* Set the background color with transparency */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            /* Add margin to create space between containers */
            
            /* Add margin to create space between containers */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Style for the image in the container */
        .container-image {
           height: 85%; /* 75% of the container's height for the image */
            background-size: cover;
            background-position: center;
            border-radius: 10px 10px 0 0; /* Rounded corners only at the top */
        }


        .container-heading a {
            text-decoration: none; /* Remove the default underline */
            color: #333; /* Set the text color to your preference */
            cursor: pointer; /* Add a pointer cursor to indicate it's clickable */
        }



h3 {
    margin-bottom: 5px;
}


        /* Additional styles for the second set of containers */
        .second-set {
            margin-top: 30px; /* Add margin to separate the sets of containers */
        }


        .additional-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            margin-left: 50px;
            margin-right: 50px; /* Adjust margin-right for desired spacing */
            height: 330px;
            margin-left: 70px;
            width: 1300px;
            margin-bottom: 20px; /* Add margin to create space between this container and other content */
        }

        /* Style for individual additional containers */
        .additional-item {
            flex: 0 0 calc(25% - 40px); /* Set the width for each container with margin */
            background-color: rgba(255, 255, 255, 0.8); /* Set the background color with transparency */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-bottom: 20px; /* Add margin to create space between containers */
            padding: 0px;
        }

        /* Style for the image in the additional container */
        .additional-image {
            height: 230px; /* 75% of the container's height for the image */
            background-size: cover;
            background-position: center;
            border-radius: 10px 10px 0 0; /* Rounded corners only at the top */
        }

        /* Style for the content within the additional container */
        .additional-content {
            margin-top: 5px; /* Add space between the image and content */
        }


.h3 {
    margin-top: 5px;
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
     font-size: 3 rem;
     margin-top: 10px;
     color:#dddddd;
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
        .social-icons-container {
            font-size: 34px;
            
        }
        .navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    height: 40px;
}

.navbar li {
    display: inline-block; /* Display list items horizontally */
    margin-right: 20px; /* Add spacing between the links */
}

.navbar a {
    text-decoration: none; /* Remove underlines from links */
    color: #000; /* Text color for links */
    font-weight: bold; /* Bold text for links */
    font-size: 16px; /* Adjust font size as needed */
    transition: color 0.3s; /* Smooth color transition on hover */
}

/* Change link color on hover */
.navbar a:hover {
    color: #ff6600; /* Change the color to your desired hover color */
}


/* Style for individual containers */



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
    
   


    </style>
</body>

<body>
<div id="navbar">
        <a href="travel home page.html">Home</a>
        <a href="placeshomepage.html">Places</a>
        <a href="features4.html">Features</a>
        <a href="about us.html">About Us</a>
        <a href="travel contact us.html">Contact Us</a>
        <a href="logout.php">
            <img src="https://cdn-icons-png.flaticon.com/128/10313/10313098.png" alt="Logout" width="20" height="20">
             Logout
        </a>
    </div>
    
    <div class="container">
        <div class="blur-background"></div>
        <img src="https://www.mtdc.co.in/wp-content/uploads/2019/11/1563865812_1512127259_DKyhm4VVwAAOfG4.jpg.png.jpg" alt="Overlay Image" class="overlay-image">

        <img src="https://www.mtdc.co.in/wp-content/uploads/2019/11/1563865812_1512127259_DKyhm4VVwAAOfG4.jpg.png.jpg" alt="Overlay Image" 
        class="blur-background">
        <div class="right-container">
            <div class="fort-text">Torna Fort</div>
            <div class="location-symbol">&#x1F4CD;</div>
            <div class="location-text">Torna, India</div>
            <!-- Add content for the right container here -->
        </div>
    </div>
    <br>
    <br>
    <div class="location-container">
        <h2 class="location-heading"></h2>
        <p class="weather-content">
            <h3>Overview</h3>Torna Fort, also known as Prachanda gad, is a large fort located in Pune district, in the Indian state of Maharashtra. It is historically significant because it was the first fort captured by Chhatrapati Shivaji Maharaj in 1646, at the age of 16. The hill has an elevation of 1,403 metres (4,603 ft) above sea level, making it the highest hill-fort in the district.
        </p>
        <br>
    <p><h4>Location:Rajgad - Torna Trek Path, Charhat Wadi, Maharashtra</p>
    <br>
    <p><h4>Best Time to Visite:monsoon and winter seasons </h4></p>
    <br>
    <p><h4>Entry Fee: No Entry Fee</h4></p>
    <br>
    <p><h4>Timing:24 hrs</h4></p>


    
    
    
    
    
    
    
    </div>



    <h2>History</h2>
    <p>
        Torna Fort is a large fort located in Pune district in the Indian state of Maharashtra. It is also known as Prachandagarh. Torana Fort was the first fort. Which was captured by Chhatrapati Shivaji Maharaj in 1646. He was possessed during adolescence. Therefore, it is recognized as an important historical monument. The height of this hill is 1,403 meters (4,603 ft) above sea level. Which makes it the highest hill-fort of the district.


The fort is situated at the highest point in the Pune district and is famous as a famous tourist attraction. Torana Fort remains a center of attraction for the weekend visitors, where tourists can explore the ruins of the fort and its natural surroundings. Although this fort is open for tourists throughout the year, but the monsoon season is the best time to visit here. If you also want to know more about the fort, then definitely read this article till the end.
    </p>
    <p>
        Torna Fort was built in the 13th century by the Shiva Panth, the followers of the Hindu deity Shiva. It was conquered by the Maratha ruler Shivaji during the 17th century, since then it became the center of the Maratha Empire. Torana Fort, situated at a height of 4603 feet, is considered to be the highest fort in Pune district. That’s why many trekkers and campers like to come here. This place is full of natural beauty. It is said that the Maratha Empire emerged around the Torana Fort. But later it was captured by the Mughal Empire. 

After that a doctrine was signed by the Peshwas and the Mughals and returned to the Marathas.The temple of Mengai Devi located at the entrance of the fort supports this fact. It was built in the 13th century. Four centuries later in 1646, Shivaji Maharaj conquered the fort and renamed the fort as “Prachanda Fort”. Torana Fort was controlled by the next generation of Chhatrapati Shivaji Maharaj till the 18th century. After that the Mughal Empire took control of the fort. And Aurangzeb changed its name to “Futulbib”.
    
    </p>

       <br>
       <br>



    <h2>Major Features</h2>
<p>
    <br>
    1)Impressive Architecture: Torna Fort features a blend of architectural styles from different periods, including remnants of the Maratha, Mughal, and earlier dynasties. Its well-constructed walls and bastions showcase its military and strategic significance.
<br>
2)Elevation: The fort is situated at a considerable elevation, providing panoramic views of the surrounding Sahyadri hills, valleys, and forests. It stands at an altitude of approximately 1,403 meters (4,603 feet) above sea level.
<br>
3)Bini Darwaja: The Bini Darwaja, or the main entrance, is a notable feature of Torna Fort. It is an intricately designed and imposing gateway that leads into the fort.
<br>
4)Menghai Goddess Temple: At the fort's summit, there is a temple dedicated to the goddess Menghai. This temple holds religious significance and is visited by pilgrims during festivals.
<br>
5)Budhla Machi: Budhla Machi is a massive plateau on the fort, known for its wide expanse and breathtaking views. It is a popular camping site and offers ample space for trekkers to rest and admire the scenery.
<br>
6)Historical Significance: Torna Fort has a rich history and was the first fort captured by Chhatrapati Shivaji Maharaj in 1646. It holds a special place in Maratha history as the foundation of the Maratha Empire.
<br>
7)Trekking Destination: The fort is a beloved trekking destination for adventure enthusiasts. The trek to Torna Fort is challenging and offers a rewarding experience, with steep ascents and natural beauty along the way.
<br>
8)Water Sources: Several water tanks and reservoirs are located within the fort, providing a source of freshwater for visitors and historical occupants.
<br>
9)Goddess Toranjai Temple: This temple is dedicated to the goddess Toranjai and is another place of religious significance on the fort.
<br>
10)Ruins and Bastions: Torna Fort boasts various ruins and bastions that once served as military outposts and offer insights into its historical importance.
<br>
11)Cannon Emplacements: Like many forts of its time, Torna has strategic cannon emplacements that were used for defense.
<br>
12)Natural Beauty: Beyond its historical significance, the fort is surrounded by lush greenery, making it an ideal location for nature lovers and photographers.


</p>
<!-- Weather/Climate Container -->
<div class="weather-container">
    <h2 class="weather-heading">Weather/Climate</h2>
    <p class="weather-content">
    </p>
    
    <h3>Summer</h3>
    <p>
        Summer at Torna Fort is generally mild and pleasant due to its higher elevation.
        Daytime temperatures during the summer months typically range from 20°C to 30°C (68°F to 86°F), making it a comfortable time for outdoor activities like trekking.
        Nights can be cooler, with temperatures occasionally dropping to around 15°C (59°F).
        This season is ideal for trekking and exploring the fort, as the weather is relatively dry and comfortable.
    </p>
    
    <h3>Monsoon</h3>
    <p>
        The monsoon season brings heavy rainfall to Torna Fort and the surrounding Western Ghats.
Rainfall can be quite intense, leading to lush greenery, swollen streams, and waterfalls in the area.
Treks during the monsoon can be challenging due to slippery trails, leeches, and increased water levels, but the landscape is exceptionally beautiful.
It's essential to exercise caution when trekking in the monsoon, as the paths can be treacherous.
    </p>
   
    <h3>Winter</h3>
    <p>
        Winter is an excellent time to visit Torna Fort, offering cool and pleasant weather.
Daytime temperatures range from 15°C to 25°C (59°F to 77°F), providing comfortable conditions for outdoor activities.
Nights can be chilly, with temperatures occasionally dropping to around 10°C (50°F).
The clear skies and mild temperatures make this season ideal for trekking and camping, and it's considered the peak trekking season in the region.

    </p>

</div>
<br>
<br>
<br>
<h2>Torna Fort Historical Marvels</h2>
<br>
<div class="horizontal-container">
    <!-- Container 1 -->
    <div class="container-item">
        <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Torna_Fort_Walls.JPG/2560px-Torna_Fort_Walls.JPG"alt="image"
        class="container-image"
        width="360" 
         height="300" >
      
        <div class="container-text">
            <h3 class="container-heading"><a href="takmak tok.html">Fort Walls</a></h3>
           
        </div>
    </div>
    <!-- Container 2 -->
    <div class="container-item">
        <img src ="https://upload.wikimedia.org/wikipedia/commons/e/e7/Zunjar_Machi_at_torna_fort.jpg"alt="image"
        class="container-image"
        width="360" 
         height="300" >

        <div class="container-text">
            <h3 class="container-heading"><a href="jadadishwar temple.html">Zunzar Machi at Torna</a></h3>
            
        </div>
    </div>
    <!-- Container 3 -->
    <div class="container-item">
        <img src ="https://upload.wikimedia.org/wikipedia/commons/7/77/A_view_of_torna_fort_from_Zunjar_machi.jpg"alt="image"
        class="container-image"
        width="360" 
         height="300" >

        
        <div class="container-text">
            <h3 class="container-heading"><a href="raj bhawan.html">Torna From Zunzar Machi</a></h3>
            
        </div>
    </div>
</div>

<br>
<br>
<br>

<p1><h2>More Atrractions Near Torna Fort </h2></p1>





    <!-- Additional Containers -->
    <div class="additional-container">
        <!-- Additional Container 1 -->
        <div class="additional-item">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/f0/ce/93/the-waterfront-shaw-lavasa.jpg?w=300&h=300&s=1"
         alt="Resorts"
         class="additional-image"
         width="300" 
         height="300" >
            <div class="additional-content">
                <h3 class="container-heading"><a href="resort.html">Resorts</a></h3>
                
            </div>
        </div>
        <!-- Additional Container 2 -->
        <div class="additional-item">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/84/a2/af/photo4jpg.jpg?w=300&h=300&s=1"
                 alt="Hotels"
                 class="additional-image"
                 width="300" 
                 height="300" 
            >
            <div class="additional-content">
                <h3>Hotels</h3>
            </div>
        </div>
        
        <!-- Additional Container 3 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('.vscode/');"></div>
            <div class="additional-content"
            width="300" 
            height="300" 
       >
                <h3></h3>
                
            </div>
        </div>
        <!-- Additional Container 4 -->
        <div class="additional-item">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/08/9b/10/rajgad-buruj.jpg?w=400&h=300&s=1"
            alt="Near places"
            class="additional-image"
            width="300" 
            height="300" 
       >
            <div class="additional-content">
                <h3>Near places</h3>
               
            </div>
        </div>
    </div>

    <!-- Your other content here -->

  

    <footer> 
        <div class="foot-panel">
           
        </div>
        <div class="foot-panel2">
            <ul>
                <h3>Accommodations</h3>
    
    <a>Hotels<br>
    Resorts<br>
    Hostels<br>
    Vacation Rentals<br>
    Camping Sites<br>
    Bed and Breakfast<br>
    Flight Booking<br>
    Airlines<br>
    Airport Information<br>
    Flight Status<br>
    Baggage Guidelines<br>
    Frequent Flyer Programs</a>
            </ul>
            <ul>
                <h3>Travel Guides</h3>
    
    <a>Travel Tips<br>
    Packing Lists<br>
    Visa and Passport Information<br>
    Travel Insurance<br>
    Local Etiquette<br>
    Cultural Insights<br>
    Sightseeing<br>
    Outdoor Adventures<br>
    Cultural Experiences<br>
    Food and Dining<br>
    Shopping<br>
    Nightlife</a>
            </ul>
            <ul>
                <h3>About Us</h3>
                <a>Company Information<br>
                Our Team<br>
                Mission and Values<br>
                Testimonials<br>
                Contact Information<br>
                Careers<br>
                FAQs<br>
                Contact Us<br>
                Booking Assistance<br>
                Cancelation Policy<br>
                Travel Alerts<br>
                Feedback</a>
            </ul>
            <ul>
                <h3>Social Media</h3>
                <a>Facebook
                    <br>
                    Twitter
                    <br>
                    Instagram<br>
                    Pinterest<br>
                    YouTube<br>
                    Blog Subscription<br>
                    Travel Advisories<br>
                    Health and Vaccination<br>
                    Safety Tips<br>
                    Emergency Contacts<br>
                    Travel Insurance</a>
    
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