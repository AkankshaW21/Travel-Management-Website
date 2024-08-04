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
if(isset($_POST['pratapgad'])) {
    // Insert record into database
    $pageName = "Pratapgad";
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
    <title>Blurred Background with Overlay Image</title>
</head>
<body>
    <style>
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
      font-size: 19.4px;
    font-weight: lighter;    }
/* Change link color on hover */


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
            background-image: url('.vscode/Pratapgad-featured.jpg');
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

.f-container {
background-color: white;    background-size: cover;
    background-position: center;
    padding: 20px;
   margin-top: 10px;
   margin-left: 130px;
   margin-right: 100px;
    border-radius: 0px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: left; /* Align text to the left */
    font-family: Arial, sans-serif; /* Specify font family */
}

/* Style for the weather/climate headings */
.f-heading {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 16px;
    color: #090707; /* Change text color to your preference */
    margin-left: 475px;
     /* Convert text to uppercase */
}

/* Style for the weather/climate content */
.f-content {
    font-size: 16px;
    line-height: 1.5;
    color: #000000; /* Change text color to your preference */
}

/* Style for h3 headings within the weather content */
.f-container h3 {
    font-size: 20px;
    font-weight: bold;
    color: #0c0101; /* Change text color to your preference */
    margin-left: 150px;
}

/* Style for paragraph text within the weather content */
.f-container p {
    margin-bottom: 10px;
}
#navbar a {
    text-decoration: none;
    color: #dfd3d3;
    margin: 0 10px;
    font-size: 18px;
    display: flex; /* Add display: flex; to arrange text and icon vertically */
    flex-direction: column; /* Arrange text and icon in a column layout */
    align-items: center; /* Center content horizontally */
}


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
        <form action="pratapgad.php" method="get">
            <select name="pratapgad">
                <option value="" disabled selected>Select hotels and resorts...</option>
                <option value="hotels">Hotels</option>
                <option value="resorts">Resorts</option>
                          </select>
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>

        <a href="logout.php">
            <img src="https://cdn-icons-png.flaticon.com/128/10313/10313098.png" alt="Logout" width="20" height="20">
             Logout
        </a>
    </div>
    <div class="container">
        <div class="blur-background"></div>
        <img src=".vscode/Pratapgad-featured.jpg" alt="Overlay Image" class="overlay-image">
        <div class="right-container">
            <div class="fort-text">Pratapgad Fort</div>
            <div class="location-symbol">&#x1F4CD;</div>
            <div class="location-text">Satara, India</div>
            <!-- Add content for the right container here -->
        </div>
    </div>
    <br>
    <br>
    <div class="location-container">
        <h3 class="location-heading"></h3>
        <p class="weather-content">
            <h3>Overview</h3>Pratapgad Fort, nestled amidst the picturesque Western Ghats in Maharashtra, is a historically significant monument. Constructed in 1656 under the visionary leadership of Chhatrapati Shivaji Maharaj, this fort played a crucial role in his efforts to establish and fortify the Maratha Empire. Its architectural brilliance is evident in the design, which comprises both an upper fort (known as Balekilla) and a lower fort, complete with bastions, a moat, watchtowers, and defensive walls.
        </p>
        <br>
    <p><h4>Location:Pratapgad Fort,Satara,Maharashtra</p>
    <br>
    <p><h4>Best Time to Visite: October to March</h4></p>
    <br>
    <p><h4>Entry Fee:No </h4></p>
    <br>
    <p><h4>Timing: 9:00 AM to 5:00 PM</h4></p>



    </div>

    <h2>History</h2>
<p>Pratapgad Fort, perched majestically in the Western Ghats of Maharashtra, holds a storied history deeply intertwined with the rise of the Maratha Empire under the visionary leadership of Chhatrapati Shivaji Maharaj. In 1656, Shivaji Maharaj ordered the construction of this formidable hill fort as part of his grand vision to establish and safeguard his fledgling kingdom. Strategically located, Pratapgad's architectural marvels include an upper fort, known as Balekilla, and a lower fort, adorned with bastions, a protective moat, watchtowers, and imposing walls. 

</p>
<p>Yet, perhaps the most celebrated chapter in the fort's history is the Battle of Pratapgad in 1659, a pivotal moment in the Maratha quest for independence when Shivaji's forces triumphed over the Bijapur Sultanate. The Bhavani Temple, nestled within the fort's precincts, serves as both a place of devotion and a testament to Shivaji's unwavering faith in his patron deity. Today, Pratapgad Fort stands as a living legacy, drawing tourists, trekkers, and history enthusiasts alike, offering a glimpse into the enduring spirit and strategic brilliance of Chhatrapati Shivaji Maharaj and the rich history of the Maratha Empire.

</p>

    <br>
       <br>
       <h2>Major Features</h2>
       <div class="f-container">
        <h2 class="f-heading">Major Fratures</h2>
       <p class="f-content">
    
<p>Pratapgad Fort in Maharashtra boasts several major features that make it a historically significant and architecturally impressive site. Here are some of its major features:

    <h4>Balekilla (Upper Fort):</h4> <p>The fort is divided into an upper and lower section, with Balekilla serving as the upper fort. This section contains many of the fort's key structures and offers commanding views of the surrounding landscape.
    </p>
    <h4>Bhavani Temple:</h4><p> Nestled within the fort complex is the Bhavani Temple, dedicated to the goddess Bhavani. It is not only a place of worship but also holds historical and cultural significance as it was highly revered by Chhatrapati Shivaji Maharaj.
    </p>
        <h4>Bastions:</h4><p> Pratapgad Fort is fortified with numerous bastions, which were strategically designed to provide defense and surveillance capabilities. These bastions played a crucial role in protecting the fort from potential invaders.
    </p>
    <h4>Defensive Walls: </h4><p>The fort is surrounded by robust defensive walls, which were built to withstand attacks and deter any threats. These walls are a testament to the fort's military significance.
    </p>
    <h4> Moat: </h4><p>A protective moat surrounds parts of the fort, adding an additional layer of defense. Moats were a common feature in many forts to hinder enemy access.
</p>
<h4>Watchtowers:</h4><p> Pratapgad has watchtowers strategically placed throughout the fort to provide vantage points for surveillance and early warning against approaching enemies.
</p>
<h4> Battlefield of Pratapgad:</h4> <p>The fort's history is closely tied to the Battle of Pratapgad in 1659, where Chhatrapati Shivaji Maharaj and his forces defended the fort successfully against the Bijapur Sultanate. The battlefield is a significant historical site within the fort.
</p>
<h4>Natural Beauty: </h4><p>Pratapgad Fort is located in the picturesque Western Ghats, offering breathtaking views of the lush green hills and valleys surrounding the area. The natural beauty of the location adds to the allure of the fort.
</p>
<h4>Trekking Trails: </h4><p>The fort is a popular destination for trekkers and hikers, with various trekking trails leading to its summit. These trails provide opportunities for adventure and exploration amid the scenic landscape.
</p>
<h4> Cultural Significance: </h4><p>Pratapgad Fort is not only a historical site but also a place of cultural significance, as it represents the legacy of Chhatrapati Shivaji Maharaj and his contributions to the Maratha Empire.
</p>
    These major features collectively make Pratapgad Fort a remarkable historical and architectural gem, attracting visitors who are interested in history, culture, and the natural beauty of the Western Ghats.</p>
</p>
</div>
<!-- Weather/Climate Container -->
<div class="weather-container">
    <h2 class="weather-heading">Weather/Climate</h2>
    <p class="weather-content">
        The weather and climate at Pratapgad Fort in Maharashtra, India, are influenced by its location in the Western Ghats, a region known for its varied climate throughout the year.     </p>
    
    <h3>Summer (March to June):</h3>
<p>Summer months at Pratapgad are generally warm and dry.
    Daytime temperatures can range from 25°C to 35°C (77°F to 95°F) or higher.
    It's a good time for trekking and outdoor activities, but be prepared for warm weather.</p>    
    <h3>Monsoon (July to September):</h3>
<p>The monsoon season brings heavy rainfall to the region, which can make trekking and outdoor activities challenging.
    Rainfall is quite high, and the surroundings become lush and green during this time.
    Landslides and road closures are possible, so check road conditions before traveling</p>    
    <h3>Post-Monsoon (October to November):</h3>
<p>After the monsoon, the landscape is at its most vibrant and green.
    This is a pleasant time to visit with cooler temperatures, and the weather is usually clear.</p>    
    <h3>Winter (December to February):</h3>
<p>Winters at Pratapgad are cool and relatively dry.
    Daytime temperatures range from 10°C to 25°C (50°F to 77°F).
    Nights can be quite chilly, so it's advisable to carry warm clothing if visiting during this season.
    The clear skies and cool weather make it an excellent time for trekking and sightseeing.</p>    
<p>The best time to visit Pratapgad Fort for comfortable weather and clear views is typically during the post-monsoon (October to November) and winter (December to February) months when the temperatures are moderate. However, if you enjoy the lush greenery and don't mind the occasional rain, the monsoon season can be a unique and visually appealing time to visit, but be prepared for wet conditions.</p></div>
<br>
<br>
<br>
<h2>Pratapgad Fort's Historical Marvels</h2>
<div class="horizontal-container">
    <!-- Container 1 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://thumbs.dreamstime.com/b/statue-king-shivaji-pune-maharashtra-india-blue-sky-as-background-statue-king-shivaji-pune-maharashtra-132086640.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="">The statue of Chatrapati shivaji  Maharaj </a></h3>
           
        </div>
    </div>
    <!-- Container 2 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://www.rarebooksocietyofindia.org/photo_archive/196174216674_10157113821306675');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="">The Afzal Khan Tower</a></h3>
            
        </div>
    </div>
    <!-- Container 3 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://1.bp.blogspot.com/-04J0qyxlQvI/Vvwdn-B2WqI/AAAAAAAACl8/cgRw34ShfB40UTjFATQ_K2ldQ9kf2LTRA/s1600/Bhavani%2BTemple%2Bpratapgad.JPG');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="">Bhavani temple</a></h3>
            
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>

<p1><h2>More Atrractions Near Pratapgad</h2></p1>





    <!-- Additional Containers -->
    <div class="additional-container">
        <!-- Additional Container 1 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/333039808.jpg?k=b4552681798a6a941281429837dd3f0df9e6ccea121231e9137a84330bd91cfa&o=&hp=1');"></div>
            <div class="additional-content">
                <h3 class="container-heading"><a href="pratapgad resorts.html">Resorts</a></h3>
                
            </div>
        </div>
        <!-- Additional Container 2 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201908261404512531-405b7854563211eabe9d0242ac110003.jpg');"></div>
            <div class="additional-content">
                <h3 class="container-heading"><a href="pratapgad hotels.html">Hotels</a></h3>
               
            </div>
        </div>
        <!-- Additional Container 3 -->
      
        <!-- Additional Container 4 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('.vscode/waterfall-at-shivthar.jpg');"></div>
            <div class="additional-content">
                <h3 class="container-heading"><a href="pratapgad resorts.html">Near Places</a></h3>
               
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