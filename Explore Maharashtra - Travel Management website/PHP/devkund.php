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
if(isset($_POST['devkund'])) {
    // Insert record into database
    $pageName = "DevkundWaterfall";
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
    <title>Devkund Waterfall</title>

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

/* Style the CTA button */
.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff6600;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    margin-top: 20px;
}

/* Style the scroll indicator */
.scroll-indicator {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: #fff;
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

        .history-section {
            background-color: #e5ebe5;
            padding: 20px;
           
        }

        /* Container styles */
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

        .best-time-container,
        .tips-container {
            flex-basis: calc(50% - 20px);
            margin: 10px;
            padding: 20px;
            background-color: #ffffff;
            color: #000000;
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
        <a href="about us.html">About Us</a>
        <a href="cities.html">Cities</a>
        <a href="reviews/index.php">Reviews</a>
        <a href="features4.html">Features</a>
        <a href="travel contact us.html">Contact Us</a>
    </div>


<div class="intro-container">
    <img src="https://www.tripadvisortour.com/wp-content/uploads/2022/05/1606999471315-DevkundWaterfallTrek.jpg" alt="Website Background Image" class="background-image">
    <div class="overlay"></div>
    <div class="intro-text">
        <h1>Devkund Waterfall</h1>
        <h2></h2>
       
    </div>
   
</div>



<main>
    <section class="history-section container">
        <h2>History</h2>
        <p>Devkund Waterfall is a waterfall located near Bhira, in Raigad district, Maharashtra, India. It is a plunge waterfall pouring massive amounts of water on the rocky surface underneath. It is a popular spot for one day picnics.</p>
        <p>The name "Devkund" means "the bathing pond of gods" in Marathi. The waterfall is believed to be sacred by the locals and is said to be the origin of the Kundalika River.</p>
        <p>The history of Devkund Waterfall is not well-documented. However, it is believed to have been a popular pilgrimage site for centuries. The waterfall is mentioned in the Puranas, a collection of ancient Hindu texts.</p>
        <p>In the 19th century, Devkund Waterfall became a popular tourist destination. The British Raj built a road to the waterfall, making it more accessible to visitors.</p>
        <p>In the 20th century, the waterfall became even more popular. The construction of the Bhira Dam in the 1960s increased the water flow to the waterfall, making it even more spectacular.</p>
    </section>
    <br>


    <!-- Main Features container -->
    <div class="main-container container">
        <h2>Main Features</h2>
        <ul>
            <li><strong>Height:</strong> The waterfall is about 80 feet tall.</li>
            <li><strong>Water source:</strong> The waterfall is formed by the confluence of three streams, namely the Kundalika River, the Bhira River, and the Tamhini River.</li>
            <li><strong>Pool:</strong> The waterfall cascades into a clear pool below. The pool is about 30 feet deep and is a popular spot for swimming and picnicking.</li>
            <li><strong>Location:</strong> The waterfall is located in the Raigad district of Maharashtra, India. It is about 170 kilometers from Mumbai.</li>
            <li><strong>Trek:</strong> The waterfall is accessible via an 8-kilometer trek from the village of Bhira. The trek is moderate and takes about 3-4 hours.</li>
            <li><strong>Timings:</strong> The waterfall is open to the public from 6am to 6pm.</li>
        </div>



        
 <div style="display: flex;">
    <div class="gallery-container">
        <div class="gallery">
            
            <img src="https://www.onacheaptrip.com/wp-content/uploads/Devkund-waterfall-in-october.jpg" alt="Image 2">
            <img src="https://c.ndtvimg.com/2022-08/955m3m4k_devkund_640x480_31_August_22.jpg" alt="Image 1">
            <img src="https://static2.tripoto.com/media/filter/tst/img/17813/TripDocument/1480519393_15000667_1157118914337064_7757364316093627614_o.jpg" alt="Image 3">
            
            <img src="https://www.tripadvisortour.com/wp-content/uploads/2022/05/1606999471315-DevkundWaterfallTrek.jpg" alt="Image 1">
             
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
                <p>The best time to visit Devkund Waterfall is from <strong>late September to April</strong>.</p>
                <p>These months are right after the monsoon season and are pleasant in all aspects. The weather is cool and dry, and the waterfall is not as crowded as it is during the monsoon season.</p>
            </div>

            <!-- Tips Before Visiting Waterfall container -->
            <div class="container">
                <h2>Tips Before Visiting Waterfall</h2>
                <ul>
                    <li>Hire a local guide to avoid getting lost in the forest.</li>
                    <li>Be respectful of the environment and do not litter.</li>
                    <li>Avoid swimming in the waterfall pool, as the water is very cold.</li>
                    <li>Be aware of the slippery rocks around the waterfall.</li>
                </ul>
            </div>
        </div>

        <div class="flex-container">
            <!-- Location container -->
            <div class="map-container center-location-container container">
                <h2>Location</h2>
                <p>Bhira, Raigad district, Maharashtra, India</p>

                <!-- Embed the map here -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30276.19130088804!2d73.36888266853553!3d18.459913137777455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be81f415927068f%3A0x5f207a3e8e1790b6!2sDevkund%20Waterfall!5e0!3m2!1sen!2sin!4v1694514215949!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


<div>


<h2> Nearby places you must visit</h2>

        <div class="nearby-places">
            <!-- Nearby Places containers -->
            <div class="nearby-places-container container">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/a2/20/65/tamhini-ghat.jpg?w=1200&h=-1&s=1" alt="Tamhini Ghat"  class="nearbyplaces-image">
                <h2>Tamhini Ghat</h2>
                <p>Tamhini Ghat is a mountain pass located between Mulshi and Tamhini on the crest of the Western Ghat mountain range in Maharashtra, India. </p>
                <h3>Popular Attractions</h3>
    <ul>
        <li>Mulshi Dam</li>
        <li>Tamhini Ghat Waterfalls</li>
        <li>Lavasa</li>
        <li>Tamhini Hills</li>
    </ul>

    <a href="tamhini_gaht_details.html"><button>Read More</button></a>

  </div>

 <div class="nearby-places-container container"> 
         <img src="https://vajiram-prod.s3.ap-south-1.amazonaws.com/Rajgad_Fort_2eaa0ca9a4.jpg" alt="Raigad fort"  class="nearbyplaces-image">
         <h2>Raigad Fort</h2>
        <p>Raigad Fort is a popular tourist destination, and it is known for its historical significance, architectural beauty, and scenic location. </p>

        <h3>Popular Attractions</h3>
        <ul class="highlights">
            <li class="highlight-item">Raj Bhavan</li>
            <li class="highlight-item">Jagdishwar Temple</li>
            <li class="highlight-item">Samadhi of Shivaji Maharaj</li>
        </ul>

    <a href="Raigad.html"><button>Read More</button></a>

            </div>

            <div class="nearby-places-container container">
                <img src="https://youtellme.ai/wp-content/uploads/2021/11/DSC1506_Pali-Ballaleshwar.jpg" alt="Pali Ganpati"  class="nearbyplaces-image">
                
                <h2>Pali Temple</h2>
                <p>The Pali Ganpati Temple, also known as the Ballaleshwar Temple, is one of the eight Ashtavinayak temples of Lord Ganesha in the Indian state of Maharashtra. </p>
                
                <h3>A Short Overview</h3>
                <ul>
                  <li>Architectural style: Dravidian</li>
                  <li>Dedicated to: Lord Ganesha</li>
                  <li>One of the eight Ashtavinayak temples</li>
                </ul>
                
     <a href=".html"><button>Read More</button></a>
            </div>

            <div class="nearby-places-container container">
               
                <img src="https://travelothon.com/wp-content/uploads/2023/03/zenith-waterfall-khopoli-photo.jpg" alt="Zenith falls"  class="nearbyplaces-image">
                <h2>Zenith Waterfall </h2>
                <p>Zenith Waterfall is a seasonal waterfall located near the town of Khopoli in the Raigad district of Maharashtra, India. It is situated in the Western Ghats mountain range and is a popular tourist destination.</p>

                   <h3>A Short Overview</h3>
                <ul>
                    <li><strong>Location:</strong> Near Khopoli, Raigad district, Maharashtra, India</li>
                    <li><strong>Type:</strong> Seasonal waterfall</li>
                    <li><strong>Height:</strong> 25 feet</li>
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
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/286615894.jpg?k=f5762c5397a6cf840c4d7d6861aa205bf21e38e8aa7d7388706c643d39b43aa3&o=&hp=1" alt="Hotel " class="hotel-image">
            <h2>Encore A Boutique Resort</h2>
            <p>Address: Tamhini Ghat Road, Varak 412108 India</p>
            <p>7 Attractionswithin 10 km   </p>  
            <p>Price: From Rs 5,823</p>

            <a href="https://www.tripadvisor.in/Hotel_Review-g21416917-d21338520-Reviews-Encore_A_Boutique_Resort-Varak_Pune_District_Maharashtra.html" class="more-details-button">Click Here for More Details</a>
        </div>

        <!-- Hotel 2 -->
        <div class="hotel-container">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/379153064.jpg?k=c9f6bd5ba0791b4b8d544eb2be57e91d89adfa1bec5e9069999eb8b72b7c4a79&o=&hp=1" alt="Hotel " class="hotel-image">
            <h2>   The Green Gate Resorts</h2>
            <p>Address: Survey No 96 Dhokalwadi Mulshi, Pune 412108 India</p>
            <p>7 Attractionswithin 10 km   </p>  
            <p>Price: From Rs 4,586</p>
            <a href="https://www.tripadvisor.in/Hotel_Review-g297654-d1205399-Reviews-Green_Gate_Resort-Pune_Pune_District_Maharashtra.html" class="more-details-button">Click Here for More Details</a>
    
        </div>

        <!-- Hotel 3 -->
        <div class="hotel-container">
            <img src="https://imgcld.yatra.com/ytimages/image/upload/t_seo_Hotel_w_930_h_550_c_fill_g_auto_q_40_f_jpg/v1498631041/Hotel/Pune/00088362/Overview_xs6IHH.jpg" alt="Hotel C" class="hotel-image">
            <h2>Residency Lake Resort</h2>
            <p>Address: S.NO. 186/3 Gonwadi Village Pune, Mulshi 411004 India</p>
            <p>6 Attractionswithin 10 km   </p> 
            <p>Price: From Rs 5,521</p>

            <a href="https://www.tripadvisor.in/Hotel_Review-g6210968-d12458662-Reviews-Residency_Lake_Resort-Mulshi_Pune_District_Maharashtra.html" class="more-details-button">Click Here for More Details</a>
            
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