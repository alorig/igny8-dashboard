# Igny8 Dashboard WordPress Theme

A complete WordPress admin-only theme for the Igny8 internal dashboard system.

## Overview

The Igny8 Dashboard theme is designed specifically for internal administrative use at app.igny8.com. This theme provides no front-end functionality and is purely focused on delivering a comprehensive admin interface for managing Igny8 modules.

## Theme Structure

```
igny8-dashboard/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   └── fonts/
├── footer.php
├── functions.php
├── header.php
├── index.php
├── sidebar.php
├── dashboard.php
├── template-intelli.php
├── template-loops.php
├── template-hive.php
├── template-clusters.php
├── template-keywords.php
├── style.css
└── README.md
```

## Features

### Core Modules
- **INTELLI**: Intelligence and analytics dashboard
- **LOOPS**: Automation and workflow management
- **HIVE**: Collaborative workspace and communication
- **Clusters**: Data clustering and organization
- **Keywords**: Keyword management and optimization

### Design Features
- Modern, responsive admin interface
- Clean, professional design with blue accent colors
- Fixed sidebar navigation
- Card-based layout for module overviews
- Hover effects and smooth animations
- Mobile-responsive design

## Installation

1. Upload the `igny8-dashboard` folder to `/wp-content/themes/`
2. Activate the theme through WordPress Admin → Appearance → Themes
3. Access the Igny8 Dashboard via the new "Igny8" menu item in the WordPress admin

## Usage

### Accessing Modules
- Navigate to the "Igny8" menu in the WordPress admin sidebar
- Click on any module (INTELLI, LOOPS, HIVE, Clusters, Keywords) to access its dashboard
- Use the sidebar navigation to switch between modules

### Customization
- Modify `assets/css/style.css` for styling changes
- Edit individual template files for module-specific content
- Update `functions.php` for menu structure modifications

## Technical Details

### Requirements
- WordPress 5.0+
- PHP 7.4+
- Admin privileges required

### File Descriptions

- **style.css**: Main theme stylesheet with theme declaration
- **functions.php**: WordPress hooks, menu registration, and admin functionality
- **header.php**: HTML head and body opening tags
- **footer.php**: HTML closing tags and WordPress footer
- **sidebar.php**: Navigation menu for all Igny8 modules
- **dashboard.php**: Main dashboard overview page
- **template-*.php**: Individual module template files

### CSS Classes

Key CSS classes for customization:
- `.admin-igny8`: Main body class
- `.sidebar`: Navigation sidebar
- `.main-content`: Primary content area
- `.module-card`: Module overview cards
- `.stat-card`: Statistics display cards

## Development

### Adding New Modules
1. Create a new template file (e.g., `template-newmodule.php`)
2. Add menu item in `functions.php`
3. Create corresponding page callback function
4. Add navigation link in `sidebar.php`

### Styling
The theme uses a modern CSS Grid and Flexbox layout with:
- CSS custom properties for consistent theming
- Responsive breakpoints for mobile compatibility
- Smooth transitions and hover effects
- Professional color scheme (#3498db primary, #2c3e50 secondary)

## Support

For technical support or customization requests, contact the development team.

## Version History

- **1.0**: Initial release with core modules and admin interface

---

**Theme Name**: Igny8 Dashboard  
**Version**: 1.0  
**Author**: Alorig Systems  
**Theme URI**: https://app.igny8.com/
