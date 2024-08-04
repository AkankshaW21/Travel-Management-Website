
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
    $pageName = "Resorts Near Lohagad";
    $sql = "INSERT INTO resortinformation (pageName) VALUES ('$pageName')";
    if (mysqli_query($db, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}

// Close database connection
mysqli_close($db);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Lohagad fort resort</title>
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
    
   
.container {
    width: 600px;
    max-width: 100%;
    margin-left: 25px;
    margin-right: 25px;
    /* Add border color here (#007bff is blue, you can change it to your preferred color) */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    background-color: #fff;
    margin-bottom: 20px;
}


        /* Style for the heading */
        .container h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        /* Style for the image */
        .container img {
           height:400px;
           width: 500px;
            border-radius: 10px;
        }

        /* Style for the short text */
        .container .short-text {
            margin: 10px 0;
            font-size: 18px;
            line-height: 1.4;
            font-style:normal;
        }

        /* Style for the full text */
        .container .full-text {
            display: none;
            margin: 10px 0;
            font-size: 18px;
            line-height: 1.4;
        }

        /* Style for the "Read More" / "Read Less" button */
        .read-more-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            outline: none;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        /* Hover effect for the button */
        .read-more-btn:hover {
            background-color: #0056b3;
        }

        /* Container for the boxes in a horizontal line */
        .container-horizontal {
            
            display: flex; /* Make the containers display side by side */
            justify-content: space-between; /* Add space between them */
            flex-wrap: wrap; /* Allow them to wrap to the next line if needed */
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





        .imgslider {
    width: 100%;
    height: 450px;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative; /* Allows positioning of child elements */
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.slider-content {
    position: absolute;
    top: 40%; /* Center the content vertically */
    left: 48%; /* Center the content horizontally */
    transform: translate(-50%, -50%); /* Center the content precisely */
    text-align: center;
    color: #1e1111; /* Text color */
    padding: 20px; /* Add padding for better readability */
}

.slider-content h1 {
    font-size: 50px; /* Adjust heading font size */
    margin-bottom: 10px; /* Space between heading and paragraph */
}

.slider-content p {
    font-size: 21px; /* Adjust paragraph font size */
  
}



.container2 {
            position: relative;
            width: 100%;
            height: 550px; /* Set the desired height for the blurred background */
            overflow: hidden;
        }

        .blur-background {
            background-image: url('https://www.holidify.com/images/cmsuploads/compressed/329154655_20220506113027.jpg');
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
            left: 50%; /* Adjust the left position to your desired spacing */
            transform: translate(-50%, -50%);
            width: 900px; /* Set the desired width for the overlay image */
            height: 510px; /* Set the desired height for the overlay image */
        }

        .text {
            position: absolute;
            top: 40%;
            right: 30%; /* Adjust the right position to your desired spacing */
            transform: translate(0, -50%);
            font-size: 48px; /* Set the desired font size */
            font-weight: bold; /* Make the text bold */
            color: white; /* Set the text color to white */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add a subtle text shadow */
        }

/* Style for individual containers */
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
    <div class="container2">
        <div class="blur-background"></div>
        <img src="https://assets.cntraveller.in/photos/643e71aa780ba83c3d9f8812/16:9/w_1919,h_1079,c_limit/Lead-%20The%20Chavni.jpg" class="overlay-image">
        <img src="https://assets.cntraveller.in/photos/643e71aa780ba83c3d9f8812/16:9/w_1919,h_1079,c_limit/Lead-%20The%20Chavni.jpg" class="blur-background">
        <div class="text">Top Resorts Near Lohagad</div>
    </div>
    <br>
    <br>
    
    <div class="container-horizontal">
        <div class="container">
            <h2>Countryside Resort By Meritas</h2>
            <img src="https://r1imghtlak.mmtcdn.com/3a784dd2bcc411eba19d0242ac110007.jfif?&output-quality=75&downsize=910:612&crop=910:612;0,149&output-format=jpg" alt="Image Alt Text">
             <div class="short-text"><p>
                Experience unparalleled luxury at this award-winning hotel offering well-appointed rooms, an incredible restaurant, an outdoor pool and a host of amenities.

Enjoy a refreshing swim in the outdoor swimming pool.
Enjoy a wide range of indoor and outdoor games.
                 </p></div>
                 
            
            <div class="full-text"><p>Enjoy a refreshing swim in the outdoor swimming pool.
                Enjoy a wide range of indoor and outdoor games.
                Savour the authentic taste of Indian and Oriental dishes at the on-site restaurant.
            </p>
            
                <br><br><br><h4>Location:</h4>
                Nangargaon, Lonavala
               
                <br><br><br><h4>Amenities:</h4>
                - Free Parking
- Indoor Games
- Restaurant
- Swimming Pool
              
              
                <br><br><br><h4>Distance from Lohagad fort:</h4>4 km</p></div>
            <button class="read-more-btn" onclick="toggleText(1)">Read More</button>
        </div>
        
    
        <div class="container">
            <h2>Avion Holiday Resort</h2>
            <img src="https://r1imghtlak.mmtcdn.com/4d6f13946cb911e780080a4cef95d023.jpg?&output-quality=75&downsize=910:612&crop=910:612;4,0&output-format=jpg" alt="Image Alt Text">

            
            <p class="short-text">
                Experience a comfortable stay at this stunning property featuring well-appointed rooms, a multi-cuisine restaurant, a swimming pool and upscale amenities.

Unwind with a refreshing swim in the swimming pool.
Enjoy the property's close proximity to Lonavala Railway Station which is 800 m away.
Allow your little ones to have fun at the specially designed play area for kids. 

            </p>
            <div class="full-text"> <p>
                Unwind with a refreshing swim in the swimming pool.
Enjoy the property's close proximity to Lonavala Railway Station which is 800 m away.
Allow your little ones to have fun at the specially designed play area for kids. 
Satiate your palate with lip-smacking dishes at the in-house multi-cuisine restaurant.
                </p>

    <br><br><br><h4>Location:</h4>Gavliwada, Lonavala | 250 m from Maharashtra State Transport Bus Stand
    <br><br><br><h4>Amenities:</h4>
    - Free Parking
- Indoor Games
- Restaurant
- Swimming Pool
  
    <br><br><br><h4>Distance from Lohagad fort:</h4>4.4</p></div>
            <button class="read-more-btn" onclick="toggleText(2)">Read More</button>
        </div>
    </div>

    <!-- Add a separator or spacing if needed -->

    <div class="container-horizontal">

        <div class="container">
            <h2>Whispering Woods Resort</h2>
            <img src="https://r1imghtlak.mmtcdn.com/08bf0200c91611eb8c2e0242ac110008.jpg?&output-quality=75&downsize=910:612&crop=910:612;89,0&output-format=jpg" alt="Image Alt Text">
            <div class="short-text"></p>
                Nestled amidst the lush green mountains, this lavish property features stylish rooms, a dining venue, a sparkling swimming pool and world-class amenities.

Swim a few laps in the sparkling swimming pool.
Enjoy a wide range of indoor games such as carom and table tennis.
             


</div>
            <div class="full-text"><p>
                Swim a few laps in the sparkling swimming pool.
Enjoy a wide range of indoor games such as carom and table tennis.
Satiate your palate with lip-smacking Indian and international cuisines at the on-site restaurant.
                
            </p>

     <br><br><br><h4>Location:</h4>Varsoli, Lonavala | 850 m from Walwan Dam


     <br><br><br><h4>Amenities:</h4>
     - Free Parking
- Bonfire
- Indoor Games
- Restaurant

     
         <br><br><br><h4>Distance from Lohagad fort:</h4>3.9km</p></div> 
            
            <button class="read-more-btn" onclick="toggleText(3)">Read More</button>
        </div>

            <div class="container">
                <h2>Avion Holiday Resort</h2>
                <img src="https://r1imghtlak.mmtcdn.com/4d6f13946cb911e780080a4cef95d023.jpg?&output-quality=75&downsize=910:612&crop=910:612;4,0&output-format=jpg" alt="Image Alt Text">
                <div class="short-text"><p>
                    Experience a comfortable stay at this stunning property featuring well-appointed rooms, a multi-cuisine restaurant, a swimming pool and upscale amenities.

Unwind with a refreshing swim in the swimming pool.
Enjoy the property's close proximity to Lonavala Railway Station which is 800 m away.
Allow your little ones to have fun at the specially designed play area for kids. 
                   
                    
     </div>
                <div class="full-text"><p>
                    Unwind with a refreshing swim in the swimming pool.
Enjoy the property's close proximity to Lonavala Railway Station which is 800 m away.
Allow your little ones to have fun at the specially designed play area for kids. 
Satiate your palate with lip-smacking dishes at the in-house multi-cuisine restaurant.
                </p>
         <br><br><br><h4>Location:</h4>Gavliwada, Lonavala | 250 m from Maharashtra State Transport Bus Stand
         <br><br><br><h4>Amenities:</h4>
         - Free Parking
- Indoor Games
- Restaurant
- Swimming Pool
         
             <br><br><br><h4>Distance from Lohagad fort:</h4>4.4km</p></div> 
                
                <button class="read-more-btn" onclick="toggleText(4)">Read More</button>
            </div>
    
    </div>

    <script>
        var isFullTextShown1 = false; // Keep track of whether full text is shown initially for the first box
        var isFullTextShown2 = false; // Keep track of whether full text is shown initially for the second box
        var isFullTextShown3 = false; // Keep track of whether full text is shown initially for the third box
        var isFullTextShown4 = false; // Keep track of whether full text is shown initially for the fourth box

        function toggleText(containerIndex) {
            var shortText = document.querySelectorAll('.container .short-text')[containerIndex - 1];
            var fullText = document.querySelectorAll('.container .full-text')[containerIndex - 1];
            var button = document.querySelectorAll('.read-more-btn')[containerIndex - 1];

            if (containerIndex === 1) {
                isFullTextShown1 = !isFullTextShown1; // Toggle the state
                if (isFullTextShown1) {
                    shortText.style.display = 'none';
                    fullText.style.display = 'block';
                    button.textContent = 'Read Less';
                } else {
                    shortText.style.display = 'block';
                    fullText.style.display = 'none';
                    button.textContent = 'Read More';
                }
            } else if (containerIndex === 2) {
                isFullTextShown2 = !isFullTextShown2; // Toggle the state
                if (isFullTextShown2) {
                    shortText.style.display = 'none';
                    fullText.style.display = 'block';
                    button.textContent = 'Read Less';
                } else {
                    shortText.style.display = 'block';
                    fullText.style.display = 'none';
                    button.textContent = 'Read More';
                }
            } else if (containerIndex === 3) {
                isFullTextShown3 = !isFullTextShown3; // Toggle the state
                if (isFullTextShown3) {
                    shortText.style.display = 'none';
                    fullText.style.display = 'block';
                    button.textContent = 'Read Less';
                } else {
                    shortText.style.display = 'block';
                    fullText.style.display = 'none';
                    button.textContent = 'Read More';
                }
            } else if (containerIndex === 4) {
                isFullTextShown4 = !isFullTextShown4; // Toggle the state
                if (isFullTextShown4) {
                    shortText.style.display = 'none';
                    fullText.style.display = 'block';
                    button.textContent = 'Read Less';
                } else {
                    shortText.style.display = 'block';
                    fullText.style.display = 'none';
                    button.textContent = 'Read More';
                }
            }
        }
    </script>
    <p1><h2>More Atrractions Near sinhgad </h2></p1>

    

    <!-- Additional Containers -->
    <div class="additional-container">
        <!-- Additional Container 1 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/333039808.jpg?k=b4552681798a6a941281429837dd3f0df9e6ccea121231e9137a84330bd91cfa&o=&hp=1');"></div>
            <div class="additional-content">
                <h3 class="container-heading"><a href="Lohagad fort resort.html">Resorts</a></h3>
                
            </div>
        </div>
        <!-- Additional Container 2 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201908261404512531-405b7854563211eabe9d0242ac110003.jpg');"></div>
            <div class="additional-content">
                <h3 class="container-heading"><a href="Lohagad fort hotels.html">Hotels</a></h3>
               
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