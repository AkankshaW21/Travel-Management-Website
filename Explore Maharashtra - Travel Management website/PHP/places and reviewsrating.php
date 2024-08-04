
!<table border="1">
    <tr>
        <th>Place Name</th>
        <th>Place Country</th>
        <th>Place State</th>
        <th>Place City</th>
        <th>Place Pincode</th>
        <th>Place Type </th>
        <th> Places Comments/Reviews</th>
        <th>Places Rating</th>
        <th>Places Rating Date </th>
        <th>Places Type</th>
        <th>Places Status</th>
    </tr>
    <?php
        $connect=mysqli_connect("localhost","root","","travel") or die("Connection Failed");
        $query="SELECT bp.*, pr.*
        FROM bookingplaces AS bp
        LEFT JOIN placereviews AS pr ON bp.pname = pr.pname";
        $result=mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo  $row['pname']?></td>
                <td><?php echo  $row['pcountry']?></td>
                <td><?php echo  $row['pstate']?></td>
                <td><?php echo  $row['pcity']?></td>
                <td><?php echo  $row['ppincode']?></td>
                <td><?php echo  $row['ptype']?></td>
                <td><?php echo  $row['feedbk']?></td>
                <td><?php echo  $row['rating']?></td>
                <td><?php echo  $row['dor']?></td>
                <td><?php echo  $row['rtype']?></td>
                <td><?php echo  $row['rstatus']?></td>


        </tr>
        <?php

        }
        ?>