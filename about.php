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
    <title>About Us - CovDango</title>

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

    <section id="background">
        <div class="cards_container container">
            <div class="overview_card">
                
                <h1 class="overview_heading">Background</h1>
                <div class="overview_img"></div>
                <p class="overview_info">
                    Since the Coronavirus disease outbreak during 2020, global social and economic sectors have
                    been impacted heavily. Amidst the COVID-19 pandemic, people have faced decreased 
                    movement between places, less chances for employment, and increasing xenophobia which 
                    may have long-lasting social effects. Moreover, global Gross Domestic Product (GDP) will
                    see a greater decrease (3% drop in 2020) than the 2008 global financial crisis, showing how 
                    severely the global economy has been hit. 
                 </p>   
                 <p class="overview_info">
                    Furthermore, there has been great tension in 
                    communities due to the fear of the virus along with social unrest arising from travel bans and
                    lockdown mandates. Thus, this has led to people feeling a high level of unhappiness. 
                </p>   
                <p class="overview_info">
                    As of the 17th of November 2022, there has been a reported number of 640 million Coronavirus cases 
                    and over six million related deaths. Currently, there are over 13 million active Coronavirus 
                    cases in the world. While the Coronavirus is similar to the common flu (Influenza viruses), 
                    the Coronavirus is much more contagious. 
                </p>   
                <p class="overview_info">
                    The biggest threat of the Coronavirus is that the 
                    infected may be asymptomatic while some have delayed symptoms which makes it very 
                    difficult to detect before it is too late. Furthermore, the Coronavirus can also lead to further 
                    complications such as blood clots or Multisystem Inflammatory Syndrome in Children (MIS-C) and Adults (MIS-A). 
                </p>   
                <p class="overview_info">
                    Thus, the Coronavirus should not be treated as lightly as the 
                    common flu. Common symptoms of COVID-19 may include fever, dry cough, higher levels 
                    of fatigue, great urge to expectorate, chest tightness, muscle and joint pain, shortness of breath. 
                </p>   
                <p class="overview_info">
                    Judging from these statistics, the Coronavirus disease is not something to be taken 
                    lightly due to its infectivity, severity, and lethality along with its lasting effects on society. 
                    As such, it is important to detect early signs of the disease to prevent it from spreading to other parties.
                </p>   
                <p class="overview_info">
                    Over these two years, better knowledge and more accurate statistics regarding the Coronavirus 
                    disease have been obtained stemming from extensive research and a larger patient sample size
                    In light of this, many organisations worldwide have taken an important step in developing 
                    detection systems that are able to accurately predict and identify potential Coronavirus cases.
                </p>   
                <p class="overview_info">
                    However, the danger of COVID-19 is far from over. Even today, there are multiple variants 
                    and mutations which are widely different from the original virus strain. As such, these 
                    variants might not have the same symptoms or cures, making current vaccines possibly 
                    irrelevant for future strains. 
                </p>   
                <p class="overview_info">
                    Thus, it is important for humanity to not be complacent and strive 
                    to further develop medical facilities such as these detection systems to combat any unforeseen
                    virus threats. Following that, COVID-19 detection systems can better predict and determine
                    potential carriers of the virus by analysing available datasets and finding common traits such 
                    as symptoms, cures, and other factors via artificial intelligence (AI) applications such as 
                    machine learning (ML). 
                </p>   
                <p class="overview_info">
                    In light of these facts, the aim of this project is to produce a simpler COVID-19 detection
                    system that can produce similar results by determining if a patient has been infected by the 
                    Coronavirus based on their symptoms and available datasets. This process will be achieved 
                    through the usage of ML algorithms, specifically the decision tree algorithm
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.worldometers.info/coronavirus/" target="_blank"
                            class="btn_text">View Statistics</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>            

    <section id="introduction">
        <div class="cards_container container">
            <div class="overview_card">
                <h1 class="overview_heading">What is CovDango?</h1>
                <div><img src="./images/logo.png" class="logo_img"></div>
                <p class="overview_info">                
                    CovDango is a web-based COVID-19 detection system utilising AI and ML algorithms. 
                    The utilisation of these algorithms are used to accurately predict if a patient has COVID-19 based on their symptoms. 
                    To achieve the best possible detection system, CovDango has been tested with various algorithms. 
                    After countless research and testing, the decision tree algorithm was chosen to be the final ML algorithm for this system.
                </p>

                <h1 class="overview_heading">What are Decision Trees?</h1>
                <p class="overview_info">
                    Decision trees get their name from 
                    being graphs which show available choices and their respective results in the form of trees. 
                    The nodes in the graph represent events or choices while the edges represent the decision rule 
                    or conditions. Following that, while each node can represent attributes to be classified, 
                    each branch can represent a value in which the node can take. Decision trees are 
                    great for classification purposes as the algorithm groups attributes following their values. 
                </p>
                <p class="overview_info">
                    Decision trees are easy to understand and implement due to their simplicity. These types 
                    of models are known as white box models. Additionally, the decision process is the most 
                    similar algorithm to a human's thinking process which makes it more intuitive for the 
                    developing team. In light of this trait, most computational problems can be 
                    normalised and expressed as a decision tree no matter how big or small the decision tree needs 
                    to be as long as the logic makes sense. The algorithm's function will accept a vector of 
                    attribute values as the input and returns the decision as a single output value. Decision 
                    trees at their core work through Boolean classification by classifying the input as either a true 
                    or false attribute based on their input and programming logic which makes it very flexible at 
                    problem solving.
                </p>
                <p class="overview_info">
                    Generally, decision trees will be trained with greedy approach algorithms (from top to bottom) 
                    such as CART (used by Scikit-Learn library) or ID3 to find and ensure that the feature/node 
                    selected is optimal. Either Gini impurity measure or entropy impurity measure can be used
                    to calculate the level of information gain from data (high measures = low gain, low measures 
                    = high gain). Both methods do not differ much (Gini is faster but entropy can produce 
                    more balanced trees). Entropy is the randomness or disorder that arises from impurities in 
                    data which leads to low information gain. The goal is to keep testing data by calculating 
                    their Gini impurity measure or entropy measure to determine which feature will have the most
                    information gain. Each node will have its entropy and gain measured until there is zero 
                    entropy (no more randomness, only one possible outcome) and only leaf nodes left (no more
                    decision nodes). This is because the presence of decision nodes means the final outcome 
                    (leaf nodes) of said nodes has not been reached yet.
                </p>
                <p class="overview_info">
                    Overfitting is a common issue that occurs when the model memorises noise from training data 
                    which deviates the accuracy of the model. The algorithm will attempt to only reduce 
                    training dataset errors which can lead to a higher number of actual test set errors. 
                    Overfitting becomes more likely when the hypothesis space and number of input attributes 
                    increase. Conversely, increasing the number of training examples decrease the likelihood 
                    of overfitting. A common way to combat overfitting with decision trees is pruning which 
                    works by eliminating test nodes that are irrelevant (data with only noise) from a full decision 
                    tree. Irrelevant data is found by conducting a statistical significance test (with the 
                    assumption that there is no underlying pattern/null hypothesis) which calculates the theoretical 
                    deviation that the algorithm should allow. This theoretical deviation is then compared with 
                    the actual deviation from real data. A low level of deviation will mean that the data pattern 
                    shows significance. Pruning allows the algorithm to be more tolerant towards noise. 
                </p>
            </div>
        </div>
    </section>

    <section id="tools">
        <div class="symptoms_container container">
            <h1 class="symptoms_heading">Tools Used</h1>

            <div class="slider">
                <div class="item" id='slide-1'>
                    <div class="symptom_img"><img src="images/spyder.png" alt="spyder.png"></div>
                    <p class="symptom_text">Anaconda Spyder</p>
                </div>

                <div class="item" id='slide-2'>
                    <div class="symptom_img"><img src="images/python.png" alt="python.png"></div>
                    <p class="symptom_text">Python</p>
                </div>

                <div class="item" id='slide-3'>
                    <div class="symptom_img"><img src="images/vsc.png" alt="vsc.png"></div>
                    <p class="symptom_text">Visual Studio Code</p>
                </div>

                <div class="item" id='slide-4'>
                    <div class="symptom_img"><img src="images/html.png" alt="html.png"></div>
                    <p class="symptom_text">HTML5</p>
                </div>

                <div class="item" id='slide-5'>
                    <div class="symptom_img"><img src="images/css.png" alt="css.png"></div>
                    <p class="symptom_text">CSS3</p>
                </div>

                <div class="item" id='slide-6'>
                    <div class="symptom_img"><img src="images/js.png" alt="js.png"></div>
                    <p class="symptom_text">JavaScript</p>
                </div>

                <div class="item" id='slide-7'>
                    <div class="symptom_img"><img src="images/XAMPP.png" alt="xampp.png"></div>
                    <p class="symptom_text">XAMPP</p>
                </div>

                <div class="item" id='slide-8'>
                    <div class="symptom_img"><img src="images/php.png" alt="php.png"></div>
                    <p class="symptom_text">PHP</p>
                </div>

                <div class="item" id='slide-9'>
                    <div class="symptom_img"><img src="images/mysql.png" alt="mysql.png"></div>
                    <p class="symptom_text">MySQL</p>
                </div>
            </div>
        </div>
    </section>                

    <section id="contact">
        <div class="cards_container container">
            <div class="overview_card">
                <h1 class="overview_heading">Contact Us</h1>
                <div class="contact_img"></div>
                <p class="overview_info">                
                    You may direct any personal or business enquiries via our email:
                    <br><br>
                    simon.ikmy12@gmail.com
                </p>
                <p class="overview_info">                
                    Additionally, you can also visit our GitHub and LinkedIn sites!
                    <br><br>
                    Links will be in the footer section of this page.
                </p>
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
</body>
</html>