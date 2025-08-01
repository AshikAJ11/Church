<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church_2</title>
    <!-- Bootstrap CSS (5.3.3) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- WOW.js Animation Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <style>
        .navbar {
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s ease;
            background-color: transparent;
        }

        .navbar.scrolled {
            background-color: #801e1eff !important;
        }

        .navbar.scrolled .nav-link,
        .navbar.scrolled .navbar-brand i {
            color: white !important;
        }

        .logo {
            height: 50px;
        }

        .nav-item {
            padding-left: 15px;
            padding-right: 15px;
        }

        .nav-link {
            transition: color 0.3s ease-in-out;
        }

        .donate-btn {
            background-color: #e74c3c;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                text-align: center;
            }
            .nav-item {
                padding: 10px 0;
            }
            .donate-btn {
                margin: 10px auto;
                display: block;
                width: fit-content;
            }
        }

        @media (max-width: 767px) {
            .navbar-brand i {
                font-size: 18px;
            }
            .logo {
                height: 40px;
            }
        }
        .bg_color {
            background-color: rgb(29, 22, 54);
        }
        .main_bg_color {
            background-color: #f8f3f3;
            /* background-color:rgb(126, 141, 172); */
        }
        .text-justify {
            text-align: justify;
        }
        p {
            font-family: ; /* Empty value, remove or specify a font */
        }
        .cursive {
            font-family: cursive;
            color: rgb(226, 41, 41);
        }
        .cursive1 {
            font-family: cursive;
            color: rgb(226, 41, 41);
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow" style="z-index: 1050;">
        <div class="container">
            <a class="navbar-brand logo-container" href="index.php">
                <img src="images/logo.jpg" class="logo" alt="Logo">
                <i class="ms-2" style="font-size: 24px;">St.Antony'S Church</i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-black" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="">About Us</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="">Festivals</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="events.php">Events</a></li>
                <li class="nav-item"><a class="nav-link text-black" href="">Contact Us</a></li>
                </ul>   
                <div class="d-flex ms-3">
                    <a href="donate.php" class="donate-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </nav>
    <script>
    new WOW().init();
</script>

    <!-- Bootstrap JS (5.3.3) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.querySelector(".navbar");
            const navLinks = document.querySelectorAll(".nav-link");
            const navbarCollapse = document.querySelector(".navbar-collapse");

            // Navbar Scroll Behavior
            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            });

            // Close navbar on mobile when clicking a link
            navLinks.forEach(link => {
                link.addEventListener("click", () => {
                    if (window.innerWidth <= 991) {
                        navbarCollapse.classList.remove("show");
                    }
                });
            });
        });

        // Intersection Observer for Animations (optional, remove if not used)
        const sections = document.querySelectorAll('.animate-section');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                } else {
                    entry.target.classList.remove('animate__animated', 'animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        sections.forEach(section => observer.observe(section));
    </script>
</body>
</html>