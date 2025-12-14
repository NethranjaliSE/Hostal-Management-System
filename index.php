<!DOCTYPE html>
<html>
<head>
    <title>HMS Kelaniya</title>
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="kelaniya.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
  

   
</head>
<body>
    <!-- Header section starts -->
<header class="header">
<a href="#" class="logo">
    <img src="uokname.png" alt="Kelaniya Hostel Management Logo" style="width: 300px; height: auto; mix-blend-mode: multiply; ">
    
</a>

    <nav class="navbar">
        <a href="#home" class="smooth-scroll">Home</a>
        <a href="#about" class="smooth-scroll">About</a>
        <a href="#rooms" class="smooth-scroll">Rooms</a>
        
        <a href="#contact" class="smooth-scroll">Contact</a>
        <div class="login-dropdown">
            <button class="login-button">Login</button>
            <div class="login-options">
                <a href="student_login.php">Students</a>
                <a href="admin_login.php">Admin</a>
            </div>
        </div>
    </nav>
    <div id="menu-btn" class="smooth-scroll"> </div>
</header>
<!-- Header section ends -->


    

    <!-- Home section starts -->
    <section class="home" id="home">
        
        <div class="content">
            <h3 style="color:white;">UNIVERSITY OF KELANIYA</h3>
            <div class="highlighted-paragraph-container">
                <p class="highlighted-text" style="color:#FAFAFA">
                The University of Kelaniya, located in Kelaniya, Sri Lanka, is one of the major public universities in the country. It was officially established in 1959, building on the foundation of the Vidyalankara Pirivena, a historic Buddhist monastic college. The university has grown into a respected institution known for its commitment to academic excellence, research, and cultural studies. Abbreviated as UoK, the University of Kelaniya offers a wide range of programs in the fields of humanities, social sciences, science, commerce, computing, and medicine, serving students from across Sri Lanka and beyond.               </p>
            </div>
            <a href="student_login.php" class="btn" id="book-room-btn">Book Your Hostel Room</a>
        </div>
    </section>
    <!-- Home section ends -->

   <!-- Icons section starts -->
<section class="icons-container">
    <div class="icons">
        <div class="icon-frame">
            <img src="event.jpg" alt="Events Hosted">
        </div>
        <h3>100+</h3>
        <p>Events Hosted</p>
    </div>
    <div class="icons">
        <div class="icon-frame">
            <img src="speaker.jpeg" alt="Featured Speakers">
        </div>
        <h3>50+</h3>
        <p>Featured Speakers</p>
    </div>
    <div class="icons">
        <div class="icon-frame">
            <img src="attend.jpeg" alt="Happy Attendees">
        </div>
        <h3>5000+</h3>
        <p>Happy Attendees</p>
    </div>
    <div class="icons">
        <div class="icon-frame">
            <img src="upcoming.jpg" alt="Upcoming Events">
        </div>
        <h3>10+</h3>
        <p>Upcoming Events</p>
    </div>
</section>
<!-- Icons section ends -->


    <!-- About section starts -->
    <section class="about" id="about">
    <h1 class="heading"><span>About</span> us</h1>
    <div class="row">
        <div class="image">
            <img src="kelanilogo.jpg" alt="kelanilogo">
        </div>
        <div class="content">
            <p>"Welcome to the University of Kelaniya, one of Sri Lanka’s leading public universities. Established in 1959, it is known for academic excellence, innovative research, and strong community ties. With a wide range of study programs and modern facilities, the university provides a supportive environment for students to learn, grow, and lead. Located in the historic city of Kelaniya, the university is committed to shaping future leaders and making a positive impact on society."</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </div>
</section>

    <!-- About section ends -->

    <section id="rooms">
        <h2>Available Rooms</h2>
        <div class="room-container">
            <div class="room-card">
                <img src="room1.jpg" alt="Room 1" class="room-image">
                <div class="room-title">Boys Hostel</div>
                <div class="room-description"> Perfect for sharing with a friend.</div>
            </div>

            <div class="room-card">
                <img src="room2.jpg" alt="Room 2" class="room-image">
                <div class="room-title">Girls Hostel</div>
                <div class="room-description"> Perfect for sharing with a friend.</div>
            </div>

        </div>
    </section>

    

    <!-- Contact section starts -->
    <section class="contact" id="contact">
        
    </section>
    <!-- Contact section ends -->

 
<!-- Footer section starts -->
<section class="footer">
  <div class="box-container">

    <div class="box">
      <h3>Quick Links</h3>
      <a href="#"><i class="fas fa-angle-right"></i> Home</a>
      <a href="#about" class="smooth-scroll"><i class="fas fa-angle-right"></i> About</a>
      <a  href="#rooms" class="smooth-scroll"><i class="fas fa-angle-right"></i> Rooms</a>
      <a href="#"><i class="fas fa-angle-right"></i> Contact</a>
      <a href="#"><i class="fas fa-angle-right"></i> Login</a>
    </div>

    <div class="box">
      <h3>Follow Us</h3>
      <a href="https://web.facebook.com/ukelaniya/?_rdc=1&_rdr#"><i class="fab fa-facebook-f"></i> Facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
    </div>

    
      <div class="box">
      <h3>Contact Us</h3>
      <a href="#"><i class="fas fa-phone "></i>0743428278</a>
     <a href="mailto:oneuok@kln.ac.lk">
    <i class="fas fa-envelope"></i> info@kelaniya.com
</a>
      <a href="#"><i class="fas fa-map-marker-alt"></i>University of Kelaniya, Sri Lanka</p></a>
</div>

    <div class="box">
      <h3>Our Faculties</h3>
      <a href="https://science.kln.ac.lk/"><i class="fas fa-university"></i> Faculty of Science</a>
      <a href="#"><i class="fas fa-university"></i> Faculty of Medicine</a>
      <a href="#"><i class="fas fa-university"></i> Faculty of Commerce</a>
    </div>

  </div>
</section>
<div class="copyright">
    &copy; 2025 <span>University of Kelaniya</span>. All Rights Reserved.
</div>




<!-- Footer section ends -->


    <script>
    // Add smooth scrolling to all links with a class of 'smooth-scroll'
    document.querySelectorAll('a.smooth-scroll').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
    
            const targetId = this.getAttribute('href').substring(1); // Get the target section's ID
            const targetSection = document.getElementById(targetId);
    
            // Scroll to the target section smoothly
            window.scrollTo({
                behavior: 'smooth',
                top: targetSection.offsetTop
            });
        });
    });
    </script>

    <!-- ScrollMagic CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>

<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

<script>// Initialize ScrollMagic controller
    const controller = new ScrollMagic.Controller();
    
    // Create a GSAP timeline for the home section animation
    const homeAnimation = gsap.timeline();
    homeAnimation.from('.home h3', { opacity: 0, y: 50, duration: 0.5 });
    homeAnimation.from('.home p', { opacity: 0, y: 50, duration: 0.5 });
    homeAnimation.from('.home .btn', { opacity: 0, y: 50, duration: 0.5 });
    
    // Create a ScrollMagic scene for the home section
    const homeScene = new ScrollMagic.Scene({
        triggerElement: '.home',
        triggerHook: 0.5, // Adjust as needed
        reverse: false,
    })
        .setTween(homeAnimation)
        .addTo(controller);
    
    // Create similar animations and scenes for other sections
    // Example for the about section:
    const aboutAnimation = gsap.timeline();
    aboutAnimation.from('.about .image img', { opacity: 0, x: -50, duration: 0.5 });
    aboutAnimation.from('.about .heading , .about p,.about .btn', { opacity: 0, x: -50, duration: 0.5 });
   

    
    
    const aboutScene = new ScrollMagic.Scene({
        triggerElement: '.about',
        triggerHook: 0.3, 
        reverse: false,
    })
        .setTween(aboutAnimation)
        .addTo(controller);

// JavaScript to toggle login options
document.addEventListener("DOMContentLoaded", function() {
    const loginButton = document.querySelector(".login-button");
    const loginOptions = document.querySelector(".login-options");

    loginButton.addEventListener("click", function() {
        loginOptions.style.display = (loginOptions.style.display === "block") ? "none" : "block";
    });

    // Close the login options when clicking outside
    window.addEventListener("click", function(event) {
        if (!event.target.matches('.login-button')) {
            loginOptions.style.display = "none";
        }
    });
});

    </script>

</body>
</html>
