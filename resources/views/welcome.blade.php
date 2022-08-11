<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/welcome.css">
    <title>Dashboard Page</title>
</head>
<body>
    <!-- Header -->
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="#hero">
              <h1><span>Q</span>uiz <span>M</span>anagement</h1>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <li><a href="#hero" data-after="Dashboard">Home</a></li>
              <li><a href="#projects" data-after="Projects">Projects</a></li>
              <li><a href="#about" data-after="About">About</a></li>
              <li><a href="#contact" data-after="Contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End Header -->
  
  
    <!-- Hero Section  -->
    <section id="hero">
      <div class="hero container">
        <div>
          <h1>Welcome, <span></span></h1>
          <h1>To Our<span></span></h1>
          <h1>System<span></span></h1>
          <div class="container-select">
            <div class="select-box">
              <div class="options-container">
                <div class="option">
                  <input type="radio" class="radio" id="admin" name="category"/>
                  <label for="admin"><a href="{{ route('register') }}">Register</a></label>
                </div>
                <div class="option">
                  <input type="radio" class="radio" id="User" name="category" />
                  <label for="user"><a href="{{ route('login') }}">Login</a></label>
                </div>
              </div>
              <div class="selected">
                <a href="#" type="button" class="cta">Join us Now</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- End Hero Section  -->
  
    <!-- Projects Section -->
    <section id="projects">
      <div class="projects container">
        <div class="projects-header">
          <h1 class="section-title">Recent <span>Projects Couse</span></h1>
        </div>
        <div class="all-projects">
          <div class="project-item">
            <div class="project-info">
              <h1>Algorithm</h1>
              <h2>Coding is Love</h2>
              <p>An algorithm is a procedure used for solving a problem or performing a 
                computation. Algorithms act as an exact list of instructions that conduct 
                specified actions step by step in either hardware- or software-based routines.</p>
            </div>
            <div class="project-img">
              <img src="/img/welcome/img-1.png" alt="img">
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>Web Design</h1>
              <h2>Coding is Love</h2>
              <p>Web design is the process of planning, conceptualizing, and arranging content online. 
                Today, designing a website goes beyond aesthetics to include the website’s overall functionality.
                 Web design also includes web apps, mobile apps, and user interface design. </p>
            </div>
            <div class="project-img">
              <img src="/img/welcome/web_design.jpg" alt="img">
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>Moblie Application</h1>
              <h2>Coding is Love</h2>
              <p>Mobile application development is the process of creating software applications that run on a mobile device, 
                and a typical mobile application utilizes a network connection to work with remote computing resources.</p>
            </div>
            <div class="project-img">
              <img src="/img/welcome/Mobile-App.webp" alt="img">
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>Software Engineering</h1>
              <h2>Coding is Love</h2>
              <p>Software engineering is the branch of computer science that deals with the design, development, testing, and maintenance 
                of software applications. Software engineers apply engineering principles and knowledge of programming languages to build 
                software solutions for end users.</p>
            </div>
            <div class="project-img">
              <img src="/img/welcome/software_en.jpg" alt="img">
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>Networking</h1>
              <h2>Coding is Love</h2>
              <p>Networking is the exchange of information and ideas among people with a common profession or special interest, usually
                 in an informal social setting. Networking often begins with a single point of common ground.</p>
            </div>
            <div class="project-img">
              <img src="/img/welcome/Networking.jpg" alt="img">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Projects Section -->
   
    <!-- About Section -->
    <section id="about">
      <h1 class="section-title">About <span>Us</span></h1>
      <p>We are a student at Cambodia Acedemy of Digital Techology</p>
      <div class="about container">
        <div class="col">
          <div class="about-img">
            <div class="item">
              <img src="/img//welcome/team/samdy.jpg" alt="img">
              <div class="inner">
                <div class="info">
                    <h5>Phin Samdy</h5>
                    <p>Handsome Boy</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/samedy.phin.5"><span class="fa fa-facebook"></span></a>
                        <a href=""><span class="fa fa-instagram"></span></a>
                        <a href=""><span class="fa fa-linkedin"></span></a>
                        <a href=""><span class="fa fa-youtube"></span></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="about-img">
            <div class="item">
              <img src="/img/welcome/team/sonai.jpg" alt="img">
              <div class="inner">
                <div class="info">
                    <h5>Kuy Sonai</h5>
                    <p>Friendly Boy</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/sonai.real.5"><span class="fa fa-facebook"></span></a>
                        <a href=""><span class="fa fa-instagram"></span></a>
                        <a href=""><span class="fa fa-linkedin"></span></a>
                        <a href=""><span class="fa fa-youtube"></span></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="about-img">
            <div class="item">
              <img src="/img/team/kanha.jpg" alt="img">
              <div class="inner">
                <div class="info">
                    <h5>Nov SOvankanha</h5>
                    <p>Bek SLoy Girl</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100005593997000"><span class="fa fa-facebook"></span></a>
                        <a href=""><span class="fa fa-instagram"></span></a>
                        <a href=""><span class="fa fa-linkedin"></span></a>
                        <a href=""><span class="fa fa-youtube"></span></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
  
    <!-- Contact Section -->
    <section id="contact">
      <div class="contact container">
        <div>
          <h1 class="section-title">Contact <span>info</span></h1>
        </div>
        <div class="contact-items">
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
            <div class="contact-info">
              <h1>Phone</h1>
              <h2>+1 234 123 1234</h2>
              <h2>+1 234 123 1234</h2>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
            <div class="contact-info">
              <h1>Email</h1>
              <h2>info@student/cadt.edu.kh</h2>
              <h2>info@gmail.com</h2>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
            <div class="contact-info">
              <h1>Address</h1>
              <h2>Bridge 2, National Road 6A, Sangkat Prek Leap, Khan Chroy Changva, Phnom Penh</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  
    <!-- Footer -->
    <section id="footer">
      <div class="footer container">
        <div class="brand">
          <h1><span>Q</span>uiz <span>S</span>ystem</h1>
        </div>
        <h2>Your Complete Web Solution</h2>
        <div class="social-icon">
          <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
          </div>
          <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
          </div>
          <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/link.png" /></a>
          </div>
          <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
          </div>
        </div>
        <p>Team 8</p>
      </div>
    </section>
    <!-- End Footer -->
    <script src="/js/welcome.js"></script>
  </body>
</html>