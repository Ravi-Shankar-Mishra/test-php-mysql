<?php include'header.php' ?>


<style>
    form{
        /* text-align: center; */
        margin-top: 10%;
        margin-left: 30%;
        margin-right: 30%;
        margin-bottom: 10%;
        padding: 10px;
        border: 1px solid black;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        /* font-size: 20px; */
    }
    form label{
        font-weight: bold;
    }
    form table tr td
    {
        text-align: left;
        font-size: 20px;
        font-weight: bold;
        /* width: 25px; */
        height: 45px;        
    }
    input{
        margin-left: 30px;
        /* font-size: 20px; */
        
    }
    select{
        margin-left: 30px;
        width:100px
    }
    textarea{
        margin-left: 30px;
    }

    

</style>


<form action="connect_php.php" method="POST">
    <h1 style="text-align: center;">Sign Up</h1>
    <table>
        <tr>
            <td class="label">Name</td>
            <td><input type="text" name="name" placeholder="Enter Full Name"></td>
        </tr>
        <tr>
            <td class="label">Email</td>
            <td><input type="email" name="email" placeholder="Enter Email"></td>
        </tr>
        <tr>
            <td class="label">Password</td>
            <td><input type="password" name="password" placeholder="Enter Password"></td>
        </tr>
        <tr>
            <td class="label">Confirm-Password</td>
            <td><input type="password" name="password" placeholder="Enter Password"></td>
        </tr>
        
            <td class="label">Gender</td>
            <td><input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other
            </td>
        </tr>
        <tr>
            <td class="label">City</td>
            <td><select name="city">
                <option value="Delhi">---select---</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Chennai">Chennai</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Banglore">Banglore</option>
            </select></td>
        </tr>
        <tr>
            <td class="label">Phone</td>
            <td><input type="number" name="phone" placeholder="Enter Phone Number"></td>
        </tr>
        <tr>
            <td class="label">Image</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td class="label">Address</td>
            <td><textarea name="address" placeholder="Enter Address"></textarea></td>
        </tr>
        <tr>
            <td class="label">Role</td>
            <td><select name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset"value="Clear"><br>
    if you have already account <a href="login.php">Login</a>
</form>