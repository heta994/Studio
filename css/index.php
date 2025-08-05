<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Innovare – Founded 2025</title>
    <meta name="description" content="Studio Innovare – Founded 2025 by Ar Harpal Patel. Architecture and interior design studio where innovation meets creativity.">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400|Open+Sans:400,600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header / Hero Section -->
    <header id="home">
        <div class="hero-bg"></div>
        <nav class="navbar">
            <a href="#home" class="nav-logo">
                <img src="images/studio-innovare-logo.jpg" alt="Studio Innovare Logo">
            </a>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-toggle" id="navToggle">&#9776;</div>
        </nav>
        <div class="hero-content">
            <img src="images/studio-innovare-logo.jpg" alt="Studio Innovare Logo" class="hero-logo">
            <h1>STUDIO INNOVARE</h1>
            <p>Founded 2025 by Ar Harpal Patel</p>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="section about">
        <div class="container">
            <h2>About</h2>
            <p>
                Studio Innovare is a space where design meets innovation. Founded by Ar Harpal Patel in 2025, the studio delivers impactful architecture and interior design rooted in creativity and functionality.
            </p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="images/project1.jpg" alt="Project 1">
                    <div class="project-info">
                        <h3>Project One</h3>
                        <p>Modern residential design with sustainable features.</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="images/project2.jpg" alt="Project 2">
                    <div class="project-info">
                        <h3>Project Two</h3>
                        <p>Innovative office space for creative collaboration.</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="images/project3.jpg" alt="Project 3">
                    <div class="project-info">
                        <h3>Project Three</h3>
                        <p>Elegant interiors blending form and function.</p>
                    </div>
                </div>
                <!-- Add more project cards as needed -->
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section services">
        <div class="container">
            <h2>Services</h2>
            <div class="services-grid">
                <div class="service-block">
                    <h3>Architectural Design</h3>
                </div>
                <div class="service-block">
                    <h3>Interior Styling</h3>
                </div>
                <div class="service-block">
                    <h3>Urban Planning</h3>
                </div>
                <div class="service-block">
                    <h3>3D Visualization</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section testimonials">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="testimonial-carousel" id="testimonialCarousel">
                <div class="testimonial active">
                    <p>“A visionary design studio led by Ar Harpal Patel.”</p>
                </div>
                <div class="testimonial">
                    <p>“Studio Innovare reshaped our space with elegance and purpose.”</p>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
            <div class="carousel-controls">
                <span class="carousel-dot active"></span>
                <span class="carousel-dot"></span>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="section team">
        <div class="container">
            <h2>Team</h2>
            <div class="team-member">
                <img src="images/studio-innovare-logo.jpg" alt="Ar Harpal Patel">
                <h3>Ar Harpal Patel</h3>
                <p>Founder & Chief Architect</p>
                <p>Creative thinker. Detail-driven designer. Founded Studio Innovare in 2025 to revolutionize design thinking.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact">
        <div class="container">
            <h2>Contact</h2>
            <?php if (isset($_GET['success'])): ?>
                <div class="form-success">Thank you! Your message has been sent.</div>
            <?php elseif (isset($_GET['error'])): ?>
                <div class="form-error">Sorry, there was an error sending your message.</div>
            <?php endif; ?>
            <form action="mail.php" method="POST" class="contact-form">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
            <div class="contact-info">
                <p><strong>Address:</strong> 123 Placeholder St, City, Country</p>
                <p><strong>Phone:</strong> +1 234 567 8900</p>
                <p><strong>Email:</strong> contact@studioinnovare.com</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <img src="images/studio-innovare-logo.jpg" alt="Studio Innovare Logo" class="footer-logo">
            <p>&copy; 2025 Studio Innovare. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>