<?php
// Establish connection to the database
$connect = mysqli_connect("localhost", "root", "", "travelmanagment") or die("Connection Failed");

// Call the existing stored procedure
$query = "CALL GetCombinedFlightData()";
$result = mysqli_query($connect, $query);

// Check if the result set is not empty
if (mysqli_num_rows($result) > 0) {
    // Output table headers
    echo "<table border='1'>
            <tr>
                <th>Customer Name</th>
                <th>Customer Middle Name</th>
                <th>Customer Last Name</th>
                <th>Customer Gender</th>
                <th>Customer Email</th>
                <th>Customer Phone Number</th>
                <th>Customer City</th>
                <th>Flight Source Name</th>
                <th>Flight Destination Name</th>
                <th>Flight Booking Date</th>
                <th>Flight Comments/Reviews</th>
                <th>Flight Rating</th>
                <th>Flight rating Type</th>
                <th>Flight Status</th>
            </tr>";

    // Loop through the result set and output each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['cus_fname']}</td>
                <td>{$row['cus_mname']}</td>
                <td>{$row['cus_lname']}</td>
                <td>{$row['cus_gender']}</td>
                <td>{$row['cus_email']}</td>
                <td>{$row['cus_phone']}</td>
                <td>{$row['cus_city']}</td>
                <td>{$row['flightsource_name']}</td>
                <td>{$row['flightdestination_name']}</td>
                <td>{$row['flight_booking_date']}</td>
                <td>{$row['tar_feedbk']}</td>
                <td>{$row['tar_rating']}</td>
                <td>{$row['tar_rtype']}</td>
                <td>{$row['tar_rstatus']}</td>
            </tr>";
    }

    // Close the table
    echo "</table>";
} else {
    // If no results found, display a message
    echo "No records found";
}

// Close the database connection
mysqli_close($connect);
?>
