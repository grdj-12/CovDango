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
    <title>COVID-19 Symptoms - CovDango</title>

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
                <h1 class="overview_heading">Breathing Difficulties<br></h1>
                <div class="breathing_img"></div>
                <p class="overview_info">
                    COVID-19 cases vary in severity. Some people recover at home, while others experience complications and require more intensive care.
                    <br>
                    Such cases involve treatments such as oxygen therapy and mechanical ventilation.
                </p>  
                <p class="overview_info">
                    Certain signs may help a person tell whether their shortness of breath results from COVID-19 or another health issue.
                </p>                   
                <p class="overview_info">
                    People experience shortness of breath differently. As experts observe, the sensation is subjective and can range in intensity.                    
                    <br>
                    Some people describe feeling always out of breath. Others feel as if they cannot breathe deeply enough or take satisfying breaths.                   
                    <br>
                    When it is severe, the issue can cause a person to continually gasp or struggle to catch their breath.
                </p>
                <p class="overview_info">         
                    A person may also feel tightness in their chest, especially when trying to inhale or exhale fully.
                    <br>
                    These symptoms may occur during physical activity, though they can be present during periods of rest, as well.
                </p>
                <br><br>               

                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.healthline.com/health/coronavirus-shortness-of-breath#bottom-line" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Fever<br></h1>
                <div class="fever_img"></div>
                <p class="overview_info">
                    Fever is one of the ways your body tries to fight off infection. For that reason, it's a common symptom of COVID-19, 
                    which typically gets reported by those who have it.
                </p>
                <p class="overview_info">
                    However, not everyone who gets COVID-19 will develop a fever.
                </p>
                <p class="overview_info">    
                    According to the CDC, you have a fever if your temperature is 100.4°F (38°C) or greater, no matter what the cause.
                </p>
                <p class="overview_info">              
                    In addition to being new, COVID-19 has often been unpredictable. As common a symptom as fever is, there is no definitive temperature range for this condition. 
                    <br>
                    Some people who test positive never run a fever. Others spike very high fevers.
                </p>
                <p class="overview_info">
                    A large review of multiple studies across nine countries observed 24,420 adults with COVID-19, and 78 percent ran a fever at some point during their illness.
                    <br>
                    A later review of studies involving 17,515 adults and children with COVID-19 uncovered similar results. 
                    <br>
                    Of all the adult participants, 79.43 percent ran a fever during their illness. Low- and medium-grade fevers were also more likely to occur in this population than high fevers.
                </p>
                <br><br>

                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.healthline.com/health/infection/coronavirus-temperature-range#other-symptoms" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Cough<br></h1>
                <div class="cough_img"></div>
                <p class="overview_info">
                    A cough is a protective mechanism to keep mucus or foreign objects out of the lungs. With COVID and other viral infections, 
                    the cause is irritation to the airways. 
                    <br>
                    “The virus gets into the cells in the airways and causes inflammation,” Dr. Marchetti explains.
                </p>
                <p class="overview_info">
                    There are two types of cough: wet (or productive) cough and dry cough. Dry cough is usually caused by a viral infection, says Dr. Marchetti. 
                    <br>
                    A wet cough involves coughing up mucus and may involve a bacterial infection. Dry cough is one of the most common COVID symptoms, 
                    although it's possible to have a wet cough with COVID too.
                </p>
                <p class="overview_info">
                    Doctors don't know why some people get a nasty cough with COVID, while others don't cough at all. “There is much we do not understand about COVID-19, 
                    including why some people have persistent symptoms,” 
                    <br>
                    Denyse Dawn Lutchmansingh, MD, the associate director of the Winchester Center for Lung Disease and the 
                    associate director of the Post-COVID-19 Recovery Program at Yale University School of Medicine, tells SELF.
                </p>
                <p class="overview_info">                    
                    Anecdotally, BA.5—the dominant omicron subvariant fueling the recent rise in cases in the U.S.—seems to be linked to cough more than previous strains. 
                    While it's too soon to have concrete data on this, “experience by my colleagues suggests that, at least in the acute phase, 
                    these BA strains do seem to be more upper airway and cough associated,” 
                    <br>
                    Frank Sciurba, MD, a professor of medicine at the University of Pittsburgh 
                    School of Medicine and a member of the pulmonary committee of the National Institutes of Health RECOVER long COVID clinical trial, tells SELF.
                </p>
                <br><br>

                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.self.com/story/how-long-does-covid-cough-last" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Sore Throat<br></h1>
                <div class="throat_img"></div>
                <p class="overview_info">
                    Having a sore throat is becoming a dominant symptom of COVID-19 infection, with fever and loss of smell becoming less common, 
                    according to recent reports in the U.K.
                </p>
                <p class="overview_info">
                    The shift could be a cause of concern for the fall. As the main symptoms of the coronavirus change, people could spread the virus without realizing it.
                </p>
                <p class="overview_info">                    
                    “Many people are still using the government guidelines about symptoms, which are wrong,” Tim Spector, a professor of genetic epidemiology at 
                    King’s College London, told The Independent.
                </p>
                <p class="overview_info">                    
                    Spector co-founded the COVID ZOE app, which is part of the world's largest COVID-19 study. Throughout the pandemic, 
                    researchers have used data from the app to track changes in symptoms.
                </p>
                <p class="overview_info">                    
                    “At the moment, COVID starts in two-thirds of people with a sore throat,” he said. “Fever and loss of smell are really rare now, 
                    so many old people may not think they've got COVID. They'd say it's a cold and not be tested.”
                </p>
                <br><br>

                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.webmd.com/lung/news/20221004/sore-throat-becoming-dominant-covid-symptom-reports" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Runny Nose<br></h1>
                <div class="nose_img"></div>
                <p class="overview_info">
                    Rhinorrhoea, also known as runny nose, is one of the “top” symptoms currently seen in fully vaccinated people who get infected with Coronavirus. 
                    The data is obtained from Zoe Covid Study App, which monitors the virus and its symptoms through patients using their app. 
                    <br>
                    A runny nose is characterised by a free discharge of thin mucus from the nose.
                    According to the data from Zoe reports, runny nose is a tell-tale COVID sign, seen across 83 percent of their positive COVID users.
                </p>
                <p class="overview_info">
                    Runny nose is a common sign of flu and cold as well, which can make it confusing for the patient to determine whether they have COVID or not.
                    <br>
                    According to Zoe App, “The likelihood that your runny nose is caused by COVID-19 is influenced by how prevalent the disease is at the time. Our data shows that when rates of COVID-19 are high, the chances that a runny nose is due to coronavirus infection is high.”
                </p>
                <p class="overview_info">
                    In case of doubt, it is best to take an at-home COVID test and consult your doctor.
                </p>
                <br><br>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/coronavirus-runny-nose-is-one-of-the-top-covid-symptoms-in-double-vaccinated/photostory/95100007.cms" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Asthma<br></h1>
                <div class="asthma_img"></div>        
                <p class="overview_info">
                    Prospective study was carried out in Namazi tertiary referral Hospital, Shiraz, as the largest hospital in the south of Iran. 
                    Patients were identified based on a specialist physician visit. 
                    <br>
                    Patient information is extracted by reviewing the file data, 
                    an electronic repository of the health records of hospitalized patients in the health system. 
                    <br>
                    Shiraz University of Medical Sciences, 
                    with the number 23556-35-01-99, approved the current study, and the authors took consent from the patient's parents or caregivers.
                </p>
                <p class="overview_info">                    
                    One hundred nine patients were identified with an ICD-10 diagnosis code of COVID-19 based on patients' medical records referred from February 2020 to 
                    January 2021. 
                    <br>
                    The following results related to the study of patients two months after discharge. One month after discharge, 30 patients had symptoms, 
                    and it seemed to mostly post-infectious of COVID19, and in the 2th month, 20% had no symptoms. 
                </p>
                <p class="overview_info">
                    During the six months following, no new patient was added. 
                    Out of 109 patients, 97 (88.9%) cases were confirmed by RT-PCR and were included in the study. Finally, 69 patients were analyzed, 
                    excluding those who died or did not respond. Most of the COVID-19 patients (N = 42) (58.5%) were not affected by post-hospitalization asthma-like. 
                    Among 27 patients with post-COVID-19 asthma-like, 14 (51.9%) participants were age > 5 years old and confirmed as asthma-like using a spirometer (PFT).
                </p>
                <br><br>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://bmcinfectdis.biomedcentral.com/articles/10.1186/s12879-022-07252-2" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Lung Disease<br></h1>
                <div class="lung_img"></div>
                <p class="overview_info">
                    “As we have learned more about SARS-CoV-2 and resulting COVID-19, we have discovered that in severe COVID-19, a significant pro-inflammatory 
                    condition can result in several critical diseases, complications and syndromes,” Galiatsatos says.
                </p>
                <p class="overview_info">    
                    The pneumonia that COVID-19 causes tends to take hold in both lungs. Air sacs in the lungs fill with fluid, 
                    limiting their ability to take in oxygen and causing shortness of breath, cough and other symptoms.
                </p>
                <p class="overview_info">    
                    “In COVID-19-related bronchitis, this is an issue of an excessive amount of sputum produced in the airways, resulting in coughing and chest congestion. 
                    The sputum also narrows the airways, making breathing more difficult,” Galiatsatos explains.
                </p>
                <p class="overview_info">
                    “As for the bronchitis, patients may experience a cough that stays with them for months after the initial infection,
                </p>
                <p class="overview_info">
                    If COVID-19 pneumonia progresses, more of the air sacs can become filled with fluid leaking from the tiny blood vessels in the lungs. 
                    Eventually, shortness of breath sets in, and can lead to acute respiratory distress syndrome (ARDS), a form of lung failure. 
                    Patients with ARDS are often unable to breath on their own and may require ventilator support to help circulate oxygen in the body.
                </p>
                <p class="overview_info">
                    Another possible complication of a severe case of COVID-19 is sepsis. Sepsis occurs when an infection reaches, and spreads through, the bloodstream, 
                    causing tissue damage everywhere it goes.
                </p>
                <p class="overview_info">
                    Galiatsatos notes that when a person has COVID-19, the immune system is working hard to fight the invader. 
                    This can leave the body more vulnerable to infection with another bacterium or virus on top of the COVID-19 — a superinfection
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.hopkinsmedicine.org/health/conditions-and-diseases/coronavirus/what-coronavirus-does-to-the-lungs#:~:text=What%20does%20COVID%20do%20to,the%20lungs%20and%20other%20organs." target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Headaches<br></h1>
                <div class="headache_img"></div>
                <p class="overview_info">
                    COVID-19 has been linked to tension headaches and migraine. When headaches appear, they often appear as one of the early symptoms.
                    In most cases, headaches go away within a couple of weeks, but some people experience long-haul headaches for weeks or months after infection.
                </p>
                <p class="overview_info">    
                    Headache is among the most frequent symptoms persisting or newly developing after coronavirus disease 2019 (COVID-19) as part of the so-called long 
                    COVID syndrome. The knowledge on long COVID headache is still limited, however growing evidence is defining the features of this novel condition
                </p>
                <p class="overview_info">    
                    Long COVID headache can present in the form of worsening of a preexisting primary headache, or, more specifically, 
                    in the form of a new (intermittent or daily) headache starting during the acute infection or after a delay. 
                </p>
                <p class="overview_info">
                    It often presents together with other long COVID symptoms, most frequently with hyposmia. It can manifest with a migrainous or, more frequently, 
                    with a tension-type-like phenotype. Persistent activation of the immune system and trigeminovascular activation are thought to play a role.
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://thejournalofheadacheandpain.biomedcentral.com/articles/10.1186/s10194-022-01450-8" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Heart Disease<br></h1>
                <div class="heart_img"></div>
                <p class="overview_info">
                    Although COVID-19 is primarily a respiratory or lung disease, the heart can also suffer.
                </p>
                <p class="overview_info">
                    People with COVID-19 can have symptoms similar to those of a heart attack, including chest pain, shortness of breath and changes on their echocardiogram 
                    (ultrasound of the heart) or EKG. But often when these patients are given an angiogram, there is no evidence of a major blockage in the heart's blood vessels, 
                    which would indicate a heart attack in progress.
                </p>
                <p class="overview_info">
                    Temporary or lasting damage to heart tissue can be due to several factors:
                </p>
                <p class="overview_info">   
                    Lack of oxygen. As the virus causes inflammation and fluid to fill up the air sacs in the lungs, less oxygen can reach the bloodstream. 
                    The heart has to work harder to pump blood through the body, which can be dangerous in people with preexisting heart disease. 
                    The heart can fail from overwork, or insufficient oxygen can cause cell death and tissue damage in the heart and other organs.
                </p>
                <p class="overview_info">   
                    Myocarditis: inflammation of the heart. The coronavirus may infect and damage the heart's muscle tissue directly, 
                    as is possible with other viral infections, including some strains of the flu. The heart may also become damaged and inflamed indirectly 
                    by the body's own immune system response.
                </p>
                <p class="overview_info">   
                    Coronavirus infection also affects the inner surfaces of veins and arteries, which can cause blood vessel inflammation, 
                    damage to very small vessels and blood clots, all of which can compromise blood flow to the heart or other parts of the body. 
                    “Severe COVID-19 is a disease that affects endothelial cells, which form the lining of the blood vessels,” Post says.
                </p>
                <p class="overview_info">   
                    Stress cardiomyopathy. Viral infections can cause cardiomyopathy, a heart muscle disorder that affects the heart's ability to pump blood effectively. 
                    When attacked by a virus, the body undergoes stress and releases a surge of chemicals called catecholamines, which can stun the heart. 
                    Once the infection resolves, the stressor has ended and the heart can recover.
                </p>
                <p class="overview_info">   
                    Cytokine Storm: A Serious Coronavirus Complication
                    Most serious of all, Gilotra says, is the possibility of the immune system launching an attack on the invading virus that is so severe that it destroys 
                    healthy tissues.
                </p>
                <p class="overview_info">   
                    When responding to infection with the coronavirus, the body releases a flood of proteins called cytokines that 
                    help cells communicate with one another and fight the invaders.
                </p>
                <p class="overview_info">   
                    In some people, perhaps due to a genetic difference, this normal defensive event is exaggerated, leaving them vulnerable to a cytokine storm. 
                    In a cytokine storm, the immune system response causes inflammation that can overwhelm the body, destroying healthy tissue and 
                    damaging organs such as the kidneys, liver and heart.
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.hopkinsmedicine.org/health/conditions-and-diseases/coronavirus/heart-problems-after-covid19" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Diabetes<br></h1>
                <div class="diabetes_img"></div>
                <p class="overview_info">
                    COVID-19 is notorious for sometimes leaving an aftermath of puzzling symptoms, such as fatigue or concentration difficulties. 
                    But doctors are also worried about the coronavirus triggering a more familiar condition: diabetes.
                </p>
                <p class="overview_info">   
                    Diabetes is an umbrella term for several conditions that involve high blood sugar, and can lead to serious complications, such as heart attacks. 
                    The body normally keeps blood sugar within a narrow window, as too high a level can damage organs and blood vessels.
                </p>
                <p class="overview_info">
                    The main hormone that brings down blood sugar into a safe range after meals is insulin. Nine in 10 people with diabetes have a form called type 2, 
                    which is usually seen in people who are overweight and is linked with cells becoming resistant to insulin. A less common form, called type 1, 
                    usually arises in childhood, and is caused by the death of pancreas cells that make insulin.
                </p>
                <p class="overview_info">
                    The strange thing with covid-19 is that doctors are seeing a rise in both kinds of diabetes after infections. 
                    Signs of a rise were noticed in the first few months of the pandemic in Wuhan, China, and have since been confirmed in other countries.
                </p>
                <p class="overview_info">   
                    A large US study published last month, for instance, estimated that anyone with a positive covid-19 test has about a 40 per cent higher chance of developing any kind of 
                    diabetes in the following year, compared with uninfected people. A similar German study found an increased risk for type 2 diabetes of 28 per cent over about four months. 
                </p>
                <p class="overview_info">   
                    many kinds of illness, including other viral infections, stress the body in various ways and so cause blood sugar levels to rise, a phenomenon called stress hypoglycaemia. 
                    “If someone's unwell, you get production of lots of hormones that raise glucose levels,” says Ketan Dhatariya at Norfolk and Norwich University Hospitals NHS Foundation Trust, UK.
                </p>
                <p class="overview_info">
                    Once the illness resolves, the symptoms may abate, so in theory the diabetes diagnosis is only temporary, although those affected are at a higher risk of developing true type 2 diabetes later in life.
                </p>
                <p class="overview_info">
                    It is similar to the way that diabetes sometimes temporarily develops during pregnancy and then resolves after birth, although people are still at higher risk after, says Dhatariya.
                </p>
                <p class="overview_info">
                    Another possible mechanism is that the coronavirus could be directly infecting the cells in the pancreas that make insulin and harming or killing them. 
                    Some studies have shown that these cells have the ACE2 receptor that the virus uses to enter cells. Or the pancreas cells could be harmed by the raised level of inflammation 
                    caused by the immune system's response to the virus.
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC9033286/" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Hypertension<br></h1>
                <div class="hypertension_img"></div>
                <p class="overview_info">
                    The coronavirus disease 2019 (COVID-19) outbreak remains a major public health challenge worldwide. 
                    The present study investigated the effect of COVID-19 on blood pressure (BP) during short term follow-up. 
                </p>
                <p class="overview_info">
                    A total of 211 consecutive COVID-19 patients who were admitted to Parkhayat Kutahya hospital were retrospectively screened. 
                    Information was obtained from the electronic medical records and National health data registry.
                    <br><br> 
                    The study outcome was new onset of hypertension according to the Eight Joint National Committee and European Society of Cardiology Guidelines. 
                </p>
                <p class="overview_info">
                    Finally, 153 confirmed COVID-19 patients (mean age 46.5 ± 12.7 years) were enrolled. Both systolic (120.9 ± 7.2 vs 126.5 ± 15.0 mmHg, P <.001) 
                    and diastolic BP (78.5 ± 4.4 vs 81.8 ± 7.4 mmHg, P <.001) were significantly higher in the post COVID-19 period than on admission. 
                    <br><br>
                    New onset hypertension was observed in 18 patients at the end of 31.6 ± 5.0 days on average (P <.001). 
                    These findings suggest that COVID-19 increases systolic and diastolic BP and may cause new onset hypertension.
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://pubmed.ncbi.nlm.nih.gov/34889662/" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Fatigue<br></h1>
                <div class="fatigue_img"></div>
                <p class="overview_info">
                    Even though fatigue is a less well-known symptom of COVID-19, it's one of the early signs of the disease and more common than the 'classic' symptoms of cough,
                    fever and loss of smell (anosmia).
                </p>
                <p class="overview_info">
                    Fatigue in COVID-19 is not the same as normal feelings of being tired or sleepy. It's a type of extreme tiredness or feeling 'wiped out' that persists 
                    despite resting or getting a good night's sleep.
                    If you have fatigue, you may notice it occurs even after small tasks and limits your usual day-to-day activity. 
                    It can feel difficult to walk up stairs, do normal chores or even to get out of bed. Fatigue related to COVID-19 can also make it hard to 
                    concentrate or remember things - people sometimes describe it as having 'brain fog'.  
                </p>
                <p class="overview_info">
                    substances called cytokines that the immune system produces when under attack," Richard Watkins, MD, an infectious disease physician near Akron, Ohio, 
                    and a professor of medicine at the Northeast Ohio Medical University, told Health.
                </p>
                <p class="overview_info">
                    Those cytokines signal to your body that it's time to go to work and fight off an infection, but the aftermath can make you feel tired. 
                    After all, your body focuses its energy on fighting off an invader, even if you can't see it.
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://health-study.joinzoe.com/post/covid-symptoms-fatigue-tiredness" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Gastrointestinal Problems<br></h1>
                <div class="gastro_img"></div>
                <p class="overview_info">
                    In an early meta-analysis of 60 studies comprising 4243 patients, the majority from China, the pooled prevalence of all gastrointestinal symptoms was 
                    17.6 percent. Anorexia was the most common presenting symptom (26.8 percent), followed by diarrhea (12.5 percent), nausea/vomiting (10.2 percent), 
                    and abdominal pain (9.2 percent).
                </p>
                <p class="overview_info">
                    A subsequent meta-analysis of more than 18,000 patients from around the world suggested that diarrhea was the most common (11.5 percent) gastrointestinal 
                    symptom, followed by nausea and vomiting (6.3 percent), then abdominal pain (2.3 percent).
                </p>
                <p class="overview_info">
                    In the subset of patients with the most severe SARS-CoV-2 infection presenting as acute respiratory distress syndrome (ARDS) and requiring intensive care, 
                    diarrhea is reported upon initial hospital presentation in one-third of the patients and nausea or vomiting in one-fifth of the patients.
                </p>
                <p class="overview_info">
                    In most of these early studies, the inquiry into and reporting of gastrointestinal symptoms upon presentation was not systematic, and thus, these rates are 
                    likely an underestimate of the true incidence.
                </p>
                <p class="overview_info">  
                    Patients with severe COVID-19 are at a particularly high risk for developing gastrointestinal complications. During their often prolonged hospitalization, 
                    74 to 86 percent of critically ill patients with COVID-19 manifest gastrointestinal complications ranging from self-resolving transaminitis and 
                    feeding intolerance to life-threatening mesenteric ischemia.
                </p>
                <p class="overview_info">
                    Acute liver injury and elevated transaminases — Nearly two-thirds of patients with severe COVID-19 develop elevated liver transaminases, with reported 
                    mean aspartate aminotransferase (AST) and alanine aminotransferase (ALT) above 400 units per liter of serum. The liver injury can progress to liver 
                    ischemia in rare instances.
                </p>
                <p class="overview_info">
                    Acute cholecystitis has been widely reported in patients with COVID-19, especially those who are critically ill. 
                    In most patients, the cholecystitis is acalculous, and the etiology remains largely unclear. While hypomotility of the gallbladder wall is expected in 
                    critical illness in general, a direct viral involvement in the pathophysiology in COVID-19 patients cannot be ruled out. 
                </p>
                <p class="overview_info">
                    In critically ill COVID-19 patients, initial management of acute cholecystitis should be with antibiotics and percutaneous cholecystostomy rather than 
                    surgery. Cholecystectomy is reserved for those who do not respond to percutaneous drainage. In a study by the COVIDSurg Collaborative, 
                    an international collaborative of more than 6000 hospitals across more than 90 countries, 1128 COVID-19 patients who underwent surgery had a perioperative 
                    mortality as high as 24.8 percent. Age greater than 70, male sex, emergency surgery, and cancer or major surgery independently predict mortality.
                </p>
                <p class="overview_info">
                    Acute pancreatitis has also been widely reported in patients with COVID-19, especially in those with critical illness. 
                    Progression to necrotizing pancreatitis that requires percutaneous, endoscopic, or surgical debridement has been also reported.
                </p>
                <p class="overview_info">
                    The hypothesis that acute pancreatitis in these cases is directly caused by SARS-CoV-2 is plausible, but the association between COVID-19 and acute 
                    pancreatitis is still not very well understood.
                </p>
                <p class="overview_info">
                    In critically ill COVID-19 patients admitted to the intensive care unit (ICU), significant ileus and feeding intolerance 
                    occur in 46 to 56 percent.
                </p>
                <p class="overview_info">
                    The etiology of the ileus is likely multifactorial, especially since these patients commonly require high doses of sedatives and opioids for ventilator 
                    synchrony, and these medications are associated with slowed intestinal function. However, the possibility of a SARS-CoV-2-specific etiology cannot be 
                    excluded.
                </p>
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.uptodate.com/contents/covid-19-gastrointestinal-symptoms-and-complications/print" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Body Chills<br></h1>
                <div class="chills_img"></div>
                <p class="overview_info">
                    Chills—also referred to as rigors—are episodes of shivering paired with paleness and feeling cold, 
                    often as a result of a fever or the beginning of a fever, according to the US National Library of Medicine's MedlinePlus resource.
                </p>
                <p class="overview_info">
                    When you have a fever (commonly caused by an infection like the flu virus or SARS-CoV-2), 
                    it stimulates your body to release inflammatory chemicals and other substances to try to rid you of the illness—and that can raise your temperature, 
                    Thomas Giordano, MD, MPH, professor and section chief of infectious diseases at Baylor College of Medicine, told Health.
                </p>
                <p class="overview_info">
                    "A raised temperature may help viruses and bacteria get cleared by your immune system faster," 
                    Dr. Giordano explained. "In response, you feel cold, your muscles shake to generate heat to warm your body, and you reach for a blanket. 
                    The chills get better when you reach the new higher temperature, and now you have a fever."
                </p>
                <p class="overview_info">
                    Because chills are usually linked with a fever, which is one of the most common symptoms of COVID-19, 
                    according to Dr. Giordano, that means they can also happen with a SARS-CoV-2 infection.
                </p>
                <p class="overview_info">
                    But an April 2021 review published in the journal PLOS One found that only about 14.5% of adults with COVID-19 experienced chills. 
                    So while chills can certainly occur with COVID-19, they're not one of the typical symptoms.
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.health.com/condition/infectious-diseases/coronavirus/are-chills-a-sign-of-covid-19" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Dizziness<br></h1>
                <div class="dizzy_img"></div>
                <p class="overview_info">
                    Clinical manifestations of COVID-19 include symptoms of vertigo and dizziness, which is rather unsurprising, since SARS-CoV-2 neurotropism may 
                    inflict a broad spectrum of neuropathic effects. The widespread nature of central and peripheral audiovestibular pathways suggests that there may be 
                    several probable pathophysiological mechanisms. The cytokine storm, CNS infiltration of the virus through ACE 2 receptors, and other systemic factors 
                    can be responsible for the significant number of COVID-19 patients reported to experience symptoms of vertigo and dizziness
                </p>
                <p class="overview_info">    
                    SARS-CoV-2 neurotropism may inflict a wide spectrum of neuropathic effects, including effects on neuronal networks governing hearing and balance. 
                    Several studies have reported dizziness and vertigo as core clinical manifestations of COVID-19. 
                </p>
                <p class="overview_info">    
                    Dizziness is the sensation of disturbed or impaired spatial orientation without a false or distorted sense of motion . 
                    Vertigo, on the other hand, is a specific type of dizziness defined as the sensation of self-motion when no self-motion is occurring or the sensation of 
                    distorted self-motion during an otherwise normal head movement.
                </p>
                <p class="overview_info">
                    Dizziness is diagnostically complex and may be attributed to a range of underlying medical conditions such as low blood pressure, cardiac arrhythmias, 
                    anemia, and hypoglycemia that may co-exist in patients with COVID-19 disease or may accompany other neurological symptoms as part of a direct 
                    neurotropic consequence of COVID-19. 
                </p>
                <p class="overview_info">    
                    Dizziness and vertigo may also arise as an indirect consequence of COVID-19, such as in the generation of 
                    vestibular migraine. In such cases, it is likely that patients have an underlying susceptibility to migraine, with the virus acting as a triggering 
                    event, although a thorough medical history of previous migraine or childhood (migrainous) vertigo episodes are often lacking in reported cases.
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC9313303/" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Body and Muscle Pain<br></h1>
                <div class="pain_img"></div>
                <p class="overview_info">
                    COVID-19 can cause muscle and body pain in some people. The intensity of this pain can range from mild to moderate. 
                    Most people have reported that COVID-19 body aches feel like dull muscle pain that may limit mobility or energy. It typically affects the shoulders, 
                    lower back, or legs. Body aches due to COVID-19 typically occur with other symptoms, such as headaches and tiredness. These can interfere with one’s 
                    routine tasks and activities.
                </p>
                <p class="overview_info">   
                    Muscle pain associated with COVID-19 can be felt with movements of the muscle or while touching the muscle. While it may be hard to differentiate 
                    muscle pain from a workout from that caused by SARS-CoV-2, experts have found that virus pain tends to be more generalized, while exercise or 
                    injury-related pain is more localized in a specific muscle.
                </p>
                <p class="overview_info">
                    According to data from the ZOE COVID Symptom Study, body aches are an early symptom of COVID-19 and can last for 2 to 5 days. 
                    In people aged over 35 years, they are more likely to last for up to 7 to 8 days. The study also suggests that around 1 in 3 people with COVID-19 will 
                    experience body aches.
                </p>
                <p class="overview_info">
                    Coronavirus can cause body pain through inflammation in the body. Once detected, viruses trigger an inflammatory response from the body's immune system. 
                    This inflammation involves a series of complex processes that the body uses to fight infections and other irritants in the body. However, it can cause some side effects - 
                    such as pain, swelling and difficulty in moving. It can also lead to fever and tiredness. Muscle pain resulting from COVID-19 is also caused by damage to the muscle fibers 
                    from the virus.
                </p>
                <p class="overview_info">
                    About 1 out of 3 people infected with COVID-19 report body aches as a symptom, according to research. A report from the World Health Organization analyzed nearly 56,000 
                    cases of COVID-19 in China and found that nearly 15% of patients experienced muscle aches and pains. It was found to be more common than a sore throat (13.9%), headache 
                    (13.6%), and chills (11.4%).
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/coronavirus-how-does-pain-associated-with-covid-19-feels-like/photostory/92124655.cms" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Body Rashes<br></h1>
                <div class="rash_img"></div>
                <p class="overview_info">
                    According to a 2021 study published in the British Journal of Dermatology, there is an association between skin rashes and a positive COVID-19 
                    swab test result.2 Researchers determined that by looking at information from 336,847 people in the UK who had uploaded their health history, 
                    including any COVID-19 test results and symptoms, to the COVID Symptom Study app.3 The app data showed that, among those who had a positive swab test result, 
                    8.8% also reported skin-related changes. And of those, 6.8% reported body rashes and 3.1% acral rashes (an acral rash is a rash on the extremities).
                </p>
                <p class="overview_info">
                    To better understand the length and timing of these skin symptoms, the researchers then looked at the results of an independent survey on skin symptoms 
                    related to COVID-19 that 11,544 people had completed.
                </p>
                <p class="overview_info">                 
                    The skin changes appeared at the same time as other COVID-19 symptoms for 47% of the survey respondents and after other COVID-19 symptoms for 35% of the 
                    survey respondents. But what the researchers found to be most striking was that 17% of the respondents said that their skin changes happened before any other 
                    COVID-19 symptoms. And 21% of the people said that their rash was the only symptom of COVID-19 they experienced.
                </p>
                <p class="overview_info">               
                    The researchers said that their "study strongly supports the inclusion of skin rashes in the list of suspicious COVID-19 symptoms." And while rashes might be 
                    less common than other signs of COVID-19, the study authors point out that skin changes can be easily recognized, which may help with virus detection and 
                    contact tracing.
                </p>
                <p class="overview_info">        
                    Does Coronavirus Cause a Rash? What You Need to Know
                    To help people identify what a COVID-19 rash might look like, and using the pictures that the survey respondents had submitted, the researchers worked 
                    with the British Association of Dermatologists (BAD) to create a catalog of images of the most common skin manifestations of COVID-19.
                </p>
                <p class="overview_info">
                    Usually, skin irritation or exposure to an allergen can cause a rash that itches, which would be pretty common if you are frequently washing your hands.
                </p>
                <p class="overview_info">
                    In this unique case, this itch-free rash could be caused by your immune system's response to the virus. "If (the rash) is transient (coming and going), 
                     we suspect is that a bunch of viral particles is being released into the bloodstream at that particular moment," Dr. Jacobs told Health. 
                     "The rash itself is caused by a blockage of blood called vaso-occlusion. When you block the blood, you don't get oxygen."
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.health.com/condition/infectious-diseases/coronavirus/types-of-rashes-covid-19" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Loss of Smell<br></h1>
                <div class="smell_img"></div>
                <p class="overview_info">
                    COVID-19 has heterogeneous manifestations, though one of the most common symptoms is a sudden loss of smell (anosmia or hyposmia).
                </p>
                <p class="overview_info">
                    Anosmia and other chemosensory disorders have serious health and quality-of-life consequences for patients. 
                    However, the general lack of awareness of anosmia and other chemosensory disorders by clinicians and the public, including their 
                    association with upper respiratory infections,14 contributed to an underappreciated role of chemosensory symptoms in the diagnosis of COVID-19. 
                    Additionally, the impact of smell loss as a clinical consequence of COVID-19 has not been adequately addressed. 
                </p>
                <p class="overview_info">   
                    Thus, there is an urgent need to 
                    better define the chemosensory dysfunctions associated with COVID-19 and to determine their relevance as predictors of this disease. It is critical to 
                    develop rapid clinical tools to efficiently and effectively integrate chemosensory assessments into COVID-19 screening and treatment protocols. 
                    Information on the duration and reversibility of post-COVID-19 chemosensory impairment is also lacking.
                </p>
                <p class="overview_info">
                    Both C19+ and C19− groups exhibited smell loss, but it was significantly larger in C19+ participants (mean±SD, C19+: -82.5±27.2 points; C19-: -59.8±37.7). 
                    Smell loss during illness was the best predictor of COVID-19 in both single and cumulative feature models (ROC AUC=0.72), with additional features 
                    providing negligible model improvement. VAS ratings of smell loss were more predictive than binary chemosensory yes/no-questions or other cardinal symptoms, 
                    such as fever or cough
                </p>
                <p class="overview_info">
                    results suggest that chemosensory impairment has strong COVID-19 predictive value and is useful when access to viral testing is limited or absent. 
                    As with any self-report measure, veracity of self-reports cannot be guaranteed
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7386529.1/" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Loss of Taste<br></h1>
                <div class="taste_img"></div>
                <p class="overview_info">
                    Chemosensory scientists have been skeptical that reports of COVID-19 taste loss are genuine, in part because before COVID-19, 
                    taste loss was rare and often confused with smell loss.
                </p>
                <p class="overview_info">
                    As a result of COVID-19, affected people can experience chemosensory dysfunction in a variety of ways, including complete loss of smell or taste 
                    (anosmia or ageusia, respectively), partial loss of smell or taste (hyposmia or hypogeusia), and/or a distorted sense of smell or taste 
                    (e.g., parosmia, dysgeusia). These chemosensory dysfunctions can be distressing to the affected individuals and can last for extended times, 
                    with some patients experiencing resolution within a few weeks to a month (Lee et al., 2020b; Gerkin et al., 2021) and others with symptoms for 6 months or longer.
                </p>
                <p class="overview_info">    
                    Despite the occurrence of true taste loss in a variety of diseases such as cancer (Nolden et al., 2019), 
                    as well as in the general population (Rawal et al., 2016), taste loss has often been confused with smell loss (Le Bon et al., 2021). 
                </p>
                <p class="overview_info">
                    However, the current coronavirus pandemic suggests that in reality, taste loss is its own unique feature of the illness. The present meta-analysis 
                    found an overall taste loss prevalence of 37 % among 138,897 COVID-19-positive participants, which aligns with other meta-analyses of taste loss prevalence, 
                    ranging from 38% (Agyeman et al., 2020) to 49% (Hajikhani et al., 2020). 
                </p>
                <p class="overview_info">
                    This high prevalence is not due to confusion with smell loss because direct taste 
                    measures yield similar (or even slightly higher) prevalence than self-report. Therefore self-reports of taste loss appear to be valid among people with 
                    COVID-19 as they are among other groups.
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8528083/" target="_blank"
                            class="btn_text">Read More</a>
                        <i class="fas fa-angle-right caret_icon"></i>
                    </button>
                </div>
            </div>
        </div>

        
        <div class="cards_container container">
            <div class="overview_card">   
                <h1 class="overview_heading">Irritated Eyes<br></h1>
                <div class="eye_img"></div>
                <p class="overview_info">
                    As per a report published in the BMJ Open Ophthalmology by a group of researchers at Anglia Ruskin University, Cambridge, UK, 
                    sore eyes is the most significant ocular symptom of COVID. The study which was done on 83 participants found that: 
                    "The most significant ocular symptom experienced by people suffering from COVID-19 was sore eyes. Other symptoms associated with other types of 
                    conjunctivitis, such as mucous discharge and gritty eyes linked to bacterial infection, did not reach significance. The term 'conjunctivitis' is too 
                    broad and should be used with caution."
                </p>
                <p class="overview_info">    
                    Other ocular symptoms found in the study were photophobia, and itchy eyes. The study found that the frequency of sore eyes was significantly higher during 
                    COVID-19 state compared with pre-COVID-19 state and there were no differences between males and females.
                </p>
                <p class="overview_info">
                    Pink eye or conjunctivitis is a possible symptom of coronavirus induced COVID, says the WHO.
                    As per a research study, "Ocular surfaces have in fact great tropism for respiratory viruses and coronavirus RNA has been found in tears."
                </p>
                <p class="overview_info">  
                    In some cases, another study says, conjunctivitis may appear as the only sign and symptom of COVID-19, and these patients may not have fever, fatigue, 
                    or respiratory symptoms that may cause suspicion.                    
                    <br><br>
                </p>
                <div class="btn-cont">
                    <button type="submit" class="more_info_btn">
                        <a href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/coronavirus-infection-experts-warn-of-sore-eyes-other-ocular-symptoms/photostory/90781111.cms" target="_blank"
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