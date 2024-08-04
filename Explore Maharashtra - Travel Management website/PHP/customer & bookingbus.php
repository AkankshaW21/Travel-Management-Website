
!<table border="1">
    <tr>
        <th>Customer Name</th>
        <th>Customer Middle Name</th>
        <th>Customer Last Name</th>
        <th>Customer Gender</th>
        <th>Customer Email</th>
        <th>Customer Phone Number</th>
        <th>Customer City</th>
        <th>Booking Bus Name</th>
        <th>Bus Source Name</th>
        <th>Bus Destination Name</th>
        <th>Bus Booking Date</th>

    </tr>
    <?php
        $connect=mysqli_connect("localhost","root","","travelmanagment") or die("Connection Failed");
        $query="SELECT c.cus_fname, c.cus_mname, c.cus_lname, c.cus_gender, c.cus_email, c.cus_phone, c.cus_city,
        (SELECT bb.bus_name FROM bookingbus AS bb WHERE bb.bus_id = c.cus_id) AS bus_name,
        (SELECT bb.bussource_name FROM bookingbus AS bb WHERE bb.bus_id = c.cus_id) AS bussource_name,
        (SELECT bb.busdestination_name FROM bookingbus AS bb WHERE bb.bus_id = c.cus_id) AS busdestination_name,
        (SELECT bb.busseat_number FROM bookingbus AS bb WHERE bb.bus_id = c.cus_id) AS busseat_number
 FROM customer AS c";
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
                <td><?php echo  $row['bus_name']?></td>
                <td><?php echo  $row['bussource_name']?></td>
                <td><?php echo  $row['busdestination_name']?></td>
                <td><?php echo  $row['busseat_number']?></td>
                
        </tr>
        <?php

        }
        ?>