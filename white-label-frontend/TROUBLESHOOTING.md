# WordPress Theme Troubleshooting Guide

## 🚨 **Theme Stuck Loading - Quick Fix**

If your theme is stuck loading, follow these steps:

### **Step 1: Check File Structure**
Make sure your theme folder has these files:
```
white-label-frontend/
├── index.php          ✅ (Main template)
├── header.php         ✅ (Header template)
├── footer.php         ✅ (Footer template)
├── functions.php      ✅ (Theme functions)
├── style.css          ✅ (Main stylesheet)
├── js/
│   └── script.js      ✅ (JavaScript)
└── assets/            ✅ (Images and other assets)
```

### **Step 2: Verify File Permissions**
Set correct file permissions:
- **Folders**: 755 (drwxr-xr-x)
- **Files**: 644 (-rw-r--r--)

### **Step 3: Check for PHP Errors**
1. Enable WordPress debug mode in `wp-config.php`:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```

2. Check the debug log at `/wp-content/debug.log`

### **Step 4: Common Issues & Solutions**

#### **Issue 1: White Screen**
**Cause**: PHP syntax error in theme files
**Solution**: 
- Check `functions.php` for syntax errors
- Verify all PHP tags are properly closed
- Check for missing semicolons

#### **Issue 2: CSS Not Loading**
**Cause**: Incorrect file paths
**Solution**:
- Verify `style.css` has WordPress theme header
- Check that CSS file is being enqueued properly

#### **Issue 3: JavaScript Errors**
**Cause**: Missing dependencies or syntax errors
**Solution**:
- Check browser console for errors
- Verify jQuery is loaded before your script
- Check for missing closing tags

#### **Issue 4: Images Not Loading**
**Cause**: Incorrect image paths
**Solution**:
- Use `get_template_directory_uri()` for theme images
- Check image URLs are accessible

### **Step 5: Quick Test**

1. **Create a minimal test theme**:
```php
// style.css
/*
Theme Name: Test Theme
*/

body { background: #fff; }
```

```php
// index.php
<?php get_header(); ?>
<h1>Test Page</h1>
<?php get_footer(); ?>
```

```php
// header.php
<!DOCTYPE html>
<html>
<head><title>Test</title></head>
<body>
```

```php
// footer.php
</body>
</html>
```

2. **Test this minimal theme first**
3. **If it works, gradually add your content back**

### **Step 6: Server Requirements**

Make sure your server has:
- PHP 7.4 or higher
- WordPress 5.0 or higher
- Sufficient memory limit (256MB+)

### **Step 7: Alternative Upload Method**

If the theme still won't load:

1. **Upload via FTP/SFTP**:
   - Connect to your server
   - Navigate to `/wp-content/themes/`
   - Upload the entire folder
   - Rename to `xyz-white-label`

2. **Manual activation**:
   - Go to WordPress admin
   - Appearance > Themes
   - Activate the theme manually

### **Step 8: Emergency Fallback**

If nothing works:

1. **Switch to default theme** (Twenty Twenty-Four)
2. **Check server error logs**
3. **Contact your hosting provider**
4. **Use the static HTML version** instead

### **Step 9: Debug Checklist**

- [ ] All required files present
- [ ] No PHP syntax errors
- [ ] File permissions correct
- [ ] WordPress debug enabled
- [ ] Browser console checked
- [ ] Server error logs checked
- [ ] Memory limit sufficient
- [ ] PHP version compatible

### **Step 10: Get Help**

If you're still having issues:

1. **Check WordPress support forums**
2. **Review theme development documentation**
3. **Contact your hosting provider**
4. **Use the static HTML version as backup**

## 🎯 **Quick Fix Commands**

### **Via SSH (if available)**:
```bash
# Set correct permissions
find /path/to/theme -type d -exec chmod 755 {} \;
find /path/to/theme -type f -exec chmod 644 {} \;

# Check for syntax errors
php -l functions.php
php -l index.php
```

### **Via FTP**:
1. Download theme files
2. Check file integrity
3. Re-upload with correct permissions
4. Clear WordPress cache

## ✅ **Success Indicators**

Your theme is working when you see:
- ✅ Theme appears in Appearance > Themes
- ✅ Theme can be activated
- ✅ Homepage loads without errors
- ✅ CSS styles are applied
- ✅ JavaScript functionality works
- ✅ Contact forms function properly

## 🆘 **Emergency Contact**

If you need immediate help:
1. Switch to default WordPress theme
2. Use the static HTML version temporarily
3. Contact your hosting provider
4. Check WordPress.org support forums 