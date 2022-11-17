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
    <title>Cautionary Steps - CovDango</title>

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
            <div class="overview_card" id="steps_heading">
                <h1 class="overview_heading">Take These <span>Steps</span> to Protect Yourself and Your Loved Ones from <span>COVID-19</span>!</h1>
            </div>
        </div>
        
        <div class="cards_container container">
            <div class="overview_card">
                <h1 class="overview_heading"> Always Wear a <span>Mask</span></h1>
                <img src="./images/mask.png" class="steps_img">
                
                <p class="overview_info">
                    <h3 class="total_confirmed_heading">1. They reduce viral transmission (if worn correctly).</h3>
                </p>
                <p class="overview_info">
                    "Surgical masks and cloth coverings can reduce viral transmission by 70% if everyone wears them and wears them correctly over [their] nose and mouth," 
                    Purvi Parikh, MD, an allergist with Allergy & Asthma Network and clinical assistant professor at the Department of Medicine at NYU Grossman School of 
                    Medicine previously told Health, emphasizing the importance of not only wearing a mask, but wearing it properly.
                    <br>
                    According to the CDC, that means washing your hands before putting on your face mask and making sure it covers your nose and mouth once in place. 
                    It should also fit comfortably, but snugly on your face. If it's a disposable mask, the CDC recommended throwing it away after one use.
                    <br>
                    If it's a cloth mask, you can store it in its own bag and reuse it that day, then wash it that night for the next day 
                    (but if it becomes wet or dirty during use, wash it before using it again).
                </p>
                <p class="overview_info">    
                    <h3 class="total_confirmed_heading">2. They prevent presymptomatic spread, preventing others from getting sick (before you know you have COVID-19).</h3>
                </p>
                <p class="overview_info">
                    According to a January 2021 study published in the Journal of the American Medical Association (JAMA) Network Open, 
                    "transmission from asymptomatic individuals was estimated to account for more than half of all transmissions."
                    <br>
                    In other words, you could be carrying the virus in your body before you get any symptoms of it (aka presymptomatic)—
                    or you may have the virus but never get symptoms, in which case, you would be asymptomatic.
                    <br>
                    Wearing a mask is an easy way to reduce the risk of unknowingly spreading the infection, but it's not a panacea—people also need to observe 
                    social distancing and practice good hand hygiene. "Masks don't take the place of these other measures," Eric Westman, MD, an associate professor of 
                    medicine at Duke University previously told Health.
                </p>
                <p class="overview_info">   
                    <h3 class="total_confirmed_heading">3. You're protecting yourself from getting sick.</h3>
                </p>
                <p class="overview_info"> 
                    While experts went back and forth at the beginning of the pandemic about whether wearing a mask would also protect the one wearing it, 
                    the CDC stated in December 2021 that studies showed that the person wearing the mask is also partially protected from being exposed to infectious 
                    droplets coming from other people with the virus—better than without a mask.
                    <br>
                    Referring to cloth masks, in particular, the CDC also said that "multiple layers of cloth with higher thread counts have demonstrated superior 
                    performance compared to single layers of cloth with lower thread counts." The CDC also said that respirators such as N95s provided the highest level of 
                    protection against the virus, while loosely woven cloth masks provided the least protection.
                </p>
                <p class="overview_info">    
                    <h3 class="total_confirmed_heading">4. They're good hygiene in general.</h3>
                </p>
                <p class="overview_info">
                    Before the pandemic, medical professionals—from surgeons to dentists—wore masks to protect themselves from contracting potential illnesses from patients; 
                    they also wore them to prevent their own germs from spreading. In some cultures, wearing a mask when one is ill or has allergies is common. 
                    Wearing a mask to protect yourself and others when in a high-risk situation is simply good hygiene.
                    <br>
                    The information in this story is accurate as of press time. However, as the situation surrounding COVID-19 continues to evolve, it's possible that some 
                    data have changed since publication. While Health is trying to keep our stories as up-to-date as possible, we also encourage readers to stay informed on 
                    news and recommendations for their own communities by using the CDC, WHO, and their local public health department as resources.
                </p>
                <br><br>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.health.com/condition/infectious-diseases/coronavirus/why-you-should-wear-a-mask" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">
                
                <h1 class="overview_heading">Always be Clean and <span>Wash Your Hands</span></h1>
                <img src="./images/wash.png" class="steps_img">
                
                <p class="overview_info">
                    Handwashing with soap remains one of our best defenses against the virus, along with other public health measures such as maintaining physical distance, 
                    avoiding crowded places, practising cough etiquette and wearing a mask wherever recommended.
                </p>
                <p class="overview_info">   
                    Global Handwashing Day observed annually on October 15 to raise awareness and highlight the importance of handwashing as an effective means of disease 
                    prevention - this year marks a critical reminder for the world and the Region that this simple, cost effective practice can save lives.
                </p>
                <p class="overview_info">                       
                    'Handwashing has always been one of most effective ways of keeping diseases at bay. It is a simple act that pays in dividends when it comes to keeping 
                    ourselves healthy and safe. Handwashing is also one of the key cornerstones of COVID-19 prevention. 
                    <br>
                    Now more than ever as we embrace the new normal and 
                    live with COVID-19, hand hygiene needs to become an integral part of our daily routine and our lives, as we live through this pandemic, and beyond, 
                    to protect us from diseases,' said Dr Poonam Khetrapal Singh, Regional Director, WHO South-East Asia Region.
                </p>
                <p class="overview_info">                       
                    With COVID-19 transmission mainly spreading between people through direct, indirect (through contaminated objects or surfaces), or close contact with 
                    infected people via mouth and nose secretions, washing hands with soap and running water is of critical importance. 
                    <br>
                    To stop the spread of COVID-19, 
                    along with other COVID appropriate behaviours, the practice of handwashing at regular intervals is a must, after coughing or sneezing, 
                    when caring for the sick, after using the toilet, before eating, while preparing food and after handling animals or animal waste. 
                    <br>
                    Handwashing after touching common surfaces such as doorknobs or handles, or after one comes back home from visiting a public place will keep ourselves and 
                    others around us safe.
                </p>
                <p class="overview_info">                      
                    “Promoting hand hygiene at all levels of health care is also critical. Hand hygiene, a very simple action, is well accepted to be one of the primary 
                    modes of reducing health care-associated infection and of enhancing patient safety,” the Regional Director said.
                </p>
                <p class="overview_info">        
                    The pandemic is still among us and it is far from over. We must remind ourselves of the basics that we as individuals can do to keep ourselves safe, she said.
                </p>
                <p class="overview_info">       
                    This year's Global Handwashing Day theme is Hand Hygiene for All and calls for all of society to achieve universal hand hygiene. 
                    <br>
                    To beat the virus today and ensure better health outcomes beyond the pandemic, handwashing with soap must be a priority now and in the future.
                </p>
                <br><br>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.who.int/southeastasia/news/detail/15-10-2020-handwashing-an-effective-tool-to-prevent-covid-19-other-diseases" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">
                
                <h1 class="overview_heading"><span>Never Touch</span> Your Face</h1>
                <img src="./images/touch.png" class="steps_img">
                
                <p class="overview_info">
                    According to a 2015 study in the American Journal of Infection Control, people touch their faces more than 20 times an hour on average. 
                    About 44 percent of the time, it involves contact with the eyes, nose, or mouth.
                </p>
                <p class="overview_info"> 
                    From picking up objects to turning doorknobs, we're constantly touching surfaces contaminated with pathogens. 
                    These pathogens can be picked up by our hands and get into the body through mucous membranes on the face — eyes, nose, and mouth — 
                    that act as pathways to the throat and lungs.
                    <br>                
                    The coronavirus that causes Covid-19 is believed to be spread mostly by inhaling droplets released when an infected individual coughs or sneezes. 
                    But these droplets can also land on surfaces that we touch with our hands.
                </p>
                <p class="overview_info">    
                    “Some pathogens can last for about nine days on surfaces, so we are constantly coming in contact with potential pathogens that can cause an infection,” 
                    said Jennifer Hanrahan, chief of the division of infectious diseases at the University of Toledo Medical Center.
                    <br>
                    All of which explains why it makes sense for health officials to recommend that people try to avoid touching their faces. 
                    But as anyone who has consciously tried to do so knows, it's hard.
                </p>
                <p class="overview_info"> 
                    Touching your face is an act that most people perform without thinking, explained Wendy Wood, provost professor of psychology and 
                    business at the University of Southern California.
                    <br>
                    “Whether it is something intrinsic to our species or a learned behavior, we continue to repeat it even if we intend to or not,” she said.
                </p>
                <p class="overview_info"> 
                    According to Wood, face touching is a behavior that is triggered for a number of reasons. While some people do it to express their emotions, 
                    others touch their face in a discussion to make a point. Over time, they form a habit that continues to get repeated unless it is consciously broken.
                </p>
                <p class="overview_info">  
                    Experts say one way to break the cycle is to simply make it more difficult to touch your face.
                    <br>
                    “If people are to wear gloves and glasses, they are less likely to touch their face,” said Wood.
                </p>
                <p class="overview_info">  
                    Previous outbreaks, such as SARS, have shown the importance of washing hands regularly and not touching the face with them.
                </p>
                <p class="overview_info">  
                    A study published late last year on hand hygiene and the global spread of disease through air transportation found that if people wash their hands 
                    while at the airport, the spread of a pandemic could be curbed by up to 69 percent. The same research group previously found only an estimated 20 percent of 
                    people have clean hands while at airports.
                    <br>
                    Christos Nicolaides, a postdoctoral fellow at MIT and lead author of the study, said little things really could make a difference in restricting the 
                    spread of coronavirus, and an increase in the number of people with clean hands would have a significant impact on slowing it.
                </p>
                <br><br>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.statnews.com/2020/03/09/how-touching-your-face-can-spread-viruses-and-why-youre-so-bad-at-avoiding-it/" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">
                
                <h1 class="overview_heading">When Sneezing or Coughing, <span>Look Away</span></h1>
                <img src="./images/cough_covered.png" class="steps_img">
                
                <p class="overview_info">
                    Covering coughs and sneezes and keeping hands clean can help prevent the spread of serious respiratory illnesses like influenza, 
                    respiratory syncytial virus (RSV), whooping cough, and COVID-19. Germs can be easily spread by:
                </p>
                <p class="overview_info">  
                    1. Coughing, sneezing, or talking
                    <br>
                    2. Touching your face with unwashed hands after touching contaminated surfaces or objects
                    <br>
                    3. Touching surfaces or objects that may be frequently touched by other people
                </p>
                <p class="overview_info">  
                    To help stop the spread of germs:
                </p>
                <p class="overview_info">                      
                    1. Cover your mouth and nose with a tissue when you cough or sneeze
                    <br>
                    2. Throw used tissues in the trash
                    <br>
                    3. If you don't have a tissue, cough or sneeze into your elbow, not your hands
                </p>
                <p class="overview_info">  
                    Remember to immediately wash your hands after blowing your nose, coughing or sneezing.
                </p>
                <p class="overview_info">     
                    Washing your hands is one of the most effective ways to prevent yourself and your loved ones from getting sick, 
                    especially at key times when you are likely to get and spread germs.
                </p>
                <p class="overview_info">
                    Since COVID-19 is transmitted through contact with respiratory fluids carrying the infectious SARS-CoV-2 virus, 
                    a person can be exposed by an infected person coughing or speaking near them. They can also be exposed by inhaling aerosol particles that are 
                    spreading away from the infected person. 
                    <br>
                    Transmission of COVID-19 from inhalation of virus in the air can occur at distances greater than six feet. 
                </p>
                <p class="overview_info">
                    Particles from an infected person can move throughout an entire room or indoor space. The particles can also linger in the air after a person has 
                    left the room - they can remain airborne for hours in some cases. 
                    <br>
                    Someone can also be exposed via splashes and sprays of respiratory fluids directly onto 
                    their mucous membranes. 
                    <br>
                    Spread may also sometimes occur through contact with contaminated surfaces, though this route is now considered less likely.
                </p>
                <br><br>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.cdc.gov/hygiene/personal-hygiene/coughing-sneezing.html" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">
                
                <h1 class="overview_heading">Always Use <span>Disinfectant</span></h1>
                <img src="./images/disinfectant.png" class="steps_img">
                
                <p class="overview_info">
                    If a sick person or someone who tested positive for COVID-19 has been in your facility within the last 24 hours, 
                    you should clean and disinfect the spaces they occupied.
                </p>
                <p class="overview_info">
                    <h3 class="total_confirmed_heading">Before cleaning and disinfecting:</h3>
                </p>
                <p class="overview_info">    
                    1. Close off areas used by the person who is sick and do not use those areas until after cleaning and disinfecting.
                    <br>
                    2. Wait as long as possible (at least several hours) before you clean and disinfect.
                </p>
                <p class="overview_info">
                    <h3 class="total_confirmed_heading">While cleaning and disinfecting:</h3>
                </p>
                <p class="overview_info">
                    1. Open doors and windows and use fans or HVAC (heating, ventilation, and air conditioning) settings to increase air circulation in the area.
                    <br>
                    2. Use products from EPA List N according to the instructions on the product label.
                    <br>
                    3. Wear a mask and gloves while cleaning and disinfecting.
                    <br>
                    4. Focus on the immediate areas occupied by the person who is sick or diagnosed with COVID-19 unless they have already been cleaned and disinfected.
                    <br>
                    5. Vacuum the space if needed. Use a vacuum equipped with high-efficiency particulate air (HEPA) filter and bags, if available.
                    <br>
                    While vacuuming, temporarily turn off in-room, window-mounted, or on-wall recirculation HVAC systems to avoid contamination of HVAC units.
                    <br>
                    Do NOT deactivate central HVAC systems. These systems provide better filtration capabilities and introduce outdoor air into the areas they serve.
                    <br>
                    6. It is safe to wash dirty laundry from a person who is sick with COVID-19 with other people's items.
                    <br>
                    7. Ensure safe and correct use and storage of cleaning and disinfectant products, including storing such products securely and using 
                    PPE needed for the cleaning and disinfection products.
                </p>
                <p class="overview_info">
                    1. If less than 24 hours have passed since the person who is sick or diagnosed with COVID-19 has been in the space, clean and disinfect the space.
                    <br>
                    2. If more than 24 hours have passed since the person who is sick or diagnosed with COVID-19 has been in the space, cleaning is enough. 
                    <br>
                    3. You may choose to also disinfect depending on certain conditions or everyday practices required by your facility.
                    <br>
                    4. If more than 3 days have passed since the person who is sick or diagnosed with COVID-19 has been in the space, no additional cleaning 
                    (beyond regular cleaning practices) is needed.
                </p>
                <br><br>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.cdc.gov/coronavirus/2019-ncov/community/clean-disinfect/index.html" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">
                
                <h1 class="overview_heading">Practice <span>Social Distancing</span></h1>
                <img src="./images/distance.png" class="steps_img">
                
                <p class="overview_info">
                    Social distancing is a public health practice that aims to prevent sick people from coming in close contact with healthy people in order to 
                    reduce opportunities for disease transmission. It can include large-scale measures like canceling group events or closing public spaces, 
                    as well as individual decisions such as avoiding crowds.
                </p>
                <p class="overview_info">
                    With COVID-19, the goal of social distancing right now is to slow down the outbreak in order to reduce the chance of infection among 
                    high-risk populations and to reduce the burden on health care systems and workers. Experts describe this as "flattening the curve," 
                    which generally refers to the potential success of social distancing measures to prevent surges in illness that could overwhelm health care systems.
                </p>
                <p class="overview_info">
                    The CDC defines social distancing as it applies to COVID-19 as "remaining out of congregrate settings, avoiding mass gatherings, 
                    and maintaining distance (approximately 6 feet or 2 meters) from others when possible."
                    <br>
                    This means, says Rivers, "no hugs, no handshakes."
                </p>
                <p class="overview_info">         
                    It's particularly important—and perhaps obvious—to maintain that same 6-foot distance from anyone who is demonstrating signs of illness, 
                    including coughing, sneezing, or fever.
                </p>
                <p class="overview_info">  
                    Along with physical distance, proper hand-washing is important for protecting not only yourself but others around you—because the virus can be 
                    spread even without symptoms.    
                </p>
                <p class="overview_info">
                    The city of Guangzhou, which implemented disease control measures early into the outbreak, 
                    had significantly lower numbers of hospitalizations from COVID-19 on its peak day than the city of Wuhan, 
                    which put measures in place a month into the outbreak.
                </p>
                <p class="overview_info">
                    Inglesby says people shouldn't fret about a "perfect" approach to social distancing: "We will need partial solutions that fit into different communities. 
                    A 75% solution to a social distancing measure may be all that is possible … [which] is a lot better than 0%, or forcing a 100% solution that will fail."                   
                </p>
                <br><br>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.health.com/condition/infectious-diseases/coronavirus/types-of-rashes-covid-19" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
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
</body>
</html>