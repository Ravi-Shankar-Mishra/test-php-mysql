
<?php
    include 'header.php';
    include 'connection.php';
    
    $editid = $_GET['id'];
    $sql = "SELECT * FROM employee WHERE EMP_ID = '{$editid}'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) 
    {
        $edit_data = mysqli_fetch_array($result);
    }

    if($_POST)
    {
        $emid = $_POST['emid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $salary = $_POST['salary'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $update_query = "UPDATE employee SET EMP_Name='$name', Email='$email', Mobile='$mobile', Password='$password', Gender='$gender', Salary='$salary', Address='$address', dt=current_timestamp() WHERE EMP_ID='$emid'";
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            echo "<script>alert('Record Updated Successfully');</script>";
            header("location: login.php");
        } else {
            echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
        }
    }

    // $editid = $_GET['id'];

    // $sql = mysqli_query("SELECT * FROM employee WHERE EMP_ID = '{$editid}'") or die(mysqli_error());

    // $edit_data = mysqli_fetch_array($sql);
?>


<style>
   
    td
    {
        /* width: 15%; */
        /* text-align: center; */
        /* margin-left: 20px; */
    } */
    .update_form table {
        width: 100%;
    }
    .update_form th, .update_form td {
        border: 1px solid #ddd;
        padding: 8px;
    }
    .update_form label {
        width: 30%;
        margin-left: 20px;
    }
</style>



<div class="update_form">

    <center>
        <form action="update.php" method="POST"> 
            <input type="hidden" name="emid" value="<?php echo $edit_data[0]; ?>">   
            <table>
                <tr>
                    <th colspan="2"><h1>Edit Details</h1></th>
                </tr>
                <tr>
                    <td >
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" value="<?php echo $edit_data[1]; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" value="<?php echo $edit_data[2]; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Mobile</label>
                    </td>
                    <td>
                        <input type="number" name="mobile" id="mobile" value="<?php echo $edit_data[3]; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" value="<?php echo $edit_data[4]; ?>" id="password" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Gender</label>
                    </td>
                    <td>
                        <input type="text" name="gender" value="<?php echo $edit_data[5]; ?>" id="gender">           
                        
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Salary</label>
                    </td>
                    <td>
                        <input type="number" name="salary" id="salary" value="<?php echo $edit_data[6]; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Address</label>
                    </td>
                    <td>
                        <textarea name="address" id="address" value="<?php echo $edit_data[7]; ?>" cols="50" rows="10" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td >
                        <button type="submit" class="btn edit" name="submit" value="Update">Update</button>
                    </td>
                    <td >
                        <button type="reset" class="btn del" name="reset" value="Clear">Clear</button>
                    </td>
                </tr>

            </table>
        </form>
    </center>
</div>





    <!-- // if (isset($_POST['id'])) -->
    <!-- // {
    //     $id = mysqli_real_escape_string($conn, $_POST['id']);

    //     if (isset($_POST['action'])) // Check if action is set
    //     {
    //         $name = mysqli_real_escape_string($conn, $_POST['name']);
    //         $email = mysqli_real_escape_string($conn, $_POST['email']);
    //         $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    //         $gender = $_POST['gender'];
    //         $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    //         $address = mysqli_real_escape_string($conn, $_POST['address']);
    //         $password = mysqli_real_escape_string($conn, $_POST['password']); -->

           
    <!-- //             //sql query
    //         $sql = "UPDATE `employee` SET `EMP_Name` = '$name', `Email` = '$email', `Mobile` = '$mobile', `Password` = '" . password_hash($password, PASSWORD_DEFAULT) . "', `Gender` = '$gender', `Salary` = '$salary', `Address` = '$address' WHERE `EMP_ID` = '$id';";

    //         //query execute
    //         $result = mysqli_query($conn, $sql);
    //         if ($conn->query($sql) === true)
    //         { -->
    <!-- //             echo '<div class="alerts" role="alert" style="background-color:rgb(240,174,222); border-radius:5px 5px 5px 5px;border-style: groove;">
    //                 <div style="margin-left:20px"><strong>Record Updated</strong> Your email is : '.$email.' and Password is : ' . $password . '
    //                 </div>
    //                 </div>'; -->
    <!-- //         } 
    //         else 
    //         {
    //             echo "Error: " . $sql . "<br>" . $conn->error;
    //         }
            
            
    //         }      
    //     }  
    //     $conn->close(); -->
    


