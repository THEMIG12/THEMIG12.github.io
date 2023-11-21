<?php
session_start(); // Start or resume the session
?>

<html>
    <title>أنشطتنا</title>
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


.big-blocks {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            /* Adjust the height as needed */
        }

        .big-block {
            width: calc(33.33% - 20px);
            /* 33.33% for three blocks in a row with 20px margin between them */
            background-color: rgba(100, 100, 100, 0.3);
            /* Adjust the background color */
            color: white;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            /* Adjust margin as needed */
            height: 600px;
        }

        .line-tape {
    width: 100%;
    margin-bottom: 20px;
    height: 50px;
    background-color: #00ccf5ae; /* Line color */
    position: relative; /* Make it a positioning context */
}

.middle-text {
    text-align: center;
    font-size: 24px; /* Adjust the font size as needed */
    color: white; /* Adjust the text color as needed */
    position: absolute;
    top: 50%; /* Vertically center the text within the line-tape */
    left: 0;
    right: 0;
    transform: translateY(-50%);
}
    
/* Button Styles */
.custom-button {
            background-color: rgba(100, 100, 100, 0.3); /* Button background color */
            color: white; /* Button text color */
            border: none; /* Remove button border */
            padding: 14px 16px; /* Adjust padding to change button size */
            font-size: 1.3vw; /* Adjust font size as needed */
            cursor: pointer; /* Add pointer cursor on hover */
            border-radius: 10px; /* Rounded corners */
            text-align: center;
            text-decoration: none;
            width: 200px; /* Adjust button width */
            display: inline-block; /* Display as inline block */
            margin: 0 auto; /* Center the button horizontally */
            margin-top: 40px; /* Add margin to the top to move it down */
        }
        .custom-button2 {
            background-color: rgba(100, 100, 100, 0.3); /* Button background color */
            color: white; /* Button text color */
            border: none; /* Remove button border */
            padding: 14px 16px; /* Adjust padding to change button size */
            font-size: 1.3vw; /* Adjust font size as needed */
            cursor: pointer; /* Add pointer cursor on hover */
            border-radius: 10px; /* Rounded corners */
            text-align: center;
            text-decoration: none;
            width: 200px; /* Adjust button width */
            display: inline-block; /* Display as inline block */
            margin: 0 auto; /* Center the button horizontally */
            margin-top: 15px; /* Add margin to the top to move it down */
        }
        /* Hover effect */
        .custom-button:hover, .custom-button2:hover {
            background-color: #00ccf5bb;
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

<br><br><br><br><br><br><br><br><br><br><br>
<!-- Add this section within the <body> tag where you want the content -->
<div class="big-blocks">
        <!-- Line 1 -->
        <div class="line-tape" id="Clubs"><div class="middle-text">البرامج التأسيسية</div></div>
        <div class="big-block">
    <p>البرنامج التأسيسي للأطفال</p>
    <img src="https://static.wixstatic.com/media/203fb2_c372cf7db1e64f618a2738b4b17cdea4~mv2.jpg/v1/fill/w_594,h_345,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/__37_edited.jpg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";> من 11 إلى 14 سنة <br><br>سيساعد هذا النادي على تكوين وتنمية اهتمام طفلك بالفضاء وعلوم الفلك عن طريق تقديم دروس ممتعة وورش عمل شيقة </p>
    <a class="custom-button" href="">تسجيل</a>
</div>
<div class="big-block">
    <p>البرنامج التأسيسي لليافعين</p>
    <img src="https://static.wixstatic.com/media/203fb2_015001004eb243e78ff2857a02580c18~mv2.jpeg/v1/fill/w_594,h_345,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/WhatsApp%20Image%202022-10-20%20at%201_38_35%20PM.jpeg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";> من 15 إلى 18 سنة <br><br>هذا النادي يطمح لمساعدة ابنك/ابنتك على صناعة مستقبلهم، عن طريق تزويدهم بالمعلومات والمهارات اللازمة التي تساعدهم على إيجاد مستقبل وظيفي في مجال الفلك وعلوم الفضاء</p>
    <a class="custom-button2" href="">تسجيل</a>
</div>
<div class="big-block">
    <p>البرنامج التأسيسي للشباب</p>
    <img src="https://static.wixstatic.com/media/203fb2_ac2fef1a52184e508d258ab1c63fba6c~mv2.jpeg/v1/fill/w_594,h_345,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/WhatsApp%20Image%202022-10-20%20at%201_33_07%20PM.jpeg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";> من 18 فأكثر <br><br>إذا كنت طالب جامعي وتبحث عن وسيلة لدخول عالم الفلك وعلم الفضاء، سنساعدك على اتخاذ الخطوات الأولى لمستقبلك!</p>
    <a class="custom-button" href="">تسجيل</a>
</div>
        
        
        
        <!-- Line 2 -->
        <div class="line-tape" id="Research"><div class="middle-text">البرامج البحثية</div></div>
        <div class="big-block">
    <p> (ExoMol) برنامج إكزمول</p>
    <p>(مستمر)</p>
    <img src="https://static.wixstatic.com/media/203fb2_783c9da9949e47c49b3514eb2860b7f1~mv2.jpg/v1/fill/w_594,h_315,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/IMG_8567_edited.jpg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";><br><br>إكزومول هو مشروع يهتم بعمل قاعدة بيانات تحتوي أطياف الجزيئات المهمة لرصد إشارات الحياة في الكواكب الخارجية</p>
    <br>
    <!--<a class="custom-button" href="">تسجيل</a>-->
</div>
<div class="big-block">
    <p> (CASPAR) برنامج كاسبر </p>
    <p>(مستمر)</p>
    <img src="https://static.wixstatic.com/media/203fb2_dc9c716f6a2f47389add45c5cf81beb1~mv2.jpg/v1/fill/w_594,h_315,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/203fb2_dc9c716f6a2f47389add45c5cf81beb1~mv2.jpg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";><br><br>مشروع  كامبريدج-عمان حول أبحاث الفيزياء الفلكية هو تعاون بين مؤسسة آستروجو ومركز هارفارد سميثسونيان للفيزياء الفلكية والذي بدأ في يناير 2017 ويهتم بشكل رئيسي برصد الكواكب الخارجية بطريقة العبور</p>
   <!-- <a class="custom-button" href="">تسجيل</a>-->
</div>
<div class="big-block">
    <p>(DIS) برنامج علم البيانات الكثيفة</p>
    <p>(2019-2022)</p>
    <img src="https://static.wixstatic.com/media/203fb2_e77443c56e0644b48426367c41623b8a~mv2.jpeg/v1/fill/w_594,h_315,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/photo1664879900.jpeg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";>فيه 29 طالب و 10 مشرفين<br><br>إشتمل على العديد من جوانب علم البيانات والتعلم الآلي، وكيفية تطبيق هذه المهارات في علوم الفضاء</p>
    <!--<a class="custom-button" href="">تسجيل</a-->
</div>
        
        
        <!-- Line 3 -->
        <div class="line-tape"><div class="middle-text">المسابقات</div></div>
        <div class="big-block">
    <p>مسابقة المعلمين</p>
    <img src="https://static.wixstatic.com/media/203fb2_f598fae8f1304a8598ceb05e4f4b0a5e~mv2.jpg/v1/fill/w_598,h_445,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/20221005_142220.jpg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";>في اليوم الثالث للأسبوع العالمي لعلوم الفلك والفضاء لعام 2023 <br><br>مسابقة استروجو في علوم الفضاء والفلك للمعلمين</p>
    <!--<a class="custom-button" href="" >المزيد</a>-->
</div>
<div class="big-block">
    <p> مسابقة الطلاب</p>
    <img src="https://static.wixstatic.com/media/203fb2_3250dd7f75004ae29af2fe25be9c3c8f~mv2.jpg/v1/fill/w_598,h_445,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/20221005_141415.jpg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";> <br><br> !!!قريبا </p>
    <a class="custom-button" href="">تسجيل</a>
</div>

        
        
        <!-- Line 4 -->
        <div class="line-tape" id="Events" ><div class="middle-text">برامج اليوم الواحد</div></div>
        <div class="big-block">
    <p>رحلة الرصد الفلكية</p>
    <img src="Pics/IMG_8976.JPG" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";>ما في احلى من السماء لما تكون مليانة نجوم ومجرات وسدم 
إبعد عن اجواء المدينة الصاخبة وجرب القعدة حولين النار مع كاسة الشاي يلي على الحطب تحت النجوم وصفاء البال مع اجواء صحراوية عائلية بامتياز 
وفوق كل هاد رح تكون الكم فرصة تتعلموا عن السماء بنجومها وقصصها بحسب ثقافتنا القديمة والثقافات الاخرى </p>
<a class="custom-button" href="">تسجيل</a>
</div>




<!--
        
        <div class="line-tape"><div class="middle-text">المنتجات</div></div>
        <div class="big-block">
    <p>نظارات كسوف الشمس</p>
    <img src="https://static.wixstatic.com/media/203fb2_d6206dc5f0544501b842b384e7be1196~mv2.jpeg/v1/fill/w_368,h_303,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/309716119_1891759454492475_5250015013052149598_n.jpeg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";><br><br>هذه النظارات تتيح لك النظر إلى الشمس بشكل مباشر دون أن تتأذى عينيك </p>
    <a class="custom-button" href="">شراء</a>
</div>

<div class="big-block">
    <p>ملصقات الفضاء</p>
    <img src="https://static.wixstatic.com/media/203fb2_ecabd80e05614a569e075f9991d56d5b~mv2.jpg/v1/fill/w_280,h_230,al_c,lg_1,q_80,enc_auto/L20.jpg" alt="Image 1" width="100%" height="50%">
    <p style="font-size: 18px";> ملصقات الفضاء للتعليق على الحائط <br><br> تحتوي على السدم الكونية والمجرات والنجوم والكواكب </p>
    <a class="custom-button" href="">شراء</a>
    </div>
</div>
-->



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