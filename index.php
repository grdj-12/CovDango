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
    <title>Home - CovDango</title>

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
                
                <h1 class="overview_heading"><span>Coronavirus</span> Disease (COVID-19) Outbreak <br></h1>
                <div class="overview_img"></div>
                
                <p class="overview_info">
                    Coronavirus is an infectious disease caused by severe acute
                    respiratory syndrome coronavirus 2. It was first identified in
                    December 2019 in Wuhan, China, and has since spread globally,
                    resulting in an ongoing pandemic. 
                </p>
                <p class="overview_info">
                    As of 14 May 2020, more than 4.37
                    million cases have been reported across 188 countries and
                    territories, resulting in more than 297,000 deaths. More than 1.56
                    million people have recovered. 
                </p>
                <p class="overview_info">
                    Common symptoms include fever, cough,
                    fatigue, shortness of breath, and loss of smell and taste. While the
                    majority of cases result in mild symptoms, some progress to acute
                    respiratory distress syndrome (ARDS), multi-organ failure, septic
                    shock, and blood clots.
                </p>
                <p class="overview_info">
                    The virus is primarily spread between people
                    during close contact, most often via small droplets produced by
                    coughing, sneezing, and talking. 
                </p>
                <h1 class="overview_heading">Problem Statement<br></h1>
                <p class="overview_info">
                    The main problem to be addressed is producing a simple yet efficient and reliable COVID-19 
                    detection system with acceptable prediction accuracy. 
                    <br>
                    This problem is difficult to tackle as 
                    humans cannot easily interpret complex data from datasets and trends in an objective and 
                    accurate manner without the help of technological tools. 
                </p>    
                <p class="overview_info">
                    Fortunately, this can be achieved with 
                    the help of artificial intelligence (AI). Specifically, machine learning (ML) algorithms will be 
                    used to analyse available COVID-19 related datasets to produce accurate forecasts and 
                    detection accuracy. 
                </p>    
                <p class="overview_info"> 
                    The ML algorithm that will be used for this system in particular is the 
                    decision tree algorithm. 
                    <br>
                    To achieve this, extensive research and functional comparisons will 
                    have to be made on pre-existing COVID-19 detection systems and other similar health systems 
                    that are readily available to the public. However, ML related theories and applications are 
                    extremely technical and require a large amount of prior reading and understanding. 
                    Furthermore, there are also many different ML algorithms which will require proper 
                    comparisons and evaluations between them. Therefore, extensive research will be required to 
                    properly understand these topics. 
                </p>    
                <p class="overview_info">
                    Additionally, Coronavirus related topics also require research 
                    and proper technical understanding in order to create a functional detection system with 
                    minimal issues. 
                    <br>
                    Therefore, relevant topics such as symptoms, risk factors, and other related 
                    datasets will need to be studied beforehand to achieve an appropriate level of comprehension.
                </p>    
                <p class="overview_info">
                    Moving on, data acquisition will also be important as lots of data will be needed for both 
                    personal knowledge as well as the ML-based detection system. As such, some time will be 
                    needed to find and collect relevant datasets. 
                    <br>
                    Additionally, the system must also be able to accept 
                    data entries from its users to improve its accuracy. 
                </p>    
                <p class="overview_info"> 
                    Moreover, there will be some computational 
                    and processing challenges as this detection system will require a lot of processing power and 
                    allocation like most AI-based systems. 
                    <br>
                    Thus, it is also important to make the system have 
                    acceptable running performance while also reducing the processing load wherever possible to 
                    create a better user and developer experience.                    
                </p>
                <br><br>
                

                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.healthline.com/health/coronavirus-covid-19" target="_blank"
                            class="btn_text">Know More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>

                    <button type="submit" class="more_info_btn symptoms_btn">
                        <a href="#symptoms" class="btn_text_2">Symptoms</a>
                        <i class="fas fa-angle-down caret_icon"></i>
                    </button>
                </div>

                
            </div>

            <br><br><br>

            <div class="total_cases_card">
                <div class="total_cases_cols">

                        <div class="total_deaths">
                            <br>
                            <h4 class="cases_number total_death_number" id="todayDeaths"></h4>
                            <h3 class="total_deaths_heading">Today's Deaths</h3>
                            <br>
                        </div>

                        <div class="total_deaths">
                            <br>
                            <h4 class="cases_number total_death_number" id="deaths"></h4>
                            <h3 class="total_deaths_heading">Total Deaths</h3>
                            <br>
                        </div>

                        <div class="total_recovered">
                            <br>
                            <h4 class="cases_number total_recovered_number" id="todayRecovered"></h4>
                            <h3 class="total_recovered_heading">Today's Recoveries</h3>
                            <br>
                        </div>

                        <div class="total_recovered">
                            <br>
                            <h4 class="cases_number total_recovered_number" id="recovered"></h4>
                            <h3 class="total_recovered_heading">Total Recoveries</h3>
                            <br>
                        </div>

                        <div class="total_confirmed">
                            <br>
                            <h4 class="cases_number total_infected_number" id="todayCases"></h4>
                            <h3 class="total_confirmed_heading">Today's Cases</h3>
                            <br>
                        </div>

                        <div class="total_confirmed">
                            <br>
                            <h4 class="cases_number total_infected_number" id="cases"></h4>
                            <h3 class="total_confirmed_heading">Total Cases</h3>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section id="symptoms">
        <div class="symptoms_container container">
            <h1 class="symptoms_heading">Common Symptoms of COVID-19</h1>

            <div class="slider">
                <div class="item" id='slide-1'>
                    <div class="symptom_img"><img src="images/breathing_problem.png" alt="breathing_problem.png"></div>
                    <p class="symptom_text">Breathing Difficulties</p>
                </div>

                <div class="item" id='slide-2'>
                    <div class="symptom_img"><img src="images/fever.png" alt="fever.png"></div>
                    <p class="symptom_text">Fever</p>
                </div>

                <div class="item" id='slide-3'>
                    <div class="symptom_img"><img src="images/cough.png" alt="cough.png"></div>
                    <p class="symptom_text">Cough</p>
                </div>

                <div class="item" id='slide-4'>
                    <div class="symptom_img"><img src="images/sore_throat.png" alt="sore_throat.png"></div>
                    <p class="symptom_text">Sore Throat</p>
                </div>

                <div class="item" id='slide-5'>
                    <div class="symptom_img"><img src="images/runny_nose.png" alt="runny_nose.png"></div>
                    <p class="symptom_text">Runny Nose</p>
                </div>
                
                <div class="item" id='slide-6'>
                    <div class="symptom_img"><img src="images/asthma.png" alt="asthma.png"></div>
                    <p class="symptom_text">Asthma</p>
                </div>

                <div class="item" id='slide-7'>
                    <div class="symptom_img"><img src="images/pneumonia.png" alt="pneumonia.png"></div>
                    <p class="symptom_text">Lung Disease</p>
                </div>

                <div class="item" id='slide-8'>
                    <div class="symptom_img"><img src="images/headache.png" alt="headache.png"></div>
                    <p class="symptom_text">Headaches</p>
                </div>

                <div class="item" id='slide-9'>
                    <div class="symptom_img"><img src="images/heart_problem.png" alt="heart_problem.png"></div>
                    <p class="symptom_text">Heart Disease</p>
                </div>

                <div class="item" id='slide-10'>
                    <div class="symptom_img"><img src="images/diabetes.png" alt="diabetes.png"></div>
                    <p class="symptom_text">Diabetes</p>
                </div>

                <div class="item" id='slide-11'>
                    <div class="symptom_img"><img src="images/hypertension.png" alt="hypertension.png"></div>
                    <p class="symptom_text">Hypertension</p>
                </div>

                <div class="item" id='slide-12'>
                    <div class="symptom_img"><img src="images/tired.png" alt="tired.png"></div>
                    <p class="symptom_text">Fatigue</p>
                </div>

                <div class="item" id='slide-13'>
                    <div class="symptom_img"><img src="images/gastro.png" alt="gastro.png"></div>
                    <p class="symptom_text">Gastrointestinal Problems</p>
                </div>

                <div class="item" id='slide-14'>
                    <div class="symptom_img"><img src="images/cold.png" alt="cold.png"></div>
                    <p class="symptom_text">Body Chills</p>
                </div>

                <div class="item" id='slide-15'>
                    <div class="symptom_img"><img src="images/dizziness.png" alt="dizziness.png"></div>
                    <p class="symptom_text">Dizziness</p>
                </div>

                <div class="item" id='slide-16'>
                    <div class="symptom_img"><img src="images/body_pain.png" alt="body_pain.png"></div>
                    <p class="symptom_text">Body and Muscle Pain</p>
                </div>

                <div class="item" id='slide-17'>
                    <div class="symptom_img"><img src="images/rash.png" alt="rash.png"></div>
                    <p class="symptom_text">Body Rashes</p>
                </div>

                <div class="item" id='slide-18'>
                    <div class="symptom_img"><img src="images/loss_of_smell.png" alt="loss_of_smell.png"></div>
                    <p class="symptom_text">Loss of Smell</p>
                </div>

                <div class="item" id='slide-19'>
                    <div class="symptom_img"><img src="images/loss_of_taste.png" alt="loss_of_taste.png"></div>
                    <p class="symptom_text">Loss of Taste</p>
                </div>

                <div class="item" id='slide-20'>
                    <div class="symptom_img"><img src="images/red_eye.png" alt="red_eye.png"></div>
                    <p class="symptom_text">Irritated Eyes</p>
                </div>
                
                <div class="item" id='slide-21'>
                    <div class="symptom_img"><img src="images/virus.png" alt="virus.png"></div>
                    <a href="symptoms.php"><p class="symptom_text">Click to Learn More</p></a>
                </div>
            </div>
        </div>
    </section>

    <section id="preventions">
        <div class="symptoms_container prevention_container container">
            <h1 class="symptoms_heading">Prevention and Cautionary Measures</h1>

            <div class="slider prevention_slider">
                <div class="item" id='slide-1'>
                    <div class="symptom_img prevention_img"><img src="images/mask.png" alt="mask.png"></div>
                    <p class="symptom_text">Wear Medical Masks</p>
                </div>

                <div class="item" id='slide-2'>
                    <div class="symptom_img prevention_img"><img src="images/wash.png" alt="wash.png"></div>
                    <p class="symptom_text">Wash Hands Regularly</p>
                </div>

                <div class="item" id='slide-3'>
                    <div class="symptom_img prevention_img"><img src="images/touch.png" alt="touch.png"></div>
                    <p class="symptom_text">Do Not Touch Your Face</p>
                </div>

                <div class="item" id='slide-4'>
                    <div class="symptom_img prevention_img"><img src="images/cough_covered.png" alt="cough_covered.png"></div>
                    <p class="symptom_text">Cover Your Coughs</p>
                </div>

                <div class="item" id='slide-5'>
                    <div class="symptom_img prevention_img"><img src="images/disinfectant.png" alt="disinfectant.png"></div>
                    <p class="symptom_text">Clean and Disinfect</p>
                </div>

                <div class="item" id='slide-6'>
                    <div class="symptom_img prevention_img"><img src="images/distance.png" alt="distance.png"></div>
                    <p class="symptom_text">Social Distancing</p>
                </div>

                <div class="item" id='slide-7'>
                    <div class="symptom_img prevention_img"><img src="images/health.png" alt="health.png"></div>
                    <a href="steps.php"><p class="symptom_text">Click to Learn More</p></a>
                </div>
            </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            init()

            function init(){
                var url="https://disease.sh/v3/covid-19/all"

                $.get(url,function(data){
                    console.log(data)

                    data = `${data.cases}`

                    $("#cases").html(data)
                })

                $.get(url,function(data){
                    console.log(data)

                    data = `${data.todayCases}`

                    $("#todayCases").html(data)
                })

                $.get(url,function(data){
                    console.log(data)

                    data = `${data.deaths}`

                    $("#deaths").html(data)
                })

                $.get(url,function(data){
                    console.log(data)

                    data = `${data.todayDeaths}`

                    $("#todayDeaths").html(data)
                })

                $.get(url,function(data){
                    console.log(data)

                    data = `${data.recovered}`

                    $("#recovered").html(data)
                })

                $.get(url,function(data){
                    console.log(data)

                    data = `${data.todayRecovered}`

                    $("#todayRecovered").html(data)
                })
            }
        })
    </script>
</body>
</html>