<?php
    require './header.php';
    require './connection.php';

    $query = "SELECT * FROM employee"; // Remove single quotes around the table name
    $result = mysqli_query($conn, $query);

    // Check if any rows were returned
    $count=mysqli_num_rows($result);

    if ($result) 
    {
        echo "<center><h2>$count Record found</h2>";
        echo "<table border='3' style='border-collapse: collapse;'>
        <tr>
            <th colspan='9'><h1>Employee Details</h1></th>
        </tr>
        <tr>
            <td><strong><h3>ID</h3></strong></td>
            <td><strong><h3>Name</h3></strong></td>
            <td><strong><h3>Email</h3></strong></td>
            <td><strong><h3>Mobile</h3></strong></td>
            <td><strong><h3>Password</h3></strong></td>
            <td><strong><h3>Gender</h3></strong></td>
            <td><strong><h3>Salary</h3></strong></td>
            <td><strong><h3>Address</h3></strong></td>
            <td><strong><h3>Action</h3></strong></td>
            </tr>";
        while($data = mysqli_fetch_row($result))
        {
            echo "<tr>";
            echo "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td><td><a href='admin_update_page.php?id=".$data[0]."'>Edit</a> | <a href='admin_delete_page.php?id=".$data[0]."'>Delete</a></td>";
        }
        echo "</table></center>";
    }
    else {
        echo "Error executing query: " . mysqli_error($myConnection);
    }

?>