<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Church Name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #f8f9fa;
            --dark-color: #343a40;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.8;
            color: var(--dark-color);
            background-color: #fff;
        }

        /* Navbar Customization */
        .navbar {
            transition: background-color 0.3s;
        }

        .navbar-brand i {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            font-weight: 700;
            color: rgba(255, 255, 255, 0.7);
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: white;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1549488820-2c700140224d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
        }
        
        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: fadeInDown 1s ease-in-out;
        }
        
        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-in-out 0.5s;
            animation-fill-mode: both;
        }

        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            font-weight: 700;
            animation: zoomIn 1s ease-in-out 1s;
            animation-fill-mode: both;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Scroll Arrow */
        .scroll-arrow {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 2rem;
            animation: bounce 2s infinite;
            text-decoration: none;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        /* General Section Styling */
        section {
            padding: 80px 0;
        }

        section:nth-of-type(even) {
            background-color: var(--secondary-color);
        }
        
        .section-title {
            margin-bottom: 50px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background-color: var(--primary-color);
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        /* Animate on Scroll Effects */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-on-scroll.show {
            opacity: 1;
            transform: translateY(0);
        }

        .animate-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-left.show {
            opacity: 1;
            transform: translateX(0);
        }

        .animate-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-right.show {
            opacity: 1;
            transform: translateX(0);
        }

        /* Keyframe Animations */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.5); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <i class="fas fa-church me-2"></i> Your Church Name
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sermons">Sermons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero" id="home">
        <div class="hero-content text-center">
            <h1>Welcome to Our Church</h1>
            <p>A community of faith, hope, and love. Join us Sundays at 10:00 AM.</p>
            <a href="#about" class="btn btn-custom">Learn More About Us</a>
        </div>
        <a href="#about" class="scroll-arrow"><i class="fas fa-chevron-down"></i></a>
    </section>
    <section id="about">
        <div class="container text-center">
            <h2 class="section-title">About Us</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 animate-left">
                    <p class="lead">
                        Our mission is to create a welcoming and loving community where people can grow in their relationship with God and with one another. We believe in serving our community, spreading the message of hope, and providing a space for fellowship and spiritual growth.
                    </p>
                    <a href="#" class="btn btn-outline-primary mt-4">Our Beliefs</a>
                </div>
                <div class="col-lg-6 animate-right">
                    <img src="https://images.unsplash.com/photo-1549227568-15a0c32d431d?q=80&w=2835&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded shadow" alt="A diverse church community gathering.">
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container text-center">
            <h2 class="section-title">Our Services</h2>
            <div class="row">
                <div class="col-md-4 mb-4 animate-on-scroll">
                    <div class="card p-4">
                        <div class="card-body">
                            <i class="fas fa-cross fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Sunday Worship</h5>
                            <p class="card-text">Join us for a time of worship, prayer, and an inspiring message. Sundays at 10:00 AM.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 animate-on-scroll">
                    <div class="card p-4">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Community Groups</h5>
                            <p class="card-text">Connect with others in a small group setting to grow in faith and build lasting friendships.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 animate-on-scroll">
                    <div class="card p-4">
                        <div class="card-body">
                            <i class="fas fa-hands-helping fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Outreach & Missions</h5>
                            <p class="card-text">We are committed to serving our local and global communities through various outreach programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sermons">
        <div class="container">
            <h2 class="section-title text-center">Recent Sermons</h2>
            <div class="row">
                <div class="col-lg-4 mb-4 animate-on-scroll">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hope in the Midst of Chaos</h5>
                            <p class="card-text text-muted">Pastor John Doe - October 27, 2024</p>
                            <p>An encouraging message on finding hope and peace through faith in challenging times. Listen to the full sermon to be uplifted.</p>
                            <a href="#" class="btn btn-primary btn-sm">Listen Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 animate-on-scroll">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">The Power of Forgiveness</h5>
                            <p class="card-text text-muted">Guest Speaker - October 20, 2024</p>
                            <p>A powerful teaching on the importance of forgiveness and how it can transform our lives and relationships.</p>
                            <a href="#" class="btn btn-primary btn-sm">Listen Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 animate-on-scroll">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Living a Purpose-Driven Life</h5>
                            <p class="card-text text-muted">Pastor Jane Smith - October 13, 2024</p>
                            <p>Explore what it means to live a life aligned with God's purpose for you. Discover your unique calling.</p>
                            <a href="#" class="btn btn-primary btn-sm">Listen Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">View All Sermons</a>
            </div>
        </div>
    </section>
    <section id="events">
        <div class="container">
            <h2 class="section-title text-center">Upcoming Events</h2>
            <div class="row">
                <div class="col-lg-6 mb-4 animate-left">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-calendar-alt fa-2x text-primary me-3"></i>
                                <div>
                                    <h5 class="card-title mb-0">Community Potluck</h5>
                                    <p class="mb-0">Saturday, November 2nd | 6:00 PM</p>
                                </div>
                            </div>
                            <hr>
                            <p class="card-text">Join us for a night of food, fun, and fellowship. Bring your favorite dish to share and invite your friends!</p>
                            <a href="#" class="btn btn-sm btn-outline-dark mt-2">RSVP Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 animate-right">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-book-open fa-2x text-primary me-3"></i>
                                <div>
                                    <h5 class="card-title mb-0">Weekly Bible Study</h5>
                                    <p class="mb-0">Wednesdays at 7:00 PM | Church Hall</p>
                                </div>
                            </div>
                            <hr>
                            <p class="card-text">Dive deeper into the Word of God with our weekly Bible study. All are welcome, regardless of your knowledge level.</p>
                            <a href="#" class="btn btn-sm btn-outline-dark mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">View Full Calendar</a>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container text-center">
            <h2 class="section-title">Get in Touch</h2>
            <div class="row justify-content-center animate-on-scroll">
                <div class="col-lg-8">
                    <p class="lead">
                        We'd love to hear from you. Feel free to reach out to us with any questions or to simply say hello.
                    </p>
                    <ul class="list-unstyled text-start mx-auto mt-5" style="max-width: 400px;">
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                            <span>123 Faith Street, City, State 12345</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone fa-2x text-primary me-3"></i>
                            <span>(123) 456-7890</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                            <span>info@yourchurch.org</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p>&copy; 2025 Your Church Name. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, { threshold: 0.1 });

        const hiddenElements = document.querySelectorAll('.animate-on-scroll, .animate-left, .animate-right');
        hiddenElements.forEach((el) => observer.observe(el));
    </script>
</body>
</html>