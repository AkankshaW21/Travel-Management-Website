



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
    $pageName = "Hotel Near Sinhgad";
    $sql = "INSERT INTO hotelinformation (pageName) VALUES ('$pageName')";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>sinhgad fort hotels </title>
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
        <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_600,q_auto,w_600//itemimages/99/51/99513_v3.jpeg" alt="Overlay Image" class="overlay-image">
        <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_600,q_auto,w_600//itemimages/99/51/99513_v3.jpeg" alt="Overlay Image" class="blur-background">

        <div class="text">Top Hotels Near Sinhgad</div>
    </div>
    <br>

    <br>
    <div class="container-horizontal">
        <div class="container">
            <h2>The Hotel Hindusthan International </h2>
            <img src="https://r1imghtlak.mmtcdn.com/261832d0675811e995c80242ac110002.png?&output-quality=75&downsize=910:612&crop=910:612;0,17&output-format=jpg" alt="Image Alt Text">
             <div class="short-text"><p>The in-house spa offers several wellness treatments for the guest to rejuvenate themselves.
                Pune International Airport is just 3km from the property. 
                 </p></div>
                 <br>
                 <br>
            <div class="full-text"><p>Get some retail therapy at Phoenix Marketcity, only 700 m away from the hotel.

            </p><p>Explore European delicacies at the in-house multi-cuisine restaurant.</p>
       
                <br><br><br><h4>Location:</h4>Viman Nagar, Pune | 3.0 km from Pune International Airport
                <br><br><br><h4>Amenities:</h4>
                - Spa
- Restaurant
- Fireplace
- Lounge
                <br><br><br><h4>Distance from Sinhgad fort:</h4>3.0 km</p></div>
            <button class="read-more-btn" onclick="toggleText(1)">Read More</button>
        </div>
               
    
        <div class="container">
            <h2>Four Points By Sheraton Hotel And Serviced Apartments

            </h2>
            <img src="https://r1imghtlak.mmtcdn.com/2f166624f52a11ebb32e0a58a9feac02.jpg?&output-quality=75&downsize=910:612&crop=910:612;131,0&output-format=jpg" alt="Image Alt Text">
            <p class="short-text">The property boasts over 15,000 sq. Ft of indoor & outdoor event venues for hosting meetings, social gatherings, and weddings.
                The property has 217 well-appointed rooms comprising Service Apartments (550-750 sq. ft), Executive Club Rooms and Deluxe Rooms equipped with Four Comfort™ Beds, flat-screen TVs and Complimentary high-speed Wi-Fi.
            </p>
            <div class="full-text"><p>The in-house restaurant Awadh5 is famous for its succulent kebabs, korma, biryani and much more with saffron as the main ingredient.
                The property's state-of-the-art gym, spa, and outdoor swimming pool are great places to unwind after a long day of work or travel.
            </p>
        <br><br><br><h4>Location:</h4>Viman Nagar
    <br><br><br><h4>Amenities:
        - Swimming Pool
        - Spa
        - Restaurant
        - Indoor Games
        
    </h4>
    <br><br><br><h4>Distance from Sinhgad fort:</h4> 7.02 km</p></div>
    <br><br>
    <br>
    <br>
            <button class="read-more-btn" onclick="toggleText(2)">Read More</button>
        </div>
    </div>

    <!-- Add a separator or spacing if needed -->

    <div class="container-horizontal">

        <div class="container">
            <h2>Collection O Hotel Janjir Residency </h2>
            <img src="https://r1imghtlak.mmtcdn.com/5853acaebd0811ebb87a025f77df004f.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,34&output-format=jpg" alt="Image Alt Text">
            <div class="short-text">Traveling anytime soon? Looking for a value for money accommodation? This charming property has everything required to make your stay memorable. It is exclusively designed with travelers requirements in mind. It encloses a comfortably furnished bedroom, with a snuggly bed covered with spotless linen. To make your stay hassle-free, OYO has implemented a complete set of modern day amenities. The living space is furnished with top-notch furniture and enhanced with trendy decor. Not to forget, cleanliness is always right up there on our priority list.

            </p>

</div>
            <div class="full-text"><p>Getting around through public transport is quite convenient. The city has something for every traveler. You just have to go outside and explore! If you are traveler looking for a comfortable stay, this is a great choice to make. 
 </p>
            <p>We, at OYO, look forward to ensuring round the clock assistance to make your experience a delightful one. Come soon!
            </p>

     <br><br><br><h4>Location:</h4>Gorhe Bk., Pune | 20.2 km from city centre
     <br><br><br><h4>Amenities: 
        - Restaurant
- Bathroom
- Laundry Service
- Intercom
    </h4>
         <br><br><br><h4>Distance from Sinhgad fort:</h4>20.2km</p></div> 
            
            <button class="read-more-btn" onclick="toggleText(3)">Read More</button>
        </div>

            <div class="container">
                <h2>SPOT ON Hotel Tushar Lodging</h2>
                <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/476863587.jpg?k=adf2a12ee4ee98954bae9c9382657a23caccf80cdd8513a43459227dba5b596b&o=" alt="Image Alt Text">
                <div class="short-text"><p>Conveniently situated in the Hinjawadi part of Pune, this property puts you close to attractions and interesting dining options.
     </div>
                <div class="full-text"><p>This 3-star property is packed with in-house facilities to improve the quality and joy of your stay.
                </p><p>This 3-star property is packed with in-house facilities to improve the quality and joy of your stay.
                </p>
         <br><br><br><h4>Location:</h4>1/117, Hotel Tushar, Nr Hp Petrol Pump, Donje Phata Chowk, Khadakwasla Sinhgad Road, Pune, Hinjawadi, Pune, India, 411025
        
         <br><br><br><h4>Amenities:
            
- Languages spoken
English

-Dining, drinking, and snacking
Room service
-Access
Front desk [24-hour]
            </h4>
             <br><br><br><h4>Distance from Sinhgad fort:</h4>
             5.4km</p></div> 
                
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