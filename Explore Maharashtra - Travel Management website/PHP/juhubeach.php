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
if(isset($_POST['juhubeach'])) {
    // Insert record into database
    $pageName = "JuhuBeach";
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


           h2 {
        margin-left: 50px;
           }

p {
   margin-left: 100px;
   margin-right: 100px;
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
            background-image: url('https://www.rd.com/wp-content/uploads/2020/04/hanauma-bay-on-the-island-of-o-ahu-in-the-united-states-of-america-e1643060191903.jpg');
            height: 1200px;
            width: 1500px;
            filter: blur(1px); /* Adjust the blur intensity as needed */
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
        .add-to-box {
    text-align: bottom;
}

.youtube-link .youtube-icon {
    font-size: 50px;
    color: RED; /* Set the color to red */
    text-decoration: none; /* Remove the underline for the link */
}



       

        /* Style for the weather/climate container */
/* Style for the blurred background container */
.container {
    position: relative;
    width: 100%;
    height: 550px; /* Set the desired height for the blurred background */
    overflow: hidden;
}


.blur-background {
    background-image: url('https://www.rd.com/wp-content/uploads/2020/04/hanauma-bay-on-the-island-of-o-ahu-in-the-united-states-of-america-e1643060191903.jpg');
    height: 1200px;
    width: 1500px;
    filter: blur(1px); /* Adjust the blur intensity as needed */
    position: absolute;
    z-index: -1;
}

/* Style for the weather/climate container */
.weather-container {
    background-image: url('https://services.meteored.com/img/article/weekend-weather-a-change-in-the-wind-heralds-a-change-in-the-weather-1679651389145_1280.jpeg'); /* Use the same background image */
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
    color: red; /* Change text color to your preference */
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
    background-image: url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80.jpg");
  
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

    <div class="container">
        <div class="blur-background"></div>
        
        <img src="https://paramountclientweb.s3.ap-south-1.amazonaws.com/indian-holiday-trip/Place/2023/Mar/Img_2726_202353271046_juhu_beach.jpg" alt="Overlay Image" class="overlay-image">
        <div class="right-container">
            <div class="fort-text">juhu beach </div>
            <div class="location-symbol">&#x1F4CD;</div>
            <div class="location-text">juhu, India</div><br><br><br>
            
            <i class="fab fa-youtube youtube-icon"></i>
        <a href="https://youtu.be/_sAwQEtPsDk" target="_blank" class="youtube-link">Watch on YouTube</a>
            <!-- Add content for the right container here -->
            <div class="map-container"> </div>

        </div>
    </div>
    <br>
    <br>
    <div class="location-container">

        
        <h2 class="location-heading"></h2>
        <p class="weather-content">
            <h3>Overview</h3>juhu beach, perched atop the Sahyadri mountains in Maharashtra, India, boasts a rich history intertwined with the rise of the Maratha Empire, particularly under Chhatrapati Shivaji Maharaj's visionary leadership. The fort witnessed architectural development, including the iconic Maha Darwaja and Raj Bhavan. Though its fortunes fluctuated after Shivaji's time, it remains a testament to Maratha glory and Maharashtra's rich history.
        </p>
        <br>
    <p><h4>Location: juhu beach,Maharashtra</p>
    <br>
    <p><h4>Best Time to Visite: November to March</h4></p>
    <br>
    
    
    <p><h4>Timing: 10AM to 6PM</h4></p>



    
    
    
    
    
    
    
    </div>



    <h2>about</h2>
    <p>The Juhu Beach in Mumbai is one of the most famous Indian beaches. This beach is known to be the one of the most-visited beaches of India and is situated in 'Ville Parle'. It is located approximately 18 km from the city center and is a desired location for most film shootings. Juhu Beach borders a posh locality where most celebrities stay and therefore, it is quite common to find famous celebrities jogging along the sands of this popular beach of Mumbai. Tourists visit this beach because of its peaceful atmosphere and its scenic beauty. Juhu Beach is also famous for its local delicacies and street food. The food stalls set up here offer excellent cuisines and snack items. People in Mumbai visit this beach to relax and enjoy after a long, tedious day. There are extravagant hotels and apartments located at the southern end of the beach. Watching the sunset in this wonderful place, guarded by the vast Arabian Sea, is a dream-like vision for anyone who visits the beach.</p>
    <p>Juhu is popular for lively Juhu Chowpatty Beach, a long stretch where casual cricket matches are played, and beach vendors offer snacks like bhel puri and ice cream. Nearby, chic bars serve everything from local beer to cocktails, while the white marble ISKCON temple serves up vegetarian fare and baked goods. Contemporary and experimental plays take the stage at Prithvi Theatre. ― Google</p>
       <br>
       <br>



    <h2>Activities to do </h2>
<p> Try out the various local cuisines offered at the food stalls and snack joints set up at the beach. The street foods, such as 'Pani Puri', 'Bhel Puri' and 'Pav Bhaji' are just some of the many delicacies offered at the beach stalls.
    One can also visit the famous Italian restaurants here such as Little Italy, Mangi Ferra, Don Giovanni, Penne, and so on. Popular sea-food specialties are served at these quality restaurants sited near the Juhu Beach. Here, one can visit pubs and discotheques that are the youth joints of the area.The 'Gandhi Gram' is located at the north end of the beach, which is a place where children often enjoy their summer vacations playing sports like basketball, cricket and football.
    Exciting activities like horse and camel rides are also available at Juhu Beach. Apart from other activities, dancing monkeys are sure to enthrall the crowds.
    People who come here also indulge in activities like jogging, skipping, cycling and even attend Yoga sessions conducted by different groups.
    Exploring the statues of Indian freedom fighters like 'Lokmanya Tilak' and many other important figures offers an interesting experience as well.</p>

</p>
<p>The only main pathway to the fort passes through the "Maha Darwaja" (Huge Door) which was previously closed at sunset. The Maha Darwaja has two huge bastions on both sides of the door which are approximately 20–21 m (65–70 ft) in height. The top of the fort is 180 m (600 ft) above this door.

</p>
<p>The king's court, inside the Raigad Fort, has a replica of the original throne that faces the main doorway called the Nagarkhana Darwaja. It faces the East Side. It was here where Chhatrapati Shivaji's Rajyabhishek took place. This enclosure had been acoustically designed to aid hearing from the doorway to the throne. A secondary entrance, called the Mena Darwaja on the south side, was supposedly the private entrance for the royal ladies of the fort that lead to the queen's quarters. The convoy of the king and the king himself used the Palkhi Darwaja. on the north side. To the right of Palkhi Darwaja, is a row of three dark and deep chambers. Historians believe that these were the granaries for the fort. From the fort, one can view the execution point called Takmak Tok, a cliff from which sentenced prisoners were thrown to their death. This area has been fenced off.

</p>
<p>A statue of Chhatrapati Shivaji is erected in front of the ruins of the main market avenue that leads to the Jagdishwar Mandir, which has Hiroji Indulkar's name engraved on the first step, his own Samadhi and that of his dog named Waghya. The Samadhi of Rajmata Jijabai, Chhatrapati Shivaji's mother, can be seen at the base village of Pachad. Additional attractions of the fort include the Khubladha Buruj, Nane Darwaja and the Hatti Talav (Elephant Lake). Henry Oxienden was on the fort from 13 May to 13 June 1674 & he quoted "We arrived at the top of that strong mountain about sunn sett, which is fortified by nature more than art, being off very difficult access, and but one advance to it, which is guarded by two narrow gates, and fortified with a strong high wall, and bastions thereto. All the other parte of the mountaine is a direct precipice, so that it is impregnable except the treachery of some in it betrayes it. On the Mountaine are many strong buildings, as the Rajahs Court,and houses for other Ministers of State, to the number of about 300, It is in length about 21 miles and breadth * a mile, but noe pleasant trees nor any sort of grains growes thereon. Our house was about a mile from the Rajahs Pallaoe, into which wee retired with noe little content."

</p>
<br> 
<h2> dishes must be try</h2>
<title>Styled HTML Table</title>
    <style>
        /* Add CSS styles for the table container */
        .table-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        /* Add styles for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Add styles for table headers */
        th {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            padding: 10px;
            text-align: left;
        }

        /* Add alternating row colors */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Add styles for table cells */
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
   
   
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>vegetarian</th>
                    <th> non veg</th>
                    <th>other </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>misal paav</td>
                    <td>biryani</td>
                    <td>sandwich</td>
                </tr>
                <tr>
                    <td>usal</td>
                    <td>dum biryani</td>
                    <td>vada paav</td>
                </tr>
                <tr>
                    <td>pitla</td>
                    <td>chicken roasted</td>
                    <td> dhosa</tr>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

<h2> MAP FOR JUHU BEACH </h2>
<title>Google Map Example</title>
    <style>
        /* Set the size of the map container */
        #map {
            height: 50px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Add a div to hold the map -->
    <div id="map"></div>

    <script>
        // Initialize and create the map
        function initMap() {
            // Replace with the latitude and longitude of your desired location
            var myLatLng = { lat: 37.7749, lng: -122.4194 };

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 14 // Adjust the zoom level as needed
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                title: 'My Location' // You can set a custom title for the marker
            });
        }
    </script>

    <!-- Include the Google Maps JavaScript API with your API key -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30161.364024531285!2d72.82355965!3d19.1001746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c994afbc6de9%3A0xd36760e4a1a77177!2sJuhu%20Beach!5e0!3m2!1sen!2sin!4v1694777408420!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</html>

<!-- Weather/Climate Container -->
<div class="weather-container">
    <h2 class="weather-heading">Weather/Climate</h2>
    <p class="weather-content">
        The climate of juhu, located in the near juhu beach in Maharashtra, India, is influenced by its elevation and its proximity to the Western Ghats. Here is an overview of the weather and climate you can expected in the juhu beach:

    </p>
    
    <h3>Summer (March to June):</h3>
    <p>The summer months in juhu beach are generally warm and can be quite hot during the daytime. Daytime temperatures often range from 25°C to 35°C (77°F to 95°F). It's advisable to visit during early morning or late afternoon to avoid the heat if you plan to explore the fort during this time.</p>
    
    <h3>Monsoon (July to September):</h3>
    <p>The monsoon season in juhu beach brings heavy rainfall. The region experiences lush greenery and a refreshing atmosphere during this time. Rainfall can be quite heavy, and it's essential to be cautious of slippery paths and potential landslides, especially if you plan to trek to the fort.</p>
    
    <h3>Post-Monsoon (October to November):</h3>
    <p>After the monsoon, the post-monsoon period brings pleasant weather to Raigad Fort. Temperatures begin to cool down, and the landscape is still lush and green.</p>
    
    <h3>Winter (December to February):</h3>
    <p>Winters in juhu beach are cool and relatively dry. Daytime temperatures range from 15°C to 25°C (59°F to 77°F). Nights can be chilly, and you may require warm clothing, especially if you plan to visit during the early morning or late evening.</p>
    
    <p>Overall, the best time to visit juhu beach in terms of weather and comfortable conditions is during the post-monsoon and winter months (October to February). However, if you prefer lush greenery and don't mind occasional rain, the monsoon season (July to September) can also be a beautiful time to explore the fort. Summers (March to June) can be hot, so it's advisable to take precautions against the heat if visiting during this period.</p>
</div>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Image Slider</title>
    <style>
        .slider-container {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }

        .slider {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .slide {
            width: 100%;
            height: 100%;
            display: none;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .controls {
            text-align: center;
            margin-top: 10px;
        }

        .controls button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="https://www.holidify.com/images/cmsuploads/compressed/shutterstock_1073721995_20191213105915_20191213105938.jpg" alt="Image 1">

            </div>
            <div class="slide">
                <img src="https://www.travelogyindia.com/images/mumbai/marine-drive1.jpg" alt="Image 2">

            </div>
            <div class="slide">
               
                <img src="https://static.wixstatic.com/media/78f03b_c17c1294547341faa11c7a5b1ea764c8~mv2.png/v1/fill/w_560,h_394,al_c,lg_1,q_85,enc_auto/Alibaug%20Beach-01.png" alt="Image 3">
                
            </div>
            <div class ="slide">
                <img src ="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/74/2d/2c/img-20171204-wa0061-largejpg.jpg?w=1200&h=1200&s=1" alt="image 3">

                
            </div>
            <div class="slide">
                <img src=" https://purplebus.in/images/bustours/purpletrips_1_1.jpg" alt=" image 2">

            </div>
            <div class =" slide">
                <img src="https://beachesofindia.in/wp-content/uploads/2017/07/Untitled-design-57-1.jpg"  alt="image 3">

            </div>
            <div class="https://media-cdn.tripadvisor.com/media/photo-s/0a/e4/cb/db/sunset-at-ganpatipule.jpg" alt="image 3">
                </div>
                
        </div>
        <div class="controls">
            <button id="prev">Previous</button>
            <button id="next">Next</button>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.style.display = 'block';
                } else {
                    slide.style.display = 'none';
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        document.getElementById('next').addEventListener('click', nextSlide);
        document.getElementById('prev').addEventListener('click', prevSlide);

        // Automatically advance the slider every 3 seconds
        setInterval(nextSlide, 3000);
    </script>
</body>
</html>

<h2>beaches to visit </h2>
<div class="horizontal-container">
    <!-- Container 1 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://wallpapercave.com/wp/wp7009182.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="marine drive .html">marine drive</a></h3>
           
        </div>
    </div>
    <!-- Container 2 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://www.tourmyindia.com/images/alibaug-beach1.jpg');"></div>
        <div class="container-text">
            
            <h3 class="container-heading"><a href="jadadishwar temple.html">alibag-beach</a></h3>
            
        </div>
    </div>
    <!-- Container 3 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://www.urtrips.com/wp-content/uploads/2022/06/versova-beach-mumbai-1.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="versova beach .html">versova beach</a></h3>
            
        </div>
    </div>
</div>

<!-- Second set of containers -->
<div class="horizontal-container second-set">
    <!-- Container 4 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://www.seawatersports.com/img/newimage/places/ganpatipule-beach-in-maharashtra.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="ganpati -pule .html">ganpati pule</a></h3>
            
        </div>
    </div>
    <!-- Container 5 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM5tewD-5_ygMZ37e4xhT1_dbD4Cn_jF1_Eg&usqp=CAU');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="kelshi.html">kelshi beach</a></h3>
           
        </div>
    </div>
    <!-- Container 6 -->
    <div class="container-item">
        <div class="container-image" style="background-image: url('https://1.bp.blogspot.com/-hulS71Cl1PQ/VCr4kh4SRXI/AAAAAAAAXio/heAFd4koZUI/s1600/milky%2Bway%2Badromeda%2Bguhagar%2B2014-4.jpg');"></div>
        <div class="container-text">
            <h3 class="container-heading"><a href="guhagar beach.html">guhagar beach</a></h3>
           
        </div>
    </div>
</div>


<br>
<br>
<br>
<br>

<p1><h2>More Atrractions Near juhu beach </h2></p1>





    <!-- Additional Containers -->
    <div class="additional-container">
        <!-- Additional Container 1 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://live.staticflickr.com/3151/5869780812_51871c708a_b.jpg');"></div>
            <div class="additional-content">
                <h3>Resorts</h3>
                
       
       
                
            </div>
        </div>
        <!-- Additional Container 2 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://www.ahstatic.com/photos/6926_ho_00_p_1024x768.jpg');"></div>
            <div class="additional-content">
                <h3>Hotels</h3>
               
            </div>
        </div>
        <!-- Additional Container 3 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Mumbai_03-2016_114_Airport_international_terminal_interior.jpg/1200px-Mumbai_03-2016_114_Airport_international_terminal_interior.jpg');"></div>
            <div class="additional-content">
                <h3>mumbai Airport</h3>
                
            </div>
        </div>
        <!-- Additional Container 4 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://c8.alamy.com/comp/R1PXBC/signboard-in-chhatrapati-shivaji-maharaj-terminus-csmt-in-mumbai-india-formerly-chhatrapati-shivaji-terminus-the-citys-busiest-railway-station-R1PXBC.jpg');"></div>
            <div class="additional-content">
                <h3>csmt</h3>
               
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