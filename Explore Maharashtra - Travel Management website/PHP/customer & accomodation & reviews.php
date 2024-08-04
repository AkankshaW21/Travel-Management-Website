
!<table border="1">
    <tr>
        <th>Customer Name</th>
        <th>Customer Middle Name</th>
        <th>Customer Last Name</th>
        <th>Customer Gender</th>
        <th>Customer Email</th>
        <th>Customer Phone Number</th>
        <th>Customer City</th>
        <th>Booking Hotel Name</th>
        <th>Booking Hotel City</th>
        <th>Hotel Comments/Reviews</th>
        <th>Hotel Rating</th>
        <th>Hotel Rating Date </th>
        <th>Hotel Type</th>
        <th>Hotel Status</th>
    </tr>
    <?php
        $connect=mysqli_connect("localhost","root","","travelmanagment") or die("Connection Failed");
        $query="SELECT 
        c.cus_fname, c.cus_mname, c.cus_lname, c.cus_gender, c.cus_email, c.cus_phone, c.cus_city,
        bh.hotel_name, bh.hotel_city,
        (SELECT MAX(ar.acco_feedbk) FROM reviewsaccomodation AS ar WHERE ar.acco_rating_id = bh.hotel_id) AS acco_feedbk,
        (SELECT MAX(ar.acco_rating) FROM reviewsaccomodation AS ar WHERE ar.acco_rating_id = bh.hotel_id) AS acco_rating,
        (SELECT MAX(ar.accomodation_reviews_date) FROM reviewsaccomodation AS ar WHERE ar.acco_rating_id = bh.hotel_id) AS accomodation_reviews_date,
        (SELECT MAX(ar.acco_rtype) FROM reviewsaccomodation AS ar WHERE ar.acco_rating_id = bh.hotel_id) AS acco_rtype,
        (SELECT MAX(ar.acco_rstatus) FROM reviewsaccomodation AS ar WHERE ar.acco_rating_id = bh.hotel_id) AS acco_rstatus
    FROM customer AS c
    JOIN bookinghotel AS bh ON c.cus_id = bh.hotel_id";
        $result=mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo  $row['cus_fname']?></td>
                <td><?php echo  $row['cus_mname']?></td>
                <td><?php echo  $row['cus_lname']?></td>
                <td><?php echo  $row['cus_gender']?></td>
                <td><?php echo  $row['cus_email']?></td>
                <td><?php echo  $row['cus_phone']?></td>
                <td><?php echo  $row['cus_city']?></td>
                <td><?php echo  $row['hotel_name']?></td>
                <td><?php echo  $row['hotel_city']?></td>
                <td><?php echo  $row['acco_feedbk']?></td>
                <td><?php echo  $row['acco_rating']?></td>
                <td><?php echo  $row['acco_dor']?></td>
                <td><?php echo  $row['acco_rtype']?></td>
                <td><?php echo  $row['acco_rstatus']?></td>

        </tr>
        <?php

        }
        ?>