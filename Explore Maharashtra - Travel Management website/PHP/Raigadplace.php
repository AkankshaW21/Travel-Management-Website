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
if(isset($_POST['raigad'])) {
    // Insert record into database
    $pageName = "Raigad";
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

#navbar a {
    text-decoration: none;
    color: #dfd3d3;
    margin: 0 10px;
    font-size: 18px;
    display: flex; /* Add display: flex; to arrange text and icon vertically */
    flex-direction: column; /* Arrange text and icon in a column layout */
    align-items: center; /* Center content horizontally */
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
        <form action="raigad fort.php" method="get">
            <select name="raigadr">
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
    </form>
    </div>
    
    <div class="container">
        <div class="blur-background"></div>
        <img src=".vscode/Nagarkhana,_Raigad_Fort,_India (1).jpg" alt="Overlay Image" class="overlay-image">
        <div class="right-container">
            <div class="fort-text">Raigad Fort</div>
            <div class="location-symbol">&#x1F4CD;</div>
            <div class="location-text">Raigad, India</div>
            <!-- Add content for the right container here -->
        </div>
    </div>
    <br>
    <br>
    <div class="location-container">
        <h2 class="location-heading"></h2>
        <p class="weather-content">
            <h3>Overview</h3>Raigad Fort, perched atop the Sahyadri mountains in Maharashtra, India, boasts a rich history intertwined with the rise of the Maratha Empire, particularly under Chhatrapati Shivaji Maharaj's visionary leadership. The fort witnessed architectural development, including the iconic Maha Darwaja and Raj Bhavan. Though its fortunes fluctuated after Shivaji's time, it remains a testament to Maratha glory and Maharashtra's rich history.
        </p>
        <br>
    <p><h4>Location: Raigad Fort,Raigad,Maharashtra</p>
    <br>
    <p><h4>Best Time to Visite: November to March</h4></p>
    <br>
    <p><h4>Entry Fee: INR 10</h4></p>
    <br>
    <p><h4>Timing: 10AM to 6PM</h4></p>



    
    
    
    
    
    
    
    </div>



    <h2>History</h2>
    <p>Raigad Fort, perched atop the Sahyadri mountains in Maharashtra, has a storied history deeply entwined with the rise of the Maratha Empire, most notably under the visionary leadership of Chhatrapati Shivaji Maharaj. This historic site, originally fortified by Chandrarao More in the 11th century, gained paramount importance during Shivaji's reign. In 1656, Shivaji seized the fort from Mughal control, setting the stage for the coronation that would forever etch Raigad Fort into the annals of history. On June 6, 1674, in a grand ceremony, Shivaji was crowned the king of the Maratha Empire within the formidable walls of Raigad, assuming the title of Chhatrapati and declaring the fort as his capital. This momentous event marked a turning point in India's history, as it heralded the resurgence of Maratha power. Under Shivaji's stewardship, the fort witnessed a surge in architectural development, including the construction of the imposing Maha Darwaja and the Raj Bhavan, showcasing the empire's might. However, the fort's fortunes took a downturn after Shivaji's escape from Raigad and eventual death in 1680. Subsequently, the Mughals regained control. It was only in 1733 that the Marathas, led by the Peshwas, reclaimed the fort. Despite facing the ravages of time and the British Empire's neglect, Raigad Fort remains a testament to Shivaji's indomitable spirit and the epic saga of Maratha glory. Today, it stands as a symbol of Maharashtra's rich history, drawing visitors from far and wide to admire its architectural splendor and pay homage to its legendary past. Regenerate</p>
    <p>Raigad, situated in the Raigad district of Maharashtra, India, is a hill fort located in the town of Mahad. It is one of the strongest fortresses on the Deccan Plateau and was historically referred to as Rairee or Rairy fort. Chhatrapati Shivaji, the Maratha ruler, along with the Chief Engineer Hiroji Indulkar, oversaw the construction and development of various buildings and structures within Raigad. In 1674, after being crowned the king of the Maratha kingdom, Shivaji chose Raigad as his capital. Under his reign, the Maratha Empire expanded to encompass a significant portion of western and central India.[2] Located at an elevation of 820 metres (2,700 ft) (2,700 ft) above its base and 1,356 m (4,449 ft) (4,449 ft) above sea level within the Sahyadri mountain range, the fort offers views of the surrounding area. Accessing the fort requires ascending approximately 1,737 steps. Alternatively, visitors can opt for the Raigad Ropeway, an aerial tramway spanning 750 m (2,460 ft) (2,460 ft) in length and reaching a height of 400 m (1,300 ft) (1,300 ft), which conveniently transports them from the ground to the fort in just four minutes.</p>
       <br>
       <br>



    <h2>Major Features</h2>
<p>The main palace was constructed using wood, of which only the base pillars remain. The main fort ruins consist of the queen's quarters, and six chambers, with each chamber having its private restroom. The chambers do not have any windows. In addition, ruins of three watch towers can be seen directly in front of the palace grounds out of which only two remain as the third one was destroyed during a bombardment. The fort also overlooks an artificial lake known as the Ganga Sagar Lake.

</p>
<p>The only main pathway to the fort passes through the "Maha Darwaja" (Huge Door) which was previously closed at sunset. The Maha Darwaja has two huge bastions on both sides of the door which are approximately 20–21 m (65–70 ft) in height. The top of the fort is 180 m (600 ft) above this door.

</p>
<p>The king's court, inside the Raigad Fort, has a replica of the original throne that faces the main doorway called the Nagarkhana Darwaja. It faces the East Side. It was here where Chhatrapati Shivaji's Rajyabhishek took place. This enclosure had been acoustically designed to aid hearing from the doorway to the throne. A secondary entrance, called the Mena Darwaja on the south side, was supposedly the private entrance for the royal ladies of the fort that lead to the queen's quarters. The convoy of the king and the king himself used the Palkhi Darwaja. on the north side. To the right of Palkhi Darwaja, is a row of three dark and deep chambers. Historians believe that these were the granaries for the fort. From the fort, one can view the execution point called Takmak Tok, a cliff from which sentenced prisoners were thrown to their death. This area has been fenced off.

</p>
<p>A statue of Chhatrapati Shivaji is erected in front of the ruins of the main market avenue that leads to the Jagdishwar Mandir, which has Hiroji Indulkar's name engraved on the first step, his own Samadhi and that of his dog named Waghya. The Samadhi of Rajmata Jijabai, Chhatrapati Shivaji's mother, can be seen at the base village of Pachad. Additional attractions of the fort include the Khubladha Buruj, Nane Darwaja and the Hatti Talav (Elephant Lake). Henry Oxienden was on the fort from 13 May to 13 June 1674 & he quoted "We arrived at the top of that strong mountain about sunn sett, which is fortified by nature more than art, being off very difficult access, and but one advance to it, which is guarded by two narrow gates, and fortified with a strong high wall, and bastions thereto. All the other parte of the mountaine is a direct precipice, so that it is impregnable except the treachery of some in it betrayes it. On the Mountaine are many strong buildings, as the Rajahs Court,and houses for other Ministers of State, to the number of about 300, It is in length about 21 miles and breadth * a mile, but noe pleasant trees nor any sort of grains growes thereon. Our house was about a mile from the Rajahs Pallaoe, into which wee retired with noe little content."

</p>

<!-- Weather/Climate Container -->
<div class="weather-container">
    <h2 class="weather-heading">Weather/Climate</h2>
    <p class="weather-content">
        The climate of Raigad Fort, located in the Sahyadri mountain range in Maharashtra, India, is influenced by its elevation and its proximity to the Western Ghats. Here is an overview of the weather and climate you can expect in Raigad Fort:
    </p>
    
    <h3>Summer (March to June):</h3>
    <p>The summer months in Raigad Fort are generally warm and can be quite hot during the daytime. Daytime temperatures often range from 25°C to 35°C (77°F to 95°F). It's advisable to visit during early morning or late afternoon to avoid the heat if you plan to explore the fort during this time.</p>
    
    <h3>Monsoon (July to September):</h3>
    <p>The monsoon season in Raigad Fort brings heavy rainfall. The region experiences lush greenery and a refreshing atmosphere during this time. Rainfall can be quite heavy, and it's essential to be cautious of slippery paths and potential landslides, especially if you plan to trek to the fort.</p>
    
    <h3>Post-Monsoon (October to November):</h3>
    <p>After the monsoon, the post-monsoon period brings pleasant weather to Raigad Fort. Temperatures begin to cool down, and the landscape is still lush and green.</p>
    
    <h3>Winter (December to February):</h3>
    <p>Winters in Raigad Fort are cool and relatively dry. Daytime temperatures range from 15°C to 25°C (59°F to 77°F). Nights can be chilly, and you may require warm clothing, especially if you plan to visit during the early morning or late evening.</p>
    
    <p>Overall, the best time to visit Raigad Fort in terms of weather and comfortable conditions is during the post-monsoon and winter months (October to February). However, if you prefer lush greenery and don't mind occasional rain, the monsoon season (July to September) can also be a beautiful time to explore the fort. Summers (March to June) can be hot, so it's advisable to take precautions against the heat if visiting during this period.</p>
</div>
<br>
<br>
<br>
<h2>Raigad Fort's Historical Marvels</h2>
<div class="horizontal-container">
    <!-- Container 1 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('.vscode/takmok-tok.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="takmak tok.html">Takmak Tok</a></h3>
           
        </div>
    </div>
    <!-- Container 2 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('.vscode/jagadishwar-temple.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="jadadishwar temple.html">jagadishwar Temple</a></h3>
            
        </div>
    </div>
    <!-- Container 3 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('.vscode/RAIGAD-14_2_11zon.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="raj bhawan.html">Raj Bhawan</a></h3>
            
        </div>
    </div>
</div>

<!-- Second set of containers -->
<div class="horizontal-container second-set">
    <!-- Container 4 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('.vscode/Pic-2.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="ropeway.html">Ropeway</a></h3>
            
        </div>
    </div>
    <!-- Container 5 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('.vscode/photo_1575631362478.webp');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="gangasagr lake.html">Gangasagar Lake</a></h3>
           
        </div>
    </div>
    <!-- Container 6 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('.vscode/Raigad-fort-Gate.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="maha darwaja.html">Maha Darwaja</a></h3>
           
        </div>
    </div>
</div>


<br>
<br>
<br>
<br>

<p1><h2>More Atrractions Near Raigad</h2></p1>





    <!-- Additional Containers -->
    <div class="additional-container">
        <!-- Additional Container 1 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('.vscode/1603797851_f-b7-1024x700-forest-resort-cropped-1-1575456162.jpg');"></div>
            <div class="additional-content">
                <h3 class="container-heading"><a href="raigad resort.html">Resorts</a></h3>
                
            </div>
        </div>
        <!-- Additional Container 2 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('.vscode/Night_View_CXNAKy.jpg');"></div>
            <div class="additional-content">
                <h3 class="container-heading"><a href="raigad hotels.html">Hotels</a></h3>
               
            </div>
        </div>
        <!-- Additional Container 3 -->
       
        <!-- Additional Container 4 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('.vscode/waterfall-at-shivthar.jpg');"></div>
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
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <!-- End of social media icons within separate container -->
        
            <p>Stay connected with us on social media for updates and more!</p>
        
            <!-- Phone number and address -->
            <div class="contact-info">
                <p><i class="fas fa-phone"></i> Phone: +1 (123) 456-7890</p>
                <p><i class="fas fa-map-marker-alt"></i> Address:VIT Pune,IT Department,SY-C-Group No.9,Pune,India</p>
            </div>
            <!-- End of phone number and address -->
        </div>
        



    

</body>
</html>
