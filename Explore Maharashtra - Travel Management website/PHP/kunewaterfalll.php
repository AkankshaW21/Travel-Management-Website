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
if(isset($_POST['kunewaterfall'])) {
    // Insert record into database
    $pageName = "KuneWaterfall";
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
    <title>Kune Waterfall</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
      font-size: 19.4px;
    font-weight: lighter;    }
    
        header {
            background-size: cover;
            height: 400px;
            text-align: center;
            color: rgb(26, 14, 14);
            padding: 20px;
        }


        /* Reset some default styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Style the intro container */
.intro-container {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}

/* Style the background image */
.background-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
   
}

/* Add a semi-transparent overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

/* Style the intro text */
.intro-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
}

h1 {
    font-size: 3rem;
    font-weight: bold;
}

h2 {
    font-size: 1.5rem;
    margin-top: 10px;
}

.arrow {
    width: 30px;
    height: 30px;
    border: 2px solid #fff;
    border-left: none;
    border-bottom: none;
    transform: rotate(45deg);
    margin-top: 10px;
}



        h1 {
            margin-top: 80px;
        }



        /*history section styling*/

        .history-section {
            background-color: #e5ebe5;
            padding: 20px;
           
        }

        /* history Container styles */
        .container {
            margin: 10px;
            padding: 20px;
            color: #090000;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin-left: 25px;
            margin-right: 25px;
        }

        /* Flex container for responsiveness */
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-left: 25px;
            margin-right: 25px;
        }

        /* Header and Location styles */
        .header-container {
            flex-basis: 100%;
            background-color: #c0dad8;
            color: #ada8a8;
            text-align: center;
            padding: 20px;
        }

        /* Main content container styles */
        .main-container {
            flex-basis: calc(50% - 20px);
            background-color: #ccd9d6;
        }

        /* Map container styles */
        /* Map container styles */
.map-container {
    flex-basis: calc(50% - 20px);
    background-color: #222929;
    color: #fff;
    margin: 10px auto; /* Center horizontally by adding 'auto' to left and right margins */
    padding: 20px;
    text-align: center; /* Center the content */
}


        /* Responsive CSS for smaller screens */
        @media (max-width: 768px) {
            .container {
                flex-basis: 80%;
            }
        }


       
    /* Style the flex container to arrange items side by side */
.flex-container {
    display: flex;
}

/* Style for the individual containers */
.best-time-container,
.tips-container {
    flex: 1;
    margin: 10px;
    padding: 20px;
    background-color: #ffffff;
    color: #000000;
    box-sizing: border-box;
}






        /* Nearby Places container styles */
        .nearby-places-container {
            flex-basis: calc(25% - 20px);
            margin: 8px;
            padding: 1px;
            background-color: #d8e4e9;
            color: #151313;
        }

        .nearbyplaces-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        /* Center the Location container */
        .center-location-container {
            display: flex;
            justify-content: center;
        }

        /* Flex container for the last 4 Nearby Places containers */
        .nearby-places {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }




          /* CSS for the gallery container */
            /* CSS for the gallery container */
        .gallery-container {
            max-width: 600px; /* Set a maximum width for the image gallery */
            margin: 0 auto;  /* Add margin to create space between the two containers */
            overflow: hidden;
            white-space: nowrap;
        }
        
        .gallery {
            display: inline-block;
            transition: transform 1s ease-in-out;
        }
        
        .gallery img {
            max-width: 100%;
            height: auto;
            margin-right: 10px;
        }

       


/*hotel design */
        .hotel-container {
            width: 23%; /* Adjust the width as needed */
            margin: 10px;
            padding: 20px;
            border: 1px solid #b1aaaa;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            background-color: #eceaea;
        }

        /* Flex container for arranging containers side by side */
        .hotel-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Wrap to the next row if the screen is too narrow */
        }
        /* Style for hotel images */
        .hotel-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }


          /* Style for the "More Details" button */
          .more-details-button {
            background-color: #565b5b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .more-details-button:hover {
            background-color: #1e7e7b;
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
        p{
            margin-left: 25px;
            margin-right: 25px;
            
        }





    </style>
</head>
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

<div class="intro-container">
    <img src="https://media2.thrillophilia.com/images/photos/000/153/369/original/1570610230_shutterstock_1046691850.jpg?gravity=center&width=1280&height=642&crop=fill&quality=auto&fetch_format=auto&flags=strip_profile&format=jpg&sign_url=true" alt="Website Background Image" class="background-image">
    <div class="overlay"></div>
    <div class="intro-text">
        <h1>Kune Waterfall</h1>
        <h2></h2>
       
    </div>
   
</div>



<main>
    <section class="history-section container">
        <h2>History</h2>
    <p>Kune Waterfalls are located in Pune district, Maharashtra, India. They are one of the most popular waterfalls in the Western Ghats and are a popular tourist destination during the monsoon season (June to September).    </p>   
    <p>According to folklore, the falls are named after Kune Rishi, a sage who lived in the area. It is said that the sage used to meditate in the cave behind the falls.</p>  
    <p>Another legend has it that the falls were created by Lord Shiva himself. It is said that Lord Shiva was once meditating in the Sahyadri Mountains when he was disturbed by the demon Ravana. Lord Shiva became so angry that he opened his third eye and a powerful beam of light shot out, creating the Kune Waterfalls.</p>  
    <p>Kune Waterfalls have been a popular tourist destination for centuries. The falls were mentioned in the writings of several early travelers, including the Portuguese explorer Vasco da Gama. In the 19th century, the British built a road to the falls, making them even more accessible to tourists.</p>  
    <p>In the early 20th century, Kune Waterfalls became a popular spot for filming movies. Several Hindi and Marathi films were shot at the falls, including the classic film "Pakeezah" (1972).</p>  
    <p>Today, Kune Waterfalls are one of the most popular tourist destinations in Maharashtra. The falls are especially popular during the monsoon season when they are in full flow. Visitors can enjoy swimming, bathing, picnicking, and boating in the area.</p>  
   
    </section>
    <br>


    <!-- Main Features container -->
    <div class="main-container container">
        <h2>Main Features</h2>
        <ul>
           <li>The waterfall is located at an altitude of 622 m and cascades down from a height of 200 m into a deep pool at the bottom. </li>
          <li>Kune Waterfalls is the 14th highest waterfall in India.</li>
           <li><strong>Height:</strong> 200 m</li>
            <li><strong>Tiers:</strong> Three </li>
            <li><strong>Surroundings: </strong>  Lush green vegetation</li>
            <li><strong>Views:</strong> Stunning views of the Sahyadri Mountains</li>
            <li><strong>Popular activities:</strong> Swimming, bathing, picnicking, and boating</li>
            <li>The falls are divided into two sections, with the highest drop being 100 meters.</li>
            <li>The falls are also home to a variety of wildlife, including monkeys, snakes, and birds.</li>

             </div>



        
 <div style="display: flex;">
    <div class="gallery-container">
        <div class="gallery">
            
            <img src="https://www.tripplatform.com/blog/wp-content/uploads/2016/10/Kune-Waterfalls-8.jpg" alt="Image 2">
            <img src="https://static.india.com/wp-content/uploads/2022/07/Collage-Maker-23-Jul-2022-12.43-PM.jpg" alt="Image 1">
            <img src="https://wonderfulmumbai.com/wp-content/uploads/2012/07/1-Kune-Waterfall-Lonavala-Khandala-Rain-1.jpg" alt="Image 3">
            
            <img src="https://trahot.com/wp-content/uploads/2020/02/Kune-Waterfalls-Khandala2.jpg" alt="Image 1">
             
            <!-- Add more images here -->
        </div>
    </div>

  
   </div>
   <br>



    <script>
        const gallery = document.querySelector('.gallery');
        let imageIndex = 0;
        const intervalTime = 3000; // Change image every 3 seconds

        function nextImage() {
            imageIndex = (imageIndex + 1) % gallery.children.length;
            updateGallery();
        }

        function updateGallery() {
            const translateX = -imageIndex * 100;
            gallery.style.transition = 'transform 1s ease-in-out';
            gallery.style.transform = `translateX(${translateX}%)`;
        }

        setInterval(nextImage, intervalTime);
    </script>


<div class="flex-container">
       
            <!-- Best Time to Visit container -->
            <div class="best-time-container container">
                <h2>Best Time to Visit</h2>
                <p>Kune waterfall is one of the most popular waterfalls in the Western Ghats and is a popular tourist destination during the monsoon season (June to September).</p>
                <p>The best time to visit Kune Waterfalls is during the <strong>monsoon season (June to September) </strong>when the falls are in full flow.</p>
            
               <P>If you are unable to visit Kune Waterfalls during the monsoon season, you can still visit during the <strong>winter months (October to March)</strong>.</p> 
               
            </div>

            <!-- Tips Before Visiting Waterfall container -->
            <div class="container">
                <h2>Tips Before Visiting Waterfall</h2>
                <ul>
                
               <li>Wear comfortable shoes and clothing as you will have to walk a short distance to reach the falls.</li>
               <li> Be careful while swimming in the pool at the bottom of the falls as the currents can be strong. </li>
               <li> Carry food and water with you as there are limited options available at the falls. </li>
               <li>Dispose of your garbage properly to keep the area clean. </li>
               <li> Be aware of the risk of landslides and flash floods during the monsoon season.</li>    
                </ul>
            </div>
    </div>


        <div class="flex-container">
            <!-- Location container -->
            <div class="map-container center-location-container container">
                <h2>Location</h2>
                <p>Kune Village, Khandala, Lonavala, Kune N.m., Maharashtra</p>

                <!-- Embed the map here -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.770153655912!2d73.37352677519762!3d18.763800982377564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be8012814e0a799%3A0x8d298bee3d26ca7d!2sKune%20Falls!5e0!3m2!1sen!2sin!4v1696512639359!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


<div>


<h2> Nearby places you must visit</h2>

        <div class="nearby-places">
            <!-- Nearby Places containers -->
            <div class="nearby-places-container container">
                <img src="https://imgstaticcontent.lbb.in/lbbnew/wp-content/uploads/2017/08/13173442/12082017_LohagadFort_01.jpg" alt="image"  class="nearbyplaces-image">
                <h2>Lohagad Fort</h2>
                <p>Lohagad Fort is a beautiful and historic fort located near Lonavala in Pune district of Maharashtra, India. It is one of the most popular tourist destinations in the area, offering stunning views of the surrounding hills and valleys.                </p>
                <h3>Points on fort</h3>
    <ul>
        <li>Maha Darwaja</li>
        <li>Vinchi Kata</li>
        <li>Vishnu Mandir</li>
        <li>Talav </li>
        <li>Buruj </li>
    </ul>

    <a href="tamhini_gaht_details.html"><button>Read More</button></a>

  </div>

 <div class="nearby-places-container container"> 
         <img src="https://indiano.travel/wp-content/uploads/2022/09/Beautiful-scenic-view-of-the-hills-in-Lonavala.jpg" alt="Raigad fort"  class="nearbyplaces-image">
         <h2>Lonavala Hillstation</h2>
        <p>Lonavala is a popular hill station located in the Pune district of Maharashtra, India. It is known for its beautiful scenery, pleasant climate, and numerous tourist attractions.</p>
        <h3>Best thing in Lonavala</h3>
        <ul class="highlights">
            <li>Karla and Bhaja Caves</li>
            
            <li> Lohagad Fort</li>
            <li> Bushi Dam</li>
            <li>Shop for chikki </li>

        </ul>

    <a href=".html"><button>Read More</button></a>

            </div>

            <div class="nearby-places-container container">
                <img src="https://www.tourmyindia.com/hill_stations/images/best-time-khandala.jpg" alt="Pali Ganpati"  class="nearbyplaces-image">
                
                <h2>Khandala Hillstation</h2>
                <p>
                    Khandala is a beautiful hill station located in the Western Ghats of Maharashtra, India. It is a popular tourist destination, especially during the monsoon season when the hills and valleys are lush and green.</p>
                <h3>Some best spots</h3>
                <ul>
                    <li> Duke's Nose </li>
                <li>Tiger's Leap </li>
                <li> Rajmachi Point</li>
                <li> Imagicaa theme park</li>
            </ul>
                
     <a href=".html"><button>Read More</button></a>
            </div>


            <div class="nearby-places-container container">
               
                <img src="https://www.thefreebird.net/wp-content/uploads/2022/09/IMG_20220807_142440.jpg"  class="nearbyplaces-image">
                <h2> Rajmachi Fort </h2>
                <p>
                    Rajmachi Fort is a beautiful and historic fort located in the Sahyadri Mountains of Maharashtra, India. It is a popular tourist destination, especially during the monsoon season when the hills and valleys are lush and green.</p>
                   <h3>Best spots</h3>
                <ul>
                <li>Rajmachi Caves </li> 
                <li>Rajmachi Temple </li> 
                <li>Rajmachi Waterfall </li> 

                </ul>
                <a href=".html"><button>Read More</button></a>
            </div>
        </div>

</div>  

<div>
    <h2>Nearby Hotels</h2>
    
    <!-- Flex container for arranging hotels in a row -->
    <div class="hotel-row">
        <!-- Hotel 1 -->
        <div class="hotel-container">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/22396453.jpg?k=80a714d0485ad6aada8acc9be5b13a11224a4a9db90dddc02393ee7b28081977&o=&hp=1" alt="Hotel " class="hotel-image">
            <h2>Della Resorts & Villas</h2>
            <p>Address: Kunegaon, Lonavala 410401 India</p>
            <p>43 Attractions within 10 km   </p>  
            <p>Price: From Rs 10,000</p>

            <a href="https://www.tripadvisor.in/Hotel_Review-g608474-d2262978-Reviews-Della_Adventure_Resorts-Lonavala_Pune_District_Maharashtra.html" class="more-details-button">Click Here for More Details</a>
        </div>

        <!-- Hotel 2 -->
        <div class="hotel-container">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/f2/75/7a/jakson-inns.jpg?w=700&h=-1&s=1" alt="Hotel " class="hotel-image">
            <h2>  Jakson Inns </h2>
            <p>Address: Plot No 399 400 398 6, Phaltan 415523 India</p>
            <p>9 Attractionswithin 10 km   </p>  
            <p>Price: From Rs 5,000</p>
            <a href="https://www.tripadvisor.in/Hotel_Review-g2322263-d6449812-Reviews-Jakson_Inns-Phaltan_Satara_District_Maharashtra.html" class="more-details-button">Click Here for More Details</a>
    
        </div>

        <!-- Hotel 3 -->
        <div class="hotel-container">
            <img src="https://www.nakshatraresort.co.in/images/nakshratra-resort-wai.jpg" alt="Hotel C" class="hotel-image">
            <h2>Nakshatra Resort</h2>
            <p>Address:Sno 111/1. Plot 14 & 21. Dhom Dam Boat Club Road Village - Vyahali, Wai 412803 India</p>
            <p>8 Attractionswithin 10 km   </p> 
            <p>Price: From Rs 10,000</p>

            <a href="https://www.tripadvisor.in/Hotel_Review-g3175986-d23901645-Reviews-Nakshatra_Resort-Wai_Satara_District_Maharashtra.html" class="more-details-button">Click Here for More Details</a>
            
        </div>

    </div>

</div>  
    </main>

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