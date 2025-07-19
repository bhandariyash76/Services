# White Label Frontend

A modern, responsive website template for white label web development agencies. Built with HTML5, CSS3, and vanilla JavaScript.

## Features

- 🎨 **Modern Design**: Clean, professional design with smooth animations
- 📱 **Fully Responsive**: Optimized for all devices and screen sizes
- ⚡ **Fast Performance**: Lightweight and optimized for speed
- ♿ **Accessible**: Built with accessibility best practices
- 🎭 **Lottie Animations**: Integrated Lottie animations for engaging visuals
- 🎯 **SEO Ready**: Semantic HTML structure for better search engine optimization

## Project Structure

```
white-label-frontend/
├── index.html          # Main HTML file
├── css/
│   └── style.css      # Main stylesheet
├── js/
│   └── script.js      # JavaScript functionality
├── assets/
│   ├── images/        # Image assets (add your images here)
│   └── lottie/        # Lottie animation files (add your animations here)
└── README.md          # Project documentation
```

## Getting Started

### Prerequisites

- A modern web browser
- A local web server (optional, but recommended)

### Installation

1. Clone or download this project
2. Open `index.html` in your web browser
3. For development, use a local server:
   ```bash
   # Using Python
   python -m http.server 8000
   
   # Using Node.js (if you have http-server installed)
   npx http-server
   
   # Using PHP
   php -S localhost:8000
   ```

## Customization

### Colors
The color scheme can be customized in `css/style.css`:
- Primary Blue: `#3B82F6`
- Dark Blue: `#0F172A`
- Text Colors: `#1E293B`, `#64748B`
- Background: `#FFFFFF`, `#F8FAFC`

### Typography
The project uses Google Fonts:
- **Poppins**: For headings (weights: 400, 600, 700)
- **Roboto**: For body text (weights: 400, 500)

### Content
Update the content in `index.html`:
- Company name and branding
- Service descriptions
- Contact information
- Call-to-action text

### Lottie Animations
Replace the Lottie animation URL in `index.html`:
```html
<lottie-player 
    src="your-animation-url.json"
    background="transparent"
    speed="1"
    style="width: 400px; height: 400px;"
    loop
    autoplay>
</lottie-player>
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Performance Features

- **Lazy Loading**: Images load only when needed
- **Debounced Scroll Events**: Optimized scroll handling
- **CSS Animations**: Hardware-accelerated animations
- **Minimal JavaScript**: Lightweight and fast

## Accessibility Features

- Semantic HTML structure
- Proper heading hierarchy
- Focus states for interactive elements
- Alt text for images (when added)
- Keyboard navigation support

## Mobile Features

- Responsive navigation menu
- Touch-friendly buttons
- Optimized typography for mobile
- Smooth scrolling on mobile devices

## Development

### Adding New Sections

1. Add HTML structure in `index.html`
2. Style the section in `css/style.css`
3. Add any JavaScript functionality in `js/script.js`

### Adding Images

1. Place images in `assets/images/`
2. Use relative paths: `assets/images/your-image.jpg`
3. For lazy loading, use `data-src` attribute:
   ```html
   <img data-src="assets/images/your-image.jpg" alt="Description">
   ```

### Adding Lottie Animations

1. Place animation files in `assets/lottie/`
2. Update the `src` attribute in the lottie-player element
3. Customize animation settings as needed

## Deployment

### Static Hosting
This project can be deployed to any static hosting service:
- Netlify
- Vercel
- GitHub Pages
- AWS S3
- Firebase Hosting

### WordPress Integration
The HTML structure is compatible with WordPress themes:
- Convert to PHP template files
- Replace static content with WordPress functions
- Integrate with WordPress admin panel

## License

This project is open source and available under the [MIT License](LICENSE).

## Support

For questions or support, please contact your development team.

---

**Built with ❤️ for white label web development agencies** 