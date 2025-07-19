<?php
/**
 * The main template file
 *
 * @package XYZ_White_Label
 */

get_header(); ?>

<main>
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <i class="fas fa-rocket"></i>
                        <span><?php echo get_theme_mod('hero_badge_text', 'Trusted by 500+ Agencies'); ?></span>
                    </div>
                    <h1 class="hero-title"><?php echo get_theme_mod('hero_title', 'Your Trusted White Label'); ?> <span class="gradient-text"><?php echo get_theme_mod('hero_title_gradient', 'Web Development'); ?></span> <?php echo get_theme_mod('hero_title_end', 'Partner'); ?></h1>
                    <p class="hero-subtitle"><?php echo get_theme_mod('hero_subtitle', 'Ideal for Growing Digital & Design Agencies. We handle the development while you focus on growing your business.'); ?></p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number" data-target="<?php echo get_theme_mod('stat_projects', '500'); ?>">0</span>
                            <span class="stat-label"><?php echo get_theme_mod('stat_projects_label', 'Projects Delivered'); ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="<?php echo get_theme_mod('stat_agencies', '50'); ?>">0</span>
                            <span class="stat-label"><?php echo get_theme_mod('stat_agencies_label', 'Agencies Trust Us'); ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="<?php echo get_theme_mod('stat_satisfaction', '99'); ?>">0</span>
                            <span class="stat-label"><?php echo get_theme_mod('stat_satisfaction_label', '% Satisfaction'); ?></span>
                        </div>
                    </div>
                    <div class="hero-buttons">
                        <a href="<?php echo get_theme_mod('cta_button_link', '#schedule-call'); ?>" class="btn btn-primary">
                            <i class="fas fa-calendar-alt"></i>
                            <?php echo get_theme_mod('cta_button_text', 'Schedule a Call'); ?>
                        </a>
                        <a href="<?php echo get_theme_mod('demo_button_link', '#try-free'); ?>" class="btn btn-secondary">
                            <i class="fas fa-play"></i>
                            <?php echo get_theme_mod('demo_button_text', 'Watch Demo'); ?>
                        </a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="floating-card card-1">
                        <i class="fas fa-code"></i>
                        <span>Clean Code</span>
                    </div>
                    <div class="floating-card card-2">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Responsive</span>
                    </div>
                    <div class="floating-card card-3">
                        <i class="fas fa-bolt"></i>
                        <span>Fast</span>
                    </div>
                    <lottie-player 
                        src="<?php echo get_theme_mod('lottie_animation_url', 'https://assets2.lottiefiles.com/packages/lf20_2b1b2b1b.json'); ?>"
                        background="transparent"
                        speed="1"
                        style="width: 400px; height: 400px;"
                        loop
                        autoplay>
                    </lottie-player>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-cogs"></i>
                    <span><?php echo get_theme_mod('services_badge_text', 'Our Services'); ?></span>
                </div>
                <h2><?php echo get_theme_mod('services_title', 'Comprehensive Web Development Solutions'); ?></h2>
                <p><?php echo get_theme_mod('services_subtitle', 'From concept to deployment, we handle every aspect of your web development needs'); ?></p>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Custom Web Development</h3>
                    <p>Tailored web solutions built from scratch to meet your specific business requirements and goals.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Responsive Design</li>
                        <li><i class="fas fa-check"></i> Custom Functionality</li>
                        <li><i class="fas fa-check"></i> SEO Optimization</li>
                        <li><i class="fas fa-check"></i> Performance Optimization</li>
                        <li><i class="fas fa-check"></i> Security Implementation</li>
                    </ul>
                    <div class="service-price">
                        <span class="price">Starting at $2,500</span>
                        <span class="delivery">2-4 weeks delivery</span>
                    </div>
                </div>
                <div class="service-card featured" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-badge">Most Popular</div>
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-commerce Solutions</h3>
                    <p>Complete online store development with payment processing, inventory management, and customer tools.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Payment Gateway Integration</li>
                        <li><i class="fas fa-check"></i> Inventory Management</li>
                        <li><i class="fas fa-check"></i> Order Processing</li>
                        <li><i class="fas fa-check"></i> Customer Accounts</li>
                        <li><i class="fas fa-check"></i> Analytics & Reporting</li>
                    </ul>
                    <div class="service-price">
                        <span class="price">Starting at $5,000</span>
                        <span class="delivery">4-6 weeks delivery</span>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <h3>WordPress Development</h3>
                    <p>Custom WordPress themes, plugins, and full-site development with advanced functionality.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Custom Theme Development</li>
                        <li><i class="fas fa-check"></i> Plugin Development</li>
                        <li><i class="fas fa-check"></i> Site Migration</li>
                        <li><i class="fas fa-check"></i> Performance Optimization</li>
                        <li><i class="fas fa-check"></i> Security Hardening</li>
                    </ul>
                    <div class="service-price">
                        <span class="price">Starting at $1,500</span>
                        <span class="delivery">1-3 weeks delivery</span>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3>API Integration</h3>
                    <p>Seamless integration of third-party APIs and services to enhance your website functionality.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Payment APIs (Stripe, PayPal)</li>
                        <li><i class="fas fa-check"></i> Social Media Integration</li>
                        <li><i class="fas fa-check"></i> Email Marketing APIs</li>
                        <li><i class="fas fa-check"></i> CRM Integration</li>
                        <li><i class="fas fa-check"></i> Custom API Development</li>
                    </ul>
                    <div class="service-price">
                        <span class="price">Starting at $1,000</span>
                        <span class="delivery">1-2 weeks delivery</span>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Maintenance & Support</h3>
                    <p>Ongoing website maintenance, updates, security monitoring, and technical support services.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Regular Updates</li>
                        <li><i class="fas fa-check"></i> Security Monitoring</li>
                        <li><i class="fas fa-check"></i> Backup Management</li>
                        <li><i class="fas fa-check"></i> Performance Monitoring</li>
                        <li><i class="fas fa-check"></i> 24/7 Support</li>
                    </ul>
                    <div class="service-price">
                        <span class="price">Starting at $200/month</span>
                        <span class="delivery">Ongoing service</span>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO & Marketing</h3>
                    <p>Search engine optimization and digital marketing services to improve your online visibility.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Technical SEO Audit</li>
                        <li><i class="fas fa-check"></i> Keyword Research</li>
                        <li><i class="fas fa-check"></i> Content Optimization</li>
                        <li><i class="fas fa-check"></i> Local SEO</li>
                        <li><i class="fas fa-check"></i> Analytics Setup</li>
                    </ul>
                    <div class="service-price">
                        <span class="price">Starting at $500/month</span>
                        <span class="delivery">Ongoing service</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="technologies-section" id="technologies">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-layer-group"></i>
                    <span><?php echo get_theme_mod('technologies_badge_text', 'Technologies'); ?></span>
                </div>
                <h2><?php echo get_theme_mod('technologies_title', 'Built with Modern Technologies'); ?></h2>
                <p><?php echo get_theme_mod('technologies_subtitle', 'We use cutting-edge technologies to deliver fast, scalable, and maintainable solutions'); ?></p>
            </div>
            <div class="technologies-grid">
                <div class="tech-category">
                    <h3>Frontend</h3>
                    <div class="tech-items">
                        <div class="tech-item" data-aos="zoom-in">
                            <img src="https://img.icons8.com/color/96/000000/react-native.png" alt="React">
                            <span>React</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="100">
                            <img src="https://img.icons8.com/color/96/000000/vue-js.png" alt="Vue.js">
                            <span>Vue.js</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="200">
                            <img src="https://img.icons8.com/color/96/000000/javascript.png" alt="JavaScript">
                            <span>JavaScript</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="300">
                            <img src="https://img.icons8.com/color/96/000000/html-5.png" alt="HTML5">
                            <span>HTML5</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="400">
                            <img src="https://img.icons8.com/color/96/000000/css3.png" alt="CSS3">
                            <span>CSS3</span>
                        </div>
                    </div>
                </div>
                <div class="tech-category">
                    <h3>Backend</h3>
                    <div class="tech-items">
                        <div class="tech-item" data-aos="zoom-in">
                            <img src="https://img.icons8.com/color/96/000000/nodejs.png" alt="Node.js">
                            <span>Node.js</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="100">
                            <img src="https://img.icons8.com/color/96/000000/php.png" alt="PHP">
                            <span>PHP</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="200">
                            <img src="https://img.icons8.com/color/96/000000/python.png" alt="Python">
                            <span>Python</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="300">
                            <img src="https://img.icons8.com/color/96/000000/mysql-logo.png" alt="MySQL">
                            <span>MySQL</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="400">
                            <img src="https://img.icons8.com/color/96/000000/mongodb.png" alt="MongoDB">
                            <span>MongoDB</span>
                        </div>
                    </div>
                </div>
                <div class="tech-category">
                    <h3>Tools & Platforms</h3>
                    <div class="tech-items">
                        <div class="tech-item" data-aos="zoom-in">
                            <img src="https://img.icons8.com/color/96/000000/git.png" alt="Git">
                            <span>Git</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="100">
                            <img src="https://img.icons8.com/color/96/000000/docker.png" alt="Docker">
                            <span>Docker</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="200">
                            <img src="https://img.icons8.com/color/96/000000/amazon-web-services.png" alt="AWS">
                            <span>AWS</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="300">
                            <img src="https://img.icons8.com/color/96/000000/wordpress.png" alt="WordPress">
                            <span>WordPress</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="400">
                            <img src="https://img.icons8.com/color/96/000000/shopify.png" alt="Shopify">
                            <span>Shopify</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <div class="section-badge">
                        <i class="fas fa-users"></i>
                        <span><?php echo get_theme_mod('about_badge_text', 'About Us'); ?></span>
                    </div>
                    <h2><?php echo get_theme_mod('about_title', 'Why Choose XYZ?'); ?></h2>
                    <p><?php echo get_theme_mod('about_description', 'We specialize in providing high-quality web development services that help agencies scale their business and deliver exceptional results to their clients.'); ?></p>
                    <div class="features-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-content">
                                <h4><?php echo get_theme_mod('feature_1_title', 'Premium Quality Code'); ?></h4>
                                <p><?php echo get_theme_mod('feature_1_description', 'Clean, maintainable, and scalable code following industry best practices'); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="feature-content">
                                <h4><?php echo get_theme_mod('feature_2_title', 'Fast Turnaround Time'); ?></h4>
                                <p><?php echo get_theme_mod('feature_2_description', 'Quick delivery without compromising on quality or attention to detail'); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h4><?php echo get_theme_mod('feature_3_title', '24/7 Support'); ?></h4>
                                <p><?php echo get_theme_mod('feature_3_description', 'Round-the-clock support to ensure your projects run smoothly'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="<?php echo get_theme_mod('about_image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'); ?>" alt="Team working on web development" class="about-img">
                    <div class="experience-badge">
                        <span class="years"><?php echo get_theme_mod('experience_years', '5+'); ?></span>
                        <span class="text"><?php echo get_theme_mod('experience_text', 'Years of Experience'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-star"></i>
                    <span><?php echo get_theme_mod('testimonials_badge_text', 'Testimonials'); ?></span>
                </div>
                <h2><?php echo get_theme_mod('testimonials_title', 'What Our Clients Say'); ?></h2>
                <p><?php echo get_theme_mod('testimonials_subtitle', 'Trusted by agencies worldwide for their web development needs'); ?></p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card" data-aos="fade-up">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p>"Outstanding quality and communication. XYZ has helped us scale our agency significantly. Their attention to detail is unmatched."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="John Smith" class="author-img">
                        <div class="author-info">
                            <h4>John Smith</h4>
                            <p>Creative Director, Design Studio</p>
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/80x30/3B82F6/FFFFFF?text=DesignStudio" alt="Design Studio">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p>"The best white label partner we've worked with. Fast delivery, excellent communication, and top-notch quality. Highly recommended!"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="Sarah Johnson" class="author-img">
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>CEO, Digital Agency</p>
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/80x30/10B981/FFFFFF?text=DigitalAgency" alt="Digital Agency">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section" id="schedule-call">
        <div class="container">
            <div class="cta-content">
                <div class="cta-badge">
                    <i class="fas fa-rocket"></i>
                    <span><?php echo get_theme_mod('cta_badge_text', 'Ready to Scale?'); ?></span>
                </div>
                <h2><?php echo get_theme_mod('cta_title', 'Ready to Scale Your Agency?'); ?></h2>
                <p><?php echo get_theme_mod('cta_description', 'Get in touch with us to discuss your white label web development needs and start growing your business today.'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo get_theme_mod('cta_button_link', '#contact'); ?>" class="btn btn-primary btn-large">
                        <i class="fas fa-calendar-alt"></i>
                        <?php echo get_theme_mod('cta_button_text', 'Get Started Today'); ?>
                    </a>
                    <a href="<?php echo get_theme_mod('demo_button_link', '#demo'); ?>" class="btn btn-outline btn-large">
                        <i class="fas fa-play"></i>
                        <?php echo get_theme_mod('demo_button_text', 'Watch Demo'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <div class="section-badge">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo get_theme_mod('contact_badge_text', 'Contact Us'); ?></span>
                    </div>
                    <h2><?php echo get_theme_mod('contact_title', 'Get In Touch'); ?></h2>
                    <p><?php echo get_theme_mod('contact_description', 'Ready to start your next project? Let\'s discuss how we can help your agency grow and succeed.'); ?></p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4>Email</h4>
                                <p><?php echo get_theme_mod('contact_email', 'hello@xyz.com'); ?></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4>Phone</h4>
                                <p><?php echo get_theme_mod('contact_phone', '+1 (555) 123-4567'); ?></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4>Location</h4>
                                <p><?php echo get_theme_mod('contact_location', 'San Francisco, CA'); ?></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4>Business Hours</h4>
                                <p><?php echo get_theme_mod('contact_hours', 'Mon-Fri: 9AM-6PM PST'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <div class="form-header">
                        <h3>Send us a message</h3>
                        <p>We'll get back to you within 24 hours</p>
                    </div>
                    <form id="contactForm" class="contact-form-inner">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" name="company">
                        </div>
                        <div class="form-group">
                            <label for="service">Service Interest</label>
                            <select id="service" name="service">
                                <option value="">Select a service</option>
                                <option value="custom-web-development">Custom Web Development</option>
                                <option value="ecommerce-solutions">E-commerce Solutions</option>
                                <option value="wordpress-development">WordPress Development</option>
                                <option value="api-integration">API Integration</option>
                                <option value="maintenance-support">Maintenance & Support</option>
                                <option value="consultation">Consultation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="budget">Project Budget</label>
                            <select id="budget" name="budget">
                                <option value="">Select budget range</option>
                                <option value="1000-5000">$1,000 - $5,000</option>
                                <option value="5000-10000">$5,000 - $10,000</option>
                                <option value="10000-25000">$10,000 - $25,000</option>
                                <option value="25000+">$25,000+</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Project Details *</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tell us about your project requirements, timeline, and any specific features you need..." required></textarea>
                        </div>
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <span>Subscribe to our newsletter for updates and tips</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-large">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 