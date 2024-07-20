
<?php


    include 'header.php';
    include 'connection.php';

    $editid = isset($_GET['id']) ? $_GET['id'] : ''; // Check if id is set in URL

    if ($editid) {
    $sql = "SELECT * FROM employee WHERE EMP_ID = '{$editid}'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $edit_data = mysqli_fetch_array($result);
    } else {
        // Handle case where no record found for the id (optional: display error message)
    }
    } else {
    // Handle case where no id is provided in the URL (optional: display error message)
    }

    if ($_POST) {
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
        header("location: admin_dashboard.php");
    } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
    }
    }






    // include 'header.php';
    // include 'connection.php';
    
    // $editid = $_GET['id'];
    // $sql = "SELECT * FROM employee WHERE EMP_ID = '{$editid}'";
    // $result = mysqli_query($conn, $sql);

    // if ($result && mysqli_num_rows($result) > 0) 
    // {
    //     $edit_data = mysqli_fetch_array($result);
    // }

    // if($_POST)
    // {
    //     $emid = $_POST['emid'];
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $mobile = $_POST['mobile'];
    //     $gender = $_POST['gender'];
    //     $salary = $_POST['salary'];
    //     $address = $_POST['address'];
    //     $password = $_POST['password'];

    //     $update_query = "UPDATE employee SET EMP_Name='$name', Email='$email', Mobile='$mobile', Password='$password', Gender='$gender', Salary='$salary', Address='$address', dt=current_timestamp() WHERE EMP_ID='$emid'";
    //     $update_result = mysqli_query($conn, $update_query);

    //     if ($update_result) {
    //         echo "<script>alert('Record Updated Successfully');</script>";
    //         header("location: admin_dashboard.php");
    //     } else {
    //         echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
    //     }
    // }

    
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
        <form action="admin_update_page.php" method="POST"> 
            <input type="hidden" name="emid">
            <table>
                <tr>
                    <th colspan="2"><h1>Edit Details</h1></th>
                </tr>
                <tr>
                    <td >
                        <label>Name</label>
                    </td>
                    <td>

                        <input type="text" name="name" required>


                        
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Mobile</label>
                    </td>
                    <td>
                        <input type="number" name="mobile" id="mobile" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Gender</label>
                    </td>
                    <td>
                        <input type="text" name="gender" id="gender">           
                        
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Salary</label>
                    </td>
                    <td>
                        <input type="number" name="salary" id="salary" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Address</label>
                    </td>
                    <td>
                        <textarea name="address" id="address" cols="50" rows="10" required></textarea>
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
