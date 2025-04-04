<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.scss">
    <title>Shauraya Salwan Portfolio</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
    <script src="js/main.js" defer></script>
    <?php
//connect to the running database server and the specific database
require_once('includes/connect.php');



//create a query to run in SQL
$query = 'SELECT projects.id AS projects, img1 FROM projects,media WHERE project_id = projects.id ORDER BY title ASC';


//run the query to get back the content
$results = mysqli_query($connect,$query);

?>

</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.svg" alt="Shauraya Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        
        <section id="home" class="hero">
            <img src="images/hero.jpg" alt="Hero Image" class="hero-image">
            <div class="hero-text"></div>
        </section>

       
 
<section id="about" class="about-me-section">
    <div class="about-content">
        <h2>About Me</h2>
        <p>Hello! I'm a digital creator passionate about blending technology and creativity. With extensive 
           experience in digital marketing, I craft engaging campaigns that drive results. My video editing 
           skills help tell compelling stories for social media and brand narratives.</p>
        <p>I specialize in web UI/UX design, focusing on intuitive user experiences. My background in web 
           programming allows me to bring these designs to life effectively. Additionally, I have a flair 
           for 3D animation, creating dynamic visuals.</p>
        <p>I thrive on collaboration and am always eager to learn in the evolving digital landscape.</p>
    </div>
</section>
<div id="svg-container">
    <svg id="rotating-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="461.406" height="448.519" viewBox="0 0 461.406 448.519">
      <defs>
        <clipPath id="clip-path">
          <rect id="Rectangle_1" data-name="Rectangle 1" width="461.406" height="448.519" fill="none" stroke="#fff" stroke-width="1"/>
        </clipPath>
      </defs>
      <path id="Path_1" data-name="Path 1" d="M.5,112.552v61.859l117.533,71.757-35.88,20.413L.5,217.713V337.72L179.273,447.829,363.614,340.194V276.479L253.5,205.341l29.075-19.794,81.035,49.487V112.552L182.056.588Z" transform="translate(0.046 0.054)" stroke="#fff" stroke-width="1"/>
      <g id="Group_2" data-name="Group 2">
        <g id="Group_1" data-name="Group 1" clip-path="url(#clip-path)">
          <path id="Path_2" data-name="Path 2" d="M.5,112.552v61.859l117.533,71.757L82.155,266.581.5,217.713V337.72L179.274,447.83,363.613,340.194V276.479L253.5,205.341l29.074-19.794,81.035,49.487V112.552L182.057.587Z" transform="translate(0.046 0.054)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/>
        </g>
      </g>
      <path id="Path_3" data-name="Path 3" d="M47.206,118.521,31.123,129.038v21.032l114.44,70.664,100.211-58.91L149.892,99.345l29.374-18.558,149.4,88.459V131.512l-149.4-92.79-96.8,58.148,97.428,62.477-31.858,19.177Z" transform="translate(2.836 3.529)" fill="#8a9dff" stroke="#fff" stroke-width="1"/>
      <path id="Path_4" data-name="Path 4" d="M47.206,118.521,31.123,129.038v21.032l114.44,70.664,100.211-58.91L149.892,99.345l29.374-18.558,149.4,88.459V131.512l-149.4-92.79-96.8,58.148,97.428,62.477-31.858,19.177Z" transform="translate(2.836 3.529)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/>
      <path id="Path_5" data-name="Path 5" d="M213.607,205.532l115.058,70.376V298.8L314.437,309.93l-100.83-61.859-33.714,18.558,98.666,62.478-98.666,60.622L31.123,297.63V259.824l145.369,88.458,34.641-17.938-95.263-62.478Z" transform="translate(2.836 18.73)" fill="#8a9dff" stroke="#fff" stroke-width="1"/>
      <path id="Path_6" data-name="Path 6" d="M213.607,205.532l115.058,70.376V298.8L314.437,309.93l-100.83-61.859-33.714,18.558,98.666,62.478-98.666,60.622L31.123,297.63V259.824l145.369,88.458,34.641-17.938-95.263-62.478Z" transform="translate(2.836 18.73)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/>
    </svg>
  </div>
  
  </section>

   
        <section id="software" class="software-section">
            <h2>Software I Use</h2>
            <div class="software-grid">
              <div class="software-item">
                <img src="images/software.jpg" alt="Software 1">
                
          </section>
          

        <!-- Projects Section -->
        <section id="projects" class="projects-section">
            <h2>My Work</h2>
            <div class="projects-grid">
                <div class="project-item">
                <?php
                while($row = mysqli_fetch_array($result)){
                    
                    <img src="images/p1.jpg" alt="Project 1" data-case-study="case-study1.html">
                    <p></p>
                </div>
                <div class="project-item">
                    <img src="images/'; echo $row['image']." alt="Project 2" data-case-study="case-study2.html">
                    <p></p>
                </div>
                <div class="project-item">
                    <img src="images/p3.jpg" alt="Project 3" data-case-study="research.html">
                    <p></p>
                </div>
                <div class="project-item">
                    <img src="images/p4.jpg" alt="Project 4" data-case-study="case-study4.html">
                    <p></p>
                </div>}
            </div>
        </section>

        <!-- Video Section -->
        <section id="video" class="demo-reel">
            <h2>Demo Reel</h2>
            <div class="video-container">
                <video controls>
                    <source src="video/Final_reel.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>
<!-- References Section -->
<section id="references" class="references-section">
    <h2>References</h2>
    <div class="references-grid">
        <div class="reference-item">
            <img src="images/reference .svg" alt="Reference 1">
            <p><a href="https://www.linkedin.com/in/jordan-millward-72620160/" target="_blank">Mr. Jordan</a></p>
        </div>
        <div class="reference-item">
            <img src="images/reference .svg" alt="Reference 2">
            <p><a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAAA_l-A0BmbaGwrCjNS4n1ilasSnPSgkoAPc&keywords=krishna%20sharma&origin=RICH_QUERY_SUGGESTION&position=0&searchId=26a90f90-d200-438d-8524-fbcd14154d22&sid=e%2C%3A&spellCorrectionEnabled=false" target="_blank">Mr. Krishna Sharma</a></p>
        </div>
        <div class="reference-item">
            <img src="images/reference .svg" alt="Reference 3">
            <p><a href="https://www.linkedin.com/company/fitness-junction/posts/?feedView=all" target="_blank">Mr. Shivam Salwan</a></p>
        </div>
    </div>
</section>

</section>
        <section id="contact" class="contact-section">
            <h2>Contact Me</h2>
            <form class="contact-form">
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <input type="tel" placeholder="Phone Number" required>
                <textarea placeholder="Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
        <footer>
            <div class="footer-logo">
                <img src="images/new-logo.svg" alt="Logo">
            </div>
            <ul class="social-links">
                <li><a href="https://github.com/salwan333" target="_blank"><img src="images/git_logo.png" alt="Github" class="social-icon"> Github</a></li>
                <li><a href="https://www.linkedin.com/in/shauraya-salwan-620835198/" target="_blank"><img src="images/linkedin.png" alt="LinkedIn" class="social-icon"> LinkedIn</a></li>
            </ul>
        </footer>
    </footer>
