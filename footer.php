<?php
// Footer content
?>
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>St. Antony's Church, Bharathapally</p>
            <p>Email: info@stantonyschurch.org</p>
            <p>Phone: +91 123 456 7890</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <p>Stay connected through our social media channels.</p>
            <div class="social-icons">
                <a href="#"><img src="facebook.png" alt="Facebook"></a>
                <a href="#"><img src="twitter.png" alt="Twitter"></a>
                <a href="#"><img src="instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© <?php echo date("Y"); ?> St. Antony's Church, Bharathapally. All rights reserved.</p>
    </div>
</footer>
<style>
    footer {
        background-color: #801e1eff;
        color: white;
        padding: 2rem 1rem;
        margin-top: 2rem;
    }
    .footer-container {
        display: flex;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
    }
    .footer-section {
        flex: 1;
        margin: 1rem;
        min-width: 200px;
    }
    .footer-section h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    .footer-section p, .footer-section ul li {
        font-size: 1rem;
        line-height: 1.6;
    }
    .footer-section ul {
        list-style: none;
        padding: 0;
    }
    .footer-section ul li a {
        color: white;
        text-decoration: none;
    }
    .footer-section ul li a:hover {
        color: #d4a017;
    }
    .social-icons a {
        margin-right: 1rem;
    }
    .social-icons img {
        width: 24px;
        height: 24px;
    }
    .footer-bottom {
        text-align: center;
        padding-top: 1rem;
        border-top: 1px solid #6b4e31;
        margin-top: 1rem;
    }
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
        }
        .footer-section {
            text-align: center;
        }
    }
</style>