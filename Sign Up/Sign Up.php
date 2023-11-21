<?php

#sign up

$servername = "localhost";
$username = "root";
$password = "";
$db = "astrojo";
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("خطأ بالإنترنت: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Collect user input
    $nam = mysqli_real_escape_string($conn, $_POST["name"]);
    $emai = mysqli_real_escape_string($conn, $_POST["email"]);
    $passwor = mysqli_real_escape_string($conn, $_POST["password"]);

    // Check if email already exists in the database
    $emailQuery = "SELECT * FROM users WHERE Email = '$emai'";
    $emailResult = mysqli_query($conn, $emailQuery);

    if (mysqli_num_rows($emailResult) > 0) {
        // Email already exists, prompt user to sign in
        echo "البريد الإلكتروني مستخدم مسبقا.";
        
    } else {
        // Email doesn't exist, proceed with sign-up
        $query = "INSERT INTO users (Name, Email, Password) VALUES ('$nam', '$emai', '$passwor')";
        $result = mysqli_query($conn, $query);
       
       if ($result) {
        session_start();
        $chna = "SELECT name FROM users WHERE email = '$emai'";
        $resultt = mysqli_query($conn, $chna);
        $row = mysqli_fetch_assoc($resultt);
        $_SESSION['name'] = $row['name']; // Store user's name in session
        mysqli_close($conn);
        // Redirect to the URL where User.php is accessible
        header("Location: /Astro%20Jo");
        } 
    }
}

?>


<!DOCTYPE html>
<html>

    <head>
    <title>التسجيل</title>
    <!-- Add Webicon -->
    <link rel="icon" href="Pics/Logo.webp" type="image/x-icon">
    <style>


.nav {
    font-family: 'Arial';
    position: fixed; /* Change the position to fixed */
    top: 0; /* Place it at the top of the page */
    margin-top: 10px; /* Adjust the margin-top value as needed */
    width: 100%; /* Ensure it spans the entire width of the page */
    padding-top: 48px;
    padding-right: 96px;
            }

            ul {
                list-style-type: none;
                position: fixed;
            }

            .li-right {
                margin-left: 300px;
                padding-top: 20px;
            }

            li {
                float: right;
                font-size: 1.3vw;
            }

            .navbuttons {
                padding-right: 7vmax;
                padding-top: 20px;
                display: block;
            }

            li a {
                display: block;
                color: rgb(255, 255, 255);
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover:not(.active) {
                background-color: #00ccf5bb;
                border-radius: 10px;
            }

            .active {
                background-color: #00ccf5ae;
                border-radius: 10px;
            }

            .logo {
                float: right;
                padding-right: 50px;
            }

            .home {
                padding-top: 20px;
                padding-right: 50px;
            }

           a{
             text-decoration: none;
             text-align: center;
            }
            #editt {
                margin-left: 13px;
            }
            #fleft{
                float: left;
            }
            
            .big-font {
            font-size: 60px; /* Adjust the font size as needed */
            text-align: center;
            margin-bottom: 20px; /* Adjust the margin as needed */
        }

/* Style for the dropdown link */
.dropdown > a {
    color: white; /* Change text color to white */
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Style for the dropdown content */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: black; /* Change background color to black */
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Style for the dropdown options */
.dropdown-content a {
    color: white; /* Change text color to white */
    text-decoration: none;
    display: block;
}




.dropdown > a.navbuttons {
    padding-top: 12px; /* Adjust padding for الحساب */
    margin-right: 18px; /* Adjust margin as needed */
}


body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-image: url("Pics/Background.avif");
    background-attachment: fixed;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    padding: 40px;
    text-align: center;
    max-width: 400px;
    width: 90%;
    margin-top: 90px; /* Add this line to set the top margin */
}

h2 {
    color: #333;
    margin-bottom: 20px;
    font-size: 24px;
}

form {
    text-align: left;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: bold;
    font-size: 14px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #007bff;
}

input[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.2s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

#error-message {
    color: #d9534f;
    font-size: 14px;
    margin-top: 15px;
}
#email {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
        }
        .red-text {
    color: red;
  }
</style>
</head>
<body>

<ul class="nav">
            <img class="logo" src="Pics/Logo.webp">
            <li class="home"><a  href="../">الرئيسية</a></li>
            <li class="navbuttons"><a href="../News/News.php">الأخبار</a></li>
            <li class="navbuttons"><a href="../About/About.php">حول</a></li>
            <li class="navbuttons li-right"><a href="../Contact Us/Contact Us.php">تواصل معنا</a></li>
            <li class="navbuttons dropdown">
            <li class="dropdown"> 
        <a  class="navbuttons active">الحساب</a>
        <div class="dropdown-content">
            <a class="active" href="">تسجيل</a>
            <a href="../Log In/Log In.php">دخول</a>
        </div>
        </li>
            </ul>


    <div class="login-container">
        <h2>التسجيل</h2>
        <form action="" method="POST">
            <label for="name" style="text-align: right;">الإسم</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email" style="text-align: right;">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="password"style="text-align: right;" >كلمة السر</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" value="إدخال" id="submit" name="submit">
        </form>
        <p id="error-message"></p>
    </div>
    
</body>
</html>