<?php 

include ('DBcon.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style_regi.css">
</head>
<body>
    <div class="loginbox">
    <img src="Images/avatar2.png" class="avatar" alt="avatar.png">
    <h1>Register Here</h1>
    <form action="DBcon.php" method="POST">
        <table>
            <tr>
                <td class="form" id="form">Username
                <div class="form-control">
                    <input type="text" name="username" placeholder="Enter Username" id="full_name" >
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                </td>
            </tr>
            <tr>
                <td>Firstname
                    <input type="text" name="firstname" placeholder="Enter First name" required="">
                </td>
            </tr>
            <tr>
                <td>Lastname
                    <input type="text" name="lastname" placeholder="Enter Last name" required="">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="female">
                </td>
            </tr>
            <tr>
                <td>Birthday<br>
                    <select>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    <select>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select>
                        <option>1999</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                    </select>
                </td>
            </tr>
            </div>
            <tr>
                <td>Password
                    <input type="password" name="password" placeholder="Enter Password" required="">
                </td>
            </tr>
        </table>
        <button>Register</button>
    </form>

</div>

<script src="regiform.js"></script>

</body>
</html>