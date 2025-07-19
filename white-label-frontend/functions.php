<?php
/**
 * XYZ White Label Frontend functions and definitions
 *
 * @package XYZ_White_Label
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function xyz_white_label_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add image sizes
    add_image_size('hero-image', 1200, 600, true);
    add_image_size('testimonial-avatar', 100, 100, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'xyz-white-label'),
        'footer' => esc_html__('Footer Menu', 'xyz-white-label'),
    ));
}
add_action('after_setup_theme', 'xyz_white_label_setup');

/**
 * Enqueue scripts and styles
 */
function xyz_white_label_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('xyz-white-label-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue JavaScript
    wp_enqueue_script('xyz-white-label-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('xyz-white-label-script', 'xyz_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('xyz_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'xyz_white_label_scripts');

/**
 * Customizer additions
 */
function xyz_white_label_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'xyz-white-label'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_badge_text', array(
        'default' => 'Trusted by 500+ Agencies',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_badge_text', array(
        'label' => __('Hero Badge Text', 'xyz-white-label'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Your Trusted White Label',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'xyz-white-label'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_title_gradient', array(
        'default' => 'Web Development',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title_gradient', array(
        'label' => __('Hero Title Gradient Part', 'xyz-white-label'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_title_end', array(
        'default' => 'Partner',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title_end', array(
        'label' => __('Hero Title End', 'xyz-white-label'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'Ideal for Growing Digital & Design Agencies. We handle the development while you focus on growing your business.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'xyz-white-label'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    // Statistics
    $wp_customize->add_setting('stat_projects', array(
        'default' => '500',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control('stat_projects', array(
        'label' => __('Projects Delivered', 'xyz-white-label'),
        'section' => 'hero_section',
        'type' => 'number',
    ));
    
    $wp_customize->add_setting('stat_agencies', array(
        'default' => '50',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control('stat_agencies', array(
        'label' => __('Agencies Trust Us', 'xyz-white-label'),
        'section' => 'hero_section',
        'type' => 'number',
    ));
    
    $wp_customize->add_setting('stat_satisfaction', array(
        'default' => '99',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control('stat_satisfaction', array(
        'label' => __('Satisfaction %', 'xyz-white-label'),
        'section' => 'hero_section',
        'type' => 'number',
    ));
    
    // Contact Information
    $wp_customize->add_section('contact_section', array(
        'title' => __('Contact Information', 'xyz-white-label'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default' => 'hello@xyz.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label' => __('Email Address', 'xyz-white-label'),
        'section' => 'contact_section',
        'type' => 'email',
    ));
    
    $wp_customize->add_setting('contact_phone', array(
        'default' => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label' => __('Phone Number', 'xyz-white-label'),
        'section' => 'contact_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('contact_location', array(
        'default' => 'San Francisco, CA',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_location', array(
        'label' => __('Location', 'xyz-white-label'),
        'section' => 'contact_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('contact_hours', array(
        'default' => 'Mon-Fri: 9AM-6PM PST',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_hours', array(
        'label' => __('Business Hours', 'xyz-white-label'),
        'section' => 'contact_section',
        'type' => 'text',
    ));
    
    // Social Media
    $wp_customize->add_section('social_section', array(
        'title' => __('Social Media', 'xyz-white-label'),
        'priority' => 40,
    ));
    
    $social_platforms = array(
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'linkedin' => 'LinkedIn',
        'instagram' => 'Instagram',
    );
    
    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting('social_' . $platform, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        
        $wp_customize->add_control('social_' . $platform, array(
            'label' => $label . ' URL',
            'section' => 'social_section',
            'type' => 'url',
        ));
    }
    
    // Logo Settings
    $wp_customize->add_setting('logo_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
        'label' => __('Header Logo', 'xyz-white-label'),
        'section' => 'title_tagline',
        'settings' => 'logo_image',
    )));
    
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => __('Footer Logo', 'xyz-white-label'),
        'section' => 'title_tagline',
        'settings' => 'footer_logo',
    )));
}
add_action('customize_register', 'xyz_white_label_customize_register');

/**
 * Register custom post types
 */
function xyz_white_label_post_types() {
    // Testimonials
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'xyz-white-label'),
            'singular_name' => __('Testimonial', 'xyz-white-label'),
            'add_new' => __('Add New', 'xyz-white-label'),
            'add_new_item' => __('Add New Testimonial', 'xyz-white-label'),
            'edit_item' => __('Edit Testimonial', 'xyz-white-label'),
            'new_item' => __('New Testimonial', 'xyz-white-label'),
            'view_item' => __('View Testimonial', 'xyz-white-label'),
            'search_items' => __('Search Testimonials', 'xyz-white-label'),
            'not_found' => __('No testimonials found', 'xyz-white-label'),
            'not_found_in_trash' => __('No testimonials found in trash', 'xyz-white-label'),
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
    ));
    
    // Services
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'xyz-white-label'),
            'singular_name' => __('Service', 'xyz-white-label'),
            'add_new' => __('Add New', 'xyz-white-label'),
            'add_new_item' => __('Add New Service', 'xyz-white-label'),
            'edit_item' => __('Edit Service', 'xyz-white-label'),
            'new_item' => __('New Service', 'xyz-white-label'),
            'view_item' => __('View Service', 'xyz-white-label'),
            'search_items' => __('Search Services', 'xyz-white-label'),
            'not_found' => __('No services found', 'xyz-white-label'),
            'not_found_in_trash' => __('No services found in trash', 'xyz-white-label'),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
        'has_archive' => true,
    ));
}
add_action('init', 'xyz_white_label_post_types');

/**
 * Add custom meta boxes
 */
function xyz_white_label_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'xyz-white-label'),
        'xyz_white_label_testimonial_meta_box',
        'testimonial',
        'normal',
        'high'
    );
    
    add_meta_box(
        'service_details',
        __('Service Details', 'xyz-white-label'),
        'xyz_white_label_service_meta_box',
        'service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'xyz_white_label_meta_boxes');

/**
 * Testimonial meta box callback
 */
function xyz_white_label_testimonial_meta_box($post) {
    wp_nonce_field('xyz_testimonial_meta_box', 'xyz_testimonial_meta_box_nonce');
    
    $rating = get_post_meta($post->ID, 'rating', true);
    $author_name = get_post_meta($post->ID, 'author_name', true);
    $author_title = get_post_meta($post->ID, 'author_title', true);
    $company_logo = get_post_meta($post->ID, 'company_logo', true);
    $author_image = get_post_meta($post->ID, 'author_image', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="rating">Rating (1-5)</label></th>
            <td><input type="number" id="rating" name="rating" value="<?php echo esc_attr($rating); ?>" min="1" max="5" /></td>
        </tr>
        <tr>
            <th><label for="author_name">Author Name</label></th>
            <td><input type="text" id="author_name" name="author_name" value="<?php echo esc_attr($author_name); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="author_title">Author Title</label></th>
            <td><input type="text" id="author_title" name="author_title" value="<?php echo esc_attr($author_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="company_logo">Company Logo URL</label></th>
            <td><input type="url" id="company_logo" name="company_logo" value="<?php echo esc_url($company_logo); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="author_image">Author Image URL</label></th>
            <td><input type="url" id="author_image" name="author_image" value="<?php echo esc_url($author_image); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Service meta box callback
 */
function xyz_white_label_service_meta_box($post) {
    wp_nonce_field('xyz_service_meta_box', 'xyz_service_meta_box_nonce');
    
    $icon = get_post_meta($post->ID, 'service_icon', true);
    $price = get_post_meta($post->ID, 'service_price', true);
    $delivery = get_post_meta($post->ID, 'service_delivery', true);
    $features = get_post_meta($post->ID, 'service_features', true);
    $featured = get_post_meta($post->ID, 'featured_service', true);
    
    if (!is_array($features)) {
        $features = array();
    }
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="service_icon">Icon Class (FontAwesome)</label></th>
            <td><input type="text" id="service_icon" name="service_icon" value="<?php echo esc_attr($icon); ?>" class="regular-text" placeholder="fas fa-laptop-code" /></td>
        </tr>
        <tr>
            <th><label for="service_price">Price</label></th>
            <td><input type="text" id="service_price" name="service_price" value="<?php echo esc_attr($price); ?>" class="regular-text" placeholder="Starting at $2,500" /></td>
        </tr>
        <tr>
            <th><label for="service_delivery">Delivery Time</label></th>
            <td><input type="text" id="service_delivery" name="service_delivery" value="<?php echo esc_attr($delivery); ?>" class="regular-text" placeholder="2-4 weeks delivery" /></td>
        </tr>
        <tr>
            <th><label for="featured_service">Featured Service</label></th>
            <td><input type="checkbox" id="featured_service" name="featured_service" value="1" <?php checked($featured, '1'); ?> /></td>
        </tr>
        <tr>
            <th><label>Features</label></th>
            <td>
                <div id="service-features">
                    <?php foreach ($features as $index => $feature) : ?>
                        <div class="feature-row">
                            <input type="text" name="service_features[]" value="<?php echo esc_attr($feature); ?>" class="regular-text" />
                            <button type="button" class="remove-feature button">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" id="add-feature" class="button">Add Feature</button>
            </td>
        </tr>
    </table>
    
    <script>
    jQuery(document).ready(function($) {
        $('#add-feature').click(function() {
            var newRow = '<div class="feature-row"><input type="text" name="service_features[]" class="regular-text" /><button type="button" class="remove-feature button">Remove</button></div>';
            $('#service-features').append(newRow);
        });
        
        $(document).on('click', '.remove-feature', function() {
            $(this).parent().remove();
        });
    });
    </script>
    <?php
}

/**
 * Save meta box data
 */
function xyz_white_label_save_meta_boxes($post_id) {
    // Testimonial meta box
    if (isset($_POST['xyz_testimonial_meta_box_nonce']) && wp_verify_nonce($_POST['xyz_testimonial_meta_box_nonce'], 'xyz_testimonial_meta_box')) {
        if (isset($_POST['rating'])) {
            update_post_meta($post_id, 'rating', sanitize_text_field($_POST['rating']));
        }
        if (isset($_POST['author_name'])) {
            update_post_meta($post_id, 'author_name', sanitize_text_field($_POST['author_name']));
        }
        if (isset($_POST['author_title'])) {
            update_post_meta($post_id, 'author_title', sanitize_text_field($_POST['author_title']));
        }
        if (isset($_POST['company_logo'])) {
            update_post_meta($post_id, 'company_logo', esc_url_raw($_POST['company_logo']));
        }
        if (isset($_POST['author_image'])) {
            update_post_meta($post_id, 'author_image', esc_url_raw($_POST['author_image']));
        }
    }
    
    // Service meta box
    if (isset($_POST['xyz_service_meta_box_nonce']) && wp_verify_nonce($_POST['xyz_service_meta_box_nonce'], 'xyz_service_meta_box')) {
        if (isset($_POST['service_icon'])) {
            update_post_meta($post_id, 'service_icon', sanitize_text_field($_POST['service_icon']));
        }
        if (isset($_POST['service_price'])) {
            update_post_meta($post_id, 'service_price', sanitize_text_field($_POST['service_price']));
        }
        if (isset($_POST['service_delivery'])) {
            update_post_meta($post_id, 'service_delivery', sanitize_text_field($_POST['service_delivery']));
        }
        if (isset($_POST['service_features'])) {
            $features = array_map('sanitize_text_field', $_POST['service_features']);
            $features = array_filter($features); // Remove empty values
            update_post_meta($post_id, 'service_features', $features);
        }
        update_post_meta($post_id, 'featured_service', isset($_POST['featured_service']) ? '1' : '0');
    }
}
add_action('save_post', 'xyz_white_label_save_meta_boxes');

/**
 * AJAX contact form handler
 */
function xyz_white_label_contact_form() {
    check_ajax_referer('xyz_nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    
    $to = get_theme_mod('contact_email', 'hello@xyz.com');
    $subject = 'New Contact Form Submission from ' . $name;
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_contact_form', 'xyz_white_label_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'xyz_white_label_contact_form'); 