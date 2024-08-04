

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
    $pageName = "Hotel Near Lohagad";
    $sql = "INSERT INTO hotelinformation (pageName) VALUES ('$pageName')";
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
    <title>Lohagad fort hotels </title>
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
        /* Define styles for the container */
        /* Style for the container */
       /* Style for the container */
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

        .container2 {
            position: relative;
            width: 100%;
            height: 550px; /* Set the desired height for the blurred background */
            overflow: hidden;
        }

        .blur-background {
            background-image: url('https://ik.imagekit.io/5tgxhsqev/backup-bucket/tr:w-1650,h-762,q-80/image/upload/qascsjnfgx0ae7o9fpbp.webp');
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
        <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1200/229029235.jpg?k=97127b3962032a71da17a4c521bca03e17a504290d49c4ab6f0ffa8bdd46dc4a&o=" alt="Overlay Image" class="overlay-image">
        <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1200/229029235.jpg?k=97127b3962032a71da17a4c521bca03e17a504290d49c4ab6f0ffa8bdd46dc4a&o=" alt="Overlay Image" class="blur-background">

        <div class="text">Top Hotels Near Lohagad</div>
    </div>
    <br>

    <br>
    <div class="container-horizontal">
        <div class="container">
            <h2>Lohono Stays | Villa Alborz </h2>
            <img src="https://r1imghtlak.mmtcdn.com/8b5ae27eb65b11eb95980242ac11000a.jpg?&output-quality=75&downsize=910:612&crop=910:612;4,0&output-format=jpg" alt="Image Alt Text">
             <div class="short-text"><p>
                Close to Lohgad Fort, this property features a dining area, a kitchenette, a caretaker and a verdant lawn.

Offers stunning views of the lush green valley.
Provides a well-stocked kitchenette where you can cook meals of your own choice.
Provides a verdant lawn where you can take a refreshing walk.
                 </p></div>
                 <br>
                 <br>
            <div class="full-text"><p>Offers stunning views of the lush green valley.
                Provides a well-stocked kitchenette where you can cook meals of your own choice.
                Provides a verdant lawn where you can take a refreshing walk.
                Features a spacious dining area where you can savour delicious meals.
                </p>
       
                <br><br><br><h4>Location:</h4>Lohagad Trek Road, Lonavala | 14.4 km from city centre

                <br><br><br><h4>Amenities:</h4>
                - Private Swimming Pool
- Private Kitchen
- Living Room
- Pool/ Beach towels
                <br><br><br><h4>Distance from Lohagad fort:</h4>14.4 km</p></div>
            <button class="read-more-btn" onclick="toggleText(1)">Read More</button>
        </div>
               
    
        <div class="container">
            <h2>Misty Homestay</h2>
            <img src="https://r1imghtlak.mmtcdn.com/fe77dea2574f11ec8d190a58a9feac02.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,35&output-format=jpg" alt="Image Alt Text">
            <p class="short-text">The bungalow in Lonvala overlooking the mountains is close to Pawna Lake and Lohgad fort ....Paradise for Nature Lovers ,Surrounded by bio diversity and various species of Birds …. The space The house has two bedrooms, one living room , fully equipped kitchen with refrigerator and a bathroom ...... In the front lawn and at the rear of the house there is cozy seating in the property. There is a machan overlooking the mountain where you can enjoy the sunset views .
            </p>
            <div class="full-text"><p>There is a plot down which is a part of our property with seating arrangement and facilities like bonfire and barbeque (not accessible during rains ). From the lower level of this plot you can access the back waters of pawna lake too. You can set up your tent in this area during winters as well ....

            </p>
        <br><br><br><h4>Location:</h4> Lonavala, Lonavala | 9.9 km from city centre
    <br><br><br><h4>Amenities:
        - Kitchenette
- Living Room
- Caretaker
- Lawn
        
    </h4>
    <br><br><br><h4>Distance from Lohagad fort:</h4> 9.9 km</p></div>
    <br><br>
    <br>
    <br>
            <button class="read-more-btn" onclick="toggleText(2)">Read More</button>
        </div>
    </div>

    <!-- Add a separator or spacing if needed -->

    <div class="container-horizontal">

        <div class="container">
            <h2>Dream Villas Lonavala| Krishna 4 BHK Pool Villa </h2>
            <img src="https://r1imghtlak.mmtcdn.com/03c8bb56616f11eb8e8a0242ac110002.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,126&output-format=jpg" alt="Image Alt Text">
            <div class="short-text"><p>Krishna Villa is a great choice of accommodation for all those in search of lavish and comfortable villas that are conveniently located.

                The presence of a caretaker results in an utmost convenience for guests at all times.
                Guests can relax and calm their nerves away from the city in the spacious swimming pool offered.
            </p>

</div>
            <div class="full-text"><p>The presence of a caretaker results in an utmost convenience for guests at all times.
                Guests can relax and calm their nerves away from the city in the spacious swimming pool offered.
                The wide variety of restaurants nearby along with the presence of a personal kitchen provides flexibility in dining options.
 </p>

     <br><br><br><h4>Location:</h4>Pawna Lake, Lonavala | 10.6 km from city centre
     <br><br><br><h4>Amenities: 
        - Shared Swimming Pool
        - Lounge
        - Caretaker
        - Lawn
    </h4>
         <br><br><br><h4>Distance from Lohagad fort:</h4>10.6km</p></div> 
            
            <button class="read-more-btn" onclick="toggleText(3)">Read More</button>
        </div>

            <div class="container">
                <h2>Leisurely Stays Jazz by the Lake 2BHK Pawna Lake</h2>
                <img src="https://r1imghtlak.mmtcdn.com/0f582fa8157611ed838a0a58a9feac02.png?&output-quality=75&downsize=910:612&crop=910:612;4,0&output-format=jpg" alt="Image Alt Text">
                <div class="short-text"><p>ucked in the midst of a gorgeous location, crafted with modern dcor and family- friendly living spaces, Jazz by the lake is a Private Villa to Relax and Rendezvous with Lush Green Surroundings at Pawna Lake. Not to mention, 15 min drive from expressway, private open sky Jacuzzi, lawn area, and cozy rooms are perfect for a quick getaway! Relax with the whole family at this peaceful place to stay. The space The house has 2 Bedrooms, Living area, open sky Jacuzzi, kitchen and lawn space. The Living room comes with a 4 seater sofa, Led TV, attached washroom, extra mattresses as day bed to lounge around. Outdoor dining space comes with 6 seater dining table connecting living area and garden-lawn area. 
     </div>
                <div class="full-text"><p>
                    Both Air conditioned (AC) bedrooms are located on the first floor and come with a wardrobe and en-suite washroom. First bedroom comes with a double size bed, bathtub and an open sky jacuzzi in the balcony. Second bedroom comes with a queen size bed, wardrobe and attached bathroom. Kitchen comes with a refrigerator, microwave, and gas stove. We have basic utensils for Tea-coffee-Maggie. For food, Multiple restaurants deliver at this location.
                </p>
         <br><br><br><h4>Location:</h4>Pawna Lake, Lonavala | 11.5 km from city centre
        
         <br><br><br><h4>Amenities:
            - Private Swimming Pool
- Private Kitchen
- Living Room
- Barbeque
            
           
            </h4>
             <br><br><br><h4>Distance from Lohagad fort:</h4>11.5km</p></div> 
                
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
    <p1><h2>More Atrractions Near Raigad</h2></p1>


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