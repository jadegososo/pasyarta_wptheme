<!-- Footer -->
<footer class="footer-part">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="footer-logo">
    </div>
    <div class="footer-message">
        <p>Explore new destinations with expert advice and personalized travel planning.</p>
        <p><a href="<?php echo home_url(); ?>">Home</a> | <a href="<?php echo site_url('/destinations'); ?>">Destinations</a> | <a href="<?php echo site_url('/about-us'); ?>">About Us</a></p>
    </div>
    <div class="footer-contact">
        <div class="footer-icons">
            <!-- Facebook Link -->
            <a href="https://www.facebook.com/jade.ian.cabagnan.gososo/" target="_blank">
            <i class="fab fa-facebook"></i> </a>

            <!-- Instagram Link -->
            <a href="https://instagram.com" target="_blank">
            <i class="fab fa-instagram"></i></a>

            <!-- Gmail Link -->
            <a href="mailto:gososojadeian02@gmail.com">
            <i class="fab fa-google"></i></a>
        </div>
        <p>gososojadeian02@gmail.com</p>
        <p>09280381054</p>
    </div>

</footer>

<!-- Add wp_footer for WordPress -->
<?php wp_footer(); ?>
</body>
</html>