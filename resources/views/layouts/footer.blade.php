
<!-- GlowNest Footer -->
<footer class="glownest-footer">

    <div class="footer-container">

        <!-- Brand Section -->
        <div class="footer-brand">
            <a href="/" class="footer-logo">
                <img src="{{ asset('assests/images/glownest-logo.png') }}"
                     alt="GlowNest Logo">
                <span>GlowNest</span>
            </a>

            <p>
                Your Beauty, Your Glow!
                Discover skincare, makeup and beauty essentials
                that make you feel confident every day.
            </p>

            <div class="footer-social">
                <a href="#" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" aria-label="YouTube">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="#" aria-label="Pinterest">
                    <i class="fa-brands fa-pinterest-p"></i>
                </a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop All</a></li>
                <li><a href="/categories">Categories</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>

        <!-- Customer Care -->
        <div class="footer-links">
            <h3>Customer Care</h3>
            <ul>
                <li><a href="/contact">Contact Support</a></li>
                <li><a href="/track-order">Track Your Order</a></li>
                <li><a href="/returns">Returns & Refunds</a></li>
                <li><a href="/faqs">FAQs</a></li>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div class="footer-newsletter">
            <h3>Stay in the Glow ✨</h3>
            <p>
                Subscribe to get beauty tips, new arrivals
                and special offers.
            </p>

            <form action="#" method="POST" class="newsletter-form">
                <input type="email"
                       name="email"
                       placeholder="Enter your email"
                       aria-label="Email address"
                       required>

                <button type="submit" aria-label="Subscribe">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>

            <small>Join our beauty community 💗</small>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <p>
            &copy; {{ date('Y') }} GlowNest. All rights reserved.
        </p>

        <div class="footer-policies">
            <a href="/privacy-policy">Privacy Policy</a>
            <a href="/terms">Terms & Conditions</a>
        </div>
    </div>

</footer>
