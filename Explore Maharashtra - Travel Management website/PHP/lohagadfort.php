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
if(isset($_POST['lohagad'])) {
    // Insert record into database
    $pageName = "lohagad";
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
    <title>Lohagad Fort</title>
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
        <form action="lohagad.php" method="get">
            <select name="lohagad">
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
        
        <img src="https://mhexplorer.in/wp-content/uploads/2021/06/101678848_283687046352882_4816244833673344255_n.jpg" alt="Overlay Image" class="overlay-image">
        <img src="https://mhexplorer.in/wp-content/uploads/2021/06/101678848_283687046352882_4816244833673344255_n.jpg" alt="Overlay Image" class="blur-background">
        <div class="right-container">
            <div class="fort-text">Lohagad Fort</div>
            <div class="location-symbol">&#x1F4CD;</div>
            <div class="location-text">Lohagad, India</div>
            <!-- Add content for the right container here -->
        </div>
    </div>
    <br>
    <br>
    <div class="location-container">
        <h2 class="location-heading"></h2>
        <p class="weather-content">
            <h3>Overview</h3>
            Lohagad is a simple yet a little long trek. We visited in the month of September in the middle of rainy season and it was absolutely breathtaking to watch this fort in such an awesome weather. There are around 500 steps(well as they say) to the top of the hill. The scenes up there are amazing and mild rainfall is just icing on the cake. One can easily spend 2-3 hours trekking and roaming around this huge mountain fort. A must visit if you're in a mood of short trek and sightseeing.
            
        </p>
        <br>
    <p><h4>Location:-Lohagad Trek Rd, Pune, Maharashtra 410406, Khandala, India  </p>
    <br>
    <p><h4>Best Time to Visite:-05:00 am - 10:00 am </h4></p>
    <br>
    <p><h4>Entry Fee:-Rs. 30 for Person</h4></p>
    <br>
    <p><h4>Timing:- 9 AM to 6 PM</h4></p>



    </div>



    <h2>History</h2>
    <p>
        Lonavala is a lovely hill station, home to magnificent towering forts that belonged to some of the most prominent dynasties that ruled parts of our country. One such structure is Lohagad, also known as Iron Fort. Situated at 3,389 ft. above sea level, Lohagad is connected to another fort called Visapur Fort. While most people know this marvellous edifice for its historical importance, it also makes for a great trekking spot, owing to the numerous trails leading up to the Lohagad fort. Information regarding its history can be scarce, but we have compiled important historic events involving this structure in chronological order to understand its historical significance.

As you explore and broaden your knowledge about the terrific history behind the fort, do pamper yourself with a luxurious stay at Rhythm Lonavala.
In 1489 Malik Ahmad Nizam Shah founded the Nizamshahi dynasty and decided to expand his empire. It was during this period that he managed to conquer most forts in Pune, including Lohagad. During the second half of the 16th century, the Nizamshahi dynasty declined and Bijapur Sultanate gained control of Lohagad Fort.

A powerful clan emerged from Bijapur’s declining Adilshahi Sultanate - the Maratha clan. Shivaji Bhonsle I, also known as Chhatrapati Shivaji Maharaj, managed to capture Lohagad in 1648. However, his success was short-lived as the fort was given to the Mughal Empire owing to the Treaty of Purandar.
       
    </p>
    <p>
       
        Previously, Shivaji had attacked Mughal Emperors and managed to plunder Surat. As a result, Aurangazeb sent Jai Singh I, the commander to quash the Adilshahi dynasty. Therefore, Jai Singh I besieged Purandar Fort which forced Shivaji to sign a treaty, relinquishing his ownership of Lohagad. From 1668 to 1670, there was a brief period of peace between Aurangazeb and Shivaji. Conflicts ebbed and Shivaji succeeded in re-capturing Lohagad. He used this magnificent fort to store all the treasures and loot from his conquest in Surat for the second time. 
    </p>
    <p>
        Fast forward to the early 18th century, the East Indian Company was facing immense pressure due to Kanhoji Angre’s efforts. He was the chief of the Maratha Navy and succeeded in capturing numerous English yachts to collect tax. The East India Company granted him ownership of 10 forts and Lohagad was one among them. 7 years later, Lohagad came under Balaji Vishwanath’s control, who was the first Peshwa (appointed Prime Minister) of the Maratha Empire.
        In 1789, Nana Phadnavis, an influential minister from the Maratha Empire ordered the reconstruction of Lohagad. This led to the construction of a step well and numerous water tanks. However, things deteriorated when Baji Rao II ascended the throne. The nobles appointed him as the puppet ruler and their power grew gradually, forcing Baji Rao II to flee from the capital. After suffering from innumerable defeats in battles against the British, Lohagad belonged to Colonel Prother, and the British Empire deserted this fort in 1845.

    </p>
       <br>
       <br>



    <h2>Major Features</h2>
<p>

    One of the many hill forts in the state of Maharashtra is the iron Lohagad fort. It is about 52 kilometers away from the picturesque hill station of Lonavala. The northwest of Pune and a popular tourist destination in Maharashtra. The elevation of Lohagad is 1033 meters above sea level.A minute distance separates the fort from the Visapur fort that is nearby. The Maratha ruled this fort for the longest time, but the Mughal Empire only controlled it for five years. This fort is located southwest of Visapur Fort and is elevated to a height of 1,033 meters above sea level. The Western Ghats include the fort.
</p>
<p>
   
    The Lohagad fort looks out over the Pavana reservoir, which is south of the mountain range and divides the basins of the Indrayani and Pavana rivers. Due to its shape, a buttressed spur is referred to as Vinchukata in the range. Lohagad’s gates are in good condition and functional. It is a popular stop on a tour of Maharashtra.
</p>
<p>
    Lohagad Fort is perched atop a beautiful hill about 50 kilometers from Pune, nestled at a height of 3,400 feet above the ground. This elegant fort, which was built in the 18th century, has a unique combination of old architecture and beautiful scenery. When you get to the fort, you can marvel at the rich history of Chhatrapati Shivaji Maharaj’s time, when he used this structure to protect all of his valuables. The area’s close proximity to Mumbai and Pune, which draws tourists year-round, is another great feature.

The climb to the fort is relatively straightforward and can be complete in a few hours. One of the best hill fortresses in the region, this formidable Maratha structure is connect to Visapur Fort. This site is worth visiting, whether you’re looking for an adventurous getaway or a weekend getaway. This fort has a lot of historical significance, is a beautiful archaeological site, and has been used by different rulers for different things. The fact that the fort was one of many that Chhatrapati Shivaji had to hand over as a result of the Purandar Treaty adds another significance to the previous century. Lohagad, on the other hand, became part of the ruler’s significant accomplishments as he went on a mission to retake the forts.
</p>

<!-- Weather/Climate Container -->
<div class="weather-container">
    <h2 class="weather-heading">Weather/Climate</h2>
    <p class="weather-content">
        Khandala has typical monsoon weather and there are three distinct seasons. With a constant temperature throughout the year, Khandala became a pleasant destination to visit all year around. If you are visiting Khandala for the first time, learn about its seasons first to plan your trip:
    </p>
    
    <h3>Summer</h3>
    <p>
        The average high temperature stays around 33 degree Celsius. Since its cooler than the rest of Maharashtra and is also the peak season, tons of tourists flood to Khandala in summer.
    </p>
    
    <h3>Monsoon</h3>
    <p>
        Heavy rainfall, cold weather, lush green mountains and picturesque waterfalls, make Khandala a beautiful scenery. For Mumbai, Khandala is the nearest weekend destination to enjoy the monsoon. That’s why, monsoon is another peak season for this hill station.
    </p>
   
    <h3>Winter</h3>
    <p>
        The retreating monsoon keeps the climate cold and in the months of December and January, the temperature is around 12 degree Celsius. Though this hill station becomes much colder than other part of Maharashtra, it is also the ideal time to visit Khandala for honeymooners, trekkers and hikers!
    </p>


</div>
<br>
<br>
<br>
<h2>Lohagad Fort Historical Marvels</h2>
<br>
<div class="horizontal-container">
    <!-- Container 1 -->
    <div class="container-item">
        <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Lohagad_wall.jpg/407px-Lohagad_wall.jpg"alt="image"
        class="container-image">
      
        <div class="container-text">
            <h3 class="container-heading"><a href="takmak tok.html">Lohagad fort walls</a></h3>
           
        </div>
    </div>
    <!-- Container 2 -->
    <div class="container-item">
        <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Ganesh_Darwaja.jpg/360px-Ganesh_Darwaja.jpg"alt="image"
        class="container-image">

        <div class="container-text">
            <h3 class="container-heading"><a href="jadadishwar temple.html">Ganesh Darwaja</a></h3>
            
        </div>
    </div>
    <!-- Container 3 -->
    <div class="container-item">
        <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Lohagad-2.JPG/360px-Lohagad-2.JPG"alt="image"
        class="container-image">

        
        <div class="container-text">
            <h3 class="container-heading"><a href="raj bhawan.html">Wall fortification of Lohagad</a></h3>
            
        </div>
    </div>
</div>

<br>
<br>
<br>

<p1><h2>More Atrractions Near Lohagad</h2></p1>





    <!-- Additional Containers -->
    <div class="additional-container">
        <!-- Additional Container 1 -->
        <div class="additional-item">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/2d/25/4b/lonavala-under-the-over.jpg?w=300&h=300&s=1"
         alt="Resorts"
         class="additional-image"
         width="300" 
         height="300" 
    >
            <div class="additional-content">
                <h3 class="container-heading"><a href="resort.html">Resorts</a></h3>
                
            </div>
        </div>
        <!-- Additional Container 2 -->
        <div class="additional-item">
            <img src="https://lh3.googleusercontent.com/p/AF1QipPwUyj6_JZ78SLHrdPtkpFwjmaRF0llgRwaRCdp=w287-h192-n-k-rw-no-v1"
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
        
        <!-- Additional Container 4 -->
        <div class="additional-item" style="width: 300px;">
            <img src="https://im.whatshot.in/img/2020/Aug/lohagad-fort-1521570260-1562915979-1598786690.jpg"
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