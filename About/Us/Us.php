<?php
session_start(); // Start or resume the session
?>

<html>
    <title>من نحن</title>
    <!-- Social Media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Add Webicon -->
    <link rel="icon" href="Pics/Logo.webp" type="image/x-icon">

        <style>
            body {
                background-image: url("Pics/Background.avif");
                background-attachment: fixed;
            }

            .nav {
                margin-top: 50px;
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

            footer {

                text-align: right;
                padding: 100px;
                background-color: #1a1a1a;
                color: white;
                width: 100%;
                
            }

            .fa {
            margin-right: 4px;
                padding: 0px;
                font-size: 25px;
                width: 35px;
                border-radius: 30px;
                list-style: none;
            }
            .fa-instagram {
                background: linear-gradient(#feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5);
                color: white;
                
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
            }
            .fa-whatsapp {
                background: MediumSeaGreen;
                color: white;
            }
            footer {
                display: flex;
                justify-content: space-between;
                padding: 4px;
            }

            #footer-info, #footer-contact, #footer-hours {
                flex: 1;
                text-align: center;
            }

            #footer-info {
                text-align: left; 
                margin-left: 10px;
            }

            #footer-contact {
                text-align: center;
            }

            #footer-hours {
                text-align: right;
                direction: rtl;
                margin-right: 10px;
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

.dropdown-content a:hover {
    background-color: #ddd;
}


.dropdown > a.navbuttons {
    padding-top: 12px; /* Adjust padding for الحساب */
    margin-right: 18px; /* Adjust margin as needed */
}

.square-blocks {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .square-block {
        width: 500px; /* Adjust the width as needed */
        height: 500px; /* Make it a square */
        background-color: rgba(100, 100, 100, 0.3); /* Updated background color with more gray */
        color: white;
        text-align: center;
        font-size: 24px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 30px; /* Adjust margin for closer spacing */
    }
        </style>
    </head>

    <body>

    <ul class="nav">
        <img class="logo" src="Pics/Logo.webp">
        <li class="home"><a href="../../">الرئيسية</a></li>
        <li class="navbuttons"><a href="../../News/News.php">الأخبار</a></li>
        <li class="navbuttons"><a href="../About.php" class="active">حول</a></li>
        <li class="navbuttons li-right"><a href="../../Contact Us/Contact Us.php">تواصل معنا</a></li>
        <li class="navbuttons dropdown">
            <li class="dropdown"> 
                <?php
                if (isset($_SESSION['name'])) {
                    // User is logged in
                    $username = $_SESSION['name'];
                    ?>
                    <a class="navbuttons">
                        <p class="w3-padding-large w3-hide-small w3-right w3-username"><?php echo $username; ?></p>
                    </a>
                    <div class="dropdown-content">
                        <a href="../../Profile/Profile.php">الملف الشخصي</a>
                        <a href="../../Log Out/Log Out.php">تسجيل خروج</a>
                    </div>
                    <?php
                } else {
                    // User is not logged in
                    ?>
                    <a class="navbuttons">الحساب</a>
                    <div class="dropdown-content">
                        <a href="../Sign Up/Sign Up.php">تسجيل</a>
                        <a href="../Log In/Log In.php">دخول</a>
                    </div>
                    <?php
                }
                ?>
            </li>
        </ul>

        
        <br><br><br><br><br><br>

            <!--Block Content-->
            <div class="square-blocks">
    <!-- First Square Block -->
    <a href="Team/Team.php">
    <div class="square-block">
        <p>فريقنا</p>
    </div>
            </a>


    <!-- Second Square Block -->
    <a href="Collaborators/Collaborators.php">
    <div class="square-block">
        <p>المتعاونون</p>
    </div>
</div>
            </a>
<br>


<!--temptape-->
<div id="ww_88312103c4002" v='1.3' loc='auto' a='{"t":"ticker","lang":"ar","sl_lpl":1,"ids":["wl11626"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'><a href="https://weatherwidget.org/" id="ww_88312103c4002_u" target="_blank">Weather widget</a></div><script async src="https://app2.weatherwidget.org/js/?id=ww_88312103c4002"></script>


<footer>
    
    <div id="footer-info">
    <div id ="editt"> <p><strong>:ساعات العمل</strong><br> </div>
            من السبت إلى الخميس<br>
            <br> <div id ="editt">4 PM - 8 AM </p></div>
            
            <div id="fleft">
        <a href="https://www.instagram.com/astrojoinstitute/" class="fa fa-instagram"></a>
        <a href="https://web.facebook.com/AstroJoinstitute/?_rdc=1&_rdr" class="fa fa-facebook"></a>
        <a href=" https://wa.me/962777890918" class="fa fa-whatsapp"></a>
        </div>
    </div>
    <div id="footer-contact">
        <p><strong>:أرقام الهواتف</strong><br>
            +962 777890556<br>
            +962 777890918<br>
            +962 6 5519619</p>
        <p><strong>:البريد الإلكتروني</strong><br>
            <a href="mailto:Info@astrojo.space">Info@astrojo.space</a></p>
    </div>

    <!--map-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.6493617302312!2d35.85412832444216!3d31.99751947399903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca117a5bb8a8b%3A0xd5ed68c9b07cf7a9!2sAstroJo!5e0!3m2!1sar!2sjo!4v1694811175694!5m2!1sar!2sjo" width="400" height="190" style="border:0;" allowfullscreen=""  referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <div id="footer-hours">
        <p><strong>العنوان:</strong><br>
        <br>عمان, الأردن<br>
            <br>شارع وصفي التل, بلازا سنتر</p>
        </div>
    
</footer>

</body>

</html>