
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
if(isset($_POST['sinhgad'])) {
    // Insert record into database
    $pageName = "Resorts Near Sinhgad";
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
    <title>sinhgad fort resort</title>
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
        <a href="placeshomepage.html">Places</a>
        <a href="features4.html">Features</a>
        <a href="about us.html">About Us</a>
        <a href="travel contact us.html">Contact Us</a>
        <a href="logout.php">
            <img src="https://cdn-icons-png.flaticon.com/128/10313/10313098.png" alt="Logout" width="20" height="20">
             Logout
        </a>
    </div>
    <div class="container2">
        <div class="blur-background"></div>
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0c/8f/fc/d2/wildernest-hilltop-resort.jpg" class="overlay-image">
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0c/8f/fc/d2/wildernest-hilltop-resort.jpg" class="blur-background">
        <div class="text">Top Resorts Near sinhgad</div>
    </div>
    <br>
    <br>
    
    <div class="container-horizontal">
        <div class="container">
            <h2>Holiday Cottage Inn, Sinhagad</h2>
            <img src="https://r1imghtlak.mmtcdn.com/487bbafcc5ae11e6b00c02755708f0b3.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,35&output-format=jpg" alt="Image Alt Text">
             <div class="short-text"><p>
                This lavish property makes for a relaxing stay option with its well-appointed rooms, a stylish restaurant, a verdant garden and a range of upscale amenities.

                Enjoy the property's close proximity to Nilkantheshwar Temple which is 1 km away.
                Refresh yourself with an evening walk in the lush green garden.
                 </p></div>
                 
            
            <div class="full-text"><p>Enjoy the property's close proximity to Nilkantheshwar Temple which is 1 km away.
                Refresh yourself with an evening walk in the lush green garden.
                Tantalise your taste buds with a variety of mouth-watering dishes at the in-house restaurant.
            </p>
            
                <br><br><br><h4>Location:</h4>Sinhagad road, Pune | 560 m from Krushnai Water Park & Resort
               
                <br><br><br><h4>Amenities:</h4>
                
                - Spa
                - Restaurant
                - Indoor Games
                - Bar
                <br><br><br><h4>Distance from sinhgad fort:</h4>560m</p></div>
            <button class="read-more-btn" onclick="toggleText(1)">Read More</button>
        </div>
        
    
        <div class="container">
            <h2>Nature Nest Resort</h2>
            <img src="https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/202111081337564785-074ac9bc36fe11ec8f0a0a58a9feac02.jpg?&output-quality=75&downsize=910:612&output-format=jpg" alt="Image Alt Text">

            
            <p class="short-text">Welcome to NATURE's NEST, a soothing holiday destination by Maiyra Agrofarms. Located close to the Mandwa beach, this Eco-Resort is a beautiful blend of the woodlands and modern-day amenities. Spread across 2.5 acres, the resort houses 10 spacious cottage-style rooms that can accommodate around 50 guests. 
            </p>
            <div class="full-text"> Hygiene and sanitation get utmost priority. You may choose between AC and non-AC rooms. Whatever your choice, the surrounding trees insist on offering plenty of natural cooling to all - with no extra charge.<p>

    <br><br><br><h4>Location:</h4>Gorhe Khurd, Pune | 21.5 km from city centre
    <br><br><br><h4>Amenities:</h4>
    
    - Dry Cleaning Service
    - Power Backup
    - Refrigerator
    - Housekeeping
    <br><br><br><h4>Distance from sinhgad fort:</h4>8.8km</p></div>
            <button class="read-more-btn" onclick="toggleText(2)">Read More</button>
        </div>
    </div>

    <!-- Add a separator or spacing if needed -->

    <div class="container-horizontal">

        <div class="container">
            <h2>SORINA HILLSIDE RESORT</h2>
            <img src="https://r1imghtlak.mmtcdn.com/373ff0cea15711e88a1902b6f4abf134.jpg?&output-quality=75&downsize=910:612&crop=910:612;68,0&output-format=jpg" alt="Image Alt Text">
            <div class="short-text"></p>
                The Sorina Hillside Resort is located in the paradisaical heaven Sinhgad, surrounded by lush green tropical vegetation, behind the backwaters of Khadakwasala dam,in Pune.Thanks to this privileged location & the great variety of services, the resort is an excellent destination for peace & relaxation and an ideal place for getting away from all the daily worries. 
</div>
            <div class="full-text"><p>
                While luxuries of your rooms might make you lazy on your perfect holiday, the perfect location of the resort provides enough temptation for you to step out of your comfort zone.
            </p>

     <br><br><br><h4>Location:</h4>Gorhe Khurd, Pune | 22.8 km from city centre
     <br><br><br><h4>Amenities:</h4>

     
     - Swimming Pool
     - Restaurant
     - Indoor Games
     - Yoga
         <br><br><br><h4>Distance from sinhgad fort:</h4>12.2km</p></div> 
            
            <button class="read-more-btn" onclick="toggleText(3)">Read More</button>
        </div>

            <div class="container">
                <h2>Aquarius Resort</h2>
                <img src="https://r1imghtlak.mmtcdn.com/c29e232ef70a11e5bf23001ec9b85d13.jfif?&output-quality=75&downsize=910:612&output-format=jpg" alt="Image Alt Text">
                <div class="short-text"><p>
                    Unlock a world of luxurious experiences at this incredible property offering well-appointed rooms, a stylish restaurant, a crystal-clear pool and a range of facilities.

Refresh yourself with a few dips in the crystal-clear swimming pool.
Enjoy easy access to I.A.T. Gate Bus Stop which is 1.2 km away from the property.
     </div>
                <div class="full-text"><p>Take a leisurely stroll in the lush green garden and soothe your senses.
                    Binge on a range of lip-smacking delicacies at the in-house restaurant.

                </p><p> Refresh yourself with a few dips in the crystal-clear swimming pool.
                    Enjoy easy access to I.A.T. Gate Bus Stop which is 1.2 km away from the property.
            </p>
         <br><br><br><h4>Location:</h4>Girinagar, Pune | 17.4 km from city centre

         <br><br><br><h4>Amenities:</h4>
         - Swimming Pool
         - Restaurant
         - Indoor Games
         - Kids Play Area
             <br><br><br><h4>Distance from Sinhgad fort:</h4>12.6km</p></div> 
                
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
                <h3 class="container-heading"><a href="sinhgad fort resort.html">Resorts</a></h3>
                
            </div>
        </div>
        <!-- Additional Container 2 -->
        <div class="additional-item">
            <div class="additional-image" style="background-image: url('https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201908261404512531-405b7854563211eabe9d0242ac110003.jpg');"></div>
            <div class="additional-content">
                <h3 class="container-heading"><a href="sinhgad fort hotels.html">Hotels</a></h3>
               
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