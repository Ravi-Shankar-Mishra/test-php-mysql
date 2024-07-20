<?php
include 'header.php';
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']); // Escape user input

    $sql = "SELECT * FROM `employee` WHERE Email = '$email' OR Mobile = '$email'"; // Corrected query

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Record found, process data here
        while ($row = mysqli_fetch_assoc($result)) {

             echo "<center><table style='border:Black 1px solid;text-align: center; border-collapse: collapse; width: 50%;'>
                    <tr style='text-align: center'>
                        <th colspan='2' style='border: 1px solid #ddd; padding: 8px;'><h1>Details</h1></th>
                    </tr>

                    <tr>
                        
                        <td style='border: 1px solid #ddd; padding: 8px;'>Emp-ID: </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>" . $row['EMP_ID'] . "</td>
                    </tr>

                    <tr>
                        
                        <td style='border: 1px solid #ddd; padding: 8px;'>Name: </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>". $row['EMP_Name'] . "</td>
                    </tr>

                    <tr>
                        
                        <td style='border: 1px solid #ddd; padding: 8px;'>Email: </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>" . $row['Email'] . "</td>
                    </tr>

                    <tr>
                        
                        <td style='border: 1px solid #ddd; padding: 8px;'>Mobile: </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>" . $row['Mobile'] . "</td>
                    </tr>

                    <tr>
                        
                        <td style='border: 1px solid #ddd; padding: 8px;'>Gender: </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>" . $row['Gender'] . "</td>
                    </tr>
                    <tr>
                        
                        <td style='border: 1px solid #ddd; padding: 8px;'>Salary: </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>" . $row['Salary'] . "</td>
                    </tr>

                    <tr>
                        
                        <td style='border: 1px solid #ddd; padding: 8px;'>Address: </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>" . $row['Address'] . "</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid #ddd; padding: 8px;'>
                        <a href='update.php?id=" . $row['EMP_ID'] . "'><button class='btn edit'>Edit</button></a>
                        </td>
                        <td style='border: 1px solid #ddd; padding: 8px;'>
                            <a href='delete.php?id=".$row['EMP_ID']."'><button type='submit' class='btn del' name='delete'>Delete</button></a>
                        </td>
                    </tr>
                </table></center>
                ";
 
            
        }
    } else {
        echo "No record found for email or mobile: $email";
    }
}

    mysqli_close($conn);
?>
<style>
.btn {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 15px;;
}
.edit {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.edit:hover {
  background-color: #008CBA;
  color: white;
}

.del {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.del:hover {
  background-color: #f44336;
  color: white;
}
</style>
