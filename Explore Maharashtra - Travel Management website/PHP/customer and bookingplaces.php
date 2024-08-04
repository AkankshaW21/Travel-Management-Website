
!<table border="1">
    <tr>
        <th>Customer Name</th>
        <th>Customer Middle Name</th>
        <th>Customer Last Name</th>
        <th>Customer Gender</th>
        <th>Customer Email</th>
        <th>Customer Phone Number</th>
        <th>Customer City</th>
        <th>Booking Place Name</th>
        <th>Booking Place City</th>
    </tr>
    <?php
        $connect=mysqli_connect("localhost","root","","travelmanagment") or die("Connection Failed");
        $query="SELECT str.*, sr.place_name, sr.place_city
        FROM customer AS str
        INNER JOIN bookingplaces AS sr ON str.cus_id = sr.place_id";
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
                <td><?php echo  $row['place_name']?></td>
                <td><?php echo  $row['place_city']?></td>

        </tr>
        <?php

        }
        ?>