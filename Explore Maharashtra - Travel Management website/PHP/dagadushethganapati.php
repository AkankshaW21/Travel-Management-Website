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
if(isset($_POST['ganapati'])) {
    // Insert record into database
    $pageName = "ganapatiTemple";
    $sql = "INSERT INTO PlacesInformation (pageName) VALUES ('$pageName')";
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
            background-image: url('https://utsav.gov.in/public/uploads/darshan_cover_image/darshan_42/1651224930143200465.jpg');
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
            width: 900px; /* Set the desired width for the overlay image */
            height: 500px; /* Set the desired height for the overlay image */
           
        }
        .overlay-text {
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black; /* Set the text color */
            font-size: 40px; /* Set the font size */
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
    background-image: url('https://utsav.gov.in/public/uploads/darshan_cover_image/darshan_42/1651224930143200465.jpg');
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
        h5{
            margin-left: 25px;
            margin-right: 25px;
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
        <form action="ganapati.php" method="get">
            <select name="ganapati">
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
        <img class="overlay-image" src="https://utsav.gov.in/public/uploads/darshan_cover_image/darshan_42/1651224930143200465.jpg " alt="Overlay Image" >
        <div class="overlay-text">XYZr</div>
    </div>
    <br>
    <br>
    <div class="location-container">
        <h2 class="location-heading"></h2>
        <p class="table-content">
            <h3>Overview</h3>The Dagadusheth Halwai Ganapati temple is a Hindu Temple located in Pune and is dedicated to the Hindu god Ganesh. The temple is visited by over hundred thousand pilgrims every year. Devotees of the temple include celebrities and chief ministers of Maharashtra who visit during the annual ten-day Ganeshotsav festival.[3] The main Ganesh idol is insured for sum of ₹10 million. It celebrated 130 years of its Ganapati in 2022.
        </p>
     <br>   
    <p><h4>Location: Budhwar Peth, Pune, Maharashtra</p>
    
    <p><h4>Hours open: 6:00 am - 10:30 pm</h4></p>
    
    <p><h4>Phone: 020 2447 9222</h4></p>
    
    <p><h4>Weather: 20 - 30 °C</h4></p>
    <p><h4>Map</h4></p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.2761379187673!2d73.85612423651676!3d18.51641951021137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c06fa5b442ff%3A0x9df365f5b648bce1!2sShreemant%20Dagdusheth%20Halwai%20Ganpati%20Mandir!5e0!3m2!1sen!2sin!4v1695120678705!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

 <br><br>

    <h2>History</h2>
    <p>Shrimant Dagadusheth Halwai and his wife Laxmibai was a trader and sweet maker settled in Pune. His original halwai shop still exists under the name "Dagdusheth Halwai Sweets" near Datta Mandir in Pune. Eventually he became a successful sweet seller and a rich businessman. In the later 1800s, they lost their only son in a plague epidemic. They were approached by a compassionate sage who advised them to build a Ganesha temple in Pune
        Later, as they did not have any heir, Dagdusheth adopted his nephew Govindsheth (born 1865) who was 9 years old at the time of their death. Govindsheth was born in 1891 in Pune. He replaced the first Ganesh idol by a new one, with the first one still being present at Akra Maruti Chowk. 
    </p>
    <br>
        <h2> About Temple</h2>
       <p> The temple is a beautiful construction and boasts a rich history of over 100 years. Jay and Vijay, the two sentinels made of marble catch the eye of all at the outset. The construction is so simple that all the proceedings in the temple along with the beautiful Ganesh idol can be seen even from outside. The Ganesh idol is 2.2 metres tall and 1 metrewide. It is adorned with nearly 40 kilos of gold. The devotees of Ganesh offer Him gold and money and with every offering the Lord gets richer and richer. 
       </p>
       <br>
       <br>



    <h2>Special features of Dagdusheth Ganpati</h2>
<p>The Ganesh idol is 2.2 metres tall and 1 metrewide. It is adorned with nearly 40 kilos of gold. The devotees of Ganesh offer Him gold and money and with every offering the Lord gets richer and richer. Moreover, heaps of coconuts offered to the deity are yet another feature of the temple.
    The deity of Lord Ganesha was incepted by Shri Dagdusheth Halwai and his wife Lakshmibai way back, when they lost their only son to the plague epidemic. 
<br><br>
<h2>Interesting facts about Dagdusheth Ganpati Mandir </h2>
    <h5>1.From personal to public expense:</h5>
    <p>The Sarvajanik Ganpati was freedom fighter Bal Gangadhar Tilak’s idea to unite and mobilise Indians against British rule. A meeting of several respected citizens of Pune, including Tilak’s good friend Dagdusheth Halwai, pondered over celebrating the festival amidst the conservative Puneri society.</p>
  <br>
  <h5>2.Richness to goodness:</h5>
  <p>One of the most celebrated and star-studded Ganapati idols, the Dagdusheth Ganpati is bedecked with gold ornaments studded with precious stones. According to the trust’s 2017-18 audit report, the total property is valued at Rs. 66.91 crore. 

</p>
<br>
    <h5>3.There are not one but three idols:</h5>
    <p> The first idol was built in 1893 by Baburao Naik with paper and sticky jaggery glue (randha) at an expense of Rs 22 and was formally installed by Lokmanya Tilak. This historic idol is now in the Akara Maruti Mandir of Shukrawar Peth.</p>
<br>
    <h5>4.Decorations with a difference:</h5>
    <p> The decorations during the Ganesha festival vary every year. Different aspects of India’s rich and diverse cultural heritage are brought to life—especially the replicas of ancient temples and palaces such as the legendary Madhura-Meenakshi temple, Surya Temple of Orissa, Shree Mahalaxmi temple of Kolhapur, the Mysore Palace, the Angola Palace of Rajasthan. </p>
<br>
    <h5>5.Ganesha celebrations</h5>
    <p> There are five maha artis organised on a daily basis at set timings. The idol of Ganesha, heavily bedecked with jewellery, is an awe-inspiring sight. The manner in which the temple is built makes it possible for everyone to see the proceedings from outside.</p>
<br>
    <!-- Weather/Climate Container -->
<div class="table-container">
    <h2 class="table-heading">Dagdusheth Ganpati Mandir Arti Timings </h2>
    <p class="table-content">
     <table class="center" border="1px" >
        <tr>
            <th>Arti’s</th>
            <th>Time</th>
            </tr>
        <tr>
            <td>Daily Temple Timing </td>
            <td>5:00 AM to 10:30 PM</td>
        </tr>
        <tr>
            <td>Tuesday Timing </td>
            <td>5:00 AM to 11:00 PM</td>
        </tr>
        <tr>
            <td>Suprabhatam Aarti</td>
            <td>07:30 AM to 07:45 AM</td>
        </tr>
        <tr>
            <td>Naivedyam </td>
            <td>01:30 PM to 01:45 PM</td>
        </tr>
        <tr>
            <td>Madhyana Aarti </td>
            <td>03:00 PM to 03:15 PM</td>
        </tr>
        <tr>
            <td>Darshan For General Public </td>
            <td>3.15 P.M. TO 8 P.M.</td>
        </tr>
        <tr>
            <td>Mahamangal Aarti </td>
            <td>08:00 PM to 09:00 PM</td>
        </tr>
        <tr>
            <td>Darshan For General Public </td>
            <td> 8.15 P.M. TO 10.30 P.M.</td>
        </tr>
        <tr>
            <td>Shejarti </td>
            <td> 10:30 PM to 10:45 PM</td>
        </tr>
        
     </table>
        
    </p>
    
    
</div>
<br>
<br>
<br>
<h2>5 Manache Ganpati in Pune</h2><br>
<div class="horizontal-container">
    <div class="container-item">
        <!--<div class="container-image" style="background-image: url('your-image-url-1.jpg');"></div>-->
        <img class="container-image" src="https://kevinstandagephotography.files.wordpress.com/2022/03/shri-kasba-ganpati.jpg" >
        <div class="container-text">
            <h3 class="container-heading">Kasaba Ganapti</a></h3>
           <br>
            <p>An idol of Lord Ganesha was found near the house of Vinayak Thakar, who used to reside close to the residence of Masaheb Jijabai Bhosale. The temple was built by Shivaji Maharaj & Jijabai Bhosale in the year 1639.</p>
            <br><p>Location:Kasba Peth Rd,Pune</p>
            <button class="read-more-button">Read More</button>
        </div>
    </div>
    <div class="container-item">
        <img class="container-image" src="https://imgmedia.lbb.in/media/2022/08/630c92be07f0f67f05e3efbd_1661768382389.jpg">
        <div class="container-text">
            <h3 class="container-heading"><a href="jadadishwar temple.html">Tambdi Jogeshwari </a></h3>
            <br>
            <p>Tambdi Jogeshwari is the temple of Goddess Durga who is regarded as the  patron deity of Pune City. Here the specialty is that, the statue of Lord Ganesha is immersed every year at the end of Ganesotsav and re-established again in the successive year.</p>
            <br>
            <p>Location:Budhwar Peth, Pune</p>
            
            <button class="read-more-button">Read More</button>
           
           
            </div>
    </div>
    <div class="container-item">
        <img class="container-image" src="https://thumbs.dreamstime.com/b/september-pune-mah…alled-guruji-talim-ganpati-festival-255341589.jpg">
        <div class="container-text">
            <h3 class="container-heading"><a href="raj bhawan.html">Guruji Talim </a></h3>
            <br>
            <p>Guruji Talim is the 3rd respected Ganapati in Pune. It was first established in 1887 by two Hindu & Muslim families of Bhiku Shinde and Ustaad Nalban. This is the reason why Guruji Talim symbolizes Hindu-Muslim unity in Pune.</p>
            <br><p>Location:Laxmi Rd, Pune</p>
            <button class="read-more-button">Read More</button>
        </div>
    </div>
</div>


<!-- Second set of containers -->
<div class="horizontal-container second-set">
    <!-- Container 4 -->
    <div class="container-item">
        <img class="container-image" src="https://thumbs.dreamstime.com/b/tulshibaug-ganpati-ganesh-festival-pune-god-knowledge-257978900.jpg">
        <div class="container-text">
            <h3 class="container-heading"><a href="ropeway.html">Tulshibaug Ganapati</a></h3>
            <br>
            <p>Tulshibaug Ganpati is the 4th respected Ganapati in Pune. It was first established in 1901. This mandal holds the honor of establishing the first Glass Fiber statue since 1975. It is located in the heart and the most crowded part of the city. </p>
            <br>
            <p>Location:Tulshibaug, Budhwar Peth, Pune</p>
            <button class="read-more-button">Read More</button>
        </div>
    </div>
    <!-- Container 5 -->
    <div class="container-item">
        <img class="container-image" src="https://thumbs.dreamstime.com/z/september-pune-mah…ti-pune-which-was-installed-freedom-255341893.jpg">
        
        <div class="container-text">
            <h3 class="container-heading"><a href="gangasagr lake.html">Kesariwada Ganapati </a></h3>
           <br>
            <p>Kesariwada Ganapati is the 5th respected Ganapati in Pune. Since its inception in 1894, the Kesari Trust’s Ganesh festival used to be organised at Vinchurkar Wada, off Kumthekar Road, which was then the ancestral home of the Tilaks.</p>
           <br>
           <p>Location:Narayan Peth, Pune</p>
            <button class="read-more-button">Read More</button>
        </div>
    </div>
   
</div>


<br>
<br>
<br>
<br>

<p1><h2>Top Hotels In Bhimanshankar</h2></p1>
<!-- Additional Containers -->
    <div class="additional-container">
        <!-- Additional Container 1 -->
        <div class="additional-item">
            <img class="additional-image"   src="https://media-cdn.tripadvisor.com/media/photo-s/21/e9/c3/e4/la-moire-resort-a-perfect.jpg">
                <div class="additional-content">
                    <h3><a href="dga.html" >Hotels</a></h3>
                    </div>
                  </div>
           
        
        <!-- Additional Container 2 -->
        <div class="additional-item">
        <img class="additional-image"   src="https://media-cdn.tripadvisor.com/media/photo-s/02/a4/99/ad/filename-bhimashankar.jpg">
            <div class="additional-content">
                <h3><a href="dagadushrt resort.html" >Resorts</a></h3>
                </div>
              </div>
        
        <!-- Additional Container 3 -->
        <div class="additional-item">
            <img class="additional-image"   src="https://ak-d.tripcdn.com/images/0221s12000aub1gagDAC8_R_550_412_R5.jpg
            ">
                <div class="additional-content">
                    <h3><a href="resort3.html" > Cheap Hotels</a></h3>
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
        </div>
</body>
</html>