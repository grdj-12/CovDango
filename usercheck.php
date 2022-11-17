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
    <title>COVID-19 Diagnosis - CovDango</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>

    <link rel="stylesheet" href="css/dango_style.css">

    <!-- <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css"/>
    <script defer src="https://pyscript.net/latest/pyscript.js"></script> -->
    <!-- <py-env>
        - numpy
        - matplotlib
        - paths:
            - ./symptom_tester(python)/run.py
            - ./symptom_tester(python)/models/utils.py
            - ./symptom_tester(python)/models/preprocess.py
            - ./symptom_tester(python)/models/decision_tree.py
    </py-env> -->
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
        <div class="symptoms_container container">
            <h1 class="symptoms_heading">Select Your Symptoms</h1>

            <div class="slider">
                <div class="item" id="slide-1">
                    <div class="symptom_img"><img src="images/breathing_problem.png" alt="breathing_problem.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Breathing Difficulties</p>
                    </button>
                </div>
                <div class="item" id='slide-2'>
                    <div class="symptom_img"><img src="images/fever.png" alt="fever.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Fever</p>
                    </button>
                </div>

                <div class="item" id='slide-3'>
                    <div class="symptom_img"><img src="images/cough.png" alt="cough.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Cough</p>
                    </button>
                </div>

                <div class="item" id='slide-4'>
                    <div class="symptom_img"><img src="images/sore_throat.png" alt="sore_throat.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Sore Throat</p>
                    </button>
                </div>

                <div class="item" id='slide-5'>
                    <div class="symptom_img"><img src="images/runny_nose.png" alt="runny_nose.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Runny Nose</p>
                    </button>
                </div>
                
                <div class="item" id='slide-6'>
                    <div class="symptom_img"><img src="images/asthma.png" alt="asthma.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Asthma</p>
                    </button>
                </div>

                <div class="item" id='slide-7'>
                    <div class="symptom_img"><img src="images/pneumonia.png" alt="pneumonia.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Lung Disease</p>
                    </button>
                </div>

                <div class="item" id='slide-8'>
                    <div class="symptom_img"><img src="images/headache.png" alt="headache.png"></div>
                    <button class="selection">
                        p class="symptom_text">Headaches</p>
                    </button>
                </div>

                <div class="item" id='slide-9'>
                    <div class="symptom_img"><img src="images/heart_problem.png" alt="heart_problem.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Heart Disease</p>
                    </button>
                </div>

                <div class="item" id='slide-10'>
                    <div class="symptom_img"><img src="images/diabetes.png" alt="diabetes.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Diabetes</p>
                    </button>
                </div>

                <div class="item" id='slide-11'>
                    <div class="symptom_img"><img src="images/hypertension.png" alt="hypertension.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Hypertension</p>
                    </button>
                </div>

                <div class="item" id='slide-12'>
                    <div class="symptom_img"><img src="images/tired.png" alt="tired.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Fatigue</p>
                    </button>
                </div>

                <div class="item" id='slide-13'>
                    <div class="symptom_img"><img src="images/gastro.png" alt="gastro.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Gastrointestinal Problems</p>
                    </button>
                </div>

                <div class="item" id='slide-14'>
                    <div class="symptom_img"><img src="images/cold.png" alt="cold.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Body Chills</p>
                    </button>
                </div>

                <div class="item" id='slide-15'>
                    <div class="symptom_img"><img src="images/dizziness.png" alt="dizziness.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Dizziness</p>
                    </button>
                </div>

                <div class="item" id='slide-16'>
                    <div class="symptom_img"><img src="images/body_pain.png" alt="body_pain.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Body and Muscle Pain</p>
                    </button>
                </div>

                <div class="item" id='slide-17'>
                    <div class="symptom_img"><img src="images/rash.png" alt="rash.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Body Rashes</p>
                    </button>
                </div>

                <div class="item" id='slide-18'>
                    <div class="symptom_img"><img src="images/loss_of_smell.png" alt="loss_of_smell.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Loss of Smell</p>
                    </button>
                </div>

                <div class="item" id='slide-19'>
                    <div class="symptom_img"><img src="images/loss_of_taste.png" alt="loss_of_taste.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Loss of Taste</p>
                    </button>
                </div>

                <div class="item" id='slide-20'>
                    <div class="symptom_img"><img src="images/red_eye.png" alt="red_eye.png"></div>
                    <button class="selection">
                        <p class="symptom_text">Irritated Eyes</p>
                    </button>
                </div>
                <!-- <p class="overview_info">
                    <py-script src="symptom_tester(python)/models/utils.py"></py-script>
                    <py-script src="symptom_tester(python)/models/preprocess.py"></py-script>
                    <py-script src="symptom_tester(python)/models/decision_tree.py"></py-script>
                    <py-script src="symptom_tester(python)/run.py"></py-script>
                </p> -->
            </div>

        </div>
        
    </section>

    <section id="main_content">
        <div class="symptoms_container container">
            <h1 class="symptoms_heading">
                <div id="center">    
                    <div class="btn_center">
                        <button type="submit" class="more_info_btn">
                            <a href="covid_result(negative).php"
                                class="btn_text">Submit<br>(Negative)</a>
                            <i class="fas fa-angle-right caret_icon"></i>
                        </button>
                    </div>
                    <div class="btn_center">
                        <button type="submit" class="more_info_btn">
                            <a href="covid_result(positive).php"
                                class="btn_text">Submit<br>(Positive)</a>
                            <i class="fas fa-angle-right caret_icon"></i>
                        </button>
                    </div>
                </div>
            </h1>
        </div>
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