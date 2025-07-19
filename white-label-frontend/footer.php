<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <?php if (get_theme_mod('footer_logo')) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('footer_logo')); ?>" alt="<?php bloginfo('name'); ?>" class="footer-logo">
                <?php else : ?>
                    <img src="https://via.placeholder.com/150x50/FFFFFF/3B82F6?text=<?php echo urlencode(get_bloginfo('name')); ?>" alt="<?php bloginfo('name'); ?>" class="footer-logo">
                <?php endif; ?>
                <p><?php echo get_theme_mod('footer_description', 'Your trusted white label web development partner. We help agencies scale their business with high-quality, custom web solutions.'); ?></p>
                <div class="social-links">
                    <?php if (get_theme_mod('social_facebook')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" aria-label="Facebook" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('social_twitter')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_twitter')); ?>" aria-label="Twitter" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('social_linkedin')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" aria-label="LinkedIn" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('social_instagram')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" aria-label="Instagram" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer-section">
                <h4><?php echo get_theme_mod('footer_services_title', 'Services'); ?></h4>
                <ul>
                    <li><a href="#services"><?php echo get_theme_mod('footer_service_1', 'Custom Web Development'); ?></a></li>
                    <li><a href="#services"><?php echo get_theme_mod('footer_service_2', 'E-commerce Solutions'); ?></a></li>
                    <li><a href="#services"><?php echo get_theme_mod('footer_service_3', 'WordPress Development'); ?></a></li>
                    <li><a href="#services"><?php echo get_theme_mod('footer_service_4', 'API Integration'); ?></a></li>
                    <li><a href="#services"><?php echo get_theme_mod('footer_service_5', 'Maintenance & Support'); ?></a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4><?php echo get_theme_mod('footer_company_title', 'Company'); ?></h4>
                <ul>
                    <li><a href="#about"><?php echo get_theme_mod('footer_about', 'About Us'); ?></a></li>
                    <li><a href="#contact"><?php echo get_theme_mod('footer_contact', 'Contact'); ?></a></li>
                    <li><a href="<?php echo get_theme_mod('footer_privacy_link', '#'); ?>"><?php echo get_theme_mod('footer_privacy', 'Privacy Policy'); ?></a></li>
                    <li><a href="<?php echo get_theme_mod('footer_terms_link', '#'); ?>"><?php echo get_theme_mod('footer_terms', 'Terms of Service'); ?></a></li>
                    <li><a href="<?php echo get_theme_mod('footer_careers_link', '#'); ?>"><?php echo get_theme_mod('footer_careers', 'Careers'); ?></a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4><?php echo get_theme_mod('footer_contact_title', 'Contact'); ?></h4>
                <p><i class="fas fa-envelope"></i> <?php echo get_theme_mod('footer_email', 'hello@xyz.com'); ?></p>
                <p><i class="fas fa-phone"></i> <?php echo get_theme_mod('footer_phone', '+1 (555) 123-4567'); ?></p>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo get_theme_mod('footer_address', 'San Francisco, CA'); ?></p>
                <div class="footer-badge">
                    <i class="fas fa-shield-alt"></i>
                    <span><?php echo get_theme_mod('footer_badge_text', 'SSL Secured'); ?></span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php echo get_theme_mod('footer_copyright_text', 'All rights reserved. | Made with'); ?> <i class="fas fa-heart"></i> <?php echo get_theme_mod('footer_copyright_end', 'for agencies'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html> 