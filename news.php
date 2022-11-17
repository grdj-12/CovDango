<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
    if(session_id() == '' || !isset($_SESSION)){session_start();}
    if (isset($_SESSION["username"])) {header ("location:index.php");}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 News - CovDango</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/dango_style.css">
</head>

<body>
    <nav id="navbar">
        <div class="navbar_container">
            <div class="logo_links">
                <a href="index.php">
                    <img src="./images/logo.png" alt="Nav bar icon" width="64" height="64">
                </a>
                <a href="index.php" class="home_link">
                    <p class="logo">Cov<span class="logo_span">Dango</span></p>
                </a>
            </div>
            
            <ul class="nav_links">
                <li class="link_li"><a href="index.php" class="link_href active">Home</a></li>
                <li class="link_li"><a href="symptoms.php" class="link_href active">Symptoms</a></li>
                <li class="link_li"><a href="usercheck.php" class="link_href active">Diagnosis</a></li>
                <li class="link_li"><a href="steps.php" class="link_href active">Prevention</a></li>
                <li class="link_li"><a href="news.php" class="link_href active">News</a></li>
                <li class="link_li"><a href="statistics.php" class="link_href active">Statistics</a></li>
                <?php
                if(isset($_SESSION['email'])){
                    echo '<li class="link_li"><a href="profile.php" class="link_href active">Profile</a></li>';
                    echo '<li class="link_li"><a href="logout.php" class="link_href active">Log Out</a></li>';
                }
                else{
                    echo '<li class="link_li"><a href="login.php" class="link_href active">Log In</a></li>';
                    echo '<li class="link_li" class="active"><a href="registration.php" class="link_href active">Register</a></li>';
                }
                ?>  
                <li class="link_li"><a href="about.php" class="link_href active">About</a></li>               
                </ul>         
            </ul>
        </div>
    </nav>

    <section id="main_content">
        <div class="cards_container container">
            <div class="overview_card">
                
                <h1 class="overview_heading"><span>COVID-19</span> Related Articles</h1>
                <rssapp-imageboard id="tmgGth6i3kZpMbhn"></rssapp-imageboard>
                <script src="https://widget.rss.app/v1/imageboard.js" type="text/javascript" async></script>
                <p>
                    Credits to   <a href="https://rss.app" class="link_href active">RSS.app</a>
                </p>
    </section>       
    <div id="jump_top" class="btn-cont">
        <button type="submit" class="more_info_btn">
            <a href="#"class="btn_text">Back to Top</a>
            <i class="fas fa-angle-up caret_icon"></i>
        </button>
    </div>         

    <section id="footer">
        <div class="footer_container container">
            <p class="copyright">&copy; 2022 | CovDango | All Rights Reserved.</p>
            <div class="social-icons">
                <a href="https://github.com/grdj-12/CovDango.git" class="social-link"><i
                        class="fab fa-github social-icon"></i></a>
                <a href="https://www.linkedin.com/in/simonkmy/" target="_blank" class="social-link"><i
                        class="fab fa-linkedin social-icon"></i></a>
                <a href="mailto:simon.ikmy12@gmail.com" target="_blank"
                        class="far fa-envelope social-icon"></i></a>
            </div>
        </div>
    </section>
</body>
</html>