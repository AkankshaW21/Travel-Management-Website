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
if(isset($_POST['temple'])) {
    // Insert record into database
    $pageName = "MahalaxiTemple";
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
    /* Reset default margin and padding */
        * {
            margin: 0px;
            padding: 0px;
        }
        a{
            text-decoration: none;
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
            filter: blur(15px); /* Adjust the blur intensity as needed */
            position: absolute;
            z-index: -1;
        }

        /* Style the overlay image */
        .overlay-image {
            position: absolute;
            top: 50%;
            left: 50%; /* Adjust the left position to your desired spacing */
            transform: translate(-50%, -50%);
            width: 1000px; /* Set the desired width for the overlay image */
            height: 500px; /* Set the desired height for the overlay image */
           
        }
        .overlay-text {
            position: absolute;
            top: 20%;
            left: 40%;
            transform: translate(-50%, -50%);
            color: black; /* Set the text color */
            font-size: 50px; /* Set the font size */
            font-weight: bold; /* Set the font weight */
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
             margin-right: 100px;
             border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
             margin-top: 16px;
             text-align: center;
        }

        .fort-text {
            font-size: 36px;
            font-weight: bold;
           margin-top: 170px;
           text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Style for the location symbol */
        .location-symbol {
            font-size: 50px;
            color: white;
            margin-bottom: 8px;
            margin-top: 10px;
            margin-right: 130px;
            margin-left: 130px;
            

        }

        /* Style for the location text */
        .location-text {
            font-size: 18px;
            font-weight: bold;
            color: white;
            margin-top: 10px;
            text-align: center;
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
    background-image: url('https://www.inditales.com/wp-content/uploads/2019/06/mahalakshmi-temple-kolhapur.jpg');
    height: 1200px;
    width: 1500px;
    filter: blur(15px); /* Adjust the blur intensity as needed */
    position: absolute;
    z-index: -1;
}

/* Style for the weather/climate container */
.table-container {
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
.table-heading {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 16px;
    color: #090707; /* Change text color to your preference */
     /* Convert text to uppercase */
}

/* Style for the weather/climate content */
.table-content {
    font-size: 16px;
    line-height: 1.5;
    color: #000000; /* Change text color to your preference */
}

/* Style for h3 headings within the weather content */
.table-container h3 {
    font-size: 20px;
    font-weight: bold;
    color: #0c0101; /* Change text color to your preference */
}

/* Style for paragraph text within the weather content */
.table-container p {
    margin-bottom: 10px;
}

/* Style for the overall page background (optional) */
body {
    background-color: #f0f0f0; /* Change background color to your preference */
    font-family: Arial, sans-serif; /* Specify font family */
}





.location-container {
    background-color: rgb(205, 200, 200);
    background-position: center;
    padding: 20px;
    height: 700px;
    width: 800px;
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
            margin-bottom: 40px;
            margin-left: 100px;
            margin-right: 100px;
           
        }

        .container-item {
            width: 300px;
            height: 600px;
           
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .container-image {
            height: 50%;
            background-size: cover;
            background-position: center;
            border-radius: 10px 10px 0 0;
        }

        .container-text {
            padding: 10px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
          /*  justify-content: space-between;*/
        }
        .container-heading a {
            text-decoration: none; /* Remove the default underline */
            color: #333; /* Set the text color to your preference */
            cursor: pointer; /* Add a pointer cursor to indicate it's clickable */
            
        }

        h3 {
            margin: 0;
        }

        p {
            margin: 0;
        }
        .read-more-button {
            background-color: rgb(230, 42, 42);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: auto;
        }

        .read-more-button:hover {
            background-color: rgb(230, 42, 42);
        }
        .review-box {
    background-color: green;
    color: #fff;
    padding: 0;
    text-align: center;
    width: 60px; /* Adjust the width as needed */
    height: 20px;
    margin-left: 180px; /* Center the box horizontally */
    border-radius: 10px;
}

.rating {
    font-size: 15px;
    font-weight: bold;
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
            /*height: 330px;
            width: 1300px;*/
            margin-left: 70px;
            margin-bottom: 20px; /* Add margin to create space between this container and other content */
        }

        /* Style for individual additional containers */
        .additional-item {
            height: 300px;
            width: 300px;
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
            height: 250px; /* 75% of the container's height for the image */
            width:266px;
            background-size: cover;
            background-position: center;
            border-radius:  0 0; /* Rounded corners only at the top */
        }

        /* Style for the content within the additional container */
        .additional-content {
            margin-top: 5px; /* Add space between the image and content */
            padding: 10px;
        }


.h3 {
    margin-top: 5px;
}
p{
    margin-left: 25px;
    margin-right: 25px;
   
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
        .table-container {
            background-color:rgb(159, 157, 157);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin: 20px auto;
            width: 80%;
        }

        /* Style for the table heading */
        .table-heading {
            color: #333;
        }

        /* Style for the table */
        table.center {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        /* Style for table headers */
        table.center th {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        /* Style for table cells */
        table.center td {
            padding: 8px;
        }

        /* Style for odd rows */
        table.center tr:nth-child(odd) {
            background-color:rgb(228, 184, 71);
        }

        /* Style for even rows */
        table.center tr:nth-child(even) {
            background-color: lightyellow;
        }
        /*read more */
        #moreInfo {
            display: none;
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
        <form action="mahalaxmi.php" method="get">
            <select name="mahalaxmi">
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
        <img class="overlay-image" src="https://www.inditales.com/wp-content/uploads/2019/06/mahalakshmi-temple-kolhapur.jpg" alt="Overlay Image" >
        <div class="overlay-text">Shri Mahalaxmi - Ambabai Temple</div>
        
       <!-- <div class="right-container">
            <div class="fort-text">Bhimashankar Temple</div>
            <div class="location-symbol">&#128725;
            </div>
            <div class="location-text">Pune,MaharashtraIndia</div>
             Add content for the right container here 
        </div>-->
    </div>
    <br>
    <br>
    <div class="location-container">
        <h2 class="location-heading"></h2>
        <p class="table-content">
            
            <h3>Overview</h3>Ambabai Temple is an important Hindu temple dedicated to Goddess Lakshmi, who resides here as Supreme Mother Mahalakshmi and is worshipped by locals as Ambabai. 
        </p>
     <br>   
    <p><h4>Location:Kalamba,Kolhapur, Maharashtra 416012</p>
    
    <p><h4>Timings: 4:00 AM - 10:30 PM</h4></p>
    
    <p><h4>Architecture: Hemadpanti architecture</h4></p>
    
    <p><h4>Weather: 18 - 19°C</h4></p>
    <p><h4>Map</h4></p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.6385669400715!2d74.22032027514945!3d16.694960434078844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0555a31825e95%3A0x48d3dac4a165bedf!2sShri%20Mahalaxmi%20-%20Ambabai%20Temple%2C%20Kolhapur!5e0!3m2!1sen!2sin!4v1695357386112!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

 <br><br>

    <h2>History</h2>
    <p>
        In 109 CE, Karnadeo cut off the jungle and brought the temple to light. The existence goes back to the 8th century, according to Bhandarkar and Khare.[who?] Itihāsa Chakra indicates that the temple dates back to Mahājanapadā times. In the 8th century, the temple sank down due to an earthquake. In the 9th century, Gandavadix (King) extended the temple by building Mahakali Mandir. During 1178–1209, in the reign of Raja Jaysing and Sindhava, South gate and Atibaleshwar Temple were built. In 1218, Yadav king Tolum built Mahadwar and offered jewels to Devi. Further, Shilaharas built Maha Sarasvati Mandir. He being a Jain, got 64 idols carved. It is possible that a new idol called Padmavati was installed at that time.Historian Paul Dundas in his book The Jains[6] mentions that Mahalaxmi temple Kolhapur was a Jain temple.[7][8] Sheshashayee Vishnu which is an octagonal structure closer to the eastern gate has a panel of 60 Jain Tirthankaras carvings.[9][10] Jains worshipped the idol in the temple as Padmalaya or the abode of Padma or Padmavati, an epithet of Goddess Lakshmi.[11] Further, in Chalukya times, Ganapati before the temple was installed. In the 13th century, Shankaracharya built Nagar Khana and Office, Deepmalas.

Later during the time of Maratha Empire, the temple was repaired. Though many invasions over this part of India have caused some damages of the beautiful idols which are all around the temple.
    </p>
    <br>
        <h2> What is the story behind Mahalaxmi Temple?</h2>
       <p>Once one of the Sapt Rishi (seven great sages) sage Bhrigu went to Vaikuntha (celestial abode of Vishnu) to meet him, but as Vishnu was resting and he failed to greet Bhrigu. Angered, he attacked Vishnu, but he, in return, welcomed Bhrigu without any anger and realised his fault.
        But seeing this behaviour of Vishnu, goddess Lakshmi got angry and decided to leave Vaikuntha. Leaving Vaikuntha, she came to reside on earth and the place she chose was Kolhapur, the place where her temple is situated.</p>
        <p>After this incident, Vishnu tried his best to convince Lakshmi to return back to the abode, but she refused to listen to his reasons. Vishnu too stayed back in Tirumala waiting for Lakshmi. It is believed that without the blessing of Lakshmi or Ambabai, the blessings of Lord Tirupati are not considered complete.</p>
        <p>According to ancient practices, every year on the occasion of Dussehra, a silk saree is sent from Tirupati for Ambabai and the goddess’s idol is draped with it.
            Kolhapur is a city in Maharashtra and the mystery behind its name is also associated with the above legend. 
            It is believed that a demon named Kolhasur created a ruckus, and the goddess came here on the Earth, to protect people from the demon. The goddess fought with the Demon and brought him to his knees. His dying wish was that this city should be named after him and for this reason, thus the city is named Kolhapur.</p>
       <br>
       <br>



    <h2>Special features of Mahalaxmi Temple</h2>
<p>The temple of the goddess Mahalakshmi was built by Karnadeva in 634 CE Chalukya reign.[2] Mounted on a stone platform, the murti of the crowned goddess is made of gemstone and weighs about 40 kilograms. The image of Mahalakshmi carved in black stone is 3 feet in height. The Shri Yantra is carved on one of the walls in the temple. A stone lion (the vahana of the goddess), stands behind the statue. The crown contains a five headed snake. 
    Further, she holds a Matulinga fruit, mace, shield and a pānapātra (drinking bowl). In Lakshmi Sahasranama of Skanda Purana, Goddess Lakshmi is praised as "Om Karaveera Nivasiniye Namaha" means "Glory to the Goddess who lives in Karaveera" and as "Om Sesha Vasuki Samsevyaa Namaha" means "Glory to Goddess who is served by Adi Sesha and Vasuki". They are the 119th and 698th names of Lakshmi in Lakshmi Sahasranama.
</p>
<br>

<!-- Weather/Climate Container -->
<div class="table-container">
    <h2 class="table-heading"> Mahalaxmi Temple Aarti Timings</h2>
    <p class="table-content">
     <table class="center" border="1px" >
        <tr>
            <th>Arti’s</th>
            <th>Time</th>
            </tr>
        <tr>
            <td>Mandir Opening Time</td>
            <td>4:00 AM</td>
        </tr>
        <tr>
            <td>Padyapuja & Mukhmarjan</td>
            <td>5:00 AM</td>
        </tr>
        <tr>
            <td>KAKAD ARTI</td>
            <td>5:30 AM - 6:00 AM</td>
        </tr>
        <tr>
            <td>MORNING MAHAPUJA</td>
            <td>8:00 AM</td>
        </tr>
        <tr>
            <td>HOLY FOOD (NAIVEDYA)</td>
            <td>9:30 AM</td>
        </tr>
        <tr>
            <td>AFTERNOON MAHAPUJA</td>
            <td>11:30 AM</td>
        </tr>
        <tr>
            <td>ALANKAR POOJA</td>
            <td>01:30 PM</td>
        </tr>
        <tr>
            <td>DHUPARTI</td>
            <td>08:00 PM</td>
        </tr>
        <tr>
            <td>SHEJARTI</td>
            <td>10:00 PM</td>
        </tr>
        <tr>
            <td>Mandir Closed</td>
            <td>10:30 PM</td>
        </tr>
     </table>
        
    </p>
    
    
</div>
<br>
<br>
<br>
<h2>Near By Places To Visit</h2><br>
<div class="horizontal-container">
    <div class="container-item">
        <!--<div class="container-image" style="background-image: url('your-image-url-1.jpg');"></div>-->
        <img class="container-image" src="https://www.kolhapurtravels.com/images/kolhapur-images/rankala/rankala-lake-01.jpg" >
        <div class="container-text">
            <h3 class="container-heading"><a href="takmak tok.html">Rankala Lake</a></h3>
           <br>
            <p>The Rankala Lake is a very famous tourist attraction for people from all over the world. Marked by the natural beauty and peaceful environment it provides, it sure does become one of the must-visits on everyone's list. </p>
            
           
            <button class="read-more-button">Read More</button>
        </div>
    </div>
    <div class="container-item">
        <img class="container-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQDDRVjzTkTbDkoDOUM9Rqgv1eRL3Pm8FUyA&usqp=CAU

        ">
        <div class="container-text">
            <h3 class="container-heading"><a href="jadadishwar temple.html">Teen Darwaza</a></h3>
            <br>
            <p>Teen Darwaza is the main entrance gate of the Panhala Fort in Kolhapur. It is a double gateway with an arched courtyard in between the two gates. The outer gate has protruding ceiling and an elaborate chamber on top. The inner gate has ornate carvings including that of Lord Ganesh.
            </p>
            <button class="read-more-button">Read More</button>
           
           
            </div>
    </div>
    <div class="container-item">
        <img class="container-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6xl_JvLjjBHBKOqNkBJ8pTu6WKjP6KZNXog&usqp=CAU">
        <div class="container-text">
            <h3 class="container-heading"><a href="raj bhawan.html">Shri Chatrapati Shahu Museum</a></h3>
            <p>The New Palace located on the Bahvani Mandap-Kasaba Bavda Road was constructed in 1877-84 and has been the residence of Chatrapati Shahu Maharaj. The ground floor of the palace is converted into a museum that houses artifacts belonging to those times when the king ruled and his own possessions.</p>
            <button class="read-more-button">Read More</button>
        </div>
    </div>
</div>


<!-- Second set of containers -->
<div class="horizontal-container second-set">
    <!-- Container 4 -->
    <div class="container-item">
        <img class="container-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuqmZAN9lP-STpBnwXqT50dU8mLruGQ-7_rA&usqp=CAU">
        <div class="container-text">
            <h3 class="container-heading"><a href="ropeway.html">Botanical Gardens </a></h3>
            <br>
            <p>Also known as Tabak Udyan, Botanical Gardens are situated inside Panhala Fort complex in Kolhapur. The gardens are popular for having an extensive variety of flora and fauna and are set in a foresty zone with marked trails for walking or cycling. </p>
            <button class="read-more-button">Read More</button>
        </div>
    </div>
    <!-- Container 5 -->
    <div class="container-item">
        <img class="container-image" src="https://www.kolhapurtravels.com/images/slider/bhavani-mandap.jpg">
        
        <div class="container-text">
            <h3 class="container-heading"><a href="gangasagr lake.html">Bhavani Mandap </a></h3>
           <br>
            <p>Bhavani Mandap used to be the court and palace of Chhatrapati Maharaja in the yesteryears which has now been converted into a public monument and is an important site of heritage in the Kolhapur city. </p>
           <button class="read-more-button">Read More</button>
        </div>
    </div>
    <!-- Container 6 -->
    <div class="container-item">
        <img class="container-image" src="https://www.kolhapurtourism.org/wp-content/uploads/2015/01/shalini-palace01.jpg">
       
        <div class="container-text">
            <h3 class="container-heading"><a href="maha darwaja.html">Shalini Palace</a></h3>
           <br>
            <p>Built on the banks of Lake Rankala, Shalini Palace is an opulent palace which was constructed for Princess Shalini Raje of Kolhapur in 1931-1934. The palace is lined with beautiful palm trees and gardens. It was later converted into a luxury heritage hotel but is currently shut down due to heavy losses.</p>
           <button class="read-more-button">Read More</button>
        </div>
    </div>
</div>


<br>
<br>
<br>
<br>

<p1><h2>Top Hotels In Kolhapur</h2></p1>
<!-- Additional Containers -->
    <div class="additional-container">
        <!-- Additional Container 1 -->
        <div class="additional-item">
            <img class="additional-image"   src="https://media-cdn.tripadvisor.com/media/photo-s/21/e9/c3/e4/la-moire-resort-a-perfect.jpg">
                <div class="additional-content">
                    <h3><a href="resort6.html" >Hotels</a></h3>
                    </div>
                  </div>
           
        
        <!-- Additional Container 2 -->
        <div class="additional-item">
        <img class="additional-image"   src="https://media-cdn.tripadvisor.com/media/photo-s/02/a4/99/ad/filename-bhimashankar.jpg">
            <div class="additional-content">
                <h3><a href="mahalaxmi resorts.html" >Resorts</a></h3>
                </div>
              </div>
        
        <!-- Additional Container 3 -->
        <div class="additional-item">
            <img class="additional-image"   src="https://ak-d.tripcdn.com/images/0221s12000aub1gagDAC8_R_550_412_R5.jpg
            ">
                <div class="additional-content">
                    <h3><a href="resort6.html" > Cheap Hotels</a></h3>
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